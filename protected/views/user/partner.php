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
* @title partner.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>

            <!--main-content-->
            <div id="main-content">
            	<!--left-content-->
  <div id="content-left-4">
                	
  <form id="userPartner"  name="userPartner" method="post"  action="/user/partner">
                    
 <p class="text_pink-hd">Share your partner Preference with us</p>
 <div class="clear"></div>
 
   <p class="line"></p>
                    <p class="txt_rg">Please set your expectations on Partner Preference. The highlighted fields () form your Basic Partner Preference, based on which you will receive daily matches. Profiles that exactly match your Partner Preference will be tagged as "Preferred Match."</p>
                    <!--age-->
                    <p class="space-35px">&nbsp;</p>
                     <div class="list_class-5">
                    <p class="txt_bld">Preferred Age</p>
                    </div>
		<div class="list_class-6">
		
		<?php echo CHtml::dropDownList('ageFrom',null,Utilities::getAge(),array('class'=>'select_45')); ?>
       	                 <span class="txt_bldleft">&nbsp;&nbsp;To&nbsp;&nbsp;</span> 
        <?php echo CHtml::dropDownList('ageTo',null,Utilities::getAge(),array('class'=>'select_45')); ?>
        </div>
                    
                    <div class="clear"></div>
                      <div class="list_class-5">
                    <p class="txt_bld"><span class="txt_bld_new">Marital Status</span></p>
                    </div> 
        <div class="list_class-6">
                    		<span class="check_box"><INPUT type="checkbox" value="4" name="maritial[]">&nbsp;&nbsp;Any&nbsp;&nbsp;</span>
                            <span class="check_box"><INPUT type="checkbox" value="0" name="maritial[]">&nbsp;&nbsp;Unmarried&nbsp;&nbsp;</span>
                            <span class="check_box"><INPUT type="checkbox" value="1" name="maritial[]">&nbsp;&nbsp;Widow/Widower&nbsp;&nbsp;</span> 
                            <span class="check_box"><INPUT type="checkbox" value="2" name="maritial[]">&nbsp;&nbsp;Divorced&nbsp;&nbsp;</span> 
                            <span class="check_box"><INPUT type="checkbox" value="3" name="maritial[]">&nbsp;&nbsp;Awaiting divorce&nbsp;&nbsp;</span> 
        </div>     
                    
                                     <div class="clear"></div>
					<div class="list_class-5">
                   <p class="txt_bldl">Have Children
</p></div>
                   
        <div class="list_class-6">
                   	<p class="radio_110">
                    <input type="radio" name="child" value="0">&nbsp;&nbsp;Doesn't matter</p>
                    <p class="radio_145">
                    <input type="radio" name="child" value="1">&nbsp;&nbsp;Yes. living together</p>
                    <p class="radio_155">
                    <input type="radio" name="child" value="2">&nbsp;&nbsp;Yes. not living together</p>
                    <p class="radio_135">
                    <input type="radio" name="child" value="3">&nbsp;&nbsp;No</p>
        </div>

        <div class="clear"></div>
        <div class="list_class-5">
          <p class="txt_bld">Height</p>
        </div>

<div class="list_class-6">
  
  <?php echo CHtml::dropDownList('heightFrom',null,Utilities::getHeights(),array('class'=>'select_small')); ?>
  <span class="txt_bldleft">&nbsp;&nbsp;To&nbsp;&nbsp;</span>
  <?php echo CHtml::dropDownList('heightTo',null,Utilities::getHeights(),array('class'=>'select_small')); ?>
  
</div>
        <div class="clear"></div>
        <div class="list_class-5">
          <p class="txt_bldl">Physical Status</p>
        </div>

<div class="list_class-6">
                   	<p class="radio_110">
                    <input type="radio" name="status" value="0">&nbsp;&nbsp;Normal</p>
                   <p class="radio_145">
                    <input type="radio" name="status" value="1">&nbsp;&nbsp;Disabled</p>
                   <p class="radio_145">
                    <input type="radio" name="status" value="2">&nbsp;&nbsp;Doesn't matter</p>
        </div>
        <div class="clear"></div>
        <div class="list_class-5">
          <p class="txt_bld">Religion</p>
        </div>
