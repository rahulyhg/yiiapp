<!-- **************************** REGISTER FORM STARTING ************************ -->
<div class="memo-box-one"><!--memo-box-one-->
<div class="left2"><a onmouseover="MM_swapImage('Image24','','<?php echo Yii::app()->params['resourceUrl']; ?>/images/free-member.jpg',1)" onmouseout="MM_swapImgRestore()" href="#"><img width="213" border="0" height="27" id="Image24" name="Image24" src="<?php echo Yii::app()->params['resourceUrl']; ?>/images/free-member.jpg"></a></div>
<div class="right"><a onmouseover="MM_swapImage('Image25','','<?php echo Yii::app()->params['resourceUrl']; ?>/images/paid-member-red.jpg',1)" onmouseout="MM_swapImgRestore()" href="paide-membership.html"><img width="219" border="0" height="27" id="Image25" name="Image25" src="<?php echo Yii::app()->params['resourceUrl']; ?>/images/paid-member.jpg"></a></div>

<div class="clear"></div>


<div class="memo-sub_left"><!--memo-sub_left-->
	<p class="txt_rg_index_10">All Fields are mandatory</p>

	</div><!--/memo-sub_left-->
	
	<div class="memo-sub_right"><!--memo-sub_right-->


			</div><!--/memo-sub_right-->

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-register-form',
	'action' => Yii::app()->createUrl('user/register'),
 	'focus'=>array($model,'name'),
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>
	
	<div class="memo-sub_left">
		<?php echo $form->labelEx($model,'name',array('class'=>'txt_rg_index')); ?>
	</div>	
	<div class="memo-sub_right"><!--memo-sub_right-->	
		<?php echo $form->textField($model,'name',array('class' =>'index_form_1')); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>	
	<p class="space-0px">&nbsp;</p>	
	<div class="memo-sub_left">
		<?php echo $form->labelEx($model,'date',array('class'=>'txt_rg_index')); ?>
	</div>	
	<div class="memo-sub_right">
		<?php echo CHtml::dropDownList('date',Utilities::currentDay(),Utilities::getRegDays(),array('class'=>'select_45_pink')); ?>
		<?php echo CHtml::dropDownList('month',Utilities::currentMonth(),Utilities::getRegMonths(),array('class'=>'index_month_memo_medium')); ?>		    
    	<?php echo CHtml::dropDownList('year',Utilities::currentYear(),  Utilities::getRegYears(),array('class'=>'index_year_memo_1')); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>
	<div class="memo-sub_left">
		<?php echo $form->labelEx($model,'gender',array('class'=>'txt_rg_index')); ?>
	</div>
	<div class="memo-sub_right"><!--memo-sub_right-->	
		<?php echo CHtml::dropDownList('gender','Female',array('F'=>'Female','M'=>'Male'),array('class'=>'index_select_drop')); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>
	
	<div class="memo-sub_left">
		<?php echo $form->labelEx($model,'religion',array('class'=>'txt_rg_index')); ?>
	</div>
	<div class="memo-sub_right"><!--memo-sub_right-->
	<?php $records = Religion::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'religionId', 'name');
		echo CHtml::dropDownList('religion',null,$list,array('empty' => 'Religion','class'=>'index_select_drop')); ?>
		<?php echo $form->error($model,'religion'); ?>
	</div>	

	<div class="memo-sub_left">
		<?php echo $form->labelEx($model,'motherTounge',array('class'=>'txt_rg_index')); ?>
	</div>		
	<div class="memo-sub_right"><!--memo-sub_right-->
		<?php $records = Languages::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'languageId', 'name');
		echo CHtml::dropDownList('motherTounge',null,$list,array('empty' => 'Language','class'=>'index_select_drop')); ?>
		<?php echo $form->error($model,'motherTounge'); ?>
	</div>
	<div class="memo-sub_left">
		<?php echo $form->labelEx($model,'caste',array('class'=>'txt_rg_index')); ?>
	</div>
	<div class="memo-sub_right"><!--memo-sub_right-->
	<?php $records = Caste::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'casteId', 'name');
		echo CHtml::dropDownList('caste',null,$list,array('empty' => 'Caste','class'=>'index_select_drop')); ?>
		<?php echo $form->error($model,'caste'); ?>
	</div>	
	
	<div class="memo-sub_left">
		<?php echo $form->labelEx($model,'country',array('class'=>'txt_rg_index')); ?>
	</div>
	<div class="memo-sub_right"><!--memo-sub_right-->
	<?php $records = Country::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'countryId', 'name');
		echo CHtml::dropDownList('country',null,$list,array('empty' => 'Country','class'=>'index_select_drop')); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>
	
	<div class="memo-sub_left">
		<?php echo $form->labelEx($model,'state',array('class'=>'txt_rg_index')); ?>
	</div>
	<div class="memo-sub_right"><!--memo-sub_right-->
		<?php $records = States::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'stateId', 'name');
		echo CHtml::dropDownList('state',null,$list,array('empty' => 'State','class'=>'index_select_drop')); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>
	
	<div class="memo-sub_left">
		<?php echo $form->labelEx($model,'mobileNo',array('class'=>'txt_rg_index')); ?>
	</div>
	<div class="memo-sub_right"><!--memo-sub_right-->
		<?php echo $form->textField($model,'mobileNo',array('class'=>'index_form_1')); ?>
		<?php echo $form->error($model,'mobileNo'); ?>
	</div>
	
	
	<div class="memo-sub_left">
		<?php echo $form->labelEx($model,'landNo',array('class'=>'txt_rg_index')); ?>
	</div>
	<div class="memo-sub_right">
		<?php echo $form->textField($model,'landNo',array('class'=>'index_form_1')); ?>
		<?php echo $form->error($model,'landNo'); ?>
	</div>
	
	<div class="memo-sub_left">
		<?php echo $form->labelEx($model,'emailId',array('class'=>'txt_rg_index')); ?>
	</div>	
	<div class="memo-sub_right">
		<?php echo $form->textField($model,'emailId',array('class'=>'index_form_1')); ?>
		<?php echo $form->error($model,'emailId'); ?>
	</div>

	<div class="memo-sub_left">
		<?php echo $form->labelEx($model,'password',array('class'=>'txt_rg_index')); ?>
	</div>
	<div class="memo-sub_right">
		<?php echo $form->passwordField($model,'password',array('class'=>'index_form_1')); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="memo-sub_left"></div>

	<div class="memo-sub_right_btn">
	<div class="right">
	
		<?php echo CHtml::submitButton('Submit',array('class'=>'btnStyle')); ?>
			<div class="clearSpace"></div>
		<?php echo CHtml::resetButton('Reset',array('class' =>'btnStyle')); ?>
	</div>
	</div>

