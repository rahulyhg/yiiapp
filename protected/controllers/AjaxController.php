<?php

class AjaxController extends Controller
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

	}

	public function actionPhotoclear()
	{
		$user = Yii::app()->session->get('user');
		// remove the unwanted records from table
		$query = 'delete from photos where userId ='.$user->userId.' and active = 2';
		Utilities::executeRawQuery($query);
	}
}