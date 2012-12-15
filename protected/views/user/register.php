
<section class="membership-contnr">
		<ul class="tab-head">
			<li id="tab1"><a id="tab1" class="select" href="#">Free membership</a></li>
			<li id="tab2"><a id="tab2" href="#">Paid membership</a></li>
		</ul>
		
		<ul id="tab1_data" class="tab-data">
		<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-register-form',
	'action' => Yii::app()->createUrl('user/register'),
	'enableAjaxValidation'=>false,
)); ?>
		<?php echo $form->errorSummary($model); ?>
		
			<li>All Fields are mandatory</li>
			<li>
				<div class="left"><?php echo $form->labelEx($model,'name'); ?></div>
				<div class="right">
					<?php echo $form->textField($model,'name',array('class' =>'validate[required]')); ?>
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
				<?php echo CHtml::dropDownList('gender',null,array('empty' =>'Gender','F'=>'Female','M'=>'Male'),array('class'=>'validate[required] width35')); ?>
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
					<?php echo $form->textField($model,'mobileNo',array('class'=>'validate[required,minSize[10]]')); ?>
					<?php echo $form->error($model,'mobileNo'); ?>
				</div>
			</li>
			
			<li>
				<div class="left"><?php echo $form->labelEx($model,'emailId'); ?></div>
				<div class="right">
					<?php echo $form->textField($model,'emailId',array('class'=>'validate[required, funcCall[checkEmailValidation]]')); ?>
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
		</ul>
		<?php $this->endWidget(); ?>
		<ul id="tab2_data" class="tab-data" style="display: none;">
			<li>
				<div class="subscribe-box noBord width95">
					<div class="sub-now">Subscribe Now! <br /><span>Only for</span></div>
					<div class="digitCont">
						<div class="digits">
							<span class="WebRupee">Rs.</span>200 
						</div>
						<div class="forTM">For 3 Months</div>
					</div>
					<div class="benefits">Benefits For Subsciribed Users</div>
					<div class="divider"> </div>
					<p>Contact members directly <br /> Send personalised messaages <br /> View Album, Documents, and contact details <br /> View horoscope of members <br /> Express Unlimited interest Plus other exclusive paid membership benefits</p>
					<a class="type6" href="http://marrydoor.com/guest/paiduser" >Continue to Registration</a>
				</div>
			</li>
		</ul>
	</section>
	<section class="basic-search">
		<h2>BASIC SEARCH</h2>
		<ul class="search-data">
			
			<?php $searchForm=$this->beginWidget('CActiveForm', array(
	'id'=>'users-search-searchForm',
	'action' => Yii::app()->createUrl('search/basic'),
)); ?>	


	<?php echo $searchForm->errorSummary($searchModel); ?>
			
			<li>
				<div class="left">Looking for</div>
				<div class="right">
					<div class="check-contnr">
						<?php echo $searchForm->radioButton($searchModel,'bride', array('value'=>'f')); ?><span>Bride</span>
					</div>
					<div class="check-contnr">
						<?php echo $searchForm->radioButton($searchModel,'groom', array('value'=>'m')); ?><span>Groom</span>
					</div>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $searchForm->labelEx($searchModel,'startAge'); ?></div>
				<div class="right">
				<?php echo CHtml::dropDownList('startAge',null,Utilities::getAge(),array('class'=>'width25')); ?>
					<span>To</span>
    	<?php echo CHtml::dropDownList('endAge',null,  Utilities::getAge(),array('class'=>'width25')); ?>
					</div>
			</li>
			<li>
				<div class="left"><?php echo $searchForm->labelEx($searchModel,'motherTounge'); ?></div>
				<div class="right">
				<?php $records = Languages::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'languageId', 'name');
		echo CHtml::dropDownList('motherTounge',null,$list,array('empty' => 'Language','class'=>'width90')); ?>
		<?php echo $searchForm->error($searchModel,'motherTounge'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $searchForm->labelEx($searchModel,'religion'); ?></div>
				<div class="right">
				<?php $records = Religion::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'religionId', 'name');
		echo CHtml::dropDownList('religion',null,$list,array('empty' => 'Religion','class'=>'width90')); ?>
		<?php echo $searchForm->error($searchModel,'religion'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $searchForm->labelEx($searchModel,'caste'); ?></div>
				<div class="right">
				
		<?php $records = Caste::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'casteId', 'name');
		echo CHtml::dropDownList('caste',null,$list,array('empty' => 'Caste','class'=>'width90')); ?>
		<?php echo $searchForm->error($searchModel,'caste'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $searchForm->labelEx($searchModel,'state'); ?></div>
				<div class="right">
				<?php $records = States::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'stateId', 'name');
		echo CHtml::dropDownList('state',null,$list,array('empty' => 'State','class'=>'width90')); ?>
		<?php echo $searchForm->error($searchModel,'state'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $searchForm->labelEx($searchModel,'district'); ?></div>
				<div class="right">
				<?php $records = Districts::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'districtId', 'name');
		echo CHtml::dropDownList('district',null,$list,array('empty' => 'District','class'=>'width90')); ?>
		<?php echo $searchForm->error($searchModel,'district'); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $searchForm->labelEx($searchModel,'heightStart'); ?></div>
				<div class="right">
				<?php echo CHtml::dropDownList('heightStart',null,Utilities::getHeights(),array('class'=>'width90')); ?>
				</div>
			</li>
			<li>
				<div class="left"></div>
				<div class="right">to</div>
			</li>
			<li>
				<div class="left"></div>
				<div class="right">
				<?php echo CHtml::dropDownList('heightLimit',null,Utilities::getHeights(),array('class'=>'width90')); ?>	
				</div>
			</li>
			<li>
				<div class="left"><?php echo $searchForm->labelEx($searchModel,'bodyType'); ?></div>
				<div class="right">
				<?php echo CHtml::dropDownList('bodyType',null,Utilities::getBodyType(),array('class'=>'width90')); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $searchForm->labelEx($searchModel,'bodyColor'); ?></div>
				<div class="right">
				<?php echo CHtml::dropDownList('bodyColor',null,Utilities::getBodyColor(),array('class'=>'width90')); ?>
				</div>
			</li>
			<li>
				<div class="left"><?php echo $searchForm->labelEx($searchModel,'photo'); ?></div>
				<div class="right">
							<?php echo $searchForm->checkBox($searchModel,'photo', array('value'=>1, 'uncheckValue'=>0)); ?>
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
	<aside class="rightbar-contnr">
		<div class="searchID">
		<form id="keywordSearch"  name="keywordSearch" method="get"  action="/search/byid">
			<input name="id" type="text" class="validate[required]"  placeholder="Search By ID / Keyword" />
			<?php echo CHtml::submitButton('Search',array('class'=>'type1b')); ?>
		</form>	
			
		</div>
		<div class="subscribe-box">
			<div class="sub-now">Subscribe Now!<br /><span>Only for</span></div>
			<div class="digit"><span class="WebRupee">Rs.</span>200</div>
			<div class="for">For 3 Months</div>
			<div class="divider"> </div>
			<div class="benefit">Benefits of Subscribing </div>
			<p>
				Real time update about profile visitors <br />
				Access key details of other users<br />
				Contact candidates directly  <br />
				View horoscope of members <br />
				Message candidates directly
			</p>
			<div class="divider"> </div>
			<a class="subNow" href="#">Subscribe Now</a>
		</div>
	</aside>


<script type="text/javascript">
$(document).ready(function(){
    $("#users-register-form").validationEngine('attach');
    $("#keywordSearch").validationEngine('attach');

    $("input:reset").click(function() {       // apply to reset button's click event
        this.form.reset();                    // reset the form
        // clear the form error validations      
		$("#users-register-form").validationEngine('hideAll');
         return false;                         // prevent reset button from resetting again
    });

    
  });

</script>