<?php $this->endWidget(); ?>


</div>

<!-- **************************** REGISTER FORM END ************************ -->

<!-- *********************************** SEARCH FROM STARTING *********************************** -->

<div id="memo-box-two"><!--memo-box-two-->

<div class="memo-head"><!--memo-head-->

<img src="<?php echo Yii::app()->params['resourceUrl']; ?>/images/basic-search.jpg">


</div><!--memo-head--><!--memo-sub-->




<?php $searchForm=$this->beginWidget('CActiveForm', array(
	'id'=>'users-search-searchForm',
	'action' => Yii::app()->createUrl('search/basic'),
	'enableAjaxValidation'=>false,
)); ?>	


	<?php echo $searchForm->errorSummary($searchModel); ?>

		
<div class="memo-sub_left_small"><!--memo-sub_left_small-->
		<?php echo $searchForm->labelEx($searchModel,'bride',array('class'=>'txt_rg_index')); ?>
</div>
	<div class="memo-sub_right_small"><!--memo-sub_right_small-->		
	<p class="radio-new">
		<?php echo $searchForm->radioButton($searchModel,'bride', array('value'=>'f')); ?>Bride
	 </p>	
	 <p class="radio-new_size">
		<?php echo $searchForm->radioButton($searchModel,'groom', array('value'=>'m')); ?>Groom
	 </p>
		<?php echo $searchForm->error($searchModel,'name'); ?>
	</div>
	
