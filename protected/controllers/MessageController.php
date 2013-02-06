
<?php

class MessageController extends Controller
{
	 public function beforeAction()
        {
                $user = Yii::app()->session->get('user');
                if(!isset($user)) {
                        $this->redirect(Yii::app()->user->loginUrl);
                        return false;
                }       
                return true;
        }  
	
	public function actionIndex()
	{
		$user = Yii::app()->session->get('user');
		$sql = "SELECT * FROM view_messages WHERE receiverId = {$user->userId}";
		$command=Yii::app()->db->createCommand($sql);
		$inbox = $command->queryAll();
		
		$sql = "SELECT * FROM view_messages WHERE senderId = {$user->userId}";
		$command=Yii::app()->db->createCommand($sql);
		$outbox = $command->queryAll();
		
		$sql = "SELECT * FROM view_messages WHERE receiverId = {$user->userId} and status = 2";
		$command=Yii::app()->db->createCommand($sql);
		$ackowledge = $command->queryAll();
		$this->render('index',array('inbox'=>$inbox,'outbox'=>$outbox,'ackowledge'=>$ackowledge,'page'=>'inbox'));
	}
	
	public function actionSent()
	{
		$user = Yii::app()->session->get('user');
		$sql = "SELECT * FROM view_messages WHERE receiverId = {$user->userId}";
		$command=Yii::app()->db->createCommand($sql);
		$inbox = $command->queryAll();
		
		$sql = "SELECT * FROM view_messages WHERE senderId = {$user->userId}";
		$command=Yii::app()->db->createCommand($sql);
		$outbox = $command->queryAll();
		
		$sql = "SELECT * FROM view_messages WHERE receiverId = {$user->userId} and status = 2";
		$command=Yii::app()->db->createCommand($sql);
		$ackowledge = $command->queryAll();
		
		$this->render('index',array('inbox'=>$inbox,'outbox'=>$outbox,'ackowledge'=>$ackowledge,'page'=>'outbox'));
	}
	

	public function actionAcknowledgement()
	{
		$user = Yii::app()->session->get('user');
		$sql = "SELECT * FROM view_messages WHERE receiverId = {$user->userId}";
		$command=Yii::app()->db->createCommand($sql);
		$inbox = $command->queryAll();
		
		$sql = "SELECT * FROM view_messages WHERE senderId = {$user->userId}";
		$command=Yii::app()->db->createCommand($sql);
		$outbox = $command->queryAll();
		
		$sql = "SELECT * FROM view_messages WHERE receiverId = {$user->userId} and status = 2";
		$command=Yii::app()->db->createCommand($sql);
		$ackowledge = $command->queryAll();
		
		$this->render('index',array('inbox'=>$inbox,'outbox'=>$outbox,'ackowledge'=>$ackowledge,'page'=>'acknowledgement'));
	}
	
	public function actionConversation()
	{
		$user = Yii::app()->session->get('user');
		$sql = "SELECT * FROM view_messages WHERE receiverId = {$user->userId} and status = 2";
		$command=Yii::app()->db->createCommand($sql);
		$messages = $command->queryAll();
		$this->render('conversation');
	}
	
	public function actionCompose()
	{
		$user = Yii::app()->session->get('user');
		if(Yii::app()->session->itemAt('profileUserId')){
			$receiverId = Yii::app()->session->get('profileUserId');
		}elseif(isset($_POST['receiverId'])){
			$receiverId = (int)$_POST['receiverId'];
		}
		if(isset($_POST['addMessage']) && $_POST['addMessage'] == "Send"){
			$msg = trim($_POST['userMessage']);
			if($msg != ""){
				$message = new Messages();
				$message->senderId = $user->userId;
				$message->receiverId = $receiverId;
				$message->message = $msg;
				$message->sendDate = date('Y-m-d h:i:s');
				$message->save();
				$success = Yii::t('success','composeSuccess');
			}else{
				$success = Yii::t('error','composeError');
			}
		}
		$this->render('compose',array('message'=>$success));
	}		
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}