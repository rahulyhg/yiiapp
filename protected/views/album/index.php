	<?php if($message == "") { ?>
	<div id="album_main"><!--content-wrapper-->
			<!--wrapper-head-->
			<div class="name-bloc"><!--name-bloc-->
				<br />
				<p class="text_pink-hd"><?php echo $user->name." ".$user->marryId ?></p> 
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
				
							<a class="exp-sub-less" href="#" onclick="javascript:expressInterest();">Express Interest</a>

   <a class="exp-sub-add-less" href="#" onclick="javascript:bookmark();">Bookmark</a>

     <a class="exp-sub-send-less" href="<?php echo Utilities::createAbsoluteUrl('message','compose') ?>">Send Message</a>

			  </div><!--content-top-->
              
              
				
			<div class="star-img"><!--star-img-->
		      <a href="#" class="star-panne-44"/> </a>
              
			<img id="albumImageContainer" src="<?php echo $defaultImage ?>" class="left"  width="352" height="482" />
			   
            <a href="#" class="star-pannel-right-55"/></a>
            
			</div><!--star-img-->
		<div class="clear"></div>
        
        	
			<div class="content-bottom"><!--content-bottom-->
				
			<!-- hidden form -->
			<form name="frmMyAlbum" id="frmMyAlbum" method="post" action="<?php echo Utilities::createAbsoluteUrl('album','index',array('mId'=>$user->marryId)); ?>" >
              <input type="hidden" id="action" name="action" value="" />
              </form>
              
            <a class="exp-sub-less" href="#" onclick="javascript:expressInterest();">Express Interest</a>

   <a class="exp-sub-add-less" href="#" onclick="javascript:bookmark();">Bookmark</a>

     <a class="exp-sub-send-less" href="<?php echo Utilities::createAbsoluteUrl('message','compose') ?>">Send Message</a>

            </div><!--big-wrapper-->
        	
            
          </div>
    <?php } else {?>
    <div id="album_main">
    	<?php echo $message; ?>
    </div>
     <?php } ?>   
  <script type="text/javascript">
  
  function expressInterest()
  {
	  document.getElementById('action').value = 'expressInterest';
	  document.frmMyAlbum.submit();
  }
  
  function bookmark()
  {
	  document.getElementById('action').value = 'bookmark';
	  document.frmMyAlbum.submit();
  }

  
  </script>
