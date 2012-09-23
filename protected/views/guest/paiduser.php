<?php
/*
*
* $Id$
--------------------------------------------------------------------------------------------------------------------------
* Information contained in this file is the intellectual property of Ladbrokes Plc
* Copyright � 2012 MarryDorr. All Rights Reserved.
* ---------------------------------------------------------------------------------------------------------------------------
*
* @author  Ageesh K Gopinath
* @title paiduser.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>

    	<!--wrapper-->
    	<div id="wrapper">
        	<!--head-->
        	<div id="head-my">
           <a href="home-viewed-by-guest.html"> <img src="<?php echo Yii::app()->params['mediaUrl']; ?>/logo.jpg" class="logo" border="0" /></a>
           
            
            <div id="mypage-login_box">
            
            <div id="mypage-search-2" class="txt_bld">Welcome Guest!  </div>
            </div>
            <p class="clear"></p>
            <p class="space-25px">&nbsp;</p>
            <!--navigation_container--><!--/navigation_container-->
			<p class="clear"></p><p class="space-15px">&nbsp;</p>
            
              <div class="navigation_container_small">
		<div class="nav_bloc"><!--nav_bloc-->
		
		<div class="nav_links"><a href="08--search.html">search</a></div>
		<div class="nav_links"><a href="01-home-viewed-by-guest.html">payment options</a></div>
		<div class="nav_links_last"><a href="10 my contact.html">contact us</a></div>
	</div><!--nav_bloc-->
</div><!--/navigation_container-->


            <!--/navigation_regional--><!--/navigation_regional-->
            <p class="clear"></p>
            <p class="space-15px">&nbsp;</p>
        	</div>
            <!--head closing-->
            <!--main-content-->
          <div id="main-content"><!--memo-box-one-->










<div class="div_ss_rr">
<div class="div_ww"><!--memo-box-one-->
<div class="left2">

 <p class="text_pink-hd">Paid membership</p>
 
 </div>


<div class="clear"></div>
	<div class="line_sm"></div>	
</div>
				

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-register-form',
	'action' => Yii::app()->createUrl('user/register'),
 	'focus'=>array($model,'name'),
	'enableAjaxValidation'=>false,
)); ?>					
                    
<div class="div_ww">

<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->
<?php echo $form->labelEx($model,'name',array('class'=>'txt_rg_index_left')); ?>
</div><!--/memo-sub_left_mgn-->
	<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->
			
<?php echo $form->textField($model,'name',array('class' =>'gray_form_1')); ?>			 

 </div><!--/memo-sub_right_mgn-->

</div>



		<p class="space-0px">&nbsp;</p>

				

<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

	<?php echo $form->labelEx($model,'date',array('class'=>'txt_rg_index_left')); ?>
	</div><!--/memo-sub_left_mgn-->

			<div class="memo-sub_right_mgn_3"><!--memo-sub_right_mgn-->
        
 <?php echo CHtml::dropDownList('date',Utilities::currentDay(),Utilities::getRegDays(),array('class'=>'gray_date_memo_1')); ?>
		<?php echo CHtml::dropDownList('month',Utilities::currentMonth(),Utilities::getRegMonths(),array('class'=>'gray_month_memo_medium')); ?>		    
    	<?php echo CHtml::dropDownList('year',Utilities::currentYear(),  Utilities::getRegYears(),array('class'=>'gray_year_memo_1')); ?>
		<?php echo $form->error($model,'date'); ?>
					</div><!--/memo-sub_right_mgn-->



<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

		<?php echo $form->labelEx($model,'gender',array('class'=>'txt_rg_index_left')); ?>
				  </div><!--/memo-sub_left_mgn-->

						<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->
<?php echo CHtml::dropDownList('gender','Female',array('F'=>'Female','M'=>'Male'),array('class'=>'gray_month_memo')); ?>
							</div><!--/memo-sub_right_mgn--></div>
                            
                            
<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

		<?php echo $form->labelEx($model,'religion',array('class'=>'txt_rg_index_left')); ?>
			</div><!--/memo-sub_left_mgn-->

					<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->
 <?php $records = Religion::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'religionId', 'name');
		echo CHtml::dropDownList('religion',null,$list,array('empty' => 'Religion','class'=>'gray_month_memo')); ?> 



						</div><!--/memo-sub_right_mgn-->

</div>
</div>



		<p class="space-0px">&nbsp;</p>

					
                    
<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->
<?php echo $form->labelEx($model,'caste',array('class'=>'txt_rg_index_left')); ?>

	</div><!--/memo-sub_left_mgn-->

			<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->
			 <?php $records = Caste::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'casteId', 'name');
		echo CHtml::dropDownList('caste',null,$list,array('empty' => 'Caste','class'=>'gray_month_memo')); ?>
			</div><!--/memo-sub_right_mgn--></div>

		<p class="space-0px">&nbsp;</p>

				

<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

<?php echo $form->labelEx($model,'country',array('class'=>'txt_rg_index_left')); ?>
	</div><!--/memo-sub_left_mgn-->

			<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->

 <?php $records = Country::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'countryId', 'name');
		echo CHtml::dropDownList('country',null,$list,array('empty' => 'Country','class'=>'gray_month_memo')); ?>
 
			</div><!--/memo-sub_right_mgn-->

</div>


<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

<?php echo $form->labelEx($model,'state',array('class'=>'txt_rg_index_left')); ?>
					</div><!--/memo-sub_left_mgn-->

						<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->
<?php $records = States::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'stateId', 'name');
		echo CHtml::dropDownList('state',null,$list,array('empty' => 'State','class'=>'gray_month_memo')); ?>
									</div><!--/memo-sub_right_mgn--></div>
                            
                            
                            
                            
  <div class="div_ww">                         
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

	<?php echo $form->labelEx($model,'motherTounge',array('class'=>'txt_rg_index_left')); ?>
	</div><!--/memo-sub_left_mgn-->

		<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->

 <?php $records = Languages::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'languageId', 'name');
		echo CHtml::dropDownList('motherTounge',null,$list,array('empty' => 'Language','class'=>'gray_month_memo')); ?> 
		</div><!--/memo-sub_right_mgn-->

</div>


<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

		<?php echo $form->labelEx($model,'mobileNo',array('class'=>'txt_rg_index_left')); ?>
			</div><!--/memo-sub_left_mgn-->
            
            
	<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->
<?php echo $form->textField($model,'mobileNo',array('class'=>'gray_form_1')); ?>
 


		</div><!--/memo-sub_right_mgn--></div>





<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

	<?php echo $form->labelEx($model,'landNo',array('class'=>'txt_rg_index_left')); ?>
	</div><!--/memo-sub_left_mgn-->

			<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->

<?php echo $form->textField($model,'landNo',array('class'=>'gray_form_1')); ?>
			</div><!--/memo-sub_right_mgn--></div>

				<p class="space-0px">&nbsp;</p>

					
                    
<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->
<?php echo $form->labelEx($model,'emailId',array('class'=>'txt_rg_index_left')); ?>

	</div><!--/memo-sub_left_mgn-->

		<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->
			<?php echo $form->textField($model,'emailId',array('class'=>'index_form_1')); ?>  

		</div><!--/memo-sub_right_mgn--></div>


		<p class="space-0px">&nbsp;</p>

				

<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->
<?php echo $form->labelEx($model,'password',array('class'=>'txt_rg_index_left')); ?>
	</div><!--/memo-sub_left_mgn-->

		<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->

<?php echo $form->passwordField($model,'password',array('class'=>'index_form_1')); ?> 
			</div><!--/memo-sub_right_mgn--><!--/memo-sub_left_mgn--></div>
            
            
            
            
            
            
            
    
<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

	<p class="txt_rg_index_left">Subscribe Now! Only for</p>
	</div><!--/memo-sub_left_mgn-->

		<div class="memo-sub_right_mgn_img"><!--memo-sub_right_mgn-->

<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/img_200for3months.jpg" class="left" />
			</div><!--/memo-sub_right_mgn--><!--/memo-sub_left_mgn-->
            
   </div>         
            
            
            
            
            
            
            
            
            
            
            
            
   <div class="div_ww">         
          
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

	<p class="txt_rg_index_left">Select Your plan</p>
	</div><!--/memo-sub_left_mgn-->
    
    
    	<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->

 <select class="gray_month_memo_large">
 <option>Activation Coupon</option>
 <option>Net Banking</option>
 <option>Credit Card and Paypal</option>
 </select>
 		</div><!--/memo-sub_right_mgn--><!--/memo-sub_left_mgn-->
            
</div>
	<div class="clear"></div>
    
<div class="space-15px">
  <blockquote>
    <blockquote>
      <p>&nbsp;</p>
    </blockquote>
  </blockquote>
</div>    
        
            
            
<div class="clear"></div>

  

<div class="right">
 <?php echo CHtml::submitButton('Submit',array('class'=>'btnStyle')); ?>
			<div class="clearSpace"></div>
		<?php echo CHtml::resetButton('Reset',array('class' =>'btnStyle')); ?>
</div>
<?php $this->endWidget(); ?>



</div>









<div class="clear"></div><!--pay-ment-box-->
            </div>
            <!--main-content closing-->
        </div>
        <!--wrapper closing-->
 