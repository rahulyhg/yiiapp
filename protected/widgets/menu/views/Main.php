<ul class="nav-bar">
<?php if(Yii::app()->session->itemAt('user')) {?>
			<li class="menu">
                <a class="link" href="javascript:void(0)">my account  </a>
				<div class="sub" style="display:none">
					<div class="arrow"></div>
					<div class="data wid140">
						<a class="width100" href="<?php echo Utilities::createAbsoluteUrl('contact','index')?>">Contact Details</a>
						<a class="width100" href="<?php echo Utilities::createAbsoluteUrl('contact','reference')?>">My Reference</a>
						<a class="width100" href="<?php echo Utilities::createAbsoluteUrl('mypage','document')?>">My Documents</a>
						<a class="width100" href="<?php echo Utilities::createAbsoluteUrl('shortlist','index')?>">Shortlist</a>
						<a class="width100" href="<?php echo Utilities::createAbsoluteUrl('bookmark','index')?>">Bookmarks</a>
						<a class="width100" href="<?php echo Utilities::createAbsoluteUrl('addressbook','index')?>">My Address Book</a>
						<a class="width100" href="<?php echo Utilities::createAbsoluteUrl('mypage','partnerpreference')?>">Partner preference</a>
						<a class="width100" href="<?php echo Utilities::createAbsoluteUrl('mypage','payment')?>">My Payment summury</a>
						<a class="width100" href="<?php echo Utilities::createAbsoluteUrl('mypage','myaccount')?>">My Account</a>
						<a class="width100" href="<?php echo Utilities::createAbsoluteUrl('mypage','settings')?>">Privacy settings</a>
						<a class="width100" href="my-settings.htm">Deactivate account</a>
						<a class="width100" href="my-settings.htm">Delete account</a>
					</div>
				</div>
            </li>
			<li class="menu">
                <a class="link" href="javascript:void(0)">my profile</a>
				<div class="sub" style="display:none">
					<div class="arrow"></div>
					<div class="data wid140">
						<a class="width100" href="edit-my-profile.htm">View Profile</a>
						<a class="width100" href="edit-my-profile.htm">Edit Profile</a>
						<a class="width100" href="my-album.htm">Change Profile picture</a>
						<a class="width100" href="my-album.htm">Add New Picture</a>
					</div>
				</div>
            </li>
			<li class="menu">
                <a class="link" href="javascript:void(0)">communicate</a>
				<div class="sub" style="display:none">
					<div class="arrow"></div>
					<div class="data wid140">
						<a class="width100" href="my-messages.htm">Recived Message</a>
						<a class="width100" href="my-messages.htm">Sent Message</a>
						<div class="dividr"></div>
						<a class="width100" href="my-interests.htm">Recived Interest</a>
						<a class="width100" href="my-interests.htm">Sent Interest</a>
						<a class="width100" href="my-interests.htm">Declained Interest</a>
						<div class="dividr"></div>
						<a class="width100" href="my-requests.htm">Recived Request</a>
						<a class="width100" href="my-requests.htm">Sent Request</a>
						<a class="width100" href="my-requests.htm">Declained Request</a>
					</div>
				</div>
            </li>
      <?php } ?>
            <li class="menu">
                <a class="link" href="javascript:void(0)">search</a>
				<?php if(Yii::app()->session->itemAt('user')) {?>
				<div class="sub wid270" style="display:none">
					<div class="arrow"></div>
					<div class="data wid140">
						<div class="saved">Saved Search</div>
						<div class="searchby">Search 1 by shanoj</div>
						<div class="options">
							<a href="#">Edit</a>
							<a href="#">Delete</a>
							<a href="#">Search</a>
						</div>
					</div>
					<div class="data wid120">
						<a class="width100" href="search.htm">Basic Search </a>
						<a class="width100" href="search.htm">Advanced Search</a>
						<a class="width100" href="search.htm">Saved Search</a>
						<a class="width100" href="search.htm">Search by ID</a>
						<a class="width100" href="search.htm">Search by Keyword</a>
					</div>
				</div>
				<?php }else{?>
					<div class="sub" style="display:none">
					<div class="arrow"></div>
					<div class="data wid140">
						<a class="width100" href="search.htm">Basic Search </a>
						<a class="width100" href="search.htm">Advanced Search</a>
						<a class="width100" href="search.htm">Saved Search</a>
						<a class="width100" href="search.htm">Search by ID</a>
						<a class="width100" href="search.htm">Search by Keyword</a>
					</div>
				</div>
				<?php }?>
            </li>
            <li class="menu">
                <a class="link" href="javascript:void(0)">payment options</a>
				<div class="sub" style="display:none">
					<div class="arrow"></div>
					<div class="data wid140">
						<a class="width100" href="subscribe-now.htm">Subscribe Now</a>
						<a class="width100" href="recharge-now.htm">Recharge Now</a>
						<a class="width100" href="payment-summery.htm">My Payment Summury</a>
					</div>
				</div>
            </li>
            <li class="menu">
                <a class="link" href="javascript:void(0)">contact us</a>
				<div class="sub" style="display:none">
					<div class="arrow"></div>
					<div class="data wid160">
						<span>Postal Address</span>
						<p>Marrydoor <br />Loloos Technolab Pvt.  Ltd. <br />Near Kochin International <br />Airport <br />Vappalassery P.O., <br />Pin 680 572</p>
						<span>Helpline Number</span>
						<p>0481 2341203 - 15</p>
						<span>Fax</span>
						<p>0481 2341203</p>
						<span>E-Mail</span>
						<a class="mailto" href="mailto:mail@marrydoor.com">mail@marrydoor.com</a>
					</div>
				</div>
            </li>
        </ul>