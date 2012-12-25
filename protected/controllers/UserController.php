<?php

class UserController extends Controller
{
	  public function beforeAction(CAction $action)
        {
        		if($action->id == 'register')
        		return true;
                $user = Yii::app()->session->get('user');
                if(!isset($user)) {
                        $this->redirect(Yii::app()->user->loginUrl);
                        return false;
                }       
                else{
                	if(isset($user->userloggeddetails) && sizeof($user->userloggeddetails) > 0)
                	{
                		$this->redirect(array('/mypage'));
                	}
                	else{
                	return true;
                	}	
                }
        }   
	  
	
	public function actionRegister()
	{
		$user = new Users();
		$userPersonal = new Userpersonaldetails();
		$view = 'success';
		if(isset($_POST['UserForm']))
		{
			$transaction = Yii::app()->db->beginTransaction();
			try{
				//users table
				$dob = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['date'];
				$user->emailId = $_POST['UserForm']['emailId'];
				$user->password = new CDbExpression("MD5('{$_POST['UserForm']['password']}')");
				$user->name = $_POST['UserForm']['name'];
				$password = $_POST['UserForm']['password'];
				if(isset($_POST['date']) && isset($_POST['month']) && isset($_POST['year']) )
				{	
					$user->dob = $dob;
				}
				$user->gender = $_POST['gender'];
				$user->motherTounge = $_POST['motherTounge'];
				$user->createdOn = new CDbExpression('NOW()');
				$user->active = '0';
				$user->save();
					
				//marrydoor ID updated
				$user->marryId = sprintf("MD%05s",$user->primaryKey);
				$user->updateByPk($user->primaryKey,array('marryId'=>$user->marryId));
					
				
				if(isset($_POST['UserForm']['coupon']))
				{
					$payment = new Payment();
					$payment->couponcode = $_POST['UserForm']['coupon'];
					$payment->userID = $user->primaryKey;
					$payment->startdate = new CDbExpression('NOW()');
					$payment->actionItem = 'membership';
					$payment->save();
				}	
					
				//user personal details table
				$userPersonal->userId = $user->primaryKey;
				$userPersonal->casteId = $_POST['caste'];
				$userPersonal->religionId  = $_POST['religion'];
				$userPersonal->countryId = $_POST['country'];
				$userPersonal->stateId = $_POST['state'];
				$userPersonal->mobilePhone = $_POST['UserForm']['mobileNo'];
				$userPersonal->landPhone = $_POST['UserForm']['mobileNo'];
				$userPersonal->save();
					
				$transaction->commit();
				
			}
			catch (Exception $e)
			{
				$transaction->rollBack();
				Yii::app()->user->setFlash('error', "{$e->getMessage()}");
				$this->refresh();
			}
				$form = new LoginForm();
				$form->username = $user->marryId;
				$form->password = $password;
				
				if($form->login())
				{
					Yii::app()->session->add('user',$user);
					Yii::log("Create the user succesfully with username {$user->name} and marry door ID {$user->marryId}");	
				}
				else
				{
					 $this->redirect(array('/site'));
				}
				
				
		$this->render('contacts',array('user'=>$user,'userPersonal'=>$userPersonal));
		}
		else 
		{
		$this->redirect(array('/site'));
		}
	}

	public function actionFamilyPic(){
		
	}
	
	public function actionTest()
	{
		$user = Users::model()->findByPk(1);
		Yii::app()->session->add('user',$user);
		$userPersonal = $user->userpersonaldetails;
		$this->render('contacts',array('user'=>$user,'userPersonal'=>$userPersonal));
	}
	
