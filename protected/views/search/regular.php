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
* @title regular.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>
<div id="main-content">
            	<!--left-content-->
  
		  <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
  
<div id="content-left">
<div class="line_sm"></div>
 <p class="text_pink-hd">Quick Search</p>
                <p class="space-25px">&nbsp;</p>


 <div class="list_div_780"><!--list_div_780-->


<form id="quickSearch"  name="quickSearch" method="post"  action="/search/quick">
<p class="radio-70">
<input type="radio" value="M" name="gender">&nbsp;&nbsp;Male</p>
<p class="radio-70">
<input type="radio" value="F" name="gender">&nbsp;&nbsp;Female</p>

<p class="left"> &nbsp;&nbsp;Age&nbsp;&nbsp;</p>
<?php echo CHtml::dropDownList('ageFrom',null,Utilities::getAge(),array('class'=>'select_45')); ?>
  
 <p class="left">&nbsp;&nbsp;To&nbsp;&nbsp;&nbsp;</p>
 <?php echo CHtml::dropDownList('ageTo',null,Utilities::getAge(),array('class'=>'select_45')); ?>
  
 
<p class="mgn_10_newb">Religion </p>
<?php $records = Religion::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'religionId', 'name');
		echo CHtml::dropDownList('religion',null,$list,array('empty' => 'Religion','class'=>'select_120')); ?>
 
<p class="mgn_10_newb">Caste</p>
<?php $records = Caste::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'casteId', 'name');
		echo CHtml::dropDownList('caste',null,$list,array('empty' => 'Caste','class'=>'select_120')); ?>
 
                          <a href="javascript:quickSearch.submit();" class="srch-sub">Search</a>

</form>


<div class="clear"></div>




 </div><!--/list_div_780-->
<div class="clear"></div>
<div class="line"></div>
 <p class="text_pink-hd">Regular Search</p>
                <p class="space-25px">&nbsp;</p>


<div class="list_div_780-02"><!--list_div_780-->

<p class="txt_rg">Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone! Happy Valentine's Day everyone! To show our love, we are.</p>
</div><!--/list_div_780-->

<a href="/search/regular" class="regular">Regular Search</a>
 <a href="/search/advance" class="regular">Advanced Search</a>

 <a href="/search/keyword" class="regular">Key Word Search</a>
  <a href="/search/byid" class="regular"> Search by ID</a>
  
  <div class="clear"></div>    

      
   <div class="line"></div>
	<?php 
	if(isset($error))
	echo $error;
	?>        

<form id="regularSearch"  name="regularSearch" method="post"  action="/search/regular">
                    <div class="list_class-5">
                      <p class="txt_bld">Gender</p>
                    </div>
                    <div class="list_class-6">
                   	 	   	<p class="radio_sub">
                     <input type="radio" value="M" name="gender">
                    &nbsp;&nbsp;Male</p>
                    <p class="radio-2">
                    <input type="radio" value="F" name="gender">
                    &nbsp;&nbsp;Female</p>
        </div>
        
        <div class="clear"></div>
                    
                    <div class="list_class-5">
                      <p class="txt_bld">Age</p>
                    </div>
                    
<div class="list_class-6">
<?php echo CHtml::dropDownList('ageFrom',null,Utilities::getAge(),array('class'=>'select_45')); ?>
                       <p class="left">To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<?php echo CHtml::dropDownList('ageTo',null,Utilities::getAge(),array('class'=>'select_45')); ?>
                    
      </div>
                    
                    <div class="list_class-5">
                      <p class="txt_bld">Height</p>
        </div>
                    
           
		   
		             <div class="list_class-6">
  <div class="list_class-textfield-smallb">
  <?php echo CHtml::dropDownList('heightFrom',null,Utilities::getHeights(),array('class'=>'select_small')); ?>
  
  </div>
  <p class="left">To&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
          <div class="list_class-textfield-small">
<?php echo CHtml::dropDownList('heightTo',null,Utilities::getHeights(),array('class'=>'select_small')); ?>
          </div>
</div>



<div class="list_class-5">
                      <p class="txt_bld">Marital Status</p>
      </div>
<div class="list_class-6">
                     	
             <span class="radio-2-new">
<input type="checkbox" value="0" name="status[]">
&nbsp;&nbsp;Unmarried</span>
  <span class="radio-2-newb">
        <input type="checkbox" value="1" name="status[]">
        &nbsp;&nbsp;&nbsp;Widower</span>
        <span class="radio-2-newb">
        &nbsp;&nbsp;
        <input type="checkbox" value="2" name="status[]">
        &nbsp;&nbsp;Divorced</span>
        <span class="radio-2">
       <input type="checkbox" value="3" name="status[]">
        &nbsp;&nbsp;Awaiting Divorce</span>           
                        
                        
      </div>
        <div class="clear"></div>

