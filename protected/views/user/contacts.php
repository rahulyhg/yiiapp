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
 * @title contacts.php
 * @description <Description of this class>
 *  @filesource <URL>
 *  @version <Revision>
 */
?>
<!--main-content-->
<div id="main-content">
	<!--left-content-->

	<div id="content-left-1">
		<form id="userContact" enctype="multipart/form-data" name="userContact" method="post" action="/user/contact">
			<p class="text_pink-hd">You're just a step away from discovering a
				life partner</p>
			<div class="clear"></div>

			<p class="space-10px">&nbsp;</p>
			<p class="txt_bld-11">*marked fields are mandatory</p>
			<div class="line"></div>
			<div class="list_class">
				<p class="txt_bld">
					Regional Site<span class="txt_bld-18"> *</span>
				</p>
			</div>
			<div class="list_class-2">
				<select class="select_small">
					<option>Kerala</option>
				</select>
			</div>

			<div class="list_class-3"></div>
			<div class="clear"></div>
			<div class="line"></div>
			<p class="space-10px">&nbsp;</p>
			<!--personal details-->
			<p class="text_pink-hd">Personal details</p>


			<div class="clear"></div>


			<div class="list_class">
				<p class="txt_bldn">
					Profile being created for<span class="txt_bld-18"> *</span>
				</p>
			</div>
			<div class="list_class-4">
				<p class="radio_135">
					<input type="radio" name="profileFor" value="0">&nbsp;&nbsp;My Self



				
				
				
				<p class="radio_135">
					<input type="radio" name="profileFor" class="validate[required] radio"  value="1">&nbsp;&nbsp;Son
				</p>
				<p class="radio_135">
					<input type="radio" name="profileFor" value="2" class="validate[required] radio" >&nbsp;&nbsp;Brother
				</p>
				<p class="radio_135">
					<input type="radio" name="profileFor" value="3" class="validate[required] radio" >&nbsp;&nbsp;Relative
				</p>
				<p class="radio_135">
					<input type="radio" name="profileFor" value="4" class="validate[required] radio" >&nbsp;&nbsp;Friend
				</p>
			</div>
			<!--closing personal details-section-1-->
			<!--personal details-section-2-->
			<div class="clear"></div>
			<div class="list_class">
				<p class="txt_bldn">
					Marital status <span class="txt_bld-18">*</span>
				</p>
			</div>
			<div class="list_class-4">

				<p class="radio_135">
					<input type="radio" name="marital" value="0" class="validate[required] radio" >&nbsp;&nbsp;Unmarried
				</p>
				<p class="radio_135">
					<input type="radio" name="marital" value="1" class="validate[required] radio" >&nbsp;&nbsp;Widower
				</p>
				<p class="radio_135">
					<input type="radio" name="marital" value="2" class="validate[required] radio" >&nbsp;&nbsp;Divorced
				</p>
				<p class="radio_155">
					<input type="radio" name="marital" value="3" class="validate[required] radio"  >&nbsp;&nbsp;Awaiting&nbsp;divorce
				</p>

			</div>
			<!--closing personal details-section-2-->
			<!--personal details-section-3-->
			<div class="clear"></div>
			<div class="list_class">
				<p class="txt_bld">
					Caste / Subcast<span class="txt_bld-18"> *</span>
				</p>
			</div>


			<div class="list_class-6">

				<div class="list_class-8b">
				<?php
				$userPersonal = $user->userpersonaldetails;
				$religion = Religion::model()->findbyPk($user->userpersonaldetails->religionId);
				$caste = Caste::model()->findbyPk($user->userpersonaldetails->casteId);
				?>
					<div class="div_150">
						<span class="txt_12"> &nbsp;<?php if(isset($user->userpersonaldetails->religion))echo $user->userpersonaldetails->religion->name; else echo $religion->name ;?>- <?php if(isset($model->userpersonaldetails->caste))echo $model->userpersonaldetails->caste->name;else echo $caste->name ?>
						</span>
					</div>
					
				</div>

			</div>

			<div class="clear"></div>
			<div class="list_class">
			<p class="txt_bld">
				Are you willing to marry from other communities
			</p>
			</div>
			
			<div class="list_class-4">
						
					<p class="radio_135">
					<input type="radio" class="validate[required] radio" name="interCaste" value="1">&nbsp;&nbsp;Yes
					</p>
					<p class="radio_135">
						<input type="radio" class="validate[required] radio "name="interCaste" value="0">&nbsp;&nbsp;No
					</p>
					&nbsp;&nbsp;&nbsp;&nbsp;




			</div>




			<!--closing personal details-section-3-->
			<!--personal details-section-4-->

			<div class="clear"></div>


			<div class="list_class">
				<p class="txt_bld">Country living in</p>
			</div>
			<div class="list_class-6">
			<?php
			$country = Country::model()->findbyPk($user->userpersonaldetails->countryId);
			?>
				<div class="list_class-8b">
					<div class="div_150">
						<span class="txt_12"><?php if(isset($user->userpersonaldetails->country))echo $user->userpersonaldetails->country->name;else  echo $country->name?> </span>
					</div>
				</div>
			</div>

			<!--closing personal details-section-4-->
			<!--personal details-section-5-->
			<div class="clear"></div>


			<div class="list_class">
				<p class="txt_bldn">Residing State</p>
			</div>
			<div class="list_class-6">
			<?php

			$records = States::model()->findAll("active = 1");
			$list = CHtml::listData($records, 'stateId', 'name');
			echo CHtml::dropDownList('state',$user->userpersonaldetails->stateId,$list,array('empty' => 'State','class'=>'validate[required] select_small_h22')); ?>

			</div>
			<!--closing personal details-section-5-->
			<!--personal details-section-6-->
			<div class="clear"></div>
			<div class="list_class">
				<p class="txt_bldn">Residing District</p>
			</div>
			<div class="list_class-6">
			<?php

			$records = Districts::model()->findAll("active = 1");
			$list = CHtml::listData($records, 'districtId', 'name');
			echo CHtml::dropDownList('district',null,$list,array('empty' => 'District','class'=>'validate[required] select_small_h22')); ?>

			</div>
			<!--closing personal details-section-6-->
			<!--personal details-section-7-->
			<div class="clear"></div>
			<div class="list_class">
				<p class="txt_bldn">
					Residing Municipality<br />Corperation/ Panchayatht
				</p>
			</div>
			<div class="list_class-6">
			<?php

			$records = Places::model()->findAll("active = 1");
			$list = CHtml::listData($records, 'placeId', 'name');
			echo CHtml::dropDownList('place',null,$list,array('empty' => 'Places','class'=>'validate[required] select_small_h22')); ?>

			</div>
			<div class="clear"></div>
			<p class="space-15px">&nbsp;</p>
			<div class="line"></div>
			<!--closing personal details-section-7-->
			<!--personal contact details-section-1-->


			<p class="space-10px">&nbsp;</p>
			<p class="text_pink-hd">Personal contact details</p>
			<div class="clear"></div>


			<div class="space-10px"\>
				<p>&nbsp;</p>
			</div>


			<div style="float: left; width: 100%;">
				<div class="list_com">
					<!--list_class-new_div_1-->
					<p class="txt_bld">Communication Address</p>
				</div>
				<!--/list_class-new_div_1-->
			</div>

			<div style="float: left; width: 100%;">
				<div class="list_com">
					<!--list_class-new_div_1-->
					<p class="txt_bld">&nbsp;</p>
				</div>
				<!--/list_class-new_div_1-->
				<div class="list_class-new_div_2">
					<!--list_class-new_div_2-->
					<input type="text" name="house" id="house" class="validate[required] addres_form"
						placeholder="House Name / No." />
				</div>
				<div class="list_input_div_2">
					<!--list_class-new_div_2-->
					<input type="text" name="houseplace" id="place" class="validate[required] addres_form"
						placeholder="Place" />
				</div>
			</div>


			<div style="float: left; width: 100%;">
				<div class="list_com">
					<!--list_class-new_div_1-->
					<p class="txt_bld">&nbsp;</p>
				</div>
				<!--/list_class-new_div_1-->
				<div class="list_class-new_div_2">
					<!--list_class-new_div_2-->
					<input type="text" name="post" id="post" class="validate[required] addres_form"
						placeholder="Post Office" />
				</div>
				<div class="list_input_div_2">
					<!--list_class-new_div_2-->
					<input type="text" name="postcode" id="postcode" class="validate[required,custom[integer],maxSize[6]] addres_form"
						placeholder="Post Code" />
				</div>
			</div>




			<div style="float: left; width: 100%;">
				<div class="list_com">
					<!--list_class-new_div_1-->
					<p class="txt_bld">&nbsp;</p>
				</div>
				<!--/list_class-new_div_1-->
				<div class="list_class-new_div_2">
					<!--list_class-new_div_2-->
					<input type="text" name="housecity" id="city" class="validate[required] addres_form"
						placeholder="City" />
				</div>
				<div class="list_input_div_2">
					<!--list_class-new_div_2-->
					<input type="text" name="housedistrict" id="district" class="validate[required] addres_form"
						placeholder="District" />
				</div>
			</div>



			<div style="float: left; width: 100%;">
				<div class="list_com">
					<!--list_class-new_div_1-->
					<p class="txt_bld">&nbsp;</p>
				</div>
				<div class="list_class-new_div_2">
					<!--list_class-new_div_2-->
					<input type="text" name="housestate" id="state" class="validate[required] addres_form"
						placeholder="State" />
				</div>
				<!--/list_class-new_div_1-->
				<div class="list_input_div_2">
					<!--list_class-new_div_2-->
					<input type="text" name="housecountry" id="country" class="validate[required] addres_form"
						placeholder="Country" />
				</div>

			</div>






			<div class="clear"></div>






			<!--closing personal contact details-section-1-->
			<!--personal contact details-section-2-->
			<p class="clear">&nbsp;</p>
			<!--closing personal contact details-section-1-->
			<!--personal contact details-section-2-->
			<div class="clear"></div>

			<div style="float: left; width: 100%;">
				<div class="mm_class">
					<p class="txt_bldn">Mobile No.</p>
				</div>
				<div class="list_div-8 ">
					<div class="div_150">
						<span class="txt_12"><?php echo $userPersonal->mobilePhone; ?> </span>
					</div>
				</div>

			</div>


			<div style="float: left; width: 100%;">
				<div class="mm_class">
					<p class="txt_bldn">Landline No.</p>
				</div>
				<div class="list_div-8">
					<div class="div_150">
						<span class="txt_12"><?php 
						echo $userPersonal->landPhone ?> </span>
					</div>
				</div>

			</div>


			<!--closing personal contact details-section-2-->
			<!--personal contact details-section-3-->
			<div class="clear"></div>
			<div style="float: left; width: 100%;">
				<div style="float: left; width: 55%;">
					<div class="list_class-7">
						<p class="txt_bld-4">
							Altranative Mobile No.<br /> 
							Facebook URL<br /> Skype<br /> Google IM<br /> Yahoo IM
						</p>
					</div>

					<div class="list_class-textfield">
						<input type="text" name="alterMobile" id="alterMobile"
							class="validate[required,funcCall[validatePhone]] addres_form" /> <input type="text"
							name="facebook" id="facebook" class="validate[required] addres_form" /> <input
							type="text" class="validate[required] addres_form" name="skype" id="skype" /> <input
							type="text" class="validate[required] addres_form" name="google" id="google" /> <input
							type="text" class="validate[required] addres_form" name="yahoo" id="yahoo" />

					</div>
				</div>

			</div>
			<div class="clear"></div>
			<div class="clear"></div>
        <div class="list_ss-7">
        <p class="txt_bldn"><span class="txt_bld_new">Who can view above detals</span></p>
        </div> 
        <div class="list_class-8"><p class="radio-4">
          <input type="radio" name="pcontact" class="validate[required] radio" value="subscribers">&nbsp;Subscribers</p>
                            <p class="radio-4">
                            <input type="radio" name="pcontact" class="validate[required] radio" value="request">&nbsp;By request</p>
                            
           
                            
        </div>
			<!--closing personal contact details-section-3-->
			<div class="clear"></div>
			<p class="space-15px">&nbsp;</p>
			<div class="line"></div>
			<!--closing personal details-section-7-->
			<!--personal contact details-section-1-->
			<p class="space-10px">&nbsp;</p>
			<p class="text_pink-hd">Physical attribute</p>
			<div class="clear"></div>
			<div class="list_class">
				<p class="txt_bldn">Height in cm</p>
			</div>
			<div class="list_class-4">
				<div class="list_fdf-textfield">
					<input type="text" class="validate[required,custom[integer],min[100],max[250]] addres_form" name="height" id="height" />
				</div>
				<div class="clear"></div>
			</div>

			<!--closing personal contact details-section-1-->

			<!--personal contact details-section-2-->
			<div style="float: left; width: 100%;">
				<div class="list_class">
					<p class="txt_bldn">Weight in Kg</p>
				</div>

				<div class="list_class-4">
					<div class="list_fdf-textfield">
						<input type="text" class="validate[required,custom[integer],min[30],max[150]] addres_form" name="weight" id="weight" />
					</div>
				</div>
				<!--closing personal contact details-section-1-->
				<!--personal contact details-section-2-->
				<div class="clear"></div>



				<div class="div_ww">
					<div class="list_class">
						<p class="txt_bldn">
							Body Type<span class="txt_bld-18"></span>
						</p>
					</div>
					<div class="bb1_6">
						<p class="radio_135">
							<input type="radio" name="bodyType" class="validate[required] radio" value="0">&nbsp;&nbsp;Average
						</p>
						<p class="radio_135">
							<input type="radio" name="bodyType" class="validate[required] radio" value="1">&nbsp;&nbsp;Athletic
						</p>
						<p class="radio_90">
							<input type="radio" name="bodyType" class="validate[required] radio" value="2">&nbsp;&nbsp;Slim
						</p>
						<p class="radio_135">
							<input type="radio" name="bodyType" class="validate[required] radio" value="3">&nbsp;&nbsp;Heavy
						</p>
					</div>

				</div>



				<div class="clear"></div>
				<div class="list_class">
					<p class="txt_bldn">
						Complexion<span class="txt_bld-18">*</span>
					</p>
				</div>
				<div class="bb1_6">
					<p class="radio_135">
						<input type="radio" name="complexion" class="validate[required] radio" value="0">&nbsp;&nbsp;Very
						Fair
					</p>
					<p class="radio_135">
						<input type="radio" name="complexion" class="validate[required] radio" value="1">&nbsp;&nbsp;Fair
					</p>
					<p class="radio_90">
						<input type="radio" name="complexion" class="validate[required] radio" value="2">&nbsp;&nbsp;Wheatish
					</p>
					<p class="radio_145">
						<input type="radio" name="complexion" class="validate[required] radio" value="3" />
						&nbsp;&nbsp;Wheatish&nbsp;brown
					</p>
					<p class="radio_135">
						<input type="radio" name="complexion" class="validate[required] radio" value="4" />
						&nbsp;&nbsp;Dark
					</p>
				</div>

				<div class="clear"></div>
				<div class="list_class">
					<p class="txt_bldn">
						Physical status <span class="txt_bld-18">*</span>
					</p>
				</div>
				<div class="bb1_6">
					<p class="radio_135">
						<input type="radio" name="physical" value="0">&nbsp;&nbsp;Normal
					</p>
					<p class="radio_155">
						<input type="radio" name="physical" value="1" />
						&nbsp;&nbsp;Physically challenged
					</p>
				</div>

				<div class="clear"></div>
				<p class="space-15px">&nbsp;</p>
				<div class="line"></div>
				<!--closing personal details-section-7-->
				<!--personal contact details-section-1-->
				<p class="space-10px">&nbsp;</p>

				<p class="text_pink-hd">Education and Occupation</p>

				<div class="clear"></div>





				<div class="div_ww" style="margin-top: 20px;">

					<div class="list_dd_ff">
						<p class="txt_bld">Education*</p>
					</div>
					<?php

					$records = EducationMaster::model()->findAll("active = 1");
					$list = CHtml::listData($records, 'educationId', 'name');
					echo CHtml::dropDownList('education',null,$list,array('empty' => 'Education','class'=>'validate[required] select_small_h22')); ?>

				</div>

				<div class="clear"></div>

				<div class="div_ww">
					<div class="list_com">
						<!--list_class-new_div_1-->
						<p class="txt_bld">Occupation *</p>
					</div>
					<!--/list_class-new_div_1-->

					<?php

					$records = OccupationMaster::model()->findAll("active = 1");
					$list = CHtml::listData($records, 'occupationId', 'name');
					echo CHtml::dropDownList('occupation',null,$list,array('empty' => 'Occupation','class'=>'validate[required] select_small_h22')); ?>
				</div>


				<p class="clear">&nbsp;</p>


				<!--closing personal contact details-section-1-->
				<!--personal contact details-section-2-->
				<div class="clear"></div>


				<div class="div_ww">
					<div class="list_class">
						<p class="txt_bldn">
							Employed in *<span class="txt_bld-18"></span>
						</p>
					</div>
					<div class="list_xx">
						<p class="radio_135">
							<input type="radio" name="employed" class="validate[required] radio"  value="0">&nbsp;&nbsp;Government
						</p>
						<p class="radio_auto">
							<input type="radio" name="employed" class="validate[required] radio" value="1">&nbsp;&nbsp;Private
						</p>
						<p class="radio_auto">
							<input type="radio" name="employed" class="validate[required] radio" value="2">&nbsp;&nbsp;Business
						</p>
						<p class="radio_auto">
							<input type="radio" name="employed" class="validate[required] radio" value="3" />
							&nbsp;&nbsp;Defence
						</p>
						<p class="radio_auto">
							<input type="radio" name="employed" class="validate[required] radio" value="4" />
							&nbsp;&nbsp;Self&nbsp;Employed
						</p>
						<p class="radio_auto">
							<input type="radio" name="employed" class="validate[required] radio" value="5" />&nbsp;&nbsp;NRI
						</p>
					</div>

				</div>



				<div class="clear"></div>

				<div class="div_ww">
					<div class="list_class">
						<p class="txt_bldn">Income</p>
					</div>

					<div class="list_xx">
						<p class="radio_135">
							<input type="radio" name="ctc" class="validate[required] radio" value="12" /> &nbsp;&nbsp;Monthly
						</p>
						<p class="radio_90">
							<input type="radio" name="ctc" class="validate[required] radio" value="1" /> &nbsp;&nbsp;Annual
						</p>

						<div class="small_form_box">
							<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/money_icon.jpg" class="rupee" />
							<p class="txt_bld-10">
								<input type="text" class="validate[required,custom[integer]] small_form_1" id="income"
									name="income" placeholder="Use Rupees" /><span class="rupee_1">1,00,000
									per month</span>
							</p>
						</div>
					</div>
				</div>


				<!--personal contact details-section-2-->
				<div class="clear"></div>
				<p class="space-15px">&nbsp;</p>
				<div class="line"></div>
				<!--closing personal details-section-7-->
				<!--personal contact details-section-1-->
				<p class="space-10px">&nbsp;</p>
				<p class="text_pink-hd">Habits</p>
				<div class="clear"></div>
				<!--closing personal contact details-section-1-->
				<!--personal contact details-section-2-->
				<p class="clear">&nbsp;</p>
				<!--closing personal contact details-section-1-->
				<!--personal contact details-section-2-->
				<div class="clear"></div>



				<div class="div_ww">
					<div class="list_class">
						<p class="txt_bldl">Food</p>
					</div>


					<div class="list_xx">
						<p class="radio_135">
							<input type="radio" name="food" class="validate[required] radio" value="0">&nbsp;&nbsp;Vegetarian
						</p>
						<p class="radio_145">
							<input type="radio" name="food" class="validate[required] radio" value="1" />
							&nbsp;&nbsp;Non&nbsp;Vegetarian
						</p>
						<p class="radio_135">
							<input type="radio" name="food" value="2" class="validate[required] radio" >&nbsp;&nbsp;Eggetarian
						</p>
					</div>
				</div>

				<div class="clear"></div>

				<div class="div_ww">
					<div class="list_class">
						<p class="txt_bldl">Smoking</p>
					</div>
					<div class="list_xx">
						<p class="radio_135">
							<input type="radio" name="smoke" value="0" class="validate[required] radio" /> &nbsp;&nbsp;No
						</p>
						<p class="radio_145">
							<input type="radio" name="smoke" value="1" class="validate[required] radio" />
							&nbsp;&nbsp;Occasionally
						</p>
						<p class="radio_145">
							<input type="radio" name="smoke" value="2" class="validate[required] radio" /> &nbsp;&nbsp;Yes
						</p>
					</div>
				</div>
				<div class="clear"></div>

				<div class="div_ww">
					<div class="list_class">
						<p class="txt_bldl">Drinking</p>
					</div>

					<div class="list_xx">
						<p class="radio_135">
							<input type="radio" name="drink" value="0" class="validate[required] radio" /> &nbsp;&nbsp;No
						</p>
						<p class="radio_145">
							<input type="radio" name="drink" value="1" class="validate[required] radio" />
							&nbsp;&nbsp;Occasionally
						</p>
						<p class="radio_135">
							<input type="radio" name="drink" value="2" class="validate[required] radio" /> &nbsp;&nbsp;Yes
						</p>
					</div>
				</div>

				<div class="clear"></div>
				<p class="space-15px">&nbsp;</p>
				<div class="line"></div>
				<!--closing personal details-section-7-->
				<!--personal contact details-section-1-->
				<p class="space-10px">&nbsp;</p>
				<p class="text_pink-hd">Family profile</p>
				<div class="clear"></div>
				<!--closing personal contact details-section-1-->
				<!--personal contact details-section-2-->
				<p class="clear">&nbsp;</p>
				<!--closing personal contact details-section-1-->
				<!--personal contact details-section-2-->
				<div class="clear"></div>

				<div class="div_ww">
					<div class="list_class">
						<p class="txt_bldl">Family status*</p>
					</div>
					<div class="list_xx">
						<p class="radio_135">
							<input type="radio" name="status" value="3" class="validate[required] radio" /> &nbsp;Rich
						</p>
						<p class="radio_145">
							<input type="radio" name="status" value="2" class="validate[required] radio" /> Upper Middleclass
						</p>
						<p class="radio_135">
							<input type="radio" name="status" value="1" class="validate[required] radio" /> &nbsp;&nbsp;Middle
							class
						</p>
						<p class="radio_145">
							<input type="radio" name="status" value="0" class="validate[required] radio" />
							Lower&nbsp;middleclass
						</p>

						<p class="radio_auto">
							<input type="radio" name="status" value="4" class="validate[required] radio" /> &nbsp;Affluent
						</p>
					</div>
				</div>

				<div class="clear"></div>
				<div class="clear"></div>

				<div class="div_ww">
					<div class="list_class">
						<p class="txt_bldl">Family type*</p>
					</div>
					<div class="list_xx">
						<p class="radio_135">
							<input type="radio" name="type" value="0" class="validate[required] radio" /> &nbsp;&nbsp;Joint
						</p>
						<p class="radio_135">
							<input type="radio" class="validate[required] radio" name="type" value="1" /> &nbsp;&nbsp;Nuclear
						</p>
					</div>
				</div>
				<div class="clear"></div>

				<div class="div_ww">
					<div class="list_class-5">
						<p class="txt_bldl">Family values</p>
					</div>

					<div class="list_xx">
						<p class="radio_135">
							<input type="radio" name="familyValues" value="0" class="validate[required] radio" />
							&nbsp;&nbsp;Orthodox
						</p>
						<p class="radio_135">
							<input type="radio" name="familyValues" value="1" class="validate[required] radio" />
							&nbsp;&nbsp;Traditional
						</p>
						<p class="radio_135">
							<input type="radio" name="familyValues" value="2" class="validate[required] radio" />
							&nbsp;&nbsp;Moderate
						</p>
						<p class="radio_135">
							<input type="radio" name="familyValues" value="3" class="validate[required] radio" />
							&nbsp;&nbsp;Liberal
						</p>
					</div>
				</div>




				<div class="clear"></div>
				<div class="div_ww">
					<div class="list_class">
						<p class="txt_bldl">Brothers</p>
					</div>

					<div class="list_xx">
						<div class="list_class-textfield_age">
							<input type="text"  name="brothers" class="validate[required,custom[integer]]"
								id="brothers" />
						</div>
						<p class="radio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Married</p>
						<div class="list_class-textfield_age">
							<input type="text" name="brothersMarry" class="validate[required,custom[integer]]"
								id="brothersMarry" />
						</div>
					</div>
				</div>


				<div class="clear"></div>
				<div class="div_ww">
					<div class="list_class">
						<p class="txt_bldl">Sisters</p>
					</div>
					<div class="list_xx">
						<div class="list_class-textfield_age">
							<input type="text"  name="sisters" class="validate[required,custom[integer]]"
								id="sisters" />
						</div>
						<p class="radio">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Married</p>
						<div class="list_class-textfield_age">
							<input type="text" name="sistersMarry" class="validate[required,custom[integer]]"
								id="sistersMarry" />
						</div>
					</div>
				</div>

		 <div class="clear"></div>
        <div class="list_class-5">
          <p class="txt_bldl">Upload Family Photo</p>
        </div>
