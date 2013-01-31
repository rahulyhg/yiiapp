<?php if(!empty($photosList)){ ?>
<script language="javascript">

var myImg_<?php echo $userId ?> = new Array()
<?php 
$j=0;
foreach($photosList as $photo){
	if($j ==0 ){ 
		$profileImage = $photo->imageName;
	}
	?>
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
<div class="image-contnr">
<a href="<?php echo Utilities::getProfileImage($marryId,$profileImage);?>" rel="lightbox[roadtrip_<?php echo $userId ?>]"><img id="imgSrc_<?php echo $userId ?>" name="imgSrc_<?php echo $userId ?>" alt="" src="<?php echo Utilities::getProfileImage($marryId,$profileImage);?>"></a>
<div class="img-controls">
	<a class="prev" href="javascript:void(0);" onClick="prev_<?php echo $userId ?>();"></a>
	<div class="numbers">
		<span id="slideCount_<?php echo $userId ?>">1</span> of <span><?php echo count($photosList); ?></span>
	</div>
	<a class="next" href="javascript:void(0);" onClick="next_<?php echo $userId ?>();"></a>
</div>
</div>

<div style="display:none;">
<?php
reset($photosList); 
$j=0;
foreach($photosList as $photo){ 
if($photo->imageName != $profileImage){
	?>
<a href="<?php echo Utilities::getProfileImage($marryId,$photo->imageName);?>" rel="lightbox[roadtrip_<?php echo $userId ?>]">image #1</a>
<?php } }?>
</div>
<?php }else{?>
<div class="image-contnr">
	<a href="#"><img id="imgSrc" name="imgSrc" alt="" src="<?php echo Utilities::getProfileImage($marryId,'');?>"></a>
</div>
<?php }?>