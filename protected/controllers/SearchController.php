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
		
		$this->render('search',array('highLight' => $highLightUser,'normal'=> $normalUser,'search'=>'quick'));
		}
		else {
			$this->render('advance');
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
		$ageFrom = $_POST['heightFrom'];
		if(isset($_POST['heightTo']))
		$ageTo = $_POST['heightTo'];
		
		if(isset($_POST['status']))
		{
			$status = implode(",", $_POST['status']);
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
		
		if(isset($_POST['language']) && !empty($_POST['language']))
		{
		$language = $_POST['language'];
		$languageModel = Languages::model()->findAll(array('condition'=> "id in {$language}"));
		$languageName = $languageModel->name;
		$condition .= " and languages = {$language}";
		}
		
		
		if(isset($_POST['caste']) && !empty($_POST['caste']))
		{
		$caste = $_POST['caste'];
		$casteModel = Caste::model()->findByPK($caste);
		$casteName = $casteModel->name;
		$condition .= " and casteId = {$caste}";
		}
		
		if(isset($_POST['pstatus']))
		{
			$status = implode(",", $_POST['pstatus']);
		}
		if(isset($_POST['country1']))
		{
			$status = implode(",", $_POST['pstatus']);
		}
		
		if(isset($_POST['residentStatus']))
		{
			
		}
		if(isset($_POST['education1']))
		{
			
		}
		
		if(isset($_POST['occupation']))
		{
			
		}
		
		if(isset($_POST['income']))
		{
			
		}
		
		if(isset($_POST['star1']))
		{
			
		}
		
		
		if(isset($_POST['sudha']))
		{
			
		}
		
		
		if(isset($_POST['chova']))
		{
			
		}
		
		if(isset($_POST['subcaste1']))
		{
			
		}
		if(isset($_POST['eat']))
		{
			
		}
		
		if(isset($_POST['drink']))
		{
			
		}

		if(isset($_POST['smoke']))
		{
			
		}
		if(isset($_POST['smoke']))
		{
			
		}
		if(isset($_POST['profile']))
		{
			
		}
		if(isset($_POST['show']))
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