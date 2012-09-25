

    	<div id="content-wrapper"><!--content-wrapper-sub-->
        	 <div id="wrapper-head"> <!--wrapper-head-->
            <br /><a href="home-viewed-by-member.html"> <img src="<?php echo Yii::app()->params['mediaUrl']; ?>/logo.jpg" class="middle-align" border="0" /></a>
          	</div><!--wrapper-head-->
          	<?php 
          	if(isset($model)) {
          	?>
			<div class="name-bloc-sub"><!--name-bloc-->
				<br />
			<p class="text_pink-hd"><?php echo $model->name ; echo "&nbsp;" ;echo $model->marryId   ?>  </p> 
				<div class="clear"></div>
				
              <div class="left"> <span class="pink_sun_hd">Viewing personal contact details</span></div>
			</div><!--name-bloc-->
			
			<div class="divider"><!--divider-->
			<div class="astro-content-sub-new"><!--astro-content-sub-->
			<div class="addrs-left"><!--addrs-left-->
			
			Contact Persons Name<br /> 			 
			Convineance Time to call <br /> 				
			Mobile No.<br /> 	
			Landline No.<br /> 
			Altranative Mobile No.	 		
	 		
 		
		
			</div><!--addrs-left-->
			
			<div class="addrs-right"><!--addrs-right-->
					  Biju George<br /> 	
			          7.00 p.m. to 9.30 p.m.<br /> 	 
 		           <?php if(isset($model->userpersonaldetails->mobilePhone))echo $model->userpersonaldetails->mobilePhone?><br /> 	
 		          <?php if(isset($model->userpersonaldetails->landPhone))echo $model->userpersonaldetails->landPhone?><br />
 		          <?php if(isset($model->usercontactdetails->alternativeNo))echo $model->usercontactdetails->alternativeNo?><br />
 		             Not provide 
			
			
			</div><!--addrs-right-->
        	</div><!--astro-content-sub-->
						<div class="clear"></div>

			</div><!--divider-->
			<br /> 
			<div class="astro-content-sub-new"><!--astro-content-sub-->
			<div class="addrs-left"><!--addrs-left-->
			
			Communication address<br /> <br /> <br /> <br /> 			 
			Permenent address <br /> <br /> <br /> <br /> 				
			Facebook URL<br /> 	
			Skype<br />
			Google IM<br />
			Yahoo IM	 		
	 		
 		
		
			</div><!--addrs-left-->
			
			<div class="addrs-right"><!--addrs-right-->
			<?php 
	$conAddress =  $model->addresses(array('condition'=>'addresType = 0'));
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
			
	<?php 
	$perAddress =  $model->addresses(array('condition'=>'addresType = 1'));
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
			        <?php if(isset($model->usercontactdetails->facebookUrl))echo $model->usercontactdetails->facebookUrl?><br /> 
 		             <?php if(isset($model->usercontactdetails->skypeId))echo $model->usercontactdetails->skypeId?><br />
 		             <?php if(isset($model->usercontactdetails->googleIM))echo $model->usercontactdetails->googleIM?><br />
 		             <?php if(isset($model->usercontactdetails->yahooIM))echo $model->usercontactdetails->yahooIM?><br />
			
			
			</div><!--addrs-right-->
        	</div><!--astro-content-sub-->
        	
        <?php } else {
        	
        	
        }?>	
			
 </div>