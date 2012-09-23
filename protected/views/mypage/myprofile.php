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
* @title myprofile.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>

            
            <!--main-content-->
            <div id="main-content">
            	<!--left-content-->

  <div id="content-left-4">
  <div class="line-1pix"></div>

<div class="list_div_1"><!--list_div_1-->
<a href="album.html"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/model_men.jpg" class="model_img_new" /></a>
<div class="clear"></div>
<div class="no_box"><!--no_box-->
	
    
    <?php $model = Yii::app()->session->get('user');?>
    
    
    
                      
                      	<div class="pages-2">
                        <div class="arrow">
                        
                        
                          <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image41','','<?php echo Yii::app()->params['mediaUrl']; ?>/arrow_small_left_red.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/arrow_small_left.jpg" name="Image41" width="7" height="13" border="0" id="Image41" /></a></div>
                   <div class="arrow_text">    <span class="txt_bld-12"><a href="#">1</a>
                   <a href="#">2</a>
                   <a href="#">3</a>
                   <a href="#">4</a>
                   <a href="#">5</a>
                   <a href="#">6</a></span>&nbsp; </div>
                   <div class="arrow">
                   
                     <a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image42','','<?php echo Yii::app()->params['mediaUrl']; ?>/arrow-right-red.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/arrow_small_right.jpg" name="Image42" width="7" height="13" border="0" id="Image42" /></a></div>
        </div>
                        
                        
                        
                        
</div><!--no_box-->

</div>

<div class="list_div_2sm"><!--list_div_2sm-->
<p class="txt_rg_raj"><strong>Name</strong><br /> 		
Religion / Cast <br />		
Age<br /> 		
Height <br />		
Place<br /> 		
Education<br /> 		
Occupation<br /> <br /> 	
<strong>Acconut details</strong> <br />	
Activity status		
</p>
</div>

<div class="list_div_3_sub"><!--list_div_3-->
<?php $heightArray = Utilities::getHeights()?>
:     <span class="txt_level"><strong><?php echo $model->name?>(<?php echo $model->marryId ?>)</strong></span><br />
<p class="txt_rg_raj">
:    <span class="txt_level"><?php if(isset($model->userpersonaldetails->religion))echo $model->userpersonaldetails->religion->name ?>/ <?php if(isset($model->userpersonaldetails->caste))echo $model->userpersonaldetails->caste->name ?></span><br />
:    <span class="txt_level"><?php echo Utilities::getAgeFromDateofBirth($model->dob)?> Years </span><br />
:    <span class="txt_level"><?php if(isset($model->physicaldetails->heightId))echo $heightArray[$model->physicaldetails->heightId]; ?></span><br />
:    <span class="txt_level"><?php if(isset($model->userpersonaldetails->place))echo $model->userpersonaldetails->place->name ?>, <?php if(isset($model->userpersonaldetails->state))echo $model->userpersonaldetails->state->name ?>, <?php if(isset($model->userpersonaldetails->country))echo $model->userpersonaldetails->country->name ?></span><br />
:    <span class="txt_level"><?php if(isset($model->educations->education))echo $model->educations->education->name ?></span><br />
:    <span class="txt_level"><?php if(isset($model->educations->occupation))echo $model->educations->occupation->name ?></span><br /> 
:   <span class="txt_level"><?php echo Utilities::getUserDisplay($model->userType)?></span><br />
:   <span class="txt_level">2 days beefore</span><br />
</p>
</div>

<div class="clear"></div>
<div class="line_new_r"></div>



<div class="link_div_l"> <a href="#"> Contact</a> <span class="txt_another"><a href="#">(Edit)</a></span> </div>
<div class="link_div_l"> <a href="#"> Document</a> <span class="txt_another"><a href="#">(Edit)</a></span> </div>
<div class="link_div_l">  <a href="#">Reference</a> <span class="txt_another"><a href="#">(Edit)</a></span> </div>
<div class="link_div_l">  <a href="#">Family album</a> <span class="txt_another"><a href="#">(Edit)</a></span> </div>
<div class="link_div_l">  <a href="#">Personnel album</a> <span class="txt_another"><a href="#">(Edit)</a></span> </div>
<div class="link_div_r">   <a href="#">Astro Details</a> <span class="txt_another_rgt"><a href="#">(Edit)</a></span></div>



<div class="clear"></div>          

<div class="line_new_edit"></div>
<div class="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image31','','<?php echo Yii::app()->params['mediaUrl']; ?>/edit.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/edit_ash.jpg" name="Image31" width="53" height="22" border="0" id="Image31" /></a></div>
<div class="clear"></div>

