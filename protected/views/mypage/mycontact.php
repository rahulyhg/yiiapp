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
* @title mycontact.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>

           
      <!--main-content-->
      <div id="main-content">
            	<!--left-content-->
  
      <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
  
  <?php $user = Yii::app()->session->get('user');?>
  <!--profile details closing--> 
  <!--center profile details closing--> 
  			<div id="content-right-02"> 
              <div class="div_mdla">
              <div class="line-new-1"></div>
             
             
             	<p class="text_pink-hd">Personal contact details</p>
                    	<div class="clear"></div>
                        
                              

                  <div class="space-15px">&nbsp;</div>
                  
              
<div class="div_mdl_space_1"><!--div_mdl_space_1-->

	<div class="div_mdl_space_left_sub">		<!--div_mdl_space_left-->

		<p class="txt_bld_top2">Mobile No</p>
</div><!--/div_mdl_space_left-->

			<div class="div_mdl_space_mdl_sub"><!--div_mdl_space_mdl-->

<p class="txt_lft_160"><?php if(isset($user->userpersonaldetails))echo $user->userpersonaldetails->mobilePhone?></p> 

<div class="mrgn_10top">
<span class="text_blue"><strong><a href="#">Edit</a></strong></span> |  <span class="text_blue"><strong><a href="#">Verify</a></strong></span></div>
</div><!--/div_mdl_space_mdl-->

</div><!--/div_mdl_space_1-->


<div class="div_mdl_space_1"><!--div_mdl_space_1-->

	<div class="div_mdl_space_left_sub">		<!--div_mdl_space_left-->

		<p class="txt_bld_top2">Landline No
</p>
</div><!--/div_mdl_space_left-->

			<div class="div_mdl_space_mdl_sub"><!--div_mdl_space_mdl-->
			
<p class="txt_lft_160"><?php if(isset($user->userpersonaldetails))echo $user->userpersonaldetails->landPhone?></p>
<div class="mrgn_10top">
<span class="text_blue"><strong><a href="#">Edit</a></strong></span>  </div>

</div><!--/div_mdl_space_mdl-->



				
</div><!--/div_mdl_space_1-->

<div class="div_mdl_space_1"><!--div_mdl_space_1-->

	<div class="div_mdl_space_left_sub">		<!--div_mdl_space_left-->

		<p class="txt_bld_top2">Altranative Mobile No.
</p>
</div><!--/div_mdl_space_left-->

			<div class="div_mdl_space_mdl_sub"><!--div_mdl_space_mdl-->
<p class="txt_lft_160">
<?php if(isset($user->usercontactdetails))echo $user->usercontactdetails->alternativeNo?>

</p>
<div class="mrgn_10top">
<span class="text_blue"><strong><a href="#">Add now</a></strong></span></div>
</div><!--/div_mdl_space_mdl-->



</div><!--/div_mdl_space_1--><!--/div_mdl_space_1-->

<div class="div_mdl_space_1"><!--div_mdl_space_1-->

	<div class="div_mdl_space_left_sub">		<!--div_mdl_space_left-->

		<p class="txt_bld_top2">Communication address
</p>
</div><!--/div_mdl_space_left-->

			<div class="div_mdl_space_mdl_sub"><!--div_mdl_space_mdl-->
<p class="txt_lft_160">
<?php 
	$conAddress =  $user->addresses(array('condition'=>'addresType = 0'));
	if(isset($conAddress) && !empty($conAddress))
	{
		
		if(isset($conAddress->houseName))echo $conAddress->houseName; echo "<br/>";
		if(isset($conAddress->place))echo $conAddress->place;echo "<br/>";
		if(isset($conAddress->city))echo $conAddress->city;echo "<br/>";
		if(isset($conAddress->postoffice))echo $conAddress->postoffice;echo "<br/>";
		if(isset($conAddress->district))echo $conAddress->district;echo "<br/>";
		if(isset($conAddress->state))echo $conAddress->state;echo "<br/>";
		if(isset($conAddress->country))echo $conAddress->country;echo "<br/>";
		if(isset($conAddress->pincode))echo $conAddress->pincode;echo "<br/>";
		
	}

?>
   <div class="mrgn_10top"> <span class="text_blue"><strong><a href="#">Edit</a></strong></span></div>

</div><!--/div_mdl_space_mdl-->



</div><!--/div_mdl_space_1-->

<div class="div_mdl_space_1"><!--div_mdl_space_1-->

	<div class="div_mdl_space_left_sub">		<!--div_mdl_space_left-->

		<p class="txt_bld_top2">Permenent address
</p>
</div><!--/div_mdl_space_left-->

			<div class="div_mdl_space_mdl_sub"><!--div_mdl_space_mdl-->
