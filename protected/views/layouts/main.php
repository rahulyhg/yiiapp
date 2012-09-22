<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<!-- css & js -->
	<?php $this->widget('application.widgets.scripts'); ?>	
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
	<div id="page">
		<!--wrapper-->
		<div id="wrapper">
<?php $userName = Yii::app()->session->get('username');?>		
	<div id="head-my">
	<a href="home-viewed-by-member.html"> <img src="<?php echo Yii::app()->params['resourceUrl']; ?>/images/logo.jpg"
		class="logo" border="0" /> </a>
		
		 <?php if(isset($userName)) {?>
		<div class="mgn_top">
		<!-- Dropdown menu -->
		
			<?php $this->widget('application.widgets.menu.dropdownmenu'); ?>
 		<!-- Dropdown menu ends -->
		</div>
	<?php }?>

		<div id="mypage-login_box">
			<!-- login header -->
				<?php $this->widget('application.widgets.login.header'); ?>
			<!-- login header ends -->
		</div>
	<p class="clear"></p>


	
  <?php if(isset($userName)) {?>

	<p class="space-25px">&nbsp;</p>
				<!--navigation_container-->
				<div class="navigation_container">
				<!-- main menu starts -->
					<?php $this->widget('application.widgets.menu.main'); ?>
				<!-- main menu ends -->
					<!-- my account dropdown -->
					<?php $this->widget('application.widgets.menu.myaccount'); ?>
				<!-- my account dropdown ends -->
				<!-- my profile dropdown -->
	
				<!-- my profie dropdown ends here -->
					<?php $this->widget('application.widgets.menu.myprofile'); ?>
				<!-- communicate dropdown -->
					<?php $this->widget('application.widgets.menu.communicate'); ?>
				<!-- communicate dropdown ends here -->
	
				<!-- search dropdown -->
					<?php $this->widget('application.widgets.menu.search'); ?>
				<!-- search dropdown ends here -->
				<!-- payment dropdown starts here -->
					<?php $this->widget('application.widgets.menu.paymentoptions'); ?>
				<!-- payment dropdown ends here -->
				<!-- contactus dropdown starts here -->
					<?php $this->widget('application.widgets.menu.contactus'); ?>
				<!-- contactus dropdown ends here -->
				</div>
				<!--/navigation_container-->
				<?php } else {?>
				
				<div class="navigation_container_small">
		<div class="nav_bloc"><!--nav_bloc-->
		
		<div class="nav_links"><a href="08--search.html">&nbsp;&nbsp;&nbsp;search</a></div>
		<div class="nav_links"><a href="01-home-viewed-by-guest.html">payment options</a></div>
		<div class="nav_links_last"><a href="10 my contact.html">contact us</a></div>
	</div><!--nav_bloc-->
</div><!--/navigation_container-->
				<?php }?>
<p class="clear"></p>
<p class="space-15px">&nbsp;</p>



</div>

<!--head closing-->

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
</div>
	<!--footer-->
	<?php $this->widget('application.widgets.footer'); ?>

</div><!-- page -->
<div class="clear"></div>
</body>
</html>
