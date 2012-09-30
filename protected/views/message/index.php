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
			  
			
 <p class="text_pink-hd">Messages Recieved</p>
 <div class="space-35px"><p>&nbsp;<br /><br /></p></div>
  
            
              
              <div style="float:right">
             
             <a class="recive" href="<?php echo Utilities::createAbsoluteUrl('message','index');?>">Recived</a>

              <a class="sm-send" href="<?php echo Utilities::createAbsoluteUrl('message','sent');?>">Sent</a>
                          <a class="acknl" href="<?php echo Utilities::createAbsoluteUrl('message','acknowledgement');?>">Delivery Acknowledgement</a>

             
             
             
             </div>
                <div class="left">
                <INPUT type="checkbox" name="select" >
                <span class="bullettext_select">&nbsp;Select all&nbsp;</span>
                <span class="bullettext_select">&nbsp;<a href="#">Delete</a></span>                </div>
                              <div class="clear"></div>
                              <div class="line"></div>
                            
                <div class="space-15px">&nbsp;</div>
                              <div class="clear"></div>
                <?php if(!empty($message)):?>              
                 <?php foreach($message as $messageItem):?>              
                <!--div_msg_fullbox-->   <div class="msgbox-full_large">
                <div style="float:left; padding-right:5px;">
                 <INPUT type="checkbox" name="select" class="checkicon">
                 </div>
                 <div style="float:left;">
                <a href="album.html"> <img src="images/model_3.jpg" class="imageicon"  border="0"/></a>
                 </div>
                  <div style="float:left; padding:5px 0px 0px 10px;">
                 <p> <span class="text_blue_b"><a href="search.html">Seema Varma</a></span></p>
                  <p class="txt_rg">I Love You... Give me your number</p>
 <p class="innersidelinks-still-l0">2 Minuts ago</p>
                  </div>
                  
                  <a class="replay" href="#">Replay</a>
           
                  
                  <div class="clear"></div>
                  
              
                  
                 </div>
                 
              <div class="clear"></div>             
               <?php endforeach;?>  
               <?php else: ?>  
                 <!--div_msg_fullbox-->   <div class="msgbox-full_large">
                 	<?php echo Yii::t('error','noMessages'); ?>
                 </div>
               <?php endif;?>
                 
                 
                 
                 
                
                 
                                            
                <!--div_msg_fullbox-->   <div class="msgbox-full_large">
                <div style="float:left; padding-right:5px;">
                 <INPUT type="checkbox" name="select" class="checkicon">
                 </div>
                 <div style="float:left;">
                     <a href="album.html"> <img src="images/model_3.jpg" class="imageicon"  border="0"/></a>
                 </div>
                  <div style="float:left; padding:5px 0px 0px 10px;">
                 <p> <span class="text_blue_b"><a href="search.html">Seema Varma</a></span></p>
                  <p class="txt_rg">I Love You... Give me your number</p>
 <p class="innersidelinks-still-l0">2 Minuts ago</p>
                  </div>
                 
                 
              
                 
         
                                  <a class="replay" href="#">Replay</a>

                  <div class="clear"></div>
                  
              
                  
                 </div>
                 
                 
                 
                 
                 
                 
                 
                                            
                <!--div_msg_fullbox-->   <div class="msgbox-full_large">
                <div style="float:left; padding-right:5px;">
                 <INPUT type="checkbox" name="select" class="checkicon">
                 </div>
                 <div style="float:left;">
                      <a href="album.html"> <img src="images/model_3.jpg" class="imageicon"  border="0"/></a>
                 </div>
                  <div style="float:left; padding:5px 0px 0px 10px;">
                 <p> <span class="text_blue_b"><a href="search.html">Seema Varma</a></span></p>
                  <p class="txt_rg">I Love You... Give me your number</p>
 <p class="innersidelinks-still-l0">2 Minuts ago</p>
                  </div>
                  
                 
                 
                  
                                   <a class="replay" href="#">Replay</a>

                  <div class="clear"></div>
                  
              
                  
                 </div>
                 
                 
                 
                 
                
                
                
                
                 
                                            
                <!--div_msg_fullbox-->   <div class="msgbox-full_large">
                <div style="float:left; padding-right:5px;">
                 <INPUT type="checkbox" name="select" class="checkicon">
                 </div>
                 <div style="float:left;">
                      <a href="album.html"> <img src="images/model_3.jpg" class="imageicon"  border="0"/></a>
                 </div>
                  <div style="float:left; padding:5px 0px 0px 10px;">
                <p> <span class="text_blue_b"><a href="search.html">Seema Varma</a></span></p>
                  <p class="txt_rg">I Love You... Give me your number</p>
 <p class="innersidelinks-still-l0">2 Minuts ago</p>
                  </div>
                  
                  
               
                
          
                                   <a class="replay" href="#">Replay</a>

                  <div class="clear"></div>
                  
              
                  
                 </div>
                 
                 
                 
                 
                
                
                
                 
                                            
                <!--div_msg_fullbox-->   <div class="msgbox-full_large">
                <div style="float:left; padding-right:5px;">
                 <INPUT type="checkbox" name="select" class="checkicon">
                 </div>
                 <div style="float:left;">
                      <a href="album.html"> <img src="images/model_3.jpg" class="imageicon"  border="0"/></a>
                 </div>
                  <div style="float:left; padding:5px 0px 0px 10px;">
                 <p> <span class="text_blue_b"><a href="search.html">Seema Varma</a></span></p>
                  <p class="txt_rg">I Love You... Give me your number</p>
 <p class="innersidelinks-still-l0">2 Minuts ago</p>
                  </div>
                 
                 
                   
                  
                                   <a class="replay" href="#">Replay</a>

                  <div class="clear"></div>
                  
              
                  
                 </div>
                 
                 
                 
                 
          
                 
                                            
                <!--div_msg_fullbox-->   <div class="msgbox-full_large">
                <div style="float:left; padding-right:5px;">
                 <INPUT type="checkbox" name="select" class="checkicon">
                 </div>
                 <div style="float:left;">
                       <a href="album.html"> <img src="images/model_3.jpg" class="imageicon"  border="0"/></a>
                 </div>
                  <div style="float:left; padding:5px 0px 0px 10px;">
                <p> <span class="text_blue_b"><a href="search.html">Seema Varma</a></span></p>
                  <p class="txt_rg">I Love You... Give me your number</p>
 <p class="innersidelinks-still-l0">2 Minuts ago</p>
                  </div>
                 
                 
            
                
                  
                                    <a class="replay" href="#">Replay</a>

                  
                  <div class="clear"></div>
                  
              
                  
                 </div>
                 
                 
                 
                 
                
                
                
                 
                                            
                <!--div_msg_fullbox-->   <div class="msgbox-full_large">
                <div style="float:left; padding-right:5px;">
                 <INPUT type="checkbox" name="select" class="checkicon">
                 </div>
                 <div style="float:left;">
                <a href="album.html"> <img src="images/model_3.jpg" class="imageicon"  border="0"/></a>
                 </div>
                  <div style="float:left; padding:5px 0px 0px 10px;">
                <p> <span class="text_blue_b"><a href="search.html">Seema Varma</a></span></p>
                  <p class="txt_rg">I Love You... Give me your number</p>
 <p class="innersidelinks-still-l0">2 Minuts ago</p>
                  </div>
                 
                 
                 
              
                 
             
                                    <a class="replay" href="#">Replay</a>

                  <div class="clear"></div>
                  
              
                  
                 </div>
                 
                
                 
                  <div class="left">
                <INPUT type="checkbox" name="select" >
                <span class="bullettext_select">&nbsp;Select all&nbsp;</span>
                <span class="bullettext_select">&nbsp;<a href="#">Delete</a></span>  </div>
             
              <div style="float:right">
             
             <a class="recive" href="<?php echo Utilities::createAbsoluteUrl('message','index');?>">Recived</a>

              <a class="sm-send" href="<?php echo Utilities::createAbsoluteUrl('message','sent');?>">Sent</a>
                          <a class="acknl" href="<?php echo Utilities::createAbsoluteUrl('message','acknowledgement');?>">Delivery Acknowledgement</a>
             
             
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
