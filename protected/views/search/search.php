  
  	<?php 
  	$user = Yii::app()->session->get('user');
  	 $heightArray = Utilities::getHeights();
  	if(isset($user))
   $this->widget('application.widgets.menu.Leftmenu'); ?>   
  	
  	
	<?php if(isset($user)) { ?> 
    <section class="data-contnr3">
    <?php } else {?>
    <section class="data-contnr3 searchRslt">
    <?php } ?>
    	<h1 class="mTB12">Search your life partner </h1>
        <p>An easy way to find out your life partner. By choosing the right options you can easily find out the profiles that matches you. </p>
		<div class="page-head mB25">
	    <a class="type8 mR5" href="/search" >Basic Search</a>
	    <a class="type8 mR5" href="/search/advance" >Advanced Search</a>
	    <a class="type8 mR5" href="/search/keyword" >Keyword Search</a>
	    <a class="type8 mR5" href="/search/byid" >Search by ID</a>
		</div>
        <div class="page-head">Search Result</div>
        <div class="page-subhead">Get the best results instantly </div>
        <?php if(isset($searchText)) { ?>
        <div class="search-result"><span>Your keywords:</span> <?php echo $searchText; ?></div>
        <?php }?>
         <?php if(sizeof($highLight) > 0 ) {?>
        <div class="content-section highPro">
            <div class="headBtn">
                <div class="hText">Highlighted Profiles</div>
                <?php if(isset($user) && $user->highlighted != 1) {?>
                <a href="#" class="type4 ">HIGHLIGHT YOUR PROFILE</a>
                 <?php }?>
            </div>
            <?php 
 
  $index = 0;
  foreach ($highLight as $value) { ?>
            <div <?php if($index > 1) echo "id='high{$index}'";?> class="profile">
            <?php $this->widget('application.widgets.Profilepicture',array('userId'=>$value->userId,'marryId'=>$value->marryId)); ?>
                <div class="profile-details">
                    <ul class="details-contnr">
                        <li>
                            <div class="title">Name</div>
                            <div class="info">: <a href="<?php echo 'byid?id='.$value->marryId ?>" class="color" ><?php echo $value->name; echo '( '.$value->marryId.' )' ;?></a></div>
                        </li>
                        <li>
                            <div class="title">Religion / Cast </div>
                            <div class="info">: <?php if(isset($value->userpersonaldetails->religion))echo $value->userpersonaldetails->religion->name ;?> , <?php if(isset($value->userpersonaldetails->caste))echo $value->userpersonaldetails->caste->name ;?> </div>
                        </li>
                        <li>
                            <div class="title">Age</div>
                            <div class="info">: <?php echo Utilities::getAgeFromDateofBirth($value->dob); ?>Years </div>
                        </li>
                        <li>
                            <div class="title">Height</div>
                            <div class="info">: <?php if(isset($value->physicaldetails->heightId))echo $heightArray[$value->physicaldetails->heightId]; ?> </div>
                        </li>
                        <li>
                            <div class="title">Place</div>
                            <div class="info">: <?php if(isset($value->userpersonaldetails->place))echo $value->userpersonaldetails->place->name ?>, <?php if(isset($value->userpersonaldetails->state))echo $value->userpersonaldetails->state->name ?>, <?php if(isset($value->userpersonaldetails->country))echo $value->userpersonaldetails->country->name?> </div>
                        </li>
                        <li>
                            <div class="title">Education</div>
                            <div class="info">: <?php if(isset($value->educations->education))echo $value->educations->education->name?></div>
                        </li>
                        <li>
                            <div class="title">Occupation</div>
                            <div class="info">: <?php if(isset($value->educations->occupation))echo $value->educations->occupation->name?></div>
                        </li>
                    </ul>
                    <a class="view-full" href="<?php echo 'byid/id/'.$value->marryId ?>">View Full Profile</a>
                </div>
                <div class="button-contnr">
                <?php 
 if(isset($user)){
 $isInterest = $user->interestSender(array('condition'=>"receiverId = {$value->userId}"));
 $isBookMarked = $user->bookmark(array('condition'=>"FIND_IN_SET('{$value->userId}',profileIDs)")); 
 $isMessage = $user->messageSender(array('condition'=>"receiverId = {$value->userId}"));
 if(!isset($isInterest) || empty($isInterest)) {
 ?>
                    <a href="#" class="global">Express Interest</a>
                   <?php }?>
<?php if(!isset($isBookMarked) || empty($isBookMarked)) {?>  
                    
                    <a href="#" class="global">Bookmark</a>
                    <?php }?>
<?php if(!isset($isMessage) || empty($isMessage)) {?>
                    <a href="#" class="global">Send Message</a>
                   <?php }
  } ?>   
                </div>
            </div>
            <?php $index++; }?>
            <?php if(sizeof($highLight) > 2 ) {?>
            <div id="right" class="footBtn">
                <a href="#" class="viewM ">View More Highlighted Profiles</a>
            </div>
            <?php }?> 
        </div>
        <?php }?>
        <?php if(sizeof($normal) > 0 ) {?>
        <div class="page-content-head">Matches for you</div>
        <?php if(isset($totalPage) && intval($totalPage) > 1) { ?>
        <div class="pagination-contnr">
            <div class="select-contnr"><input type="checkbox" /> Select All</div>
            <a href="#">Express Interest</a>
            <a href="#">Bookmark</a>
           <?php if(isset($totalPage) && intval($totalPage) > 1) { ?>
            <ul class="pagination">
                <li><span class="fir"><a href="#">First</a></span></li>
                <li><span class="nex"><a href="#">Next</a></span></li>
                <li><span class="pre"><a href="#">Previous</a></span></li>
                <li><span class="last"><a href="#">Last</a></span></li>
            </ul>
            <input type="hidden" value="<?php echo $totalPage?>" name="totalPage" />
          <input type="hidden" value="1" name="currentPage" />
          <input type="hidden" value="<?php echo $totalUser ?>" name="user" />
          <input type="hidden" value="1" name="firstPage" />
           <input type="hidden" value="<?php echo $totalPage?>" name="lastPage" />
                 <?php } ?>       
          
        </div>
        <?php }?>
        <?php }?>
        
        <div class="content-section">
        <?php 
  	$index1 = 1;
  	foreach ($normal as $value) { ?>
            <div  id="<?php echo 'normal'.$index1?>" class="profile" <?php if(intval($totalPage) > 1 && $index1 > 10 ) {?> style="display:none" <?php }?>>
                <div class="check-contnr"><input type="checkbox" /> Select</div>
                <?php $this->widget('application.widgets.Profilepicture',array('userId'=>$value->userId,'marryId'=>$value->marryId)); ?>
                <div class="profile-details">
                    <ul class="details-contnr">
                        <li>
                            <div class="title">Name</div>
                            <div class="info">: <a href="<?php echo 'byid?id='.$value->marryId ?>" class="color" ><?php echo $value->name; echo '( '.$value->marryId.' )' ;?></a></div>
                        </li>
                        <li>
                            <div class="title">Religion / Cast </div>
                            <div class="info">: <?php if(isset($value->userpersonaldetails->religion))echo $value->userpersonaldetails->religion->name ;?> , <?php if(isset($value->userpersonaldetails->caste))echo $value->userpersonaldetails->caste->name ;?> </div>
                        </li>
                        <li>
                            <div class="title">Age</div>
                            <div class="info">: <?php echo Utilities::getAgeFromDateofBirth($value->dob); ?> Years </div>
                        </li>
                        <li>
                            <div class="title">Height</div>
                            <div class="info">: <?php if(isset($value->physicaldetails->heightId))echo $heightArray[$value->physicaldetails->heightId];  ?></div>
                        </li>
                        <li>
                            <div class="title">Place</div>
                            <div class="info">: <?php if(isset($value->userpersonaldetails->place))echo $value->userpersonaldetails->place->name ?>, <?php if(isset($value->userpersonaldetails->state))echo $value->userpersonaldetails->state->name ?>, <?php if(isset($value->userpersonaldetails->country))echo $value->userpersonaldetails->country->name ?> </div>
                        </li>
                        <li>
                            <div class="title">Education</div>
                            <div class="info">: <?php if(isset($value->educations->education))echo $value->educations->education->name ?> </div>
                        </li>
                        <li>
                            <div class="title">Occupation</div>
                            <div class="info">: <?php if(isset($value->educations->occupation))echo $value->educations->occupation->name ?></div>
                        </li>
                    </ul>
                    <a class="view-full" href="<?php echo 'byid/id/'.$value->marryId ?>">View Full Profile</a>
                </div>
                <div class="button-contnr">
                <?php 
 if(isset($user)) {
 $isInterest = $user->interestSender(array('condition'=>"receiverId = {$value->userId}"));
 $isBookMarked = $user->bookmark(array('condition'=>"FIND_IN_SET('{$value->userId}',profileIDs)")); 
 $isMessage = $user->messageSender(array('condition'=>"receiverId = {$value->userId}"));
 if(!isset($isInterest) || empty($isInterest)) {
 ?>
                    <a href="#" class="global">Express Interest</a>
   <?php }?>
<?php if(!isset($isBookMarked) || empty($isBookMarked)) {?> 
                    <a href="#" class="global">Bookmark</a>
   <?php }?>
<?php if(!isset($isMessage) || empty($isMessage)) {?>
                    <a href="#" class="global">Send Message</a>
                    <?php }
  	}
  	?>
                </div>
            </div>
        <?php $index1++; }?>						
           
        </div>
        <div class="pagination-contnr">
            <div class="select-contnr"><input type="checkbox" /> Select All</div>
            <a href="#">Express Interest</a>
            <a href="#">Bookmark</a>
             <?php if(isset($totalPage) && intval($totalPage) > 1) { ?>
            <ul class="pagination">
                <li><span class="fir"><a href="#">First</a></span></li>
                <li><span class="nex"><a href="#">Next</a></span></li>
                <li><span class="pre"><a href="#">Previous</a></span></li>
                <li><span class="last"><a href="#">Last</a></span></li>
            </ul>
            <input type="hidden" value="<?php echo $totalPage?>" name="totalPage" />
          <input type="hidden" value="1" name="currentPage" />
          <input type="hidden" value="<?php echo $totalUser ?>" name="user" />
          <input type="hidden" value="1" name="firstPage" />
           <input type="hidden" value="<?php echo $totalPage?>" name="lastPage" />
                 <?php } ?>       
          
        </div>
    </section>

 
   <script type="text/javascript">

   $(document).ready(function() {

	
	$("div[id^='high']").hide();
	

	$('#right').click(function(){
		
		if($('div#right a').text() == 'Hide')
		{
			$('div#right a').text("View More Highligted Profiles");
			$("div[id^='high']").hide("slow").fadeOut("slow");

		}
		else{
		$('div#right a').text("Hide");
		$("div[id^='high']").show("slow").fadeIn("slow");

		}
		})
	
	$('.exp-sub').click(function(){
		var userId = $(this).attr('id');
		if(setInterest(userId))
		{
		$(this).hide();
		}

		});	

	   
	var totalPage = parseInt($("input[name='totalPage']").val());
	var totalUser = parseInt($("input[name='user']").val());
	var currentPage = parseInt($("input[name='currentPage']").val());
	var lastPage = parseInt($("input[name='lastPage']").val());
	var firstPage = parseInt($("input[name='firstPage']").val());
	
		
		
	$('.fir').click(function (){
		$('.nex').show();
		$('.fir').hide();
		$('.last').show();
		currentPage = parseInt($("input[name='currentPage']").val());
		if(currentPage == 1)
		{
			return;
		}
		$('.pre').hide();
		$('div[id^="normal"]').hide();
		var example = 10;
		for (var i= 1; i <= example; i++)
		{
			if( example <= totalUser)
			{	
				$('div#normal'+i).show();
			}
		}
		$("input[name='currentPage']").val("1");
		
		});

	$('.pre').click(function (){
		$('.nex').show();
		$('.last').show();
		currentPage = parseInt($("input[name='currentPage']").val());
		if(currentPage == 1)
		{
			return;
		}	
		$('div[id^="normal"]').hide();
		currentPage = currentPage - 1;
		var index = currentPage * 10;
		for (var i = index - 9;  i <=  index; i++)
		{
			$('div#normal'+i).show();
		}
		
		$("input[name='currentPage']").val(currentPage);
	});

	$('.nex').click(function (){
		$('.pre').show();
		$('.fir').show();
		
		currentPage = parseInt($("input[name='currentPage']").val());
		lastPage = parseInt($("input[name='lastPage']").val());
		if(currentPage == lastPage )
		{
			return;
		}	
		$('div[id^="normal"]').hide();
		var index = currentPage * 10;
		currentPage = currentPage + 1;
		
		for (var i = index+1 ;  i <= currentPage * 10 ; i++)
		{
			if(i <= totalUser){
			$('div#normal'+i).show();
			}
		}
		
		$("input[name='currentPage']").val(currentPage);
	
			
	});

	$('.last').click(function (){
		$('.pre').show();
		$('.nex').hide();
		$('.fir').show();
		$('.last').hide();
		currentPage = parseInt($("input[name='currentPage']").val());
		lastPage = parseInt($("input[name='lastPage']").val());
		
		if(lastPage == currentPage)
		{
			return;
		}	
		$('div[id^="normal"]').hide();
		var index = lastPage -1 ;
		for (var i = (index * 10) + 1;  i <= totalUser; i++)
		{
			$('div#normal'+i).show();
		}
	
		$("input[name='currentPage']").val(lastPage);
		
	});

	 
   });
   
 function setInterest(userId) {
     
    //generate the parameter for the php script
   
    $.ajax({
        url: "/interest/insert",  
        type: "POST",        
        data: {"userId":userId},     
        cache: false,
        success: function (response) {  
            //hide the progress bar
           return true; 
                   
        },       
        error: function (){
            return false;
        }
    });
}

 function setBookmark() {
     
	    //generate the parameter for the php script
	   
	    $.ajax({
	        url: "/bookmark/insert",  
	        type: "POST",        
	        data: data,     
	        cache: false,
	        success: function (html) {  
	         
	            //hide the progress bar
	            $('#loading').hide();   
	             
	            //add the content retrieved from ajax and put it in the #content div
	            $('#content').html(html);
	             
	            //display the body with fadeIn transition
	            $('#content').fadeIn('slow');       
	        }       
	    });
	}

 
 </script>