	public function actionContact()
	{
		$user = Yii::app()->session->get('user');
		$userPersonal = $user->userpersonaldetails;
		$address = new Address();
		$paddress = new Address();
		$contact = new Usercontactdetails();
		
			$physical = new Physicaldetails();
			$education = new Education();
    		$habit = new Habit();
     		$family = new Familyprofile();

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
		$userPersonal->placeId = $_POST['place'];
		if(isset($_POST['caste']))
		$userPersonal->casteId = $_POST['caste'];
		if(isset($_POST['religion']))
		$userPersonal->religionId = $_POST['religion'];
		if(isset($_POST['country']))
		$userPersonal->countryId = $_POST['country'];
		if(isset($_POST['mobile']))
		$userPersonal->mobilePhone = $_POST['mobile'];
		$userPersonal->save();
			
		//communication address
		$address->userId = $user->userId;
		if(isset($_POST['house1']))
		$address->houseName = $_POST['house1'];
		if(isset($_POST['houseplace1']))
		$address->place = $_POST['houseplace1'];
		if(isset($_POST['post1']))
		$address->postoffice = $_POST['post1'];
		if(isset($_POST['postcode1']))
		$address->pincode = $_POST['postcode1'];
		if(isset($_POST['housecity1']))
		$address->city = $_POST['housecity1'];
		if(isset($_POST['housedistrict1']))
		$address->district = $_POST['housedistrict1'];
		if(isset($_POST['housestate1']))
		$address->state = $_POST['housestate1'];
		if(isset($_POST['housecountry1']))
		$address->country  = $_POST['housecountry1'];
		$address->addresType = 1;
		$address->save();
		
		//permanent address
		$paddress->userId = $user->userId;
		if(isset($_POST['house']))
		$paddress->houseName = $_POST['house'];
		if(isset($_POST['houseplace']))
		$paddress->place = $_POST['houseplace'];
		if(isset($_POST['post']))
		$paddress->postoffice = $_POST['post'];
		if(isset($_POST['postcode']))
		$paddress->pincode = $_POST['postcode'];
		if(isset($_POST['housecity']))
		$paddress->city = $_POST['housecity'];
		if(isset($_POST['housedistrict']))
		$paddress->district = $_POST['housedistrict'];
		if(isset($_POST['housestate']))
		$paddress->state = $_POST['housestate'];
		if(isset($_POST['housecountry']))
		$paddress->country  = $_POST['housecountry'];
		$paddress->addresType = 0;
		$paddress->save();
			
		//contact details	
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
			
		//physical details
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
			
		
		//education details
		$education->userId = $user->userId;
		if(isset($_POST['education']) && !empty($_POST['education']))
		$education->educationId = $_POST['education'];
		if(isset($_POST['occupation']) && !empty($_POST['occupation']))
		$education->occupationId = $_POST['occupation'];
		if(isset($_POST['employed']))
		$education->employedIn = $_POST['employed'];
		if(isset($_POST['income']) && !empty($_POST['income']))
		{
		$education->yearlyIncome = intval($_POST['income']);
		}
		$education->save();
			
		//habits
		$habit->userId = $user->userId;
		if(isset($_POST['food']))
		$habit->food = $_POST['food'];
		if(isset($_POST['smoke']))
		$habit->smoking = $_POST['smoke'];
		if(isset($_POST['drink']))
		$habit->drinking = $_POST['drink'];
		$habit->save();
			
		
		//family details
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
		
			if(isset($_POST['Users']['familyAlbum'])){
				
			$file = CUploadedFile::getInstance($user,'familyAlbum');
			if(isset($file) && !empty($file->name))
			{
			$extension = strtolower(Utilities::getExtension($file->name));  
			if(Utilities::isValidImageExtension($extension)){         
			$path = Utilities::getDirectory('images',array('familyAlbum',$user->marryId)); 
			
			
			$file->saveAs($path.$user->marryId.'-'.$file->name);
            $family->familyPic = $user->marryId.'-'.$file->name;
			}
			}
			}
		
		$family->save();
			
		
		if(isset($_POST['pcontact']))
		{
				$privacy = new Privacy();
				$privacy->userId = $user->userId;
				$privacy->items = 'contact';
				$privacy->privacy = implode(',', $_POST['pcontact']);
				$privacy->save();	
		}
		if(isset($_POST['family']))
		{
		$privacy = new Privacy();
				$privacy->userId = $user->userId;
				$privacy->items = 'family';
				$privacy->privacy = implode(',', $_POST['family']);
				$privacy->save();
		}
		//$url = Yii::app()->createUrl('mypage/index');
		//$this->redirect($url);
		//$this->render('hobbies');
		$this->render('success',array('user'=>$user));
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
		$horoscope = Horoscopes::model()->findByAttributes(array('userId'=>$user->userId));
		$family = new Familyprofile();
		$this->render("horoscope",array('user'=>$user,'model'=>$horoscope));
	}
	public function actionHoroupload()
	{
		$user = Yii::app()->session->get('user');
		$horoscope = new Horoscopes();
		$horoscope->userId = $user->userId;
		if(isset($_POST['date']))
		$horoscope->astrodate = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['date'];
		if(isset($_POST['city']))
		$horoscope->city = $_POST['city'];
		if(isset($_POST['state']))
		$horoscope->state = $_POST['state'];
		if(isset($_POST['country']))
		$horoscope->country = $_POST['country'];
		if(isset($_POST['hours']) || isset($_POST['minutes']) || isset($_POST['seconds']) || isset($_POST['am']))
		$horoscope->time = $_POST['hours'].'-'.$_POST['minutes'].'-'.$_POST['seconds'].' ,'.$_POST['am'];
		if(isset($_POST['chova']))
		$horoscope->dosham = $_POST['chova'];
		if(isset($_POST['sudha']))
		$horoscope->sudham = $_POST['sudha'];
		if(isset($_POST['sign']))
		$horoscope->sign = $_POST['sign'];
		
			if(isset($_FILES['horoscopeFile'])){
			if(!$_FILES['horoscopeFile']['error']){
			$file = $_FILES['horoscopeFile'];
			$fileName=basename( $_FILES['horoscopeFile']['name']);   
			$extension = strtolower(Utilities::getExtension($fileName));  	
			if(Utilities::isValidImageExtension($extension)){         
				$path = Utilities::getDirectory('images',array('horoscope',$user->marryId));
				$fileName = $user->marryId.".".$extension;
				$targetPath = Utilities::getFullFilePath($path, $fileName);
				if(Utilities::uploadFile($_FILES['horoscopeFile']['tmp_name'], $targetPath)) {
	            $horoscope->horoscopeFile = $fileName;
				}
			}
			}
			}
		$horoscope->save();
	 		    // redirect to success page
		
		
	if(isset($_POST['astro']))
		{
				$privacy = new Privacy();
				$privacy->userId = $user->userId;
				$privacy->items = 'astro';
				$privacy->privacy = implode(",", $_POST['astro']);
				$privacy->save();	
		}
		
		
		$reference = new Reference();
		$reference->userId = $user->userId;
		if(isset($_POST['relation0']))
		$reference->relation = $_POST['relation0'];
		if(isset($_POST['name0']))
		$reference->referName = $_POST['name0'];
		if(isset($_POST['house0']))
		$reference->referHouseName = $_POST['house0'];
		if(isset($_POST['place0']))
		$reference->referPlace = $_POST['place0'];
		if(isset($_POST['city0']))
		$reference->referCity = $_POST['city0'];
		if(isset($_POST['state0']))
		$reference->referState = $_POST['state0'];
		if(isset($_POST['pin0']))
		$reference->referPostcode = $_POST['pin0'];
		if(isset($_POST['post0']))
		$reference->referPostOffice = $_POST['post0'];
		if(isset($_POST['district0']))
		$reference->referDistrict = $_POST['district0'];
		if(isset($_POST['country0']))
		$reference->referCountry = $_POST['country0'];
		if(isset($_POST['email0']))
		$reference->referEmail = $_POST['email0'];
		if(isset($_POST['occupation0']))
		$reference->referOccupation = $_POST['occupation0'];
		if(isset($_POST['timeFrom0']) && isset($_POST['fromA0']) && isset($_POST['timeTo0']) && isset($_POST['toA0'])){
		$time = $_POST['timeFrom0'].':'.$_POST['fromA0'].'-'.$_POST['timeTo0'].':'.$_POST['toA0'];
		$reference->referCallFrom  = $time;
		}
		
		$reference->save();

		$reference1 = new Reference();
		$reference1->userId = $user->userId;
		if(isset($_POST['relation1']))
		$reference1->relation = $_POST['relation1'];
		if(isset($_POST['name1']))
		$reference1->referName = $_POST['name1'];
		if(isset($_POST['house1']))
		$reference1->referHouseName = $_POST['house1'];
		if(isset($_POST['place1']))
		$reference1->referPlace = $_POST['place1'];
		if(isset($_POST['city1']))
		$reference1->referCity = $_POST['city1'];
		if(isset($_POST['state1']))
		$reference1->referState = $_POST['state1'];
		if(isset($_POST['pin1']))
		$reference1->referPostcode = $_POST['pin1'];
		if(isset($_POST['post1']))
		$reference1->referPostOffice = $_POST['post1'];
		if(isset($_POST['district1']))
		$reference1->referDistrict = $_POST['district1'];
		if(isset($_POST['country1']))
		$reference1->referCountry = $_POST['country1'];
		if(isset($_POST['email1']))
		$reference1->referEmail = $_POST['email1'];
		if(isset($_POST['occupation1']))
		$reference1->referOccupation = $_POST['occupation1'];
		if(isset($_POST['timeFrom1']) && isset($_POST['fromA1']) && isset($_POST['timeTo1']) && isset($_POST['toA1'])){
		$time = $_POST['timeFrom1'].':'.$_POST['fromA1'].'-'.$_POST['timeTo1'].':'.$_POST['toA1'];
		$reference1->referCallFrom  = $time;
		}
		$reference1->save();
		
		
		$reference2 = new Reference();
		$reference2->userId = $user->userId;
		if(isset($_POST['relation2']))
		$reference2->relation = $_POST['relation2'];
		if(isset($_POST['name2']))
		$reference2->referName = $_POST['name2'];
		if(isset($_POST['house2']))
		$reference2->referHouseName = $_POST['house2'];
		if(isset($_POST['place1']))
		$reference2->referPlace = $_POST['place2'];
		if(isset($_POST['city2']))
		$reference2->referCity = $_POST['city2'];
		if(isset($_POST['state2']))
		$reference2->referState = $_POST['state2'];
		if(isset($_POST['pin2']))
		$reference2->referPostcode = $_POST['pin2'];
		if(isset($_POST['post2']))
		$reference2->referPostOffice = $_POST['post2'];
		if(isset($_POST['district2']))
		$reference2->referDistrict = $_POST['district2'];
		if(isset($_POST['country2']))
		$reference2->referCountry = $_POST['country2'];
		if(isset($_POST['email2']))
		$reference2->referEmail = $_POST['email2'];
		if(isset($_POST['occupation2']))
		$reference2->referOccupation = $_POST['occupation2'];
		if(isset($_POST['timeFrom2']) && isset($_POST['fromA2']) && isset($_POST['timeTo2']) && isset($_POST['toA2'])){
		$time = $_POST['timeFrom2'].':'.$_POST['fromA2'].'-'.$_POST['timeTo2'].':'.$_POST['toA2'];
		$reference2->referCallFrom  = $time;
		}
		$reference2->save();
		
		
		
		
		if(isset($_POST['reference']))
		{
				$privacy = new Privacy();
				$privacy->userId = $user->userId;
				$privacy->items = 'reference';
				$privacy->privacy = implode(",", $_POST['reference']);
				$privacy->save();
		}
		
		
		$this->render('profilepicture');
		//here we have to show the documents and album upload page
		//then show profile complete page
	}
	
