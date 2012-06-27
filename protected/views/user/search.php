<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-search-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		
	<div class="row">
		<?php echo $form->labelEx($model,'bride'); ?>
		<?php echo $form->checkBox($model,'bride', array('value'=>1, 'uncheckValue'=>0)); ?>
		<?php echo $form->checkBox($model,'groom', array('value'=>1, 'uncheckValue'=>0)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'startAge'); ?>
		<?php echo CHtml::dropDownList('startAge',null,Utilities::getRegDays()); ?>
    	<?php echo CHtml::dropDownList('endAge',null,  Utilities::getRegYears()); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'religion'); ?>
		<?php echo CHtml::dropDownList('religion',null,Utilities::getRegDays()); ?>
		<?php echo $form->error($model,'religion'); ?>
	</div>
		
	<div class="row">
		<?php echo $form->labelEx($model,'motherTounge'); ?>
		<?php echo CHtml::dropDownList('motherTounge',null,Utilities::getRegDays()); ?>
		<?php echo $form->error($model,'motherTounge'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'caste'); ?>
		<?php echo CHtml::dropDownList('caste',null,Utilities::getRegDays()); ?>
		<?php echo $form->error($model,'caste'); ?>
	</div>	

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo CHtml::dropDownList('state',null,Utilities::getRegDays()); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'district'); ?>
		<?php echo CHtml::dropDownList('district',null,Utilities::getRegDays()); ?>
		<?php echo $form->error($model,'district'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'heightStart'); ?>
		<?php echo CHtml::dropDownList('heightStart',null,Utilities::getRegDays()); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
	
	<div class="row">
	<?php echo CHtml::dropDownList('heightLimit',null,Utilities::getRegDays()); ?>	
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'bodyType'); ?>
		<?php echo CHtml::dropDownList('bodyType',null,Utilities::getRegDays()); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>		
		
	<div class="row">	
		<?php echo CHtml::dropDownList('bodyColor',null,Utilities::getRegDays()); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'photo'); ?>
		<?php echo $form->checkBox($model,'photo', array('value'=>1, 'uncheckValue'=>0)); ?>
		<?php echo $form->error($model,'photo'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
		
		<?php echo CHtml::resetButton('Reset'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->