<div class="list_class-6">
    <?php $records = Religion::model()->findAll("active = 1");
  
		$list = CHtml::listData($records, 'religionId', 'name');
		echo CHtml::dropDownList('religion',null,$list,array('empty' => 'Religion','class'=>'select_small')); ?>
	<span class="txt_bldleft">&nbsp;&nbsp;Caste&nbsp;&nbsp;</span>
  
  <?php $records = Caste::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'casteId', 'name');
		echo CHtml::dropDownList('caste',null,$list,array('empty' => 'Caste','class'=>'select_small')); ?>
</div> 
<!--add and remove-1-->
                    <p class="clear"></p>
                    <div class="list_class-5">
                      <p class="txt_bld">Sub Cast </p>
                    </div>
                    
                    	<div class="list_class-6">
                        <div>
                        <?php $records = Subcaste::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'subcasteId', 'name');
						    echo CHtml::dropDownList('subcaste',null,$list,array('class'=>'tab_200','multiple'=>'multiple')); ?>
                        </div>                        
        
                        
                        <div class="list_div_mdl">
                        					<p class="ad-rm">
                        					<a class="ad-rm" href="#" onclick="return add('subcaste','subcaste1')">Add</a>
                                           </p>
   											<p class="space-5px">&nbsp;</p>
                                     		<a class="ad-rm" href="#" onclick="return add('subcaste1','subcaste')">Remove</a>
						</div>
                        
                        <div>
                        <select class="tab_200" id="subcaste1" name="subcaste1[]" multiple="multiple">
                        </select>
                        </div>
                        </div>
                        
					<!--closing add and remove-1-->
        <div class="clear"></div>
        
            
            
           <div class="clear"></div>  
<div class="space"><br /></div>          		
   
 <div class="line"></div> 
 <div class="clear"></div> 
 <div class="space"><br /></div>   
              
              
        <div class="list_class-5">
          <p class="txt_bld">Sudha Jathakam</p>
        </div>
<div class="list_class-6">
                   	<p class="radio-2">
                    <input type="radio" name="jathakam" value="1">&nbsp;&nbsp;Yes</p>
                    <p class="radio-2">
                    <input type="radio" name="jathakam" value="0">
                    &nbsp;&nbsp;No</p>
                    <p class="radio-2">
                    <input type="radio" name="jathakam" value="2">&nbsp;&nbsp;Don't Know</p>
        </div>
        <div class="clear"></div>
        <div class="list_class-5">
          <p class="txt_bld">Chovva Dosham</p>
        </div>
<div class="list_class-6">
                   	<p class="radio-2">
                    <input type="radio" name="dhosham" value="1">&nbsp;&nbsp;Yes</p>
                    <p class="radio-2">
                    <input type="radio" name="dhosham" value="0">
                    &nbsp;&nbsp;No</p>
                    <p class="radio-2">
                    <input type="radio" name="dhosham" value="2">&nbsp;&nbsp;Don’t Know</p>
        </div>        


<!--add and remove-Star-->
                    <p class="clear"></p>
                    <div class="list_class-5">
                      <p class="txt_bld">Star </p>
                    </div>
                    
                    	<div class="list_class-6">
                        <div>
                        <?php $records = SignsMaster::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'signId', 'name');
						    echo CHtml::dropDownList('star',null,$list,array('class'=>'tab_200','multiple'=>'multiple')); ?>
                        </div>                        
        
                        
                        <div class="list_div_mdl">
                        					<p class="ad-rm">
                        					<a class="ad-rm" href="#" onclick="return add('star','star1')">Add</a>
                                           </p>
   											<p class="space-5px">&nbsp;</p>
                                     		<a class="ad-rm" href="#" onclick="return add('star1','star')">Remove</a>
						</div>
                        
                        <div>
                        <select class="tab_200" id="star1" name="star1[]" multiple="multiple">
                        </select>
                        </div>
                        </div>                        
					<!--closing add and remove-Star-->

                                  
                                  
                                  <div class="clear"></div>  
<div class="space"><br /></div>          		
   
 <div class="line"></div> 
 <div class="clear"></div> 
 <div class="space"><br /></div> 
 
 
 
		<div class="list_class-5">
                   <p class="txt_bld">Eating Habit
