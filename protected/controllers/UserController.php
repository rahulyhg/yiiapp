<?php

class UserController extends Controller
{
	public function actionRegister()
	{
		$user = new Users();
		$userPersonal = new Userpersonaldetails();
		if(isset($_POST['UserForm']))
		{
			
						
			$dob = $_POST['UserForm']['year'].'-'.$_POST['UserForm']['month'].'-'.$_POST['UserForm']['day'];
			$user->emailId = $_POST['UserForm']['emailId'];
			$user->password = $_POST['UserForm']['password'];
			$user->name = $_POST['UserForm']['name'];
			$user->dob = $dob; 
			$user->gender = $_POST['UserForm']['gender'];
			$user->motherTounge = $_POST['UserForm']['motherTounge'];
			$user->createdOn = now();
			$user->active = '0';
			$user->handicapped = $_POST['UserForm'][''];
			$user->highlighted = $_POST['UserForm'][''];
			$user->userType = $_POST['UserForm'][''];
			$user->save();
			$userPersonal->casteId = $_POST['UserForm'][''];
			$userPersonal->religion  = $_POST['UserForm'][''];
			$userPersonal->countryId = $_POST['UserForm'][''];
			$userPersonal->stateId = $_POST['UserForm'][''];
			$userPersonal->mobilePhone = $_POST['UserForm'][''];
			$userPersonal->landPhone = $_POST['UserForm'][''];
			$userPersonal->save();
			
			
		}
		$this->render('contact');
	}
	
	public function actionIndex()
	{
		$this->render('index');
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