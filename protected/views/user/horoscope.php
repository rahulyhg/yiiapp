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
* @title horoscope.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>

            <!--main-content-->
            <div id="main-content">
            	<!--left-content-->
  <div id="content-left-1">
<form id="userHoro" enctype="multipart/form-data" name="userHoro" method="post"  action="/user/horoupload">
         
 <p><span  class="text_pink-hd">My astro details</span><br />
 <p>Its make your profile more visible</p>
 
 <div class="clear"></div>
 <div class="line"></div>
                     
<p class="txt_rg">Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone!</p>
                    
        <p class="space-10px">&nbsp;</p>
                   
        <div class="list_classx">
<p class="txt_bldn">Date of birth</p></div>
                    <div class="list_class-2x">
                     
 		<?php echo CHtml::dropDownList('date',Utilities::currentDay(),Utilities::getRegDays(),array('class'=>'sel_date_memo_l')); ?>
		<?php echo CHtml::dropDownList('month',Utilities::currentMonth(),Utilities::getRegMonths(),array('class'=>'sel_month_memo_l')); ?>		    
    	<?php echo CHtml::dropDownList('year',Utilities::currentYear(),  Utilities::getRegYears(),array('class'=>'sel_year_memo_small')); ?>
 					</div>
	<div class="clear"></div>	
					
 		<div class="list_classx">
			<p class="txt_bldn">Country of birth</p></div>
                    <div class="list_class-2x">
                    <?php $records = Country::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'countryId', 'name');
		echo CHtml::dropDownList('country',null,$list,array('empty' => 'Country','class'=>'select_small_average')); ?>
					</div>

	<div class="clear"></div>
     <div class="list_classx">
<p class="txt_bldn"> State of Birth</p></div>
                    <div class="list_class-2x">
                    <?php $records = States::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'stateId', 'name');
		echo CHtml::dropDownList('state',null,$list,array('empty' => 'State','class'=>'select_small_average')); ?>
					</div>

	<div class="clear"></div>
     <div class="list_classx">
<p class="txt_bldn">City of Birth</p></div>
                    <div class="list_class-2x">
                    <input type="text" name="city" id="city" class="addres_form" placeholder="Place of Birth" />
					</div>

	<div class="clear"></div>
     <div class="list_classx">
<p class="txt_bldn">Time Correction</p>
     </div>
                    <div class="list_class-2x">
                    <input type="text" name="time" id="time" class="addres_form" placeholder="Time" />
					</div>

	<div class="clear"></div>
     <div class="list_classx">
<p class="txt_bldn">Your Sign</p></div>
                    <div class="list_class-2x">
                  <?php $records = SignsMaster::model()->findAll("active = 1");
					$list = CHtml::listData($records, 'signId', 'name');
					echo CHtml::dropDownList('sign',null,$list,array('empty' => 'Sign','class'=>'select_small_average')); ?>
					</div>
	<div class="clear"></div>
     <div class="list_classx">
<p class="txt_bldn">Your Astrodate</p>
     </div>
                    <div class="list_class-2x">
                   	<?php $records = AstrodateMaster::model()->findAll("active = 1");
					$list = CHtml::listData($records, 'astrodateId', 'name');
					echo CHtml::dropDownList('astrodate',null,$list,array('empty' => 'Astrodate','class'=>'select_small_average')); ?>					</div>
	<div class="clear"></div>
	<div class="clear"></div>	
    <div class="space-15px"><p>&nbsp;</p></div>
 <div class="list_classx">
<p class="txt_bldn">Upload  Grahanila</p></div>
				    <div class="list_class-2x">
<p class="small_p">Select an image file on your computer</p>
	<?php echo CHtml::activeFileField($model, 'horoscopeFile'); ?>
   <div class="clear"></div>
  <p class="space-15px">&nbsp;</p>
 </div>
 <div class="clear"></div>	
<p class="space-15px">&nbsp;</p>
 <div class="list_classx">
