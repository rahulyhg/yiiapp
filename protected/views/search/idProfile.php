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
* @title idProfile.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>

            
            <!--head closing-->
            <!--main-content-->
            <div id="main-content">
            	<!--left-content-->
                <div id="content-left-4">
  <div class="div_ww">
<div class="list_div_1"><!--list_div_1-->



  <a href="#"><img src="images/model_men.jpg" border="0" class="model_img" /></a>
<div class="clear"></div>
<div class="no_box_2"><!--no_box-->
	
	<div class="mrgn_4_arrw"><a href="#"></a></div>
    
	<div class="left"><a href="#"><img src="images/mode_small.jpg" border="0" /></a><a href="#"><img src="images/mode_small.jpg" border="0" /></a><a href="#"><img src="images/mode_small.jpg" border="0" /></a></div>
    
<div class="mrgn_4_arrw_11"><a href="#"></a></div>
</div><!--no_box_2-->
</div>



<div style="float:left; width:70%;">

<div class="sub_nav">
<p class="log_color_in_sub"><span class="m_left_15"><a href="contact-details.html" target="_blank">Contact</a>&nbsp;&nbsp;&nbsp;<a href="document.html" target="_blank">Document</a>&nbsp;&nbsp;&nbsp;<a href="reference-contact-details.html" target="_blank">Reference</a>&nbsp;&nbsp;&nbsp;<a href="family.html" target="_blank">Family album</a> &nbsp;&nbsp;&nbsp;<a href="album.html">Personnel album</a>&nbsp;&nbsp;&nbsp;<a href="astro-details.html" target="_blank">Astro Details</a></span></p>
</div>


<p class="log_color_blue_add">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">&nbsp;Short List</a>   |  <a href="#">Block</a>   |  <a href="#">Forwards</a>  |  <a href="#">Print</a></p>


<div class="list_div_2sm"><!--list_div_2sm-->
<p class="txt_rg_raj"><strong>Name</strong><br /> 		
Religion / Cast <br />		
Age<br /> 		
Height <br />		
Place<br /> 		
Education<br /> 		
Occupation<br /> 	

Activity status	<br />	
&nbsp;	
</p>

</div>

<div class="list_div_3"><!--list_div_3-->
<?php $heightArray = Utilities::getHeights()?>
<p class="txt_rg_raj">
:    <span class="txt_level"><strong><?php echo $model->name?>(<?php echo $model->marryId ?>)</strong></span><br />
		<?php if(!empty($model->userpersonaldetails->religion)){?>
:    <span class="txt_level"><?php echo $model->userpersonaldetails->religion->name ?>/ <?php echo $model->userpersonaldetails->caste->name ?></span><br />
 			<?php }?>
:    <span class="txt_level"><?php echo Utilities::getAgeFromDateofBirth($model->dob)?> Years </span><br />
:    <span class="txt_level"><?php echo $heightArray[$model->physicaldetails->heightId]; ?></span><br />
:    <span class="txt_level"><?php echo $model->userpersonaldetails->place->name ?>, <?php echo $model->userpersonaldetails->state->name ?>, <?php echo $model->userpersonaldetails->country->name ?></span><br />
:	<span class="txt_level"><?php echo $model->educations->education->name ?></span><br />
:    <span class="txt_level"><?php echo $model->educations->occupation->name ?></span><br />
  
:   <span class="txt_level">2 days beefore</span><br />
&nbsp;
</p>
</div>


<div class="right_mgntp-sub">
<a class="exp-sub-less" href="#">Express Interest</a>

  <a class="exp-sub-add-less" href="#">Bookmark</a>

     <a class="exp-sub-send-less" href="#">Send Message</a>

</div>
</div>

















</div>




<div class="clear"></div>
<div class="line_new_r"></div>
<div class="space-15px"><p>&nbsp;</p></div>

<p class="log_color_sub"><a href="#">Personal</a>  |  <a href="#">Professional</a>   |  <a href="#">Family</a>   |  <a href="#">Partner Preference</a>   |  <a href="#">Hobbies & Interests</a></p>

<div class="clear"></div>
<div class="space-15px"><p>&nbsp;</p></div>

<div class="clear"></div>

<div class="clear"></div>



  <p class="txt_rg"><span class="text_pink-hd">Personal information</span><br /> in my own words</p>
                <p class="space-15px">&nbsp;</p>
                
                
<p class="txt_rg"><?php echo $model->familyprofiles->userDesc  ?></p>
<br />
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
:<span class="txt_level">  <?php echo Utilities::getAgeFromDateofBirth($model->dob)?> Years</span><br />	
:<span class="txt_level">   <?php echo $heightArray[$model->physicaldetails->heightId]; ?></span> <br />	
:<span class="txt_level">   Language </span><br />	
:<span class="txt_level">   <?php $marry = Utilities::getMaritalStatus(); echo $marry[$model->userpersonaldetails->maritalStatus]?></span>
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
:<span class="txt_level">    <?php echo $bodyType[$model->physicaldetails->bodyType]?>/<?php echo $bodyType[$model->physicaldetails->complexion]?></span><br />	
:<span class="txt_level">   <?php echo $physicalStatus[$model->physicaldetails->physicalStatus]?></span><br />	
:<span class="txt_level">   <?php echo $model->physicaldetails->weight?> Kgs</span> <br />	
:<span class="txt_level">   Not Specified</span><br />	
</p>
</div>

