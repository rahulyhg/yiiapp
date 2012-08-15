<div class="txt_bld" id="mypage-search-2">Welcome <span class="logout">Guest</span> !</div>
  
  
   <div class="user-login"><!--user-login-->
<?php echo CHtml::beginForm(Yii::app()->createUrl('site/login'),'post',array('name'=>'LoginForm','id'=>'LoginForm'));?>
<div class="left">

<p class="txt_rg">E-Mail / User ID</p>
	<input type="text" class="user-form" id="user" name="LoginForm[username]"/>
<p class="txt_rg"><span class="text_blue"><a href="new-user.html">New User?</a></span></p>
</div>

<div class="left">
<p class="txt_rg">Password</p>
	<input type="password" class="user-form" id="password" name="LoginForm[password]" />
<p class="txt_rg"><span class="text_blue"><a href="forget-password.html">Forget Passord?</a></span></p>

</div>
<div class="right">
<?php echo CHtml::submitButton('Login',array('class'=>'reset_sub')); ?>
</div>
<?php echo CHtml::endForm(); ?>
</div>


<!-- logged user -->
<!--<div class="txt_bld" id="mypage-search-2">Hi <span class="logout"><a href="#">BIJU! M123456</a></span>  |   <span class="back"><a href="my-page.html">Back to my page</a></span>  |     <span class="logout"><a href="#">Logout</a></span></div>-->