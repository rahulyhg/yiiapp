<?php

class UserController extends Controller
{
	public function actionRegister()
	{
		$user = new Users();
		
		if(Yii::app()->getRequest()->getIsAjaxRequest()) {
		echo CActiveForm::validate( array( $model)); 
		Yii::app()->end(); 
		}
		$userPersonal = new Userpersonaldetails();
		if(isset($_POST['UserForm']))
		{
			$transaction = Yii::app()->db->beginTransaction();
			try{
			//users table						
			$dob = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['date'];
			$user->emailId = $_POST['UserForm']['emailId'];
			$user->password = new CDbExpression("MD5({$_POST['UserForm']['password']})");
			$user->name = $_POST['UserForm']['name'];
			$user->dob = $dob; 
			$user->gender = $_POST['gender'];
			$user->motherTounge = $_POST['motherTounge'];
			$user->createdOn = new CDbExpression('NOW()');
			$user->active = '0';
			$user->save();
			
			//marrydoor ID updated
			$user->marryId = sprintf("MD%05s",$user->primaryKey);
			$user->updateByPk($user->primaryKey,array('marryId'=>$user->marryId));
			
			
			
			//user personal details table
			$userPersonal->userId = $user->primaryKey; 
			$userPersonal->casteId = $_POST['caste'];
			$userPersonal->religion  = $_POST['religion'];
			$userPersonal->countryId = $_POST['country'];
			$userPersonal->stateId = $_POST['state'];
			$userPersonal->mobilePhone = $_POST['UserForm']['mobileNo'];
			$userPersonal->landPhone = $_POST['UserForm']['landNo'];
			$userPersonal->save();
			
			$transaction->commit();
			$session=new CHttpSession;//modified
			$session->open();
			Yii::app()->session->add('username',$user->name);
			Yii::app()->session->add('user',$user);
			
			}
				catch (Exception $e)
				{
				$transaction->rollBack();
				Yii::app()->user->setFlash('error', "{$e->getMessage()}");
				$this->refresh();
				} 
			
			
		}
		$this->render('success',array('user'=>$user,'userPersonal'=>$userPersonal));
	}
	
	public function actionContact()
	{
	
		$userPersonal = new Userpersonaldetails();
		$address = new Address();
		$contact = new Usercontactdetails();
		$physical = new Physicaldetails();
		$education = new Education();
		$habit = new Habit();
		$family = new Familyprofile();
		if(Yii::app()->isStarted)
		{
			$user = Yii::app()->session->get('user',$user);
		}
		if(isset($_POST['userContact']))
		{
			//Will fetch this from session
			$userPersonal->userId = $user->userId;
			$userPersonal->createdBy = $_POST['profileFor'];
			$userPersonal->maritalStatus = $_POST['marital'];
			//$userPersonal->casteId = $_POST[];
			$userPersonal->intercasteable = $_POST['interCaste'];
			//$userPersonal->countryId = $_POST[];
			$userPersonal->stateId = $_POST['state'];
			$userPersonal->distictId = $_POST['district'];
			$userPersonal->place = $_POST['place'];
			//$userPersonal->mobilePhone = $_POST[];
			//$userPersonal->landPhone = $_POST[];
			$userPersonal->save();
			
			$address->userId = $user->userId;
			$address->houseName = $_POST['house'];
			$address->place = $_POST['place'];
			$address->postoffice = $_POST['post'];
			$address->pincode = $_POST['postcode'];
			$address->city = $_POST['city'];
			$address->district = $_POST['district'];
			$address->state = $_POST['state'];
			$address->country  = $_POST['country'];
			$address->save();
			
			
			$contact->userId = $user->userId;
			$contact->alternativeNo = $_POST['alterMobile'];
			$contact->landLine = $_POST['phoneVerify'];
			$contact->facebookUrl = $_POST['facebook'];
			$contact->skypeId = $_POST['skype'];
			$contact->googleIM = $_POST['google'];
			$contact->yahooIM = $_POST['yahoo'];
			$contact->save();
			
			
			$physical->userId = $user->userId;
			$physical->heightId = $_POST['height'];
			$physical->weight = $_POST['weight'];
			$physical->bodyType = $_POST['bodyType'];
			$physical->complexion = $_POST['complexion'];
			$physical->physicalStatus = $_POST['physical'];
			$physical-save();
			
			$education->userId = $user->userId;
			$education->educationId = $_POST['education'];
			$education->occupationId = $_POST['occupation'];
			$education->employedIn = $_POST['employed'];
			if($$_POST['ctc'] == '12')
			$education->yearlyIncome = intval($_POST['income']);
			else 
			$education->yearlyIncome = intval($_POST['income'])*12;
			$education->save();
			
			$habit->userId = $user->userId;
			$habit->food = $_POST['food'];
			$habit->smoking = $_POST['smoke'];
			$habit->drinking = $_POST['drink'];
			$habit->save();
			
			$family->userId = $user->userId;
			$family->familyStatus = $_POST['status'];
			$family->familyType = $_POST['type'];
			$family->familyValues = $_POST['familyValues'];
			$family->brothers = $_POST['brothers'];
			$family->brotherMarried = $_POST['brothersMarry'];
			$family->sisters = $_POST['sisters'];
			$family->SisterMarried = $_POST['sistersMarry'];
			$family->familyDesc = $_POST['familyDesc'];
			$family->userDesc = $_POST['myDesc'];
			$family->save();
			
		}
	}
		public function actionIndex()
	{
		$user = Users::model()->findByPk(2);
		Yii::app()->session->add('username',$user->name);
		Yii::app()->session->add('user',$user);
		
		$userPersonal = Userpersonaldetails::model()->findByAttributes(array('userId'=>2));
		$this->render('contacts',array('user'=>$user,'userPersonal'=>$userPersonal));
	}
	
	
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}