</p>
		</div>
<div class="list_class-6">
<div class="checkbox_130">
  <p class="radio-2">
    <input type="checkbox" name="eat[]" value="4"  />
    &nbsp;&nbsp;Doesn't matter</p></div>
    
    <div class="checkbox_125">
        <span class="radio-2">
        <input type="checkbox" name="eat[]" value="1" />
        &nbsp;&nbsp;Non Vegetarian</span>
        </div>
        <div class="checkbox_150">
        <span class="radio-2">
        <input type="checkbox" name="eat[]" value="2" />
        &nbsp;&nbsp;Eggetarian</span></div>
        <span class="radio-2">
        <input type="checkbox" name="eat[]" value="0" />
        &nbsp;&nbsp;Vegetarian</span></div>

        <div class="clear"></div>
        <div class="list_class-5">
          <p class="txt_bld">Drinking Habits</p>
        </div>

<div class="list_class-6">
<div class="checkbox_130">
  <p class="radio-2">
    <input type="checkbox" name="drink[]" value="4" />
    &nbsp;&nbsp;Doesn't matter </p></div>
    
    <div class="checkbox_125">
        <span class="radio-2">
        <input type="checkbox" name="drink[]" value="0" />
        &nbsp;&nbsp;Non drinker</span></div>
        <div class="checkbox_150">
        <span class="radio-2">
        <input type="checkbox" name="drink[]" value="1" />
        &nbsp;&nbsp;Light/Social drinker</span></div>
        
        <div class="checkbox_125"><span class="radio-2">
        <input type="checkbox" name="drink[]" value="2" />
        &nbsp;&nbsp;Regular drinker</span></div></div>
        
        <div class="clear"></div>
        <div class="list_class-5">
          <p class="txt_bld">Smoking Habits</p>
        </div>

<div class="list_class-6">

<div class="checkbox_130">
  <p class="radio-2">
    <input type="checkbox" name="smoke[]" value="4" />
    &nbsp;&nbsp;Doesn't matter </p></div>
    <div class="checkbox_125">
        <span class="radio-2">
        <input type="checkbox" name="smoke[]" value="0" />
        &nbsp;&nbsp;Non smoker</span></div>
        <div class="checkbox_150"><span class="radio-2">
        <input type="checkbox" name="smoke[]" value="1" />
        &nbsp;&nbsp;Light/Social&nbsp;smoker</span></div>
        <div class="checkbox_129"><span class="radio-2">
        <input type="checkbox" name="smoke[]" value="2" />
        &nbsp;&nbsp;Regular smoker</span></div></div>



<div class="clear"></div>  
<div class="space"><br /></div>          		
   
 <div class="line"></div> 
 <div class="clear"></div> 
 <div class="space"><br /></div> 
 
 					<p class="clear"></p>
                    <div class="list_class-5">
                      <p class="txt_bld">Country </p>
                    </div>
                    
                    <div class="list_class-6">
                        <div>
                        <?php $records = Country::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'countryId', 'name');
						    echo CHtml::dropDownList('country',null,$list,array('class'=>'tab_200','multiple'=>'multiple')); ?>
                        </div>                        
        
                        
                        <div class="list_div_mdl">
                        					<p class="ad-rm">
                        					<a class="ad-rm" href="#" onclick="return add('country','country1')">Add</a>
                                           </p>
   											<p class="space-5px">&nbsp;</p>
                                     		<a class="ad-rm" href="#" onclick="return add('country1','country')">Remove</a>
						</div>
                        
                        <div>
                        <select class="tab_200" id="country1" name="country1[]" multiple="multiple">
                        </select>
                        </div>
                        </div>                        
					<!--closing add and remove-Country Living in-->
                    
                    
                    
                    
                    
                      <p class="clear"></p>
                    <div class="list_class-5">
                      <p class="txt_bld">Residing State</p>
        </div>
                    
