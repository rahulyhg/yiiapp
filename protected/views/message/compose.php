<!--main-content-->
            <div id="main-content">
            	<!--left-content-->
  
    
        <!-- left menu -->
        <?php $this->widget('application.widgets.menu.Leftmenu'); ?>
        <!-- /left menu -->
  <!--center profile details closing--> 
  			<div id="content-right-02"> 
              <div class="div_mdla">
             <div class="line_sm"></div>
			  
			
 <p class="text_pink-hd">New Message</p>
 <div class="space-35px"><p>&nbsp;<br /><br /></p></div>
  
            
              <?php if(isset($message) && $message != "") {
              	echo $message;
               }?>
              <div>
             	<form name="frmSend" id="frmSend" method="post" action = "<?php echo Utilities::createAbsoluteUrl('message','compose') ?>" />
				Message :
				<textarea rows="10" cols="20" name="userMessage" id="userMessage"></textarea>
				<input type="submit" name="addMessage" value = "Send" class="btnStyle" />
             	</form>
             </div>
                 
                 
                 
                      
                 
                 
               <!--div_closing_msg_fullbox-->    
                 <div class="clear"></div>
                    
                    
              </div><!--div_closing_msg_fullbox--><!--div_closing_msg_fullbox--><!--div_closing_msg_fullbox--><!--div_closing_msg_fullbox--> 
                     
                       
                       

              <div class="space-35px"></div>
  			</div> 
  <!--closing central profile details closing-->      
              
                <!--left-content closing-->
                <!--left-content-->
                
                <div id="content-right-small-1">
               	  <div class="div_r_1"><!--div_r-->

<p class="text_20_gery"><a href="payment_benefits.html">Subscribe Now!</a><br />
Only for</p>

  <div class="div_ww"> 
<img src="images/img_200.jpg" class="left" style="width:100%;"  border="0"/>
</div>

<p class="text_20_gery">For 3 Months</p>


<div class="clear"></div>
               	  </div>
              
              </div></div>
                <p class="clear">&nbsp;</p>
                
                <!--right-content closing-->
</div>
            <!--main-content closing-->
