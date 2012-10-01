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
		$message = new Messages();
		$messages = $message->findAll('receiverId='.$user->userId);
		$this->render('index',array('messages'=>$messages));
	}
	
	public function actionSent()
	{
		$user = Yii::app()->session->get('user');
		$message = new Messages();
		$messages = $message->findAll('senderId='.$user->userId);
		$this->render('sent',array('messages'=>$messages));
	}
	

	public function actionAcknowledgement()
	{
		$user = Yii::app()->session->get('user');
		$this->render('acknowledgement');
	}

	public function actionCompose()
	{
		$user = Yii::app()->session->get('user');
		if(isset($_POST['addMessage']) && $_POST['addMessage'] == "Send"){
			$msg = trim($_POST['userMessage']);
			if($msg != ""){
				$message = new Messages();
				$message->senderId = $user->userId;
				$message->receiverId = Yii::app()->session->get('profileUserId');
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