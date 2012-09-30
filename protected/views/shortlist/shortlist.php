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

            <!--head closing-->
            <!--main-content-->
            <div id="main-content">
            	<!--left-content-->
  
    	  <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
  <!--center profile details closing--> 
  			<div id="content-left">
  			  <!--closing central profile details closing-->
              <!--left-content closing-->
              <!--left-content-->
              <!--bottom-content closing-->


             <div class="content-right-02"><!--div_mdl-->


<div class="txt_bld_add_sub">


					
                  <p class="text_pink-hd">Shortlisted Profiles</p>
                <p class="space-25px">&nbsp;</p>


                    	<div class="clear"></div>
						 <p class="line"></p>
                        <p class="sellect-all"><span class="txt_normal-2"><INPUT type="checkbox" class="selection" name="selection">&nbsp;&nbsp;Select All</span></p>
                        
                             <a class="rmv-large" href="#">Remove Shortlist</a>

<div class="view-1">
          <div class="first-new"><a class="fpnl" href="#">First</a></div>

        <div class="first-new"><a class="fpnl" href="#">Previous</a></div>
              
		 <div class="first-new"><a class="fpnl" href="#">Next</a></div>
                        
                <div class="first-new"><a class="fpnl" href="#">Last</a></div>
                  
                     
                        
                      <div class="right">
                        <a href="#"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/view.jpg" border="0" class="view_img" /></a>
                        <a href="#"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/view_2.jpg"  class="view_img"  border="0" /></a></div>
                         <div id="view-02" >
                        <span class="view_text">View</span></div>
          </div>
          
          
          <p class="clear">&nbsp;</p><p class="space-10px">&nbsp;</p>

                <!--bottom-content-->
              </div>
                <p class="clear">&nbsp;</p>
				
                        <div class="line_mg_0"></div>
                        <p class="line-1pix"></p>
                    </div>
					
					
					<div class="clear"></div>
					
					
					
					<div class="space-10px"><p>&nbsp;</p></div>
                    
		


<?php 
  $heightArray = Utilities::getHeights();
  $index = 1;
  if(isset($users)){
  foreach ($users as $value) { ?>
                   
<div class="<?php if($index % 3 == 0) { echo 'search_div_1st';} else{ echo 'search_div_3rd';}?>"><!--search_div_lft-->
						 <p class="txt_normal-2"><INPUT type="checkbox" name="userId" class="case" value="<?php echo $value->userId?>">&nbsp;&nbsp;Select</p><p class="space-10px">&nbsp;</p>
                         <a href="album.html"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/photo_5.jpg" border="0" class="search_div_img" /></a>
          
                        <p class="gray-rtsm-link"> <a href="<?php echo '/search/byid?id='.$value->marryId ?>"><?php echo $value->name; echo '( '.$value->marryId.' )' ;?></a></p>
                      
                        <p class="gray-rtsm">  <?php if(isset($value->userpersonaldetails->religion))echo $value->userpersonaldetails->religion->name ;?> , <?php if(isset($value->userpersonaldetails->caste))echo $value->userpersonaldetails->caste->name ;?> &nbsp;</p>
                      
                        <p class="gray-rtsm"> <?php echo Utilities::getAgeFromDateofBirth($value->dob); ?>Years &nbsp;</p>
                       
                        <p class="gray-rtsm"> <?php if(isset($value->physicaldetails->heightId))echo $heightArray[$value->physicaldetails->heightId]; ?> &nbsp;</p>
                        
                        <p class="gray-rtsm"> <?php if(isset($value->userpersonaldetails->place))echo $value->userpersonaldetails->place->name ?>, <?php if(isset($value->userpersonaldetails->state))echo $value->userpersonaldetails->state->name ?>, <?php if(isset($value->userpersonaldetails->country))echo $value->userpersonaldetails->country->name?> &nbsp;</p>
                       
                        <p class="gray-rtsm"> <?php if(isset($value->educations->education))echo $value->educations->education->name?> &nbsp;</p>
                       
                        <p class="gray-rtsm"> <?php if(isset($value->educations->occupation))echo $value->educations->occupation->name ?> &nbsp;</p>
						
						  <p class="gray-rtsm"> <span class="blue-text-01"><a href="<?php echo '/search/byid?id='.$value->marryId ?>">View Full Profile</a></span></p>
                       
                      <div class="clear"></div>
                      
                      
                      	  	   
                      	<div class="pages-1">
                        <div class="arrow">
                        
                        <a href="#" class="hh_11" ></a></div>
                   
                   <div class="arrow">
                   
                     <a href="#" class="hh_11_cc" > </a></div>
                        </div>
                        
                        
						  <div class="clear"></div>
					<p class="text_pink-bold">
						<a href="#">Remove Shortlist</a><br />
						<a href="#">Send Message</a><br />
						<a href="#">Decline Interest</a></p>
<div class="clear"></div>
</div>
<?php 
  if($index % 3 == 0) { 
  echo '<p class="clear"></p><p class="line"></p>';
  }
  $index++;
  }
  }
  else {
  	echo "No Shortlisted profiles";
  }
  ?>
<!--/search_div_1st-->

                   


                        <!--/search_div_lft-->
<p class="clear"></p>
                        
						<!--/search_div_lft-->
						<!--/search_div_lft-->
<p class="clear"></p>
						
                        <!--/search_div_lft-->
                        <!--/search_div_lft-->
<p class="clear"></p>
                        <p class="line"></p>
                        <p class="sellect-all"><span class="txt_normal-2"><INPUT type="checkbox" class="selection" name="selection">&nbsp;&nbsp;Select All</span></p>
                                            <a class="rmv-large" href="#">Remove Shortlist</a>

               
               
               
               <div class="view-1">
       	<div class="first-new"><a class="fpnl" href="#">First</a></div>

        <div class="first-new"><a class="fpnl" href="#">Previous</a></div>
              
		<div class="first-new"><a class="fpnl" href="#">Next</a></div>
                        
        <div class="first-new"><a class="fpnl" href="#">Last</a></div>
                             
                       
                        
                      <div class="right">
                        <a href="#"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/view.jpg" border="0" class="view_img" /></a>
                        <a href="#"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/view_2.jpg"  class="view_img"  border="0" /></a></div>
                         <div id="view-02" >
                        <span class="view_text">View</span></div>
          </div>
          
            <form id="shortlist"  name="shortlist" method="post"  action="/shortlist/remove">
			
			</form>  
              
              
              <p class="clear">&nbsp;</p><p class="space-10px">&nbsp;</p>

                <!--bottom-content-->
              </div>
                <p class="clear">&nbsp;</p>
  </div>
  
  <script type="text/javascript">
$(document).ready(function() {

	 $('.selection').change(function () {

		 if($(this).attr("checked")){
			 $('input:checkbox').attr('checked','checked');
		}else{ 
			$('input:checkbox').removeAttr('checked');
		}
		 
	 }); 	

	 $('.case').change(function () {
		$('.selection').attr("checked",false);
		 });
	 
	 $('.rmv-large').click(function (){
		 var  allVal= [];
		 if($("input:checkbox[name=userId]:checked").length == 0)
		 {
			alert('Please select any one of profile to remove');
			return false;
		 }		 
		 $("input:checkbox[name=userId]:checked").each(function(){
			 allVal.push($(this).val());
		 });

		 $('<input>').attr({
			    type: 'hidden',
			    id: 'userId',
			    name: 'userId',
			    value: allVal
			}).appendTo('#shortlist');
			  $('#shortlist').submit(); 
		  
	 });
		 //		
});


</script>    
  