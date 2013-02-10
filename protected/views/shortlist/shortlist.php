<?php
/*
*
* $Id$
--------------------------------------------------------------------------------------------------------------------------
* Information contained in this file is the intellectual property of MarryDoor
* Copyright © 2012 MarryDoor. All Rights Reserved.
* ---------------------------------------------------------------------------------------------------------------------------
*
* @author  Ageesh K Gopinath
* @title shortlist.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>

          
    	  <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
    	  
    	  
    	   <section class="data-contnr3">
        <div class="page-head">Shortlisted Profiles</div>
        
         <?php if(isset($users)){ ?>
        <div class="pagination-contnr">
            <div class="select-contnr"><input type="checkbox" class="selection" name="selection" /> Select All</div>
            <a id="rmv-large" href="#">Remove Shortlist</a>
            <?php if(isset($totalPage) && intval($totalPage) > 1) { ?>
            <ul class="pagination">
                <li><span class="fir"><a href="#">First</a></span></li>
                <li><span class="nex"><a href="#">Next</a></span></li>
                <li><span class="pre"><a href="#">Previous</a></span></li>
                <li><span class="last"><a href="#">Last</a></span></li>
            </ul>
                 <?php } ?> 
        </div>
        <?php }?>
        <?php if(!isset($users)) {
					
						echo  "No short listed profiles";
					}?>
					
        <div class="content-section">
        <?php 
        $user = Yii::app()->session->get('user');
  $heightArray = Utilities::getHeights();
  $index1 = 1;
  if(isset($users)){
  foreach ($users as $value) { ?>
            <div  id="<?php echo 'normal'.$index1?>" class="profile" <?php if(intval($totalPage) > 1 && $index1 > 10 ) {?> style="display:none" <?php }?>>
                <div class="check-contnr"><input type="checkbox" name="userId" value="<?php echo $value->userId ?>"/> Select</div>
                <?php $this->widget('application.widgets.Profilepicturelist',array('userId'=>$value->userId,'marryId'=>$value->marryId)); ?>
                
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
                    <a class="view-full" target="_blank"  href="<?php echo '/search/byid/id/'.$value->marryId ?>">View Full Profile</a>
                </div>
                <div class="button-contnr">
                <?php 
 $isInterest = $user->interestSender(array('condition'=>"receiverId = {$value->userId}"));
 $isBookMarked = $user->bookmark(array('condition'=>"FIND_IN_SET('{$value->userId}',profileIDs)")); 
 $isMessage = $user->messageSender(array('condition'=>"receiverId = {$value->userId}"));
 ?>					<div id="rBookmark">
                    <a href="#" id="<?php echo $value->userId ?>" class="global bookPad">Remove Shortlist</a></div>
                    <?php if(!isset($isMessage) || empty($isMessage)) {?>
                    <div id="message">
                    <a href="#" id="<?php echo $value->userId ?>" class="global bookPad">Send Message</a>
                    </div>
                    <?php }?>
                    <div id="interest">
                    <a href="#"  id="<?php echo $value->userId ?>" class="global bookPad">Decline Interest</a>
                     </div>
                </div>
            </div>
    
<?php $index1++; }
  }
?>						
          
        </div>
          <?php if(isset($users)){ ?>
        <div class="pagination-contnr">
            <div class="select-contnr"><input type="checkbox" class="selection" name="selection" />Select All</div>
            <a id="rmv-large" href="#">Remove Shortlist</a>
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
              <?php } ?>
    </section>
    	  
    	  
 
  <script type="text/javascript">
$(document).ready(function() {

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
	

	//check for selection all button
	 $('.selection').change(function () {

		 if($(this).attr("checked")){
			 $('input:checkbox').attr('checked','checked');
		}else{ 
			$('input:checkbox').removeAttr('checked');
		}
		 
	 }); 	
	 
	//if anyone of the checkbox is clicked then uncheck the select all
	 $('.case').change(function () {
		$('.selection').attr("checked",false);
		 });

	 //if checkall is selected then append all userid
	 $('#rmv-large').click(function (){
		 var  allVal= [];
		 if($("input:checkbox[name=userId]:checked").length == 0)
		 {
			alert('Please select any one of profile to remove');
			return false;
		 }		 
		 $("input:checkbox[name=userId]:checked").each(function(){
			 if($(this).parent('div').parent('div').css('display') == 'block'){
				 allVal.push($(this).val());
				 }
		 });
		 removeAllBookMark(allVal); 
		  
	 });
	 
	 $('#rBookmark').click(function (){
		 var userId = $(this).find('a').attr('id');

		 $.ajax({
		        url: "/shortlist/remove",  
		        type: "POST",
		        dataType:'json',
		        data:{'userId':userId},   
		        cache: false,
		        success: function (html) {
			        if(html == true)  
		        	$('#rBookmark').hide();	         
		        }       
		    });
	 
	 });
	 	 //		
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

function removeAllBookMark(userIds) {
    
	    //generate the parameter for the php script
	   
	    $.ajax({
	        url: "/shortlist/removeAll",  
	        type: "POST",
	        dataType:'json',        
	        data: {"userId":userIds},        
	        cache: false,
	        success: function (html) {
	        	location.reload();
		        }  
	    });
	}

</script>    
  