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
<?php $this->widget('application.widgets.menu.Leftmenu'); ?>
    <section class="data-contnr2">
        <h1 class="mB10">Personal Contact Details</h1>
        <?php $user = Yii::app()->session->get('user');?>
        <ul class="accOverview">
			<li>
				<div class="leftC">Mobile No.</div>
				<div class="rightC">
					<strong>:</strong> <span><?php if(isset($user->userpersonaldetails)) echo $user->userpersonaldetails->mobilePhone ?><a href="#">Edit</a></span>
				</div>
			</li>
			
			<li>
				<div class="leftC">Altranative Mobile No.</div>
				<div class="rightC">
					<strong>:</strong> <span><?php if(isset($user->usercontactdetails)) echo $user->usercontactdetails->alternativeNo ?><a href="#">Edit</a></span>
				</div>
			</li>
			<li>
				<div class="leftC">Communication address</div>
				<div class="rightC">
					<strong>:</strong>
					<div class="addrs">
					<?php $address = Address::model()->findAll(array('condition'=> "userId = {$user->userId} and addresType = 1"));
					$caddress = $address[0];
					?>
						<span><?php echo $caddress->houseName ?></span>
						<span><?php echo $caddress->postoffice?></span>
						<span><?php echo $caddress->city?></span>
						<span><?php echo $caddress->state.','.$caddress->country?></span>
						<span><?php echo $caddress->pincode?></span>
					</div>
					<a href="#">Edit</a>
				</div>
			</li>
			<li>
				<div class="leftC">Permenent address</div>
				<div class="rightC">
					<strong>:</strong>
					<?php $address = Address::model()->findAll(array('condition'=> "userId = {$user->userId} and addresType = 0"));
					$paddress = $address[0];
					?>
					<div class="addrs">
						<span><?php echo $paddress->houseName ?></span>
						<span><?php echo $paddress->postoffice?></span>
						<span><?php echo $paddress->city?></span>
						<span><?php echo $paddress->state.','.$caddress->country?></span>
						<span><?php echo $paddress->pincode?></span>
					</div>
					<a href="#">Edit</a>
				</div>
			</li>
			<li>
				<div class="leftC">Facebook URL</div>
				<div class="rightC">
					<strong>:</strong> <span><a href="#" class="color mR10"><?php echo $user->usercontactdetails->facebookUrl?></a>   <a href="#">Edit</a></span>
				</div>
			</li>
			<li>
				<div class="leftC">Skype</div>
				<div class="rightC">
					<strong>:</strong> <span><a href="#" class="color mR10"><?php echo $user->usercontactdetails->skypeId ?></a>   <a href="#">Edit</a></span>
				</div>
			</li>
			<li>
				<div class="leftC">Google IM</div>
				<div class="rightC">
					<strong>:</strong> <span><a href="#" class="color mR10"><?php echo $user->usercontactdetails->googleIM?></a>   <a href="#">Edit</a></span>
				</div>
			</li>
			<li>
				<div class="leftC">Yahoo IM</div>
				<div class="rightC">
					<strong>:</strong> <span><a href="#" class="color mR10"><?php echo $user->usercontactdetails->yahooIM ?></a>   <a href="#">Edit</a></span>
				</div>
			</li>
			
		</ul>
    </section>
<?php $this->widget('application.widgets.menu.Rightmenu'); ?>