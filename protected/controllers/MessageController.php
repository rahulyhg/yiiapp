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
		if(isset($_POST['selectedIds']) and $_POST['selectedIds'] != ''){
			$selectedIds = $_POST['selectedIds'];
			$tab =  $_POST['selectedTab'];
			if($tab == 'inbox' || $tab == 'acknowledgement'){
			$query = "delete from messages where receiverId ='.$user->userId.' and messageId in($selectedIds)";
			}elseif($tab == 'outbox'){
				$query = "delete from messages where senderId ='.$user->userId.' and messageId in($selectedIds)";
			}
			Utilities::executeRawQuery($query);
		}
		$sql = "SELECT * FROM view_messages WHERE receiverId = {$user->userId} and (status = 0 or status =1)";
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
		$sql = "SELECT * FROM view_messages WHERE receiverId = {$user->userId} and (status = 0 or status =1)";
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
		$sql = "SELECT * FROM view_messages WHERE receiverId = {$user->userId} and (status = 0 or status =1)";
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
		$senderId = isset($_REQUEST['senderId']) ? $_REQUEST['senderId']:0;
		if(isset($_POST['selectedIds']) and $_POST['selectedIds'] != ''){
			$selectedIds = $_POST['selectedIds'];
			$query = "delete from messages where messageId in($selectedIds)";
			Utilities::executeRawQuery($query);
			$this->redirect(Utilities::createAbsoluteUrl('message','conversation',array('senderId'=>$senderId)));
			Yii::app()->end();
		}
		
		if(isset($_POST['message']) && $_POST['message'] != ""){
			$msg = trim($_POST['message']);
			$senderId = isset($_REQUEST['senderId']) ? $_REQUEST['senderId']:0;
			if($msg != ""){
				$message = new Messages();
				$message->senderId = $user->userId;
				$message->receiverId = $senderId;
				$message->message = $msg;
				$message->status = 1;
				$message->sendDate = date('Y-m-d h:i:s');
				$message->save();
				$this->redirect(Utilities::createAbsoluteUrl('message','conversation',array('senderId'=>$senderId)));
				Yii::app()->end();
			}
		}
		
		$sql = "SELECT * FROM view_messages WHERE (receiverId = {$user->userId} and senderId = {$senderId}) or (receiverId = {$senderId} and senderId = {$user->userId}) and status !=0 order by messageId asc";
		$command=Yii::app()->db->createCommand($sql);
		$messages = $command->queryAll();
		$this->render('conversation',array('messages'=>$messages,'user'=>$user,'senderId'=>$senderId));
	}
	
	public function actionCompose()
	{
		$user = Yii::app()->session->get('user');
		$receiverId = isset($_REQUEST['receiverId']) ? $_REQUEST['receiverId']:0;
		$userObj = new Users();
		$receiver = $userObj->find("userId=".$receiverId);
		if(isset($_POST['message']) && $_POST['message'] != ""){
			$msg = trim($_POST['message']);
			$receiverId = isset($_REQUEST['receiverId']) ? $_REQUEST['receiverId']:0;
			if($msg != ""){
				$message = new Messages();
				$message->senderId = $user->userId;
				$message->receiverId = $receiverId;
				$message->message = $msg;
				$message->status = 1;
				$message->sendDate = date('Y-m-d h:i:s');
				$message->save();
				$this->redirect(Utilities::createAbsoluteUrl('message','compose',array('receiverId'=>$receiverId,'success'=>true)));
				Yii::app()->end();
			}
		}
		$this->layout= '//layouts/popup';
		$this->render('compose',array('message'=>$success,'receiverId'=>$receiverId,'receiver'=>$receiver));
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