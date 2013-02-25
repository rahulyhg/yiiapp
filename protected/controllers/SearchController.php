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
			$this->render('index',array('tab'=>'tab1'));
		}
		else
		{
			$this->render('regular',array('tab'=>'tab1'));
		}
		
		
	}
	
	public function actionShow()
	{
		
		$user = Yii::app()->session->get('user');
		if(!isset($user))
		{
			$this->render('index');
		}
		else
		{
			if(isset($_GET['searchName']))
			{
				$searchName = $_GET['searchName'];
				$search = Savesearch::model()->findByAttributes(array('userId'=>$user->userId,'searchName'=>$searchName));
				if(isset($search) && $search->searchName == $searchName)
				$this->render('advance',array('searchItem'=>$search));
				else
				$this->render('regular');
			}
			else {
				$this->render('regular',array('tab'=>'tab1'));
			}
		}
	}
	
	public function actionDelete()
	{
		
		$user = Yii::app()->session->get('user');
		if(!isset($user))
		{
			$this->render('index');
		}
		else
		{
			if(isset($_GET['searchName']))
			{
				$searchName = $_GET['searchName'];
				$search = Savesearch::model()->findByAttributes(array('userId'=>$user->userId,'searchName'=>$searchName));
				if(isset($search) && $search->searchName == $searchName)
				{
					$user->saveSearch->deleteAll();
					$this->render('regular',array('tab'=>'tab1'));
				}
				else
				$this->render('regular',array('tab'=>'tab1'));
				
			}
			else {
				$this->render('regular');
			}
		}
	}
	
	public function actionSave()
	{
		$user = Yii::app()->session->get('user');
		
		$saveSearch = new Savesearch();
		
		if(isset($_POST['searchName'])){
		if(isset($_POST['ageTo']))
		{
			$saveSearch->ageTo = $_POST['ageTo'];
		}
		if(isset($_POST['searchName']))
		{
			$saveSearch->searchName = $_POST['searchName'];
		}
		if(isset($_POST['ageFrom']))
		{
			$saveSearch->ageFrom = $_POST['ageFrom'];
		}
			
		if(isset($_POST['gender']))
		{
			$saveSearch->gender = $_POST['gender']; 
		}
		
		if(isset($_POST['heightFrom']))
		$saveSearch->heightFrom = $_POST['heightFrom'];
		if(isset($_POST['heightTo']))
		$saveSearch->heightTo = $_POST['heightTo'];
		
		if(isset($_POST['religion']) && !empty($_POST['religion']))
		{
			$saveSearch->religion = $_POST['religion'];
		}
		
		if(isset($_POST['caste1']))
		{
			$caste  = implode(",",$_POST['caste1']);
			$saveSearch->caste = $caste;
		
		}
		
		if(isset($_POST['status']))
		{
			$mstatus = implode(",",$_POST['status']);
			$saveSearch->maritalStatus = $mstatus;
			//maritalStatus 	
		}
		
		if(isset($_POST['language1']) && !empty($_POST['language1']))
		{
			$language = implode(",",$_POST['language1']);
			$saveSearch->motherTounge = $language;
		}
		
		if(isset($_POST['education1']))
		{
			$education = implode(",", $_POST['education1']);
			$saveSearch->education = $education;
		}
		
		if(isset($_POST['country1']))
		{
			$country = implode(",", $_POST['country1']);
			$saveSearch->countries = $country;
		}
		
		if(isset($_POST['profile']))
		{
			foreach ($_POST['profile'] as $value) {
				if($value == 'p')
				$saveSearch->photo = '1';
				else if ($value == 'h')
				$saveSearch->horoscope = '1';
			}
		}
		
		if(isset($_POST['show']))
		{
			$show = implode(",", $_POST['show']);
			$saveSearch->showprofile = $show;
			
		}
		
		if(isset($_POST['status']))
		{
			
			$mstatus = implode(",", $_POST['status']);
			$saveSearch->maritalStatus = $mstatus;
		}
		
		
		if(isset($_POST['state']) && !empty($_POST['state']))
		{
			$saveSearch->state = $_POST['state']; 	
		}
		
		
		if(isset($_POST['district']) && !empty($_POST['district']))
		{
			$saveSearch->district = $_POST['district']; 
		}
		
		
		if(isset($_POST['pstatus']))
		{
			
			if($_POST['pstatus'] == 'N')
			{
				$searchText.= "Physical status as doesn't matter";	
			}
			if($_POST['pstatus'] == '0')
			{
				$condition .= " AND physicalStatus = {$status}";
				$searchText.= "Physical status as normal";
			}
			if($_POST['pstatus'] == '1')
			{
				$condition .= " AND physicalStatus = {$status}";
				$searchText.= "Physical status as physically challenged";
			}
			
		}
		
		
		if(isset($_POST['occupation1']))
		{
			$occupation = implode(",", $_POST['occupation1']);
			$saveSearch->occupation  = $occupation;
		}
		
		if(isset($_POST['income']) && !empty($_POST['income']))
		{
			$saveSearch->annualIncome  = $_POST['income'];
		}
		
		if(isset($_POST['star1']))
		{
			$stars = implode(",", $_POST['star1']);
			$saveSearch->star = $stars;
		}
		
		if(isset($_POST['keyword']) && !empty($_POST['keyword']))
		{
			$saveSearch->keyword  = $_POST['keyword'];
		}
		
		if(isset($_POST['sudha']))
		{
			$sudha = implode(",", $_POST['sudha']);
			$saveSearch->sudham = $sudha;
		}
		
		
		if(isset($_POST['chova']))
		{
			$chova = implode(",", $_POST['chova']);
			$saveSearch->dosham = $chova;
		}
		
		if(isset($_POST['eat']))
		{
			$eat = implode(",", $_POST['eat']);
			$saveSearch->eating = $eat;
		}	
		
		if(isset($_POST['drink']))
		{
			//drinkingHabits
			$drink = implode(",", $_POST['drink']);
			$saveSearch->drinking = $drink;
			
		}

		if(isset($_POST['smoke']))
		{
			//smokingHabits
			$smoke = implode(",", $_POST['smoke']);
			$saveSearch->smoking = $smoke;
		}
		
		if(isset($_POST['profile']))
		{
			$profile = implode(",", $_POST['profile']);
			$saveSearch->showprofile = $profile;
		}
		if(isset($_POST['show']))
		{
			$show = implode(",", $_POST['show']);
			$saveSearch->showTo = $show;
		}
		
		$saveSearch->userId = $user->userId;
		$user->saveSearch->deleteAll();
		$user->saveSearch = $saveSearch;
		$user->saveSearch->save();
		$this->render('regular',array('tab'=>'tab1'));
		}
		else {
		$this->render('regular',array('tab'=>'tab1'));	
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
		$searchText = "";
		$user = Yii::app()->session->get('user');
			
		if(isset($_POST) && !empty($_POST))
		{
			$condition = " ";
			if(isset($_POST['SearchForm']['bride']))
			{
				$gender = $_POST['SearchForm']['bride'];
				$condition .= "gender = '{$gender}' and active = 1";
				if($gender == 'M')
				$searchText.= "Male, ";
				else
				$searchText.= "Female, ";
			}
			
			
			if(isset($user)){
				$scondition = "FIND_IN_SET('{$user->userId}',profileIDs)";
				$profileBlock = ProfileBlock::model()->findAll(array('condition'=>$scondition));

				$blockId = array();
				foreach ($profileBlock as $key => $value) {
					$blockId[] = $value->userId;
				}
				$blockIdList = implode(",", $blockId);
			}
			
			if(!empty($_POST['heightStart'])&& !empty($_POST['heightLimit']))
			{
				$heightFrom = $_POST['heightStart'];
				$heightTo = $_POST['heightLimit'];
				$condition = "heightId BETWEEN {$heightFrom} AND {$heightTo} ";
				$searchText.= "Height between {$heightFrom} and {$heightTo}, ";
			}


			if(!empty($_POST['startAge']) && !empty($_POST['endAge']))
			{
				$ageFrom = $_POST['startAge'];
				$ageTo = $_POST['endAge'];
				$condition .= "AND age BETWEEN {$ageFrom} AND {$ageTo} and active =1";
				$searchText.= "age between {$ageFrom} and {$ageTo}, ";
			} 


			if(isset($_POST['religion']) && !empty($_POST['religion']))
			{
				$condition .= " AND religionId = {$_POST['religion']}";

				$religion = Religion::model()->findByPk($_POST['religion']);
				$searchText.= "Religion is $religion->name , ";
			}

			if(isset($_POST['state']) && !empty($_POST['state']))
			{
				$condition .= " AND stateId = {$_POST['state']}";
				$state = States::model()->findByPk($_POST['state']);
				$searchText.= "State is $state->name , ";
				
			}

			if(isset($_POST['district']) && !empty($_POST['district']))
			{
				$condition .= " AND districtId = {$_POST['district']}";
				$district = Districts::model()->findByPk($_POST['district']);
				$searchText.= "District is $district->name , ";
			}


			if(isset($_POST['caste']) && !empty($_POST['caste']))
			{
				$condition .= " AND casteId = {$_POST['caste']}";
				$caste = Districts::model()->findByPk($_POST['caste']);
				$searchText.= "Caste is $caste->name , ";
			}


			if(isset($_POST['bodyColor']) && !empty($_POST['bodyColor']))
			{
				$condition .= " AND complexion = {$_POST['bodyColor']}";
				$body = Utilities::getBodyColor();
				$searchText.= "Body color is ".$body[$_POST['bodyColor']].", ";
				//maritalStatus
			}

			if(isset($_POST['bodyType']) && !empty($_POST['bodyType']))
			{
				$condition .= " AND bodyType = {$_POST['bodyType']} ";
				$bodyType = Utilities::getBodyType();
				$searchText.= "Body type is ".$bodyType[$_POST['bodyType']].", ";
				//maritalStatus
			}

			if(isset($_POST['motherTounge']) && !empty($_POST['motherTounge']))
			{
				$condition .= " AND FIND_IN_SET('{$_POST['motherTounge']}',languages)";
				$searchText.= "Mother tounge as". Utilities::getValueForIds(new Languages(), $_POST['motherTounge'], 'languageId')." , ";
			}

			if($_POST['SearchForm']['photo'] == 1)
			{
				$condition .= " AND photo = 1 ";
				$searchText.= "with photo";
			}

			$usersV = ViewUsers::model()->findAll(array('condition'=>$condition,
		'order'=> 'createdOn DESC' ));

			if(sizeof($usersV) > 0 ){
				$userIds = array();
				foreach ($usersV as $key => $value) {
					$userIds[] = $value->userId;
				}

				$userList = implode(",", $userIds);
				$scondition = " userId in ({$userList}) ";
				if(isset($blockIdList) && sizeof($blockId) > 0 )
				$scondition .= " AND userId NOT IN({$blockIdList})";
				$users = Users::model()->findAll(array('condition'=>$scondition,'order'=> 'createdOn DESC'),'active=1');

				$highLightUser = array();
				$normalUser = array();
				foreach ($users as $key => $value) {
					if($value->highlighted == 1 )
					$highLightUser[] = $value;
					else
					$normalUser[] = $value;
				}
			}
			$totalUser = 0;
			$totalPage = 0;
			//$user = Users::model()->find();
			if(isset($users))
			{
				if(sizeof($normalUser) > 0){
					$totalUser = sizeof($normalUser);
					$totalPage = ceil($totalUser/10);
				}
				$this->render('search',array('searchText'=>$searchText,'highLight' => $highLightUser,'normal'=> $normalUser,'search'=>'regular','totalUser'=>$totalUser,'totalPage' => $totalPage));
			}
			else
			{
				if(!isset($user))
				{
					$this->render('index',array('tab'=>'tab1','error'=> '*******NO RESULTS FOUND******,Please try again'));
				}
				else {
						
					$this->render('regular',array('tab'=>'tab1','error'=> '*******NO RESULTS FOUND******,Please try again'));
				}
			}
		}
		else
		{
			if(!isset($user))
				{
					$this->render('index',array('tab'=>'tab1','error'=> '*******NO RESULTS FOUND******,Please try again'));
				}
				else {
						
					$this->render('regular',array('tab'=>'tab1','error'=> '*******NO RESULTS FOUND******,Please try again'));
				}
		}

	}
	
	//basic search from the search page
	public function actionRegular()
	{
		$searchText = "";
		$user = Yii::app()->session->get('user');
		if(isset($_POST) && !empty($_POST))
		{

			if(isset($_POST['gender']))
			{
			$gender = $_POST['gender'];
			$condition = "gender = '{$gender}' and active = 1";
			
			$searchText .= "gender as ";
			
			if($gender == 'M')
			$searchText.= "Male, ";
			else 
			$searchText.= "Female, ";
			
			}
			
			
			if(isset($_POST['ageFrom']) && $_POST['ageTo']) {
			$ageFrom = $_POST['ageFrom'];
			$ageTo = $_POST['ageTo'];
			$condition = " age BETWEEN {$ageFrom} AND {$ageTo} and active =1";
			
			$searchText .= "age between {$ageFrom} and {$ageTo} ,";
			}
		
			$height = Utilities::getHeights();
			if(isset($_POST['heightFrom']) && $_POST['heightTo']) {
			$heightFrom = $_POST['heightFrom'];
			$heightTo = $_POST['heightTo'];
			
			$condition .= " AND heightId BETWEEN {$heightFrom} AND {$heightTo}";
			$searchText.= "height between {$height[$heightFrom]} to {$height[$heightTo]} , ";
			}
		
			if(isset($_POST['religion']) && !empty($_POST['religion']))
			{
			$religion = Religion::model()->findByPk($_POST['religion']);
			$condition .= " AND religionId = {$_POST['religion']}";
			$searchText.= "Religion as $religion->name , ";
			}
		
			if(isset($_POST['caste1']))
			{
			$caste  = implode(",",$_POST['caste1']);
			$condition .= " AND FIND_IN_SET('{$caste}',casteId)";
			$searchText.= "Caste as ". Utilities::getValueForIds(new Caste(), $caste, 'casteId')." , ";
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
			$searchText.= "Mother tounge as". Utilities::getValueForIds(new Languages(), $language, 'languageId')." , ";
			}
			
			if(isset($_POST['education1']))
			{
				$education = implode(",", $_POST['education1']);
				$condition .= " AND FIND_IN_SET('{$education}',educationId)";
				$searchText.= "Education as". Utilities::getValueForIds(new EducationMaster(), $education, 'educationId')." , ";
			}
			
			if(isset($_POST['country1']))
			{
				$country = implode(",", $_POST['country1']);
				$condition .= " AND FIND_IN_SET('{$country}',countryId)";
				$searchText.= "Country as ". Utilities::getValueForIds(new Country(), $country, 'countryId')." , ";
			}
		
		
			
			if(isset($_POST['profile']))
			{
				foreach ($_POST['profile'] as $value) {
					if($value == 'p')
					$condition .= " AND photo IS NOT NULL ";
					else if ($value == 'h')
					$condition .= " AND horoscope IS NOT NULL ";
				}
			}
		
		
			$usersV = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ),'active=1');
		
			
		$userIds = array();
		$userList = null;
		foreach ($usersV as $key => $value) {
			$userIds[] = $value->userId; 
		}
		$userList = implode(",", $userIds);
		
			
			if(isset($_POST['show']) && !empty($_POST['show']))
		{
			if(isset($user))
			{
				$maritalStatus = $_POST['show'];
				$contacted = in_array(1,$maritalStatus);
				$blockedIds = null;
				$short = null;
				$viewProfile = null;

				if(in_array(0,$maritalStatus))
				{
					$searchText.= "Do not show ignored profiles ,";
					if($user->profileBlock){
						$blockedIds	= $user->profileBlock->profileIDs;
					}
				}

				if(in_array(2,$maritalStatus)){
					$searchText.= "Do not show viewed profiles ,";
					if($user->profileUser)
					{
						$viewProfile = $user->profileUser->visitedId;
					}
				}

				if(in_array(3,$maritalStatus)){
					$searchText.= "Do not show shortlisted profiles ,";
					if($user->shortlist)
					{
						$short = $user->shortlist->profileID;
					}
				}
				
				$scondition = " userId in ({$userList}) ";
				
				if(!empty($blockedIds))
				$scondition .= " and userId NOT IN ($blockedIds)";
				
				if(!empty($viewProfile))
				$scondition .= " and userId NOT IN ($viewProfile)";
				
				if(!empty($short))
				$scondition .= " and userId NOT IN ($short)";

			}
			
		}else {
			$scondition = " userId in ({$userList})";
		}
			
			$users = array();
		
			if(!empty($userList))
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
			$this->render('search',array('searchText'=>$searchText,'highLight' => $highLightUser,'normal'=> $normalUser,'search'=>'regular','totalUser'=>$totalUser,'totalPage' => $totalPage));	
		
			}
			else 
			{
			if(!isset($user))
					{
						$this->render('index',array('tab'=>'tab1','error'=> '*******NO RESULTS FOUND******,Please try again'));
					}
					else {
							
						$this->render('regular',array('tab'=>'tab1','error'=> '*******NO RESULTS FOUND******,Please try again'));
					}
			}
		}
		else 
		{
			if(!isset($user))
					{
						$this->render('index',array('tab'=>'tab1'));
					}
					else {
							
						$this->render('regular',array('tab'=>'tab1'));
					}
		}
	}
	
	public function actionQuick(){
		
		$user = Yii::app()->session->get('user');
		
		if(isset($user)){
			$scondition = "FIND_IN_SET('{$user->userId}',profileIDs)";
		$profileBlock = ProfileBlock::model()->findAll(array('condition'=>$scondition));
		$blockId = array();
		foreach ($profileBlock as $key => $value) {
			$blockId[] = $value->userId;
		}
		$blockIdList = implode(",", $blockId);
		
		}
		if(isset($_POST) && !empty($_POST))
		{
		
		if(isset($_POST['ageFrom']) && isset($_POST['ageTo']))
		{
			
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
		
		
		$usersV = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ),'active=1');
		
		
		$userIds = array();
		foreach ($usersV as $key => $value) {
			$userIds[] = $value->userId; 
		}
		
		if(sizeof($userIds) > 0 )
		{
		$userList = implode(",", $userIds);
		$scondition = " userId in ({$userList}) ";
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
		}
		else
		{
				if(!isset($user))
				{
					$this->render('index',array('tab'=>'tab1','error'=> '*******NO RESULTS FOUND******,Please try again'));
				}
				else {
						
					$this->render('regular',array('tab'=>'tab1','error'=> '*******NO RESULTS FOUND******,Please try again'));
				}
		} 
		}
		}
		else {
		if(!isset($user))
				{
					$this->render('index',array('tab'=>'tab1','error'=> '*******NO RESULTS FOUND******,Please try again'));
				}
				else {
						
					$this->render('regular',array('tab'=>'tab1','error'=> '*******NO RESULTS FOUND******,Please try again'));
				}
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
		$searchText = "";
		if(isset($_POST) && !empty($_POST))
		{

		if(isset($_POST['gender']))
		{
		$gender = $_POST['gender'];
		$condition = "gender = '{$gender}'  and active = 1";
		if($gender == 'M')
				$searchText.= "Male, ";
				else
				$searchText.= "Female, ";
		}	
			
		
		if(!empty($_POST['ageFrom']) && !empty($_POST['ageTo'])) {
		$ageFrom = $_POST['ageFrom'];
		$ageTo = $_POST['ageTo'];
		
		$condition = " AND age BETWEEN {$ageFrom} AND {$ageTo}";
		$searchText.= "age between {$ageFrom} and {$ageTo}, "; 
		}
		
		if(!empty($_POST['heightFrom']) && !empty($_POST['heightTo']))
		{
		$heightFrom = $_POST['heightFrom'];
		$heightTo = $_POST['heightTo'];
		
		$condition .= " AND heightId BETWEEN {$heightFrom} AND {$heightTo}";
		$searchText.= "Height between {$heightFrom} and {$heightTo}, ";
		}
		if(isset($_POST['status']))
		{
			$mArray = Utilities::getMaritalStatus();
			$mstatus = implode(",", $_POST['status']);
		    $condition .= " AND maritalStatus in ({$mstatus})";
		    $searchText.= "Marital status as ". $mArray[$mstatus];
		}
		
		if(isset($_POST['religion']) && !empty($_POST['religion']))
		{
		$religion = $_POST['religion'];
		$religionModel = Religion::model()->findByPK($religion);
		$religionName = $religionModel->name;
		$condition .= " AND religionId = {$religion}";
		
		$searchText.= "Religion is {$religionName}, ";
		
		}
		
		if(isset($_POST['state']) && !empty($_POST['state']))
		{
		$state = $_POST['state'];
		$stateModel = States::model()->findByPK($state);
		$stateName = $stateModel->name;
		$condition .= " AND stateId = {$state}";
		$searchText.= "State is {$stateName}, ";
		
		}
		
		
		if(isset($_POST['district']) && !empty($_POST['district']))
		{
		$district = $_POST['district'];
		$districtModel = Districts::model()->findByPK($district);
		$districtName = $districtModel->name;
		$condition .= " AND districtId = {$district}";
		$searchText.= "District is {$districtName} , ";
		}
		
		if(isset($_POST['language1']) && !empty($_POST['language1']))
		{
		$language = implode(",",$_POST['language1']);
		$condition .= " AND FIND_IN_SET('{$language}',languages)";
		
		$searchText.= "Mother tounge as". Utilities::getValueForIds(new Languages(), $language, 'languageId')." , ";
		
		}
		
		
		if(isset($_POST['caste1']) && !empty($_POST['caste1']))
		{
		$caste = implode(",",$_POST['caste1']);
		$condition .= " AND FIND_IN_SET('{$caste}',casteId) ";
		$searchText.= "Caste as ". Utilities::getValueForIds(new Caste(), $caste, 'casteId')." , ";
		
		}
		
		if(isset($_POST['pstatus']))
		{
			
			if($_POST['pstatus'] == 'N')
			{
				$searchText.= "Physical status as doesn't matter";	
			}
			if($_POST['pstatus'] == '0')
			{
				$condition .= " AND physicalStatus = {$status}";
				$searchText.= "Physical status as normal";
			}
			if($_POST['pstatus'] == '1')
			{
				$condition .= " AND physicalStatus = {$status}";
				$searchText.= "Physical status as physically challenged";
			}
			
		}
		if(isset($_POST['country1']))
		{
			$country = implode(",", $_POST['country1']);
			$condition .= " AND FIND_IN_SET('{$country}',countryId)";
			$searchText.= "Country as ". Utilities::getValueForIds(new Country(), $country, 'countryId')." , ";
			
		}
		
		if(isset($_POST['keyword']) && !empty($_POST['keyword']))
		{
			
			$condition .= " AND userDesc like '%{$_POST['keyword']}%'";
			$searchText.= "Keyword as ".$_POST['keyword']; 
			
		}
		
		
		
		if(isset($_POST['education1']))
		{
			$education = implode(",", $_POST['education1']);
			$condition .= " AND FIND_IN_SET('{$education}',educationId)";
			
			$searchText.= "Education as ". Utilities::getValueForIds(new EducationMaster(), $education, 'educationId')." , ";
			
		}
		
		if(isset($_POST['occupation1']))
		{
			$occupation = implode(",", $_POST['occupation1']);
			$condition .= " AND FIND_IN_SET('{$occupation}',occupationId)";
			
			$searchText.= "Education as ". Utilities::getValueForIds(new OccupationMaster(), $occupation, 'occupationId')." , ";
		}
		
		if(isset($_POST['incomeFrom']) && !empty($_POST['incomeFrom']) && isset($_POST['incomeTo']) && !empty($_POST['incomeTo']))
		{
			$condition .= " AND annualIncome BETWEEN {$_POST['incomeFrom']} AND {$_POST['incomeTo']}";
			$searchText.= "Income as between {$_POST['incomeFrom']} and {$_POST['incomeTo']} ,";
		}
		
		if(isset($_POST['star1']))
		{
			$stars = implode(",", $_POST['star1']);
			$condition .= " AND FIND_IN_SET('{$stars}',star)";
			$searchText.= "Stars as ". Utilities::getValueForIds(new SignsMaster(), $stars, 'signId')." , ";
		}
		
		
		if(isset($_POST['sudha']))
		{
			$sudha = implode(",", $_POST['sudha']);
			$condition .= " AND FIND_IN_SET('{$sudha}',sudham)";
			$searchText.= "Sudha Jathakam as ".Utilities::getArrayValues(Utilities::getSudham(), $sudha) ;
		}
		
		
		if(isset($_POST['chova']))
		{
			$chova = implode(",", $_POST['chova']);
			$condition .= " AND FIND_IN_SET('{$chova}',dosham)";
			$searchText.= "Chovva Dosham as ".Utilities::getArrayValues(Utilities::getChova(), $chova) ;
		}
		
		if(isset($_POST['eat']))
		{
			$eat = implode(",", $_POST['eat']);
			$condition .= " AND FIND_IN_SET('{$eat}',eatingHabits)";
			$searchText.= "Eating habits as ".Utilities::getArrayValues(Utilities::getFood(), $eat);
		}
		
		if(isset($_POST['drink']))
		{
			//drinkingHabits
			$drink = implode(",", $_POST['drink']);
			$condition .= " AND FIND_IN_SET('{$drink}',drinkingHabits)";
			$searchText.= "Drinking habits as ".Utilities::getArrayValues(Utilities::getDrink(), $drink) ;
			
		}

		if(isset($_POST['smoke']))
		{
			//smokingHabits
			$smoke = implode(",", $_POST['smoke']);
			$condition .= " AND FIND_IN_SET('{$smoke}',smokingHabits)";
			
			$searchText.= "Smoking habits as ".Utilities::getArrayValues(Utilities::getSmoke(), $smoke) ;
		}
		
		
		if(isset($_POST['profile']))
		{
			foreach ($_POST['profile'] as $value) {
				if($value == 'p'){
				$condition .= " AND photo IS NOT NULL ";
				$searchText.= "Users with photo ,";
				}
				else if ($value == 'h'){
				$condition .= " AND horoscope IS NOT NULL";
				$searchText.= "Users with horoscope ,";
				}
			}
		}
		
		$usersV = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
		
		$userIds = array();
		$userList = null;
		foreach ($usersV as $key => $value) {
			$userIds[] = $value->userId; 
		}
		$userList = implode(",", $userIds);
		
			
		if(isset($_POST['show']) && !empty($_POST['show']))
		{
			if(isset($user))
			{
				$maritalStatus = $_POST['show'];
				$contacted = in_array(1,$maritalStatus);
				$blockedIds = null;
				$short = null;
				$viewProfile = null;

				if(in_array(0,$maritalStatus))
				{
					$searchText.= "Do not show ignored profiles ,";
					if($user->profileBlock){
						$blockedIds	= $user->profileBlock->profileIDs;
					}
				}

				if(in_array(2,$maritalStatus)){
					$searchText.= "Do not show viewed profiles ,";
					if($user->profileUser)
					{
						$viewProfile = $user->profileUser->visitedId;
					}
				}

				if(in_array(3,$maritalStatus)){
					$searchText.= "Do not show shortlisted profiles ,";
					if($user->shortlist)
					{
						$short = $user->shortlist->profileID;
					}
				}
				
				$scondition = " userId in ({$userList}) ";
				
				if(!empty($blockedIds))
				$scondition .= " and userId NOT IN ($blockedIds)";
				
				if(!empty($viewProfile))
				$scondition .= " and userId NOT IN ($viewProfile)";
				
				if(!empty($short))
				$scondition .= " and userId NOT IN ($short)";

			}
			
		}else {
			$scondition = " userId in ({$userList})";
		}
		
		$users = array();
		
		if(!empty($userList))
		$users = Users::model()->findAll(array('condition'=>$scondition,'order'=> 'createdOn DESC' ));
		
		
		if(sizeof($users) > 0 )
		{
		
		$highLightUser = array();
			$normalUser = array();
			foreach ($users as $key => $value) {
			if($value->highlighted == 1 )
			$highLightUser[] = $value;
			else 
			$normalUser[] = $value;
		}	
		$totalUser = sizeof($normalUser);
		$totalPage = ceil($totalUser/10);	
		$this->render('search',array('searchText'=>$searchText,'highLight' => $highLightUser,'normal'=> $normalUser,'search'=>'regular','totalUser'=>$totalUser,'totalPage' => $totalPage));	
	
		}
		else
		{
					if(!isset($user))
				{
					$this->render('index',array('tab'=>'tab2','error'=> '*******NO RESULTS FOUND******,Please try again'));
				}
				else {
						
					$this->render('regular',array('tab'=>'tab2','error'=> '*******NO RESULTS FOUND******,Please try again'));
				}
			
		} 
		}
		else 
		{
			if(!isset($user))
				{
					$this->render('index',array('tab'=>'tab2'));
				}
				else {
						
					$this->render('regular',array('tab'=>'tab2'));
				}
			
		}
	}
	public function actionByid(){
		if(isset($_GET['id']))
		{
			$user = Users::model()->findByAttributes(array('marryId'=>$_GET['id']),'active=1');
			$loggedUser = Yii::app()->session->get('user');
			if(isset($user->name))
			{
						
				if(isset($loggedUser) && $loggedUser->marryId != $user->marryId ){
					Yii::app()->getDb()->createCommand("SET time_zone='+05:30'")->execute();			
					$profileView = Profileviews::model()->findByAttributes(array('visitedId'=>$user->userId,'userID'=>$loggedUser->userId ));
					if(isset($profileView))
					{
						$profileView->counter = $profileView->counter + 1;
						$profileView->visitTime  = new CDbExpression('NOW()');
						$profileView->save();
					}
					else
					{
						$prfile = new Profileviews();
						$prfile->counter = 1;
						$prfile->visitTime  = new CDbExpression('NOW()');
						$prfile->visitedId = $user->userId;
						$prfile->userID = $loggedUser->userId; 
						$prfile->save();
					}
				}
				$this->render('idProfile',array('model'=>$user));
			}
			else
			{
				
				if(!isset($user))
				{
					$this->render('index',array('tab'=>'tab4','error'=> '*******NO RESULTS FOUND******,Please try again'));
				}
				else {
						
					$this->render('regular',array('tab'=>'tab4','error'=> '*******NO RESULTS FOUND******,Please try again'));
				} 
			}
		}
		else
		{
			
				if(!isset($user))
				{
					$this->render('index',array('tab'=>'tab4'));
				}
				else {
						
					$this->render('regular',array('tab'=>'tab4'));
				} 
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
			
			if(isset($user))
			$condition .= " userId != {$user->userId} ";
			
			foreach ($keywords as $value) {
				if(in_array($value,$female))
				{
 
						$gender = 'F';
						if(empty($condition))
						$condition .= " gender = '{$gender}'";
						else
						$condition .= " AND gender = '{$gender}'";
				}
				else if(in_array($value,$male))
				{
						$gender = 'M';
						if(empty($condition))
						$condition .= " gender = '{$gender}'";
						else
						$condition .= " AND gender = '{$gender}'";
				}
				else if(ctype_digit($value))
				{
					$age = intval($value);
					if(empty($condition))
					$condition .= " FLOOR( DATEDIFF( CURRENT_DATE, dob) /365 )= {$age} ";
					else
					$condition .= " AND FLOOR( DATEDIFF( CURRENT_DATE, dob) /365 )= {$age} ";
					
				}
				else
				{
					$name = $value;
					if(empty($condition))
					$condition .= " name like '%{$name}%'";
					else
					$condition .= " AND name like '%{$name}%'";
					
				}
				
			}
			
		$users = Users::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ),'active=1');
		
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
		{
				if(!isset($user))
				{
					$this->render('index',array('tab'=>'tab3','error'=> '*******NO RESULTS FOUND******,Please try again'));
				}
				else {
						
					$this->render('regular',array('tab'=>'tab3','error'=> '*******NO RESULTS FOUND******,Please try again'));
				} 
		}
		}
		else 
		{
				if(!isset($user))
				{
					$this->render('index',array('tab'=>'tab3'));
				}
				else {
						
					$this->render('regular',array('tab'=>'tab3'));
				} 
		}
	}

	
}