<p class="txt_bld">Chovva Dosham</p></div>
	<div class="list_class-6x">
                    <p class="radio_sub">
          <input name="chova" type="radio" value="1">&nbsp;&nbsp;Yes</p>
                    <p class="radio_sub">
                    <input type="radio" name="chova" value="0">&nbsp;&nbsp;No</p>
					
					                  <p class="radio_sub">
                    <input type="radio" name="chova" value="2">&nbsp;&nbsp;Do not Know</p>
 </div>
 <div class="clear"></div>	
					
 <div class="list_classx">
<p class="txt_bld">Sudha Jathakam</p></div>
                   
	<div class="list_class-6x">
                    <p class="radio_sub">
                    <input name="sudha" type="radio" value="1">&nbsp;&nbsp;Yes</p>
                    <p class="radio_sub">
                    <input type="radio" name="sudha" value="0">&nbsp;&nbsp;No</p>
					<p class="radio_sub">
					<input name="sudha" type="radio" value="2">&nbsp;&nbsp;Do not Know</p>
<div class="clear"></div>
 </div>
              <div class="clear"></div>     
 <div class="space-15px"><p>&nbsp;</p></div>     
    <div class="line"></div>
<p class="space-15px">&nbsp;</p>
<div class="clear"></div> 
    <div class="space-15px"><p>&nbsp;</p></div>
              <div class="line"></div>
              <p class="space-10px">&nbsp;</p>
              
              
              
              <!--personal details-->
              
 <p class="text_pink-hd">Reffernce contact Details</p>
 <div class="clear"></div>
                  <!--personal details-section-1-->	
				 <p class="txt_rg">Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone!</p>
	<div class="clear"></div>
   <div class="space-35px"><p>&nbsp;</p></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bldnew0">Referance 1</p>
  </div><!--/list_class-new_div_1--> 
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="relation0" id="relation0" class="addres_form" placeholder="Relation" />
  </div><!--/list_class-new_div_2--> 
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="name0" id="name0" class="addres_form" placeholder="Name" />
  </div><!--/list_class-new_div_2--> 
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="house0" id="house0" class="addres_form" placeholder="House Name / No." />
  </div><!--/list_class-new_div_2--> 
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="place0" id="place0" class="addres_form" placeholder="Place" />
  </div><!--/list_class-new_div_2--> 
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
   <input type="text" name="post0" id="post0" class="addres_form" placeholder="Post office" />
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="city0" id="city0" class="addres_form" placeholder="City" />
  </div><!--/list_class-new_div_2--> 
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
   <input type="text" name="district0" id="district0" class="addres_form" placeholder="District" />
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="state0" id="state0" class="addres_form" placeholder="State" />
  </div><!--/list_class-new_div_2--> 
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
   <input type="text" name="country0" id="country0" class="addres_form" placeholder="Country" />
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="pin0" id="pin0" class="addres_form" placeholder="Pin Code" />
  </div><!--/list_class-new_div_2--> 
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="email0" id="email0" class="addres_form" placeholder="Email" />
  </div><!--/list_class-new_div_2--> 
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld">Occupation</p>
  </div><!--/list_class-new_div_1--> 
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="occupation0" id="occupation0" class="addres_form" placeholder="Occupation" />
  </div><!--/list_class-new_div_2--> 
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld">Time to call &nbsp;&nbsp;&nbsp;Between</p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
    <?php echo CHtml::dropDownList('timeFrom0',null,Utilities::getTime(),array('class'=>'sel_date_memo_2')); ?>
	<?php echo CHtml::dropDownList('fromA0',null,Utilities::getMeridiem(),array('class'=>'select_45_memo_gray')); ?>	
     <?php echo CHtml::dropDownList('timeTo0',null,Utilities::getTime(),array('class'=>'sel_date_memo_2')); ?>
     <?php echo CHtml::dropDownList('toA0',null,Utilities::getMeridiem(),array('class'=>'select_45_memo_gray')); ?>
    </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
	<p class="clear">&nbsp;</p>
                    <p class="space-15px">&nbsp;</p>      
              		<div class="line"></div>
              		<p class="space-10px">&nbsp;</p>
                    
                    
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld">Referance 2</p>
  </div><!--/list_class-new_div_1--> 
  
