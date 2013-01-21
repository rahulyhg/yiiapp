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