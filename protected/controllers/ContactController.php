<?php

class ContactController extends Controller
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
	$this->layout= '//layouts/single';	
	if(isset($_GET['id']))
		{
			$user = Users::model()->findByAttributes(array('marryId'=>$_GET['id']));

			if(isset($user->name))
			{
				$loggedUser = Yii::app()->session->get('user');
				if(isset($loggedUser)){
				if(isset($loggedUser->addressBook)){
					$arrayList = explode(",",$loggedUser->addressBook->visitedId);
					$arrayList[] = $user->userId;
					$visitedId = implode(",", $arrayList);
					$loggedUser->addressBook->visitedId = $visitedId ;
					if(!in_array($visitedId,$arrayList))  
					$loggedUser->addressBook->save();
				}
				else {
					$addressbook = new Addressbook();
					$addressbook->userID = $loggedUser->userId;
					$addressbook->visitedId = $user->userId;
					$addressbook->save(); 
				}
				
				}
				$this->render('index',array('model'=>$user));
			}
		}
		else
		{
			$this->render('index');
		}
	}

}