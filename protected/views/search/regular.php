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
* @title regular.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>
  
		  <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
  



  <section class="data-contnr3">
        <h1 class="mB10">Quick Search</h1>
        <form id="quickSearch"  name="quickSearch" method="post"  action="/search/quick">
        <ul class="accOverview mT12">
			<li class="mB10">
				<div class="radC">
				<input type="radio" value="M" name="gender" />
					<span>Male</span>
				</div>
				<div class="radC">
					<input type="radio" value="F" name="gender" />
					<span>Female</span>
				</div>
				<div class="selC">
					<span>Age</span>
					<?php echo CHtml::dropDownList('ageFrom',null,Utilities::getAge(),array('class'=>'wid50')); ?>
				</div>
				<div class="selC">
					<span>to</span>
					<?php echo CHtml::dropDownList('ageTo',null,Utilities::getAge(),array('class'=>'wid50')); ?>
				</div>
				<div class="selC">
					<span>Religion</span>
					<?php $records = Religion::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'religionId', 'name');
		echo CHtml::dropDownList('religion',null,$list,array('empty' => 'Religion','class'=>'wid130')); ?>
				</div>
				<div class="selC">
					<span>Cast</span>
					<?php $records = Caste::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'casteId', 'name');
		echo CHtml::dropDownList('caste',null,$list,array('empty' => 'Caste','class'=>'wid130')); ?>
				</div>
				<a href="javascript:quickSearch.submit();" class="type2 no-marg">Search</a>
			</li>
		</ul>
		</form>
		<h1 class="mTB12">Search your life partner</h1>
                <p>An easy way to find out your life partner. By choosing the right options you can easily find out the profiles that matches you. </p>
		<ul class="tab-head">
			<li id="tab1">
				<a id="tab1" href="#" class="select ">Basic Search</a>
			</li>
			<li id="tab2"> 
				<a id="tab2" href="#" class="type3 ">Advanced Search</a>
			</li>
			<li id="tab3">
				<a id="tab3" href="#" class="type3 ">Keyword Search</a>
			</li>
			<li id="tab4">
				<a id="tab4" href="#" class="type3">Search by ID</a>
			</li>
		</ul>
			<?php 
	if(isset($error))
	echo $error;
	?>        
		
		<div id="tab1_data" class="tab-data" style="display: block;">
		
			<article class="section width100 no-padd">
			<form id="regularSearch"  name="regularSearch" method="post"  action="/search/regular">
				<ul>
					<li>
						<div class="title">
							Gender
						</div>
						<div class="info">
							<div class="radio mR14 wid80">
								<input type="radio" value="M" name="gender"> <span>Male</span>
							</div>
							<div class="radio">
								<input type="radio" value="F" name="gender"><span>Female</span>
							</div>
						</div>
					</li>
					<li>
						<div class="title">
							Age 
						</div>
						<div class="info">
						<?php echo CHtml::dropDownList('ageFrom',null,Utilities::getAge(),array('class'=>'wid50')); ?>
							<div class="married">
								<span class="text">to</span>
							<?php echo CHtml::dropDownList('ageTo',null,Utilities::getAge(),array('class'=>'wid50')); ?>
								<span class="text">years</span>
							</div>
						</div>
					</li>
					<li>
						<div class="title">
							Height 
						</div>
						<div class="info">
						<?php echo CHtml::dropDownList('heightFrom',null,Utilities::getHeights(),array('class'=>'wid120')); ?>
							
							<div class="married">
								<span class="text">to</span>
								<?php echo CHtml::dropDownList('heightTo',null,Utilities::getHeights(),array('class'=>'wid120')); ?>
							</div>
						</div>
					</li>
					<li>
						<div class="title">
							Marital status 
						</div>
						<div class="info">
							<div class="check wid110">
								
								<input type="checkbox" value="0" name="status[]"><span>Unmarried </span>
							</div>
							<div class="check wid110">
							<input type="checkbox" value="1" name="status[]">	
								<span>Widower </span>
							</div>
							<div class="check wid110">
								<input type="checkbox" value="2" name="status[]"><span>Divorced </span>
							</div>
							<div class="check ">
								<input type="checkbox" value="3" name="status[]"><span>Awaiting divorce </span>
							</div>
						</div>
					</li>
					<li>
						<div class="title">
							Religion
						</div>
						<div class="info">
						<?php $records = Religion::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'religionId', 'name');
		echo CHtml::dropDownList('religion',null,$list,array('empty' => 'Religion','class'=>'wid150')); ?>
							
						</div>
					</li>
					<li>
						<div class="title">
							Cast
						</div>
						<div class="info">
							<?php $records = Caste::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'casteId', 'name');
						    echo CHtml::dropDownList('rcaste',null,$list,array('class'=>'left ar','multiple'=>'multiple')); ?>
							<div class="ar-btn">
							<input class="add type2" value="Add" onclick="return add('rcaste','rcaste1')" type="button">
							<input class="remove type2" value="Remove" onclick="return add('rcaste1','rcaste')" type="button">
							</div>
								<select class="right ar" id="rcaste1" name="caste1[]" multiple="multiple"></select>
						</div>
					</li>
					<li>
						<div class="title">
							Mother Tongue
						</div>
						<div class="info">
								<?php $records = Languages::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'languageId', 'name');
						    echo CHtml::dropDownList('rlanguage',null,$list,array('class'=>'left ar','multiple'=>'multiple')); ?>
						
						<div class="ar-btn">
							<input class="add type2" value="Add" onclick="return add('rlanguage','rlanguage1')" type="button">
							<input class="remove type2" value="Remove" onclick="return add('rlanguage1','rlanguage')" type="button">
						</div>
						<select class="right ar" id="rlanguage1" name="language1[]" multiple="multiple">
						</select>
							
						</div>
					</li>
					<li>
						<div class="title">
							Country
						</div>
						<div class="info">
							<?php $records = Country::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'countryId', 'name');
						    echo CHtml::dropDownList('rcountry',null,$list,array('class'=>'left ar','multiple'=>'multiple')); ?>
						
						<div class="ar-btn">
							<input class="add type2" value="Add" onclick="return add('rcountry','rcountry1')" type="button">
							<input class="remove type2" value="Remove" onclick="return add('rcountry1','rcountry')" type="button">
						</div>
						<select class="right ar" id="rcountry1" name="country1[]" multiple="multiple">
						</select>
						</div>
					</li>
					<li>
						<div class="title">
							Education
						</div>
						<div class="info">
						<?php $records = EducationMaster::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'educationId', 'name');
						    echo CHtml::dropDownList('reducation',null,$list,array('class'=>'left ar','multiple'=>'multiple')); ?>
						<div class="ar-btn">
							<input class="add type2" value="Add" onclick="return add('reducation','reducation1')" type="button">
							<input class="remove type2" value="Remove" onclick="return add('reducation1','reducation')"type="button">
						</div>
						<select class="right ar" id="reducation1" name="education1[]" multiple="multiple">
						</select>
						</div>
					</li>
					<li>
						<div class="title">
							Show profile
						</div>
						<div class="info">
							<div class="check wid220">
								<input type="checkbox" value="P" name="profile[]"><span>Only With Photo</span>
							</div>
							<div class="check ">
								<input type="checkbox" value="h" name="profile[]"><span>Only With horoscope</span>
							</div>
						</div>
					</li>
					<li>
						<div class="title">
							Don't show
						</div>
						<div class="info">
							<div class="check wid220">
								<input type="checkbox" value="0" name="show[]"><span>Ignored Profiles</span>
							</div>
							<div class="check wid220">
								<input type="checkbox" value="1" name="show[]"><span>Profiles already contacted</span>
							</div>
							<div class="check wid220">
								<input type="checkbox" value="2" name="show[]"><span>Viewed Profiles</span>
							</div>
							<div class="check ">
								<input type="checkbox" value="3" name="show[]"><span>Shortlisted Profiles</span>
							</div>
						</div>
					</li>
					<li>
						<div class="buttonContnr2 mT20">
							<a class="type4" href="javascript:regularSearch.submit();" >Search</a>
							<a class="type4" id="searchButton" href="#">Save Search</a>
						</div>
					</li>
				</ul>
			</form>	
			</article>
		</div>
		<div id="tab2_data" class="tab-data" style="display: none;">
			<article class="section width100 no-padd">
			<form id="advanceSearch"  name="advanceSearch" method="post"  action="/search/advance">        
				<ul>
					<li>
						<div class="title">
							Gender
						</div>
						<div class="info">
							<div class="radio mR14 wid80">
								<input type="radio" name="gender" value="M"><span>Male</span>
							</div>
							<div class="radio">
								<input type="radio" name="gender" value="F"><span>Female</span>
							</div>
						</div>
					</li>
					<li>
						<div class="title">
							Age 
						</div>
						<div class="info">
						<?php echo CHtml::dropDownList('ageFrom',null,Utilities::getAge(),array('class'=>'wid50')); ?>
							<div class="married">
								<span class="text">to</span>
							<?php echo CHtml::dropDownList('ageTo',null,Utilities::getAge(),array('class'=>'wid50')); ?>
								<span class="text">years</span>
							</div>
						</div>
					</li>
					<li>
						<div class="title">
							Height 
						</div>
						<div class="info">
						<?php echo CHtml::dropDownList('heightFrom',null,Utilities::getHeights(),array('class'=>'wid120')); ?>
							
							<div class="married">
								<span class="text">to</span>
							<?php echo CHtml::dropDownList('heightTo',null,Utilities::getHeights(),array('class'=>'wid120')); ?>
							</div>
						</div>
					</li>
					<li>
						<div class="title">
							Physical status 
						</div>
						<div class="info">
							<div class="radio wid110">
								<input type="radio" name="pstatus" value="N"><span>Doesn't matter</span>
							</div>
							<div class="radio wid110">
								<input type="radio" name="pstatus" value="0"><span>Normal</span>
							</div>
							<div class="radio ">
								<input type="radio" name="pstatus" value="1"><span>Physically challenged </span>
							</div>
						</div>
					</li>
					<li>
						<div class="title">
							Marital status 
						</div>
						<div class="info">
							<div class="check wid110">
								<input type="checkbox" name="status[]" value="0" /><span>Unmarried </span>
							</div>
							<div class="check wid110">
								<input type="checkbox" name="status[]" value="1" /><span>Widower </span>
							</div>
							<div class="check wid110">
								<input type="checkbox" name="status[]" value="2" /><span>Divorced </span>
							</div>
							<div class="check">
								<input type="checkbox" name="status[]" value="3" /><span>Awaiting divorce </span>
							</div>
						</div>
					</li>
				</ul>
				<ul>
					<li>
						<h3>Location</h3>
					</li>
					<li>
						<div class="title">
							Mother Tongue
						</div>
						<div class="info">
							<?php $records = Languages::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'languageId', 'name');
						    echo CHtml::dropDownList('alanguage',null,$list,array('class'=>'left ar','multiple'=>'multiple')); ?>
						
						<div class="ar-btn">
							<input class="add type2" value="Add" onclick="return add('alanguage','alanguage1')" type="button">
							<input class="remove type2" value="Remove" onclick="return add('alanguage1','alanguage')" type="button">
						</div>
						<select class="right ar" id="alanguage1" name="language1[]" multiple="multiple">
						</select>
						
						</div>
					</li>
					<li>
						<div class="title">
							Country Living In 
						</div>
						<div class="info">
								<?php $records = Country::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'countryId', 'name');
						    echo CHtml::dropDownList('acountry',null,$list,array('class'=>'left ar','multiple'=>'multiple')); ?>
						
						<div class="ar-btn">
							<input class="add type2" value="Add" onclick="return add('acountry','acountry1')" type="button">
							<input class="remove type2" value="Remove" onclick="return add('acountry1','acountry')" type="button">
						</div>
						<select class="right ar" id="acountry1" name="acountry1[]" multiple="multiple">
						</select>
						</div>
					</li>
					<li>
						<div class="title">
							Residing state 
						</div>
						<div class="info">
						<?php $records = States::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'stateId', 'name');
		echo CHtml::dropDownList('state',null,$list,array('empty' => 'State','class'=>'wid150')); ?>
						</div>
					</li>
					<li>
						<div class="title">
							Residing district
						</div>
						<div class="info">
