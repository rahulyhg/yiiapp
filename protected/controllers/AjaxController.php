<?php

class AjaxController extends Controller
{
	
      
	 public function beforeAction(CAction $action)
        {
                $user = Yii::app()->session->get('user');
                
                if( $action->id == 'updateplaces' || $action->id == 'useremail' || $action->id == 'username'  || $action->id == 'usermobile' || $action->id == 'updateCaste' || $action->id == 'updateState' || $action->id == 'updateDistrict' )
        		return true;
                if(!isset($user)) {
                        $this->redirect(Yii::app()->user->loginUrl);
                        return false;
                }       
                return true;
        }
		
	public function actionIndex()
	{

	}

	public function actionPhotoclear()
	{
		$user = Yii::app()->session->get('user');
		// remove the unwanted records from table
		$query = 'delete from photos where userId ='.$user->userId.' and active = 2';
		Utilities::executeRawQuery($query);
	}
	
	public function actionFamilyphotoclear()
	{
		$user = Yii::app()->session->get('user');
		// remove the unwanted records from table
		$query = 'delete from album where userId ='.$user->userId.' and type=1 and active = 2';
		Utilities::executeRawQuery($query);
	}
	
	public function actionDocumentclear()
	{
		$user = Yii::app()->session->get('user');
		// remove the unwanted records from table
		$query = 'delete from documents where userId ='.$user->userId.' and active = 2';
		Utilities::executeRawQuery($query);
	}
	
	public function actionUseremail()
	{
			$condition = "emailId = '{$_GET['email']}' ";
			$record = Users::model()->find(array('condition' => $condition));
			if(isset($record) && $record['emailId'] != null){
				echo json_encode(TRUE);	
			}
			else
			echo json_encode(FALSE);
			Yii::app()->end();
	}
	
	public function actionUsername()
	{
			$bannedNames = array('sex','fuck','suck','hot','bloody','basterd','marrydoor','doormarry','bloodymary','bloodymarry','fucker','idiot','raskal');
			if(in_array($_GET['name'], $bannedNames))
				echo json_encode(TRUE);	
			else
				echo json_encode(FALSE);
			Yii::app()->end();
	}
	
	public function actionUsermobile()
	{
			$condition = "mobilePhone = '{$_GET['mobile']}' ";
			$record = Userpersonaldetails::model()->find(array('condition' => $condition));
			if(isset($record) && $record['mobilePhone'] != null){
				echo json_encode(TRUE);	
			}
			else
			echo json_encode(FALSE);
			Yii::app()->end();
	}
	
	public function actionUpdateDistrict()
	{
		//States
            $records = Districts::model()->findAll('stateId=:stateId and active=1', array(':stateId'=>(int) $_POST['stateId']));
            $list = CHtml::listData($records, 'districtId', 'name');
            $dropDownDist = "<option value=''>Select District</option>"; 
            foreach($list as $value=>$name)
                $dropDownDist .= CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
 
            // return data (JSON formatted)
            echo CJSON::encode(array(
              'dropDownDist'=>$dropDownDist,
            ));
	}
	
	public function actionUpdateState()
	{
		//States
            $records = States::model()->findAll('countryId=:countryId and active=1', array(':countryId'=>(int) $_POST['countryId']));
            $list = CHtml::listData($records, 'stateId', 'name');
            $dropDownStates = "<option value=''>Select State</option>"; 
            foreach($list as $value=>$name)
                $dropDownStates .= CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
 
            // return data (JSON formatted)
            echo CJSON::encode(array(
              'dropDownStates'=>$dropDownStates,
            ));
	}
	
	public function actionUpdateCaste()
	{
		//Castes
            $records = Caste::model()->findAll('religionId=:religionId and active=1', array(':religionId'=>(int) $_POST['religionId']));
            $list = CHtml::listData($records, 'casteId', 'name');
            $dropDownCastes = "<option value=''>Select Caste</option>"; 
            foreach($list as $value=>$name)
                $dropDownCastes .= CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
 
            // return data (JSON formatted)
            echo CJSON::encode(array(
              'dropDownCastes'=>$dropDownCastes,
            ));
		
	}
	
	
	public function actionUpdatePlaces()
	{
		//States
            $records = Places::model()->findAll('districtId=:districtId and active=1', array(':districtId'=>(int) $_POST['districtId']));
            $list = CHtml::listData($records, 'placeId', 'name');
            $dropDownDist = "<option value=''>Select Places</option>"; 
            foreach($list as $value=>$name)
                $dropDownDist .= CHtml::tag('option', array('value'=>$value),CHtml::encode($name),true);
 
            // return data (JSON formatted)
            echo CJSON::encode(array(
              'dropDownDist'=>$dropDownDist,
            ));
	}
	
	public function actionDeleteReference()
	{
		$user = Yii::app()->session->get('user');
		if(isset($_POST['referId']))
		{
			$reference = $user->references(array('condition'=>"referenceId = {$_POST['referId']}"));

			if( is_array($reference )) {
				foreach( $reference  as $relRecord ) {
					$relRecord->delete();
				}
			}
			else {
				$reference->delete();
			}

				$user->references = Reference::model()->findAll(array('condition'=>"userId = {$_POST['referId']}"));
				echo json_encode(TRUE);
			
		}
		else
		echo json_encode(FALSE);
	}
	
	
}