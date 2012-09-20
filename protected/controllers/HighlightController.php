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
		$isHighLighted = false;
		if($users->highlighted == 1	)
		{
			$isHighLighted = true;
		}
		else if(isset($_POST['coupon']))
		{
			//get user from session
			$users = Users::model()->findByPk(1);
			$coupon = Coupon::model()->findByAttributes(array('couponCode'=>$_POST['coupon']));
			$coupon->isUsed = 1;
			$coupon->save();
			$users->highlighted = 1 ;
			$users->save();
			$isHighLighted = true;
			
			
		}
		$this->render('index',array('isHighLighted'=> $isHighLighted));
	}

}