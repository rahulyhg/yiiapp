<?php
/*
*
* $Id$
--------------------------------------------------------------------------------------------------------------------------
* Information contained in this file is the intellectual property of Ladbrokes Plc
* Copyright © 2012 MarryDorr. All Rights Reserved.
* ---------------------------------------------------------------------------------------------------------------------------
*
* @author  Ageesh K Gopinath
* @title myalbum.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
$user = Yii::app()->session->get('user');
?>

            <div id="main-content">
            	<!--left-content-->
  
    
         <!-- left menu -->
        <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
        <!-- /left menu -->
  <!--center profile details closing--> 
  			<div id="content-right-02"> 
              <div class="div_mdla">
              <div class="line_sm"></div>
			  
			  
              
             
            <div class="left_tabs">   <p class="text_pink-hd">My Album</p></div>
             
            
              <div class="right_tabs">
              
              <input type="button" value="Add more photos" name="yt5" tabindex="3" class="btnStyle" onclick="javascript:addMorePhotos();" />
              <input type="button" value="Privacy Settings" name="yt5" tabindex="3" class="btnStyle" onclick="javascript:privacySettings();" />
             				
			  </div>
              
              
              <div class="clear"></div>
                              <div class="line"></div>


<div class="clear"></div>                              
                <div class="space-15px">&nbsp;</div>
                              <div class="clear"></div>
                 <?php if(!empty($photosList)):?>
                 <?php foreach($photosList as $photo):?>
                <!--div_msg_fullbox-->   <div class="profile_box">
                  <div style="float:left;">
             	<a href="#">    <img src="<?php echo Utilities::getProfileImage($user->marryId,$photo->imageName); ?>"  border="0" width="187" height="242" /></a>
                 </div>
                 
				  <input type="button" value="Use as profile picture" name="yt5" tabindex="3" class="btnStyle" onclick="javascript:setProfilePhoto(<?php echo $photo->albumId; ?>);">
             	 <input type="button" value="Delete" name="yt5" tabindex="3" class="btnStyle" onclick="javascript:deletePhoto(<?php echo $photo->albumId; ?>);">              
                  </div>
                <div class="clear"></div>
              <?php endforeach;?>
              <?php else : ?>  
              <div class="profile_box">
              	<?php echo Yii::t('error','noAlbums'); ?>
              </div>
             <?php endif; ?>
                <div class="space-15px">&nbsp;</div>
                           
           
             
             <div class="space-10px"><p>&nbsp;<br />&nbsp;<br /></p></div>
             
             
              <div class="right_tabs">
              <!-- hidden form to submit values -->
              <form name="frmMyAlbum" id="frmMyAlbum" method="post" action="<?php echo Utilities::createAbsoluteUrl('mypage','album'); ?>" >
              <input type="hidden" id="action" name="action" value="" />
              <input type="hidden" id="albumId" name="albumId" value="" />
              </form>
              <!-- form ends -->
                <input type="button" value="Add more photos" name="yt5" tabindex="3" class="btnStyle" onclick="javascript:addMorePhotos();">
              <input type="button" value="Privacy Settings" name="yt5" tabindex="3" class="btnStyle" onclick="javascript:privacySettings();">
               
                
                </div>
              
              
              
              
             
                <div class="space-35px">&nbsp;</div>
              </div> 
  <!--closing central profile details closing-->      
              
                <!--left-content closing-->
                <!--left-content-->
                
                <div id="content-right-small-1">
               	  <div class="div_r_1"><!--div_r-->

<p class="text_20_gery"><a href="payment_benefits.html">Subscribe Now!</a><br />
Only for</p>

<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/img_200.jpg" class="left"  border="0"/>
<p class="text_20_gery">For 3 Months</p>

<div class="clear"></div>
               	  </div>
              
              </div></div>

   </div>
  <script type="text/javascript">
  function addMorePhotos()
  {
	  window.location.href='<?php echo Utilities::createAbsoluteUrl('album','add'); ?>';
  }

  function privacySettings()
  {
	  window.location.href='<?php echo Utilities::createAbsoluteUrl('album','privacy'); ?>';
  }

  function setProfilePhoto(albumId)
  {
	  document.getElementById('action').value = 'setprofilephoto';
	  document.getElementById('albumId').value = albumId;
	  document.frmMyAlbum.submit();
  }

  function deletePhoto(albumId)
  {
	  document.getElementById('action').value = 'delete';
	  document.getElementById('albumId').value = albumId;
	  document.frmMyAlbum.submit();
  }
  </script>