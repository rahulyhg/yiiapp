	<section class="membership-contnr newUserC">
		<ul class="inner tab-data mT0">
		<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-register-form',
	'action' => Yii::app()->createUrl('user/register'),
	'enableAjaxValidation'=>false,
)); ?>
			<li><h1>Free Registration</h1></li>
			<li><span class="sup">*</span>All Fields are mandatory</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'name'); ?></div>
				<div class="right">
					<?php echo $form->textField($model,'name',array('class' =>'validate[required,minSize[3],custom[onlyLetterSp]]')); ?>
					<?php echo $form->error($model,'name'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'date'); ?></div>
				<div class="right">
				<?php echo CHtml::dropDownList('date',null,Utilities::getRegDays(),array('prompt'=>'Date','class'=>'validate[required] width28')); ?>
				<?php echo CHtml::dropDownList('month',null,Utilities::getRegMonths(),array('prompt'=>'Month','class'=>'validate[required] width37')); ?>		    
		    	<?php echo CHtml::dropDownList('year',null,  Utilities::getRegYears(),array('prompt'=>'Year','class'=>'validate[required] width28')); ?>
				<?php echo $form->error($model,'date'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'gender'); ?></div>
				<div class="right">
				<?php echo CHtml::dropDownList('gender',null,array('' =>'Gender','F'=>'Female','M'=>'Male'),array('prompt'=>'Gender','class'=>'validate[required] width35')); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'motherTounge'); ?></div>
				<div class="right">
				<?php $records = Languages::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'languageId', 'name');
		echo CHtml::dropDownList('motherTounge',null,$list,array('empty' => 'Language','class'=>'validate[required] width60')); ?>
		<?php echo $form->error($model,'motherTounge'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'religion'); ?></div>
				<div class="right">
				<?php $records = Religion::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'religionId', 'name');
		echo CHtml::dropDownList('religion',null,$list,array('empty' => 'Religion','class'=>'validate[required] width60')); ?>
		<?php echo $form->error($model,'religion'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'caste'); ?></div>
				<div class="right">
				<?php $records = Caste::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'casteId', 'name');
		echo CHtml::dropDownList('caste',null,$list,array('empty' => 'Caste','class'=>'validate[required] width60')); ?>
		<?php echo $form->error($model,'caste'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'country'); ?></div>
				<div class="right">
				<?php $records = Country::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'countryId', 'name');
		echo CHtml::dropDownList('country',null,$list,array('empty' => 'Country','class'=>'validate[required] width60')); ?>
		<?php echo $form->error($model,'country'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'state'); ?></div>
				<div class="right">
				<?php $records = States::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'stateId', 'name');
		echo CHtml::dropDownList('state',null,$list,array('empty' => 'State','class'=>'validate[required] width60')); ?>
		<?php echo $form->error($model,'state'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'mobileNo'); ?></div>
				<div class="right">
					<?php echo $form->textField($model,'mobileNo',array('class'=>'validate[required,minSize[10],maxSize[10],custom[onlyNumberSp]]')); ?>
					<?php echo $form->error($model,'mobileNo'); ?>
				</div>
			</li>
			
			<li>
				<div class="left"><?php echo $form->labelEx($model,'emailId'); ?></div>
				<div class="right">
					<?php echo $form->textField($model,'emailId',array('class'=>'validate[required,custom[email]]')); ?>
		<?php echo $form->error($model,'emailId'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'password'); ?></div>
				<div class="right">
					<?php echo $form->passwordField($model,'password',array('class'=>'validate[required]')); ?>
					<?php echo $form->error($model,'password'); ?>
				</div>
			</li>
			<li>
				<div class="right left-m40">
					<div class="button-contnr">
						<?php echo CHtml::resetButton('Reset',array('class' =>'type1b')); ?>
						<?php echo CHtml::submitButton('Submit',array('class'=>'type1b')); ?>
					</div>
				</div>
			</li>
			<?php $this->endWidget(); ?> 	
		</ul>
	</section>
	<section class="membership-contnr newUserC floatR">
		<ul class="inner tab-data mT0">
		<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-paid-form',
	'action' => Yii::app()->createUrl('user/register'),
 	'focus'=>array($model,'name'),
	'enableAjaxValidation'=>false,
)); ?>
		
			<li><h1>Paid Registration</h1></li>
			<li><span class="sup">*</span>All Fields are mandatory</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'name'); ?></div>
				<div class="right">
					<?php echo $form->textField($model,'name',array('class' =>'validate[required,minSize[3],custom[onlyLetterSp]]')); ?>
					<?php echo $form->error($model,'name'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'date'); ?></div>
				<div class="right">
				<?php echo CHtml::dropDownList('date',null,Utilities::getRegDays(),array('prompt'=>'Date','class'=>'validate[required] width28')); ?>
				<?php echo CHtml::dropDownList('month',null,Utilities::getRegMonths(),array('prompt'=>'Month','class'=>'validate[required] width37')); ?>		    
		    	<?php echo CHtml::dropDownList('year',null,  Utilities::getRegYears(),array('prompt'=>'Year','class'=>'validate[required] width28')); ?>
				<?php echo $form->error($model,'date'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'gender'); ?></div>
				<div class="right">
				<?php echo CHtml::dropDownList('gender',null,array('' =>'Gender','F'=>'Female','M'=>'Male'),array('prompt'=>'Gender','class'=>'validate[required] width35')); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'motherTounge'); ?></div>
				<div class="right">
				<?php $records = Languages::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'languageId', 'name');
		echo CHtml::dropDownList('motherTounge',null,$list,array('empty' => 'Language','class'=>'validate[required] width60')); ?>
		<?php echo $form->error($model,'motherTounge'); ?>
				</div>
			</li>
			<li>
					<div class="left"><?php echo $form->labelEx($model,'religion'); ?></div>
				<div class="right">
				<?php $records = Religion::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'religionId', 'name');
		echo CHtml::dropDownList('religion',null,$list,array('empty' => 'Religion','class'=>'validate[required] width60')); ?>
		<?php echo $form->error($model,'religion'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'caste'); ?></div>
				<div class="right">
				<?php $records = Caste::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'casteId', 'name');
		echo CHtml::dropDownList('caste',null,$list,array('empty' => 'Caste','class'=>'validate[required] width60')); ?>
		<?php echo $form->error($model,'caste'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'country'); ?></div>
				<div class="right">
				<?php $records = Country::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'countryId', 'name');
		echo CHtml::dropDownList('country',null,$list,array('empty' => 'Country','class'=>'validate[required] width60')); ?>
		<?php echo $form->error($model,'country'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'state'); ?></div>
				<div class="right">
				<?php $records = States::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'stateId', 'name');
		echo CHtml::dropDownList('state',null,$list,array('empty' => 'State','class'=>'validate[required] width60')); ?>
		<?php echo $form->error($model,'state'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'mobileNo'); ?></div>
				<div class="right">
					<?php echo $form->textField($model,'mobileNo',array('class'=>'validate[required,minSize[10],maxSize[10],custom[onlyNumberSp]]')); ?>
					<?php echo $form->error($model,'mobileNo'); ?>
				</div>

			</li>
			
			<li>
					<div class="left"><?php echo $form->labelEx($model,'emailId'); ?></div>
				<div class="right">
					<?php echo $form->textField($model,'emailId',array('class'=>'validate[required,custom[email]]')); ?>
		<?php echo $form->error($model,'emailId'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'password'); ?></div>
				<div class="right">
					<?php echo $form->passwordField($model,'password',array('class'=>'validate[required]')); ?>
					<?php echo $form->error($model,'password'); ?>
				</div>
			</li>
			<li>
				<div class="left"> </div>
				<div class="right">
					<h4>Enter Your Pin Number Here</h4>
					<?php echo $form->textField($model,'coupon',array('class'=>'validate[required,minSize[15],maxSize[15]]')); ?>
					<h4>or Call us +91 8891 680376</h4>
				</div>
			</li>
			<li>
				<div class="right left-m40">
					<div class="button-contnr">
						<?php echo CHtml::resetButton('Reset',array('class' =>'type1b')); ?>
						<?php echo CHtml::submitButton('Submit',array('class'=>'type1b')); ?>
					</div>
				</div>
			</li> 	
			<?php $this->endWidget(); ?>
		</ul>
	</section>
	
	
	<script type="text/javascript">
$(document).ready(function(){
    $("#users-register-form").validationEngine('attach');
    $("#users-paid-form").validationEngine('attach');
  });

$("input:reset").click(function() {       // apply to reset button's click event
    this.form.reset();                    // reset the form
    // clear the form error validations      
	$("#users-register-form").validationEngine('hideAll');
	$("#users-paid-form").validationEngine('hideAll');
     return false;                         // prevent reset button from resetting again
});


</script>