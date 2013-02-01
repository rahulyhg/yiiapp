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
		if(isset($usersList->bookmark)){
		$userBook = $usersList->bookmark;
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
			
			if(isset($usersList->bookmark))
			{
				if(isset($usersList->bookmark->profileIDs ))
				{
					$profileIds = explode(",", $usersList->bookmark->profileIDs);
					$arr = array_diff($profileIds, array($_POST['userId']));
					$usersList->bookmark->profileIDs = implode(",", $arr);
					$usersList->bookmark->save();
					echo json_encode(TRUE);
					Yii::app()->end();
				}
			}
			
			
		}
	}
	
	public function actionRemoveAll()
	{
		
	if(isset($_POST['userId']) && !empty($_POST['userId']))
		{
			$usersList = Yii::app()->session->get('user');	
			if(isset($usersList->bookmark))
			{
				if(isset($usersList->bookmark->profileIDs))
				{
					$profileIds = explode(",", $usersList->bookmark->profileIDs);
					$arr = array_diff($profileIds, $_POST['userId']);
					if(sizeof($arr) > 0 ){
					$usersList->bookmark->profileIDs = implode(",", $arr);
					$usersList->bookmark->save();
					}
					else
					{
						$usersList->bookmark->deleteAll();
					}
				}
			}
			
		}
		$this->forward('index');
	}
	
	
	public function actionAdd()
	{
		if(isset($_POST['userId']) && !empty($_POST['userId']))
		{
		$usersList = Yii::app()->session->get('user');	
			if(isset($usersList->bookmark))
			{
				if(isset($usersList->bookmark->profileIDs))
				{
					$profileIds = explode(",", $usersList->bookmark->profileIDs);
					$arr = array_merge($profileIds, array($_POST['userId']));
					$usersList->bookmark->profileIDs = implode(",", $arr);
					$usersList->bookmark->save();
					echo json_encode(TRUE);
					Yii::app()->end();	
				}
			}
		}
	}

public function actionAddAll()
	{
		
	if(isset($_POST['userId']) && !empty($_POST['userId']))
		{
			$usersList = Yii::app()->session->get('user');	
			if(isset($usersList->bookmark))
			{
				if(isset($usersList->bookmark->profileIDs))
				{
					$profileIds = explode(",", $usersList->bookmark->profileIDs);
					$arr = array_merge($profileIds, $_POST['userId']);
					$usersList->bookmark->profileIDs = implode(",", $arr);
					$usersList->bookmark->save();
					echo json_encode(TRUE);
					Yii::app()->end();	
				}
			}
			
		}
	}
}