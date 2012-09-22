<?php

class PrivacyController extends Controller
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
		$user = Yii::app()->session->get('user');
		
		if(!empty($user->privacy))
		$privacy = $user->privacy;
		else 
		$privacy = new Privacy();

		$alValue = array();
		$fValue = array();
		$dValue = array();
		$aValue = array();
		$rValue = array();
		$cValue = array();

		foreach($privacy as $privacyData)
		{
			if($privacyData->items == 'album')
			$alValue = explode(',',$privacyData->privacy );
				
			if($privacyData->items == 'family')
			$fValue = explode(',',$privacyData->privacy );
				
			if($privacyData->items == 'contact')
			$cValue = explode(',',$privacyData->privacy );
				
			if($privacyData->items == 'reference')
			$rValue = explode(',',$privacyData->privacy );
				
			if($privacyData->items == 'documents')
			$dValue = explode(',',$privacyData->privacy );
				
			if($privacyData->items == 'astro')
			$aValue = explode(',',$privacyData->privacy );
				
		}//end of foreach

		$this->render('index',array('album'=>$alValue,'family'=>$fValue,'documents'=>$dValue,'astro'=>$aValue,'reference'=>$rValue,'contact'=>$cValue));
	}

	public function actionUpdate()
	{
		$user = Yii::app()->session->get('user');
		if(isset($_POST['family']))
		{
			$privacy = Privacy::model()->findByAttributes(array('userId'=>$user->userId,'items'=>'family'));
			if(isset($privacy) && isset($privacy->privacy))
			{
				$privacy->privacy = implode(',', $_POST['family']);
			}
			else
			{
				$privacy = new Privacy();
				$privacy->userId = $user->userId;
				$privacy->items = 'family';
				$privacy->privacy = implode(',', $_POST['family']);
			}
			$privacy->save();

		}
		if(isset($_POST['album']))
		{
			$privacy = Privacy::model()->findByAttributes(array('userId'=>$user->userId,'items'=>'album'));
			if(isset($privacy) && isset($privacy->privacy))
			$privacy->privacy = implode(',', $_POST['album']);
			else
			{
				$privacy = new Privacy();
				$privacy->userId = $user->userId;
				$privacy->items = 'album';
				$privacy->privacy = implode(',', $_POST['album']);
			}
			$privacy->save();
		}
		if(isset($_POST['astro']))
		{
			$privacy = Privacy::model()->findByAttributes(array('userId'=>$user->userId,'items'=>'astro'));
			if(isset($privacy) && isset($privacy->privacy))
			$privacy->privacy = implode(",", $_POST['astro']);
			else
			{
				$privacy = new Privacy();
				$privacy->userId = $user->userId;
				$privacy->items = 'astro';
				$privacy->privacy = implode(",", $_POST['astro']);
			}
			$privacy->save();

		}
		if(isset($_POST['documents']))
		{
			$privacy = Privacy::model()->findByAttributes(array('userId'=>$user->userId,'items'=>'documents'));
			if(isset($privacy) && isset($privacy->privacy))
			$privacy->privacy = implode(',', $_POST['documents']);
			else
			{
				$privacy = new Privacy();
				$privacy->userId = $user->userId;
				$privacy->items = 'documents';
				$privacy->privacy = implode(',', $_POST['documents']);
			}
			$privacy->save();
		}
		if(isset($_POST['reference']))
		{
			$privacy = Privacy::model()->findByAttributes(array('userId'=>$user->userId,'items'=>'reference'));
			if(isset($privacy) && isset($privacy->privacy))
			$privacy->privacy = implode(',', $_POST['reference']);
			else
			{
				$privacy = new Privacy();
				$privacy->userId = $user->userId;
				$privacy->items = 'reference';
				$privacy->privacy = implode(',', $_POST['reference']);
			}
			$privacy->save();
		}
		if(isset($_POST['contact']))
		{
			$privacy = Privacy::model()->findByAttributes(array('userId'=>$user->userId,'items'=>'contact'));
			if(isset($privacy) && isset($privacy->privacy))
			$privacy->privacy = implode(',', $_POST['contact']);
			else
			{
				$privacy = new Privacy();
				$privacy->userId = $user->userId;
				$privacy->items = 'contact';
				$privacy->privacy = implode(',', $_POST['contact']);
			}
			$privacy->save();
		}

		$this->actionIndex();
	}

	

	public function actionSave()
	{
		$privacy = Privacy::model()->findByAttributes(array('userId'=>2,'items'=>'album'));
		$privacy->save();
		$this->layout= '//layouts/single';
		$this->render('forgot');
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