<?php $records = Districts::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'districtId', 'name');
		echo CHtml::dropDownList('district',null,$list,array('empty' => 'District','class'=>'wid150')); ?>						</div>
					</li>
					<li>
						<div class="title">
							Resident status
						</div>
						<div class="info">
							<div class="radio mR14">
								<input type="radio" name="created"> <span>Any </span>
							</div>
							<div class="radio mR14">
								<input type="radio" name="created"> <span>Citizen </span>
							</div>
							<div class="radio mR14">
								<input type="radio" name="created"> <span>Permanent Resident </span>
							</div>
							<div class="radio mR14">
								<input type="radio" name="created"> <span>Student Visa</span>
							</div>
							<div class="radio mR14">
								<input type="radio" name="created"> <span>Temporary Visa</span>
							</div>
							<div class="radio ">
								<input type="radio" name="created"> <span>Work Permit</span>
							</div>
						</div>
					</li>
				</ul>
				<ul>
					<li>
						<h3>Cast and religion</h3>
					</li>
					<li>
						<div class="title">
							Religion
						</div>
						<div class="info">
						<?php $records = Religion::model()->findAll("active = 1");
		$list = CHtml::listData($records, 'religionId', 'name');
		echo CHtml::dropDownList('religion',null,$list,array('empty' => 'Religion','class'=>'wid150')); ?>
						</div>
					</li>
					<li>
						<div class="title">
							Cast
						</div>
						<div class="info">
								<?php $records = Caste::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'casteId', 'name');
						    echo CHtml::dropDownList('acaste',null,$list,array('class'=>'left ar','multiple'=>'multiple')); ?>
							<div class="ar-btn">
							<input class="add type2" value="Add" onclick="return add('acaste','acaste1')" type="button">
							<input class="remove type2" value="Remove" onclick="return add('acaste1','acaste')" type="button">
							</div>
								<select class="right ar" id="acaste1" name="caste1[]" multiple="multiple"></select>
						</div>
					</li>
				</ul>
				<ul>
					<li>
						<h3>Education and Occupation</h3>
					</li>
					<li>
						<div class="title">
							Education
						</div>
						<div class="info">
						                        <?php $records = EducationMaster::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'educationId', 'name');
						    echo CHtml::dropDownList('education',null,$list,array('class'=>'wid150','multiple'=>'multiple')); ?>
						
						</div>
					</li>
					<li>
						<div class="title">
							Occupation
						</div>
						<div class="info">
						<?php $records = OccupationMaster::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'occupationId', 'name');
						    echo CHtml::dropDownList('occupation',null,$list,array('class'=>'left ar','multiple'=>'multiple')); ?>
									
							<div class="ar-btn">
							<input class="add type2" value="Add"  onclick="return add('occupation','occupation1')" type="button">
							<input class="remove type2" value="Remove" onclick="return add('occupation1','occupation')"type="button">
							</div>
							<select class="right ar" id="occupation1" name="occupation1[]" multiple="multiple"></select>
						</div>
					</li>
					<li>
						<div class="title">
							Annual Income is Rs:
						</div>
						<div class="info">
							<?php echo CHtml::dropDownList('income',null,Utilities::getAnnualIncome(),array('empty' => 'Income','class'=>'wid120')); ?>
							<div class="married">
								<span class="text">to</span>
								<?php echo CHtml::dropDownList('income',null,Utilities::getAnnualIncome(),array('empty' => 'Income','class'=>'wid120')); ?>
							</div>
						</div>
					</li>
				</ul>
				<ul>
					<li>
						<h3>Astro Details</h3>
					</li>
					<li>
						<div class="title">
							Star
						</div>
						<div class="info">
						<?php $records = SignsMaster::model()->findAll("active = 1");
							$list = CHtml::listData($records, 'signId', 'name');
						    echo CHtml::dropDownList('star',null,$list,array('class'=>'left ar','multiple'=>'multiple')); ?>
									
							<div class="ar-btn">
							<input class="add type2" value="Add"  onclick="return add('star','star1')" type="button">
							<input class="remove type2" value="Remove" onclick="return add('star1','star')" "type="button">
							</div>
							<select class="right ar"id="star1" name="star1[]" multiple="multiple">
							</select>
						</div>
					</li>
					<li>
						<div class="title">
							Sudha Jathakam
						</div>
						<div class="info">
							<div class="radio mR14">
								<input type="radio" name="sudha" value="1"> <span>Yes</span>
							</div>
							<div class="radio mR14">
								<input type="radio" name="sudha" value="0"> <span>No</span>
							</div>
							<div class="radio mR14">
								<input type="radio" name="sudha" value="2"> <span>Don't Know</span>
							</div>
						</div>
					</li>
					<li>
						<div class="title">
							Chovva Dosham
						</div>
						<div class="info">
							<div class="radio mR14">
								<input type="radio" name="chova" value=""> <span>Yes</span>
							</div>
							<div class="radio mR14">
								<input type="radio" name="chova" value=""> <span>No</span>
							</div>
							<div class="radio mR14">
								<input type="radio" name="chova" value=""> <span>Don't Know</span>
							</div>
						</div>
					</li>
				</ul>
				<ul>
					<li>
						<h3>Favourite Cuisine</h3>
					</li>
					<li>
						<div class="title">
							Eating habits
						</div>
						<div class="info">
							<div class="check ">
								<input type="checkbox" name="eat[]" value="A" /><span>Any</span>
							</div>
							<div class="check ">
								<input type="checkbox" name="eat[]" value="0" /> <span>Vegitarian </span>
							</div>
							<div class="check ">
								<input type="checkbox" name="eat[]" value="1" /><span>Non Vegitarian</span>
							</div>
							<div class="check ">
								<input type="checkbox" name="eat[]" value="2" /><span>Eggetarian </span>
							</div>
						</div>
					</li>
					<li>
						<div class="title">
							Drinking
						</div>
						<div class="info">
							<div class="check ">
								<input type="checkbox" name="drink[]" value="A" /><span>Any</span>
							</div>
							<div class="check ">
								<input type="checkbox" name="drink[]" value="0" /><span>Non-drinker </span>
							</div>
							<div class="check ">
								<input type="checkbox" name="drink[]" value="2" /><span>Light / Social drinker</span>
							</div>
							<div class="check ">
								<input type="checkbox" name="drink[]" value="1" /><span>Regular drinker </span>
							</div>
						</div>
					</li>
					<li>
						<div class="title">
							Smoking
						</div>
						<div class="info">
							<div class="check ">
								<input type="checkbox" name="smoke[]" value="A" /><span>All</span>
							</div>
							<div class="check ">
								<input type="checkbox" name="smoke[]" value="0" /><span>Non-smoker</span>
							</div>
							<div class="check ">
								<input type="checkbox" name="smoke[]" value="2" /><span>Light / Social smoker</span>
							</div>
							<div class="check ">
								<input type="checkbox" name="smoke[]" value="1" /><span>Regular smoker </span>
							</div>
						</div>
					</li>
				</ul>
				<ul>
					
					<li>
						<div class="title">
							Show profile
						</div>
						<div class="info">
							<div class="check wid220">
								<input type="checkbox" name="profile[]" value="p" /> <span>Only With Photo</span>
							</div>
							<div class="check ">
								<input type="checkbox" name="profile[]" value="h" /><span>Only With horoscope</span>
							</div>
						</div>
					</li>
					<li>
						<div class="title">
							Don't show
						</div>
						<div class="info">
							<div class="check wid220">
								<input type="checkbox" name="show[]" value="0" /><span>Ignored Profiles</span>
							</div>
							<div class="check wid220">
								<input type="checkbox" name="show[]" value="1" /><span>Profiles already contacted</span>
							</div>
							<div class="check wid220">
								<input type="checkbox" name="show[]" value="2" /><span>Viewed Profiles</span>
							</div>
							<div class="check ">
								<input type="checkbox" name="show[]" value="3" /><span>Shortlisted Profiles</span>
							</div>
						</div>
					</li>
					<li>
						<div class="buttonContnr2 mT20">
							<a class="type4" href="javascript:advanceSearch.submit();"  href="#">Search</a>
							<a class="type4" id="searchButtons" href="#">Save Search</a>
						</div>
					</li>
				</ul>
				</form>
			</article>
		</div>
		<div id="tab3_data" class="tab-data" style="display: none;">
			<div class="sId">
				<p>Enter a Keyword of the member whose profile you would like to see.</p>
				<div class="sec">
				<form id="keywordSearch"  name="keywordSearch" method="post"  action="/search/keyword">
					<div class="text"> Enter a Keyword</div>
					<input type="text" name="keyword" id="keyword" />
					<a href="javascript:keywordSearch.submit();" class="type3 wid100">Search</a>
					<a  href="javascript:keywordSearch.reset();" class="type3">Reset</a>
				</form>	
				</div>
			</div>
			
		</div>
		<div id="tab4_data" class="tab-data" style="display: none;">
			<div class="sId">
				<p>Enter the Matrimony ID of the member whose profile you would like to see.</p>
				<div class="sec">
				<form id="idSearch"  name="idSearch" method="get"  action="/search/byid">
					<div class="text"> Matrimony ID </div>
					<input type="text" name="id" id="id" />
					<a href="javascript:idSearch.submit();" class="type3 wid100">View Profile</a>
					<a href="javascript:idSearch.reset();" class="type3">Reset</a>
				</form>	
				</div>
			</div>
		</div>
    </section>
	<aside class="rightbar-contnr">
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
			<a class="subNow" href="subscribe-now.htm">Subscribe Now</a>
		</div>
	</aside>


      
 <script type="text/javascript">
$(document).ready(function() {

	$('#searchButton').click(function() {	
		$("#regularSearch").attr("action","/search/save");
	  	$('#regularSearch').submit();
	});

	$('#searchButtons').click(function() {	
		$("#advanceSearch").attr("action","/search/save");
	    $("#advanceSearch").submit();	
	});
	
});


</script>      
      