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
* @title horoscope.php
* @description <Description of this class>
*  @filesource <URL>
*  @version <Revision>
*/
?>

            <!--main-content-->
            <div id="main-content">
            	<!--left-content-->
  <div id="content-left-1">
<form id="userHoro" name="userHoro" method="post"  action="/user/horo">
         
 <p><span  class="text_pink-hd">My astro details</span><br />
 <p>Its make your profile more visible</p>
 
 <div class="clear"></div>
 <div class="line"></div>
                     
<p class="txt_rg">Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone!</p>
                    
        <p class="space-10px">&nbsp;</p>
                   
        <div class="list_classx">
<p class="txt_bldn">Date of birth</p></div>
                    <div class="list_class-2x">
                     
 	
 <select class="sel_date_memo_l">
 <option>01</option>
 <option>02</option>
 <option>03</option>
 </select> 
 
   
<select class="sel_month_memo_l">
 <option>Januvary</option>
 <option>Februaryr</option>
 <option>March</option>
 </select>  
 
   
	  <select class="sel_year_memo_small">
 <option>1975</option>
 <option>1976</option>
 <option>1977</option>
 </select>  
					</div>
	<div class="clear"></div>	
					
 <div class="list_classx">
<p class="txt_bldn">Country of birth</p></div>
                    <div class="list_class-2x">
                        <form method="get">
                         <select class="select_small_average">
                         <option>Idavam</option>
                         <option>Idavam</option>
                         <option>Idavam</option>
                         </select>
                        </form>
					</div>

	<div class="clear"></div>
    
    
    
     <div class="list_classx">
<p class="txt_bldn"> State of Birth</p></div>
                    <div class="list_class-2x">
                        <form method="get">
                         <select class="select_small_average">
                         <option>Idavam</option>
                         <option>Idavam</option>
                         <option>Idavam</option>
                         </select>
                        </form>
					</div>

	<div class="clear"></div>
    
    
    
    
     <div class="list_classx">
<p class="txt_bldn">City of Birth</p></div>
                    <div class="list_class-2x">
                            <form method="get">
                         <select class="select_small_average">
                         <option>Idavam</option>
                         <option>Idavam</option>
                         <option>Idavam</option>
                         </select>
                        </form>
					</div>

	<div class="clear"></div>

     <div class="list_classx">
<p class="txt_bldn">Language</p>
     </div>
                    <div class="list_class-2x">
                          <form method="get">
                         <select class="select_small_average">
                         <option>Idavam</option>
                         <option>Idavam</option>
                         <option>Idavam</option>
                         </select>
                        </form>
					</div>




	<div class="clear"></div>
    
    
        
     <div class="list_classx">
<p class="txt_bldn">Time Correction</p>
     </div>
                    <div class="list_class-2x">
                           <form method="get">
                         <select class="select_small_average">
                         <option>Idavam</option>
                         <option>Idavam</option>
                         <option>Idavam</option>
                         </select>
                        </form>
					</div>

	<div class="clear"></div>

     <div class="list_classx">
<p class="txt_bldn">Your Sign</p></div>
                    <div class="list_class-2x">
                           <form method="get">
                         <select class="select_small_average">
                         <option>Idavam</option>
                         <option>Idavam</option>
                         <option>Idavam</option>
                         </select>
                        </form>
					</div>




	<div class="clear"></div>
    
    
     <div class="list_classx">
<p class="txt_bldn">Your Astrodate</p>
     </div>
                    <div class="list_class-2x">
                           <form method="get">
                         <select class="select_small_average">
                         <option>Idavam</option>
                         <option>Idavam</option>
                         <option>Idavam</option>
                         </select>
                        </form>
					</div>




	<div class="clear"></div>
    
    
    
	<div class="clear"></div>	
    
    <div class="space-15px"><p>&nbsp;</p></div>
					
 <div class="list_classx">
<p class="txt_bldn">Upload  Grahanila</p></div>
                   
				    <div class="list_class-2x">
<p class="small_p">Select an image file on your computer</p>

	<?php echo CHtml::form('/user/horoupload','post',array('enctype'=>'multipart/form-data')); 
	echo CHtml::activeFileField($model, 'horoscopeFile');
	echo CHtml::submitButton('Upload'); 
	echo CHtml::endForm();
	 ?>
 
   <div class="clear"></div>
  
  
  <p class="space-15px">&nbsp;</p>
  
 </div>
 
 
 <div class="clear"></div>	

<p class="space-15px">&nbsp;</p>

					
 <div class="list_classx">
