<?php

class PaymentController extends Controller
{
	
	
	  public function beforeAction()
        {
                $user = Yii::app()->session->get('user');
                if(!isset($user)) {
                        $this->redirect(Yii::app()->user->loginUrl);
                        return false;
                }       
                return true;
        }  
	
      
        
	       
	public function actionIndex()
	{
		$this->render('index');
		
	}
	
	
	public function actionUpdate()
	{
		
		$users = $user = Yii::app()->session->get('user');
		$isHighLighted = false;
		if(isset($_POST['coupon']))
		{
			//get user from session
			
			$coupon = Coupon::model()->findByAttributes(array('couponCode'=>$_POST['coupon']),'isUsed=0');
			$coupon->isUsed = 1;
			$coupon->save();
			$users->highlighted = 1 ;
			$users->save();
			if(isset($coupon) && !empty($coupon)){
			$payment = new Payment();
			$paypment->userID = $users->userId;
			$payment->couponcode = $_POST['coupon'];
			$payment->startdate = new CDbExpression('NOW()');
			$payment->actionItem = 'membership'; 
			$payment->save();
			}
			
		}
		$this->forward('summary');
	}
	
	public function actionRecharge()
	{
		$this->render('recharge');
	}
	
	public function actionSummary()
	{
		$loggedUser = Yii::app()->session->get('user');
		$payments = $loggedUser->payment(array('order'=> 'startdate ASC'));
		if(isset($payments ) && sizeof($payments) > 0)
		{
			$this->render('summary',array('payment' =>$payments));
		}
		else
		{
			$this->render('summary');
		}
	}
	
}