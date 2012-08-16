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
		$userPersonal = Userpersonaldetails::model()->findByAttributes(array('userId'=>2));
		$address = new Address();
		$contact = new Usercontactdetails();
		$physical = new Physicaldetails();
		$education = new Education();
		$habit = new Habit();
		$family = new Familyprofile();
		$user = Yii::app()->session->get('user');

		//Will fetch this from session
		$userPersonal->userId = $user->userId;
		if(isset($_POST['profileFor']))
		$userPersonal->createdBy = $_POST['profileFor'];
		if(isset($_POST['maritalStatus']))
		$userPersonal->maritalStatus = $_POST['marital'];
		if(isset($_POST['intercasteable']))
		$userPersonal->intercasteable = $_POST['interCaste'];
		if(isset($_POST['stateId']))
		$userPersonal->stateId = $_POST['state'];
		if(isset($_POST['distictId']))
		$userPersonal->distictId = $_POST['district'];
		if(isset($_POST['place']))
		$userPersonal->place = $_POST['place'];
		$userPersonal->save();
			
		$address->userId = $user->userId;
		if(isset($_POST['house']))
		$address->houseName = $_POST['house'];
		if(isset($_POST['place']))
		$address->place = $_POST['place'];
		if(isset($_POST['post']))
		$address->postoffice = $_POST['post'];
		if(isset($_POST['postcode']))
		$address->pincode = $_POST['postcode'];
		if(isset($_POST['city']))
		$address->city = $_POST['city'];
		if(isset($_POST['district']))
		$address->district = $_POST['district'];
		if(isset($_POST['state']))
		$address->state = $_POST['state'];
		if(isset($_POST['country']))
		$address->country  = $_POST['country'];
		$address->save();
			
			
		$contact->userId = $user->userId;
		if(isset($_POST['alterMobile']))
		$contact->alternativeNo = $_POST['alterMobile'];
		if(isset($_POST['phoneVerify']))
		$contact->landLine = $_POST['phoneVerify'];
		if(isset($_POST['facebook']))
		$contact->facebookUrl = $_POST['facebook'];
		if(isset($_POST['skype']))
		$contact->skypeId = $_POST['skype'];
		if(isset($_POST['google']))
		$contact->googleIM = $_POST['google'];
		if(isset($_POST['yahoo']))
		$contact->yahooIM = $_POST['yahoo'];
		$contact->save();
			
			
		$physical->userId = $user->userId;
		if(isset($_POST['height']))
		$physical->heightId = $_POST['height'];
		if(isset($_POST['weight']))
		$physical->weight = $_POST['weight'];
		if(isset($_POST['bodyType']))
		$physical->bodyType = $_POST['bodyType'];
		if(isset($_POST['complexion']))
		$physical->complexion = $_POST['complexion'];
		if(isset($_POST['physical']))
		$physical->physicalStatus = $_POST['physical'];
		$physical->save();
			
		$education->userId = $user->userId;
		if(isset($_POST['education']))
		$education->educationId = $_POST['education'];
		if(isset($_POST['occupation']))
		$education->occupationId = $_POST['occupation'];
		if(isset($_POST['employed']))
		$education->employedIn = $_POST['employed'];
		if(isset($_POST['income']))
		{
		if(isset($_POST['ctc']) && $_POST['ctc'] == '12')
		$education->yearlyIncome = intval($_POST['income']);
		else if(isset($_POST['ctc']))
		$education->yearlyIncome = intval($_POST['income'])*12;
		}
		$education->save();
			
		$habit->userId = $user->userId;
		if(isset($_POST['food']))
		$habit->food = $_POST['food'];
		if(isset($_POST['smoke']))
		$habit->smoking = $_POST['smoke'];
		if(isset($_POST['drink']))
		$habit->drinking = $_POST['drink'];
		$habit->save();
			
		$family->userId = $user->userId;
		if(isset($_POST['status']))
		$family->familyStatus = $_POST['status'];
		if(isset($_POST['type']))
		$family->familyType = $_POST['type'];
		if(isset($_POST['familyValues']))
		$family->familyValues = $_POST['familyValues'];
		if(isset($_POST['brothers']))
		$family->brothers = $_POST['brothers'];
		if(isset($_POST['brothersMarry']))
		$family->brotherMarried = $_POST['brothersMarry'];
		if(isset($_POST['sisters']))
		$family->sisters = $_POST['sisters'];
		if(isset($_POST['sistersMarry']))
		$family->SisterMarried = $_POST['sistersMarry'];
		if(isset($_POST['familyDesc']))
		$family->familyDesc = $_POST['familyDesc'];
		if(isset($_POST['myDesc']))
		$family->userDesc = $_POST['myDesc'];
		$family->save();
			
		//$url = Yii::app()->createUrl('mypage/index');
		//$this->redirect($url);
		$this->render('hobbies');
	}
	public function actionHobby()
	{
		$user = Yii::app()->session->get('user');
		$userHobby  = new Hobiesandinterests();
		$userHobby->userId = $user->userId;
		if(isset($_POST['hobby']))
		{
			$userHobby->hobies = implode(",", $_POST['hobby']);
		}
		if(isset($_POST['interest']))
		{
			$userHobby->interests = implode(",", $_POST['interest']);
		}
		if(isset($_POST['sports']))
		{
			$userHobby->activities = implode(",", $_POST['sports']);
		}
		if(isset($_POST['read']))
		{
			$userHobby->reading = implode(",", $_POST['read']);
		}
		if(isset($_POST['movies']))
		{
			$userHobby->movies = implode(",", $_POST['movies']);
		}
		if(isset($_POST['music']))
		{
			$userHobby->musics = implode(",", $_POST['music']);
		}
		if(isset($_POST['cuisine']))
		{
			$userHobby->cuisine = implode(",", $_POST['cuisine']);
		}
		if(isset($_POST['language']))
		{
			$userHobby->languages = implode(",", $_POST['language']);
		}
		if(isset($_POST['othersLanguage'])&& isset($_POST['otherLanguage']))
		{
			$userHobby->languageOther= $_POST['otherLanguage'];
		}
		$userHobby->save();
		
		
		$this->render('horoscope',array('model' => new Horoscopes()));
	}
	
	public function actionHoro()
	{
		$user = Yii::app()->session->get('user');
		$horoscope = new Horoscopes();
	 		$horoscope->horoscopeFile=CUploadedFile::getInstance($horoscope,'horoscopeFile');
            if($horoscope->save())
            {
                $horoscope->horoscopeFile->saveAs(Yii::getPathOfAlias('webroot').'/files/'.$horoscope->horoscopeFile);
                // redirect to success page
            }
		
		$this->render("partner");
	}
	public function actionHoroupload()
	{
		$user = Yii::app()->session->get('user');
		$horoscope = new Horoscopes();
	 		$file = CUploadedFile::getInstance($horoscope,'horoscopeFile');
             $file->saveAs(Yii::getPathOfAlias('webroot').'/files/'.$file->name);
                // redirect to success page
		
		$this->render("partner");
	}
	
	public function actionIndex()
	{
		$user = Users::model()->findByPk(2);
		Yii::app()->session->add('username',$user->name);
		Yii::app()->session->add('user',$user);

		$userPersonal = Userpersonaldetails::model()->findByAttributes(array('userId'=>2));
		//$this->render('contacts',array('user'=>$user,'userPersonal'=>$userPersonal));
		
		$this->render('horoscope',array('model' => new Horoscopes()));
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