<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	 private $_id;
	
	public function authenticate()
	{
		
		if(!isset($this->username) || !isset($this->password))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if(isset($this->username) && isset($this->password))
		{
			$record = Users::model()->find('emailId = ? AND password = ?',array($this->username,md5($this->password)));
			
			if(isset($record) && $record['emailId'] != null)
			{
			//User::model()->findAll('first_name=? AND last_name=?', array('Paul', 'Smith'));
			$mail = $record['emailId'];
			$this->_id = $record['userId'];
			$this->setState('user', $record['name']);
			$this->setState('id',$this->_id);
			Yii::app()->session->add('username',$record['name']);
			Yii::app()->session->add('user',$record);
			return true;
			}
			return false ;
		}			
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
	
 public function getId()       //  override Id
   {
       return $this->_id;
   }
}