<?php

class SearchController extends Controller
{
	
	public function actionSearch()
	{
		$this->render('advance');
	}
	
	  public function beforeAction(CAction $action)
        {
        		if($action->id == 'byid')
        		return true;
                $user = Yii::app()->session->get('user');
                if(!isset($user)) {
                        $this->redirect(Yii::app()->user->loginUrl);
                        return false;
                }       
                return true;
        }  
	
	
	
	public function actionHighlight()
	{
		$condition = 'highlighted = 1';

		$users = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
		$highLightUser = array();
		$normalUser = array();
		
		//$user = Users::model()->find();
		if(sizeof($users) > 0)
		$this->render('search',array('highLight' => $users,'normal'=> $normalUser,'search'=>'highlight'));
		
	}
	
	//search from front page
	public function actionBasic()
	{
	 $user = Yii::app()->session->get('user');	
	  if(isset($_POST['heightStart']) && isset($_POST['heightLimit']))
		{

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
		
		$usersV = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
		$userIds = array();
		foreach ($usersV as $key => $value) {
			$userIds[] = $value->userId; 
		}
		
		$userList = implode(",", $userIds);
		$scondition = " userId in ({$userList}) and userId != {$user->userId} ";
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
	
	public function actionRegular()
	{
		$user = Yii::app()->session->get('user');
		if(isset($_POST['ageFrom']) && isset($_POST['ageTo']))
		{
			
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
		$userIds = array();
		foreach ($usersV as $key => $value) {
			$userIds[] = $value->userId; 
		}
		
		$userList = implode(",", $userIds);
		$scondition = " userId in ({$userList}) and userId != {$user->userId} ";
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

			if(isset($user->name))
			{
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
			
		
		$users = Users::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
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