<div class="list_class-5">
                      <p class="txt_bld">Religion
</p>
      </div>        
<div class="list_class-6">
  <div class="list_class-textfield-small">
  <?php $records = Religion::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'religionId', 'name');
		echo CHtml::dropDownList('religion',null,$list,array('empty' => 'Religion','class'=>'select_small')); ?>
  </div>
  </div>
        <div class="clear"></div>
        <div class="clear"></div>
        <p class="clear"></p>
        <div class="list_class-5">
                      <p class="txt_bld">Mother Toung
 </p>
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
        
        
                    <p class="clear"></p>
                    <div class="list_class-5">
                      <p class="txt_bld">Caste
 </p>
                    </div>
                    
		<div class="list_class-6">
                        <div>
                        <?php $records = Caste::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'casteId', 'name');
						    echo CHtml::dropDownList('caste',null,$list,array('class'=>'tab_200','multiple'=>'multiple')); ?>
                        </div>                        
        
                        
                        <div class="list_div_mdl">
                        					<p class="ad-rm">
                        					<a class="ad-rm" href="#" onclick="return add('caste','caste1')">Add</a>
                                           </p>
   											<p class="space-5px">&nbsp;</p>
                                     		<a class="ad-rm" href="#" onclick="return add('caste1','caste')">Remove</a>
						</div>
                        
                        <div>
                        <select class="tab_200" id="caste1" name="caste1[]" multiple="multiple">
                        </select>
                        </div>
                        </div>
        
  <p class="clear"></p>
  
  
  
    <div class="list_class-5">
                      <p class="txt_bld">Country</p>
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
                    <p class="clear"></p>
                    


  <div class="list_class-5">
                      <p class="txt_bld">Education</p>
      </div>
			<div class="list_class-6">
                        <div>
                        <?php $records = EducationMaster::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'educationId', 'name');
						    echo CHtml::dropDownList('education',null,$list,array('class'=>'tab_200','multiple'=>'multiple')); ?>
                        </div>                        
        
                        
                        <div class="list_div_mdl">
                        					<p class="ad-rm">
                        					<a class="ad-rm" href="#" onclick="return add('education','education1')">Add</a>
                                           </p>
   											<p class="space-5px">&nbsp;</p>
                                     		<a class="ad-rm" href="#" onclick="return add('education1','education')">Remove</a>
						</div>
                        
                        <div>
                        <select class="tab_200" id="education1" name="education1[]" multiple="multiple">
                        </select>
                        </div>
                        </div>        <p class="clear"></p>

           
                    <p class="clear"></p>
        <div class="list_class-5">
                      <p class="txt_bld">Show profile

</p>
        </div>
 
<div class="list_class-6">
<span class="radio-2-newc">
    <input type="checkbox" value="P" name="profile[]">
    &nbsp;&nbsp;Only With Photo</span>
  <span class="radio-2">
        <input type="checkbox" value="h" name="profile[]">
        &nbsp;&nbsp;Only With horoscope </span></div> 
 
                    <p class="clear"></p>
                   <!--  <div class="list_class-5">
                      <p class="txt_bld">Don't show

</p>
                    </div>
 
<div class="list_class-6"><span class="radio-2-newc">
<input type="checkbox" value="ignore" name="show[]">
&nbsp; Ignored Profiles </span><span class="radio-2">
       <input type="checkbox" value="contact" name="show[]">
        &nbsp;&nbsp;Profiles already contacted</span>
                     <p class="clear"></p>
       
       <span class="radio-2-newc">
<input type="checkbox" value="view" name="show[]">
&nbsp;&nbsp;Viewed Profiles</span><span class="radio-2">
        <input type="checkbox" value="shortlist" name="show[]">
        &nbsp;&nbsp;Shortlisted Profiles</span> 
        
        
        
        </div> 
  -->
 
                    <p class="clear"></p>
<div class="list_class-6">

						<a href="javascript:regularSearch.submit();" class="srch-sub-bottom">Search</a>	
                         <a href="#" id="searchButton" class="srch-sub-save">Save Search</a>
      
</div>
        
       </form> 
        
        
         
 
</div>
<!--/closing-rightside-div-->
 
<div class="clear"></div>
<div class="space-25px"><p>&nbsp;</p></div>
<!--right-content closing-->
      </div>
      
 <script type="text/javascript">
$(document).ready(function() {

	$('#searchButton').click(function() {	
	$('<input>').attr({
	    type: 'hidden',
	    id: 'search',
	    name: 'search',
	    value: 'save'
	}).appendTo('#regularSearch');
	  $('#regularSearch').submit();
	});
});


</script>      
      