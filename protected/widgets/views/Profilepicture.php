<?php 
$user = Yii::app()->session->get('user');
if(!empty($photosList)){ ?>
<script language="javascript">
// List image names without extension
var myImg_<?php echo $userId ?> = new Array()
<?php 
$j=0;
foreach($photosList as $photo){ ?>
  myImg_<?php echo $userId; ?>[<?php echo $j; ?>]= "<?php echo Utilities::getProfileImage($marryId,$photo->imageName);?>";
<?php $j++;
 } ?>

var i = 0;

// Create function to load image
function loadImg_<?php echo $userId; ?>(){
  document.imgSrc_<?php echo $userId; ?>.src =  myImg_<?php echo $userId; ?>[i];
}

// Create link function to switch image backward
function prev_<?php echo $userId ?>(){
  if(i<1){
    var l = i
  } else {
    var l = i-=1;
  }
  document.imgSrc_<?php echo $userId ?>.src =  myImg_<?php echo $userId ?>[l];
  document.getElementById("slideCount_<?php echo $userId ?>").innerHTML = i+1;
}

// Create link function to switch image forward
function next_<?php echo $userId ?>(){
  if(i>2){
    var l = i
  } else {
    var l = i+=1;
  }
  document.imgSrc_<?php echo $userId ?>.src =  myImg_<?php echo $userId ?>[l];
  document.getElementById("slideCount_<?php echo $userId ?>").innerHTML = i+1;
}

// Load function after page loads
window.onload=loadImg_<?php echo $userId; ?>;

</script>
<?php if($user->userId == $userId){ ?>
	<a class="ppC" href="<?php echo Utilities::createAbsoluteUrl('mypage','editprofilephoto'); ?>" id="editProfilePicture">
		<span class="ppCinn">Change profile picture</span>
		<img id="imgSrc_<?php echo $userId ?>" width="180" height="230" name="imgSrc_<?php echo $userId ?>" alt="" src="">
	</a>
<?php }else{?>
	<img id="imgSrc_<?php echo $userId ?>" width="180" height="230" name="imgSrc_<?php echo $userId ?>" alt="" src="">
<?php }?>	
	<ul class="noC">
		<li><a href="javascript:void(0);" class="prevs" onClick="prev_<?php echo $userId ?>();" ></a></li>
		<li><span id="slideCount_<?php echo $userId ?>">1</span> of <span><?php echo count($photosList); ?></span></li>
		<li><a href="javascript:void(0);" class="nexts" onClick="next_<?php echo $userId ?>();" ></a></li>
	</ul>
				
<?php }else{?>
<div class="image-contnrs">
	<a href="#"><img id="imgSrc" width="180" height="230" name="imgSrc" alt="" src="<?php echo Utilities::getProfileImage($marryId,'');?>"></a>
</div>
<?php }?>