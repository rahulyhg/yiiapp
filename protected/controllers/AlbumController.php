<?php
/*
*
* $Id$
--------------------------------------------------------------------------------------------------------------------------
* Information contained in this file is the intellectual property of MarryDoor Plc
* Copyright © 2011 MarryDoor. All Rights Reserved.
* ---------------------------------------------------------------------------------------------------------------------------
*
* @author  Dileep G.
* @title AlbumController.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
class AlbumController extends Controller
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
	
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$user = Yii::app()->session->get('user');
		$photos = new Photos();
		$photosList = $photos->findAll('userId='.$user->userId);
		$this->render('index',array('photosList' => $photosList));
	}
	
	public function actionAdd()
	{
		$user = Yii::app()->session->get('user');
		$photos = new Photos();
		$message = "";
		//Upload the profile photo
  		$photoCount = isset($_POST['photoCount']) ? $_POST['photoCount']:1; 
  		for($i = 1; $i < $photoCount; $i++){		  
		if (!empty($_FILES['profilePhoto_'.$i]['tmp_name'])){  
				$file = $_FILES['profilePhoto_'.$i];
				$fileName=basename( $_FILES['profilePhoto_'.$i]['name']);   
				$extension = strtolower(Utilities::getExtension($fileName));  
				if(Utilities::isValidImageExtension($extension)){         
				 	$path = Utilities::getDirectory('images',array('album',$user->marryId)); 
				 	$fileName = $user->marryId.date("his").".".$extension; 
					$targetPath = Utilities::getFullFilePath($path, $fileName);
					$description = trim($_POST['description_'.$i]);
					if(Utilities::uploadFile($_FILES['profilePhoto_'.$i]['tmp_name'], $targetPath)) {
						//code to insert to db
						$photos = new Photos();
						$photos->userId = $user->userId;
						$photos->imageName = $fileName;
						//$photos->description = $description;
						$photos->save();
						$message = "Photo has been uploaded successfully!";
					}else{
						$message = "There was an error uploading the file, please try again!";
					}				
				}	
					
			}
			sleep(1); // set a time delay to upload
  		}
		$this->render('add',array('message'=>$message));
	}
	
}