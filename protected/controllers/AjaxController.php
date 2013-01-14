<?php

class AjaxController extends Controller
{
	
      
	 public function beforeAction(CAction $action)
        {
                $user = Yii::app()->session->get('user');
                
                if($action->id == 'useremail' || $action->id == 'usermobile')
        		return true;
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
	
	public function actionFamilyphotoclear()
	{
		$user = Yii::app()->session->get('user');
		// remove the unwanted records from table
		$query = 'delete from album where userId ='.$user->userId.' and type=1 and active = 2';
		Utilities::executeRawQuery($query);
	}
	
	public function actionDocumentclear()
	{
		$user = Yii::app()->session->get('user');
		// remove the unwanted records from table
		$query = 'delete from documents where userId ='.$user->userId.' and active = 2';
		Utilities::executeRawQuery($query);
	}
	
	public function actionUseremail()
	{
			$condition = "emailId = '{$_GET['email']}' ";
			$record = Users::model()->find(array('condition' => $condition));
			if(isset($record) && $record['emailId'] != null){
				echo json_encode(TRUE);	
			}
			else
			echo json_encode(FALSE);
			Yii::app()->end();
	}
	
	public function actionUsermobile()
	{
			$condition = "mobilePhone = '{$_GET['mobile']}' ";
			$record = Userpersonaldetails::model()->find(array('condition' => $condition));
			if(isset($record) && $record['mobilePhone'] != null){
				echo json_encode(TRUE);	
			}
			else
			echo json_encode(FALSE);
			Yii::app()->end();
	}
	
}