	public function actionShowpartner()
	{
		
		$this->render("partner");
	}
	
	public function actionPartner()
	{
		$user = Yii::app()->session->get('user');
		
		$partner = new Partnerpreferences();
		
		$partner->userId = $user->userId;
		if(isset($_POST['ageFrom']))
		$partner->ageFrom = $_POST['ageFrom'];
		if(isset($_POST['ageTo']))
		$partner->ageTo = $_POST['ageTo'];
		if(isset($_POST['maritial']))
		$partner->maritalStatus = implode(",", $_POST['maritial']);
		
		if(isset($_POST['child']))
		$partner->haveChildren = $_POST['child'];
		if(isset($_POST['heightFrom']))
		$partner->heightFrom = $_POST['heightFrom'];
		if(isset($_POST['heightTo']))
		$partner->heightTo = $_POST['heightTo'];
		if(isset($_POST['status']))
		$partner->physicalStatus = $_POST['status'];
		if(isset($_POST['religion']))
		$partner->religion = $_POST['religion'];
		if(isset($_POST['caste1']))
		$partner->caste = implode(",", $_POST['caste1']);
		if(isset($_POST['star1']))
		$partner->star = implode(",", $_POST['star1']);
		if(isset($_POST['jathakam']))
		$partner->sudham = $_POST['jathakam'];
		if(isset($_POST['dhosham']))
		$partner->dosham = $_POST['dhosham'];
		if(isset($_POST['eat']))
		$partner->eatingHabits = implode(",", $_POST['eat']);
		if(isset($_POST['drink']))
		$partner->drinkingHabits = implode(",", $_POST['drink']);
		if(isset($_POST['smoke']))
		$partner->smokingHabits = implode(",", $_POST['smoke']);
		if(isset( $_POST['country1']))
		$partner->countries = implode(",", $_POST['country1']);
		if(isset($_POST['state1']))
		$partner->states = implode(",", $_POST['state1']);
		if(isset($_POST['district1']))
		$partner->districts = implode(",", $_POST['district1']);
		if(isset($_POST['place1']))
		$partner->places = implode(",", $_POST['place1']);
		if(isset($_POST['language1']))
		$partner->languages = implode(",", $_POST['language1']);
		if(isset($_POST['citizen1']))
		$partner->citizenship = implode(",", $_POST['citizen1']);
		if(isset($_POST['occupation1']))
		$partner->occupation = implode(",", $_POST['occupation1']);
		if(isset($_POST['income']))
		$partner->annualIncome = $_POST['income'];
		if(isset($_POST['partnerDesc']))
		$partner->partnerDescription = $_POST['partnerDesc'];
		
		$partner->save();
		$this->render("hobbies");
	}
	
	
	public function actionPassword()
	{
		
	}
	public function actionDelete()
	{
		$user = Yii::app()->session->get('user');
		if(isset($_POST['delete']))
		{
			$this->redirect(array("//site"));
		}	
		else 
		{
			$this->layout= '//layouts/single';
			$this->render('delete');
		}
	}
	public function actionDeactivate()
	{
		
		$user = Yii::app()->session->get('user');
		if(isset($_POST['deactivate']))
		{
			//deactivate the user and return to the home page
			$this->redirect(array("//site"));
			
		}
		else 
		{
			$this->layout= '//layouts/single';
			$this->render('deactivate');
		}
			
	}
	
