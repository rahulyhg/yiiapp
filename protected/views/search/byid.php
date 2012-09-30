<?php
/*
*
* $Id$
--------------------------------------------------------------------------------------------------------------------------
* Information contained in this file is the intellectual property of MarryDoor
* Copyright © 2012 MarryDoor. All Rights Reserved.
* ---------------------------------------------------------------------------------------------------------------------------
*
* @author  Ageesh K Gopinath
* @title byid.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>

            
           
            <!--main-content-->
            <div id="main-content">
            	<!--left-content-->
  
 		  <?php $this->widget('application.widgets.menu.Leftmenu'); ?>   
 
  <!--center profile details closing-->
  
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

<p class="right_text"><a href="/search/byid">View Profile by ID</a><bR />
<a href="/search/advance">More Search Options</a></p>



 </div><!--/list_div_780-->
<div class="clear"></div>
<div class="line"></div>
 <p class="text_pink-hd">Search By ID</p>
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

                <p class="space-25px">&nbsp;</p>


                    <p class="clear"></p>
                   
 
  <p class="clear"></p>
 <div class="list_div_780-02"><!--list_div_780-->

<p>Enter the Matrimony ID of the member whose profile you would like to see.</p>
</div><!--/list_div_780-->
   
   <div class="list_class-5">
  
   <p class="txt_bld">Searcy by ID</p>
   </div>   
<div class="list_class-6">
<?php if(isset($model))
{
	echo $model;
}

?>
<form id="idSearch"  name="idSearch" method="get"  action="/search/byid">
<input type="text" name="id" id="id" class="addres_form-new_l"  />
                   <a class="view-button" href="javascript:idSearch.submit();">View Profile</a>
                   <a class="view-reset" href="javascript:idSearch.reset();">Reset</a>

</form>

</div>
 
              <p class="clear"></p>
              
              
<div class="space-15px"><br /></div>  
                  
 <div class="list_div_780-02"><!--list_div_780-->

</div><!--/list_div_780-->

                   
        
        
         
 
</div>
<!--/closing-rightside-div-->
 
<div class="clear"></div>
<!--right-content closing-->
          </div>
            <!--main-content closing-->
            
