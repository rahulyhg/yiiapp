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
			<!--  <div class="recentUpdates">
				<div class="recH"><a href="#">Seema Varma</a> (You expressed interest on 12th Jan. 2012)</div>
				<a href="#"><img src="./images/user/anu.jpg" alt="anu" title="Anu Varghese" /></a>
				<div class="recDet">
					<div class="recList">Chrishtian, R.c.</div>
					<div class="recList">29 Years - 5' 4'', 167 cm</div>
					<div class="recList">Ankamaly, Kerala, India</div>
					<div class="upDet">Updated 5 photos in her album</div>
				</div>
				<div class="footN">
					<div class="updated">About an Hour ago</div>
					<p>
						The most eligible bachelor & young politician from Kerala, Hibi Eden tied the wedding knot with Anna LinAda who was formerly a television anchor,The most eligible bachelor & young politician from Kerala, Hibi Eden tied the wedding knot with Anna LinAda who was formerly a television anchor...
					</p>
				</div>
			</div>
			<div class="recentUpdates">
				<div class="recH"><a href="#">Seema Varma</a> (You expressed interest on 12th Jan. 2012)</div>
				<a href="#"><img src="./images/user/anu.jpg" alt="anu" title="Anu Varghese" /></a>
				<div class="recDet">
					<div class="recList">Chrishtian, R.c.</div>
					<div class="recList">29 Years - 5' 4'', 167 cm</div>
					<div class="recList">Ankamaly, Kerala, India</div>
					<div class="upDet">Updated 5 photos in her album</div>
				</div>
				<div class="upPhoto">
					<a href="#"><img src="./images/user/athira.jpg" alt="" /></a>
					<a href="#"><img src="./images/user/priya.jpg" alt="" /></a>
					<a href="#"><img src="./images/user/nayana.jpg" alt="" /></a>
					<a href="#"><img src="./images/user/rans.jpg" alt="" /></a>
				</div>
				<div class="footN">
					<div class="updated">2 Minuts ago</div>
				</div>
			</div>
			<div class="recentUpdates">
				<div class="recH"><a href="#">Seema Varma</a> (You expressed interest on 12th Jan. 2012)</div>
				<a href="#"><img src="./images/user/anu.jpg" alt="anu" title="Anu Varghese" /></a>
				<div class="recDet">
					<div class="recList">Chrishtian, R.c.</div>
					<div class="recList">29 Years - 5' 4'', 167 cm</div>
					<div class="recList">Ankamaly, Kerala, India</div>
					<div class="upDet">Updated 5 photos in her album</div>
				</div>
				<div class="footN">
					<div class="updated">About an Hour ago</div>
					<p>
						The most eligible bachelor & young politician from Kerala, Hibi Eden tied the wedding knot with Anna LinAda who was formerly a television anchor,The most eligible bachelor & young politician from Kerala, Hibi Eden tied the wedding knot with Anna LinAda who was formerly a television anchor...
					</p>
				</div>
			</div>-->
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
            <!-- <div class="profile">
                <div class="check-contnr"><input type="checkbox" /> Select</div>
                <div class="image-contnr">
                    <a href="#"><img src="./images/user/thumbnail.jpg" alt="" /></a>
                    <div class="img-controls">
                        <a href="#" class="prev"></a>
                        <div class="numbers">
                            <span>1</span> of <span>6</span>
                        </div>
                        <a href="#" class="next"></a>
                    </div>
                </div>
                <div class="profile-details">
                    <ul class="details-contnr">
                        <li>
                            <div class="title">Name</div>
                            <div class="info">: <a href="#" class="color" >Lilly Joseph (E204235)</a></div>
                        </li>
                        <li>
                            <div class="title">Religion / Cast </div>
                            <div class="info">: Chrishtian, R.c.</div>
                        </li>
                        <li>
                            <div class="title">Age</div>
                            <div class="info">: 29 Years </div>
                        </li>
                        <li>
                            <div class="title">Height</div>
                            <div class="info">: 5' 4'', 167 cm</div>
                        </li>
                        <li>
                            <div class="title">Place</div>
                            <div class="info">: Ankamaly, Kerala, India</div>
                        </li>
                        <li>
                            <div class="title">Education</div>
                            <div class="info">: Bsc Chemistry</div>
                        </li>
                        <li>
                            <div class="title">Occupation</div>
                            <div class="info">: Actor</div>
                        </li>
                    </ul>
                    <a class="view-full" href="#">View Full Profile</a>
                </div>
                <div class="button-contnr">
                    <a href="#" class="global">Express Interest</a>
                    <a href="#" class="global">Bookmark</a>
                    <a href="#" class="global">Send Message</a>
                </div>
            </div>
            <div class="profile">
                <div class="check-contnr"><input type="checkbox" /> Select</div>
                <div class="image-contnr">
                    <a href="#"><img src="./images/user/thumbnail.jpg" alt="" /></a>
                    <div class="img-controls">
                        <a href="#" class="prev"></a>
                        <div class="numbers">
                            <span>1</span> of <span>6</span>
                        </div>
                        <a href="#" class="next"></a>
                    </div>
                </div>
                <div class="profile-details">
                    <ul class="details-contnr">
                        <li>
                            <div class="title">Name</div>
                            <div class="info">: <a href="#" class="color" >Lilly Joseph (E204235)</a></div>
                        </li>
                        <li>
                            <div class="title">Religion / Cast </div>
                            <div class="info">: Chrishtian, R.c.</div>
                        </li>
                        <li>
                            <div class="title">Age</div>
                            <div class="info">: 29 Years </div>
                        </li>
                        <li>
                            <div class="title">Height</div>
                            <div class="info">: 5' 4'', 167 cm</div>
                        </li>
                        <li>
                            <div class="title">Place</div>
                            <div class="info">: Ankamaly, Kerala, India</div>
                        </li>
                        <li>
                            <div class="title">Education</div>
                            <div class="info">: Bsc Chemistry</div>
                        </li>
                        <li>
                            <div class="title">Occupation</div>
                            <div class="info">: Actor</div>
                        </li>
                    </ul>
                    <a class="view-full" href="#">View Full Profile</a>
                </div>
                <div class="button-contnr">
                    <a href="#" class="global">Express Interest</a>
                    <a href="#" class="global">Bookmark</a>
                    <a href="#" class="global">Send Message</a>
                </div>
            </div>
            <div class="profile">
                <div class="check-contnr"><input type="checkbox" /> Select</div>
                <div class="image-contnr">
                    <a href="#"><img src="./images/user/thumbnail.jpg" alt="" /></a>
                    <div class="img-controls">
                        <a href="#" class="prev"></a>
                        <div class="numbers">
                            <span>1</span> of <span>6</span>
                        </div>
                        <a href="#" class="next"></a>
                    </div>
                </div>
                <div class="profile-details">
                    <ul class="details-contnr">
                        <li>
                            <div class="title">Name</div>
                            <div class="info">: <a href="#" class="color" >Lilly Joseph (E204235)</a></div>
                        </li>
                        <li>
                            <div class="title">Religion / Cast </div>
                            <div class="info">: Chrishtian, R.c.</div>
                        </li>
                        <li>
                            <div class="title">Age</div>
                            <div class="info">: 29 Years </div>
                        </li>
                        <li>
                            <div class="title">Height</div>
                            <div class="info">: 5' 4'', 167 cm</div>
                        </li>
                        <li>
                            <div class="title">Place</div>
                            <div class="info">: Ankamaly, Kerala, India</div>
                        </li>
                        <li>
                            <div class="title">Education</div>
                            <div class="info">: Bsc Chemistry</div>
                        </li>
                        <li>
                            <div class="title">Occupation</div>
                            <div class="info">: Actor</div>
                        </li>
                    </ul>
                    <a class="view-full" href="#">View Full Profile</a>
                </div>
                <div class="button-contnr">
                    <a href="#" class="global">Express Interest</a>
                    <a href="#" class="global">Bookmark</a>
                    <a href="#" class="global">Send Message</a>
                </div>
            </div>-->
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
    <?php }?>   