<div class="list_class-6">
          <div class="list_class-textfield_age-1">
           <?php echo CHtml::activeFileField($user, 'familyAlbum'); ?>
                  </div>
</div>

  <div class="clear"></div>
  
   <div class="div_ww"> 
        <div class="list_class">
          <p class="txt_bldl">Who can view my photo</p>
        </div>
<div class="list_xx">
<p class="radio-2b">
          <?php echo CHtml::checkBoxList('family',null,array('all'=>'All','subscribers'=>'Subscribers','member'=> 'Logged Members','request' => 'By Request'),array('class'=>'validate[minCheckbox[1]] checkbox')); ?>
          </p> </div>



		




				<div class="clear"></div>

				<div class="div_ww">
					<div class="list_class">
						<p class="txt_bldl">Discribsion about my family</p>
					</div>
					<div class="list_xx">


						<textarea name="familyDesc" rows="2" cols="20" class="validate[required] text-input tab_300b">

</textarea>

					</div>

				</div>


				<div class="clear"></div>
				<p class="space-15px">&nbsp;</p>
				<div class="line"></div>
				<!--closing personal details-section-7-->
				<!--personal contact details-section-1-->
				<p class="space-10px">&nbsp;</p>
				<p class="text_pink-hd">Description</p>
				<div class="clear"></div>



				<div class="clear"></div>

				<div class="div_ww">
					<div class="list_class">
						<p class="txt_bldl">Discribsion about me</p>
					</div>
					<div class="list_class-6">


						<textarea rows="2" cols="20" name="myDesc" class="validate[required] text-input tab_300b">

