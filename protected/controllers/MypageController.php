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
			$profileUpdatedUsers = Users::model()->with(array(
			'profileUpdates' => array('order'=> 'statusTime DESC' ),)
			)->findAll(array('condition'=>$scondition));
			
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
				$this->render('index',array('highlight'=>$highLightUser,'normal'=>$normalUser,'totalUser'=>$totalUser,'totalPage' => $totalPage,'profileUpdates'=>$profileUpdatedUsers));
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

	// album actions
	public function actionAlbum()
	{
		$user = Yii::app()->session->get('user');
		$album = new Album();
		$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";
		$albumId = isset($_REQUEST['albumId']) ? $_REQUEST['albumId'] : 0;
		if($action == "delete"){
			$photo = $album->find('userId='.$user->userId.' and albumId='.$albumId);
			if(count($photo) > 0){
				$path = Utilities::getDirectory('images',array('profile',$user->marryId));
				$targetFile = Utilities::getFullFilePath($path, $photo->imageName);
				if(file_exists($targetFile)){
					if(unlink($targetFile)){
						$album->deleteByPk($albumId);
					}
				}
			}
		}elseif($action == "setprofilephoto"){
			$photo = $album->find('userId='.$user->userId.' and albumId='.$albumId);
			if(count($photo) > 0){
				// set profile picture
				$photos = new Photos();
				$photos->updateAll(array('profileImage'=>0),'userId='.$user->userId);  // unset the existing
				$photos->userId = $user->userId;
				$photos->imageName = $photo->imageName;
				$photos->profileImage = 1;
				$photos->save();
				
				//delete from album
				$album->deleteByPk($albumId);
			}
		}
		$photosList = $album->findAll('userId='.$user->userId);
		$this->render('myalbum',array('photosList' => $photosList));
	}
	
	
}