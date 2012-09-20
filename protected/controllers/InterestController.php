<?php

class InterestController extends Controller
{
	public function actionIndex()
	{
		
		if(isset($_POST['key']) && isset($_POST['userId']))
		{										  		
			if($_POST['key'] == 'sent')
			{
				$user = 1;
				$userIds =  $_POST['userId'];
				$sql = "UPDATE interests SET status = 3,statusChange= now() WHERE senderId = {$user} and receiverId in ({$userIds})";
				$command=Yii::app()->db->createCommand($sql);
				$results=$command->query();
				
				
				//$sendI
				$this->forward('sent');	
			}
			if($_POST['key'] == 'accept')
			{
				
				$user = 1;
				$userIds =  $_POST['userId'];
				$sql = "UPDATE interests SET status = 1,statusChange= now() WHERE senderId  in ({$userIds}) and receiverId = {$user}";
				$command=Yii::app()->db->createCommand($sql);
				$results=$command->query();
				
				
				//$sendI
				$this->forward('receive');	
				
			}
			
			if($_POST['key'] == 'decline')
			{
				$user = 1;
				$userIds =  $_POST['userId'];
				$sql = "UPDATE interests SET status = 2,statusChange= now() WHERE senderId  in ({$userIds}) and receiverId = {$user}";
				$command=Yii::app()->db->createCommand($sql);
				$results=$command->query();
				
				
				//$sendI
				$this->forward('receive');	
			}
		}
		
		
		
		$this->render('index');
	}
	
	/**
	 *  Interest sent
	 * Enter description here ...
	 */
	public function actionSent()
	{
		$user = Users::model()->findByPk(1);
		$sendInterest = $user->interestSender(array('condition'=>'status != 3'));
		if(sizeof($sendInterest) > 0){
		$userId = array();
		$userInterest = array();
		foreach ($sendInterest as $value) {
			$userId[] = $value->receiverId;
			$userInterest[$value->receiverId] = $value->sendDate;
		}
		$userIds = implode(",", $userId);
		$condition = "userId in ($userIds)";
		$users = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
		$this->render('sent',array('user'=>$users,'interest'=>$userInterest));
		}
		else
		{
			$this->render('sent');
		}

	}

	/**
	 * Profiles accepted your interest
	 * Enter description here ...
	 */
	public function actionAccept()
	{
		$user = Users::model()->findByPk(1);
		$sendInterest = $user->interestSender(array('condition'=>'status=1'));
		
		if(sizeof($sendInterest) > 0){
		$userId = array();
		$userInterest = array();
		foreach ($sendInterest as $value) {
			$userId[] = $value->receiverId;
			$userInterest[$value->receiverId] = $value->sendDate;
		}
		$userIds = implode(",", $userId);
		$condition = "userId in ($userIds)";
		$users = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
		$this->render('accept',array('user'=>$users,'interest'=>$userInterest));
		}
		else
		{
			$this->render('accept');
		}
		
		
	}
	
	/**
	 * 
	 * Profiles declined your interest
	 * Enter description here ...
	 */
	public function actionDecline()
	{
		$user = Users::model()->findByPk(1);
		$sendInterest = $user->interestSender(array('condition'=>'status= 2'));
		
		if(sizeof($sendInterest) > 0){
		$userId = array();
		$userInterest = array();
		foreach ($sendInterest as $value) {
			$userId[] = $value->receiverId;
			$userInterest[$value->receiverId] = $value->sendDate;
		}
		$userIds = implode(",", $userId);
		$condition = "userId in ($userIds)";
		$users = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
		$this->render('decline',array('user'=>$users,'interest'=>$userInterest));
		}
		else
		{
			$this->render('decline');
		}
	}
	/**
	 * Interest received
	 * Enter description here ...
	 */
	public function actionReceive()
	{
		
	$user = Users::model()->findByPk(1);
		$receiveInterest = $user->interestReceiver(array('condition'=>'status = 0'));
		if(sizeof($receiveInterest) > 0){
		$userId = array();
		$userInterest = array();
		foreach ($receiveInterest as $value) {
			$userId[] = $value->senderId;
			$userInterest[$value->senderId] = $value->sendDate;
		}
		$userIds = implode(",", $userId);
		$condition = "userId in ($userIds)";
		$users = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
		$this->render('receive',array('user'=>$users,'interest'=>$userInterest));
		}
		else
		{
			$this->render('receive');
		}
		
		
	}
	
}