<div class="clear"></div>


  <p class="txt_rg"><span class="text_pink-hd">Personal information</span><br /> in my own words</p>
                <p class="space-15px">&nbsp;</p>

<p class="txt_rg"><?php if(isset($model->familyprofiles->userDesc))echo $model->familyprofiles->userDesc  ?></p>
<br />
<div class="clear"></div>
<div class="line_new_edit"></div>
<div class="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image32','','<?php echo Yii::app()->params['mediaUrl']; ?>/edit.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/edit_ash.jpg" name="Image32" width="53" height="22" border="0" id="Image32" /></a></div>
<div class="clear"></div>


  <p class="text_pink-hd">Basic details</p>
                <p class="space-25px">&nbsp;</p>


<div class="clear"></div>

<div class="table_box"><!--table_box-->
<div class="row_one">
<p class="txt_rg">Name <br />		
Age<br />			
Height<br />			
Language<br />			
Marital Status		
</p>

</div>
<div class="row_two">
<p class="txt_rg">
:<span class="txt_level"><?php echo $model->name ?></span><br />		
:<span class="txt_level">  <?php if(isset($model->dob))echo Utilities::getAgeFromDateofBirth($model->dob)?> Years</span><br />	
:<span class="txt_level">   <?php if(isset($model->physicaldetails->heightId))echo $heightArray[$model->physicaldetails->heightId]; ?></span> <br />	
:<span class="txt_level"> <?php if(isset($model->motherTounge)) echo Utilities::getLanguageForId($model->motherTounge)?>   Malayalam</span><br />	
:<span class="txt_level">   <?php $marry = Utilities::getMaritalStatus(); if(isset($model->userpersonaldetails->maritalStatus))echo $marry[$model->userpersonaldetails->maritalStatus]?></span>
</p>
</div>

</div><!--table_box-->

<div class="table_box_one"><!--table_box_one-->
<div class="row_one">
<p class="txt_rg">Body Type / Complexion <br />		
Physical Status<br />			
Weight<br />			
Blood Groupe		
</p>

</div>
<div class="row_two">
<p class="txt_rg">
<?php $bodyType = Utilities::getBodyType(); $bodyColor = Utilities::getBodyColor();$physicalStatus = Utilities::physicalStatus()?>
:<span class="txt_level">    <?php if(isset($model->physicaldetails->bodyType))echo $bodyType[$model->physicaldetails->bodyType]?>/<?php if(isset($model->physicaldetails->complexion))echo $bodyType[$model->physicaldetails->complexion]?></span><br />	
:<span class="txt_level">   <?php if(isset($model->physicaldetails->physicalStatus))echo $physicalStatus[$model->physicaldetails->physicalStatus]?></span><br />	
:<span class="txt_level">   <?php if(isset($model->physicaldetails->weight))echo $model->physicaldetails->weight?> Kgs</span> <br />		
:<span class="txt_level">   Not Specified</span><br />	
</p>
</div>

</div><!--table_box_one-->

<div class="clear"></div>
<div class="line_new_edit"></div>
<div class="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image33','','<?php echo Yii::app()->params['mediaUrl']; ?>/edit.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/edit_ash.jpg" name="Image33" width="53" height="22" border="0" id="Image33" /></a></div>
<div class="clear"></div>


 <p class="text_pink-hd">Religious information</p>
                <p class="space-25px">&nbsp;</p>



<div class="clear"></div>

<div class="table_box"><!--table_box-->
<div class="row_one">
<p class="txt_rg">Religion<br />		
Physical Status<br /><br />			
Caste / Sub Caste<br />			
Horoscope Match<br />			
</p>

</div>
<div class="row_two">
<p class="txt_rg">
:<span class="txt_level">  <?php if(isset($model->userpersonaldetails->religion))echo $model->userpersonaldetails->religion->name ?></span><br />		
:<span class="txt_level">  Muslim - Others / Not</span> <br />
<span class="txt_level">&nbsp;&nbsp;<?php if(isset($model->userpersonaldetails->caste))echo $model->userpersonaldetails->caste->name ?></span><br />		
:<span class="txt_level">   Doesn't matter</span> <br />	
:<span class="txt_level">   Not Specified</span><br />	
</div>

</div><!--table_box-->

<div class="clear"></div>
<div class="line_new_edit"></div>
<div class="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image34','','<?php echo Yii::app()->params['mediaUrl']; ?>/edit.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/edit_ash.jpg" name="Image34" width="53" height="22" border="0" id="Image34" /></a></div>
<div class="clear"></div>




 <p class="text_pink-hd">lifestyle</p>
                <p class="space-25px">&nbsp;</p>

