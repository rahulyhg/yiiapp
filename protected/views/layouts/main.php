<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
		<link rel="icon" href="http://media.marrydoor.com/rings.jpg" />
	<!-- css & js -->
	<?php $this->widget('application.widgets.Scripts'); ?>	
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
	<div id="page">
		<!--wrapper-->
		<div id="wrapper">
<?php $userName = Yii::app()->session->get('username');?>		
	<div id="head-my">
	<a href="home-viewed-by-member.html"> <img src="<?php echo Yii::app()->params['mediaUrl']; ?>/logo.jpg"
		class="logo" border="0" /> </a>
		
		 <?php if(isset($userName)) {?>
		<div class="mgn_top">
		<!-- Dropdown menu -->
			<?php $this->widget('application.widgets.menu.Dropdownmenu'); ?>
 		<!-- Dropdown menu ends -->
		</div>
		<?php }?>

		<div id="mypage-login_box">
			<!-- login header -->
				<?php $this->widget('application.widgets.login.Header'); ?>
			<!-- login header ends -->
		</div>
	<p class="clear"></p>


 <?php if(isset($userName)) {?>
	<p class="space-25px">&nbsp;</p>
				<!--navigation_container-->
				<div class="navigation_container">
				<!-- main menu starts -->
					<?php $this->widget('application.widgets.menu.Main'); ?>
				<!-- main menu ends -->
					<!-- my account dropdown -->
					<?php $this->widget('application.widgets.menu.Myaccount'); ?>
				<!-- my account dropdown ends -->
				<!-- my profile dropdown -->
	
				<!-- my profie dropdown ends here -->
					<?php $this->widget('application.widgets.menu.Myprofile'); ?>
				<!-- communicate dropdown -->
					<?php $this->widget('application.widgets.menu.Communicate'); ?>
				<!-- communicate dropdown ends here -->
	
				<!-- search dropdown -->
					<?php $this->widget('application.widgets.menu.Search'); ?>
				<!-- search dropdown ends here -->
				<!-- payment dropdown starts here -->
					<?php $this->widget('application.widgets.menu.Paymentoptions'); ?>
				<!-- payment dropdown ends here -->
				<!-- contactus dropdown starts here -->
					<?php $this->widget('application.widgets.menu.Contactus'); ?>
				<!-- contactus dropdown ends here -->
				</div>
				<!--/navigation_container-->
				<?php } else {?>
		<!-- search dropdown -->
		
				<div class="navigation_container">
				<?php $this->widget('application.widgets.menu.SubMain'); ?>
				<?php $this->widget('application.widgets.menu.Search'); ?>
				<!-- search dropdown ends here -->
				<!-- payment dropdown starts here -->
					<?php $this->widget('application.widgets.menu.Paymentoptions'); ?>
				<!-- payment dropdown ends here -->
				<!-- contactus dropdown starts here -->
					<?php $this->widget('application.widgets.menu.Contactus'); ?>
				</div>	
				<!-- contactus dropdown ends here -->
					<?php }?>
<p class="clear"></p>
<p class="space-15px">&nbsp;</p>



</div>

<!--head closing-->

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		    'homeLink'=>CHtml::link('Start', array('/site/index')),
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
</div>
	<!--footer-->
	<?php $this->widget('application.widgets.Footer'); ?>

</div><!-- page -->
<div class="clear"></div>
</body>
</html>
