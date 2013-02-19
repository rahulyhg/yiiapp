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
* @title partnerpreference.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>
    <?php $this->widget('application.widgets.menu.Leftmenu'); ?>

        <section class="data-contnr2">
        <ul class="accOverview pmB10">
			<li class="mT8">
				<h1>My Partner Preference</h1>
			</li>
			<?php if(isset($user)) {
			$maritialStatus = Utilities::getMaritalStatus();
			 $heightArray = Utilities::getHeights();
				?>
			
			
			<li class="mT8">
				<a href="/mypage/editpartner" class="type2">Edit</a>
			</li>
			<li>
				<div class="leftC">Prefered Age </div>
				<div class="rightC">
					<strong>: <?php if(isset($user->partnerpreferences->ageFrom))echo $user->partnerpreferences->ageFrom;?> to <?php if(isset($user->partnerpreferences->ageTo))echo $user->partnerpreferences->ageTo;?></strong> 
				</div>
			</li>
			<li>
				<div class="leftC">Marital Status </div>
				<div class="rightC">
					<strong>:<?php if(isset($user->partnerpreferences->maritalStatus))echo $maritialStatus[$user->partnerpreferences->maritalStatus];?> </strong> 
				</div>
			</li>
			<li>
				<div class="leftC">Have Children </div>
				<div class="rightC">
					<strong>: <?php if(isset($user->partnerpreferences->haveChildren))echo $user->partnerpreferences->haveChildren;?></strong>
				</div>
			</li>
			<li>
				<div class="leftC">Height</div>
				<div class="rightC">
					<strong>: 
					<?php if(isset($user->partnerpreferences->heightFrom))echo $heightArray[$user->partnerpreferences->heightFrom]; ?>  to <?php if(isset($user->partnerpreferences->heightTo))echo $heightArray[$user->partnerpreferences->heightTo]; ?> </strong>
				</div>
			</li>
			<li>
				<div class="leftC">Physical Status </div>
				<div class="rightC">
					<strong>:<?php if(isset($user->partnerpreferences->physicalStatus)){
						$phy = Utilities::physicalStatus();
						echo $phy[$user->partnerpreferences->physicalStatus];
					} ?> </strong> 
				</div>
			</li>
			<li>
				<div class="leftC">Religion</div>
				<div class="rightC">
					<strong>: <?php if(isset($user->partnerpreferences->religion)) {
					$religion = Religion::model()->findByPk($user->partnerpreferences->religion);
					echo $religion->name;
					}
						?></strong> 
				</div>
			</li>
			<li>
				<div class="leftC">Cast</div>
				<div class="rightC">
					<strong>: <?php if(isset($user->partnerpreferences->caste)) {
					$caste = Caste::model()->findByPk($user->partnerpreferences->caste);
					echo $caste->name;
					}
						?></strong>
				</div>
			</li>
			<li>
				<div class="leftC">Manglik</div>
				<div class="rightC">
					<strong>: <?php if(isset($user->partnerpreferences->manglik)){
							if($user->partnerpreferences->manglik == 1)
								echo "Yes";
							else
							 echo "No";						
			}?></strong>
				</div>
			</li>
			<li>
				<div class="leftC">Star</div>
				<div class="rightC">
					<strong>:<?php if(isset($user->partnerpreferences->star))
					
					echo Utilities::getValueForIds(new SignsMaster(),$user->partnerpreferences->star,'signId');
					?> </strong> 
				</div>
			</li>
			<li>
				<div class="leftC">Eating Habits</div>
				<div class="rightC">
					<strong>: <?php if(isset($user->partnerpreferences->eatingHabits))
					{
						echo Utilities::getArrayValues(Utilities::getFood(),$user->partnerpreferences->eatingHabits);
					}
					?> 	</strong>
				</div>
			</li>
			<li>
				<div class="leftC">Drinking Habits</div>
				<div class="rightC">
					<strong>: <?php if(isset($user->partnerpreferences->drinkingHabits))
					{
						echo Utilities::getArrayValues(Utilities::getFood(),$user->partnerpreferences->drinkingHabits);
					}
					?> </strong>
				</div>
			</li>
			<li>
				<div class="leftC">Smoking Habits</div>
				<div class="rightC">
					<strong>:  <?php if(isset($user->partnerpreferences->smokingHabits))
					{
						echo Utilities::getArrayValues(Utilities::getFood(),$user->partnerpreferences->smokingHabits);
					}
					?></strong> 
				</div>
			</li>
			<li>
				<div class="leftC">Mother Tongue</div>
				<div class="rightC">
					<strong>: <?php if(isset($user->partnerpreferences->languages))
					
					echo Utilities::getValueForIds(new Languages(),$user->partnerpreferences->languages,'languageId');
					?></strong>
				</div>
			</li>
			<li>
				<div class="leftC">Country Living In</div>
				<div class="rightC">
					<strong>: <?php if(isset($user->partnerpreferences->countries))
					
					echo Utilities::getValueForIds(new Country(),$user->partnerpreferences->countries,'countryId');
					?></strong> 
				</div>
			</li>
			<li>
				<div class="leftC">Citizenship</div>
				<div class="rightC">
					<strong>: <?php if(isset($user->partnerpreferences->citizenship))
					
					echo Utilities::getValueForIds(new Country(),$user->partnerpreferences->citizenship,'countryId');
					?></strong>
				</div>
			</li>
			<li>
				<div class="leftC">Residing State In India </div>
				<div class="rightC">
					<strong>: <?php if(isset($user->partnerpreferences->states))
					
					echo Utilities::getValueForIds(new States(),$user->partnerpreferences->states,'stateId');
					?></strong>
				</div>
			</li>
			<li>
				<div class="leftC">District</div>
				<div class="rightC">
					<strong>: <?php if(isset($user->partnerpreferences->districts))
					
					echo Utilities::getValueForIds(new Districts(),$user->partnerpreferences->districts,'districtId');
					?></strong> 
				</div>
			</li>
			<!--  
			<li>
				<div class="leftC">Panchayath/Municipality/ <br />Corperation</div>
				<div class="rightC">
					<strong>: <?php if(isset($user->partnerpreferences->places))
					
					echo Utilities::getValueForIds(new Places(),$user->partnerpreferences->places,'placeId');
					?></strong> 
				</div>
			</li>
			 -->
			<li>
				<div class="leftC">Occupation</div>
				<div class="rightC">
					<strong>:<?php if(isset($user->partnerpreferences->occupation)) {
					$occu = OccupationMaster::model()->findByPk($user->partnerpreferences->occupation);
					echo $occu->name;
					}
						?> </strong> 
				</div>
			</li>
			<li>
				<div class="leftC">Annual Income</div>
				<div class="rightC">
					<strong>: <?php if(isset($user->partnerpreferences->annualIncome)) echo  $user->partnerpreferences->annualIncome;?></strong> 
				</div>
			</li>
			<li>
				<div class="leftC fWb">Partner Description :</div>
			</li>
			<li>
				<p class=" textAj">
				<?php if(isset($user->partnerpreferences->partnerDescription)) echo $user->partnerpreferences->partnerDescription?>
				</p>
			</li>
			<li class="mT8">
				<a href="/mypage/editpartner" class="type2">Edit</a>
			</li>
			<?php }?>
		</ul>
		
    </section>
      <?php $this->widget('application.widgets.menu.Rightmenu'); ?>
  