	public function actionIndex()
	{
		
		
		$user = Yii::app()->session->get('user');
		$this->render('contacts',array('user'=>$user));
		
		//$this->render('horoscope',array('model' => new Horoscopes()));
	}

	public function actionProfilepicture()
	{
		$user = Yii::app()->session->get('user');
  		$photos = new Photos();
  		$documents = new Documents();

		if(isset($_GET['r']) && $_GET['r'] == 'setimage'){   // set the profile image
			$photoId = (int)trim($_GET['pId']);
			$userId = (int)trim($_GET['uId']);
			$user = Yii::app()->session->get('user');
			if($user->userId == $userId){
				$photos->updateAll(array('profileImage'=>0),'userId='.$userId);  // unset the existing
				$photos->updateAll(array('profileImage'=>1),'photoId='.$photoId);  // set the new image
				$this->redirect(Yii::app()->params['homeUrl']."/user/profilepicture");
				Yii::app()->end();
			}
		}elseif(isset($_GET['r']) && $_GET['r'] == 'deleteimage'){   // delete the image
			$photoId = (int)trim($_GET['pId']);
			$userId = (int)trim($_GET['uId']);
			$user = Yii::app()->session->get('user');
			if($user->userId == $userId){
				$photo = $photos->find('photoId='.$photoId);
				$path = Utilities::getDirectory('images',array('profile',$user->marryId));
				$targetFile = Utilities::getFullFilePath($path, $photo->imageName);
				if(file_exists($targetFile)){
					if(unlink($targetFile)){
						$photos->deleteByPk($photoId);
					}
				}
				$this->redirect(Yii::app()->params['homeUrl']."/user/profilepicture");
				Yii::app()->end();	
			}
		}elseif(isset($_GET['r']) && $_GET['r'] == 'deletedocument'){   // delete the document
			$documentId = (int)trim($_GET['dId']);
			$userId = (int)trim($_GET['uId']);
			$user = Yii::app()->session->get('user');
			if($user->userId == $userId){
				$document = $documents->find('documentId='.$documentId);
				$path = Utilities::getDirectory('images',array('documents',$user->marryId));
				$targetFile = Utilities::getFullFilePath($path, $document->documentName);
				if(file_exists($targetFile)){
					if(unlink($targetFile)){
						$documents->deleteByPk($documentId);
					}
				}
				$this->redirect(Yii::app()->params['homeUrl']."/user/profilepicture");
				Yii::app()->end();	
			}
		}
		$photosList = $photos->findAll('userId='.$user->userId);
		$documentList = $documents->findAll('userId='.$user->userId);
		$this->render('profilepicture',array('photos'=>$photosList,'user'=>$user,'documents'=>$documentList));
	}
	
