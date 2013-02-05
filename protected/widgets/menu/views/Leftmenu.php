 <?php
 	// get the user details from session value
 	$user = Yii::app()->session->get('user'); 
 	$profileImage = $user->photos(array('condition'=>'profileImage = 1'));
 	if(count($profileImage) > 0){
 		$image = $profileImage[0]->imageName;
 	}else{
 		$image = '';
 	}
 ?>
    <aside class="left-bar-container">
		<ul class="left-bar-data">
            <li>
				<a href="<?php echo Utilities::createAbsoluteUrl('album','',array()); ?>"><img src="<?php echo Utilities::getProfileImage($user->marryId,$image) ?>" alt="" /></a>
				<a href="<?php echo Utilities::createAbsoluteUrl('mypage','',array()); ?>" class="pName"><?php echo $user->name?></a>
			</li>
        </ul>
		<ul class="left-bar-data">
			<li>
				<div class="moreDay"><span>03</span> More Days</div>
				<div class="remain">Remaining. <a href="recharge-now.htm" >Re-Charge Now</a></div>
			</li>
        </ul>
        <ul class="left-bar-data">
            <li><a href="<?php echo Utilities::createAbsoluteUrl('mypage','index',array()); ?>" class="select headLink">My Page</a></li>
            <li><a href="<?php echo Utilities::createAbsoluteUrl('mypage','profile',array()); ?>" class="headLink">My Profile</a></li>
            <li><a href="<?php echo Utilities::createAbsoluteUrl('mypage','account',array()); ?>" class="headLink">My Account</a></li>
            <li>
				<a href="<?php echo Utilities::createAbsoluteUrl('mypage','document',array()); ?>" class="headLink">My Documents</a>
				<a class="infoB" href="javascript:void(0)">?</a>
				<div class="infoBox">
					<div class="iArrow"></div>
					<div class="iHead">What is My Document</div>
					<p>Documents such as passport, ration card, voters ID, pan card, bank passbook, school certificate, university certificate are considered as my documents.</p>
				</div>
			</li>
			<li><a href="<?php echo Utilities::createAbsoluteUrl('album','',array('mId'=>$user->marryId)); ?>" class="headLink">My Album</a></li>
            <li><a href="<?php echo Utilities::createAbsoluteUrl('album','family',array()); ?>" class="headLink">My Family album</a></li>
            <li><a href="<?php echo Utilities::createAbsoluteUrl('mypage','astro',array()); ?>" class="headLink">My Astro details</a></li>
			<li>
				<a href="<?php echo Utilities::createAbsoluteUrl('mypage','reference',array()); ?>" class="headLink">My Reference</a>
				<a class="infoB" href="javascript:void(0)">?</a>
				<div class="infoBox">
					<div class="iArrow"></div>
					<div class="iHead">What is My Reference</div>
					<p>My reference is where you can add the references of people who can vouch for your character. You can add teachers and important people in your locality as your references. </p>
				</div>
			</li>
            <li><a href="<?php echo Utilities::createAbsoluteUrl('mypage','contact',array()); ?>" class="headLink">My Contact details</a></li>
            <li>
				<a href="<?php echo Utilities::createAbsoluteUrl('mypage','shortlist',array()); ?>" class="headLink">My Shortlists</a>
				<a class="infoB" href="javascript:void(0)">?</a>
				<div class="infoBox">
					<div class="iArrow"></div>
					<div class="iHead">What is My Shortlists</div>
					<p>You might get interested in many profiles and many people might show interest in your profile. If the interest is mutually accepted, you can short list the profiles you want to contact later. </p>
				</div>
			</li>
			<li>
				<a href="<?php echo Utilities::createAbsoluteUrl('mypage','bookmark',array()); ?>" class="headLink">My Bookmarks</a>
				<a class="infoB" href="javascript:void(0)">?</a>
				<div class="infoBox">
					<div class="iArrow"></div>
					<div class="iHead">What is My Bookmarks</div>
					<p>Bookmark is a way to keep the profiles of your interest aside and check them in detail later. You can see the bookmarks when you long on next time.</p>
				</div>
			</li>
            <li>
				<a href="<?php echo Utilities::createAbsoluteUrl('mypage','addressbook',array()); ?>" class="headLink">My Addressbook</a>
				<a class="infoB" href="javascript:void(0)">?</a>
				<div class="infoBox">
					<div class="iArrow"></div>
					<div class="iHead">What is My Addressbook</div>
					<p>Address book is a place to where you can import the address to my address book. This way you can access the details later without visiting a particular profile again. </p>
				</div>
			</li>
			<li><a href="<?php echo Utilities::createAbsoluteUrl('payment','summary',array()); ?>" class="headLink">My Payment summery</a></li>
			<li><a href="<?php echo Utilities::createAbsoluteUrl('mypage','settings',array()); ?>" class="headLink">My Settings</a></li>
        </ul>
        <ul class="left-bar-data">
            <li>
				<a href="<?php echo Utilities::createAbsoluteUrl('message','',array()); ?>" class="headLink ">Message </a>
				<div class="dataCont">
					<div class="row"><a href="<?php echo Utilities::createAbsoluteUrl('message','',array()); ?>" class="innLink">Inbox <?php echo count($user->messageReceiver); ?></a></div>
					<div class="row"><a href="<?php echo Utilities::createAbsoluteUrl('message','sent',array()); ?>" class="innLink">Outbox <?php echo count($user->messageSender); ?></a></div>
					<div class="row"><a href="<?php echo Utilities::createAbsoluteUrl('message','acknowledgement',array()); ?>" class="innLink">Delivery aknowledgement 10</a></div>
				</div>
			</li>
        </ul>
		<ul class="left-bar-data">
            <li>
				<a href="<?php echo Utilities::createAbsoluteUrl('request','sent',array()); ?>" class="headLink ">Request </a>
				<div class="dataCont">
					<div class="row"><a href="<?php echo Utilities::createAbsoluteUrl('request','sent',array()); ?>" class="innLink">Sent 75</a></div>
					<div class="row"><a href="<?php echo Utilities::createAbsoluteUrl('request','receive',array()); ?>" class="innLink">Recieved 35</a></div>
					<div class="row"><a href="<?php echo Utilities::createAbsoluteUrl('request','decline',array()); ?>" class="innLink">Declined 25</a></div>
				</div>
			</li>
        </ul>
		<ul class="left-bar-data">
            <li>
				<a href="<?php echo Utilities::createAbsoluteUrl('interest','sent',array()); ?>" class="headLink ">Interest </a>
				<div class="dataCont">
					<div class="row"><a href="<?php echo Utilities::createAbsoluteUrl('interest','sent',array()); ?>" class="innLink">Sent <?php echo count($user->interestSender); ?></a></div>
					<div class="row"><a href="<?php echo Utilities::createAbsoluteUrl('interest','receive',array()); ?>" class="innLink">Recieved <?php echo count($user->interestReceiver); ?></a></div>
					<div class="row"><a href="<?php echo Utilities::createAbsoluteUrl('interest','decline',array()); ?>" class="innLink">Declined 25</a></div>
				</div>
			</li>
        </ul>
		<ul class="left-bar-data">
            <li>
				<div class="mdAddT1 mT12">Want to invite a friend to </div>
				<div class="mdAddT2">marrydoor ?</div>
				<h5>Key in e-mail ids separated by comma</h5>
				<input type="text" placeholder="Friends Email ID" />
				<a href="#" class="type2 no-marg">Invite</a>
			</li>
        </ul>
    </aside>