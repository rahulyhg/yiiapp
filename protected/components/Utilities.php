<?php
/**
* Utility class
*/
class Utilities
{

   const DS = DIRECTORY_SEPARATOR;
   const PS = PATH_SEPARATOR;
   
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
 
 public static function getHeights()
 {
  $height = array();
  foreach( range(150,200) as $cm){
   $feet = $cm*0.3937008/12;
      $ft = (int)$feet;
      $inc = ceil(($feet-$ft)*12);
   $height[strval($cm)] = strval($cm.' - '.$ft.'ft '.$inc.'in');
     }
  return $height; 
 }
 
 public static function getAge()
 {
  $days = array();
     foreach( range(18,50) as $day){
   $days[$day] = $day;
     }
     return $days; 
 }
 
 public static function getAnnualSalary()
 {
  $salary = array();
     foreach( range(18,50) as $day){
   $days[$day] = $day;
     }
     return $days;
 }
 
 public static function getMeridiem()
 {
  return array('am' => 'AM','pm' =>'PM');
 }
 
 public static function getBodyType()
 {
 	return array('0'=>'Average','1'=>'Athletic','2'=>'Slim','3'=>'Heavy');
 }
	public static function getBodyColor()
 {
 	return array('0'=>'Very Fair','1'=>'Fair','2'=>'Wheatish','3'=>'Wheatish Brown','4'=>'Dark');
 }
 
 public static function getMaritalStatus()
 {
 	return array('0'=>'Very Fair','1'=>'Fair','2'=>'Wheatish','3'=>'Wheatish Brown','4'=>'Dark');
 }
 
 public static function getProfileCreated()
 {
 	
 }
 public static function getInterCaste()
 {
 	
 }
 
 public static function physicalStatus()
 {
 	
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

 public static function getAgeFromDateofBirth($dob)
 {
    return floor((time() - strtotime($dob)) / 31556926);
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
   public static function getFtpPath(){
   	return Yii::app()->params['ftpPath'];
   }
   
	public static function getDirectory($path,$subdirectory=array()){

		$createPath = self::getFtpPath().self::DS.$path;	
		if(!is_dir($createPath)){
				mkdir($createPath, 0777);
				chmod($createPath, 0777);
			}
		$returnPath = $createPath;
		if(!empty($subdirectory)){
			foreach($subdirectory as $dir){
				$createPath = $returnPath.self::DS.$dir;
				if(!is_dir($createPath)){
					mkdir($createPath, 0777);
					chmod($createPath, 0777);
				}
				$returnPath = $createPath;
			}
		}
		return $returnPath;
   }
	
   public static function getExtension($file) {  
		$position = strrpos($file,".");  
		if (!$position) { return ""; } 
		$length = strlen($file) - $position;  
		$extension = substr($file,$position+1,$length);  
		return $extension;  
	} 
	
	public static function getFullFilePath($path,$fileName){
		return $path.self::DS.$fileName;
	}
	
	public static function isValidImageExtension($extension){
		if(in_array($extension,array('jpg','jpeg','gif','png'))){
			return true;
		}else{
			return false;
		}
	}
	
	public static function uploadFile($fileName,$path){
		if(move_uploaded_file($fileName, $path)) { 
				return true;
			} else{  
				 return false;  
			} 
	}
	
	public static function getProfileImage($marryId,$imageName){
		if($imageName != ''){
			return Yii::app()->params['mediaUrl']."/profile/".$marryId."/".$imageName;
		}else{
			return Yii::app()->params['mediaUrl']."/profile/noimage.jpg";
		}
	}
	
	public static function isValidDocumentExtension($extension){
		if(in_array($extension,array('txt','doc','docx','pdf','rft','jpg','jpeg','png'))){
			return true;
		}else{
			return false;
		}
	}
}