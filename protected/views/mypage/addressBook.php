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
* @title addressBook.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>

            <!--main-content-->
            <div id="main-content">
            	<!--left-content-->
  
    	  <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
       
  <!--profile details closing--> 
  <!--center profile details closing--> 
  			<div id="content-left">
  			  <!--closing central profile details closing-->
              <!--left-content closing-->
              <!--left-content-->
              <!--bottom-content closing-->


             <div class="content-right-02"><!--div_mdl-->


<div class="txt_bld">


					<p class="text_pink-hd">My Address Book</p>
                    	<div class="clear"></div>
		  <p class="line"></p>
          <p class="sellect-all"><span class="txt_normal-2"><INPUT type="checkbox" name="selection">&nbsp;&nbsp;Select All</span></p>
                      
                       
       <a href="#" title="remove" class="button_align">Remove from Addressbook </a>
        
            
          
<div class="view-1">
        <div class="first-new"><a href="#" >First</a></div>
            
        <div class="first-new"><a href="#" >Previous</a></div>
              
 <div class="first-new"><a href="#" >Next</a></div>
                        
                <div class="first-new"><a href="#">Last</a></div>
                       
                       
                        
                      <div class="right">
                    <div id="view-02" >
                        </div>
          </div> <!--test -->    
          
          
          
         
            
              
              
        <p class="clear">&nbsp;</p><p class="space-10px">&nbsp;</p>

                <!--bottom-content-->
              </div>
              
              
               <p class="clear">&nbsp;</p>
				
                        <div class="line_mg_0"></div>
                        <p class="line-1pix"></p>
              </div>
					
					
					<div class="clear"></div>
					
					
					
					<div class="space-10px"><p>&nbsp;</p></div>
                    
       <?php 
  $heightArray = Utilities::getHeights();
  $index = 1;
  foreach ($users as $value) { ?>              
                    
						<div class="<?php if($index % 3 != 0) { echo 'search_div_1st';} else{ echo 'search_div_3rd';}?>"><!--search_div_1st-->
						 <p class="txt_normal-2"><INPUT type="checkbox" name="selection" >&nbsp;&nbsp;Select</p><p class="space-10px">&nbsp;</p>
                         <a href="album.html"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/photo_5.jpg" border="0" class="search_div_img" /></a>
          
                        <p class="gray-rtsm-link"><a href="<?php echo '/search/byid?id='.$value->marryId ?>"><?php echo $value->name; echo '( '.$value->marryId.' )' ;?></a></p>
                      
                        <p class="gray-rtsm"> <?php if(isset($value->userpersonaldetails->religion))echo $value->userpersonaldetails->religion->name ;?> , <?php if(isset($value->userpersonaldetails->caste))echo $value->userpersonaldetails->caste->name ;?> &nbsp;</p>
                      
                        <p class="gray-rtsm"> <?php echo Utilities::getAgeFromDateofBirth($value->dob); ?> Years &nbsp;</p>
                       
                        <p class="gray-rtsm"> <?php if(isset($value->physicaldetails->heightId))echo $heightArray[$value->physicaldetails->heightId]; ?> &nbsp;</p>
                        
                        <p class="gray-rtsm">  <?php if(isset($value->userpersonaldetails->place))echo $value->userpersonaldetails->place->name ?>, <?php if(isset($value->userpersonaldetails->state))echo $value->userpersonaldetails->state->name ?>, <?php if(isset($value->userpersonaldetails->country))echo $value->userpersonaldetails->country->name?> &nbsp;</p>
                       
                        <p class="gray-rtsm"> <?php if(isset($value->educations->education))echo $value->educations->education->name?> &nbsp;</p>
                       
                        <p class="gray-rtsm"> <?php if(isset($value->educations->occupation))echo $value->educations->occupation->name ?> &nbsp;</p>
						
						  <p class="gray-rtsm"> <span class="blue-text-01"><a href="<?php echo '/search/byid?id='.$value->marryId ?>">View&nbsp;Full&nbsp;Contact</a></span></p>
                       
                      <div class="clear"></div>
                      	
                        
                          <div class="pages-1">
                        <div class="arrow">
                        
                          <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image62','','<?php echo Yii::app()->params['mediaUrl']; ?>/arrow_small_left_red.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/arrow_small_left.jpg" name="Image62" width="7" height="13" border="0" id="Image62" /></a></div>
                   <div class="arrow_text">    <span class="txt_bld-12">1 of 6</span>&nbsp; </div>
                   <div class="arrow">
                   
                     <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image64','','<?php echo Yii::app()->params['mediaUrl']; ?>/arrow-right-red.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/arrow_small_right.jpg" name="Image64" width="7" height="13" border="0" id="Image64" /></a></div>
                        </div>
                        
                        
						  <div class="clear"></div>
					<p class="text_pink-bold">
					<a href="#">Remove From Address Book</a>
						<a href="#">Send Message</a>
		</p>
<div class="clear"></div>
</div>
<!--/search_div_1st-->

<?php 
  
  if($index %3 == 0)
  { ?>
  	<p class="clear"></p>
  	<p class="line"></p>
  	<div class="space-10px"><p>&nbsp;</p></div>
  <?php 	
  }
  $index++;
  }?>
<!--/search_div_right-->
<p class="clear"></p>
                        <p class="line"></p>
					<div class="space-10px"><p>&nbsp;</p></div>
              <p class="sellect-all"><span class="txt_normal-2"><INPUT type="checkbox" name="selection">&nbsp;&nbsp;Select All</span></p>
              <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image63','','<?php echo Yii::app()->params['mediaUrl']; ?>/remove-from-address_pink.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/remove-from-address.jpg" name="Image63" width="182" height="22" border="0" id="Image63" /></a>
              
                        
                
                
                
                <div class="view-1">
       <div class="first-new"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image94','','<?php echo Yii::app()->params['mediaUrl']; ?>/no-bloc-red.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/no-bloc-ash.jpg" name="Image94" width="65" height="22" border="0" id="Image94" /></a></div>
            
        <div class="first-new"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image95','','<?php echo Yii::app()->params['mediaUrl']; ?>/no-bloc-pre-red.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/no-bloc-pre-ash.jpg" name="Image95" width="65" height="22" border="0" id="Image95" /></a></div>
              
 <div class="first-new"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image96','','<?php echo Yii::app()->params['mediaUrl']; ?>/no-bloc-next-red-new.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/no-bloc-next-ash-new.jpg" name="Image96" width="65" height="22" border="0" id="Image96" /></a></div>
                        
                <div class="first-new"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image97','','<?php echo Yii::app()->params['mediaUrl']; ?>/no-bloc-last-red.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/no-bloc-last-ash.jpg" name="Image97" width="65" height="22" border="0" id="Image97" /></a></div>
                            
                       
                        
                      <div class="right">
                                  </div>
          
          
          
              
              <p class="clear">&nbsp;</p><p class="space-10px">&nbsp;</p>

                <!--bottom-content-->
              </div>
     </div>
     </div>
     </div>