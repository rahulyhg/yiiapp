<?php
/*
 * Author 	: Dileep Gopalan
 * Email	: dileepgm@gmail.com
 * File   	: Profilepicture.php
 * Created on :  18-Jan-2013
 * Description : TODO
 *
 */
class Profilepicture extends CWidget
{
    public $userId;
	public $photosList = array();
	public function init()
    {
        // this method is called by CController::beginWidget()
    }
 
    public function run()
    {
        $photos = new Photos();
		$this->photosList = $photos->findAll('userId='.$this->userId.' and active=1 order by profileImage');
		$this->renderFile(dirname(__FILE__)  . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR .'Profilepicture.php', array('photosList' => $this->photosList));
    }
}
