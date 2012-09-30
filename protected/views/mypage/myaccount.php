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
* @title myaccount.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>

            <!--main-content-->
            <div id="main-content">
            	<!--left-content-->
  
    <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
  
  <!--center profile details closing--> 
  			<div id="content-right-02"> 
              
              
              
              
            
              
              

<div class="div_mdl_space_1"><!--div_mdl_space_1-->
 <p class="text_pink-hd-sub-sm">My Account</p><br />
            <div class="line-sub-small"></div>
            <div class="clear"></div>  
	
	<div class="div-left-box"><!--div-left-box-->
Account status<br /> 		
Profile Created on<br /> 		
Registerd Contact No<br /> 		
Registered Email<br /> 		
Profile visited by you<br /> 		
Your profile visitors<br />  		
Interest received<br />  		
Interest send<br /> 			
Interest Decliened by you<br /> 		
Interest Accepted by you<br /> 		
Message sent<br /> 			
Message recived<br />  		
Interest Decliened you<br /> 		
Interest Decliened your<br /> 		
Request resived<br />  		
Request send<br /> 			
Request Decliened by you<br /> 		
Request Decliened your<br /> 		
Shortlisted you<br /> 		
Shortlisted by you<br /> 		
Your Book Mark<br /> 		
Persons who blocked by me<br />  		
<span class="blue"><a href="#">Click to</a></span> De activate account<br /> 
<span class="blue"><a href="#">Click to</a></span> Delete account 
	</div><!--div-left-box-->
	 <?php $user = Yii::app()->session->get('user');?>
	<div class="div-left-box"><!--div-left-box-->
	
	:   Subscibed  (10 Days Remaining)<br />
		:   <?php if(isset($user->createdOn))echo date_format(date_create($user->createdOn), 'd,M,Y');?><br />
		:   <?php if(isset($user->usercontactdetails)) echo $user->usercontactdetails->mobileNo ?>  (<span class="blue"><a href="#">Edit</a>)</span><br />
		: <?php if(isset($user->emailId)) echo $user->emailId ?>  (<span class="blue"><a href="#">Edit</a>)</span><br />
		:   <?php if(isset($user->profileUser)) 
				echo count(explode(",",$user->profileUser->visitedId));
		?><br />
 		:  <?php 
 				if(isset($profileCount))
 				echo $profileCount;
 		?> <br />
		:   <span class="blue"><a href="#"><?php
			$receiveInterest = $user->interestReceiver(array('condition'=>'status = 0'));
				if(isset($receiveInterest))
				echo count($receiveInterest);
		?></a></span><br />
		:   <?php 
			$sent = $user->interestSender(array('condition'=>'status != 3'));
		if(isset($sent)) echo count($sent);?><br />
		:   <span class="blue"><a href="#"><?php 
			
			$sendInterest = $user->interestReceiver(array('condition'=>'status= 2'));
			if(isset($sendInterest))
			echo count($sendInterest);
		
		?></a></span><br />
		:  <?php 
				$decline = $user->interestReceiver(array('condition'=>'status = 1'));
				if(isset($decline))
				echo count($decline);
		?><br />
			:   <span class="blue"><a href="#">12</a></span><br />
 		:   <span class="blue"><a href="#">12</a></span><br />
		:   <span class="blue"><a href="#">12</a></span><br />
		:   12<br />
 		:   <span class="blue"><a href="#">12</a></span><br />
			:   <span class="blue"><a href="#">12</a></span><br />
		:   <span class="blue"><a href="#">12</a></span><br />
		:   12<br />
		:   <span class="blue"><a href="#">12</a></span><br />
		:   <span class="blue"><a href="#">12</a></span><br />
		:   <span class="blue"><a href="#">12</a></span><br />
 		:   <span class="blue"><a href="#">12</a></span><br />
	
	</div><!--div-left-box-->
	
	
	
	
</div>







 
  <!--closing central profile details closing-->      
              
                <!--left-content closing-->
                <!--left-content-->
                
                <div id="content-right-small-1">
               	  <div class="div_r_1"><!--div_r-->

<p class="text_20_gery"><a href="payment_benefits.html">Subscribe Now!</a><br />
Only for</p>

<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/img_200.jpg" class="left" />

<div class="clear"></div>
               	  </div>
              
              </div></div>
  </div>