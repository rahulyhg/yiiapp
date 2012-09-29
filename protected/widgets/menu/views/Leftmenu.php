 <?php
 	// get the user details from session value
 	$user = Yii::app()->session->get('user'); 
 	$profileImage = $user->photos(array('condition'=>'profileImage = 1'));
 	$image = $profileImage[0]->imageName;
 ?>
        <!--profile details-section-->
        	<div class="profile_200">
 
 
     <a href="<?php echo Utilities::createAbsoluteUrl('album','',array()); ?>"><img src="<?php echo Utilities::getProfileImage($user->marryId,$image) ?>" border="0" class="mrgn_5top" /></a>
	      <p class="mrgn_25"><span class="text_pink_13"><a href="my-page.html">Biju George</a></span></p>
                <div class="clear"></div>
                <div class="line"></div>
                
                <div class="div_ww">
                <img src="<?php echo Utilities::getMediaUrl() ?>/img_03more.jpg" class="left" style="width:100%;" /> </div>
                
                    
        <p class="text_blue_15">REMAINING. <a href="#">RE-CHARGE&nbsp;NOW</a></p>    
        
        
              <div class="clear"></div>
                <div class="line_sm"></div>
                 <span  class="innersidelinks-still-l"><a href="<?php echo Utilities::createAbsoluteUrl('user','mypage',array()); ?>">My Page</a></span><p class="space-5px">&nbsp;</p>
                  <span  class="innersidelinks-l"><a href="<?php echo Utilities::createAbsoluteUrl('user','myprofile',array()); ?>">My Profile</a></span><p class="space-5px">&nbsp;</p>
                  <span  class="innersidelinks-l"><a href="<?php echo Utilities::createAbsoluteUrl('user','myaccount',array()); ?>">My Account</a></span><p class="space-5px">&nbsp;</p>
              
                  <span  class="innersidelinks-l"><a href="<?php echo Utilities::createAbsoluteUrl('user','mysettings',array()); ?>">My Settings</a></span>
              <div class="clear"></div>
                <div class="line_sm"></div>
                <p class="txt_bld-15"><img src="<?php echo Utilities::getMediaUrl() ?>/arrow_small_right.jpg" />&nbsp;&nbsp;&nbsp;Messages</p>
                	<p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('message','',array()); ?>">Inbox <?php echo count($user->messageReceiver); ?></a></p>
                	<p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('message','outbox',array()); ?>">Outbox <?php echo count($user->messageSender); ?></a></p>
                	<p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('message','delivery',array()); ?>">Delivery Report 3</a></p>
<div class="clear"></div>
                <div class="line_sm"></div>
                <p class="txt_bld-15"><img src="<?php echo Utilities::getMediaUrl() ?>/arrow_small_right.jpg" />&nbsp;&nbsp;&nbsp;Interest</p>
                <p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('interest','sent',array()); ?>">Sent <?php echo count($user->interestSender); ?></a></p>
                
                	<p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('interest','received',array()); ?>">Recived <?php echo count($user->interestReceiver); ?></a></p>
                	
                	<p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('interest','declined',array()); ?>">Decliened 7</a></p>
                	<p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('interest','accepted',array()); ?>">Accepted by me 1</a>                </p>
               	<div class="line_sm"></div>
                <p class="txt_bld-15"><img src="<?php echo Utilities::getMediaUrl() ?>/arrow_small_right.jpg" />&nbsp;&nbsp;&nbsp;Album</p>
              
              
              
               <p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('album','sent',array()); ?>">Sent <?php //echo count($user->albumSender); ?></a></p>
                
                	<p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('album','received',array()); ?>">Recived <?php //echo count($user->albumReceiver); ?></a></p>
                	
                	<p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('album','declined',array()); ?>">Declined 3</a></p>
<p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('album','accepted',array()); ?>">Accepted by me 1</a>              </p>
<div class="line_sm"></div>
                <p class="txt_bld-15"><img src="<?php echo Utilities::getMediaUrl() ?>/arrow_small_right.jpg" />&nbsp;&nbsp;&nbsp;Documents</p>
                
                
                
               <p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('document','sent',array()); ?>">Sent <?php echo count($user->documentSender); ?></a></p>
               <p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('document','received',array()); ?>">Recived <?php echo count($user->documentReceiver); ?></a></p>
               <p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('document','declined',array()); ?>">Declined 3</a></p>
               <p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('document','accepted',array()); ?>">Accepted by me 1</a></p>
