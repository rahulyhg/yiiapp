 
            <!--main-content-->
            <div id="main-content">
            	<!--left-content-->
 			  <?php $this->widget('application.widgets.menu.Leftmenu'); ?> 
 
  <!--center profile details closing--> 
  			<div id="content-right-02"> 
              <div class="div_mdl">
              <div class="line-new-1"></div>
         
                <p class="text_pink-hd">My Privacy Settings</p>
                <p class="space-35px">&nbsp;</p>
              <div class="clear"></div>
                             <p class="txt_rg"> Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone!</p>
                              
                                   <div class="clear"></div>

                  <div class="space-15px">&nbsp;</div>
                  
              
<div class="div_mdl_space_22"><!--div_mdl_space_22-->

	<div class="div_mdl_space_left">		<!--div_mdl_space_left-->

		<p class="txt_bld_top">My Album</p>
</div><!--/div_mdl_space_left-->
<form id="updateAlbum"  name="updateAlbum" method="post"  action="/privacy/update">
		  <div class="div_mdl_space_ff"><!--div_mdl_space_mdl-->
				<p class="check_box">
				<?php echo CHtml::checkBoxList('album',$album,array('all'=>'All','subscribers'=>'Subscribers','member'=> 'Logged Members','request' => 'By Request')); ?>
				</p>			
							<p class="txt_lft_300">23 Album Request Decliened</p>
							
							
                            
                             
                         
                            
                             <p class="txt_lft_300">10 Album Request Accepted </p>
                             
                
</div><!--/div_mdl_space_mdl-->




					<div class="div_mdl_space_rgt"><!--div_mdl_space_rgt-->
			<p class="log_color_in_sub"><a href="javascript:updateAlbum.submit();" class="srch-sub-bottom">Update</a></p>
			
            
            

	</div><!--/div_mdl_space_rgt-->
</form>
</div><!--/div_mdl_space_22-->


<div class="clear"></div>



<div class="space-30px"><p>&nbsp;</p></div>

<div class="div_mdl_space_22"><!--div_mdl_space_22-->

	<div class="div_mdl_space_left">		<!--div_mdl_space_left-->

		<p class="txt_bld_top">My Family Album
</p>
</div><!--/div_mdl_space_left-->
		<form id="updateFamily"  name="updateFamily" method="post"  action="/privacy/update">
		  <div class="div_mdl_space_ff"><!--div_mdl_space_mdl-->

			<p class="check_box">
				<?php echo CHtml::checkBoxList('family',$family,array('all'=>'All','subscribers'=>'Subscribers','member'=> 'Logged Members','request' => 'By Request')); ?>
				</p>

							 <p class="txt_lft_300">23 Family Album Request Decliened</p>
                             <p class="txt_lft_300">10 Family Album Request Accepted </p>
                             
                
                        
</div><!--/div_mdl_space_mdl-->




					<div class="div_mdl_space_rgt"><!--div_mdl_space_rgt-->
			<p class="log_color_in_sub"><a href="javascript:updateFamily.submit();" class="srch-sub-bottom">Update</a></p>
            
	</div><!--/div_mdl_space_rgt-->
	</form>

</div><!--/div_mdl_space_22-->

  <div class="clear"></div>
  
<div class="space-10px"><p>&nbsp;</p></div>
 
 




<div class="div_mdl_space_22"><!--div_mdl_space_22-->

	<div class="div_mdl_space_left">		<!--div_mdl_space_left-->

		<p class="txt_bld_top">My Documents
</p>
</div><!--/div_mdl_space_left-->
<form id="updateDoc"  name="updateDoc" method="post"  action="/privacy/update">
		  <div class="div_mdl_space_ff"><!--div_mdl_space_mdl-->
		
					<p class="check_box">
				<?php echo CHtml::checkBoxList('documents',$documents,array('subscribers'=>'Subscribers','request' => 'By Request')); ?>
				</p>
		
<div class="clear"></div>
 	 <p class="txt_lft_300"><span class="txt_lft_1px">23 Document Request Decliened</span> &nbsp;&nbsp;&nbsp;</p>
                            
                              
                             <p class="txt_lft_300"><span class="txt_lft_1px">10 Document Request Accepted </span></p>
                             
                       
                                
						
</div>
			<!--/div_mdl_space_mdl-->


					<div class="div_mdl_space_rgt"><!--div_mdl_space_rgt-->
			<p class="log_color_in_sub"><a href="javascript:updateDoc.submit();" class="srch-sub-bottom">Update</a></p>

	</div><!--/div_mdl_space_rgt-->
    </form>

</div><!--/div_mdl_space_22--><!--/list_class-new_div_1--><!--/list_class-new_div_2--><!--/div_mdl_space_rgt-->
    
  <div class="clear"></div>
  
<div class="space-10px"><p>&nbsp;</p></div>
 
 

<div class="div_mdl_space_22"><!--div_mdl_space_22-->

	<div class="div_mdl_space_left">		<!--div_mdl_space_left-->

		<p class="txt_bld_top">My Astro Details
