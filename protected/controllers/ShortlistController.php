<?php

class ShortlistController extends Controller
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
		$usersList = Yii::app()->session->get('user');
		$userShort = $usersList->shortlist;
		if(isset($userShort)){
		$condition = "userId in ($userShort->profileID)";
		$users = Users::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
		$this->render('shortlist',array('users'=>$users));
		}
		else 
		{
			$this->render('shortlist');
		}
	}
	
	public function actionRemove()
	{
		if(isset($_POST['userId']) && !empty($_POST['userId']))
		{
			//change this from session
			$usersList = Users::model()->findByPk(1);
			
			$sql = "DELETE FROM shortlist WHERE userID = '1' AND profileID IN({$_POST['userId']})";
			$command=Yii::app()->db->createCommand($sql);
			$results=$command->query();
			
			$this->forward('index');	
		}
	}
	
	
	public function actionAdd()
	{
		
	}
	

}