<div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="relation1" id="relation1" class="addres_form" placeholder="Relation" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="name1" id="name1" class="addres_form" placeholder="Name" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="house1" id="house1" class="addres_form" placeholder="House Name / No." />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="place1" id="place1" class="addres_form" placeholder="Place" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
   <input type="text" name="post1" id="post1" class="addres_form" placeholder="Post office" />
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="city1" id="city1" class="addres_form" placeholder="City" />
  </div><!--/list_class-new_div_2--> 
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
   <input type="text" name="district1" id="district1" class="addres_form" placeholder="District" />
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="state1" id="state1" class="addres_form" placeholder="State" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
   <input type="text" name="country1" id="country1" class="addres_form" placeholder="Country" />
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="pin1" id="pin1" class="addres_form" placeholder="Pin Code" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="email1" id="email1" class="addres_form" placeholder="Email" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld">Occupation</p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="occupation1" id="occupation1" class="addres_form" placeholder="Occupation" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
<div class="clear"></div> 
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld">Time to call &nbsp;&nbsp;&nbsp;Between</p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
    <?php echo CHtml::dropDownList('timeFrom1',null,Utilities::getTime(),array('class'=>'sel_date_memo_2')); ?>
	<?php echo CHtml::dropDownList('fromA1',null,Utilities::getMeridiem(),array('class'=>'select_45_memo_gray')); ?>	
     <?php echo CHtml::dropDownList('timeTo1',null,Utilities::getTime(),array('class'=>'sel_date_memo_2')); ?>
     <?php echo CHtml::dropDownList('toA1',null,Utilities::getMeridiem(),array('class'=>'select_45_memo_gray')); ?>
    </div><!--/list_class-new_div_2--> 
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  </div><!--/list_class-new_div_3-->                 
	<p class="clear">&nbsp;</p>
                    <p class="space-15px">&nbsp;</p>      
              		<div class="line"></div>
              		<p class="space-10px">&nbsp;</p>
<div class="clear"></div>
                   <!--closing personal contact details-section-2-->
                  <!--personal contact details-section-3--> 
                    <div class="clear"></div>
        <div class="clear"></div>
                  <!--closing personal contact details-section-3-->
 <div class="list_classx">
<p class="txt_bld">&nbsp; </p></div>
                   		<input type="reset" value="Reset" name="yt1" class="reset_sub"> 
                   		<input type="submit" value="Submit" name="yt0" class="reset_sub">
                   
				   
  <div class="clear"></div>	      
<div class="space-15px"><p>&nbsp;</p></div>     

 </form>       
        

              </div>
                <!--left-content closing-->
                <!--left-content-->
                <div id="content-right_sub">
                     <div class="div_r_1"><!--div_r-->

<p class="text_20_gery">Subscribe Now!<br />
Only for</p>
<div style="float:left; width:100%;">
<a href="#"><img src="images/img_200.jpg" class="left" style="width:100%;"  border="0"/></a>
</div>
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

<p class="text_20_cntr"><a href="#">NetBanking</a></p>

<p class="text_banner">We are accepting major banks Net Transfer and Debit card transaction through Online. <span class="span_blue"> Click here</span> to find our banking partners</p>


<div class="center_icon" >
<img src="images/3_round.jpg" /></div>

<p class="text_20_cntr">Credit card and Paypal</p>

<p class="text_banner">We are accepting Visa, Master and Rupay cards and paypal.<span class="span_blue"> Click here</span> to go payment page.<br />
  <br />
</p>


<p class="text_20_blue">SUBSCRIBE NOW! </p>
</div>
                <!--right-content closing-->
            </div>
            <!--main-content closing-->
        </div>