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
* @title astrodetails.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>


		<div class="subContent">
			<section class="subHead">
				<h1 ><?php echo $model->name?> <?php echo $model->marryId?></h1>
					<?php $astro = $model->horoscopes;
					$partner = $model->partnerpreferences; ?>
				<h5>Viewing Grahanila</h5>
			</section>
			<section class="subContnr">
				<ul class="accOverview pmB10">
					<li class="mT15">
						<div class="grahanila">
							
						</div>
					</li>
					<li class="mT15">
						<div class="leftC">Zodiac sign</div>
						<div class="rightC">
							<strong>:</strong> <span><?php
					if(isset($astro->sign) && !empty($astro->sign))
					echo Utilities::getValueForIds(new SignsMaster(),$astro->sign,'signId');
					?></span>
						</div>
					</li>
					<li>
						<div class="leftC">Birth sign</div>
						<div class="rightC">
							<strong>:</strong> <span><?php if(isset($astro->astrodate) && !empty($astro->astrodate))
					{
						$ast = AstrodateMaster::model()->findbyPk($astro->astrodate);
						echo $ast->name; 
					}?></span>
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
							<div class="headT"><?php echo $model->name."'s"?> astro preference</div> 
						</div>
					</li>
					<!--  <li>
						<div class="leftC">Zodiac sign</div>
						<div class="rightC">
							<strong>:</strong> <span>Cancer</span>
						</div>
					</li>
					 -->
					<li>
						<div class="leftC">Birth sign</div>
						<div class="rightC">
							<strong>:</strong> <span><?php if(isset($partner->star) && !empty($partner->star))
					{
						echo Utilities::getValueForIds(new SignsMaster(),$partner->star,'signId');
					}
					?></span>
						</div>
					</li>
					<li>
						<div class="leftC">Chovvadosham</div>
						<div class="rightC">
							<strong>:</strong> <span><?php if(isset($partner->dosham)) echo $chova[$partner->dosham]; ?></span>
						</div>
					</li>
				</ul>
				
			</section>
	