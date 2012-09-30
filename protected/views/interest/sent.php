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
* @title sent.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>


            <div id="main-content">
            	<!--left-content-->
  
			  <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
  <!--profile details closing--> 
  <!--center profile details closing--> 
  			<div id="content-right-02"> 
              <div class="div_mdla">
                   <p class="space-3px">&nbsp;</p>
              <div class="line-new-1"></div>
			  
			  
         <p class="text_pink-hd">Interest Sent</p>
              
              <p class="clear"></p>
              <div class="space-15px">&nbsp;</div>

			<div style="float: right">

				<a class="sm-send" href="#">Cancel</a>
			</div>

			<div class="left">
                <INPUT type="checkbox" class="selection" name="selection" >
                <span class="bullettext_select">&nbsp;Select all&nbsp;</span>
                </div>
                              <div class="clear"></div>
                              <div class="line"></div>

                           
               
                              <div class="clear"></div>
                              
                              
                              
 <?php 
  $heightArray = Utilities::getHeights();
  if(isset($user)){
  foreach ($user as $value) { ?>                             
                              
                <!--div_msg_fullbox-->   <div class="msgbox-full_interest">
                <div style="float:left; padding-right:5px;">
                 <INPUT type="checkbox" name="userId" class="case" value="<?php echo $value->userId?>">
                 </div>
                 <div class="ii_div">
                   <a href="album.html"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/model_thumb/thumb_1.jpg" border="0" class="imageicon" /></a> </div>
                  <div class="div_lft_part">
                 <p> <span class="text_blue_b"><a href="<?php echo 'byid?id='.$value->marryId ?>"><?php echo $value->name; echo '( '.$value->marryId.' )' ;?></a></span> (You expressed interest on <?php echo date('d-M-Y',strtotime($interest[$value->userId]));?>)</p>
                  <p class="txt_rg"><?php echo $value->religion;?> , <?php echo $value->caste;?> &nbsp;, <?php echo $value->age ?>Years &nbsp; - <?php if(isset($value->heightId)) echo $heightArray[$value->heightId]; ?> &nbsp;
<?php echo $value->place.', '.$value->state.', '.$value->country; ?> &nbsp;</p>
 <p class="innersidelinks-still-l0">Interest Sent you, 2 Minuts ago</p>
                  </div>
                  
                                                                 	<a class="cancel-sm" href="#">Cancel</a>

                 
                  
                 <div class="clear"></div> 
                 </div>
      <?php }
  }
  else
  {
  	echo "No interests sent so far";
  }
      ?> 
               
         
			<form id="interest"  name="interest" method="post"  action="/interest">
			
			</form>  
              

               
       			
                <div class="space-35px">&nbsp;</div>
                  <div class="left">
                <INPUT type="checkbox" class="selection" name="selection" >
                <span class="bullettext_select">&nbsp;Select all&nbsp;</span>
                </div>
				
				<div style="float: right">

				<a class="sm-send" href="#">Cancel</a>
			</div>	
			
              </div> 
  <!--closing central profile details closing-->      
              
                <!--left-content closing-->
                <!--left-content-->
                
                <div id="content-right-small-1">
               	  <div class="div_r_1"><!--div_r-->


<p class="text_20_gery"><a href="payment_benefits.html">Subscribe Now!</a><br />
Only for</p>
<div style="float:left; width:96%;"> 
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/img_200.jpg" class="left"  border="0" style="width:100%;"/>
</div>
<p class="text_20_gery">For 3 Months</p>




<div class="clear"></div>
               	  </div>
              
              </div></div>
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
	 
	 $('.cancel-sm').click(function (){
		 var  allVal= [];
		 if($("input:checkbox[name=userId]:checked").length == 0)
		 {
			alert('Please select any one of profile for action');
			return false;
		 }		 
		 $("input:checkbox[name=userId]:checked").each(function(){
			 allVal.push($(this).val());
		 });


		 $('<input>').attr({
			    type: 'hidden',
			    id: 'sent',
			    name: 'key',
			    value: 'sent'
			}).appendTo('#interest');
		 $('<input>').attr({
			    type: 'hidden',
			    id: 'userId',
			    name: 'userId',
			    value: allVal
			}).appendTo('#interest');
			  $('#interest').submit(); 
		  
	 });

	 $('.sm-send').click(function (){
		 var  allVal= [];
		 if($("input:checkbox[name=userId]:checked").length == 0)
		 {
			alert('Please select any one of profile for action');
			return false;
		 }		 
		 $("input:checkbox[name=userId]:checked").each(function(){
			 allVal.push($(this).val());
		 });


		 $('<input>').attr({
			    type: 'hidden',
			    id: 'sent',
			    name: 'key',
			    value: 'sent'
			}).appendTo('#interest');
		 $('<input>').attr({
			    type: 'hidden',
			    id: 'userId',
			    name: 'userId',
			    value: allVal
			}).appendTo('#interest');
			  $('#interest').submit(); 
		  
	 });
		 //		
});


</script>   