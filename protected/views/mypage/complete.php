<?php
/*
*
* $Id$
--------------------------------------------------------------------------------------------------------------------------
* Information contained in this file is the intellectual property of Ladbrokes Plc
* Copyright © 2012 MarryDorr. All Rights Reserved.
* ---------------------------------------------------------------------------------------------------------------------------
*
* @author  Ageesh K Gopinath
* @title complete.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>
<?php $this->widget('application.widgets.menu.Leftmenu'); ?>
 <section class="data-contnr3">
		<ul class="accOverview pB15">
			<li><h1 class="pTB15 tCenter">Complete Your Profile</h1></li>
			<li>
				<p class="tCenter">Take a few minutes to complete your profile. Users with complete profiles are 40 times more likely to receive better responses.</p>
			</li>
			<li>
				<div class="proGraph">
					<p>Your profile is <?php echo $percent ?>% completed</p>
					<div class="graphCont">
						<div style="width:<?php echo $percent?>%" class="progress"></div>
					</div>
				</div>
			</li>
		</ul>
		<?php if($profile) 
		{?>
		<ul class="accOverview pTB15">
			<li>
				<h2>Profile picture not yet added : <a href="/mypage/profile">Upload Now</a></h2>
			</li>
			<li>
				<p class="tCenter">Please add your profile picture to get responses from better matches. <br />By adding a profile picture you increase the credibility of your profile. </p>
			</li>
		</ul>
		<?php 
		}
		if($album)
		{
		?>
		
		<ul class="accOverview pTB15">
			<li>
				<h2>Family album not yet added : <a href="/mypage/profile">Upload Now</a></h2>
			</li>
			<li>
				<p class="tCenter">Please add your family album since wedding is a family affair. <br />It will help interested candidates to get to know your family well in advance.</p>
			</li>
		</ul>
		
		<?php }
		if($document)
		{
		?>
		<ul class="accOverview pTB15">
			<li>
				<h2>My documents not yet added : <a href="/mypage/profile">Upload Now</a></h2>
			</li>
			<li>
				<p class="tCenter">By filling up the my detailed section you can let others know about you education, date of birth and place of stay. </p>
			</li>
		</ul>
		<?php }
		if($astro)
		{
		?>
		<ul class="accOverview pTB15">
			<li>
				<h2>My astro details not yet added  : <a href="/mypage/profile">Upload Now</a></h2>
			</li>
			<li>
				<p class="tCenter">BY adding my astro details or horoscope you can increase your chances of getting responses from the right candidate.</p>
			</li>
		</ul>
		<?php }
		
		if($reference)
		{
		?>
		<ul class="accOverview pTB15">
			<li>
				<h2>My reference not yet added : <a href="/mypage/profile">Upload Now</a></h2>
			</li>
			<li>
				<p class="tCenter">Adding my reference information is a way to let other give you a testimonial. </p>
			</li>
		</ul>
		<?php }?>
		<ul class="accOverview pTB15">
			<li class="visitorBtnC mT20">
				<a href="/mypage">Skip Now</a>
			</li>
		</ul>
    </section>