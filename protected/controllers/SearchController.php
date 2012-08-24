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
		
		if(isset($_POST['gender']))
		$gender = $_POST['gender'];
		if(isset($_POST['ageFrom']))
		$ageFrom = $_POST['ageFrom'];
		if(isset($_POST['ageTo']))
		$ageTo = $_POST['ageTo'];
		if(isset($_POST['religion']))
		$religion = $_POST['religion'];
		
		if(isset($_POST['caste']))
		$caste = $_POST['caste'];
		
		$this->render('regular');
	}
	
	public function actionAdvance(){
		$this->render('advance');
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