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
		$this->layout= '//layouts/single';
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
			Utilities::sendClaimEmail();
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
		$this->layout= '//layouts/single';
		$this->render('newuser');
	}
	
	public function actionPaiduser()
	{
		$this->layout= '//layouts/single';
		$this->render('paiduser');
	}
}