        
        <a href="http://marrydoor.com" class="logo" ></a>
                <?php $userName = Yii::app()->session->get('username');?>
                <?php $user = Yii::app()->session->get('user');?>
  <?php if(isset($userName)) {?>
  			<div class="welcome-message">Hi <a href="edit-my-profile.htm" class="mdL"><?php echo $userName; echo " ".$user['marryId']?> </a> | <a class="logout" href="/site/logout">Logout</a></div>
  			
  			<?php } else {?>
  			   <div class="welcome-message">Welcome Guest!</div>
			  			
        <div class="user-login">
<?php echo CHtml::beginForm(Yii::app()->createUrl('site/login'),'post',array('name'=>'LoginForm','id'=>'LoginForm'));?>
			<div class="login-contnr">
				<p>E-Mail / User ID</p>
					<input type="text" class="required"  tabindex="1"  id="user" name="LoginForm[username]"/>
				
				<a href="/guest/user">New User?</a>
			</div>
			<div class="login-contnr">
				<p>Password</p>
				<input type="password" class="required" tabindex="2" id="password" name="LoginForm[password]" />
				<a href="/guest/forget" id="forgotPassword">Forget Password?</a>
			</div>
			<?php echo CHtml::submitButton('Login',array('class'=>'type2b','tabindex'=>'3')); ?>
		<?php echo CHtml::endForm(); ?>
				</div>
		<?php }?>

		
		
<script type="text/javascript">
$(document).ready(function(){
    //$("#LoginForm").validationEngine('attach');
    $("#LoginForm").validate();

    $("#forgotPassword").colorbox({iframe:true, width:"850", height:"500"});
  });


</script>