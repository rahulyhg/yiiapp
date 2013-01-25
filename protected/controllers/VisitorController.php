<?php

class VisitorController extends Controller
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
		//SELECT * FROM view_profile WHERE visitedId = 1 order by visitTime DESC limit 1,25
		$user = Yii::app()->session->get('user');
		$sql = "SELECT * FROM view_profile WHERE visitedId = {$user->userId} order by visitTime DESC limit 1,25 ";
		$command=Yii::app()->db->createCommand($sql);
		$users = $command->queryAll();
		
		$sql1 = "SELECT * FROM view_profile WHERE visitedId = {$user->userId} order by visitTime DESC limit 26,50 ";
		$command=Yii::app()->db->createCommand($sql1);
		$visitors = $command->queryAll();
		
		$this->render('index',array('users'=>$users,'visitors'=>$visitors));
	}
	
}