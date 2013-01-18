<script language="javascript">
// List image names without extension
var myImg_<?php echo $userId ?> = new Array()
<?php 
var_dump($photosList);die;
$i=0;
foreach($photosList as $photo){ ?>
  myImg_<?php echo $userId; ?>[<?php echo $i; ?>]= "<?php echo $photo->imageName;?>";
  $i++;
<?php } ?>

// Tell browser where to find the image
myImgSrc = "";

// Tell browser the type of file
myImgEnd = ".png"

var i = 0;

// Create function to load image
function loadImg_<?php echo $userId; ?>(){
  document.imgSrc.src = myImgSrc + myImg[i] + myImgEnd;
}

// Create link function to switch image backward
function prev_<?php echo $userId ?>(){
  if(i<1){
    var l = i
  } else {
    var l = i-=1;
  }
  document.imgSrc_<?php echo $userId ?>.src = myImgSrc + myImg_<?php echo $userId ?>[l] + myImgEnd;
  document.getElementById("slideCount_"<?php echo $userId ?>).innerHTML = i+1;
}

// Create link function to switch image forward
function next_<?php echo $userId ?>(){
  if(i>2){
    var l = i
  } else {
    var l = i+=1;
  }
  document.imgSrc_<?php echo $userId ?>.src = myImgSrc + myImg_<?php echo $userId ?>[l] + myImgEnd;
  document.getElementById("slideCount_"<?php echo $userId ?>).innerHTML = i+1;
}

// Load function after page loads
window.onload=loadImg_<?php echo $userId; ?>;

</script>
<div class="image-contnrs">
<a href="#"><img alt="" src="./images/user/thumbnail.jpg"></a>
<div class="img-controls">
	<a class="prev" href="#" onClick="prev_<?php echo $userId ?>();"></a>
	<div class="numbers">
		<span id="slideCount_<?php echo $userId ?>">1</span> of <span><?php echo count($photoList); ?></span>
	</div>
	<a class="next" href="#" onClick="next_<?php echo $userId ?>();"></a>
</div>
</div>