<div class="line_sm"></div>
                <p class="txt_bld-15"><img src="<?php echo Utilities::getMediaUrl() ?>/arrow_small_right.jpg" />&nbsp;&nbsp;&nbsp;Contacts</p>
                
                
               <p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('contact','sent',array()); ?>">Sent <?php echo count($user->contactSender); ?></a></p>
               <p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('contact','received',array()); ?>">Recived <?php echo count($user->contactReceiver); ?></a></p>
               <p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('contact','declined',array()); ?>">Declined 3</a></p>
               <p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('contact','accepted',array()); ?>">Accepted by me 1</a></p>
<div class="line_sm"></div>
                <p class="txt_bld-15"><img src="<?php echo Utilities::getMediaUrl() ?>/arrow_small_right.jpg" />&nbsp;&nbsp;&nbsp;Famili album</p>
                <p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('family','sent',array()); ?>">Sent <?php echo count($user->familyAlbumSender); ?></a></p>
                <p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('family','received',array()); ?>">Recived <?php echo count($user->familyAlbumReceiver); ?></a></p>
                <p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('family','declined',array()); ?>">Declined 3</a></p>
                <p class="bullettext"><a href="<?php echo Utilities::createAbsoluteUrl('family','accepted',array()); ?>">Accepted by me 1</a></p>
<div class="clear"></div>
                <div class="line_sm"></div>
                
                
                    <span  class="innersidelinks-l"><a href="<?php echo Utilities::createAbsoluteUrl('user','document',array()); ?>">My Document</a></span>
              <p class="space-5px">&nbsp;</p>
 
                  <span  class="innersidelinks-l"><a href="<?php echo Utilities::createAbsoluteUrl('user','address',array()); ?>">My Address Book</a></span><p class="space-5px">&nbsp;</p>
                  <span  class="innersidelinks-l"><a href="<?php echo Utilities::createAbsoluteUrl('user','reference',array()); ?>">My Refference</a></span><p class="space-5px">&nbsp;</p>
                  <span  class="innersidelinks-l"><a href="<?php echo Utilities::createAbsoluteUrl('user','shortlist',array()); ?>">My Shortlist</a></span>
              <p class="space-5px">&nbsp;</p>
                  <span  class="innersidelinks-l"><a href="<?php echo Utilities::createAbsoluteUrl('user','bookmark',array()); ?>">My bookmarks</a></span>
              <p class="space-5px">&nbsp;</p>
                  <span  class="innersidelinks-l"><a href="<?php echo Utilities::createAbsoluteUrl('user','contact',array()); ?>">My Contact Details</a></span>
                  <p class="space-5px">&nbsp;</p>
                  <span  class="innersidelinks-l"><a href="<?php echo Utilities::createAbsoluteUrl('user','partner',array()); ?>">My Partner Preference</a></span>
                  <p class="space-5px">&nbsp;</p>
                  <span  class="innersidelinks-l"><a href="<?php echo Utilities::createAbsoluteUrl('user','payment',array()); ?>">My payment Summery</a></span>
                  
                  
  <div class="clear"></div>
                <div class="line_sm"></div>                
                  <div style="float:left; width:96%;">     
                <img src="<?php echo Utilities::getMediaUrl() ?>/img_advert.jpg" class="left" style="width:100%;"/> </div>
                
                
                <div class="clear"></div>
                <div class="line_sm"></div>
                
                <div style="float:left; width:96%;">  
                <img src="<?php echo Utilities::getMediaUrl() ?>/do-you-like.jpg" class="left" style="width:100%;" /> </div>
                
               
                <div class="clear"></div>
                <p class="txt_bld">Suggest to a friend</p>
              <p class="txt_bld-10">Use comma to seperate each ids</p><p class="space-10px">&nbsp;</p>
                <form>
                <input type="text" class="select_small_180"  placeholder="Friends Email ID"/>               
                
                <a class="invite" href="#">Invite</a>
                </form>
  </div>
              
  <!--profile details closing--> 