<div class="memo-sub_left_small"><!--memo-sub_left_small-->
		<?php echo $searchForm->labelEx($searchModel,'startAge',array('class'=>'txt_rg_index')); ?>
</div>
<div class="memo-sub_right_small"><!--memo-sub_right_small-->		
		<?php echo CHtml::dropDownList('startAge',null,Utilities::getRegDays(),array('class'=>'index_year_memo_1')); ?>
		<span class="txt_rg">To&nbsp;&nbsp;</span>
    	<?php echo CHtml::dropDownList('endAge',null,  Utilities::getRegYears(),array('class'=>'index_year_memo_1')); ?>
</div>
	
<div class="memo-sub_left_small"><!--memo-sub_left_small-->
		<?php echo $searchForm->labelEx($searchModel,'religion',array('class'=>'txt_rg_index')); ?>
</div>
<div class="memo-sub_right_small"><!--memo-sub_right_small-->
		<?php $records = Religion::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'religionId', 'name');
		echo CHtml::dropDownList('religion',null,$list,array('empty' => 'Religion','class'=>'index_254_memo')); ?>
		<?php echo $searchForm->error($searchModel,'religion'); ?>
	</div>
		
<div class="memo-sub_left_small"><!--memo-sub_left_small-->
		<?php echo $searchForm->labelEx($searchModel,'motherTounge',array('class'=>'txt_rg_index')); ?>
</div>
<div class="memo-sub_right_small"><!--memo-sub_right_small-->
	<?php $records = Languages::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'languageId', 'name');
		echo CHtml::dropDownList('motherTounge',null,$list,array('empty' => 'Language','class'=>'index_254_memo')); ?>
		<?php echo $searchForm->error($searchModel,'motherTounge'); ?>
	</div>
	
<div class="memo-sub_left_small"><!--memo-sub_left_small-->
		<?php echo $searchForm->labelEx($searchModel,'caste',array('class'=>'txt_rg_index')); ?>
</div>
<div class="memo-sub_left_small"><!--memo-sub_left_small-->
		<?php $records = Caste::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'casteId', 'name');
		echo CHtml::dropDownList('caste',null,$list,array('empty' => 'Caste','class'=>'index_254_memo')); ?>
		<?php echo $searchForm->error($searchModel,'caste'); ?>
	</div>	

<div class="memo-sub_left_small"><!--memo-sub_left_small-->
		<?php echo $searchForm->labelEx($searchModel,'state',array('class'=>'txt_rg_index')); ?>
</div>
<div class="memo-sub_left_small"><!--memo-sub_left_small-->
		<?php $records = States::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'stateId', 'name');
		echo CHtml::dropDownList('state',null,$list,array('empty' => 'State','class'=>'index_254_memo')); ?>
		<?php echo $searchForm->error($searchModel,'state'); ?>
	</div>
	
<div class="memo-sub_left_small"><!--memo-sub_left_small-->
		<?php echo $searchForm->labelEx($searchModel,'district',array('class'=>'txt_rg_index')); ?>
</div>
<div class="memo-sub_left_small"><!--memo-sub_left_small-->
		<?php $records = Districts::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'districtId', 'name');
		echo CHtml::dropDownList('state',null,$list,array('empty' => 'State','class'=>'index_254_memo')); ?>
		<?php echo $searchForm->error($searchModel,'district'); ?>
	</div>
	
	
<div class="memo-sub_left_small"><!--memo-sub_left_small-->
		<?php echo $searchForm->labelEx($searchModel,'heightStart',array('class'=>'txt_rg_index')); ?>
</div>

<div class="memo-sub_left_small"><!--memo-sub_left_small-->
		<?php echo CHtml::dropDownList('heightStart',null,Utilities::getHeights(),array('class'=>'index_254_memo')); ?>
		<?php echo $searchForm->error($searchModel,'name'); ?>
	</div>

<div class="memo-sub_left_small"><!--memo-sub_left_small-->
	
	<p class="txt_rg_index"></p>
	</div><!--/memo-sub_left-->

		<div class="memo-sub_right_small"><!--memo-sub_right_small-->

