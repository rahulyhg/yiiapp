<?php
/**
* Utility class
*/
class Utilities
{

   const DS = DIRECTORY_SEPARATOR;
   const PS = PATH_SEPARATOR;
   
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
	
}