	public function actionPhotoupload()
	{
	
		$user = Yii::app()->session->get('user');
  		$photos = new Photos();
  		
		//Upload the profile photo
  		$photoCount = isset($_POST['photoCount']) ? $_POST['photoCount']:1; 
  		for($i = 1; $i < $photoCount; $i++){		  
		if (!empty($_FILES['profilePhoto_'.$i]['tmp_name'])){  
				$file = $_FILES['profilePhoto_'.$i];
				$fileName=basename( $_FILES['profilePhoto_'.$i]['name']);   
				$extension = strtolower(Utilities::getExtension($fileName));  
				if(Utilities::isValidImageExtension($extension)){         
				 	$path = Utilities::getDirectory('images',array('profile',$user->marryId)); 
				 	$fileName = $user->marryId.date("his").".".$extension; 
					$targetPath = Utilities::getFullFilePath($path, $fileName);
					if(Utilities::uploadFile($_FILES['profilePhoto_'.$i]['tmp_name'], $targetPath)) {
						//code to insert to db
						$photos = new Photos();
						$photos->updateAll(array('profileImage'=>0),'userId='.$user->userId);  // unset the existing 
						$photos->userId = $user->userId;
						$photos->imageName = $fileName;
						$photos->profileImage = 1;
						$photos->save();
						
					}else{
						echo "There was an error uploading the file, please try again!";
					}				
				}	
					
			}
			sleep(1); // set a time delay to upload
  		}
  		$photosList = $photos->findAll('userId='.$user->userId);
		$this->layout= '//layouts/popup';
		$this->render('photoupload',array('photos'=>$photosList,'user'=>$user));
	}
	