</div><!--table_box_one-->

<div class="clear"></div>
<div class="line_new_edit"></div>

<div class="clear"></div>
<div class="space-15px"><p>&nbsp;</p></div>


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
:<span class="txt_level">  <?php echo $model->userpersonaldetails->religion->name ?></span><br />	
:<span class="txt_level">  Muslim - Others / Not</span> <br />
<span class="txt_level">&nbsp;&nbsp;<?php echo $model->userpersonaldetails->caste->name ?></span><br />	
:<span class="txt_level">   Doesn't matter</span> <br />	
:<span class="txt_level">   Not Specified</span><br />	
</div>

</div><!--table_box-->

<div class="clear"></div>
<div class="line_new_edit"></div>

<div class="space-15px"><p>&nbsp;</p></div>

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
:<span class="txt_level"></span><?php echo $food[$model->habits->food]?><br />	
:<span class="txt_level">   <?php echo $smoke[$model->habits->smoking]?></span><br />	
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
:<span class="txt_level">   <?php echo $drink[$model->habits->drinking]?></span><br />	
</p>
</div>

</div><!--table_box_one-->

<div class="clear"></div>



<div class="clear"></div>

<div class="line_new_edit"></div>

<div class="space-15px"><p>&nbsp;</p></div>

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
:<span class="txt_level"> <?php echo $model->userpersonaldetails->country->name ?>  India</span><br />	
:<span class="txt_level"> <?php echo $model->userpersonaldetails->state->name ?> </span><br />	
:<span class="txt_level">  </span><br />	
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
:<span class="txt_level">   <?php echo $model->userpersonaldetails->place->name ?></span><br />	
:<span class="txt_level">   Citizen</span><br />	
</p>
</div>

</div><!--table_box_one-->
<div class="clear"></div>

<div class="line_new_edit"></div>

<div class="space-15px"><p>&nbsp;</p></div>

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
<?php $job = Utilities::getJob()?>
</div>
<div class="row_two">
<p class="txt_rg">
:<span class="txt_level">   <?php echo $model->educations->education->name ?></span><br />	
:<span class="txt_level">   <?php echo $model->educations->occupation->name ?></span><br />	
:<span class="txt_level">   completed MBA </span> <br />
:<span class="txt_level">   MBA / PGDM </span> <br />	
:<span class="txt_level">   <?php echo $job[$model->educations->employedIn]?></span> <br />
:<span class="txt_level">   <?php echo $model->educations->yearlyIncome?></span> <br />	
	
</p>
</div>

</div><!--table_box-->
<div class="clear"></div>

<div class="line_new_edit"></div>
<div class="right"><span class="txt_rg"><a href="#top">Top</a></span></div>
<div class="space-15px"><p>&nbsp;</p></div>
<div class="clear"></div>

 <p class="text_pink-hd">Family details</p>
                <p class="space-25px">&nbsp;</p>


<div class="clear"></div>

 <div class="table_box"><!--table_box-->
<div class="row_one">
<p class="txt_rg">Family Values<br />		
Family Type<br />			
Family Status<br />
Ancestral Origin<br /><br />			
Family album<br />		
</p>
<?php $familyValues = Utilities::getFamilyValues();$familyType = Utilities::getFamilyType();$familyStatus = Utilities::getFamilyStatus();?>
</div>
<div class="row_two">
<p class="txt_rg">
:<span class="txt_level">  <?php echo $familyValues[$model->familyprofiles->familyValues]?> </span><br />	
:<span class="txt_level"> <?php echo $familyType[$model->familyprofiles->familyType]?></span><br /> 	
:<span class="txt_level">   <?php echo $familyStatus[$model->familyprofiles->familyValues]?></span> <br />
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

<div class="space-15px"><p>&nbsp;</p></div>

<div class="clear"></div>


 <p class="text_pink-hd">About my family</p>
                <p class="space-25px">&nbsp;</p>

<p class="txt_rg"><?php echo $model->familyprofiles->familyDesc?>.</p>

<div class="clear"></div>

<div class="line_new_edit"></div>

<div class="space-15px"><p>&nbsp;</p></div>

<div class="clear"></div>

 <p class="text_pink-hd">My partner preference</p>
                <p class="space-25px">&nbsp;</p>

<div class="clear"></div>

<div class="table_box_large"><!--table_box-->
<div class="row_one">
<p class="txt_rg">Age<br />		
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
Education<br />	
Occupation<br />		
Annual Income<br />		
Country<br />		
Residing State<br />		
Citizenship<br />		
Residing City<br />		
</p>

