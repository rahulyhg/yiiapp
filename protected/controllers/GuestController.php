<?php

class GuestController extends Controller
{
	public function actionIndex()
	{
		$this->layout= '//layouts/single';
		$this->render('guest');
	}
	
	public function actionGuest()
	{
		
	}
	
	public function actionAbout()
	{
		$this->layout= '//layouts/single';
		$this->render('about');
	}
	
}