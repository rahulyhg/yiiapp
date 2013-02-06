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
		if(isset($_GET['id']))
			{
				$user = Users::model()->findByAttributes(array('marryId'=>$_GET['id']));
	
				if(isset($user->name))
				{
					$loggedUser = Yii::app()->session->get('user');
					if(isset($loggedUser)){
					if(isset($loggedUser->addressBook)){
						$arrayList = explode(",",$loggedUser->addressBook->visitedId);
						
						if(!in_array($user->userId,$arrayList)){
						$arrayList[] = $user->userId;
						$visitedId = implode(",", $arrayList);
						$loggedUser->addressBook->visitedId = $visitedId ;
						$loggedUser->addressBook->save();
						}
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
	
	public function actionReference()
	{
		if(isset($_GET['id']))
		{
			$user = Yii::app()->session->get('user');
			$reference = new Reference();
			$references = $reference->findAll('userId='.$user->userId);
			$this->render('reference',array('references'=>$references));
		}
		$this->render('reference');
	}
	
	public function actionDetails()
	{
		if(isset($_GET['id']))
		{
			$user = Users::model()->findByAttributes(array('marryId'=>$_GET['id']));
		
				if(isset($user->name))
				{
					$loggedUser = Yii::app()->session->get('user');
					if(isset($loggedUser->addressBook)){
						$arrayList = explode(",",$loggedUser->addressBook->visitedId);
						if(!in_array($user->userId,$arrayList)){
						$arrayList[] = $user->userId;
						$visitedId = implode(",", $arrayList);
						$loggedUser->addressBook->visitedId = $visitedId ;
						$loggedUser->addressBook->save();
						}
					}
					else {
						$addressbook = new Addressbook();
						$addressbook->userID = $loggedUser->userId;
						$addressbook->visitedId = $user->userId;
						$addressbook->save(); 
					}
					
				}
			
				$this->layout= '//layouts/popup';
				$this->render('contactdetails',array('model'=>$user));
		}
	}
	
	public function actionDetailsedit()
	{
		$user = Yii::app()->session->get('user');
		$userPersonal = $user->userpersonaldetails;
		$contact = $user->usercontactdetails;
		if(isset($_POST['mobile'])){
		if(isset($_POST['mobile']))
		$userPersonal->mobilePhone = $_POST['mobile'];
		$userPersonal->save();	
			
		
		$caddress = $user->addresses(array('condition'=>'addresType=1'));
		$address = $caddress[0]; 
		//communication address
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
		$address->save();
		
		$address = $user->addresses(array('condition'=>'addresType=0'));
		$paddress = $address[0];
		//permanent address
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
		$paddress->save();
			
		//contact details	
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
		
		
		if(isset($_POST['pcontact']))
		{
				$privacy =  $user->privacy(array('condition'=>"items='contact'"));
				if(isset($privacy) && $privacy->items == 'contact'){
				$privacy->privacy = implode(',', $_POST['pcontact']);
				$privacy->save();	
				}
				else {
				$privacy = new Privacy();
				$privacy->userId = $user->userId;
				$privacy->items = 'contact';
				$privacy->privacy = implode(',', $_POST['pcontact']);
				$privacy->save();	
				}
		}
		
		}
		$this->layout= '//layouts/popup';
		$this->render('detailsedit');
	}
	
	public function actionReferenceedit()
	{
		$user = Yii::app()->session->get('user');
		$referenceList = $user->references;
		if(isset($referenceList) && isset($referenceList[0]))
		{
			$reference = $referenceList[0];
		}
		else
		{
		$reference = new Reference();
		$reference->userId = $user->userId;
		}
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

		if(isset($referenceList) && isset($referenceList[1]))
		{
			$reference1 = $referenceList[1];
		}
		else
		{
		$reference1 = new Reference();
		$reference1->userId = $user->userId;
		}
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
		
		if(isset($referenceList) && isset($referenceList[2]))
		{
			$reference2 = $referenceList[2];
		}
		else
		{
		$reference2 = new Reference();
		$reference2->userId = $user->userId;
		}
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
				
				$privacy =  $user->privacy(array('condition'=>"items='reference'"));
				if(isset($privacy) && $privacy->items == 'reference'){
				$privacy->privacy = implode(',', $_POST['reference']);
				$privacy->save();	
				}
				else {
				$privacy = new Privacy();
				$privacy->userId = $user->userId;
				$privacy->items = 'reference';
				$privacy->privacy = implode(',', $_POST['reference']);
				$privacy->save();	
				}
		}
		
		
		$this->layout= '//layouts/popup';
		$this->render('referenceedit');
	}
	
	public function actionAstroedit()
	{
		$user = Yii::app()->session->get('user');
		
		if(isset($_POST['date'])){
		
		if(isset($user->horoscopes) && $horoscope->userId == $user->userId)
		{
			$horoscope = new Horoscopes();
			$horoscope->userId = $user->userId;
		}
		else {
			$horoscope = $user->horoscopes;
			
		}
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

				$privacy =  $user->privacy(array('condition'=>"items='astro'"));
				if(isset($privacy) && $privacy->items == 'astro'){
				$privacy->privacy = implode(',', $_POST['astro']);
				$privacy->save();	
				}
				else {
				$privacy = new Privacy();
				$privacy->userId = $user->userId;
				$privacy->items = 'astro';
				$privacy->privacy = implode(',', $_POST['astro']);
				$privacy->save();	
				}
					
		}
		}
		$this->layout= '//layouts/popup';
		$this->render('astroedit');
	}
	
}