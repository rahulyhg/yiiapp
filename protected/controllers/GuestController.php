<?php

class GuestController extends Controller
{
	public function actionIndex()
	{
		$this->layout= '//layouts/single';
		$this->render('guest');
	}
	
	public function actionForget()
	{
		$this->layout= '//layouts/popup';
		if(isset($_POST['email']))
		{
			$user = Users::model()->findByAttributes(array('emailId'=>$_POST['email']));
			if(isset($user))
			{
				$emailSent = true;
				$this->render('forgot',array('sent'=>$emailSent));
			}
			else
			{
				$emailSent = false;
				$this->render('forgot',array('sent'=>$emailSent));
			}
		}
		else
		{
			
			$this->render('forgot');
		}
	}
	
	public function actionGuest()
	{
		
	}
	
	public function actionAbout()
	{
		
		$this->layout= '//layouts/single';
		$this->render('about');
	}
	
	public function actionUser()
	{
		$searchModel = new SearchForm();
		$model = new UserForm();
		//$this->layout= '//layouts/single';
		$this->render('newuser',array('model'=>$model,'searchModel' =>$searchModel));
	}
	
	public function actionPaiduser()
	{
		$searchModel = new SearchForm();
		$model = new UserForm();
		//$this->layout= '//layouts/single';
		$this->render('paiduser',array('model'=>$model,'searchModel' =>$searchModel));
	}
}