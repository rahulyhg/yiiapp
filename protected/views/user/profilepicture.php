	<section class="data-contnr">
		<article class="section">
		<?php if(!empty($photos)):?>
			<ul class="no-padd">
				<li class="mTnone">
					<h1 class="message">Why Add  Photos </h1>
					<h5 class="color">To make your profile stand out</h5>
				</li>
			</ul>
			<ul class="no-padd">
				<li>
					<p class="width100">By adding a photo, you get better responses from exact matches. A profile pictures assures a visitor that you are not fake. You can limit the access of your pictures by clicking the below options.</p>
					<h5>Please mouse hover on a photo to use as ur profile picture or to delete</h5>
				</li>
			</ul>
			<?php else:?>
			<ul class="no-padd">
				<li class="mTnone">
					<h1 class="message">Add Photos</h1>
					<h5 class="color">A picture is worth thousand words!</h5>
				</li>
			</ul>
			<ul>
				<li>
					<p class="width100">By adding your picture you increase the credibility of your profile and can get better responses. Photos plays a major role in getting a better match, so go ahead adding one.</p>
				</li>
				<li class="mTnone">
					<a href="<?php echo Utilities::createAbsoluteUrl('user','photoupload'); ?>" class="upload" id="photoUpload">UPLOAD YOUR PHOTOS</a>
				</li>
			</ul>
			<?php endif;?>
			<?php if(!empty($photos)):?>
			<ul class="no-padd">
				<li>
				<?php foreach($photos as $photo):?>
					<div class="photoOpt">
						<div class="ppOpts">
							<p><a href="<?php echo Yii::app()->params['homeUrl']?>/user/profilepicture/r/setimage/pId/<?php echo $photo->photoId?>/uId/<?php echo $user->userId?>" title="click to make this ur profile picture">Use as Profile Picture</a></p>
							<p><a href="<?php echo Yii::app()->params['homeUrl']?>/user/profilepicture/r/deleteimage/pId/<?php echo $photo->photoId?>/uId/<?php echo $user->userId?>" title="click to delete this picture">Delete</a></p>
						</div>
						<img src="<?php echo Utilities::getProfileImage($user->marryId,$photo->imageName); ?>" alt="" />
					</div>
				<?php endforeach;?>	
				</li>
			</ul>
			<ul class="no-padd">
				<?php if(count($photos) < 5) {?>
				<li>
					<p class="width100">You can add one more photo in this album</p>
				</li>
				<li>
					<a href="<?php echo Utilities::createAbsoluteUrl('user','photoupload'); ?>" class="upload" id="photoUpload">UPLOAD YOUR PHOTOS</a>
				</li>
				<?php }?>
				<li>
					<div class="title">
						Who can view above detals
					</div>
					<div class="info">
						<div class="check">
							<input type="checkbox" name="profilepictureview" checked="checked"  /> <span>All</span>
						</div>
						<div class="check">
							<input type="checkbox" name="profilepictureview"  /> <span>Subscribers</span>
						</div>
						<div class="check">
							<input type="checkbox" name="profilepictureview"  /> <span>Logged Members</span>
						</div>
						<div class="check">
							<input type="checkbox" name="profilepictureview"  /> <span>By request</span>
						</div>
					</div>
				</li>
			</ul>
			<?php endif;?>
			<?php if(!empty($familyPhotos)):?>
			<ul class="no-padd">
				<li>
				<?php foreach($familyPhotos as $photo):?>
					<div class="photoOpt">
						<div class="ppOpts">
							<!--  <p><a href="<?php echo Yii::app()->params['homeUrl']?>/user/profilepicture/r/setimage/pId/<?php echo $photo->albumId?>/uId/<?php echo $user->userId?>" title="click to make this ur profile picture">Use as Profile Picture</a></p>-->
							<p><a href="<?php echo Yii::app()->params['homeUrl']?>/user/profilepicture/r/deletealbumimage/pId/<?php echo $photo->albumId?>/uId/<?php echo $user->userId?>" title="click to delete this picture">Delete</a></p>
						</div>
						<img src="<?php echo Utilities::getAlbumImage($user->marryId,$photo->imageName); ?>" alt="" />
					</div>
				<?php endforeach;?>	
				</li>
			</ul>
			<ul class="no-padd">
				<?php if(count($familyPhotos) < 5){?>
				<li>
					<p class="width100">You can add one more photo in this album</p>
				</li>
				<li>
					<a href="<?php echo Utilities::createAbsoluteUrl('user','familyphotoupload'); ?>" class="upload" id="familyphotoUpload">UPLOAD YOUR PHOTOS</a>
				</li>
				<?php } ?>
				<li>
					<div class="title">
						Who can view above detals
					</div>
					<div class="info">
						<div class="check">
							<input type="checkbox" name="familyalbumeview" checked="checked" /> <span>All</span>
						</div>
						<div class="check">
							<input type="checkbox" name="familyalbumeview" /> <span>Subscribers</span>
						</div>
						<div class="check">
							<input type="checkbox" name="familyalbumeview" /> <span>Logged Members</span>
						</div>
						<div class="check">
							<input type="checkbox" name="familyalbumeview" /> <span>By request</span>
						</div>
					</div>
				</li>
			</ul>
			<?php else:?>
			<ul class="no-padd">
				<li>
					<h1 class="message">Add Family Photos</h1>
					<h5 class="color">A picture is worth thousand words!</h5>
				</li>
			</ul>
			<ul>
				<li>
					<p class="width100">By uploading pictures to my family album section, you can let others know about your family. You can also see the family of the potential candidate, if they have utilized the option and added pictures.</p>
				</li>
				<li class="mTnone">
					<a href="<?php echo Utilities::createAbsoluteUrl('user','familyphotoupload'); ?>" class="upload" id="familyphotoUpload">UPLOAD YOUR PHOTOS</a>
				</li>
			</ul>
			<?php endif;?>
			<?php if(!empty($documents)):?>
			<ul class="no-padd">
				<li >
					<h1 class="message">Why Add Documents </h1>
				</li>
			</ul>
			<ul class="no-padd">
				<li>
					<p class="width100 no-marg">Documents are not only a proof to your claims, but also a way to attract candidates who are suitable for your age, qualification and profession.</p>
					<h5 class="mT20">Please mouse hover on a photo to delete.</h5>
				</li>
			</ul>
			<ul class="no-padd">
				<li>
				<?php foreach($documents as $document):?>
					<div class="docOpt">
						<div class="ppOpts">
							<p>Passport</p>
							<p><a href="<?php echo Yii::app()->params['homeUrl']?>/user/profilepicture/r/deletedocument/dId/<?php echo $document->documentId?>/uId/<?php echo $user->userId?>" title="click to delete this picture">Delete</a></p>
						</div>
						<img src="<?php echo Utilities::getMediaUrl();?>/user/doc1.png" alt="" width="220" height="110" />
					</div>
				<?php endforeach; ?>	
				</li>
			</ul>
			<ul class="no-padd">
				<?php if(count($documents) < 5) {?>
				<li>
					<p class="width100 no-marg">You can add one more document in this album</p>
				</li>
				<li>
					<a href="<?php echo Utilities::createAbsoluteUrl('user','documentupload'); ?>" class="upload" id="documentUpload">UPLOAD YOUR Documents</a>
				</li>
				<?php }?>
				<li>
					<div class="title">
						Who can view above detals
					</div>
					<div class="info">
						<div class="check">
							<input type="checkbox" name="documenteview" checked="checked" /> <span>All</span>
						</div>
						<div class="check">
							<input type="checkbox" name="documenteview"  /> <span>Subscribers</span>
						</div>
						<div class="check">
							<input type="checkbox" name="documenteview"  /> <span>Logged Members</span>
						</div>
						<div class="check">
							<input type="checkbox" name="documenteview"  /> <span>By request</span>
						</div>
					</div>
				</li>
				<li>
					<a href="#" class="type2">Next</a>
				</li>
			</ul>
			<?php else:?>
			<ul class="no-padd">
				<li>
					<h1 class="message">Add Documents </h1>
					<h5 class="color">Documents are proof to your claims!</h5>
				</li>
			</ul>
			<ul class="no-padd">
				<li>
					<p class="width100">Let the documents validate your claims about job, salary, age etc. By adding valid documents you are telling yours is trust worthy profile.</p>
				</li>
				<li class="mTnone">
					<a href="<?php echo Utilities::createAbsoluteUrl('user','documentupload'); ?>" class="upload" id="documentUpload">UPLOAD YOUR DOCUMENTS</a>
				</li>
			</ul>
			<?php endif;?>
		</article>
	</section>
	
	<section class="rightbar-contnr">
		<div class="photo-spec-contnr">
			<div class="lArrow"></div>
			<div class="head-text">Specifications for Photo Upload</div>
			<div class="leftC">
				<div class="can">You can add</div>
				<div class="pCont">
					<img src="<?php echo Utilities::getMediaUrl(); ?>/user/passport.png" alt="" />
					<span>Passport size</span>
				</div>
				<div class="pCont">
					<img src="<?php echo Utilities::getMediaUrl(); ?>/user/front.png" alt="" />
					<span>Front view</span>
				</div>
				<div class="pCont">
					<img src="<?php echo Utilities::getMediaUrl(); ?>/user/full-size.png" alt="" />
					<span>Full view</span>
				</div>
			</div>
			<div class="rightC">
				<div class="cant">You can't add</div>
				<div class="pCont mL24">
					<img src="<?php echo Utilities::getMediaUrl(); ?>/user/not-clear.png" alt="" />
					<span>Face not clear</span>
				</div>
				<div class="pCont mL24">
					<img src="<?php echo Utilities::getMediaUrl(); ?>/user/blured.png" alt="" />
					<span>Blured</span>
				</div>
				<div class="pCont mL24">
					<img src="<?php echo Utilities::getMediaUrl(); ?>/user/group.png" alt="" />
					<span>Group photo</span>
				</div>
			</div>	
		</div>
	</section>

	<script type="text/javascript">
$(document).ready(function(){
    $("#photoUpload").colorbox({iframe:true, width:"845", height:"420"});
    $("#familyphotoUpload").colorbox({iframe:true, width:"845", height:"420"});
    $("#documentUpload").colorbox({iframe:true, width:"845", height:"420"});
  });

    $('<a href="/mypage">Skip this page|</a> ').insertBefore('.logout');

</script>