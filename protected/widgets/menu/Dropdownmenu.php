<?php
/*
 * Author 	: Dileep G
 * Email	: dileepgm@gmail.com
 * File   	: Dropdownmenu.php
 * Created on :  02-Jul-2012
 * Description : TODO
 *
 */
class Dropdownmenu extends CWidget
{
    public $dInterests = array(); 
	public $dSubscriptions = array();
	public $dVisitors = array();
	public $dMessages = array();
	public $dRequests = array();
	
	public function init()
    {
        // this method is called by CController::beginWidget()
    }
 
    public function run()
    {
        $user  = Yii::app()->session->get('user');
		
		$sql = "SELECT * FROM view_interests WHERE (receiverId = {$user->userId} or senderId = {$user->userId}) order by interestId desc";
		$command=Yii::app()->db->createCommand($sql);
		$this->dInterests = $command->queryAll();
		
		$sql = "SELECT * FROM view_profile WHERE userId = {$user->userId} and counter = 1 order by profileViewId desc";
		$command=Yii::app()->db->createCommand($sql);
		$this->dVisitors = $command->queryAll();
		
		$sql = "SELECT * FROM view_messages WHERE receiverId = {$user->userId} and status = 0 order by messageId desc limit 5";
		$command=Yii::app()->db->createCommand($sql);
		$this->dMessages = $command->queryAll();
		$this->renderFile(dirname(__FILE__)  . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR .'Dropdownmenu.php', array('dInterests'=>$this->dInterests,'dVisitors'=>$this->dVisitors,'dMessages'=>$this->dMessages));
    }
}
