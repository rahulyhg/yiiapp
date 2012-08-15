<?php
/*
*
* $Id$
--------------------------------------------------------------------------------------------------------------------------
* Information contained in this file is the intellectual property of Ladbrokes Plc
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
	public function actionIndex()
	{
		$physical = new Physicaldetails();
		$physical->userId = 2;
		$physical->heightId = 23;
		$physical->weight = 15;
		$physical->bodyType =  0;
		$physical->complexion = 0;
		$physical->physicalStatus = 1;
		$physical->save();
	
		$this->render('index');
	}
	
}