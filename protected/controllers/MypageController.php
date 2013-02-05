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
			
		$sendInterest = $user->interestSender;	
		$suserId = array();
		if(sizeof($sendInterest) > 0){
		$userInterest = array();
		foreach ($sendInterest as $value) {
			$suserId[] = $value->receiverId;
		}
		}
		
		
		$receiveInterest = $user->interestReceiver;
		$ruserId = array();
		if(sizeof($receiveInterest) > 0){
		$userInterest = array();
		foreach ($receiveInterest as $value) {
			$ruserId[] = $value->senderId;
		}
		}
		if(sizeof($suserId) > 0 || sizeof($ruserId) > 0 )
		{
			
			$intersetUserIds = array_merge($suserId,$ruserId);
			$userList = implode(",", $intersetUserIds);
			$scondition = " userId in ({$userList}) AND userId != {$user->userId} ";
			if(isset($blockIdList) && sizeof($blockId) > 0 )
			$scondition .= " AND userId NOT IN({$blockIdList})"; 
			$profileUpdatedUsers = Users::model()->with(array(
			'profileUpdates' => array('order'=> 'statusTime DESC' ),)
			)->findAll(array('condition'=>$scondition));
			
		}
		
		
		if(isset($user->partnerpreferences))
		{
			$condition  = Utilities::getPartnerPreference($user->partnerpreferences);
			$usersV = ViewUsers::model()->findAll(array('condition'=>$condition,
			'select'=>'t.userId',
    		'distinct'=>true,
			'order'=> 'createdOn DESC' ));
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
		$this->render('noreference');
	}

	public function actionAccount()
	{
		$user = Yii::app()->session->get('user');
		$sql = "SELECT count(*) as pCount FROM profileviews WHERE ( FIND_IN_SET( {$user->userId},visitedId))";
		$command=Yii::app()->db->createCommand($sql);
		$profileCount = $command->queryRow();
		$this->render('myaccount',array('user' =>$user,'profileCount' => $profileCount['pCount']));
	}
	

	public function actionAddressbook()
	{
			$loggedUser = Yii::app()->session->get('user');
			if(isset($loggedUser->addressBook) && sizeof($loggedUser->addressBook) > 0 ){
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
	
	
	public function actionDocument()
	{
		$this->render('document');
	}
	
	public function actionAstro()
	{
		$this->render('astro');
	}
	
	public function actionShortlist()
	{
		$this->forward('//shortlist/index');
	}
	
	public function actionBookmark()
	{
		$this->forward('//bookmark/index');
	}
	
	public function actionSettings()
	{
		$this->forward('//privacy');
	}
	
	public function actionHighlightprofile()
	{
		$this->render('highlightprofile');
	}
	
	public function actionPartnerpreference()
	{
		$user = Yii::app()->session->get('user');
		if(isset($user->partnerpreferences))
		{
			
			$this->render('partnerpreference',array('user'=> $user));
		}
	}
	
	public function actionEditpartner()
	{
		$user = Yii::app()->session->get('user');
		
		if(isset($_POST['ageFrom']) && isset($user->partnerpreferences)) {
		$partner = $user->partnerpreferences;
		if(isset($_POST['ageFrom']))
		$partner->ageFrom = $_POST['ageFrom'];
		if(isset($_POST['ageTo']))
		$partner->ageTo = $_POST['ageTo'];
		if(isset($_POST['maritial']))
		$partner->maritalStatus = implode(",", $_POST['maritial']);
		
		if(isset($_POST['child']))
		$partner->haveChildren = $_POST['child'];
		if(isset($_POST['heightFrom']))
		$partner->heightFrom = $_POST['heightFrom'];
		if(isset($_POST['heightTo']))
		$partner->heightTo = $_POST['heightTo'];
		if(isset($_POST['status']))
		$partner->physicalStatus = $_POST['status'];
		if(isset($_POST['religion']))
		$partner->religion = $_POST['religion'];
		if(isset($_POST['caste1']))
		$partner->caste = implode(",", $_POST['caste1']);
		if(isset($_POST['star1']))
		$partner->star = implode(",", $_POST['star1']);
		if(isset($_POST['jathakam']))
		$partner->sudham = $_POST['jathakam'];
		if(isset($_POST['dhosham']))
		$partner->dosham = $_POST['dhosham'];
		if(isset($_POST['eat']))
		$partner->eatingHabits = implode(",", $_POST['eat']);
		if(isset($_POST['drink']))
		$partner->drinkingHabits = implode(",", $_POST['drink']);
		if(isset($_POST['smoke']))
		$partner->smokingHabits = implode(",", $_POST['smoke']);
		if(isset( $_POST['country1']))
		$partner->countries = implode(",", $_POST['country1']);
		if(isset($_POST['state1']))
		$partner->states = implode(",", $_POST['state1']);
		if(isset($_POST['district1']))
		$partner->districts = implode(",", $_POST['district1']);
		if(isset($_POST['place1']))
		$partner->places = implode(",", $_POST['place1']);
		if(isset($_POST['language1']))
		$partner->languages = implode(",", $_POST['language1']);
		if(isset($_POST['citizen1']))
		$partner->citizenship = implode(",", $_POST['citizen1']);
		if(isset($_POST['occupation1']))
		$partner->occupation = implode(",", $_POST['occupation1']);
		if(isset($_POST['income']))
		$partner->annualIncome = $_POST['income'];
		if(isset($_POST['partnerDesc']))
		$partner->partnerDescription = $_POST['partnerDesc'];
		
		$partner->save();
		$this->forward('partnerpreference');
		}
		
		else if(isset($user->partnerpreferences))
		{
			
			$this->render('editpartner',array('partner'=> $user->partnerpreferences));
		}
	}
	
	public function actionProfile()
	{
		$user = Yii::app()->session->get('user');
		$this->render('profile');
	}
	
}