</div>
<?php $partner = $model->partnerpreferences?>
<div class="row_three">
<p class="txt_rg">
:<span class="txt_level">   <?php echo $partner->ageFrom.' - '.$partner->ageTo.' Years'; ?></span><br />	
:<span class="txt_level">  <?php echo $heightArray[$partner->heightTo]; ?> / <?php echo $heightArray[$partner->heightFrom]; ?></span><br />	
:<span class="txt_level">   <?php echo $marry[$partner->maritalStatus];?></span> <br />
:<span class="txt_level">    <?php echo $physicalStatus[$partner->physicalStatus]?></span> <br />
:<span class="txt_level">   <?php echo Utilities::getValueForIds(new Languages(), $partner->languages, 'languageId')?></span> <br />
:<span class="txt_level">   <?php echo $partner->religionData->name?></span> <br />
:<span class="txt_level">   <?php echo $partner->casteData->name?></span> <br />
:<span class="txt_level">   <?php echo Utilities::getValueForIds(new Subcaste(), $partner->subcaste, 'subcasteId')?></span> <br />
:<span class="txt_level">   <?php echo Utilities::getArrayValues(Utilities::getFood(), $partner->eatingHabits)?></span> <br />
:<span class="txt_level">   <?php echo Utilities::getArrayValues(Utilities::getSmoke(), $partner->smokingHabits)?></span> <br />
:<span class="txt_level">   <?php echo Utilities::getArrayValues(Utilities::getDrink(), $partner->drinkingHabits)?></span> <br />
:<span class="txt_level">   Bachelors - Engineering / Computers, Medicine - General </span><br/> 
:<span class="txt_level">   <?php echo Utilities::getValueForIds(new OccupationMaster(), $partner->occupation, 'occupationId')?></span> <br />
:<span class="txt_level">   <?php echo $partner->annualIncome; ?></span> <br />
:<span class="txt_level">   <?php echo Utilities::getValueForIds(new Country(), $partner->countries, 'countryId')?></span> <br />
:<span class="txt_level">   <?php echo Utilities::getValueForIds(new States(), $partner->states, 'stateId')?></span> <br />
:<span class="txt_level">   <?php echo Utilities::getValueForIds(new Country(), $partner->citizenship, 'countryId')?></span> <br />
:<span class="txt_level">   <?php echo Utilities::getValueForIds(new Places(), $partner->places, 'placeId')?></span> <br />
</p>
</div>

</div><!--table_box-->

<div class="clear"></div>

<div class="line_new_edit"></div>

<div class="space-15px"><p>&nbsp;</p></div>

<div class="clear"></div>


 <p class="text_pink-hd">About my partner</p>
                <p class="space-25px">&nbsp;</p>


<div class="clear"></div>

<p class="txt_rg"><?php echo $partner->partnerDescription; ?></p>
<br />
<div class="clear"></div>



<div class="line"></div>

<div class="left"><p class="text_blue"><a href="#">Short List</a>   |  <a href="#">Block</a>   |  <a href="#">Forwards</a>  |  <a href="#">Print</a></p>
</div>

<div class="right_mgntp-sub">
<a class="exp-sub-less" href="#">Express Interest</a>

  <a class="exp-sub-add-less" href="#">Bookmark</a>

     <a class="exp-sub-send-less" href="#">Send Message</a>


</div>


 </div><!--left-content closing-->
                <!--left-content-->
                <div id="content-right_small">
               	  <div class="div_r_1_11"><!--div_r-->

<p class="text_20_gery">Subscribe Now!<br />
Only for</p>


<a href="#"><img src="images/img_200.jpg" class="left"  border="0" width="100%"/></a>

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

<p class="text_20_cntr">Payment Options</p>

<p class="text_banner">You have three payment options, 
Choose any one for you Only for</p>

<div class="center_icon" >
<img src="images/1_round.jpg" /></div>

<p class="text_20_cntr">Activation Coupon</p>

<p class="text_banner">You can subscribe through activation coupon which you can purchase from your nearest re-sellers. <span class="span_blue"> Click here</span> to find your nearest re-seller</p>


<div class="center_icon" >
<img src="images/2_round.jpg" /></div>

<p class="text_20_cntr">NetBanking</p>

<p class="text_banner">We are accepting major banks Net Transfer and Debit card transaction through Online. <span class="span_blue"> Click here</span> to find our banking partners</p>


<div class="center_icon" >
<img src="images/3_round.jpg" /></div>

<p class="text_20_cntr">Credit card and Paypal</p>

<p class="text_banner">We are accepting Visa, Master and Rupay cards and paypal.<span class="span_blue"> Click here</span> to go payment page.<br />
  <br />
</p>


<p class="text_20_blue">SUBSCRIBE NOW! </p>
</div>
                    
                    
                    
                    
                    
                
                </div>
                <!--right-content closing-->
            </div>
            <!--main-content closing-->
            
        </div>

    
   