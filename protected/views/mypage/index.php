<?php
/*
*
* $Id$
--------------------------------------------------------------------------------------------------------------------------
* Information contained in this file is the intellectual property of MarryDoor Plc
* Copyright © 2012 MarryDorr. All Rights Reserved.
* ---------------------------------------------------------------------------------------------------------------------------
*
* @author  Ageesh K Gopinath
* @title mypage.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>
<?php $this->widget('application.widgets.menu.Leftmenu'); ?> 

	<?php if(isset($highlight) || isset($normal) ||isset($profileUpdates)) { ?> 
	
	<section class="data-contnr2">
		<h1>My Page</h1>
		<?php if(isset($highlight)) {?> 
		<div class="mT40 content-section highPro">
			<div class="headBtn">
				<div class="hText">Highlighted Profiles</div>
				 <?php $user = Yii::app()->session->get('user');?>
  						<?php if(isset($user) && $user->highlighted != 1) {?>
				<a class="type4 " href="<?php echo Utilities::createAbsoluteUrl('mypage','highlightprofile',array()); ?>">HIGHLIGHT YOUR PROFILE</a>
				<?php }?>
			</div>
			<?php 
			  $heightArray = Utilities::getHeights();
			  $index = 0;
			  foreach ($highlight as $value) { 
  			?>
			<!-- highlighted profiles -->
			<div class="profileR">
				<?php $this->widget('application.widgets.Profilepicture',array('userId'=>$value->userId,'marryId'=>$value->marryId)); ?> 
				<div class="profile-detail">
					<ul class="details-contnrs">
						<li>
							<a href="<?php echo '/search/byid/id/'.$value->marryId ?>" class="color" ><?php echo $value->name; echo '( '.$value->marryId.' )' ;?>)</a>
						</li>
						<li>
							<?php if(isset($value->userpersonaldetails->religion))echo $value->userpersonaldetails->religion->name ;?> , <?php if(isset($value->userpersonaldetails->caste))echo $value->userpersonaldetails->caste->name ;?>
						</li>
						<li>
							<?php echo Utilities::getAgeFromDateofBirth($value->dob); ?> Years 
						</li>
						<li>
							<?php if(isset($value->physicaldetails->heightId))echo $heightArray[$value->physicaldetails->heightId]; ?>
						</li>
						<li>
							<?php if(isset($value->userpersonaldetails->place))echo $value->userpersonaldetails->place->name ?>
						</li>
						<li>
							<?php if(isset($value->educations->education))echo $value->educations->education->name?>
						</li>
						<li>
							<?php if(isset($value->educations->occupation))echo $value->educations->occupation->name ?>
						</li>
					</ul>
					<a href="<?php echo '/search/byid/id/'.$value->marryId ?>" target="_blank"  class="view-full">View Full Profile</a>
				</div>
				             <?php 
 
			 $isInterest = $user->interestSender(array('condition'=>"receiverId = {$value->userId}"));
			 $isBookMarked = $user->bookmark(array('condition'=>"FIND_IN_SET('{$value->userId}',profileIDs)")); 
			 $isMessage = $user->messageSender(array('condition'=>"receiverId = {$value->userId}"));
			 if(!isset($isInterest) || empty($isInterest)) {
			 ?>
				<div class="button-contnr">
					<a class="globals" href="#" id="<?php echo $value->userId ?>">Express Interest</a>
				</div>
			<?php }?>
			<?php if(!isset($isBookMarked) || empty($isBookMarked)) {?> 
				<div class="button-contnr">
					<a class="globals" href="#" id="<?php echo $value->userId ?>">Bookmark</a>
				</div>
			<?php }?>
			<?php if(!isset($isMessage) || empty($isMessage)) {?>
				<div class="button-contnr">
					<a class="globals" href="#" id="<?php echo $value->userId ?>">Send Message</a>
				</div>
			<?php }?>
			</div>
			 <?php $index++; ?>
			<!-- highlighted profile ends here -->
			<?php }?>
			<?php if(sizeof($highlight) > 2 ) {?>
			<div class="footBtn">
				<a class="viewM " href="#">View More Highlighted Profiles</a>
			</div>
			<?php } ?>
		</div>
		<?php }?>
		 <?php 
		    if(isset($profileUpdates)){
		  ?>
		<h1>Recent Updates</h1>
        <article class="section width100">
			   <?php $heightArray = Utilities::getHeights();
    			foreach ($profileUpdates as $value) { ?>
			<div class="recentUpdates">
				<div class="recH"><a href="<?php echo 'byid?id='.$value->marryId ?>"><?php echo $value->name;?></a>
				<?php $isInterest = $user->interestSender(array('condition'=>"receiverId = {$value->userId}"));
				if(isset($isInterest->sendDate)){?>
				 (You expressed interest <?php  echo Utilities::getHumanTime($value->profileUpdates->statusTime) ?>)
				<?php 
				 }
 			?>
				 </div>
				<a href="#"><img src="<?php echo Utilities::getProfileImage($value->marryId,$value->photo->imageName);?>" alt="<?php echo $value->name;?>" title="<?php echo $value->name;?>" /></a>
				<div class="recDet">
					<div class="recList"><?php if(isset($value->userpersonaldetails->religion))echo $value->userpersonaldetails->religion->name ;?> , <?php if(isset($value->userpersonaldetails->caste))echo $value->userpersonaldetails->caste->name ;?></div>
					<div class="recList"><?php echo Utilities::getAgeFromDateofBirth($value->dob); ?> Years - <?php if(isset($value->physicaldetails->heightId))echo $heightArray[$value->physicaldetails->heightId];  ?></div>
					<div class="recList"><?php if(isset($value->userpersonaldetails->place))echo $value->userpersonaldetails->place->name ?>, <?php if(isset($value->userpersonaldetails->state))echo $value->userpersonaldetails->state->name ?>, <?php if(isset($value->userpersonaldetails->country))echo $value->userpersonaldetails->country->name ?></div>
					<?php if(isset($value->profileUpdates->profile) && $value->profileUpdates->profile == 'album' ) {?>
					<div class="upDet">Updated 5 photos in her album</div>
					<?php }?>
				</div>
				<?php if(isset($value->profileUpdates->profile) && $value->profileUpdates->profile == 'album' ) {?>
				<div class="upPhoto">
					<a href="#"><img src="./images/user/athira.jpg" alt="" /></a>
					<a href="#"><img src="./images/user/priya.jpg" alt="" /></a>
					<a href="#"><img src="./images/user/nayana.jpg" alt="" /></a>
					<a href="#"><img src="./images/user/rans.jpg" alt="" /></a>
				</div>
				<?php }?>
				<div class="footN">
					<div class="updated"><?php echo Utilities::getHumanTime($value->profileUpdates->statusTime) ?> ago</div>
				</div>
			</div>
			<?php } ?>
		
            <a class="viewM mT5" href="#">View More Feeds..</a>
		</article>
		<?php } ?>
	</section>
	<!-- right menu -->
	<?php $this->widget('application.widgets.menu.Rightmenu'); ?> 
	<!-- right menu ends -->
<?php 
  if(isset($normal)) {
 ?>
    <section class="data-contnr3 floatR">

        <div class="page-content-head">Latest Matches for you</div>
        <div class="pagination-contnr">
            <div class="select-contnr"><input type="checkbox" /> Select All</div>
            <a href="#">Express Interest</a>
            <a href="#">Bookmark</a>
            <ul class="pagination">
                <li><a href="#">First</a></li>
                <li><a href="#">Next</a></li>
                <li><a href="#">Previous</a></li>
                <li><a href="#">Last</a></li>
            </ul>
        </div>
        <div class="content-section">
        <?php 
  $index1 = 1;
  foreach ($normal as $value) { ?>
            <div class="profile">
                <div class="check-contnr"><input type="checkbox" /> Select</div>
                <?php $this->widget('application.widgets.Profilepicture',array('userId'=>$value->userId,'marryId'=>$value->marryId)); ?>
                <div class="profile-details">
                    <ul class="details-contnr">
                        <li>
                            <div class="title">Name</div>
                            <div class="info">: <a href="<?php echo 'byid?id='.$value->marryId ?>" class="color" ><?php echo $value->name; echo '( '.$value->marryId.' )' ;?></a></div>
                        </li>
                        <li>
                            <div class="title">Religion / Cast </div>
                            <div class="info">: <?php if(isset($value->userpersonaldetails->religion))echo $value->userpersonaldetails->religion->name ;?> , <?php if(isset($value->userpersonaldetails->caste))echo $value->userpersonaldetails->caste->name ;?></div>
                        </li>
                        <li>
                            <div class="title">Age</div>
                            <div class="info">: <?php echo Utilities::getAgeFromDateofBirth($value->dob); ?> Years </div>
                        </li>
                        <li>
                            <div class="title">Height</div>
                            <div class="info">: <?php if(isset($value->physicaldetails->heightId))echo $heightArray[$value->physicaldetails->heightId];  ?></div>
                        </li>
                        <li>
                            <div class="title">Place</div>
                            <div class="info">: <?php if(isset($value->userpersonaldetails->place))echo $value->userpersonaldetails->place->name ?>, <?php if(isset($value->userpersonaldetails->state))echo $value->userpersonaldetails->state->name ?>, <?php if(isset($value->userpersonaldetails->country))echo $value->userpersonaldetails->country->name ?></div>
                        </li>
                        <li>
                            <div class="title">Education</div>
                            <div class="info">: <?php if(isset($value->educations->education))echo $value->educations->education->name ?></div>
                        </li>
                        <li>
                            <div class="title">Occupation</div>
                            <div class="info">: <?php if(isset($value->educations->occupation))echo $value->educations->occupation->name ?></div>
                        </li>
                    </ul>
                    <a class="view-full" target="_blank"  href="<?php echo '/search/byid/id/'.$value->marryId ?>">View Full Profile</a>
                </div>
                <div class="button-contnr">
                 <?php 
 
 $isInterest = $user->interestSender(array('condition'=>"receiverId = {$value->userId}"));
 $isBookMarked = $user->bookmark(array('condition'=>"FIND_IN_SET('{$value->userId}',profileIDs)")); 
 $isMessage = $user->messageSender(array('condition'=>"receiverId = {$value->userId}"));
 if(!isset($isInterest) || empty($isInterest)) {
 ?>
                    <a href="#" id="<?php echo $value->userId ?>" class="global">Express Interest</a>
 <?php }?>
<?php if(!isset($isBookMarked) || empty($isBookMarked)) {?>                   
                    <a href="#"  id="<?php echo $value->userId ?>" class="global">Bookmark</a>
                    <?php }?>
<?php if(!isset($isMessage) || empty($isMessage)) {?>
                    <a href="#" id="<?php echo $value->userId ?>" class="global">Send Message</a>
  <?php } ?> 
                </div>
            </div>
            <?php 
  	$index1++;
  } ?>
           
        </div>
        <div class="pagination-contnr">
            <div class="select-contnr"><input type="checkbox" /> Select All</div>
            <a href="#">Express Interest</a>
            <a href="#">Bookmark</a>
            <ul class="pagination">
                <li><a href="#">First</a></li>
                <li><a href="#">Next</a></li>
                <li><a href="#">Previous</a></li>
                <li><a href="#">Last</a></li>
            </ul>
        </div>
    </section> 
    <?php }
    } else { 
    ?>   
    
     <section class="data-contnr3 ">
		<div class="" style="float: left;width:480px;">
			<h1 class="width100">My Page</h1>
			<div class="highlightBox">
				<p>Highlight your profile and display it here. This way you can get more visibility. This service is availabe for just Rs: 200. Click to Highlight My Profile to highlight your profile.</p>
				<a href="/highlight" class="upload">Highlight My Profile</a>
			</div>
		</div>
		<aside class="rightbar-contnr mT0">
			<div class="subscribe-box mH200">
				<div class="sub-now">Subscribe Now!<br /><span>Only for</span></div>
				<div class="digit"><span class="WebRupee">Rs.</span>200</div>
				<div class="for">For 3 Months</div>
			</div>
		</aside>
		
		
		<?php $percent = Yii::app()->session->get('percentage');?>
			
		<div class="highlightBox pComplete">
			<p><?php if(isset($percent)) { ?>Your profile is only <?php echo $percent;?>% complete.<?php }?> By filling your complete details, increase your chance of getting more relevant responses. Go to view profile to complete your profile.</p>
			<a href="/mypage/profile" class="upload">Update My Profile</a>
		</div>
        <h1 class="width100 mTB12">Quick Search</h1>
        <form id="quickSearch"  name="quickSearch" method="post"  action="/search/quick">
        <ul class="accOverview mT12">
			<li class="mB10">
				<div class="radC">
				<input type="radio" value="M" name="gender" />
					<span>Male</span>
				</div>
				<div class="radC">
					<input type="radio" value="F" name="gender" />
					<span>Female</span>
				</div>
				<div class="selC">
					<span>Age</span>
					<?php echo CHtml::dropDownList('ageFrom',null,Utilities::getAge(),array('class'=>'wid50')); ?>
				</div>
				<div class="selC">
					<span>to</span>
					<?php echo CHtml::dropDownList('ageTo',null,Utilities::getAge(),array('class'=>'wid50')); ?>
				</div>
				<div class="selC">
					<span>Religion</span>
					<?php $records = Religion::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'religionId', 'name');
		echo CHtml::dropDownList('religion',null,$list,array('empty' => 'Religion','class'=>'wid130')); ?>
				</div>
				<div class="selC">
					<span>Cast</span>
					<?php $records = Caste::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'casteId', 'name');
		echo CHtml::dropDownList('caste',null,$list,array('empty' => 'Caste','class'=>'wid130')); ?>
				</div>
				<a href="javascript:quickSearch.submit();" class="type2 no-marg">Search</a>
			</li>
		</ul>
		</form>
		<h1 class="mTB12">Search your life partner </h1>
        <p>An easy way to find out your life partner. By choosing the right options you can easily find out the profiles that matches you. </p>
		<div class="page-head mB25">
	    <a class="type8 mR5" href="/search" >Basic Search</a>
	    <a class="type8 mR5" href="/search/advance" >Advanced Search</a>
	    <a class="type8 mR5" href="/search/keyword" >Keyword Search</a>
	    <a class="type8 mR5" href="/search/byid" >Search by ID</a>
		</div>
		
    </section>
    <?php }?>
    