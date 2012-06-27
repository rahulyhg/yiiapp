<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-register-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo CHtml::dropDownList('date',null,Utilities::getRegDays()); ?>
		<?php echo CHtml::dropDownList('month',null,Utilities::getRegMonths()); ?>		    
    	<?php echo CHtml::dropDownList('year',null,  Utilities::getRegYears()); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'religion'); ?>
		<?php echo $form->textField($model,'religion'); ?>
		<?php echo $form->error($model,'religion'); ?>
	</div>
		
	<div class="row">
		<?php echo $form->labelEx($model,'motherTounge'); ?>
		<?php echo $form->textField($model,'motherTounge'); ?>
		<?php echo $form->error($model,'motherTounge'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'caste'); ?>
		<?php echo $form->textField($model,'caste'); ?>
		<?php echo $form->error($model,'caste'); ?>
	</div>	
	
	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country'); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'mobileNo'); ?>
		<?php echo $form->textField($model,'mobileNo'); ?>
		<?php echo $form->error($model,'mobileNo'); ?>
	</div>
	
	
	<div class="row">
		<?php echo $form->labelEx($model,'landNo'); ?>
		<?php echo $form->textField($model,'landNo'); ?>
		<?php echo $form->error($model,'landNo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'emailId'); ?>
		<?php echo $form->textField($model,'emailId'); ?>
		<?php echo $form->error($model,'emailId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->textField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
		
		<?php echo CHtml::resetButton('Reset'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->