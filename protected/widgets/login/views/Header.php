  <?php $userName = Yii::app()->session->get('username');?>
  <?php if(isset($userName)) {?>
<div class="txt_bld" id="mypage-search-2">Welcome <span class="logout"><?php echo $userName;?></span> !</div>
<a href="/site/logout" class="deactivate">Logout</a>
<?php }else{?>
<div class="txt_bld" id="mypage-search-2">Welcome <span class="logout">Guest</span> !</div>
   <div class="user-login"><!--user-login-->
<?php echo CHtml::beginForm(Yii::app()->createUrl('site/login'),'post',array('name'=>'LoginForm','id'=>'LoginForm'));?>
<div class="left">

<p class="txt_rg">E-Mail / User ID</p>
	<input type="text" class="user-form"  tabindex="1"  id="user" name="LoginForm[username]"/>
<p class="txt_rg"><span class="text_blue"><a href="/guest/user">New User?</a></span></p>
</div>

<div class="left">
<p class="txt_rg">Password</p>
	<input type="password" class="user-form" tabindex="2" id="password" name="LoginForm[password]" />
<p class="txt_rg"><span class="text_blue"><a href="/guest/forget">Forget Passord?</a></span></p>

</div>
<div class="right">
<?php echo CHtml::submitButton('Login',array('class'=>'btnStyle','tabindex'=>'3')); ?>
</div>
<?php echo CHtml::endForm(); ?>
</div>
<?php }?>

<!-- logged user -->
<!--<div class="txt_bld" id="mypage-search-2">Hi <span class="logout"><a href="#">BIJU! M123456</a></span>  |   <span class="back"><a href="my-page.html">Back to my page</a></span>  |     <span class="logout"><a href="#">Logout</a></span></div>-->