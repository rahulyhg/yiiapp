<?php

class HighlightController extends Controller
{
	public function actionIndex()
	{

		//get user from session
		$users = Users::model()->findByPk(1);
		if($users->highlighted == 1	)
		{
			$this->render('index',array('isHighLighted'=>true));
		}
		else
		$this->render('index');
	}
	
	public function actionupdate()
	{
		
		$users = Users::model()->findByPk(1);
		if($users->highlighted == 1	)
		{
			$this->render('index',array('isHighLighted'=>true));
		}
		else if(isset($_POST['coupon']))
		{
			//get user from session
			$this->render('index',array('isHighLighted'=>true));
			
		}
		else
		$this->render('index');
	}

}