<div class="clear"></div>

<div class="table_box"><!--table_box-->
<div class="row_one">
<p class="txt_rg">Eating Habits<br />		
Smoking habits<br />			
Caste / Sub Caste<br />			
</p>
<?php $food = Utilities::getFood();
$smoke = Utilities::getSmoke();
$drink= Utilities::getDrink();

?>
</div>
<div class="row_two">
<p class="txt_rg">
:<span class="txt_level"></span><?php if(isset($model->habits->food))echo $food[$model->habits->food]?><br />	
:<span class="txt_level">   <?php if(isset($model->habits->smoking))echo $smoke[$model->habits->smoking]?></span>
:<span class="txt_level">   Doesn't matter</span> <br />	
</p>
</div>

</div>
<div class="table_box_one"><!--table_box_one-->
<div class="row_one">
<p class="txt_rg">Drinking habits<br />		
</p>

</div>

<div class="row_two">
<p class="txt_rg">
:<span class="txt_level">   <?php if(isset($model->habits->drinking))echo $drink[$model->habits->drinking]?></span><br />		
</p>
</div>

</div><!--table_box_one-->

<div class="clear"></div>
<div class="line_new_edit"></div>
<div class="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image35','','<?php echo Yii::app()->params['mediaUrl']; ?>/edit.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/edit_ash.jpg" name="Image35" width="53" height="22" border="0" id="Image35" /></a></div>
<div class="clear"></div>

 <p class="text_pink-hd">Locations</p>
                <p class="space-25px">&nbsp;</p>



<div class="clear"></div>

<div class="table_box"><!--table_box-->
<div class="row_one">
<p class="txt_rg">Country <br />		
State<br />			
Citizenship<br />			
</p>

</div>
<div class="row_two">
<p class="txt_rg">
:<span class="txt_level"> <?php if(isset($model->userpersonaldetails->country))echo $model->userpersonaldetails->country->name ?> </span><br />	
:<span class="txt_level"> <?php if(isset($model->userpersonaldetails->state))echo $model->userpersonaldetails->state->name ?> </span><br />	:<span class="txt_level"> India</span><br />	
</p>
</div>

</div><!--table_box-->


<div class="table_box_one"><!--table_box_one-->


<div class="row_one">
<p class="txt_rg">City <br />		
Resident Status<br />			
</p>

</div>

<div class="row_two">
<p class="txt_rg">
:<span class="txt_level">   <?php if(isset($model->userpersonaldetails->place))echo $model->userpersonaldetails->place->name ?></span><br />	
:<span class="txt_level">   Citizen</span><br />	
</p>
</div>

</div><!--table_box_one-->
<div class="clear"></div>

<div class="line_new_edit"></div>

<div class="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image36','','<?php echo Yii::app()->params['mediaUrl']; ?>/edit.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/edit_ash.jpg" name="Image36" width="53" height="22" border="0" id="Image36" /></a></div>
<div class="clear"></div>
 <p class="text_pink-hd">Proffessional information</p>
                <p class="space-25px">&nbsp;</p>

<div class="clear"></div>

<div class="table_box"><!--table_box-->
<div class="row_one">
<p class="txt_rg">Education Category<br />		
Occupation<br />			
Education in Detail<br />
Occupation in Detail<br />			
Employed in<br />
Annual Income		
			
</p>

</div>
<div class="row_two">
<p class="txt_rg">
:<span class="txt_level">   <?php if(isset($model->educations->education))echo $model->educations->education->name ?></span><br />	
:<span class="txt_level">   <?php if(isset($model->educations->occupation))echo $model->educations->occupation->name ?></span><br />	
:<span class="txt_level">   completed MBA </span> <br />
:<span class="txt_level">   MBA / PGDM </span> <br />	
:<span class="txt_level">   <?php if(isset($model->educations->employedIn))echo $job[$model->educations->employedIn]?></span> <br />
:<span class="txt_level">   <?php if(isset($model->educations->yearlyIncome))echo $model->educations->yearlyIncome?></span> <br />	
	
</p>
</div>

</div><!--table_box-->
<div class="clear"></div>

<div class="line_new_edit"></div>

<div class="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image37','','<?php echo Yii::app()->params['mediaUrl']; ?>/edit.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/edit_ash.jpg" name="Image37" width="53" height="22" border="0" id="Image37" /></a></div>
<div class="clear"></div>

 <p class="text_pink-hd">Family details</p>
                <p class="space-25px">&nbsp;</p>


