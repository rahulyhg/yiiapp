<?php

class SearchController extends Controller
{
	
	
	/**
	 * if the user is not logged in show the index page , otherwise show the regular page
	 * Enter description here ...
	 */
	public function actionIndex()
	{
		$user = Yii::app()->session->get('user');
		if(!isset($user))
		{
			$this->render('index');
		}
		else
		{
			$this->render('regular');
		}
	}
	
	
	  /*public function beforeAction(CAction $action)
        {
        		return true;
        		if($action->id == 'byid')
        		return true;
        		if($action->id == 'basic')
        		return true;
                $user = Yii::app()->session->get('user');
                if(!isset($user)) {
                        $this->redirect(Yii::app()->user->loginUrl);
                        return false;
                }       
                return true;
        }  
	
		*/
	
	//search from front page
	public function actionBasic()
	{
	 	
	  $user = Yii::app()->session->get('user');
	  	
	  if(isset($_POST['heightStart']) && isset($_POST['heightLimit']))
		{

		$scondition = "FIND_IN_SET('{$user->userId}',profileIDs)";
		$profileBlock = ProfileBlock::model()->findAll(array('condition'=>$scondition));
		
		$blockId = array();
		foreach ($profileBlock as $key => $value) {
			$blockId[] = $value->userId;
		}
		$blockIdList = implode(",", $blockId);	
			
		if(isset($_POST['heightStart']))
		$heightFrom = $_POST['heightStart'];
		if(isset($_POST['heightLimit']))
		$heightTo = $_POST['heightLimit'];
					
		$condition = "heightId BETWEEN {$heightFrom} AND {$heightTo}";
			
	
		if(isset($_POST['endAge']) && $_POST['endAge']!= '0000' )
		{
		$endAge = $_POST['endAge'];
		$condition = "EXTRACT(YEAR from dob) = '{$endAge}'"; 
		}
		
		if(isset($_POST['bride']))
		{
		$gender = $_POST['gender'];
		$condition .= " AND gender = '{$gender}'";
		if($gender == 'M')
		$searchText.= "Male, ";
		else 
		$searchText.= "Female, ";
		}
		
		
		if(isset($_POST['religion']) && !empty($_POST['religion']))
		{
		$condition .= " AND religionId = {$_POST['religion']}";
		}
		
		if(isset($_POST['state']) && !empty($_POST['state']))
		{
		$condition .= " AND stateId = {$_POST['state']}";
		}
		
		if(isset($_POST['state']) && !empty($_POST['state']))
		{
		$condition .= " AND stateId = {$_POST['state']}";
		}
		if(isset($_POST['district']) && !empty($_POST['district']))
		{
		$condition .= " AND distictId = {$_POST['district']}";
		}
		
		
		if(isset($_POST['caste']) && !empty($_POST['caste']))
		{
		$caste = $_POST['caste'];
		$condition .= " AND casteId = {$caste}";
		}
		
		
		if(isset($_POST['bodyColor']))
		{
			$condition .= " AND complexion = {$_POST['bodyColor']}";
			//maritalStatus 	
		}
		
		if(isset($_POST['bodyType']))
		{
			$condition .= " AND bodyType = {$_POST['bodyType']} ";
			//maritalStatus 	
		}
		
		if(isset($_POST['motherTounge']) && !empty($_POST['motherTounge']))
		{
		$condition .= " AND FIND_IN_SET('{$_POST['motherTounge']}',languages)";
		}

		if(isset($_POST['photo']))
		{
				$condition .= " AND photo = 1 ";
		}
		
		$usersV = ViewUsers::model()->findAll(array('condition'=>$condition,
		'order'=> 'createdOn DESC' ));
		
		
		$userIds = array();
		foreach ($usersV as $key => $value) {
			$userIds[] = $value->userId; 
		}
		
		$userList = implode(",", $userIds);
		$scondition = " userId in ({$userList}) and userId != {$user->userId} ";
		if(isset($blockIdList) && sizeof($blockId) > 0 )
		$scondition .= " AND userId NOT IN({$blockIdList})";
		$users = Users::model()->findAll(array('condition'=>$scondition,'order'=> 'createdOn DESC' ));
		
		$highLightUser = array();
		$normalUser = array();
		foreach ($users as $key => $value) {
			if($value->highlighted == 1 )
			$highLightUser[] = $value;
			else 
			$normalUser[] = $value;
		}
		//$user = Users::model()->find();
		if(sizeof($usersV) > 0 && sizeof($users) > 0)
		{
			
		$totalUser = sizeof($normalUser);
		$totalPage = ceil($totalUser/10);	
		$this->render('search',array('highLight' => $highLightUser,'normal'=> $normalUser,'search'=>'regular','totalUser'=>$totalUser,'totalPage' => $totalPage));
		}
		else 
		$this->render('regular',array('error'=> '*******NO RESULTS FOUND******,Please try again'));
		}
		else 
		$this->render('regular');
		
	}
	
