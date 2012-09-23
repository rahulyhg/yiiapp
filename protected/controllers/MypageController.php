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
	
		$this->render('index');
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
	
	
}