<div class="clear"></div>

 <div class="table_box_350"><!--table_box-->
<div class="row_one">
<p class="txt_rg">Family Values<br />		
Family Type<br />			
Family Status<br />
Ancestral Origin<br /><br />			
Family album<br />		
</p>
<?php $familyValues = Utilities::getFamilyValues();$familyType = Utilities::getFamilyType();$familyStatus = Utilities::getFamilyStatus();?>
</div>
<div class="row_two_lr">
<p class="txt_rg">
:<span class="txt_level">  <?php if(isset($model->familyprofiles->familyValues))echo $familyValues[$model->familyprofiles->familyValues]?> </span><br />	
:<span class="txt_level"> <?php if(isset($model->familyprofiles->familyType))echo $familyType[$model->familyprofiles->familyType]?></span><br /> 	
:<span class="txt_level">   <?php if(isset($model->familyprofiles->familyValues))echo $familyStatus[$model->familyprofiles->familyValues]?></span> <br />
:<span class="txt_level"> MBA / PGDM </span> <br /><br />
:<span class="txt_level">View my album <a href="family.html" target="_blank">(5 Photos)</a></span> <br />		
</p>
</div>

</div><!--table_box-->

<div class="table_box_one"><!--table_box_one-->


<div class="row_one">
<p class="txt_rg">Father's Occupation <br />		
Physical Status<br />			
Weight<br />			
Blood Groupe</p>

</div>
<div class="row_two">
<p class="txt_rg">
:<span class="txt_level"></span> business<br />	
:<span class="txt_level">   nil </span><br />	
:<span class="txt_level"> 1   </span> <br />	
:<span class="txt_level">   2/2 married</span><br />	
</p>
</div>

</div><!--table_box_one-->

<div class="clear"></div>

<div class="line_new_edit"></div>

<div class="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image38','','<?php echo Yii::app()->params['mediaUrl']; ?>/edit.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/edit_ash.jpg" name="Image38" width="53" height="22" border="0" id="Image38" /></a></div>
<div class="clear"></div>

 <p class="text_pink-hd">About my family</p>
                <p class="space-25px">&nbsp;</p>

<p class="txt_rg"><?php if(isset($model->familyprofiles->familyDesc))echo $model->familyprofiles->familyDesc?>.</p>

<div class="clear"></div>

<div class="line_new_edit"></div>

<div class="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image39','','<?php echo Yii::app()->params['mediaUrl']; ?>/edit.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/edit_ash.jpg" name="Image39" width="53" height="22" border="0" id="Image39" /></a></div>
<div class="clear"></div>


 <p class="text_pink-hd">My partner preference</p>
                <p class="space-25px">&nbsp;</p>


<div class="clear"></div>

<div class="table_box_large"><!--table_box-->
<div class="row_one">
<p class="txt_rg">Groom's Age<br />		
Height<br />			
Marital status<br />
Physical Status<br />		
Mother Tongue<br />
Religion<br />		
Caste<br />		
Sub Caste<br />		
Eating Habits<br />		
Smoking Habits<br />		
Drinking Habits<br />		
Education<br />	<br />		
Occupation<br />		
Annual Income<br />		
Country<br />		
Residing State<br />		
Citizenship<br />		
Residing City<br />		
</p>

