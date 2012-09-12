<script type="text/javascript">
function addMoreFiles()
{

	// get the current element count
	var count = document.getElementById("photoCount").value;
	//Create an input type dynamically.
    var element = document.createElement("input");
     //Assign different attributes to the element.
    element.setAttribute("type", "file");
    element.setAttribute("value", "");
    element.setAttribute("name", "profilePhoto_"+count);
    element.setAttribute("id", "profilePhoto_"+count);
    element.setAttribute("class", "fileStyle");
 
    var container = document.getElementById("photoContainer");
 
    //Append the element in page (in span).
    container.appendChild(element);
    count = parseInt(count) + 1;
    document.getElementById("photoCount").value = count;
}

function addMoreDocuments()
{

	// get the current element count
	var count = document.getElementById("documentCount").value;
	//Create an input type dynamically.
    var element = document.createElement("input");
     //Assign different attributes to the element.
    element.setAttribute("type", "file");
    element.setAttribute("value", "");
    element.setAttribute("name", "profileDocument_"+count);
    element.setAttribute("id", "profileDocument_"+count);
    element.setAttribute("class", "fileStyle");
 
    var container = document.getElementById("documentContainer");
 
    //Append the element in page (in span).
    container.appendChild(element);

    // create the select box
    
    var element = document.createElement("select");
     //Assign different attributes to the element.
    element.setAttribute("name", "documentType_"+count);
    element.setAttribute("id", "documentType_"+count);
    element.setAttribute("class", "select_small_140");

    var option = document.createElement("option");
    option.setAttribute("value", "1");
    option.innerHTML = 'Passport';
    element.appendChild(option);
    var option = document.createElement("option");
    option.setAttribute("value", "2");
    option.innerHTML = 'Voters ID';
    element.appendChild(option);
    var option = document.createElement("option");
    option.setAttribute("value", "3");
    option.innerHTML = 'PAN Card';
    element.appendChild(option);
    container.appendChild(element);
    
    count = parseInt(count) + 1;
    document.getElementById("documentCount").value = count;
}
</script>
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
<input type="hidden" name="photoCount" id="photoCount" value="2" />
 <input type="file" name="profilePhoto_1" id="profilePhoto_1"  class="fileStyle"/>

 <br />
 <div id="photoContainer" style="margin-bottom:10px;"></div>
  <div>
  <input type="button" name="morephoto" id="morephoto" class="btnStyle" value="Add more" onClick="addMoreFiles()"; /></div>
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

<?php if(!empty($documents)):?>
<!-- list of documents starts -->
<div class="line"></div>
<?php foreach($documents as $document):?>
<div class="image_13"><!--image_12-->

<a href="#">
<img src="<?php echo Yii::app()->params['mediaUrl']; ?>/photo_2_blank.jpg" class="image" border="0" /></a>

 <p class="txt_bld-10"><br />
<a href="<?php echo Yii::app()->params['homeUrl']?>/user/profilepicture/r/deletedocument/dId/<?php echo $document->documentId?>/uId/<?php echo $user->userId?>" class="txt_link">Delete</a></p>

</div><!--/image_12-->
<?php endforeach; ?>

<div class="clear"></div>



<div class="space"><br /></div>
<div class="line"></div>
<!-- documents list ends here -->
<?php endif; ?>
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

<form action="<?php echo Yii::app()->params['homeUrl'] ?>/user/profilepicture" method="post" enctype="multipart/form-data">
  <input type="hidden" name="documentCount" id="documentCount"  value="2" />
 <input type="file" name="profileDocument_1" id="profileDocument_1" size="19" class="fileStyle" />
<div style="float:left; width:40%;">
<div class="list_div_1-doc"><!--list_div_1-->
<p class="txt_bldn">Type of Document*</p>
</div><!--/list_div_1-->

<div class="list_div_3b">

 <select class="select_small_140" id="documentType_1" name="documentType_1">
 <option value="1">Passport</option>
 <option value="2">Voters ID</option>
 <option value="3">PAN Card</option>
 </select>


 <div class="space"><p></p></div>
 

 </div><!--/list_div_2-->
 </div>
 
<div class="clear"></div>
 <div id="documentContainer" style="margin-bottom:10px;"></div>

              
   </div>
<!--/list_div_2-->





 
 
 
 
 
<div class="clear"></div>
 <div class="div_ww">
 <div class="div_rr" style="width:100%;">

                  <div>
  <input type="button" name="moredocuments" id="moredocuments" class="btnStyle" value="Add more" onClick="addMoreDocuments();" /></div>
	<div class="clearSpace"></div>
  <div>
  <input type="submit" name="uploaddocuments" id="uploaddocuments" class="btnStyle" value="Upload" /></div>
  </form>
                
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