<div class="list_class-6">
                        <div>
                        <?php $records = States::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'stateId', 'name');
						    echo CHtml::dropDownList('state',null,$list,array('class'=>'tab_200','multiple'=>'multiple')); ?>
                        </div>                        
        
                        
                        <div class="list_div_mdl">
                        					<p class="ad-rm">
                        					<a class="ad-rm" href="#" onclick="return add('state','state1')">Add</a>
                                           </p>
   											<p class="space-5px">&nbsp;</p>
                                     		<a class="ad-rm" href="#" onclick="return add('state1','state')">Remove</a>
						</div>
                        
                        <div>
                        <select class="tab_200" id="state1" name="state1[]" multiple="multiple">
                        </select>
                        </div>
                        </div>
                        
					<!--closing add and remove-state Living in-->


<!--add and remove-Risiding-->
                    <p class="clear"></p>
                    <div class="list_class-5">
                      <p class="txt_bld">District</p>
        </div>
                    
<div class="list_class-6">
                        <div>
                        <?php $records = Districts::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'districtId', 'name');
						    echo CHtml::dropDownList('district',null,$list,array('class'=>'tab_200','multiple'=>'multiple')); ?>
                        </div>                        
        
                        
                        <div class="list_div_mdl">
                        					<p class="ad-rm">
                        					<a class="ad-rm" href="#" onclick="return add('district','district1')">Add</a>
                                           </p>
   											<p class="space-5px">&nbsp;</p>
                                     		<a class="ad-rm" href="#" onclick="return add('district1','district')">Remove</a>
						</div>
                        
                        <div>
                        <select class="tab_200" id="district1" name="district1[]" multiple="multiple">
                        </select>
                        </div>
                        </div>
                        
					<!--closing add and remove-Risiding-->


<!--add and remove-District-->
                    <p class="clear"></p>
                    <div class="list_class-5">
                      <p class="txt_bld">Panchayath/Municipality<br />
  Corperation</p></p>
        </div>
                    <div class="list_class-6">
                        <div>
                        <?php $records = Places::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'placeId', 'name');
						    echo CHtml::dropDownList('place',null,$list,array('class'=>'tab_200','multiple'=>'multiple')); ?>
                        </div>                        
        
                        
                        <div class="list_div_mdl">
                        					<p class="ad-rm">
                        					<a class="ad-rm" href="#" onclick="return add('place','place1')">Add</a>
                                           </p>
   											<p class="space-5px">&nbsp;</p>
                                     		<a class="ad-rm" href="#" onclick="return add('place1','place')">Remove</a>
						</div>
                        
                        <div>
                        <select class="tab_200" id="place1" name="place1[]" multiple="multiple">
                        </select>
                        </div>
                        </div>
                        
					<!--closing add and remove-District-->


<!--add and remove-Panchayath-->
                    <p class="clear"></p>
                    
   
                    <div class="list_class-5">
                      <p class="txt_bld">Mother Tongue</p>
        </div>
                    
                    	<div class="list_class-6">
                        <div>
                        <?php $records = Languages::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'languageId', 'name');
						    echo CHtml::dropDownList('language',null,$list,array('class'=>'tab_200','multiple'=>'multiple')); ?>
                        </div>                        
        
                        
                        <div class="list_div_mdl">
                        					<p class="ad-rm">
                        					<a class="ad-rm" href="#" onclick="return add('language','language1')">Add</a>
                                           </p>
   											<p class="space-5px">&nbsp;</p>
                                     		<a class="ad-rm" href="#" onclick="return add('language1','language')">Remove</a>
						</div>
                        
                        <div>
                        <select class="tab_200" id="language1" name="language1[]" multiple="multiple">
                        </select>
                        </div>
                        </div>
                        
					<!--closing add and remove-Mother Tongue-->


<!--add and remove-Country Living in-->
                  
<div class="clear"></div>  
<div class="space"><br /></div>          		
   
 <div class="line"></div> 
 <div class="clear"></div> 
 <div class="space"><br /></div> 
 
  
                    
                    <div class="list_class-5">
                      <p class="txt_bld">Citizenship</p>
        </div>
                    
                    <div class="list_class-6">
                        <div>
                        <?php $records = Country::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'countryId', 'name');
						    echo CHtml::dropDownList('citizen',null,$list,array('class'=>'tab_200','multiple'=>'multiple')); ?>
                        </div>                        
        
                        
                        <div class="list_div_mdl">
                        					<p class="ad-rm">
                        					<a class="ad-rm" href="#" onclick="return add('citizen','citizen1')">Add</a>
                                           </p>
   											<p class="space-5px">&nbsp;</p>
                                     		<a class="ad-rm" href="#" onclick="return add('citizen1','citizen')">Remove</a>
						</div>
                        
                        <div>
                        <select class="tab_200" id="citizen1" name="citizen1[]" multiple="multiple">
                        </select>
                        </div>
                        </div>
                        
					<!--closing add and remove-Panchayath-->


