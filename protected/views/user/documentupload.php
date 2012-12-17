<div class="subContent">
			<section class="subHead">
				<h1 class="width100">Upload Documents</h1>
			</section>
			<section class="subContnr">
				<ul class="accOverview pmB10">
					<li class="mT15 mB0">
					<form action="<?php echo Utilities::createAbsoluteUrl('user','documentupload'); ?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="documentCount" id="documentCount"  value="2" />
						<div class="urOnly">Upload Your Docs Only in any Image formate</div>
						<div class="uploadCn">
							<input type="file" name="profileDocument_1" id="profileDocument_1" />
						 <select class="select_small_140" id="documentType_1" name="documentType_1" class="wid200">
						 <option value="1">Passport</option>
						 <option value="2">Voters ID</option>
						 <option value="3">PAN Card</option>
						 </select>
						</div>
						<div id="documentContainer" style="margin-bottom:10px;"></div>
						<div class="uploadCn mT5">
							<a href="#" class="type3" name="moredocuments" id="moredocuments"  onClick="addMoreDocuments();">Add More</a>
							<input type="submit" name="uploaddocuments" id="uploaddocuments" class="type3" value="Upload" />
						</div>
						<?php if(!empty($documents)):?>
						<h5 class="width100 mT30">Please mouse hover on a document to delete or cancel.</h5>
						<?php endif; ?>
					</form>
					</li>
					<?php if(!empty($documents)):?>
					<li >
						<div class="upUrF">
						<?php foreach($documents as $document):?>
							<div class="upCn">
								<div class="delt">
									<a href="<?php echo Yii::app()->params['homeUrl']?>/user/profilepicture/r/deletedocument/dId/<?php echo $document->documentId?>/uId/<?php echo $user->userId?>" title="click to delete this picture">Delete</a>
								</div>
								<img src="<?php echo Utilities::getMediaUrl();?>/user/doc1.png" alt="" width="220" height="110" />
								<div class="name">Passport</div>
							</div>
						<?php endforeach;?>
						</div>
					</li>
					<?php endif; ?>
					<li class="mT25">
						<div class="whoCan">Who can view Documents</div>
						<div class="check ">
							<input type="checkbox"> <span>Subscribers</span>
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