	public function actionDocumentupload()
	{
		$user = Yii::app()->session->get('user');
  		$documents = new Documents();
		//upload profile document
  		$documentCount = isset($_POST['documentCount']) ? $_POST['documentCount']:1;
  		for($i = 1; $i < $documentCount; $i++){
			if (!empty($_FILES['profileDocument_'.$i]['tmp_name'])){   // upload the documents
				$file = $_FILES['profileDocument_'.$i];
				$documentType = trim($_POST['documentType_'.$i]);
				$fileName=basename( $_FILES['profileDocument_'.$i]['name']);   
				$extension = strtolower(Utilities::getExtension($fileName));  
				if(Utilities::isValidDocumentExtension($extension)){         
				 	$path = Utilities::getDirectory('images',array('documents',$user->marryId)); 
				 	$fileName = $user->marryId.date("his").".".$extension; 
					$targetPath = Utilities::getFullFilePath($path, $fileName);
					if(Utilities::uploadFile($_FILES['profileDocument_'.$i]['tmp_name'], $targetPath)) {
						//code to insert to db
						$documents = new Documents();
						$documents->userId = $user->userId;
						$documents->documentName = $fileName;
						$documents->documentType = $documentType;
						$documents->save();
					}else{
						echo "There was an error uploading the file, please try again!";
					}				
				}	
					
			}
			sleep(1); // set a time delay to upload
  		}
  		$documentList = $documents->findAll('userId='.$user->userId);
		$this->layout= '//layouts/popup';
		$this->render('documentupload',array('documents'=>$documentList,'user'=>$user));
	}
	
	public function actionFamilyphotoupload()
	{
	
		$user = Yii::app()->session->get('user');
  		$photos = new Photos();
  		
		//Upload the profile photo
  		$photoCount = isset($_POST['photoCount']) ? $_POST['photoCount']:1; 
  		for($i = 1; $i < $photoCount; $i++){		  
		if (!empty($_FILES['profilePhoto_'.$i]['tmp_name'])){  
				$file = $_FILES['profilePhoto_'.$i];
				$fileName=basename( $_FILES['profilePhoto_'.$i]['name']);   
				$extension = strtolower(Utilities::getExtension($fileName));  
				if(Utilities::isValidImageExtension($extension)){         
				 	$path = Utilities::getDirectory('images',array('profile',$user->marryId)); 
				 	$fileName = $user->marryId.date("his").".".$extension; 
					$targetPath = Utilities::getFullFilePath($path, $fileName);
					if(Utilities::uploadFile($_FILES['profilePhoto_'.$i]['tmp_name'], $targetPath)) {
						//code to insert to db
						$photos = new Photos();
						$photos->updateAll(array('profileImage'=>0),'userId='.$user->userId);  // unset the existing 
						$photos->userId = $user->userId;
						$photos->imageName = $fileName;
						$photos->profileImage = 1;
						$photos->save();
						
					}else{
						echo "There was an error uploading the file, please try again!";
					}				
				}	
					
			}
			sleep(1); // set a time delay to upload
  		}
  		$photosList = $photos->findAll('userId='.$user->userId);
		$this->layout= '//layouts/popup';
		$this->render('familyphotoupload',array('photos'=>$photosList,'user'=>$user));
	}
}