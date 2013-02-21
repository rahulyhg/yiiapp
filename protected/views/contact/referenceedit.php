<div class="subContent">
			<section class="subHead">
				<h1 class="width100">Edit Referance Contact Details</h1>
			</section><?php 
			$user = Yii::app()->session->get('user');
		$referenceList = $user->references;
		?>
			<section class="subContnr">
			<form id="userContact" name="userContact" method="post" action="/contact/referenceedit">
				<article class="section width100">
					<ul>
						<li>
							<div class="title">
								Referance Person 1
							</div>
							<div class="info">
								<div class="inner-row">
									<div class="inputH">Name </div>
									<input type="text" value="<?php if(isset($referenceList[0]))$referenceList[0]->referName?>" name="name0" class="validate[minSize[3],custom[onlyLetterSp]]" id="name0" placeholder="Name" />
								</div>
								<div class="inner-row">
									<div class="inputH">House Name / No.</div>
									<input type="text" value="<?php if(isset($referenceList[0]))$referenceList[0]->referHouseName?>" name="house0" id="house0" class="validate[minSize[3]]" placeholder="House Name / No." />
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">Place</div>
										<input type="text" value="<?php if(isset($referenceList[0]))$referenceList[0]->referPlace?>" name="place0" id="place0" class="validate[minSize[3],custom[onlyLetterSp]]"  placeholder="Place" />
									</div>
									<div class="tHolder">
										<div class="inputTx">Corporation/municipality/panchayath</div>
										<input type="text" value="<?php if(isset($referenceList[0]))$referenceList[0]->referPostOffice?>" name="post0" id="post0"  placeholder="panchayath/municipality/corparation" class="validate[minSize[3],custom[onlyLetterSp]]"   />
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">City</div>
										<input type="text" name="city0" value="<?php if(isset($referenceList[0]))$referenceList[0]->referCity?>" id="city0" placeholder="City" class="validate[minSize[3],custom[onlyLetterSp]]"/>
									</div>
									<div class="tHolder">
										<div class="inputTx">District</div>
										<input type="text" value="<?php if(isset($referenceList[0]))$referenceList[0]->referDistrict?>" name="district0" id="district0"  placeholder="District" class="validate[minSize[3],custom[onlyLetterSp]]"  />
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">State</div>
										<input type="text" value="<?php if(isset($referenceList[0]))$referenceList[0]->referState?>" name="state0" id="state0" placeholder="State" class="validate[minSize[3],custom[onlyLetterSp]]"   />
									</div>
									<div class="tHolder">
										<div class="inputTx">Country</div>
										<input type="text" value="<?php if(isset($referenceList[0]))$referenceList[0]->referPostcode?>" name="country0" id="country0" placeholder="Country" class="validate[minSize[3],custom[onlyLetterSp]]"   />
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">Pincode</div>
										<input type="text" value="<?php if(isset($referenceList[0]))$referenceList[0]->referPostcode?>" name="pin0" id="pin0" placeholder="Pin Code" class="validate[custom[onlyNumberSp],minSize[6],maxSize[6]]"  />
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">Email</div>
										<input type="text" value="<?php if(isset($referenceList[0]))$referenceList[0]->referEmail?>" name="email0" id="email0"  placeholder="Email" class="validate[funcCall[checkEmailValidation]]"/>
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">Occupation</div>
										<input type="text" value="<?php if(isset($referenceList[0]))$referenceList[0]->referOccupation?>" name="occupation0" id="occupation0" placeholder="Occupation" class="validate[minSize[3],custom[onlyLetterSp]]"  />
									</div>
								</div>
								<div class="inner-row">
								<?php 
								
								$tme1 = 0;
								$am1 = 0;
								$tme2 = 0;
								$am2 = 0;
								if(isset($referenceList[0]->referCallFrom) && !empty($referenceList[0]->referCallFrom)){		
											$times = explode("-", $referenceList[0]->referCallFrom);
											if(isset($times[0]))
											{
												$time1 = explode(":", $times[0]);
												if(isset($time1))
												{
													$tme1 = $time1[0];
													$am1 = $time1[1];
												}
											}
											if(isset($times[1]))
											{
												$time2 = explode(":", $times[1]);
												if(isset($time2))
												{
													$tme2 = $time2[0];
													$am2 = $time2[1];
												}
											}
								}
										?>
									<div class="inputCl">
										<div class="inputH">Time to Call</div>
										<div class="info width100">
										<?php echo CHtml::dropDownList('timeFrom0',null,Utilities::getTime(),array('empty'=>'Time','class'=>'wid60 mR5','options' => array($tme1 =>array('selected'=>true)))); ?>
											<?php echo CHtml::dropDownList('fromA0',null,Utilities::getMeridiem(),array('empty'=>'AM/PM','class'=>'wid50 mR5','options' => array($am1 =>array('selected'=>true)))); ?>	
										     <?php echo CHtml::dropDownList('timeTo0',null,Utilities::getTime(),array('empty'=>'Time','class'=>'wid60 mR5','options' => array($tme2 =>array('selected'=>true)))); ?>
										     <?php echo CHtml::dropDownList('toA0',null,Utilities::getMeridiem(),array('empty'=>'AM/PM','class'=>'wid50','options' => array($am2 =>array('selected'=>true)))); ?>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<ul>
						<li class="mT20">
							<div class="title">
								Referance Person 2
							</div>
							<div class="info">
								<div class="inner-row">
									<div class="inputH">Name </div>
									<input type="text" value="<?php if(isset($referenceList[1]))$referenceList[1]->referName?>"  name="name1" class="validate[minSize[3],custom[onlyLetterSp]]"  id="name1" placeholder="Name" />
								</div>
								<div class="inner-row">
									<div class="inputH">House Name / No.</div>
									<input type="text" value="<?php if(isset($referenceList[1]))$referenceList[1]->referHouseName?>" name="house1" id="house1" placeholder="House Name / No." class="validate[minSize[3]]"  />
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">Place</div>
										<input type="text" name="place1" id="place1"  value="<?php if(isset($referenceList[1]))$referenceList[1]->referName?>" placeholder="Place" class="validate[minSize[3],custom[onlyLetterSp]]" />
									</div>
									<div class="tHolder">
										<div class="inputTx">Corporation/municipality/panchayath</div>
										<input type="text" name="post1" id="post1"  value="<?php if(isset($referenceList[1]))$referenceList[1]->referPostOffice?>" placeholder="Corporation/municipality/panchayath" class="validate[minSize[3],custom[onlyLetterSp]]" />
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">City</div>
										<input value="<?php if(isset($referenceList[1]))$referenceList[1]->referCity?>" type="text" name="city1" id="city1" placeholder="City" class="validate[minSize[3],custom[onlyLetterSp]]" />
									</div>
									<div class="tHolder">
										<div class="inputTx">District</div>
										<input type="text" value="<?php if(isset($referenceList[1]))$referenceList[1]->referDistrict?>" name="district1" id="district1"  placeholder="District" class="validate[minSize[3],custom[onlyLetterSp]]" />
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">State</div>
										<input type="text" value="<?php if(isset($referenceList[1]))$referenceList[1]->referState?>" name="state1" id="state1" placeholder="State" class="validate[minSize[3],custom[onlyLetterSp]]" />
									</div>
									<div class="tHolder">
										<div class="inputTx">Country</div>
										   <input type="text" value="<?php if(isset($referenceList[1]))$referenceList[1]->referCountry?>" name="country1" id="country1" placeholder="Country" class="validate[minSize[3],custom[onlyLetterSp]]" />
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">Pincode</div>
							<input type="text" value="<?php if(isset($referenceList[1]))$referenceList[1]->referPostcode?>" name="pin1" id="pin1" placeholder="Pin Code" class="validate[custom[onlyNumberSp],minSize[6],maxSize[6]]"/>
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">Email</div>
										<input type="text" value="<?php if(isset($referenceList[1]))$referenceList[1]->referEmail?>" name="email1" id="email1"  placeholder="Email" class="validate[funcCall[checkEmailValidation]]"/>
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">Occupation</div>
										<input type="text" value="<?php if(isset($referenceList[1]))$referenceList[1]->referOccupation?>" name="occupation1" id="occupation1" placeholder="Occupation" class="validate[minSize[3],custom[onlyLetterSp]]" />
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">Time to Call</div>
										<?php 
										$tme1 = 0;
								$am1 = 0;
								$tme2 = 0;
								$am2 = 0;
										if(isset($referenceList[1]->referCallFrom) && !empty($referenceList[1]->referCallFrom)){
											$times = explode("-", $referenceList[1]->referCallFrom);
											if(isset($times[0]))
											{
												$time1 = explode(":", $times[0]);
												if(isset($time1))
												{
													$tme1 = $time1[0];
													$am1 = $time1[1];
												}
											}
											if(isset($times[1]))
											{
												$time2 = explode(":", $times[1]);
												if(isset($time2))
												{
													$tme2 = $time2[0];
													$am2 = $time2[1];
												}
											}
										}
										?>
										
										<div class="info width100">
											<?php echo CHtml::dropDownList('timeFrom1',null,Utilities::getTime(),array('empty'=>'Time','class'=>'wid60 mR5','options' => array($tme1 =>array('selected'=>true)))); ?>
											<?php echo CHtml::dropDownList('fromA1',null,Utilities::getMeridiem(),array('empty'=>'AM/PM','class'=>'wid50 mR5','options' => array($am1 =>array('selected'=>true)))); ?>	
										     <?php echo CHtml::dropDownList('timeTo1',null,Utilities::getTime(),array('empty'=>'Time','class'=>'wid60 mR5','options' => array($tme2 =>array('selected'=>true)))); ?>
										     <?php echo CHtml::dropDownList('toA1',null,Utilities::getMeridiem(),array('empty'=>'AM/PM','class'=>'wid50','options' => array($am2 =>array('selected'=>true)))); ?>
										</div>
									</div>
								</div>
							</div>
						</li>
						</ul>
						<ul>
						<li>
							<div class="title">
								Referance Person 3
							</div>
							<div class="info">
								<div class="inner-row">
									<div class="inputH">Name </div>
									<input type="text" value="<?php if(isset($referenceList[2]))$referenceList[2]->referName?>" name="name2" class="validate[minSize[3],custom[onlyLetterSp]]"  id="name2" placeholder="Name" />
								</div>
								<div class="inner-row">
									<div class="inputH">House Name / No.</div>
									<input type="text" value="<?php if(isset($referenceList[2]))$referenceList[2]->referHouseName?>"  name="house2" id="house2" placeholder="House Name / No." class="validate[minSize[3]]" />
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">Place</div>
										<input type="text" value="<?php if(isset($referenceList[2]))$referenceList[2]->referPlace?>"  name="place2" id="place2"  placeholder="Place"  class="validate[minSize[3],custom[onlyLetterSp]]" />
									</div>
									<div class="tHolder">
										<div class="inputTx">Corporation/municipality/panchayath</div>
										<input type="text" value="<?php if(isset($referenceList[2]))$referenceList[2]->referPostOffice?>"  name="post2" id="post2"  placeholder="Corporation/municipality/panchayath" class="validate[minSize[3],custom[onlyLetterSp]]" />
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">City</div>
										<input value="<?php if(isset($referenceList[2]))$referenceList[2]->referCity?>"  type="text" name="city2" id="city2" placeholder="City" class="validate[minSize[3],custom[onlyLetterSp]]" />
									</div>
									<div class="tHolder">
										<div class="inputTx">District</div>
										<input type="text" value="<?php if(isset($referenceList[2]))$referenceList[2]->referDistrict?>"  name="district2" id="district2"  placeholder="District" class="validate[minSize[3],custom[onlyLetterSp]]" />
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">State</div>
										<input type="text" value="<?php if(isset($referenceList[2]))$referenceList[2]->referState?>"  name="state2" id="state2" placeholder="State" class="validate[minSize[3],custom[onlyLetterSp]]" />
									</div>
									<div class="tHolder">
										<div class="inputTx">Country</div>
										<input value="<?php if(isset($referenceList[2]))$referenceList[2]->referCountry?>"  type="text" name="country2" id="country2" placeholder="Country" class="validate[minSize[3],custom[onlyLetterSp]]" />
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">Pincode</div>
										<input value="<?php if(isset($referenceList[2]))$referenceList[2]->referPostcode?>"  type="text" name="pin2" id="pin2" placeholder="Pin Code" class="validate[custom[onlyNumberSp],minSize[6],maxSize[6]]"/>
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">Email</div>
										<input type="text" value="<?php if(isset($referenceList[2]))$referenceList[2]->referEmail?>"  name="email2" id="email2" class="validate[funcCall[checkEmailValidation]]" placeholder="Email" />
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">Occupation</div>
										<input type="text" value="<?php if(isset($referenceList[2]))$referenceList[2]->referOccupation?>"  name="occupation2" id="occupation2" placeholder="Occupation" class="validate[minSize[3],custom[onlyLetterSp]]" />
									</div>
								</div>
								<div class="inner-row">
									<div class="inputCl">
										<div class="inputH">Time to Call</div>
										<?php 
										$tme1 = 0;
								$am1 = 0;
								$tme2 = 0;
								$am2 = 0;
										if(isset($referenceList[2]->referCallFrom) && !empty($referenceList[2]->referCallFrom)){
											$times = explode("-", $referenceList[2]->referCallFrom);
											if(isset($times[0]))
											{
												$time1 = explode(":", $times[0]);
												if(isset($time1))
												{
													$tme1 = $time1[0];
													$am1 = $time1[1];
												}
											}
											if(isset($times[1]))
											{
												$time2 = explode(":", $times[1]);
												if(isset($time2))
												{
													$tme2 = $time2[0];
													$am2 = $time2[1];
												}
											}
										}
										?>
										
										<div class="info width100">
											<?php echo CHtml::dropDownList('timeFrom2',null,Utilities::getTime(),array('empty'=>'Time','class'=>'wid60 mR5','options' => array($tme1 =>array('selected'=>true)))); ?>
											<?php echo CHtml::dropDownList('fromA2',null,Utilities::getMeridiem(),array('AM/PM'=>'Time','class'=>'wid50 mR5','options' => array($am1 =>array('selected'=>true)))); ?>	
										     <?php echo CHtml::dropDownList('timeTo2',null,Utilities::getTime(),array('empty'=>'Time','class'=>'wid60 mR5','options' => array($tme2 =>array('selected'=>true)))); ?>
										     <?php echo CHtml::dropDownList('toA2',null,Utilities::getMeridiem(),array('AM/PM'=>'Time','class'=>'wid50','options' => array($am2 =>array('selected'=>true)))); ?>
										</div>
									</div>
								</div>
							</div>
						</li>
						<?php $privacy =  $user->privacy(array('condition'=>"items='reference'"));
						$alValues = array();
						if(isset($privacy[0]))
						{
							$alValue = $privacy[0];
							$alValues = explode(',',$alValue->privacy);
						}
	?>
						<li>
							<div class="title">
								Who can view above detals 
							</div>
							<div class="info">
								<div class="check">
								<input type="checkbox" name="reference[]" <?php if(in_array('subscribers', $alValues)) { ?> checked="checked"<?php }?> value="subscribers"><span>Subscribers</span>
								</div>
								<div class="check">
									<input type="checkbox" name="reference[]" <?php if(in_array('request', $alValues)) { ?> checked="checked"<?php }?> value="request"><span>By Request</span>
								</div>
							</div>
						</li>
						<li>
						<input type="button" name="cancelPhoto" id="cancelPhoto" value="Cancel" class="type2b mL5" onclick="javascript:closeOverlay();" />
						<input type="submit" name="updatePhoto" id="updatePhoto" value="Update" class="type2b mL5" />
						</li>
					</ul>
				</article>
				</form>
			</section>
			
<script type="text/javascript">
$(document).ready(function(){
    $("#userContact").validationEngine('attach');

    $("input:reset").click(function() {       // apply to reset button's click event
        this.form.reset();                    // reset the form
        // clear the form error validations      
    	$("#userContact").validationEngine('hideAll');
         return false;                         // prevent reset button from resetting again
    });
    
  });


</script>			