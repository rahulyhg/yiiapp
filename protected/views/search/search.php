
           
            <!--main-content-->
            <div id="main-content">
            	<!--left-content-->
  
   <?php $this->widget('application.widgets.menu.Leftmenu'); ?>   
  
  
  			<div id="content-left">
  			  <!--closing central profile details closing-->
              <!--left-content closing-->
              <!--left-content-->

                <!--bottom-content closing-->
             
					

<?php if($search == 'advance' || $search == 'regular') {?>
<p class="txt_bld"><span class="text_pink">Its make your profile more visibile</span></p>

						<?php 
	if(isset($searchText)){ ?>
	<p class="txt_10px"><?php echo $searchText;?></p>
<?php }?> 
					

<?php }?>
<div class="clear"></div>



                	<div id="content-left-2">
                    
                      <p class="text_pink-hd">Highlighted Profiles</p>
                        
                          <?php $user = Yii::app()->session->get('user');?>
  						<?php if(isset($user) && $user->highlighted != 1) {?>
                       <a class="high-light" href="/highlight" ">Highlight your profile</a>
                      <?php }?>
                       
                    
              </div>
  <?php 
  $heightArray = Utilities::getHeights();
  $index = 0;
  foreach ($highLight as $value) { ?>
  
  	<div <?php if($index > 1) echo "id='high{$index}'";?> class="<?php if($index % 2 == 0) { echo 'search_div_lfth';} else{ echo 'search_div_righth';}?>" ><!--search_div_lft-->
						<p class="space-25px">&nbsp;</p>
                        <a href="album.html"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/photo_5.jpg" border="0" class="search_div_img" /></a>
        				<p class="graytext">Name </p>
                        <p class="full-col">:</p>
                        <p class="gray-rt-link"> <a href="<?php echo 'byid?id='.$value->marryId ?>"><?php echo $value->name; echo '( '.$value->marryId.' )' ;?></a></p>
                        <p class="graytext">Religion / Cas</p>
                        <p class="full-col">:</p>
                        <p class="gray-rt"> <?php if(isset($value->userpersonaldetails->religion))echo $value->userpersonaldetails->religion->name ;?> , <?php if(isset($value->userpersonaldetails->caste))echo $value->userpersonaldetails->caste->name ;?> &nbsp;</p>
                        <p class="graytext">Age </p>
                        <p class="full-col">:</p>
                        <p class="gray-rt"> <?php echo Utilities::getAgeFromDateofBirth($value->dob); ?>Years &nbsp;</p>
                        <p class="graytext">Height </p>
                        <p class="full-col">:</p>
                        <p class="gray-rt"> <?php if(isset($value->physicaldetails->heightId))echo $heightArray[$value->physicaldetails->heightId]; ?> &nbsp;</p>
                        <p class="graytext">Place </p>
                        <p class="full-col">:</p>
                        <p class="gray-rt"> <?php if(isset($value->userpersonaldetails->place))echo $value->userpersonaldetails->place->name ?>, <?php if(isset($value->userpersonaldetails->state))echo $value->userpersonaldetails->state->name ?>, <?php if(isset($value->userpersonaldetails->country))echo $value->userpersonaldetails->country->name?> &nbsp;</p>
                        <p class="graytext">Education </p>
                        <p class="full-col">:</p>
                        <p class="gray-rt"><?php if(isset($value->educations->education))echo $value->educations->education->name?> &nbsp;</p>
                        <p class="graytext">Occupation </p>
                        <p class="full-col">:</p>
                        <p class="gray-rt"> <?php if(isset($value->educations->occupation))echo $value->educations->occupation->name ?> &nbsp;</p>
                        <p class="blue-text-01"><a href="<?php echo 'byid/id/'.$value->marryId ?>">View Full Profile</a></p>
                      <div class="clear"></div>
                      	<div class="pages-1">
                        
                   
                   <div class="arrow">
                   
                     <a href="#" ><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/arrow_small_right.jpg" name="Image67" width="7" height="13" border="0" id="Image67" /></a></div>
                        </div>
<div class="clear"></div>
 
 <?php 
 
 $isInterest = $user->interestSender(array('condition'=>"receiverId = {$value->userId}"));
 $isBookMarked = $user->bookmark(array('condition'=>"FIND_IN_SET('{$value->userId}',profileIDs)")); 
 $isMessage = $user->messageSender(array('condition'=>"receiverId = {$value->userId}"));
 if(!isset($isInterest) || empty($isInterest)) {
 ?>
<a href="#" id="<?php echo $value->userId ?>" class="exp-sub">Express Interest</a>
<?php }?>
<?php if(!isset($isBookMarked) || empty($isBookMarked)) {?> 
<a href="#" id="<?php echo $value->userId ?>" class="exp-sub-add">Bookmark</a>
<?php }?>
<?php if(!isset($isMessage) || empty($isMessage)) {?>
<a href="#" id="<?php echo $value->userId ?>" class="exp-sub-send">Send Message</a> 
   <?php } ?> 



</div><!--/search_div_lft-->
  	
  	
  	
 <?php $index++; }?>                  

              
              
                        <p class="clear"></p>
                        <p class="line"></p>
                          <?php if(sizeof($highLight) > 2 ) {?>
                        <div class="right"><span class="text_blue-right"><strong><a href="#">View More Highligted Profiles</a></strong></span></div><p class="clear"></p>
                       <?php }?> 
                        <?php if(sizeof($normal) > 0 ) {?>
                        <p class="text_pink-16">Latest Matches For You</p><p class="space-15px">&nbsp;</p>
                    		<?php if(isset($totalPage) && intval($totalPage) > 1) { ?>
							<div class="view-1">
        <div class="first-new"><span class="fir"><a class="fpnl" href="#">First </a></span></div>

        <div class="first-new"><span class="pre"><a class="fpnl" href="#">Previous </a></span></div>
              
		 <div class="first-new"><span class="next"><a class="fpnl" href="#">Next</a></span></div>
                        
                <div class="first-new"><span class="last"><a class="fpnl" href="#">Last</a></span></div>            </div>	
            <?php }?>
							
							<p class="clear"></p>                        
                        <p class="line"></p>
                       <?php }?>
                     
                     <div class="left">    

						</div>
						
   <?php 
  
  $index1 = 1;
  foreach ($normal as $value) { ?>
                   
  	<div id="<?php echo 'normal'.$index1?>" class="<?php if($index1 % 2 != 0) { echo 'search_div_lft';} else{ echo 'search_div_right';}?>" <?php if(intval($totalPage) > 1 && $index1 > 10 ) {?> style="display:none" <?php }?>><!--search_div_lft-->
						<p class="space-25px">&nbsp;</p>
                        <a href="album.html"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/photo_5.jpg" border="0" class="search_div_img" /></a>
        				<p class="graytext">Name </p>
                        <p class="full-col">:</p>
                        <p class="gray-rt-link"> <a href="<?php echo 'byid?id='.$value->marryId ?>"><?php echo $value->name; echo '( '.$value->marryId.' )' ;?></a></p>
                        <p class="graytext">Religion / Cas</p>
                        <p class="full-col">:</p>
                        <p class="gray-rt"> <?php if(isset($value->userpersonaldetails->religion))echo $value->userpersonaldetails->religion->name ;?> , <?php if(isset($value->userpersonaldetails->caste))echo $value->userpersonaldetails->caste->name ;?> &nbsp;</p>
                        <p class="graytext">Age </p>
                        <p class="full-col">:</p>
                        <p class="gray-rt"> <?php echo Utilities::getAgeFromDateofBirth($value->dob); ?>Years &nbsp;</p>
                        <p class="graytext">Height </p>
                        <p class="full-col">:</p>
                        <p class="gray-rt"> <?php if(isset($value->physicaldetails->heightId))echo $heightArray[$value->physicaldetails->heightId];  ?> &nbsp;</p>
                        <p class="graytext">Place </p>
                        <p class="full-col">:</p>
                        <p class="gray-rt"> <?php if(isset($value->userpersonaldetails->place))echo $value->userpersonaldetails->place->name ?>, <?php if(isset($value->userpersonaldetails->state))echo $value->userpersonaldetails->state->name ?>, <?php if(isset($value->userpersonaldetails->country))echo $value->userpersonaldetails->country->name ?> &nbsp;</p>
                        <p class="graytext">Education </p>
                        <p class="full-col">:</p>
                        <p class="gray-rt"><?php if(isset($value->educations->education))echo $value->educations->education->name ?> &nbsp;</p>
                        <p class="graytext">Occupation </p>
                        <p class="full-col">:</p>
                        <p class="gray-rt"> <?php if(isset($value->educations->occupation))echo $value->educations->occupation->name ?> &nbsp;</p>
                        <p class="blue-text-01"><a href="<?php echo 'byid/id/'.$value->marryId ?>">View Full Profile</a></p>
                      <div class="clear"></div>
                      	<div class="pages-1">
                        
                   
                   <div class="arrow">
                   
                     <a href="#" ><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/arrow_small_right.jpg" name="Image67" width="7" height="13" border="0" id="Image67" /></a></div>
                        </div>
<div class="clear"></div>
  
   <?php 
 
 $isInterest = $user->interestSender(array('condition'=>"receiverId = {$value->userId}"));
 $isBookMarked = $user->bookmark(array('condition'=>"FIND_IN_SET('{$value->userId}',profileIDs)")); 
 $isMessage = $user->messageSender(array('condition'=>"receiverId = {$value->userId}"));
 if(!isset($isInterest) || empty($isInterest)) {
 ?>
<a href="#" id="<?php echo $value->userId ?>" class="exp-sub">Express Interest</a>
<?php }?>
<?php if(!isset($isBookMarked) || empty($isBookMarked)) {?> 
<a href="#"  id="<?php echo $value->userId ?>" class="exp-sub-add">Bookmark</a>
<?php }?>
<?php if(!isset($isMessage) || empty($isMessage)) {?>
<a href="#"  id="<?php echo $value->userId ?>" class="exp-sub-send">Send Message</a> 
   <?php } ?> 

</div><!--/search_div_lft-->
  	
  	

<?php $index1++; }?>						
                        
						<p class="clear"></p>
                        <p class="line"></p>
                       
                       
                     <div class="left">   

						</div>
                        
          <?php if(isset($totalPage) && intval($totalPage) > 1) { ?>
                        <div class="view-1">
          <div class="first-new"><span class="fir"><a class="fpnl" href="#">First </a></span></div>

        <div class="first-new"><span class="pre"><a class="fpnl" href="#">Previous </a></span></div>
              
		 <div class="first-new"><span class="next"><a class="fpnl" href="#">Next</a></span></div>
                        
                <div class="first-new"><span class="last"><a class="fpnl" href="#">Last</a></span></div>
                </div>              
          
          <input type="hidden" value="<?php echo $totalPage?>" name="totalPage" />
          <input type="hidden" value="1" name="currentPage" />
          <input type="hidden" value="<?php echo $totalUser ?>" name="user" />
          <input type="hidden" value="1" name="firstPage" />
           <input type="hidden" value="<?php echo $totalPage?>" name="lastPage" />
                 <?php } ?>       
            
			  <p class="clear">&nbsp;</p><p class="space-10px">&nbsp;</p>

                <!--bottom-content-->
              </div>
         
 </div>
 
   <script type="text/javascript">

   $(document).ready(function() {

	
	$("div[id^='high']").hide();
	

	$('.right').click(function(){
		
		if($('div.right a').text() == 'Hide')
		{
			$('div.right a').text("View More Highligted Profiles");
			$("div[id^='high']").hide("slow").fadeOut("slow");

		}
		else{
		$('div.right a').text("Hide");
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
		$('.next').show();
		$('.fir').hide();
		$('.last').show();
		currentPage = parseInt($("input[name='currentPage']").val());
		if(currentPage == 1)
		{
			return;
		}
		$('.pre').hide();
		$('.search_div_lft').hide();
		$('.search_div_right').hide();
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
		$('.next').show();
		$('.last').show();
		currentPage = parseInt($("input[name='currentPage']").val());
		if(currentPage == 1)
		{
			return;
		}	
		$('.search_div_lft').hide();
		$('.search_div_right').hide();
		currentPage = currentPage - 1;
		var index = currentPage * 10;
		for (var i = index - 9;  i <=  index; i++)
		{
			$('div#normal'+i).show();
		}
		
		$("input[name='currentPage']").val(currentPage);
	});

	$('.next').click(function (){
		$('.pre').show();
		$('.fir').show();
		
		currentPage = parseInt($("input[name='currentPage']").val());
		lastPage = parseInt($("input[name='lastPage']").val());
		if(currentPage == lastPage )
		{
			return;
		}	
		$('.search_div_lft').hide();
		$('.search_div_right').hide();
		
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
		$('.next').hide();
		$('.fir').show();
		$('.last').hide();
		currentPage = parseInt($("input[name='currentPage']").val());
		lastPage = parseInt($("input[name='lastPage']").val());
		
		if(lastPage == currentPage)
		{
			return;
		}	
		$('.search_div_lft').hide();
		$('.search_div_right').hide();
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