</textarea>
					</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>

			<div class="space-25px">
				<p>&nbsp;</p>
			</div>

			<div class="clear"></div>
			<div class="right-10">
				<input type="reset" value="Reset" name="yt1" class="reset_sub"> <input
					type="submit" value="Submit" name="yt0" class="reset_sub">

			</div>
		</form>

	</div>











	<div id="content-right_sub">
		<div class="div_r_1">
			<!--div_r-->

			<p class="text_20_gery">
				Subscribe Now!<br /> Only for
			</p>
			<div style="float: left; width: 100%;">
				<a href="#"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/img_200.jpg" class="left"
					style="width: 100%;" border="0" /> </a>
			</div>
			<div class="clear"></div>

			<div class="line"></div>

			<p class="text_20_cntr">Benefits For Subsciribed Users</p>

			<p class="text_18_cntr">
				Contact members directly<br /> Send personalised messaages<br />
				View Album, Documents, and contact<br /> details<br /> View
				horoscope of members<br /> Express Unlimited interest<br /> Plus
				other exclusive paid membership <br /> benefits
			</p>



			<div class="line"></div>

			<p class="text_20_cntr">
				<a href="#">Payment Options</a>
			</p>

			<p class="text_banner">You have three payment options, Choose any one
				for you Only for</p>

			<div class="center_icon">
				<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/1_round.jpg" />
			</div>

			<p class="text_20_cntr">
				<a href="#">Activation Coupon</a>
			</p>

			<p class="text_banner">
				You can subscribe through activation coupon which you can purchase
				from your nearest re-sellers. <span class="span_blue"> Click here</span>
				to find your nearest re-seller
			</p>


			<div class="center_icon">
				<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/2_round.jpg" />
			</div>

			<p class="text_20_cntr">
				<a href="#">NetBanking</a>
			</p>

			<p class="text_banner">
				We are accepting major banks Net Transfer and Debit card transaction
				through Online. <span class="span_blue"> Click here</span> to find
				our banking partners
			</p>


			<div class="center_icon">
				<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/3_round.jpg" />
			</div>

			<p class="text_20_cntr">
				<a href="#">Credit card and Paypal</a>
			</p>

			<p class="text_banner">
				We are accepting Visa, Master and Rupay cards and paypal.<span
					class="span_blue"> Click here</span> to go payment page.<br /> <br />
			</p>


			<p class="text_20_blue">
				<a href="payment_benefits.html">SUBSCRIBE NOW!</a>
			</p>
		</div>
		<!--right-content closing-->
	</div>
	
</div>	
	<!--main-content closing-->
	
	
<script type="text/javascript">
$(document).ready(function(){
    $("#userContact").validationEngine('attach');
  });


</script>	
	