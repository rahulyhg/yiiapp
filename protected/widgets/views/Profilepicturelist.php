<?php if(!empty($photosList)){ ?>
<div style="">
<?php 
$j=0;
foreach($photosList as $photo){ ?>
<a  class="group<?php echo $userId; ?>" href="<?php echo Utilities::getProfileImage($marryId,$photo->imageName);?>" title="<?php echo $photo->imageName; ?>"></a>
<?php $j++;
 } ?>
 <script language="javascript">
$(document).ready(function(){
	$('.group<?php echo $userId; ?>').colorbox({rel:'group<?php echo $userId; ?>'});
})
</script>
</div>
<script language="javascript">

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
<div class="image-contnr">
<a href="<?php echo Utilities::getProfileImage($marryId,$photo->imageName);?>" class="group<?php echo $userId?>" title="<?php echo $photo->imageName ?>"><img id="imgSrc_<?php echo $userId ?>" name="imgSrc_<?php echo $userId ?>" alt="" src="href="<?php echo Utilities::getProfileImage($marryId,$photo->imageName);?>"></a>
<div class="img-controls">
	<a class="prev" href="javascript:void(0);" onClick="prev_<?php echo $userId ?>();"></a>
	<div class="numbers">
		<span id="slideCount_<?php echo $userId ?>">1</span> of <span><?php echo count($photosList); ?></span>
	</div>
	<a class="next" href="javascript:void(0);" onClick="next_<?php echo $userId ?>();"></a>
</div>
</div>
<?php }else{?>
<div class="image-contnr">
	<a href="#"><img id="imgSrc" name="imgSrc" alt="" src="<?php echo Utilities::getProfileImage($marryId,'');?>"></a>
</div>
<?php }?>