<p class="txt_rg_index">To</p>
	  </div><!--/memo-sub_right-->

<div class="memo-sub_left_small"><!--memo-sub_left_small-->
	
	<p class="txt_rg_index"></p>
	</div><!--/memo-sub_left-->

		<div class="memo-sub_right_small"><!--memo-sub_right_small-->

	<?php echo CHtml::dropDownList('heightLimit',null,Utilities::getHeights(),array('class'=>'index_254_memo')); ?>	
	</div>
	
<div class="memo-sub_left_small"><!--memo-sub_left_small-->
		<?php echo $searchForm->labelEx($searchModel,'bodyType',array('class'=>'txt_rg_index')); ?>
</div>
<div class="memo-sub_right_small"><!--memo-sub_right_small-->
		<?php echo CHtml::dropDownList('bodyType',null,Utilities::getBodyType(),array('class'=>'index_254_memo')); ?>
		<?php echo $searchForm->error($searchModel,'name'); ?>
	</div>		
		
	<div class="memo-sub_left_small"><!--memo-sub_left_small-->
		<?php echo $searchForm->labelEx($searchModel,'bodyColor',array('class'=>'txt_rg_index')); ?>

	</div><!--/memo-sub_left-->
		<div class="memo-sub_right_small"><!--memo-sub_right_small-->
		<?php echo CHtml::dropDownList('bodyColor',null,Utilities::getBodyColor(),array('class'=>'index_254_memo')); ?>
	</div>
	
	<div class="memo-sub_left_small"><!--memo-sub_left_small-->
		<?php echo $searchForm->labelEx($searchModel,'photo',array('class'=>'txt_rg_index')); ?>
	</div>
	<div class="memo-sub_right_small"><!--memo-sub_right_small-->	
		<?php echo $searchForm->checkBox($searchModel,'photo', array('value'=>1, 'uncheckValue'=>0),array('class'=>'mrgn_top_3')); ?>
		<?php echo $searchForm->error($searchModel,'photo'); ?>
	</div>


	<div class="memo-sub_left_small"><!--memo-sub_left_small-->
	
	
	</div><!--/memo-sub_left-->

	<div class="memo-sub_right_btn2"><!--memo-sub_right_small-->
        
        <div class="right">

		<?php echo CHtml::submitButton('Search',array('class'=>'btnStyle')); ?>
		<div class="clearSpace"></div>
		<?php echo CHtml::resetButton('Reset',array('class'=>'btnStyle')); ?>
	</div>
	</div>
	<p class="space-0px">&nbsp;</p>

<?php $this->endWidget(); ?>

</div>

<!-- *********************************** SEARCH FROM END *********************************** -->

<div class="memo-box-three"><!--memo-box-three-->

<?php $searchForm=$this->beginWidget('CActiveForm', array(
		'id'=>'keywordSearch',
		'method' => 'GET',
	'action' => Yii::app()->createUrl('search/byid'),
	'enableAjaxValidation'=>false,
)); ?>

<input type="text" name="id" value="" placeholder="Search By ID " class="text_normal_small" />


<a  href="javascript:keywordSearch.submit();"><img width="49" border="0" height="22" class="search_add_sub" id="Image21" name="Image21" src="<?php echo Yii::app()->params['resourceUrl']; ?>/images/search_btn_ash_sm.jpg"></a>

<?php $this->endWidget(); ?>

<div class="memo-4">
<img src="<?php echo Yii::app()->params['resourceUrl']; ?>/images/problem.jpg">
</div>
</div>

<div class="clear"></div>


<a href="/guest/paiduser"><img width="1015" border="0" height="125" src="<?php echo Yii::app()->params['resourceUrl']; ?>/images/subscribe_now.jpg"></a>


<script type="text/javascript">
jQuery(document).ready(function(){
    	// binds form submission and fields to the validation engine
    	jQuery(".users-register-form").validationEngine();
    	jQuery(".users-search-searchForm").validationEngine();
	});
</script>	