</p>
</div><!--/div_mdl_space_left-->
<form id="updateAstro"  name="updateAstro" method="post"  action="/privacy/update">
		  <div class="div_mdl_space_ff"><!--div_mdl_space_mdl-->

			<p class="check_box">
				<?php echo CHtml::checkBoxList('astro',$astro,array('all'=>'All','subscribers'=>'Subscribers','member'=> 'Logged Members','request' => 'By Request')); ?>
				</p>

	 	   	 <p class="txt_lft_300"><span class="txt_lft_1px">23 Astro DetailsRequest Decliened</span></p>
              <p class="txt_lft_300"><span class="txt_lft_1px">10  Astro Details Request Accepted</span></p>
                             
                 
                         
</div><!--/div_mdl_space_mdl-->


					<div class="div_mdl_space_rgt"><!--div_mdl_space_rgt-->
			<p class="log_color_in_sub"><a href="javascript:updateAstro.submit();" class="srch-sub-bottom">Update</a></p>

	</div><!--/div_mdl_space_rgt-->
</form>
</div><!--/div_mdl_space_22-->
  <div class="clear"></div>
  
<div class="space-10px"><p>&nbsp;</p></div>



<div class="div_mdl_space_22"><!--div_mdl_space_22-->

	<div class="div_mdl_space_left">		<!--div_mdl_space_left-->

		<p class="txt_bld_top">My Reference
</p>
</div><!--/div_mdl_space_left-->
<form id="updateReference"  name="updateReference" method="post"  action="/privacy/update">
		  <div class="div_mdl_space_ff"><!--div_mdl_space_mdl-->

							<p class="check_box">
				<?php echo CHtml::checkBoxList('reference',$reference,array('subscribers'=>'Subscribers','request' => 'By Request')); ?>
				</p>
				
            <div class="clear"></div>
            
								<p class="txt_lft_300"><span class="txt_lft_1px">23 Refference Request Decliened</span> &nbsp;&nbsp;</p>
                            
                             
                         
                            
                             <p class="txt_lft_300"><span class="txt_lft_1px">10 Refference Request Accepted </span></p>
                             
                
</div><!--/div_mdl_space_mdl-->




					<div class="div_mdl_space_rgt"><!--div_mdl_space_rgt-->
			<p class="log_color_in_sub"><a href="javascript:updateReference.submit();" class="srch-sub-bottom">Update</a></p>
            
            



</div><!--/div_mdl_space_22-->

  <div class="clear"></div>
  
<div class="space-10px"><p>&nbsp;</p></div>

</form>

				

</div><!--/div_mdl_space_22-->

<div class="div_mdl_space_22"><!--div_mdl_space_22-->

	<div class="div_mdl_space_left">		<!--div_mdl_space_left-->

		<p class="txt_bld_top">My Contact
</p>
</div><!--/div_mdl_space_left-->
<form id="updateContact"  name="updateContact" method="post"  action="/privacy/update">
		  <div class="div_mdl_space_ff"><!--div_mdl_space_mdl-->

			<p class="check_box">
				<?php echo CHtml::checkBoxList('contact',$contact,array('subscribers'=>'Subscribers','request' => 'By Request')); ?>
				</p>

            <div class="clear"></div>
			 <p class="txt_lft_300"><span class="txt_lft_1px">23 Contact Request Decliened</span></p>
                            
                             
                           
     <p class="txt_lft_300"><span class="txt_lft_1px">10 Album Request Accepted </span></p>                      
                         
                
                        
                             
</div>
			<!--/div_mdl_space_mdl-->



					<div class="div_mdl_space_rgt"><!--div_mdl_space_rgt-->
			<p class="log_color_in_sub"><a href="javascript:updateContact.submit();" class="srch-sub-bottom">Update</a></p>

	</div><!--/div_mdl_space_rgt-->
</form>
</div><!--/div_mdl_space_22-->


<div class="clear">
<p class="space-15px">&nbsp;<br /><br /></p>

 <div class="line"></div>
              <p class="space-5px">&nbsp;</p>
              

  <p class="text_pink-hd">My Account Settings</p>
                <p class="space-35px">&nbsp;</p>
                
<p class="txt_rg">Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone!</p>
            <p class="space-15px">&nbsp;</p>
            
    <a class="chg-pas" href="/user/password">Change Password</a>

 <a class="chg-pas" href="/user/deactivate">Deactivate account</a>

 <a class="chg-pas" href="/user/delete">Delete My Account</a>

              </div> </div>
  <!--closing central profile details closing-->      
              
                <!--left-content closing-->
                <!--left-content-->
                
                <div id="content-right-small">
               	  <div class="div_r_1"><!--div_r-->

<p class="text_20_gery"><a href="payment_benefits.html">Subscribe Now!</a><br />
Only for</p>

<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/img_200.jpg" class="left" width="100%"  border="0"/>


<p class="text_20_gery">For 3 Months</p>


<div class="clear"></div>
               	  </div>
              
              </div></div>
<!--right-content closing-->
            </div>
            <!--main-content closing-->
            
