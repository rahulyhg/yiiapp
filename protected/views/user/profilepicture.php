<!--left-content-->
                <div id="content-left-member-11">   


 <p class="text_pink-hd">Add Photos</p>
 
 <div class="clear"></div>
 
 
<p class="txt_bld_14"><span class="text_pink">Its make your profile more visibile</span></p><br />
<div class="space-new"><br /></div>

<p class="txt_rg">Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone!</p>

<?php if(!empty($photos)):?>
<!--  photo lists starts -->

<div class="line"></div>

<?php foreach($photos as $photo):?>
<div class="image_13"><!--image_12-->
<a href="#"><img src="<?php echo Utilities::getProfileImage($user->marryId,$photo->imageName); ?>" class="image" border="0" width="110" height="120"/></a>
<p class="space-5px">&nbsp;</p>
 <p class="txt_bld-10"><a href="<?php echo Yii::app()->params['homeUrl']?>/user/profilepicture/r/setimage/pId/<?php echo $photo->photoId?>/uId/<?php echo $user->userId?>">Make as profile picture</a>

 <p class="txt_bld-10"><a href="<?php echo Yii::app()->params['homeUrl']?>/user/profilepicture/r/deleteimage/pId/<?php echo $photo->photoId?>/uId/<?php echo $user->userId?>" class="txt_link">Delete</a></p>

</div><!--/image_12--><!--/image_12-->

<?php endforeach;?>
<div class="clear"></div>



<div class="space"><br /></div>
<div class="line"></div>

<!-- photo lists ends -->
<?php endif;?>
<p class="txt_rg">You can add one more photo in this album</p>

<div class="list_div_1b"><!--list_div_1-->
<p class="txt_bld">&nbsp;</p>
</div><!--/list_div_1-->

<div class="list_div_260"><!--list_div_1-->
<p class="txt_bld-10-new2">Select an image file on your computer</p>
</div><!--/list_div_1-->

<div class="clear"></div>

<div class="list_div_1"><!--list_div_1-->
<p class="txt_bld">Upload  Photo</p>
</div><!--/list_div_1-->





<div class="list_div_2"><!--list_div_2-->

<form action="<?php echo Yii::app()->params['homeUrl'] ?>/user/profilepicture" method="post" enctype="multipart/form-data">
 <input type="file" name="profilePhoto" id="profilePhoto"  class="fileStyle"/>

 <br />
  <div>
  <input type="button" name="morephoto" id="morephoto" class="btnStyle" value="Add more" /></div>
	<div class="clearSpace"></div>
  <div>
  <input type="submit" name="uploadphoto" id="uploadphoto" class="btnStyle" value="Upload" /></div>

  </form>
 </div>
<!--/list_div_2-->


<div class="clear"></div>







<div class="line"></div>
<p class="space-15px">&nbsp;</p>

 <div class="list_div_1"><!--list_div_1-->
<p class="txt_bldn">Who can view above detals</p>
</div><!--/list_div_1-->





<div class="list_class-451">
          
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
<!--/list_div_2-->

<div class="clear"></div>



<p class="space-15px">&nbsp;</p>
<div class="line"></div>



 <p class="text_pink-hd">Add Documents</p>
 
 <div class="clear"></div>

<p class="txt_bld_14"><span class="text_pink">Its make your profile more visibile</span></p><br />





<p class="txt_rg">Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone! To show ou r love, we are running a sale for you guys Happy Valentine's Day everyone! To show our love, we are running a sale for you guys Happy Valentine's Day everyone! To show our love, we are running a sale for you guys</p>



<div class="space"><br /></div>




<div class="image_13"><!--image_12-->

<a href="#">
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/photo_2_blank.jpg" class="image" border="o" /></a>
 <p class="txt_bld-10">
<br />
<a href="#" class="txt_link">Delete</a></p>

</div><!--/image_12-->

<div class="image_13"><!--image_12-->

<a href="#">
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/photo_2_blank.jpg" class="image" border="0" /></a>

 <p class="txt_bld-10"><br />
<a href="#" class="txt_link">Delete</a></p>

</div><!--/image_12-->

<div class="image_13"><!--image_12-->

