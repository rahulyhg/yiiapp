<?php

class BookmarkController extends Controller
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
		$userBook = $usersList->bookmark;
		if(isset($userBook)){
		$condition = "userId in ($userBook->profileIDs)";
		$users = Users::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
		
		if(sizeof($users) > 0)
		{
			
		$totalUser = sizeof($users);
		$totalPage = ceil($totalUser/10);	
		$this->render('index',array('users'=>$users,'totalUser'=>$totalUser,'totalPage' => $totalPage));
		}
		else
		{
			$this->render('index');
		}
		
		}
		else 
		{
			$this->render('index');
		}
		
	}
	
	public function actionRemove()
	{
		if(isset($_POST['userId']) && !empty($_POST['userId']))
		{
			//change this from session
			$usersList = Yii::app()->session->get('user');
			
			$sql = "DELETE FROM bookmark WHERE userID = '{$usersList->userId}' AND profileIDs IN({$_POST['userId']})";
			$command=Yii::app()->db->createCommand($sql);
			$results=$command->query();
			
			$this->forward('index');	
		}
	}
	
	
	public function actionAdd()
	{
		if(isset($_POST['userId']) && !empty($_POST['userId']))
		{
			//change this from session
			$usersList = Yii::app()->session->get('user');
			if(isset($usersList->bookmark->profileIDs) && !empty($usersList->bookmark->profileIDs))
			{
			if(is_array($_POST['userId']))
			{
				$values = implode(",", $_POST['userId']);
				$usersList->bookmark->profileIDs = $usersList->bookmark->profileIDs.','.$values;
			}
			else {
				$usersList->bookmark->profileIDs = $usersList->bookmark->profileIDs.','.$_POST['userId'];
			}					
				$usersList->bookmark->save();
			}
			$this->forward('index');	
		}
	}

}