	//basic search from the search page
	public function actionRegular()
	{
		$user = Yii::app()->session->get('user');
		if(isset($_POST['ageFrom']) && isset($_POST['ageTo']))
		{
		$scondition = "FIND_IN_SET('{$user->userId}',profileIDs)";
		$profileBlock = ProfileBlock::model()->findAll(array('condition'=>$scondition));
		$blockId = array();
		foreach ($profileBlock as $key => $value) {
			$blockId[] = $value->userId;
		}
		$blockIdList = implode(",", $blockId);
		
		$searchText = "You have searched for: ";	
		if(isset($_POST['ageFrom']))
		$ageFrom = $_POST['ageFrom'];
		if(isset($_POST['ageTo']))
		$ageTo = $_POST['ageTo'];
		$condition = "age BETWEEN {$ageFrom} AND {$ageTo} and active =1";
		
		
		if(isset($_POST['gender']))
		{
		$gender = $_POST['gender'];
		$condition .= " AND gender = '{$gender}'";
		if($gender == 'M')
		$searchText.= "Male, ";
		else 
		$searchText.= "Female, ";
		}
		
		$searchText.= "{$ageFrom} yrs to {$ageTo} yrs, ";
		$height = Utilities::getHeights();
		if(isset($_POST['heightFrom']))
		$heightFrom = $_POST['heightFrom'];
		if(isset($_POST['heightTo']))
		$heightTo = $_POST['heightTo'];
		
		$condition .= " AND heightId BETWEEN {$heightFrom} AND {$heightTo}";
		$searchText.= "{$height[$heightFrom]} to {$height[$heightTo]} , ";
		
		if(isset($_POST['religion']) && !empty($_POST['religion']))
		{
		$religion = Religion::model()->findByPk($_POST['religion']);
		$condition .= " AND religionId = {$_POST['religion']}";
		$searchText.= "Religion : $religion->name , ";
		}
		
		if(isset($_POST['caste1']))
		{
		$caste = $_POST['caste1'];
		$condition .= " AND FIND_IN_SET('{$caste}',casteId)";
		}
		
		if(isset($_POST['status']))
		{
			$mstatus = implode(",",$_POST['status']);
			$condition .= " AND FIND_IN_SET('{$mstatus}',maritalStatus)";
			//maritalStatus 	
		}
		
		if(isset($_POST['language1']) && !empty($_POST['language1']))
		{
		$language = implode(",",$_POST['language1']);
		$condition .= " AND FIND_IN_SET('{$language}',languages)";
		}
		
		if(isset($_POST['education1']))
		{
			$education = implode(",", $_POST['education1']);
			$condition .= " AND FIND_IN_SET('{$education}',educationId)";
		}
		if(isset($_POST['profile']))
		{
			foreach ($_POST['profile'] as $value) {
				if($value == 'p')
				$condition .= " AND photo = 1 ";
				else if ($value == 'h')
				$condition .= " AND horoscope = 1 ";
			}
		}
		
		
		$usersV = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
		
		$profileBlock = $user->profileBlock;
		if(isset($profileBlock->profileIDs))
		{
			$blockedIds = explode(",", $profileBlock->profileIDs);
		}
		$userIds = array();
		foreach ($usersV as $key => $value) {
			if(isset($blockedIds) && !in_array($value->userId, $blockedIds))
			$userIds[] = $value->userId; 
		}
		
		$userList = implode(",", $userIds);
		$scondition = " userId in ({$userList}) and userId != {$user->userId} ";
		if(isset($blockIdList) && sizeof($blockId) > 0 )
		$scondition .= " AND userId NOT IN({$blockIdList})";
		$users = Users::model()->findAll(array('condition'=>$scondition,'order'=> 'createdOn DESC' ));
		
		
		
		$highLightUser = array();
		$normalUser = array();
		foreach ($users as $key => $value) {
			if($value->highlighted == 1 )
			$highLightUser[] = $value;
			else 
			$normalUser[] = $value;
		}
		//$user = Users::model()->find();
		if(sizeof($users) > 0)
		{
			
		$totalUser = sizeof($normalUser);
		$totalPage = ceil($totalUser/10);	
		$this->render('search',array('highLight' => $highLightUser,'normal'=> $normalUser,'search'=>'regular','totalUser'=>$totalUser,'totalPage' => $totalPage));	
	
		}
		else 
		$this->render('regular',array('error'=> '*******NO RESULTS FOUND******,Please try again'));
		}
		else 
		$this->render('regular');
	}
	
