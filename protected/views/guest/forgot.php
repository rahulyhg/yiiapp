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
 * @title forgot.php
 * @description <Description of this class>
 *  @filesource <URL>
 *  @version <Revision>
 */
?>



<div
	id="album_main">
	<!--content-wrapper-sub-->
	<div id="wrapper-head-sub">
		<!--wrapper-head-sub-->
		<br /> <a href="home-viewed-by-member.html"><img
			src="<?php echo Yii::app()->params['mediaUrl']; ?>/images/logo.jpg"
			class="middle-align-sub" border="0" /> </a>
	</div>
	<!--wrapper-head-sub-->
	<div class="name-bloc-sub-add">
		<!--name-bloc-sub-add-->
		<br />

		<div class="content-top">
			<!--content-top-->


			<p class="astro-hd_cntr">Identify your account</p>
			<div class="clear"></div>



		</div>
		<!--content-top-->

	</div>
	<!--name-bloc-sub-add-->

	<div id="about-content-sub-add">
		<!--about-content-sub-add-->
		<p class="center">Google Chrome can't display the webpage because your
			computer isn't connected to the Internet.</p>

		<p class="center">You can try to diagnose the problem by taking the
			following steps:</p>






	<?php if(isset($sent) && $sent == true)   {?>
	
	 We have sent an email to your registered email address with the password, please use the new password for login.
	
	<?php } else if(isset($sent) && $sent == false) {?>
		
		Please enter correct email id.
	
	<?php } else {?>
	

		<div class="ab-nav-new">
			<!--ab-nav-new-->

			<p class="text_pink-hd">
				<span class="span_12">Enter your email address or member ID</span>
			</p>
			&nbsp;&nbsp;&nbsp;



			<div id="mypage-search-ff">

				<form id="forget"  name="forget" method="post"  action="/guest/forget">
					<a class="srch-sub" href="javascript:forget.submit();">Submit</a> 
					<input type="text" name="email" class="text_normal_search" />
				</form>

			</div>
		</div>

	<?php } ?>
		<div class="back_to_page">

			<a class="back-my-page-auto" href="<?php echo Utilities::getHomeUrl()?>">Back To Home Page</a>



		</div>


	</div>
	<!--about-content-sub-add-->

</div>

















<div class="push"></div>
</div>
