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
		if(isset($usersList->shortlist)){
		$userShort = $usersList->shortlist;
		$condition = "userId in ($userShort->profileID)";
		$users = Users::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
		
		if(sizeof($users) > 0)
		{
			
		$totalUser = sizeof($users);
		$totalPage = ceil($totalUser/10);	
		$this->render('shortlist',array('users'=>$users,'totalUser'=>$totalUser,'totalPage' => $totalPage));
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
			
			if(isset($usersList->shortlist))
			{
				if(isset($usersList->shortlist->profileID ))
				{
					$profileIds = explode(",", $usersList->shortlist->profileID);
					$arr = array_diff($profileIds, array($_POST['userId']));
					$usersList->shortlist->profileID = implode(",", $arr);
					$usersList->shortlist->save();
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
			if(isset($usersList->shortlist))
			{
				if(isset($usersList->shortlist->profileID ))
				{
					$profileIds = explode(",", $usersList->shortlist->profileID);
					$arr = array_diff($profileIds, $_POST['userId']);
					if(sizeof($arr)){
					$usersList->shortlist->profileID = implode(",", $arr);
					$usersList->shortlist->save();
					}
					else
					{
						$usersList->shortlist->deleteAll();
					}
				}
			}
			
		}
		$this->forward('index');
	}
	
	
	public function actionAdd()
	{
		
	}
	

}