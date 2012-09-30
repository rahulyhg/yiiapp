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
 * @title myreference.php
 * @description <Description of this class>
 *  @filesource <URL>
 *  @version <Revision>
 */
?>


<!--head closing-->
<!--main-content-->
<div id="main-content">
	<!--left-content-->

  <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
	<!--center profile details closing-->
	<div id="content-right-02">
		<div class="div_mdla">

			<p class="text_pink-hd">My Refference</p>
			<div class="right">
				<a href="#" onmouseout="MM_swapImgRestore()"
					onmouseover="MM_swapImage('Image24','','<?php echo Yii::app()->params['mediaUrl']; ?>/add_new_ref.jpg',1)"><img
					src="<?php echo Yii::app()->params['mediaUrl']; ?>/add_new_ref_ash.jpg"
					name="Image24" width="120" height="22" border="0" id="Image24"
					class="button_request" /> </a>
			</div>
			<div class="space-10px">
					<p>&nbsp;</p>
				</div>
			<div class="clear"></div>
			<div class="line-new-1"></div>

			<?php foreach ($referenceList as $key => $model) { ?>
				
			
			<div class="div_mdl_space_left_sub">
				<p class="left2">
					<span class="text_pink"><strong><b>Refference Person</b>
							&nbsp;&nbsp;&nbsp;1</strong> </span>
				</p>
				<p class="txt_color_1"></p>
			</div>

			<p class="txt_color_1">
				<span class="text_blue"><strong><a href="#">Edit</a> </strong> </span>
			</p>


			<div class="clear"></div>




			<div class="div_mdl_space_1">
				<!--div_mdl_space_1-->

				<div class="div_mdl_space_left_sub">
					<!--div_mdl_space_left-->

					<p class="txt_bld_nm">Contact Persons Name</p>
				</div>
				<!--/div_mdl_space_left-->

				<div class="div_mdl_space_mdl_sub">
					<!--div_mdl_space_mdl-->

					<p class="txt_nm"><?php if(isset($model->referName))echo $model->referName ?></p>
				</div>
				<!--/div_mdl_space_mdl-->

			</div>
			<!--/div_mdl_space_1-->


			<div class="div_mdl_space_1">
				<!--div_mdl_space_1-->

				<div class="div_mdl_space_left_sub">
					<!--div_mdl_space_left-->

					<p class="txt_bld_nm">Convineance Time to call</p>
				</div>
				<!--/div_mdl_space_left-->

				<div class="div_mdl_space_mdl_sub">
					<!--div_mdl_space_mdl-->

					<p class="txt_nm"><?php if(isset($model->referCallFrom))echo $model->referCallFrom ?></p>

				</div>
				<!--/div_mdl_space_mdl-->




			</div>
			<!--/div_mdl_space_1-->
			<!--  
			<div class="div_mdl_space_1">
				<div class="div_mdl_space_left_sub">
					<p class="txt_bld_nm">Mobile No.</p>
				</div>
				<div class="div_mdl_space_mdl_sub">
					<p class="txt_nm">+91 98471 87600</p>
				</div>
			
			 -->




			<div class="div_mdl_space_1">
				<div class="div_mdl_space_left_sub">
					<p class="txt_bld_nm">Communication address</p>
				</div>

				<div class="div_mdl_space_mdl_sub">
					<!--div_mdl_space_mdl-->
					<p class="txt_nm">
					<?php if(isset($model->referHouseName)) echo $model->referHouseName; echo "<br /> "; 
					if(isset($model->referPlace))echo $model->referPlace; echo "<br/>"; 	
					if(isset($model->referCity))echo $model->referCity; echo "<br/>"; 
					if(isset($model->referState))echo $model->referState;
					  	if(isset($model->referPostcode))echo $model->referPostcode; echo "<br/>"; 
					  	if(isset($model->referPostOffice))echo $model->referPostOffice;  echo "<br/>";	
					  	if(isset($model->referDistrict))echo $model->referDistrict;
					  	echo ","; 
					  	if(isset($model->referCountry))echo $model->referCountry ?>
					</p>
				</div>
				<!--/div_mdl_space_mdl-->



			</div>
			<!--/div_mdl_space_1-->

			<div class="div_mdl_space_1">
				<!--div_mdl_space_1-->

				<div class="div_mdl_space_left_sub">
					<!--div_mdl_space_left-->

					<p class="txt_bld">Email ID.</p>
				</div>
				<!--/div_mdl_space_left-->

				<div class="div_mdl_space_mdl_sub">
					<!--div_mdl_space_mdl-->
					<p class="txt_nm"><?php if(isset($model->referEmail))echo $model->referEmail ?></p>

				</div>
				<!--/div_mdl_space_mdl-->



			</div>
			<!--/div_mdl_space_1-->

			<div class="div_mdl_space_1">
				<!--div_mdl_space_1-->

				<div class="div_mdl_space_left_sub">
					<!--div_mdl_space_left-->

					<p class="txt_bld">Occupation</p>
				</div>
				<!--/div_mdl_space_left-->

				<div class="div_mdl_space_mdl_sub">
					<!--div_mdl_space_mdl-->

					<p class="txt_nm"><?php if(isset($model->referOccupation))echo $model->referOccupation ?></p>
				</div>
				<!--/div_mdl_space_mdl-->




			</div>
			<!--/div_mdl_space_1-->

			<div class="div_mdl_space_1">
				<!--div_mdl_space_1-->

				<div class="div_mdl_space_left_sub">
					<!--div_mdl_space_left-->

					<p class="txt_bld">Relation with boy</p>
				</div>
				<!--/div_mdl_space_left-->

				<div class="div_mdl_space_mdl_sub">
					<!--div_mdl_space_mdl-->

					<p class="txt_nm"><?php if(isset($model->relation))echo $model->relation  ?></p>

				</div>
				<!--/div_mdl_space_mdl-->

				<div class="clear"></div>
				<div class="line-new-1"></div>
				<div class="space-10px">
					<p>&nbsp;</p>
				</div>
				<div class="clear"></div>

			</div>

		<?php }?>

			
				<div class="clear"></div>

				<div class="space-10px">
					<p>&nbsp;</p>
				</div>
				<div class="clear"></div>

				<div class="right">
					<a href="#" onmouseout="MM_swapImgRestore()"
						onmouseover="MM_swapImage('Image25','','<?php echo Yii::app()->params['mediaUrl']; ?>/add_new_ref.jpg',1)"
						class="button"><img
						src="<?php echo Yii::app()->params['mediaUrl']; ?>/add_new_ref_ash.jpg"
						name="Image25" width="120" height="22" border="0" id="Image25" />
					</a>
				</div>
			</div>




			<div class="clear"></div>
			<div class="space-10px">
				<p>
					&nbsp;<br /> <br />
				</p>
			</div>
		</div>



	<!--closing central profile details closing-->

	<!--left-content closing-->
	<!--left-content-->

	<div id="content-right-small-1">
		<div class="div_r_1">
			<!--div_r-->

			<p class="text_20_gery">
				<a href="payment_benefits.html">Subscribe Now!</a><br /> Only for
			</p>

			<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/img_200.jpg"
				class="left" border="0" />
			<p class="text_20_gery">For 3 Months</p>

			<div class="clear"></div>
		</div>

	</div>
</div>
<p class="clear">&nbsp;</p>