<p class="txt_lft_160">
<?php 
	$perAddress =  $user->addresses(array('condition'=>'addresType = 1'));
	if(isset($perAddress))
	{
		if(isset($perAddress->houseName))echo $perAddress->houseName; echo "<br/>";
		if(isset($perAddress->place))echo $perAddress->place;echo "<br/>";
		if(isset($perAddress->city))echo $perAddress->city;echo "<br/>";
		if(isset($perAddress->postoffice))echo $perAddress->postoffice;echo "<br/>";
		if(isset($perAddress->district))echo $perAddress->district;echo "<br/>";
		if(isset($perAddress->state))echo $perAddress->state;echo "<br/>";
		if(isset($perAddress->country))echo $perAddress->country;echo "<br/>";
		if(isset($perAddress->pincode))echo $perAddress->pincode;echo "<br/>";
		
	}

?>

    <div class="mrgn_10top"> <span class="text_blue"><strong><a href="#">Edit</a></strong></span>
</div><!--/div_mdl_space_mdl--></div>




</div><!--/div_mdl_space_1-->

<div class="div_mdl_space_1"><!--div_mdl_space_1-->

	<div class="div_mdl_space_left_sub">		<!--div_mdl_space_left-->

		<p class="txt_bld_top2">Facebook URL
</p>
</div><!--/div_mdl_space_left-->

			<div class="div_mdl_space_mdl_sub"><!--div_mdl_space_mdl-->

<p class="txt_lft_160"><?php if(isset($user->usercontactdetails)) echo $user->usercontactdetails->facebookUrl?></p>
<div class="mrgn_10top"> <span class="text_blue"><strong><a href="#">Edit</a> </strong></span></div>

</div><!--/div_mdl_space_mdl-->




</div>


<div class="div_mdl_space_1"><!--div_mdl_space_1-->

	<div class="div_mdl_space_left_sub">		<!--div_mdl_space_left-->

	<p class="txt_bld_top2">Skype
</p>
</div><!--/div_mdl_space_left-->

			<div class="div_mdl_space_mdl_sub"><!--div_mdl_space_mdl-->

	<p class="txt_lft_160"><?php if(isset($user->usercontactdetails)) echo $user->usercontactdetails->skypeId?></p>
  <div class="mrgn_10top">  <span class="text_blue"><strong><a href="#">Edit</a> </strong></span></div>

</div><!--/div_mdl_space_mdl-->




</div>

<div class="div_mdl_space_1"><!--div_mdl_space_1-->

	<div class="div_mdl_space_left_sub">		<!--div_mdl_space_left-->

		<p class="txt_bld_top2">Google IM
</p>
</div><!--/div_mdl_space_left-->

			<div class="div_mdl_space_mdl_sub"><!--div_mdl_space_mdl-->

<p class="txt_lft_160"><?php if(isset($user->usercontactdetails)) echo $user->usercontactdetails->googleIM?></p>
  <div class="mrgn_10top">  <span class="text_blue"><strong><a href="#">Edit</a> </strong></span></div>

</div><!--/div_mdl_space_mdl-->




</div>

<div class="div_mdl_space_1"><!--div_mdl_space_1-->

	<div class="div_mdl_space_left_sub">		<!--div_mdl_space_left-->

		<p class="txt_bld_top2">Yahoo IM
</p>
</div><!--/div_mdl_space_left-->

			<div class="div_mdl_space_mdl_sub"><!--div_mdl_space_mdl-->

<p class="txt_lft_160"><?php if(isset($user->usercontactdetails)) echo $user->usercontactdetails->yahooIM?></p>
<div class="mrgn_10top">
<span class="text_blue"><strong><a href="#">Edit</a> </strong></span></div>

</div><!--/div_mdl_space_mdl-->




</div>

<div class="clear"></div>
<div class="line"></div>

<p class="space-3px">p&nbsp;</p>

<div class="div_mdl_space_1"><!--div_mdl_space_1-->

	<div class="div_mdl_space_left_sub">		<!--div_mdl_space_left-->

		<p class="txt_bld">Who can view above detals
</p>
</div><!--/div_mdl_space_left-->

			<div class="div_mdl_space_mdl_sub"><!--div_mdl_space_mdl-->


<p class="radio-4">
          <input type="radio" name="who1" value="myself">&nbsp;Subscribers</p>
                            <p class="radio-4">
                            <input type="radio" name="who1" value="son">&nbsp;By request</p>
                            
</div><!--/div_mdl_space_mdl-->




</div>



<div class="div_mdl_space_1"><!--div_mdl_space_1-->

</div>
  <div class="right">
  <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image25','','<?php echo Yii::app()->params['mediaUrl']; ?>/submit.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/submit_ash.jpg" name="Image25" width="67" height="22" border="0" id="Image25" /></a>
  
  </div>            </div>
              
               
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