<p class="txt_bld">Chovva Dosham</p></div>
                   
	<div class="list_class-6x">
                    <p class="radio_sub">
          <input name="registerggg" type="radio" value="myself">&nbsp;&nbsp;Yes</p>
                    <p class="radio_sub">
                    <input type="radio" name="registerggg" value="son">&nbsp;&nbsp;No</p>
					
					                  <p class="radio_sub">
                    <input type="radio" name="registerggg" value="son">&nbsp;&nbsp;Don’t Know</p>
 
 </div>
 
 
 <div class="clear"></div>	
					
 <div class="list_classx">
<p class="txt_bld">Sudha Jathakam</p></div>
                   
	<div class="list_class-6x">
                    <p class="radio_sub">
                    <input name="registerhh" type="radio" value="myself">&nbsp;&nbsp;Yes</p>
                    <p class="radio_sub">
                    <input type="radio" name="registerhh" value="son">&nbsp;&nbsp;No</p>
					
					                  <p class="radio_sub">&nbsp;&nbsp;Don’t Know</p>
<div class="clear"></div>


 </div>
					
		
                    
                    
              <div class="clear"></div>     
 <div class="space-15px"><p>&nbsp;</p></div>     
 
 
    <div class="line"></div>
<p class="space-15px">&nbsp;</p>

             
                                
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld">Who can view Astro details</p>
  </div><!--/list_class-new_div_1--> 
  
<!--list_class-new_div_2-->
    
				    <div class="list_class-6x">
      
      
         <p class="radio-2b">
                            <input type="checkbox" name="register" value="myself">
            &nbsp;All</p>
          <p class="radio-2b">
            <input type="checkbox" name="register2" value="relative" />
  &nbsp;Subscribers</p>
          <p class="radio-2b">
            <input type="checkbox" name="register" value="relative" />
  &nbsp;Loged Members</p>
          <p class="radio-2b">
            <input type="checkbox" name="register" value="relative" />
  &nbsp;By Request</p>
  
  
 
 </div>
 <!--/list_class-new_div_3-->                 
                    
  
  
                     
                 	
<div class="clear"></div> 
    <div class="space-15px"><p>&nbsp;</p></div>
     
              <div class="line"></div>
              <p class="space-10px">&nbsp;</p>
              <!--personal details-->


 <p class="text_pink-hd">Reffernce contact Details</p>
 <div class="clear"></div>
                  <!--personal details-section-1-->	
				  
				 <p class="txt_rg">Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone!</p>
				 
	<div class="clear"></div>
   <div class="space-35px"><p>&nbsp;</p></div> 
                       
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bldnew0">Referance 1</p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Relation" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                  	
<div class="clear"></div> 


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Name" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="House Name / No." />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Place" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Post office" />
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="City" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="District" />
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="State" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Country" />
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Pin Code" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Email" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld">Occupation</p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Occupation" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	


	    
    
    

              
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld">Time to call &nbsp;&nbsp;&nbsp;Between</p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
    
 <select class="sel_date_memo_2">
   <option>12</option>
 <option>12</option>
 <option>12</option>
</select>


 <select class="select_45_memo_gray">
 <option>AM</option>
 <option>PM</option>

 </select>
 

 
 <select class="sel_date_memo_2">
    <option>1</option>
    <option>1</option>
    <option>1</option>
</select>
 <select class="select_45_memo_gray">
    <option>AM</option>
    <option>AM</option>
    <option>AM</option>
  </select>
    </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
         
         
         
         
	<p class="clear">&nbsp;</p>

                    
                    <p class="space-15px">&nbsp;</p>      
              		<div class="line"></div>
              		<p class="space-10px">&nbsp;</p>
                    
                    
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld">Referance 1</p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Relation" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                  	
<div class="clear"></div> 


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Name" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="House Name / No." />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Place" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Post office" />
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="City" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="District" />
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="State" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Country" />
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Pin Code" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Email" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld">Occupation</p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Occupation" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
   <p class="txt_bld">Time to call &nbsp;&nbsp;&nbsp;Between</p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
 <select class="select_45_memo_gray">
   <option>12</option>
 <option>12</option>
 <option>12</option>
</select>


 <select class="select_45_memo_gray">
 <option>AM</option>
 <option>PM</option>

 </select>
 
  
   <select class="select_45_memo_gray">
 <option>1</option>
 <option>1</option>
 <option>1</option>
</select>
 <select class="select_45_memo_gray">
   <option>AM</option>
    <option>AM</option>
    <option>AM</option>
  </select>
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    
    
                    
                    
