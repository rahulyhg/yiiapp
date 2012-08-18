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
		<!--wrapper-->
		<div class="wrapper">
		
		
		<!--head closing-->

	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	</div>
	<!--footer-->
	<?php $this->widget('application.widgets.footer'); ?>

<div class="clear"></div>
</body>
</html>
		