<div class="subContent">
			<section class="subHead">
				<h1 class="width100 ">Upload Photos</h1>
			</section>
			<section class="subContnr">
				<ul class="accOverview pmB10">
					<li class="mT15 mB0">
					<form action="<?php echo Utilities::createAbsoluteUrl('user','photoupload'); ?>" method="post" enctype="multipart/form-data">	
						<input type="hidden" name="photoCount" id="photoCount" value="2" />
						<div class="urOnly">You can select multiple images</div>
						<div class="uploadCn">
							<input type="file" name="profilePhoto_1" id="profilePhoto_1" />
						</div>
						<div id="photoContainer" style="margin-bottom:10px;"></div>
						<div class="uploadCn mT5">
							<a href="#" class="type3" name="morephoto" id="morephoto" onClick="addMoreFiles()";>Add More</a>
							<input type="submit" name="uploadphoto" id="uploadphoto" class="type3" value="Upload" />
						</div>
						<?php if(!empty($photos)):?>
						<h5 class="width100 mT30">Please mouse hover on a photo to use as profile picture or delete or cancel.</h5>
						<?php endif; ?>
					</form>
					</li>
					<?php if(!empty($photos)):?>
					<li >
						<div class="upUrF">
						<?php foreach($photos as $photo):?>
							<div class="upCn">
								<div class="ppOpts">
									<p><a title="click to make this ur profile picture" href="<?php echo Utilities::getMediaUrl();?>/user/profilepicture/r/setimage/pId/<?php echo $photo->photoId?>/uId/<?php echo $user->userId?>">Use as Profile Picture</a></p>
									<p><a title="click to delete this picture" href="<?php echo Utilities::getMediaUrl();?>/user/profilepicture/r/deleteimage/pId/<?php echo $photo->photoId?>/uId/<?php echo $user->userId?>">Delete</a></p>
								</div>
								<img src="<?php echo Utilities::getProfileImage($user->marryId,$photo->imageName); ?>" alt="" />
							</div>
						<?php endforeach;?>
						</div>
					</li>
					<?php endif; ?>
					<li class="mT25">
						<div class="whoCan">Who can view Album</div>
						<div class="check ">
							<input type="checkbox"> <span>All</span>
						</div>
						<div class="check ">
							<input type="checkbox"> <span>Subscribers</span>
						</div>
						<div class="check ">
							<input type="checkbox"> <span>Loged Members</span>
						</div>
						<div class="check ">
							<input type="checkbox"> <span>By request</span>
						</div>
					</li>
					<li>
						<a href="#" class="type4 wid80">Update</a>
					</li>
				</ul>
			</section>