<div class="clear"></div>
                      
                    
                   <!--closing personal contact details-section-2-->
                  <!--personal contact details-section-3--> 
                    <div class="clear"></div>
                     
        
        <div class="clear"></div>
         
        
                  <!--closing personal contact details-section-3-->
                    <div class="clear"></div> 
                    <p class="space-15px">&nbsp;</p>      
              		<div class="line"></div>
                    
                    
                    
                                       
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld">Referance 1</p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Relation" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                  	
<div class="clear"></div> 


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Name" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="House Name / No." />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Place" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Post office" />
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="City" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="District" />
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
    
    <input type="text" name="input2" id="input2" class="addres_form" placeholder="State" />
    </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Country" />
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Pin Code" />
 
    </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld"></p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Email" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld">Occupation</p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
   <input type="text" name="input2" id="input2" class="addres_form" placeholder="Occupation" />
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
                     
                 	
<div class="clear"></div> 

	    
    
    


 
	    
    
    


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld">Time to call &nbsp;&nbsp;&nbsp;Between</p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
 <select class="select_45_memo_gray">
  <option>12</option>
  <option>12</option>
  <option>12</option>
</select>


 <select class="select_45_memo_gray">
 <option>AM</option>
 <option>PM</option>

 </select>
 
  
 <select class="select_45_memo_gray">
 <option>1</option>
 <option>1</option>
 <option>1</option>
</select>
   <select class="select_45_memo_gray">
    <option>AM</option>
    <option>AM</option>
    <option>AM</option>
  </select>
  </div><!--/list_class-new_div_2--> 
  
    <div class="list_class-new_div_3"><!--list_class-new_div_3-->
  
  </div><!--/list_class-new_div_3-->                 
                    
         
 <div class="clear"></div>     
 <div class="space-15px"><p>&nbsp;</p></div>      
   
   <div class="line"></div>
<p class="space-15px">&nbsp;</p>


                   
  <div class="list_class-new_div_1"><!--list_class-new_div_1-->
  <p class="txt_bld">Who can view contact detail</p>
  </div><!--/list_class-new_div_1--> 
  
    <div class="list_class-new_div_2"><!--list_class-new_div_2-->
  
  
 <p class="radio_x">
          <input type="radio" name="registerjj" value="myself">&nbsp;Subscribers</p>
          <p class="radio">
                            <input type="radio" name="registerjj" value="son">&nbsp;By request</p>
                            
  </div><!--/list_class-new_div_2--><!--/list_class-new_div_3-->                 
                    
  
  
           
 <div class="clear"></div>        
   
 

	      
         
              		<p class="space-10px">&nbsp;</p>
                 	
<div class="clear"></div>
<div class="clear"></div>	

 

 
    
       	
  <div class="clear"></div>	      
<div class="space-15px"><p>&nbsp;</p></div>      
        
  				
 <div class="list_classx">
<p class="txt_bld">&nbsp; </p></div>
                   		<input type="reset" value="Reset" name="yt1" class="reset_sub"> 
                   		<input type="submit" value="Submit" name="yt0" class="reset_sub">
                   
				   

        
                                         
 
 
 
       	
  <div class="clear"></div>	      
<div class="space-15px"><p>&nbsp;</p></div>     

 </form>       
        
    
        
                   
        
        

        
        

        



        
        


        







        



              </div>
                <!--left-content closing-->
                <!--left-content-->
                <div id="content-right_sub">
                     <div class="div_r_1"><!--div_r-->

<p class="text_20_gery">Subscribe Now!<br />
Only for</p>
<div style="float:left; width:100%;">
<a href="#"><img src="images/img_200.jpg" class="left" style="width:100%;"  border="0"/></a>
</div>
<div class="clear"></div>

<div class="line"></div>

<p class="text_20_cntr">Benefits For Subsciribed Users</p>

<p class="text_18_cntr">Contact members directly<br />
Send personalised messaages<br />
View Album, Documents, and contact<br /> 
details<br />
View horoscope of members<br />
Express Unlimited interest<br />
Plus other exclusive paid membership <br />
benefits</p>



<div class="line"></div>

<p class="text_20_cntr">Payment Options</p>

<p class="text_banner">You have three payment options, 
Choose any one for you Only for</p>

<div class="center_icon" >
<img src="images/1_round.jpg" /></div>

<p class="text_20_cntr">Activation Coupon</p>

<p class="text_banner">You can subscribe through activation coupon which you can purchase from your nearest re-sellers. <span class="span_blue"> Click here</span> to find your nearest re-seller</p>


<div class="center_icon" >
<img src="images/2_round.jpg" /></div>

<p class="text_20_cntr"><a href="#">NetBanking</a></p>

<p class="text_banner">We are accepting major banks Net Transfer and Debit card transaction through Online. <span class="span_blue"> Click here</span> to find our banking partners</p>


<div class="center_icon" >
<img src="images/3_round.jpg" /></div>

<p class="text_20_cntr">Credit card and Paypal</p>

<p class="text_banner">We are accepting Visa, Master and Rupay cards and paypal.<span class="span_blue"> Click here</span> to go payment page.<br />
  <br />
</p>


<p class="text_20_blue">SUBSCRIBE NOW! </p>
</div>
                <!--right-content closing-->
            </div>
            <!--main-content closing-->
        </div>