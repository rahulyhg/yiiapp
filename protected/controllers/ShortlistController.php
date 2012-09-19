<?php

class ShortlistController extends Controller
{
	public function actionIndex()
	{
		$usersList = Users::model()->findByPk(1);
		$userShort = $usersList->shortlist;
		if(sizeof($userShort) > 0){
		$userId = array();
		foreach ($userShort as $value) {
			$userId[] = $value->profileID;
		}
		$userIds = implode(",", $userId);
		$condition = "userId in ($userIds)";
		$users = ViewUsers::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
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