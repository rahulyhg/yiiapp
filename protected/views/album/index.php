 <?php $user = Yii::app()->session->get('user');
 ?>
    	<div id="album_main"><!--content-wrapper-->
			<!--wrapper-head-->
			<div class="name-bloc"><!--name-bloc-->
				<br />
				<p class="text_pink-hd">Lilly Mathews MD123456</p> 
				<div class="clear"></div>
				<p class="txt_rg">Viewing album</p>
			</div><!--name-bloc-->
			
			<div class="img-bloc"><!--img-bloc-->
			<?php if(isset($photosList) && count($photosList) > 0 ){ 
				$i = 1;
				foreach($photosList as $photo){
				if($i == 1)
				$defaultImage = Utilities::getProfileImage($user->marryId,$photo->imageName);
				$i++;
				?>
			<img src="<?php echo Utilities::getProfileImage($user->marryId,$photo->imageName); ?>" class="gal-img_22" border="0" onclick="javascript:changeAlbumPicture('<?php echo Utilities::getProfileImage($user->marryId,$photo->imageName); ?>');" style="cursor:pointer;" />
			<?php }
				} ?>
			</div><!--img-bloc-->
			
		  <div id="big-wrapper"><!--big-wrapper-->
			
				<div class="content-top"><!--content-top-->
				
							<a class="exp-sub-less" href="#">Express Interest</a>

   <a class="exp-sub-add-less" href="#">Bookmark</a>

     <a class="exp-sub-send-less" href="#">Send Message</a>

			  </div><!--content-top-->
              
              
				
			<div class="star-img"><!--star-img-->
		      <a href="#" class="star-panne-44"/> </a>
              
			<img id="albumImageContainer" src="<?php echo $defaultImage ?>" class="left"  width="352" height="482" />
			   
            <a href="#" class="star-pannel-right-55"/></a>
            
			</div><!--star-img-->
		<div class="clear"></div>
        
        	
			<div class="content-bottom"><!--content-bottom-->
				
			
            <a class="exp-sub-less" href="#">Express Interest</a>

   <a class="exp-sub-add-less" href="#">Bookmark</a>

     <a class="exp-sub-send-less" href="#">Send Message</a>

            </div><!--big-wrapper-->
        	
            
          </div>