</div>
<div class="row_three">
<p class="txt_rg">
:<span class="txt_level">   <?php if(isset($partner->ageFrom))echo $partner->ageFrom; echo ' - ';if(isset($partner->ageTo))echo $partner->ageTo.' Years'; ?></span><br />	
:<span class="txt_level">  <?php if(isset($partner->heightTo))echo $heightArray[$partner->heightTo]; ?> / <?php if(isset($partner->heightFrom))echo $heightArray[$partner->heightFrom]; ?></span><br />	
:<span class="txt_level">   <?php if(isset($partner->maritalStatus))echo $marry[$partner->maritalStatus];?></span> <br />
:<span class="txt_level">    <?php if(isset($partner->physicalStatus))echo $physicalStatus[$partner->physicalStatus]?></span> <br />
:<span class="txt_level">   <?php if(isset($partner->languages))echo Utilities::getValueForIds(new Languages(), $partner->languages, 'languageId')?></span> <br />
:<span class="txt_level">   <?php if(isset($partner->religionData->name))echo $partner->religionData->name?></span> <br />
:<span class="txt_level">   <?php if(isset($partner->casteData->name))echo $partner->casteData->name?></span> <br />
:<span class="txt_level">   <?php if(isset($partner->subcaste))echo Utilities::getValueForIds(new Subcaste(), $partner->subcaste, 'subcasteId')?></span> <br />
:<span class="txt_level">   <?php if(isset($partner->eatingHabits))echo Utilities::getArrayValues(Utilities::getFood(), $partner->eatingHabits)?></span> <br />
:<span class="txt_level">   <?php if(isset($partner->smokingHabits))echo Utilities::getArrayValues(Utilities::getSmoke(), $partner->smokingHabits)?></span> <br />
:<span class="txt_level">   <?php if(isset($partner->drinkingHabits))echo Utilities::getArrayValues(Utilities::getDrink(), $partner->drinkingHabits)?></span> <br />
:<span class="txt_level">   Bachelors - Engineering / Computers, Medicine - General </span><br/> 
:<span class="txt_level">   <?php if(isset($partner->occupation))echo Utilities::getValueForIds(new OccupationMaster(), $partner->occupation, 'occupationId')?></span> <br />
:<span class="txt_level">   <?php if(isset($partner->annualIncome))echo $partner->annualIncome; ?></span> <br />
:<span class="txt_level">   <?php if(isset($partner->countries)) echo Utilities::getValueForIds(new Country(), $partner->countries, 'countryId')?></span> <br />
:<span class="txt_level">   <?php if(isset($partner->states))echo Utilities::getValueForIds(new States(), $partner->states, 'stateId')?></span> <br />
:<span class="txt_level">   <?php if(isset($partner->citizenship))echo Utilities::getValueForIds(new Country(), $partner->citizenship, 'countryId')?></span> <br />
:<span class="txt_level">   <?php if(isset($partner->places))echo Utilities::getValueForIds(new Places(), $partner->places, 'placeId')?></span> <br />
</p>
</div>

</div><!--table_box-->

<div class="clear"></div>

<div class="line_new_edit"></div>

<div class="right"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image40','','<?php echo Yii::app()->params['mediaUrl']; ?>/edit.jpg',1)"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/edit_ash.jpg" name="Image40" width="53" height="22" border="0" id="Image40" /></a></div>
<div class="clear"></div>

 <p class="text_pink-hd">About my partner</p>
                <p class="space-25px">&nbsp;</p>


<div class="clear"></div>

<p class="txt_rg"><?php if(isset($partner->partnerDescription))echo $partner->partnerDescription; ?></p>
<br />
<div class="clear"></div>
 </div>
                <!--left-content closing-->
                <!--left-content-->
                <div id="content-right_sub">
               	  <div class="div_r_1"><!--div_r-->

<p class="text_20_gery">Subscribe Now!<br />
Only for</p>

<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/img_200.jpg" class="left"  border="0"/>

<div class="clear"></div>

<div class="line"></div>

<p class="text_20_cntr">Benefits For Subsciribed Users</p>

<p class="text_18_cntr">Contact members directly<br />
Send personalised messaages<br />
View Album, Documents, and contact<br /> 
details<br />
View horoscope of members<br />
Express Unlimited interest<br />
Plus other exclusive paid membership <br />
benefits</p>



<div class="line"></div>

<p class="text_20_cntr"><a href="#">Payment Options</a></p>

<p class="text_banner">You have three payment options, 
Choose any one for you Only for</p>

<div class="center_icon" >
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/1_round.jpg" /></div>

<p class="text_20_cntr"><a href="#">Activation Coupon</a></p>

<p class="text_banner">You can subscribe through activation coupon which you can purchase from your nearest re-sellers. <span class="span_blue"> Click here</span> to find your nearest re-seller</p>


<div class="center_icon" >
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/2_round.jpg" /></div>

<p class="text_20_cntr"><a href="#">NetBanking</a></p>

<p class="text_banner">We are accepting major banks Net Transfer and Debit card transaction through Online. <span class="span_blue"> Click here</span> to find our banking partners</p>


<div class="center_icon" >
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/3_round.jpg" /></div>

<p class="text_20_cntr"><a href="#">Credit card and Paypal</a></p>

<p class="text_banner">We are accepting Visa, Master and Rupay cards and paypal.<span class="span_blue"> Click here</span> to go payment page.<br />
  <br />
</p>


<p class="text_20_blue"><a href="payment_benefits.html">SUBSCRIBE NOW!</a>
</p>
</div>
                    
                    
                    
                    
                    
                
                </div>
                <!--right-content closing-->
            </div>
            <!--main-content closing-->
    