<a href="#">
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/photo_3_blank.jpg" class="image" border="0" /></a>
 <p class="txt_bld-10"><br />
<a href="#" class="txt_link">Delete</a></p>

</div><!--/image_12-->


<div class="image_13"><!--image_12-->

<a href="#">
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/photo_2_blank.jpg" class="image" border="0" /></a>

 <p class="txt_bld-10"><br />
<a href="#" class="txt_link">Delete</a></p>

</div><!--/image_12-->


<div class="clear"></div>



<div class="space"><br /></div>
<div class="line"></div>


<p class="txt_rg">You can add one more photo in this album</p>


<div class="list_div_1b"><!--list_div_1-->
<p class="txt_bld">&nbsp;</p>
</div><!--/list_div_1-->

<div class="list_div_260"><!--list_div_1-->
<p class="txt_bld-10-new2">Select an image file on your computer</p>
</div><!--/list_div_1-->

<div class="clear"></div>

<div class="list_div_1"><!--list_div_1-->
<p class="txt_bld">Upload  Photo</p>
</div><!--/list_div_2-->





<div class="list_div_2"><!--list_div_2-->

<form action="" method="get">
 <input type="file" name="datafile" size="19" 
 />
 </form>
 <br />

              
   </div>
<!--/list_div_2-->




<div style="float:left; width:40%;">
<div class="list_div_1-doc"><!--list_div_1-->
<p class="txt_bldn">Type of Document*</p>
</div><!--/list_div_1-->

<div class="list_div_3b">

<form action="" method="get">

 <select class="select_small_140">
 <option>Passport</option>
 <option>Passport</option>
 <option>Passport</option>
 </select>

 </form>

 <div class="space"><p></p></div>
 

 </div><!--/list_div_2-->
 </div>
 
 
 
 
 
<div class="clear"></div>
 <div class="div_ww">
 <div class="div_rr" style="width:100%;">

 <a class="focus" style="float:right;" href="#">Add More</a>
                <a class="focus"  style="float:right;" href="#">Upload</a>
                
</div>  
</div>







<div class="clear"></div><div class="line"></div>
<p class="space-15px">&nbsp;</p>



<div class="div_ww">
  <div class="list_div_1"><!--list_div_1-->
<p class="txt_bldn">Who can view above detals</p>
</div><!--/list_div_1-->

<div class="list_div_300">
<p class="radio-4">
          <input type="radio" name="view" value="myself">&nbsp;Subscribers</p>
                 <p class="radio-4">
                            <input type="radio" name="view" value="son">&nbsp;By request</p>
   </div>       
 </div>
<!--/list_div_2-->

<div class="clear"></div>

<div class="div_rr">

                <a class="focus-sub" href="#">Submit</a> </div>






<div class="clear"></div>
  <div class="space-10px"><p>&nbsp;<br /></p></div>            
                
			  </div><!--left-member-content closing-->
                <!--content-right-member-->
                <div id="content-right-member-full">
                
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/hedding_specifications.jpg" class="img_heading0" />


<div class="line_sm-new"></div>

<div class="div_r_div"><!--div_r_div-->
<p class="txt_btm_10"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/tickmark.jpg" class="image" />&nbsp;You can add</p>
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/image_1.jpg" class="image_mdown_10" />
<p class="txt_btm_10">front View</p>
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/image_1.jpg" class="image_mdown_10" />
<p class="txt_btm_10">front View</p>
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/image_1.jpg" class="image_mdown_10" />
<p class="txt_btm_10">front View</p>



</div><!--/div_r_div-->


<div class="line_ver"></div>

<div class="div_r_div"><!--div_r_div-->
<p class="txt_btm_10"><img src="<?php echo Yii::app()->params['mediaUrl']; ?>/intomark.jpg" class="image" />&nbsp;You can't add</p>
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/image_1.jpg" class="image_mdown_10" />
<p class="txt_btm_10">front View</p>
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/image_1.jpg" class="image_mdown_10" />
<p class="txt_btm_10">front View</p>
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/image_1.jpg" class="image_mdown_10" />
<p class="txt_btm_10">front View</p>

</div><!--/div_r_div-->

                
                
                </div>
              <!--content-right-member closing-->