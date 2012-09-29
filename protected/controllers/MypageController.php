<?php
/*
 *
 * $Id$
 --------------------------------------------------------------------------------------------------------------------------
 * Information contained in this file is the intellectual property of MarryDoor Plc
 * Copyright © 2011 MarryDoor. All Rights Reserved.
 * ---------------------------------------------------------------------------------------------------------------------------
 *
 * @author  Ageesh K Gopinath
 * @title MypageController.php
 * @description <Description of this class>
 *  @filesource <URL>
 *  @version <Revision>
 */
class MypageController extends Controller
{

	public function beforeAction(CAction $action)
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
		//$condition = "userId in ($userIds)";	
		$scondition = "FIND_IN_SET('{$user->userId}',profileIDs)";
		$profileBlock = ProfileBlock::model()->findAll(array('condition'=>$scondition));
		
		$blockId = array();
		foreach ($profileBlock as $key => $value) {
			$blockId[] = $value->userId;
		}
		$blockIdList = implode(",", $blockId);
			
		if(isset($user->partnerpreferences))
		{
			$condition  = Utilities::getPartnerPreference($user->partnerpreferences);
			$usersV = ViewUsers::model()->findAll(array('condition'=>$condition,
			'select'=>'t.userId',
    		'distinct'=>true,
			'order'=> 'createdOn DESC' ));
		
		$sendInterest = $user->interestSender;	
		if(sizeof($sendInterest) > 0){
		$suserId = array();
		$userInterest = array();
		foreach ($sendInterest as $value) {
			$suserId[] = $value->receiverId;
		}
		}
		
		
		$receiveInterest = $user->interestReceiver;
		if(sizeof($receiveInterest) > 0){
		$ruserId = array();
		$userInterest = array();
		foreach ($receiveInterest as $value) {
			$ruserId[] = $value->senderId;
		}
		}
		$intersetUserIds = array_merge($suserId,$ruserId);
		if(sizeof($intersetUserIds) > 0)
		{
			$userList = implode(",", $intersetUserIds);
			$scondition = " userId in ({$userList}) AND userId != {$user->userId} ";
			if(isset($blockIdList) && sizeof($blockId) > 0 )
			$scondition .= " AND userId NOT IN({$blockIdList})"; 
			$profileUsers = Users::model()->findAll(array('condition'=>$scondition,'order'=> 'createdOn DESC' ));
			
		}
		
		
		
		
		
		$userIds = array();
		foreach ($usersV as $key => $value) {
			$userIds[] = $value->userId; 
		}

			if(sizeof($userIds) > 0 )
			{
				$userList = implode(",", $userIds);
				$scondition = " userId in ({$userList}) AND userId != {$user->userId} ";
				if(isset($blockIdList) && sizeof($blockId) > 0 )
				$scondition .= " AND userId NOT IN({$blockIdList})"; 
				
				$users = Users::model()->findAll(array(
				'condition'=>$scondition,
				'order'=> 'createdOn DESC' ));

				

				$highLightUser = array();
				$normalUser = array();
				foreach ($users as $key => $value) {
					if($value->highlighted == 1 )
					$highLightUser[] = $value;
					else
					$normalUser[] = $value;
				}
				if(sizeof($normalUser) > 0)
				{
				$totalUser = sizeof($normalUser);
				$totalPage = ceil($totalUser/10);
				$this->render('index',array('highlight'=>$highLightUser,'normal'=>$normalUser,'totalUser'=>$totalUser,'totalPage' => $totalPage));
				}
				
			}
			else 
			$this->render('index');
		}
		else
		{
			$this->render('index');
		}
	}

	public function actionMyprofile()
	{
		$this->render('myprofile');
	}

	public function actionContact()
	{
		$this->render('mycontact');
	}

	public function actionReference()
	{
		$user = Yii::app()->session->get('user');
		$referenceList = $user->references;
		if(isset($referenceList) )
		{
			$this->render('myreference',array('referenceList'=>$referenceList));
		}
		else
		$this->render('myreference');
	}

	public function actionAccount()
	{
		$user = Yii::app()->session->get('user');
		$sql = "SELECT count(*) as pCount FROM profileviews WHERE ( FIND_IN_SET( {$user->userId},visitedId))";
		$command=Yii::app()->db->createCommand($sql);
		$profileCount = $command->queryRow();
		$this->render('myaccount',array('profileCount' => $profileCount['pCount']));
	}

	public function actionAlbum()
	{
		$user = Yii::app()->session->get('user');
		$photos = new Photos();
		$photosList = $photos->findAll('userId='.$user->userId);
		$this->render('myalbum',array('photosList' => $photosList));
	}

	public function actionAddressbook()
	{
		$loggedUser = Yii::app()->session->get('user');
		if(isset($loggedUser->addressBook)){
			$userIds = $loggedUser->addressBook->visitedId;
			$condition = "userId in ({$userIds}) and userId != {$loggedUser->userId} ";
			$users = Users::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
			$this->render('addressBook',array('users'=>$users));
		}

		else
		$this->render('addressBook');
	}


}