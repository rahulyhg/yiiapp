<?php
/*
*
* $Id$
--------------------------------------------------------------------------------------------------------------------------
* Information contained in this file is the intellectual property of Ladbrokes Plc
* Copyright © 2012 MarryDorr. All Rights Reserved.
* ---------------------------------------------------------------------------------------------------------------------------
*
* @author  Dileep Gopalan
* @title document.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>
    <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
	<section class="data-contnr2">
	<?php 
			$user = Yii::app()->session->get('user');
		$astro = $user->horoscopes;
		$partner = $user->partnerpreferences;
		?>
		<h1 class="mB10">Add your Grahanila </h1>
        <p>Take some time to fill up your Grahanila/astro details as it will help you get a life partner who matches you better. </p>
		<ul class="accOverview pmB10">
			<li>
				<h3 class="">Grahanila</h3>
			</li>
			<li class="">
				<div class="grahanila">
					<a href="#" class="gDelete">Delete</a>
				</div>
			</li>
			<li class="mT15">
				<div class="leftC">Zodiac sign</div>
				<div class="rightC">
					<strong>:</strong> <span><?php
					if(isset($astro->sign) && !empty($astro->sign))
					echo Utilities::getValueForIds(new SignsMaster(),$astro->sign,'signId');
					?>
					</span>
				</div>
			</li>
			<li>
				<div class="leftC">Birth sign</div>
				<div class="rightC">
					<strong>:</strong> <span><?php 
					if(isset($astro->astrodate) && !empty($astro->astrodate))
					{
						$ast = AstrodateMaster::model()->findbyPk($astro->astrodate);
						echo $ast->name; 
					}
					?></span>
				</div>
			</li>
			<li>
				<div class="leftC">Chovvadosham</div>
				<div class="rightC">
				<?php $chova = Utilities::getChova() ?>
					<strong>:</strong> <span><?php  if(isset($astro->dosham)) echo $chova[$astro->dosham]; ?></span>
				</div>
			</li>
		</ul>
		<ul class="accOverview pmB10">
			<li>
				<div class="refHead">
					<div class="headT">My Astro Preference</div> 
				</div>
			</li>
			
			<li>
				<div class="leftC">Birth sign</div>
				<div class="rightC">
					<strong>:</strong> <span><?php 
					if(isset($partner->star) && !empty($partner->star))
					{
						echo Utilities::getValueForIds(new SignsMaster(),$partner->star,'signId');
					}
					
					?></span>
				</div>
			</li>
			<li>
				<div class="leftC">Chovvadosham</div>
				<div class="rightC">
					<strong>:</strong> <span><?php if(isset($partner->dosham)) echo $chova[$partner->dosham]; ?>No</span>
				</div>
			</li>
			
		</ul>
    </section>
	<?php $this->widget('application.widgets.menu.Rightmenu'); ?>