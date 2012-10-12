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
* @title payment.php
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
              <div class="line-new-1"></div>
			  
			  <div class="right"></div>
			  
			  
              
		   <p class="text_pink-hd">My Payment Summary</p>
			  
              <div class="clear"></div>
			<?php if(isset($payment)) {?>                              

                  <div class="space-15px">&nbsp;</div>
                  
  <?php foreach ($payment as $key => $value) {?>          
<div class="div_mdl_space_1"><!--div_mdl_space_1--><!--/div_mdl_space_left--><!--/div_mdl_space_mdl-->


<div class="div_mdl_space_left_nh_large">		
<p class="txt_bld_nm">Subscribed at <?php Utilities::getHumanTime($value->startdate) ?>.</p></div>

</div><!--/div_mdl_space_1-->
<div class="clear"></div>
<p class="space-10px">&nbsp;</p>

<div class="div_mdl_space_1"><!--div_mdl_space_1-->

	<div class="div_mdl_space_left_nh">		<!--div_mdl_space_left-->

		<p class="txt_bld_nm">Type of Payment</p>
</div><!--/div_mdl_space_left-->

			<div class="div_mdl_space_mdl_sub"><!--div_mdl_space_mdl-->
			
<p class="txt_nm">Coupon</p>

</div><!--/div_mdl_space_mdl-->



				
</div><!--/div_mdl_space_1-->

<div class="div_mdl_space_1"><!--div_mdl_space_1-->

	<div class="div_mdl_space_left_nh">		<!--div_mdl_space_left-->

		<p class="txt_bld_nm">Reference ID</p>
</div><!--/div_mdl_space_left-->

			<div class="div_mdl_space_mdl_sub"><!--div_mdl_space_mdl-->
<p class="txt_nm"><?php echo $value->couponcode?></p>
</div><!--/div_mdl_space_mdl-->



</div><!--/div_mdl_space_1--><!--/div_mdl_space_1--><!--/div_mdl_space_1--><!--/div_mdl_space_1--><!--/div_mdl_space_1-->
<div class="clear"></div>
<div class="line"></div>

<div class="clear"></div>
<?php }?>


</div><!--/div_mdl_space_1--><!--/div_mdl_space_1--><!--/div_mdl_space_1-->
<div class="clear"></div>
<div class="clear"></div>

<div class="space-10px"><p>&nbsp;<br /><br /></p></div>
</div>

<?php }
else
{
	echo "No payments so far";
}
?>

               </div> 
  <!--closing central profile details closing-->      
              
                <!--left-content closing-->
                <!--left-content-->
                
                <div id="content-right-small-1">
               	  <div class="div_r_1"><!--div_r-->

<p class="text_20_gery"><a href="payment_benefits.html">Subscribe Now!</a><br />
Only for</p>

<img src="images/img_200.jpg" class="left"  border="0"/>
<p class="text_20_gery">For 3 Months</p>


<div class="clear"></div>
               	  </div>
              
              </div></div>
                <p class="clear">&nbsp;</p>
                
          