	public function actionQuick(){
		
		$user = Yii::app()->session->get('user');
		if(isset($_POST['ageFrom']) && isset($_POST['ageTo']))
		{
			
		$scondition = "FIND_IN_SET('{$user->userId}',profileIDs)";
		$profileBlock = ProfileBlock::model()->findAll(array('condition'=>$scondition));
		$blockId = array();
		foreach ($profileBlock as $key => $value) {
			$blockId[] = $value->userId;
		}
		$blockIdList = implode(",", $blockId);
		
		if(isset($_POST['ageFrom']))
		$ageFrom = $_POST['ageFrom'];
		if(isset($_POST['ageTo']))
		$ageTo = $_POST['ageTo'];
		
		$condition = "age BETWEEN {$ageFrom} AND {$ageTo} and active =1";
		
		if(isset($_POST['gender']))
		{
		$gender = $_POST['gender'];
		$condition .= " AND gender = '{$gender}'";
		}
		
		if(isset($_POST['religion']) && !empty($_POST['religion']))
		{
		$religion = $_POST['religion'];
		$condition .= " AND religionId = {$religion}";
		}
		if(isset($_POST['caste']) && !empty($_POST['caste']))
		{
		$caste = $_POST['caste'];
		$condition .= " AND casteId = {$caste}";
		}
		
		
		$usersV = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
		
		
		$userIds = array();
		foreach ($usersV as $key => $value) {
			$userIds[] = $value->userId; 
		}
		
		$userList = implode(",", $userIds);
		$scondition = " userId in ({$userList}) and userId != {$user->userId} ";
		if(isset($blockIdList) && sizeof($blockId) > 0 )
		$scondition .= " AND userId NOT IN({$blockIdList})";
		$users = Users::model()->findAll(array('condition'=>$scondition,'order'=> 'createdOn DESC' ));
		
		
		$highLightUser = array();
		$normalUser = array();
		foreach ($users as $key => $value) {
			if($value->highlighted == 1 )
			$highLightUser[] = $value;
			else 
			$normalUser[] = $value;
		}
		//$user = Users::model()->find();
		if(sizeof($users) > 0)
		{
		$totalUser = sizeof($normalUser);
		$totalPage = ceil($totalUser/10);	
		$this->render('search',array('highLight' => $highLightUser,'normal'=> $normalUser,'search'=>'regular','totalUser'=>$totalUser,'totalPage' => $totalPage));	
		}
		else 
		$this->render('regular',array('error'=> '*******NO RESULTS FOUND******,Please try again'));
		}
		else {
			$this->render('regular');
		}
	}
	
