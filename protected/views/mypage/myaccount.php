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
    <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
 <section class="data-contnr2">
        <h1 class="mB10">My account </h1>
        <p>My account is where you get a snap shot of your account settings and other details you have furnished while registering. You can change your setting any time you want.</p>
        <ul class="accOverview">
			<li>
				<div class="leftC">Account status </div>
				<div class="rightC">
					<strong>:</strong> <span>Subscibed  (10 Days Remaining)</span>
				</div>
			</li>
			<li>
				<div class="leftC">Profile Created on</div>
				<div class="rightC">
					<strong>:</strong> <span><?php if(isset($user->createdOn))echo date_format(date_create($user->createdOn), 'd,M,Y');?></span>
				</div>
			</li>
			<li>
				<div class="leftC">Registerd Contact No.</div>
				<div class="rightC">
					<strong>:</strong> <span><?php if(isset($user->userpersonaldetails)) echo $user->userpersonaldetails->mobilePhone ?>   <a href="#">Edit</a></span>
				</div>
			</li>
			<li>
				<div class="leftC">Registered Email</div>
				<div class="rightC">
					<strong>:</strong> <span><?php if(isset($user->emailId)) echo $user->emailId ?>  <a href="#">Edit</a></span>
				</div>
			</li>
			<li>
				<div class="leftC">Profile visited by you</div>
				<div class="rightC">
					<strong>:</strong> <a href="#"><?php if(isset($user->profileUser)) 
				echo count($user->profileUser);
		?></a>
				</div>
			</li>
			<li>
				<div class="leftC">Your profile visitors</div>
				<div class="rightC">
					<strong>:</strong> <a href="#"><?php 
 				if(isset($profileCount))
 				echo $profileCount;
 		?> </a>
				</div>
			</li>
			<li>
				<div class="leftC">Interest resived </div>
				<div class="rightC">
					<strong>:</strong> <a href="#"><?php
			$receiveInterest = $user->interestReceiver(array('condition'=>'status = 0'));
				if(isset($receiveInterest))
				echo count($receiveInterest);
		?></a>
				</div>
			</li>
			<li>
				<div class="leftC">Interest sent</div>
				<div class="rightC">
					<strong>:</strong> <a href="#"><?php 
			$sent = $user->interestSender(array('condition'=>'status != 3'));
		if(isset($sent)) echo count($sent);?></a>
				</div>
			</li>
			<li>
				<div class="leftC">Interest Decliened by you</div>
				<div class="rightC">
					<strong>:</strong> <a href="#"><?php 
			
			$sendInterest = $user->interestReceiver(array('condition'=>'status= 2'));
			if(isset($sendInterest))
			echo count($sendInterest);
		
		?></a>
				</div>
			</li>
			<li>
				<div class="leftC">Interest Decliened your</div>
				<div class="rightC">
					<strong>:</strong> <a href="#"><?php 
				$decline = $user->interestReceiver(array('condition'=>'status = 1'));
				if(isset($decline))
				echo count($decline);
		?></a>
				</div>
			</li>
			<li>
				<div class="leftC">Message sent	</div>
				<div class="rightC">
					<strong>:</strong> <a href="#">12</a>
				</div>
			</li>
			<li>
				<div class="leftC">Message recived </div>
				<div class="rightC">
					<strong>:</strong> <a href="#">12</a>
				</div>
			</li>
			<li>
				<div class="leftC">Request received </div>
				<div class="rightC">
					<strong>:</strong> <a href="#">12</a>
				</div>
			</li>
			<li>
				<div class="leftC">Request sent</div>
				<div class="rightC">
					<strong>:</strong> <a href="#">12</a>
				</div>
			</li>
			<li>
				<div class="leftC">Request Decliened by you</div>
				<div class="rightC">
					<strong>:</strong> <a href="#">12</a>
				</div>
			</li>
			<li>
				<div class="leftC">Request Decliened your </div>
				<div class="rightC">
					<strong>:</strong> <a href="#">12</a>
				</div>
			</li>
			<li>
				<div class="leftC">Shortlisted you</div>
				<div class="rightC">
					<strong>:</strong> <a href="#">12</a>
				</div>
			</li>
			<li>
				<div class="leftC">Shortlisted by you</div>
				<div class="rightC">
					<strong>:</strong> <a href="#">12</a>
				</div>
			</li>
			<li>
				<div class="leftC">Your Book Mark</div>
				<div class="rightC">
					<strong>:</strong> <a href="#">12</a>
				</div>
			</li>
			<li>
				<div class="leftC">Persons who blocked by me </div>
				<div class="rightC">
					<strong>:</strong> <a href="#">12</a>
				</div>
			</li>
			<li>
				<div class="leftC"><a href="#">Click here</a> to De activate account </div>
			</li>
			<li>
				<div class="leftC"><a href="#">Click here</a> to Delete account</div>
			</li>
		</ul>
    </section>
        	<!-- right menu -->
	<?php $this->widget('application.widgets.menu.Rightmenu'); ?> 
	<!-- right menu ends -->