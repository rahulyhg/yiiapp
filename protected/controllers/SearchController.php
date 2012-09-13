<?php

class SearchController extends Controller
{
	public function actionSearch()
	{
		$this->render('search');
	}
	
	public function actionRegular()
	{
		$this->render('regular');
	}
	
	public function actionQuick(){
		
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
		$condition .= " and gender = '{$gender}'";
		}
		
		if(isset($_POST['religion']) && !empty($_POST['religion']))
		{
		$religion = $_POST['religion'];
		$condition .= " and religionId = {$religion}";
		}
		if(isset($_POST['caste']) && !empty($_POST['caste']))
		{
		$caste = $_POST['caste'];
		$condition .= " and casteId = {$caste}";
		}
		/*
		$users = Users::model()->with(
		array('userpersonaldetails'=>$arrayUp,'educations','habits'
		))->findAll(
		array(
		'alias' => 'u',
		'condition' => "{$genderQuery} FLOOR( DATEDIFF( CURRENT_DATE, u.dob) /365 ) BETWEEN {$ageFrom} AND {$ageTo}"
		)
		); //t
		*/
		

		$users = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
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
		$this->render('search',array('highLight' => $highLightUser,'normal'=> $normalUser,'search'=>'quick'));
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
		$condition .= " and gender = '{$gender}'";
		}
		
		if(isset($_POST['heightFrom']))
		$heightFrom = $_POST['heightFrom'];
		if(isset($_POST['heightTo']))
		$heightTo = $_POST['heightTo'];
		
		$condition .= " and heightId BETWEEN {$heightFrom} AND {$heightTo}";
		
		if(isset($_POST['status']))
		{
			$mstatus = implode(",", $_POST['status']);
		    $condition .= " and maritalStatus in ({$mstatus})";
		}
		
		if(isset($_POST['religion']) && !empty($_POST['religion']))
		{
		$religion = $_POST['religion'];
		$religionModel = Religion::model()->findByPK($religion);
		$religionName = $religionModel->name;
		$condition .= " and religionId = {$religion}";
		}
		
		if(isset($_POST['state']) && !empty($_POST['state']))
		{
		$state = $_POST['state'];
		$stateModel = States::model()->findByPK($state);
		$stateName = $stateModel->name;
		$condition .= " and stateId = {$state}";
		}
		
		
		if(isset($_POST['district']) && !empty($_POST['district']))
		{
		$district = $_POST['district'];
		$districtModel = Districts::model()->findByPK($district);
		$districtName = $districtModel->name;
		$condition .= " and distictId = {$district}";
		}
		
		if(isset($_POST['language1']) && !empty($_POST['language1']))
		{
		$language = implode(",",$_POST['language1']);
		
		$languageModel = Languages::model()->findAll(array('condition'=> "languageId in ({$language})"));
		$languageName = $languageModel->name;
		$condition .= " and languages = {$language}";
		}
		
		
		if(isset($_POST['caste1']) && !empty($_POST['caste1']))
		{
		$caste = implode(",",$_POST['caste']);
		$casteModel = Caste::model()->findByPK($caste);
		$casteName = $casteModel->name;
		$condition .= " and casteId = {$caste}";
		}
		
		if(isset($_POST['pstatus']))
		{
			$status = implode(",", $_POST['pstatus']);
			$condition .= " and physicalStatus in ({$status})";
		}
		if(isset($_POST['country1']))
		{
			$country = implode(",", $_POST['country1']);
			$countryModel = Country::model()->findAll(array('condition'=> "countryId in ({$country})"));
			$countryeName = $countryModel->name;
			$condition .= " and countryId = {$country}";
		}
		
		if(isset($_POST['education1']))
		{
			$education = implode(",", $_POST['education1']);
			$educationModel = EducationMaster::model()->findAll(array('condition'=> "educationId in ({$education})"));
			
		}
		
		if(isset($_POST['occupation1']))
		{
			$occupation = implode(",", $_POST['occupation1']);
			$occupationModel = OccupationMaster::model()->findAll(array('condition'=> "occupationId in ({$occupation})"));
			
		}
		
		if(isset($_POST['income']))
		{
			
		}
		
		if(isset($_POST['star1']))
		{
			$stars = implode(",", $_POST['star1']);
			$starModel = SignsMaster::model()->findAll(array('condition'=> "signId  in ({$stars})"));
		}
		
		
		if(isset($_POST['sudha']))
		{
			$sudha = implode(",", $_POST['sudha']);
		}
		
		
		if(isset($_POST['chova']))
		{
			$chova = implode(",", $_POST['chova']);
		}
		
		if(isset($_POST['subcaste1']))
		{
			$subcaste = implode(",", $_POST['subcaste1']);
			$subcasteModel = Subcaste::model()->findAll(array('condition'=> " subcasteId in ({$subcaste})"));
		}
		if(isset($_POST['eat']))
		{
			$eat = implode(",", $_POST['eat']);
			//eatingHabits 	 	
		}
		
		if(isset($_POST['drink']))
		{
			//drinkingHabits
			$drink = implode(",", $_POST['drink']);
		}

		if(isset($_POST['smoke']))
		{
			//smokingHabits
			$smoke = implode(",", $_POST['smoke']);
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
		
		
			$users = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));	
			$highLightUser = array();
			$normalUser = array();
			foreach ($users as $key => $value) {
			if($value->highlighted == 1 )
			$highLightUser[] = $value;
			else 
			$normalUser[] = $value;
		}
			$this->render('search',array('highLight' => $highLightUser,'normal'=> $normalUser,'search'=>'quick'));
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
		if(isset($_POST['keyword']))
		{
			$gender = null;
			$age = null;
			$name = null;
			$condition = "";
			$keywords = explode(",", $_POST['keyword']);
			$female = array('f','female');
			$male = array('m','male');
			$index = 0;
			foreach ($keywords as $value) {
				if(in_array($value,$female))
				{
					$index++; 
						$gender = 'F';
					if($index > 1)	
						$condition .= " OR gender = '{$gender}'";
					else
						$condition .= "gender = '{$gender}'";
				}
				else if(in_array($value,$male))
				{
						$index++;
						$gender = 'M';
						if($index > 1)	
						$condition .= " OR gender = '{$gender}'";
					else
						$condition .= "gender = '{$gender}'";
				}
				else if(ctype_digit($value))
				{
					$index++;
					$age = intval($value);
					if($index > 1)
					$condition .= " OR age = {$age} ";
					else
					$condition .= "age = {$age} ";
				}
				else
				{
					$index++;
					$name = $value;
					if($index > 1)
					$condition .= " OR name like '%{$name}%'";
					else
					$condition .= "name like '%{$name}%'";
				}
				
			}
			
		
		$users = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
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
		$this->render('search',array('highLight' => $highLightUser,'normal'=> $normalUser,'search'=>'keyword'));
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