<!--add and remove-Citizenship-->
                    <p class="clear"></p>
                    <div class="list_class-5">
                      <p class="txt_bld">Occupation</p>
        </div>
                    
                    <div class="list_class-6">
                        <div>
                        <?php $records = OccupationMaster::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'occupationId', 'name');
						    echo CHtml::dropDownList('occupation',null,$list,array('class'=>'tab_200','multiple'=>'multiple')); ?>
                        </div>                        
        
                        
                        <div class="list_div_mdl">
                        					<p class="ad-rm">
                        					<a class="ad-rm" href="#" onclick="return add('occupation','occupation1')">Add</a>
                                           </p>
   											<p class="space-5px">&nbsp;</p>
                                     		<a class="ad-rm" href="#" onclick="return add('occupation1','occupation')">Remove</a>
						</div>
                        
                        <div>
                        <select class="tab_200" id="occupation1" name="occupation1[]" multiple="multiple">
                        </select>
                        </div>
                        </div>
                        
					<!--closing add and remove-Citizenship-->


<!--add and remove-occupation-->
                    <p class="clear"></p>
                    <!--closing add and remove-occupation-->
        <div class="clear"></div>
                     <!--closing personal details-section-4-->	
        <!--personal details-section-5-->
        <div class="clear"></div>
                     <div class="list_class-5">
                            <p class="txt_bld">Annual Income</p>
                	</div> 
                    <div class="list_class-6">
                  <input type="text" class="small_form_1" id="income" name="income" placeholder="Use Rupees" />   
              </div> 
              <div class="clear"></div>
              
        
        <div class="list_class-5">
          <p class="txt_bldl"> Partner Description</p></div>
                <div class="clear"></div>
             
    <div class="list_class-6">           
  <textarea name="partnerDesc" rows="2" cols="20" class="tab_300c">
	</textarea>   
	</div>



<div class="clear"></div>

<div class="space-25px"><p>&nbsp;</p></div>

<div class="clear"></div>
<div class="right-50">

						<input type="reset" value="Reset" name="yt1" class="reset_sub"> 
						<input type="submit" value="Submit" name="yt0" class="reset_sub">
                   


</div>

<div class="clear"></div>
<div class="space-25px"><p>&nbsp;</p></div>

</form>

        <!--personal details closing-->
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

<p class="text_20_cntr"><a href="#">Payment Options</a></p>

<p class="text_banner">You have three payment options, 
Choose any one for you Only for</p>

<div class="center_icon" >
<img src="images/1_round.jpg" /></div>

<p class="text_20_cntr"><a href="#">Activation Coupon</a></p>

<p class="text_banner">You can subscribe through activation coupon which you can purchase from your nearest re-sellers. <span class="span_blue"> Click here</span> to find your nearest re-seller</p>


<div class="center_icon" >
<img src="images/2_round.jpg" /></div>

<p class="text_20_cntr"><a href="#">NetBanking</a></p>

<p class="text_banner">We are accepting major banks Net Transfer and Debit card transaction through Online. <span class="span_blue"> Click here</span> to find our banking partners</p>


<div class="center_icon" >
<img src="images/3_round.jpg" /></div>

<p class="text_20_cntr"><a href="#">Credit card and Paypal</a></p>

<p class="text_banner">We are accepting Visa, Master and Rupay cards and paypal.<span class="span_blue"> Click here</span> to go payment page.<br />
  <br />
</p>


<p class="text_20_blue">SUBSCRIBE NOW!</p>
</div>
                    
                    
                    
                    
                    
                
              </div>
                <!--right-content closing-->
            </div>
            <!--main-content closing-->
        
        