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
            
              <div class="navigation_container">
            	<?php $this->widget('application.widgets.menu.SubMain'); ?>
				<?php $this->widget('application.widgets.menu.Search'); ?>
				<!-- search dropdown ends here -->
				<!-- payment dropdown starts here -->
					<?php $this->widget('application.widgets.menu.Paymentoptions'); ?>
				<!-- payment dropdown ends here -->
				<!-- contactus dropdown starts here -->
					<?php $this->widget('application.widgets.menu.Contactus'); ?>
				<!-- contactus dropdown ends here -->
			</div>		
            
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
)); ?>					
                    
<div class="div_ww">

<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->
<?php echo $form->labelEx($model,'name',array('class'=>'txt_rg_index_left')); ?>
</div><!--/memo-sub_left_mgn-->
	<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->
			
<?php echo $form->textField($model,'name',array('class' =>'validate[required] gray_form_1')); ?>			 

 </div><!--/memo-sub_right_mgn-->

</div>



		<p class="space-0px">&nbsp;</p>

				

<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

	<?php echo $form->labelEx($model,'date',array('class'=>'txt_rg_index_left')); ?>
	</div><!--/memo-sub_left_mgn-->

			<div class="memo-sub_right_mgn_3"><!--memo-sub_right_mgn-->
        
 <?php echo CHtml::dropDownList('date',null,Utilities::getRegDays(),array('prompt'=>'Date','class'=>'validate[required] gray_date_memo_1')); ?>
		<?php echo CHtml::dropDownList('month',null,Utilities::getRegMonths(),array('prompt'=>'Month','class'=>'validate[required] gray_month_memo_medium')); ?>		    
    	<?php echo CHtml::dropDownList('year',null,  Utilities::getRegYears(),array('prompt'=>'Year','class'=>'validate[required] gray_year_memo_1')); ?>
		<?php echo $form->error($model,'date'); ?>
					</div><!--/memo-sub_right_mgn-->



<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

		<?php echo $form->labelEx($model,'gender',array('class'=>'txt_rg_index_left')); ?>
				  </div><!--/memo-sub_left_mgn-->

						<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->
<?php echo CHtml::dropDownList('gender',null,array('F'=>'Female','M'=>'Male'),array('class'=>'validate[required] gray_month_memo')); ?>
							</div><!--/memo-sub_right_mgn--></div>
                            
                            
<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

		<?php echo $form->labelEx($model,'religion',array('class'=>'txt_rg_index_left')); ?>
			</div><!--/memo-sub_left_mgn-->

					<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->
 <?php $records = Religion::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'religionId', 'name');
		echo CHtml::dropDownList('religion',null,$list,array('empty' => 'Religion','class'=>'validate[required] gray_month_memo')); ?> 



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
		echo CHtml::dropDownList('caste',null,$list,array('empty' => 'Caste','class'=>'validate[required] gray_month_memo')); ?>
			</div><!--/memo-sub_right_mgn--></div>

		<p class="space-0px">&nbsp;</p>

				

<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

<?php echo $form->labelEx($model,'country',array('class'=>'txt_rg_index_left')); ?>
	</div><!--/memo-sub_left_mgn-->

			<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->

 <?php $records = Country::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'countryId', 'name');
		echo CHtml::dropDownList('country',null,$list,array('empty' => 'Country','class'=>'validate[required] gray_month_memo')); ?>
 
			</div><!--/memo-sub_right_mgn-->

</div>


<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

<?php echo $form->labelEx($model,'state',array('class'=>'txt_rg_index_left')); ?>
					</div><!--/memo-sub_left_mgn-->

						<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->
<?php $records = States::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'stateId', 'name');
		echo CHtml::dropDownList('state',null,$list,array('empty' => 'State','class'=>'validate[required] gray_month_memo')); ?>
									</div><!--/memo-sub_right_mgn--></div>
                            
                            
                            
                            
  <div class="div_ww">                         
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

	<?php echo $form->labelEx($model,'motherTounge',array('class'=>'txt_rg_index_left')); ?>
	</div><!--/memo-sub_left_mgn-->

		<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->

 <?php $records = Languages::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'languageId', 'name');
		echo CHtml::dropDownList('motherTounge',null,$list,array('empty' => 'Language','class'=>'validate[required] gray_month_memo')); ?> 
		</div><!--/memo-sub_right_mgn-->

</div>


<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

		<?php echo $form->labelEx($model,'mobileNo',array('class'=>'txt_rg_index_left')); ?>
			</div><!--/memo-sub_left_mgn-->
            
            
	<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->
<?php echo $form->textField($model,'mobileNo',array('class'=>'validate[required,funcCall[validatePhone]]  gray_form_1')); ?>
 


		</div><!--/memo-sub_right_mgn--></div>





<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

	<?php echo $form->labelEx($model,'landNo',array('class'=>'txt_rg_index_left')); ?>
	</div><!--/memo-sub_left_mgn-->

			<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->

<?php echo $form->textField($model,'landNo',array('class'=>'validate[required,funcCall[validatePhone]]  gray_form_1')); ?>
			</div><!--/memo-sub_right_mgn--></div>

				<p class="space-0px">&nbsp;</p>

					
                    
<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->
<?php echo $form->labelEx($model,'emailId',array('class'=>'txt_rg_index_left')); ?>

	</div><!--/memo-sub_left_mgn-->

		<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->
			<?php echo $form->textField($model,'emailId',array('class'=>'validate[required, funcCall[checkEmailValidation]] index_form_1')); ?>  

		</div><!--/memo-sub_right_mgn--></div>


		<p class="space-0px">&nbsp;</p>

				

<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->
<?php echo $form->labelEx($model,'password',array('class'=>'txt_rg_index_left')); ?>
	</div><!--/memo-sub_left_mgn-->

		<div class="memo-sub_right_mgn_2"><!--memo-sub_right_mgn-->

<?php echo $form->passwordField($model,'password',array('class'=>'validate[required] index_form_1')); ?> 
			</div><!--/memo-sub_right_mgn--><!--/memo-sub_left_mgn--></div>
            
            
            
            
            
            
            
    
<div class="div_ww">
<div class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

	<p class="txt_rg_index_left">Subscribe Now! Only for</p>
	</div><!--/memo-sub_left_mgn-->

		<div class="memo-sub_right_mgn_img"><!--memo-sub_right_mgn-->

<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/img_200for3months.jpg" class="left" />
			</div><!--/memo-sub_right_mgn--><!--/memo-sub_left_mgn-->
            
   </div>         
            
            
	<div class="clear"></div>
    
        Please enter your coupon code,also please contact us at 0407-12121212 for coupon.
         <div id="coupon" class="memo-sub_left_mgn"><!--memo-sub_left_mgn-->

<?php echo $form->labelEx($model,'coupon',array('class'=>'txt_rg_index_left')); ?>
	</div><!--/memo-sub_left_mgn-->

		<div id="coupon1" class="memo-sub_right_mgn_3"><!--memo-sub_right_mgn-->

<?php echo $form->textField($model,'coupon',array('class'=>'validate[required] index_form_1')); ?> 
			</div><!--/memo-sub_right_mgn--><!--/memo-sub_left_mgn--><!--/memo-sub_left_mgn--><!--/memo-sub_right_mgn--><!--/memo-sub_left_mgn-->
            
            
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
 
 <script type="text/javascript">
$(document).ready(function(){
    $("#users-register-form").validationEngine('attach');
  });


</script>	
 