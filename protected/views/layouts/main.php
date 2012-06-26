<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/css-new.css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/rollover.css"/>
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>


<body
	onload="MM_preloadImages('images/hedding_regular-search_pink.jpg','images/hedding_advanced-search_pink.jpg','images/hedding_keyword_pink.jpg','images/hedding_search_by_id_pink.jpg','images/login_btn.jpg','images/search_btn_sm.jpg')">
	<div id="page">
		<!--wrapper-->
		<div id="wrapper">
		
	<div id="head-my">
	<a href="home-viewed-by-member.html"> <img src="images/logo.jpg"
		class="logo" border="0" /> </a>
		<div class="mgn_top">
		<a href="#"> <img src="images/not_1.jpg" class="left" border="0" /> </a>
		<a href="#"> <img src="images/not_2.jpg" class="left" border="0" /> </a>
		<a href="#"> <img src="images/not_3.jpg" class="left" border="0" /> </a>
		<a href="#"> <img src="images/not_4.jpg" class="left" border="0" /> </a>
		<a href="#"> <img src="images/not_5.jpg" class="left" border="0" /> </a>
		</div>


		<div id="mypage-login_box">
		
			<div id="mypage-search-2" class="txt_bld">
				Hi <span class="logout"><a href="my-page.html">BIJU! M123456</a> </span>
				| <span class="logout"><a href="#">Logout</a> </span>
			</div>
			<div id="mypage-search-1">
		
				<form>
					<a class="srch-sub" href="#">Search</a> <input type="text"
						class="text_normal_search" placeholder="Search By ID / Keyword" />
				</form>
		
			</div>
		</div>
	<p class="clear"></p>



	<p class="space-25px">&nbsp;</p>
				<!--navigation_container-->
				<div class="navigation_container">
					<div class="nav_bloc">
						<!--nav_bloc-->
						<div class="nav_links">
							<a href="09 my account .html">my account</a>
						</div>
						<div class="nav_links">
							<a href="10 my reference contact.html">my profile</a>
						</div>
						<div class="nav_links">
							<a href="10 my message.html">communicate</a>
						</div>
						<div class="nav_links">
							<a href="08--search.html">search</a>
						</div>
						<div class="nav_links">
							<a href="01-home-viewed-by-guest.html">payment options</a>
						</div>
						<div class="nav_links_last">
							<a href="10 my contact.html">contact us</a>
						</div>
					</div>
					<!--nav_bloc-->
				</div>
				<!--/navigation_container-->
<p class="clear"></p>
<p class="space-15px">&nbsp;</p>



			<div id="div-200">
				<p class="txt_bld">
					<span class="innersidelinks-home"><a href="#">Home</a> </span>|&nbsp;&nbsp;
					<a href="#">My page</a>
				</p>
				<p class="space-5px">&nbsp;</p>
			</div>


</div>

<!--head closing-->


	<div id="mainmenu">
		<?php  /*$this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		));  */ ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
</div>
	<!--footer-->
	<div id="footer">
		<div class="footer-1">
			<a href="#"><img src="images/rings.jpg" class="icon_footer"
				border="0" /> </a>
			<p class="text_wt_ftr">
				<a href="about-us.html">About us</a> &nbsp;|&nbsp; <a href="#">Contact
					Us</a> &nbsp;|&nbsp; <a href="faq.html">FAQ's</a> &nbsp;|&nbsp; <a
					href="feedback.html">Feedback</a> &nbsp;|&nbsp; <a
					href="privacy-policy.html">Privacy Policy</a> &nbsp;|&nbsp; <a
					href="terms-conditions.html">Terms & Conditions</a> &nbsp;|&nbsp;
				Copyright © 2012 <a href="#">Loloos Technolab Pvt. Ltd.</a>
				&nbsp;All rights reserved.
			</p>
			<p class="text_wt_ftr2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Find
				us on</p>
			<a href="#"><img src="images/facebook_icon.jpg" class="footer_icons"
				border="0" /><a href="#"><img src="images/twitter_icon.jpg"
					class="footer_icons" border="0" /> </a> <a href="#"><img
					src="images/google_icon.jpg" class="footer_icons"
					style="padding-bottom: 2px;" border="0" /> </a>
		
		</div>
	</div>

</div><!-- page -->

</body>
</html>
