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
		$this->render('index');
	}
	
}