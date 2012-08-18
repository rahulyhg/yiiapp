<?php
/**
* Utility class
*/
class Utilities
{
    

    
    public static function getRegDays() {
    	$days = array('00'=>'Day');
    	foreach( range(1,31) as $day){
    		if($day < 10) {
    			$days['0'.$day] = '0'.$day;
    		} else {
    			$days[$day] = $day;
    		}
    	}
    	return $days;
    }
    
	public static function getRegMonths()
	{
		return array(
				 '00' => 'Month',
				 '01' => Yii::t('app','January'), 
				 '02' => Yii::t('app','February'),
				 '03' => Yii::t('app','March'), 
				 '04' => Yii::t('app', 'April'),
				 '05' => Yii::t('app','May'),
				 '06' => Yii::t('app','June'),
				 '07' => Yii::t('app','July'),
				 '08' => Yii::t('app','August'), 
				 '09' => Yii::t('app','September'), 
				 '10' => Yii::t('app','October'), 
				 '11' => Yii::t('app','November'),
				 '12' => Yii::t('app','December'),
		);
	}
	
	
	public static function getRegYears()
	{

		$yearNow = self::currentYear();
		$yearFrom = $yearNow - 59;
		$yearTo = $yearNow;
		$arrYears = array('0000'=>'Year');

		foreach (range($yearFrom, $yearTo) as $number) {
		 $arrYears[$number] = $number;
		}
		return $arrYears;
	}
	
	public static function getTime()
	{
		return array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12');
	}
	
	public static function getMeridiem()
	{
		return array('am' => 'AM','pm' =>'PM');
	}
	
	public static function getYears()
	{
		$yearNow = self::currentYear();
		$yearFrom = $yearNow - 10;
		$yearTo = $yearNow + 10;
		$arrYears = array(''=>'Year');

		foreach (range($yearFrom, $yearTo) as $number) {
		 $arrYears[$number] = $number;
		}
		return $arrYears;
	}
	
	/**
	 * Get the current year
	 */
	 
	public static function currentYear()
	{
		return date("Y");
	}	
	
	/**
	 * Get the current Day
	 */
	 
	public static function currentDay()
	{
		return date("d");
	}
	
	/**
	 * Get the current Day
	 */
	 
	public static function currentMonth()
	{
		return date("m");
	}
	
	
	public static function sendClaimEmail($claimParams) {
		$subject =  "Mobile Promotions Claim";
        // escaped just in case...
        $datetime = new DateTime(); 
        $dString = $datetime->format('Y/m/d H:i:s');
        $body = htmlentities("UserName: {$claimParams['customerId']}\nEmail Address: {$claimParams['emailId']}\nPromotion Code: {$claimParams['claimcode']}\nDate:{$dString}",
                                ENT_QUOTES, 'UTF-8');
        set_time_limit(0);
        Yii::import('application.extensions.*');
        $message = new YiiMailMessage();
       	$message->setTo(array(Yii::app()->params['MailTo']=>'Promotions'));
        $message->setFrom(Yii::app()->params['MailFrom']);
        $message->setSubject($subject);
        $message->setBody($body);
        $numsent = Yii::app()->mail->send($message);
	}
     
}