	public function actionAdvance(){
		
		/* if(isset($_POST['search']) && $_POST['search'] == 'save')
		{
			
			$this->render('search',array('highLight' => $highLightUser,'normal'=> $normalUser,'search'=>'save'));
		}
		*/
		$user = Yii::app()->session->get('user');
		$searchFor = null;
		
		if(isset($_POST['ageFrom']) && isset($_POST['ageTo']))
		{
			
		$scondition = "FIND_IN_SET('{$user->userId}',profileIDs)";
		$profileBlock = ProfileBlock::model()->findAll(array('condition'=>$scondition));	
		$blockId = array();
		foreach ($profileBlock as $key => $value) {
			$blockId[] = $value->userId;
		}
		$blockIdList = implode(",", $blockId);
		
		if(isset($_POST['ageFrom']))
		$ageFrom = $_POST['ageFrom'];
		if(isset($_POST['ageTo']))
		$ageTo = $_POST['ageTo'];
		
		$condition = "age BETWEEN {$ageFrom} AND {$ageTo} and active =1";
		
		if(isset($_POST['gender']))
		{
		$gender = $_POST['gender'];
		$condition .= " AND gender = '{$gender}'";
		}
		
		if(isset($_POST['heightFrom']))
		$heightFrom = $_POST['heightFrom'];
		if(isset($_POST['heightTo']))
		$heightTo = $_POST['heightTo'];
		
		$condition .= " AND heightId BETWEEN {$heightFrom} AND {$heightTo}";
		
		if(isset($_POST['status']))
		{
			$mstatus = implode(",", $_POST['status']);
		    $condition .= " AND maritalStatus in ({$mstatus})";
		}
		
		if(isset($_POST['religion']) && !empty($_POST['religion']))
		{
		$religion = $_POST['religion'];
		$religionModel = Religion::model()->findByPK($religion);
		$religionName = $religionModel->name;
		$condition .= " AND religionId = {$religion}";
		}
		
		if(isset($_POST['state']) && !empty($_POST['state']))
		{
		$state = $_POST['state'];
		$stateModel = States::model()->findByPK($state);
		$stateName = $stateModel->name;
		$condition .= " AND stateId = {$state}";
		}
		
		
		if(isset($_POST['district']) && !empty($_POST['district']))
		{
		$district = $_POST['district'];
		$districtModel = Districts::model()->findByPK($district);
		$districtName = $districtModel->name;
		$condition .= " AND distictId = {$district}";
		}
		
		if(isset($_POST['language1']) && !empty($_POST['language1']))
		{
		$language = implode(",",$_POST['language1']);
		/*
		$languageModel = Languages::model()->findAll(array('condition'=> "languageId in ({$language})"));
		if(isset(sizeof($languageModel > 0 )))
		{
			foreach ($languageModel as $value) {
				$languageName .= $value->name;
			}
			
		}
		else
		$languageName = $languageModel->name;
		*/
		$condition .= " AND FIND_IN_SET('{$language}',languages)";
		}
		
		
		if(isset($_POST['caste1']) && !empty($_POST['caste1']))
		{
		$caste = implode(",",$_POST['caste']);
		$casteModel = Caste::model()->findByPK($caste);
		$casteName = $casteModel->name;
		$condition .= " AND FIND_IN_SET('{$caste}',casteId) ";
		}
		
		if(isset($_POST['pstatus']))
		{
			if($_POST['pstatus'] != 'N')
			$condition .= " AND physicalStatus = {$status}";
		}
		if(isset($_POST['country1']))
		{
			$country = implode(",", $_POST['country1']);
			$condition .= " AND FIND_IN_SET('{$country}',countryId)";
		}
		
		if(isset($_POST['education1']))
		{
			$education = implode(",", $_POST['education1']);
			$condition .= " AND FIND_IN_SET('{$education}',educationId)";
		}
		
		if(isset($_POST['occupation1']))
		{
			$occupation = implode(",", $_POST['occupation1']);
			$condition .= " AND FIND_IN_SET('{$occupation}',occupationId)";
			
		}
		
		if(isset($_POST['income']))
		{
			
		}
		
		if(isset($_POST['star1']))
		{
			$stars = implode(",", $_POST['star1']);
			$condition .= " AND FIND_IN_SET('{$stars}',star)";
		}
		
		
		if(isset($_POST['sudha']))
		{
			$sudha = implode(",", $_POST['sudha']);
		}
		
		
		if(isset($_POST['chova']))
		{
			$chova = implode(",", $_POST['chova']);
		}
		
		/*if(isset($_POST['subcaste1']))
		{
			$subcaste = implode(",", $_POST['subcaste1']);
			$condition .= " OR FIND_IN_SET('{$subcaste}',star)";
			
		}
		*/
		if(isset($_POST['eat']))
		{
			$eat = implode(",", $_POST['eat']);
			$condition .= " AND FIND_IN_SET('{$eat}',eatingHabits)";
			//eatingHabits 	 	
		}
		
		if(isset($_POST['drink']))
		{
			//drinkingHabits
			$drink = implode(",", $_POST['drink']);
			$condition .= " AND FIND_IN_SET('{$drink}',drinkingHabits)";
		}

		if(isset($_POST['smoke']))
		{
			//smokingHabits
			$smoke = implode(",", $_POST['smoke']);
			$condition .= " AND FIND_IN_SET('{$smoke}',smokingHabits)";
		}
		
		if(isset($_POST['profile']))
		{
			$profile = implode(",", $_POST['profile']);	
		}
		if(isset($_POST['show']))
		{
			$show = implode(",", $_POST['show']);
		}
		
		 if(isset($_POST['search']) && $_POST['search'] == 'save')
		 {
		 	
		 }
		
		if(isset($_POST['profile']))
		{
			foreach ($_POST['profile'] as $value) {
				if($value == 'p')
				$condition .= " AND photo = 1 ";
				else if ($value == 'h')
				$condition .= " AND horoscope = 1 ";
			}
		}
		
		$usersV = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
		
		
		
		$userIds = array();
		foreach ($usersV as $key => $value) {
			$userIds[] = $value->userId; 
		}
		
		$userList = implode(",", $userIds);
		$scondition = " userId in ({$userList}) and userId != {$user->userId} ";
		if(isset($blockIdList) && sizeof($blockId) > 0 )
		$scondition .= " AND userId NOT IN({$blockIdList})";
		$users = Users::model()->findAll(array('condition'=>$scondition,'order'=> 'createdOn DESC' ));
		
			
			$highLightUser = array();
			$normalUser = array();
			foreach ($users as $key => $value) {
			if($value->highlighted == 1 )
			$highLightUser[] = $value;
			else 
			$normalUser[] = $value;
		}
		
		if(sizeof($users) > 0 )
		{

		$totalUser = sizeof($normalUser);
		$totalPage = ceil($totalUser/10);	
		$this->render('search',array('highLight' => $highLightUser,'normal'=> $normalUser,'search'=>'regular','totalUser'=>$totalUser,'totalPage' => $totalPage));	
	
		}
		else 
			$this->render('advance',array('error'=> '******NO MATCHES FOUND***** Please try again'));
		}
		else 
		{
		$this->render('advance');
		}
	}
	public function actionByid(){
		if(isset($_GET['id']))
		{
			$user = Users::model()->findByAttributes(array('marryId'=>$_GET['id']));
			/*$loggedUser = Yii::app()->session->get('user');
			$scondition = "FIND_IN_SET('{$loggedUser->userId}',profileIDs)";
			$profileBlock = ProfileBlock::model()->findAll(array('condition'=>$scondition));
			
			$blockId = array();
		foreach ($profileBlock as $key => $value) {
			$blockId[] = $value->userId;
		} 
		
			
			if(sizeof($blockId) > 0 )
			{
				
				if(in_array($loggedUser->userId, $blockId))
				{
					$model = "The user has not authorize you to view his/her profile.";
					$this->render('byid',array('model' => $model));
					return;
				}
			}*/
			if(isset($user->name))
			{
						
				if(isset($loggedUser)){
				if(isset($loggedUser->profileUser)){
					$arrayList = explode(",",$loggedUser->profileUser->visitedId);
					if(!in_array($user->userId,$arrayList))
					{
					$arrayList[] = $user->userId; 	
					$visitedId = implode(",", $arrayList);
					$loggedUser->profileUser->visitedId = $visitedId ;
					$loggedUser->profileUser->save();
					}
				}
				else {
					$profileView = new ProfileViews();
					$profileView->userID = $loggedUser->userId;
					$profileView->visitedId = $user->userId;
					$profileView->save(); 
				}
				}
				$this->render('idProfile',array('model'=>$user));
			}
			else
			{
				$model = "Please enter valid ID";
				$this->render('byid',array('model' => $model));
			}
		}
		else
		{
			$this->render('byid');
		}
	}
	public function actionKeyword()
	{
		$user = Yii::app()->session->get('user');
		if(isset($_POST['keyword']))
		{
			$gender = null;
			$age = null;
			$name = null;
			$condition = "";
			$keywords = explode(",", $_POST['keyword']);
			$female = array('f','female');
			$male = array('m','male');
			
			$condition .= " userId != {$user->userId} ";
			foreach ($keywords as $value) {
				if(in_array($value,$female))
				{
 
						$gender = 'F';
						$condition .= " AND gender = '{$gender}'";
				}
				else if(in_array($value,$male))
				{
						$gender = 'M';
						$condition .= " AND gender = '{$gender}'";
				}
				else if(ctype_digit($value))
				{
					$age = intval($value);
					$condition .= " AND FLOOR( DATEDIFF( CURRENT_DATE, dob) /365 )= {$age} ";
				}
				else
				{
					$name = $value;
					$condition .= " AND name like '%{$name}%'";
				}
				
			}
			
		if(isset($blockIdList) && sizeof($blockId) > 0 )
		$scondition .= " AND userId NOT IN({$blockIdList})";
		
		$users = Users::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
		
		$profileBlock = $user->profileBlock;
		$blockedIds = array();
		if(isset($profileBlock->profileIDs))
		{
			$blockedIds = explode(",", $profileBlock->profileIDs);
		}
		
		$highLightUser = array();
		$normalUser = array();
		foreach ($users as $key => $value) {
			
			if($value->highlighted == 1 )
			$highLightUser[] = $value;
			else 
			$normalUser[] = $value;
		}
		//$user = Users::model()->find();
		if(sizeof($users) > 0)
		{
			
		$totalUser = sizeof($normalUser);
		$totalPage = ceil($totalUser/10);	
		$this->render('search',array('highLight' => $highLightUser,'normal'=> $normalUser,'search'=>'regular','totalUser'=>$totalUser,'totalPage' => $totalPage));	
		}
		else 
		$this->render('keyword',array('error' => '***********NO SEARCH RESULTS FOUND*******  Please search for gender,age,name...'));	
		}
		else 
		$this->render('keyword');
	}

	
}