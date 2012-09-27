<?php
/*
 *
 * $Id$
 --------------------------------------------------------------------------------------------------------------------------
 * Information contained in this file is the intellectual property of MarryDoor Plc
 * Copyright © 2011 MarryDoor. All Rights Reserved.
 * ---------------------------------------------------------------------------------------------------------------------------
 *
 * @author  Ageesh K Gopinath
 * @title MypageController.php
 * @description <Description of this class>
 *  @filesource <URL>
 *  @version <Revision>
 */
class MypageController extends Controller
{

	public function beforeAction(CAction $action)
	{
		if($action->id == 'byid')
		return true;
		$user = Yii::app()->session->get('user');
		if(!isset($user)) {
			$this->redirect(Yii::app()->user->loginUrl);
			return false;
		}
		return true;
	}

	public function actionIndex()
	{
		$user = Yii::app()->session->get('user');
		if(isset($user->partnerpreferences))
		{
			$condition  = Utilities::getPartnerPreference($user->partnerpreferences);
			$usersV = ViewUsers::model()->findAll(array('condition'=>$condition,
			'select'=>'t.userId',
    		'distinct'=>true,
			'order'=> 'createdOn DESC' ));
			$userIds = array();
			foreach ($usersV as $key => $value) {
				$userIds[] = $value->userId;
			}

			if(sizeof($userIds) > 0 )
			{
				$userList = implode(",", $userIds);
				$scondition = " userId in ({$userList}) and userId != {$user->userId} ";
				$users = Users::model()->findAll(array(
				'condition'=>$scondition,
				'order'=> 'createdOn DESC' ));



				$highLightUser = array();
				$normalUser = array();
				foreach ($users as $key => $value) {
					if($value->highlighted == 1 )
					$highLightUser[] = $value;
					else
					$normalUser[] = $value;
				}

				$this->render('index',array('highlight'=>$highLightUser,'normal'=>$normalUser));
				return ;
			}
			else 
			$this->render('index');
		}
		else
		{
			$this->render('index');
		}
	}

	public function actionMyprofile()
	{
		$this->render('myprofile');
	}

	public function actionContact()
	{
		$this->render('mycontact');
	}

	public function actionReference()
	{
		$user = Yii::app()->session->get('user');
		$referenceList = $user->references;
		if(isset($referenceList) )
		{
			$this->render('myreference',array('referenceList'=>$referenceList));
		}
		else
		$this->render('myreference');
	}

	public function actionAccount()
	{
		$user = Yii::app()->session->get('user');
		$sql = "SELECT count(*) as pCount FROM profileviews WHERE ( FIND_IN_SET( {$user->userId},visitedId))";
		$command=Yii::app()->db->createCommand($sql);
		$profileCount = $command->queryRow();
		$this->render('myaccount',array('profileCount' => $profileCount['pCount']));
	}

	public function actionAlbum()
	{
		$this->render('myalbum');
	}

	public function actionAddressbook()
	{
		$loggedUser = Yii::app()->session->get('user');
		if(isset($loggedUser->addressBook)){
			$userIds = $loggedUser->addressBook->visitedId;
			$condition = "userId in ({$userIds}) and userId != {$loggedUser->userId} ";
			$users = Users::model()->findAll(array('condition'=>$condition,'order'=> 'createdOn DESC' ));
			$this->render('addressBook',array('users'=>$users));
		}

		else
		$this->render('addressBook');
	}


}