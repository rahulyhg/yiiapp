<?php
/*
*
* $Id$
--------------------------------------------------------------------------------------------------------------------------
* Information contained in this file is the intellectual property of Ladbrokes Plc
* Copyright © 2012 MarryDorr. All Rights Reserved.
* ---------------------------------------------------------------------------------------------------------------------------
*
* @author  Dileep Gopalan
* @title profile.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>
<?php 
$user = Yii::app()->session->get('user');
$heightArray = Utilities::getHeights();
?>
    <section class="data-contnr mT8">
        <div class="mainPro">
			<div class="photoC">
				<!-- load the profile picture -->
				<?php $this->widget('application.widgets.Profilepicture',array('userId'=>$user->userId,'marryId'=>$user->marryId)); ?> 
			</div>
			<ul class="myPd">
				<li>
					<div class="leftCt">Name</div>
					<div class="rightCt">
						<strong>:</strong> <span><?php echo $user->name ?> (<?php echo $user->marryId ?>)</span>
					</div>
				</li>
				<li>
					<div class="leftCt">Religion / Cast </div>
					<div class="rightCt">
						<strong>:</strong> <span><?php if(isset($user->userpersonaldetails->religion))echo $user->userpersonaldetails->religion->name ;?> , <?php if(isset($user->userpersonaldetails->caste))echo $user->userpersonaldetails->caste->name ;?></span>
					</div>
				</li>
				<li>
					<div class="leftCt">Age</div>
					<div class="rightCt">
						<strong>:</strong> <span><?php echo Utilities::getAgeFromDateofBirth($user->dob); ?> Years </span>
					</div>
				</li>
				<li>
					<div class="leftCt">Height</div>
					<div class="rightCt">
						<strong>:</strong> <span><?php if(isset($user->physicaldetails->heightId))echo $heightArray[$user->physicaldetails->heightId]; ?></span>
					</div>
				</li>
				<li>
					<div class="leftCt">Place</div>
					<div class="rightCt">
						<strong>:</strong> <span><?php if(isset($user->userpersonaldetails->place))echo $user->userpersonaldetails->place->name ?></span>
					</div>
				</li>
				<li>
					<div class="leftCt">Education</div>
					<div class="rightCt">
						<strong>:</strong> <span><?php if(isset($user->educations->education))echo $user->educations->education->name?></span>
					</div>
				</li>
				<li>
					<div class="leftCt">Occupation</div>
					<div class="rightCt">
						<strong>:</strong> <span><?php if(isset($user->educations->occupation))echo $user->educations->occupation->name ?></span>
					</div>
				</li>
			</ul>
			<ul class="myPd">
				<li>
					<div class="leftCt">Acconut details </div>
					<div class="rightCt">
						<strong>:</strong> <span>You are subscribed user</span>
					</div>
				</li>
				<li>
					<div class="leftCt">Activity status	</div>
					<div class="rightCt">
						<strong>:</strong> <span>2 days beefore</span>
					</div>
				</li>
			</ul>
		</div>
		<div class="editOpt">
			<div class="butCo">
				<a href="<?php echo Utilities::createAbsoluteUrl('contact','detailsedit'); ?>" id="contactDetailsEdit">Contact (Edit)</a>
			</div>
			<div class="butCo">
				<a href="<?php echo Utilities::createAbsoluteUrl('mypage','editdocument'); ?>" id="documentUpload">Document (Edit)</a>
			</div>
			<div class="butCo">
				<a href="<?php echo Utilities::createAbsoluteUrl('contact','referenceedit'); ?>" id="referenceEdit">Reference (Edit)</a>
			</div>
			<div class="butCo">
				<a href="<?php echo Utilities::createAbsoluteUrl('mypage','editfamilyphoto'); ?>" id="familyphotoUpload">Family album (Edit)</a>
			</div>
			<div class="butCo">
				<a href="<?php echo Utilities::createAbsoluteUrl('mypage','editprofilephoto'); ?>" id="photoUpload">Personal album (Edit)</a>
			</div>
			<div class="butCo">
				<a href="<?php echo Utilities::createAbsoluteUrl('contact','astroedit'); ?>" id="astroEdit">Astro Details (Edit)</a>
			</div>
		</div>
		<div class="editContr">
			<a href="#" class="edit">Edit</a>
			<div class="hText">Personal Information</div>
			<div class="subText">In my own words</div>
			<p >completed MBA,medium complexion,out going with good family values. in search for a moderately religious,well educated partner. completed MBA,medium complexion,out going with good family values. in search for a moderately religious,well educated partner. completed MBA,medium complexion,out going with good family values. in search for a moderately religious,well educated partner. </p>
		</div>
		<div class="editContr">
			<a href="#" class="edit">Edit</a>
			<div class="hText">Basic Details</div>
			<ul class="detSec width50">
				<li>
					<div class="leftCtn">Name</div>
					<div class="rightCtn">
						<strong>:</strong> <span><?php echo $user->name; ?></span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Age</div>
					<div class="rightCtn">
						<strong>:</strong> <span><?php echo Utilities::getAgeFromDateofBirth($user->dob); ?> Years</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Height</div>
					<div class="rightCtn">
						<strong>:</strong> <span><?php if(isset($user->physicaldetails->heightId))echo $heightArray[$user->physicaldetails->heightId]; ?> </span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Language</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Malayalam</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Marital Status</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Unmarried</span>
					</div>
				</li>
			</ul>
			<ul class="detSec width50">
				<li>
					<div class="leftCtn">Body Type / Complexion</div>
					<div class="rightCtn">
						<strong>:</strong> <span><?php echo $user->physicaldetails->complexion; ?></span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Physical Status</div>
					<div class="rightCtn">
						<strong>:</strong> <span><?php echo $user->physicaldetails->bodyType; ?></span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Weight</div>
					<div class="rightCtn">
						<strong>:</strong> <span>64 Kgs / 141 lbs </span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Blood Group</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Not Specified</span>
					</div>
				</li>
			</ul>
		</div>
		<div class="editContr">
			<a href="#" class="edit">Edit</a>
			<div class="hText">Religious Information</div>
			<ul class="detSec width50">
				<li>
					<div class="leftCtn">Religion</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Muslim - Others</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Physical Status</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Muslim - Others / Not Specified</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Caste / Sub Caste</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Doesn't matter</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Horoscope Match</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Not Specified</span>
					</div>
				</li>
			</ul>
		</div>
		<div class="editContr">
			<a href="#" class="edit">Edit</a>
			<div class="hText">Lifestyle</div>
			<ul class="detSec width50">
				<li>
					<div class="leftCtn">Eating Habits</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Non Vegetarian </span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Smoking habits</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Non-smoker</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Caste / Sub Caste</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Doesn't matter</span>
					</div>
				</li>
			</ul>
			<ul class="detSec width50">
				<li>
					<div class="leftCtn">Drinking habits</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Non Drinker </span>
					</div>
				</li>
			</ul>
		</div>
		<div class="editContr">
			<a href="#" class="edit">Edit</a>
			<div class="hText">Location</div>
			<ul class="detSec width50">
				<li>
					<div class="leftCtn">Country</div>
					<div class="rightCtn">
						<strong>:</strong> <span>India</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">State</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Kerala</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Citizenship</div>
					<div class="rightCtn">
						<strong>:</strong> <span>India</span>
					</div>
				</li>
			</ul>
			<ul class="detSec width50">
				<li>
					<div class="leftCtn">City</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Kochi</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Resident Status</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Citizen </span>
					</div>
				</li>
			</ul>
		</div>
		<div class="editContr">
			<a href="#" class="edit">Edit</a>
			<div class="hText">Professional Information</div>
			<ul class="detSec width50">
				<li>
					<div class="leftCtn">Education Category</div>
					<div class="rightCtn">
						<strong>:</strong> <span>MBA / PGDM </span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Occupation</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Not working </span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Education in Detail</div>
					<div class="rightCtn">
						<strong>:</strong> <span>completed MBA </span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Occupation in Detail</div>
					<div class="rightCtn">
						<strong>:</strong> <span>MBA / PGDM </span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Employed in</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Not working </span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Annual Income</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Not Specified </span>
					</div>
				</li>
			</ul>
		</div>
		<div class="editContr">
			<a href="#" class="edit">Edit</a>
			<div class="hText">Family Details</div>
			<ul class="detSec width50">
				<li>
					<div class="leftCtn">Family Values</div>
					<div class="rightCtn">
						<strong>:</strong> <span>MBA / PGDM </span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Family Type</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Not working </span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Family Status</div>
					<div class="rightCtn">
						<strong>:</strong> <span>completed MBA</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Ancestral Origin</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Valluvanad</span>
					</div>
				</li>
				<li class="mT10">
					<div class="leftCtn">Family album</div>
					<div class="rightCtn">
						<strong>:</strong> <span><a href="#">Viwe my family album (5 Photos)</a></span>
					</div>
				</li>
			</ul>
			<ul class="detSec width50">
				<li>
					<div class="leftCtn">Father's Occupation</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Business</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Mother's Occupation</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Nil</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">No of Brother(s)</div>
					<div class="rightCtn">
						<strong>:</strong> <span>1</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">No of Sister(s)</div>
					<div class="rightCtn">
						<strong>:</strong> <span>2/2 married</span>
					</div>
				</li>
			</ul>
		</div>
		<div class="editContr">
			<a href="#" class="edit">Edit</a>
			<div class="hText">About my family</div>
			<p >My dad is into business,mom a simple house wife,got 2 sisters and 1 younger brother.both sisters got married.</p>
		</div>
		<div class="editContr">
			<a href="#" class="edit">Edit</a>
			<div class="hText">My Partner Preference</div>
			<ul class="detSec width100">
				<li>
					<div class="leftCtn">Groom's Age</div>
					<div class="rightCtn">
						<strong>:</strong> <span>24 - 28 Years</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Height</div>
					<div class="rightCtn">
						<strong>:</strong> <span>5 Ft 9 In - 6 Ft 2 In / 175 Cms - 188 Cms</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Marital status</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Unmarried</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Physical Status</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Normal</span>
					</div>
				</li>
				<li class="mT10">
					<div class="leftCtn">Mother Tongue</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Malayalam</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Religion</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Muslim - Others</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Caste</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Caste no bar</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Sub Caste</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Any</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Eating Habit</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Doesn't matter</span>
					</div>
				</li>
				<li class="mT10">
					<div class="leftCtn">Smoking Habits</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Non-smoker</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Drinking Habits</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Non-drinker</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Education</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Bachelors - Engineering / Computers, Medicine - General / Dental / Surgeon /...</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Occupation</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Engineer - Non IT, Doctor</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Annual Income</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Any</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Country</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Any</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Residing State</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Any</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Citizenship</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Any</span>
					</div>
				</li>
				<li>
					<div class="leftCtn">Residing City</div>
					<div class="rightCtn">
						<strong>:</strong> <span>Any</span>
					</div>
				</li>
			</ul>
		</div>
		<div class="editContr">
			<a href="#" class="edit">Edit</a>
			<div class="hText">About my partner</div>
			<p>Expecting moderately religious with high family values and well educated.Expecting moderately religious with high family values and well educated.Expecting moderately religious with high family values and well educated.Expecting moderately religious with high family values and well educated.Expecting moderately religious with high family values and well educated.Expecting moderately religious with high family values and well educated.Expecting moderately religious with high family values </p>
		</div>
    </section>
    	<script type="text/javascript">
$(document).ready(function(){
    $("#photoUpload").colorbox({iframe:true, width:"860", height:"620",overlayClose: false});
    $("#familyphotoUpload").colorbox({iframe:true, width:"860", height:"640",overlayClose: false});
    $("#documentUpload").colorbox({iframe:true, width:"860", height:"620",overlayClose: false});
    $("#contactDetailsEdit").colorbox({iframe:true, width:"860", height:"900",overlayClose: false});
    $("#referenceEdit").colorbox({iframe:true, width:"860", height:"900",overlayClose: false});
    $("#astroEdit").colorbox({iframe:true, width:"860", height:"900",overlayClose: false});
    $("#editProfilePicture").colorbox({iframe:true, width:"860", height:"620",overlayClose: false});
  });

    $('<a href="/mypage">Skip this page|</a> ').insertBefore('.logout');

</script>
      <?php $this->widget('application.widgets.menu.Rightmenu'); ?>
  