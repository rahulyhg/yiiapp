<div class="subContent">
			<section class="subHead">
				<h1 class="tCenter">Access Request</h1>
			</section>
			<form name="frmRequest" method = "post" action = "<?php echo Utilities::createAbsoluteUrl('request','popup') ?>" >
			<input type = "hidden" name="profileId" value = "<?php echo $profileId ; ?>" />
			<input type = "hidden" name="action" value = "<?php echo $action ; ?>" />
			<input type = "hidden" name="module" value = "<?php echo $module ; ?>" />
			<section class="subContnr">
				<ul class="accOverview mTB20">
					<li>

						<p class="tCenter">
						<?php if($module == 'documents'){?>
							The document you are trying to view is protected. In order to see the documents, please send a request to the user.
							<?php }elseif($module == 'album'){?>
							The album you are trying to view is protected. In order to see the albums, please send a request to the user.
							<?php }?>
						</p>
						<div class="unlock"></div>
						<div class="visitorBtnC">
						<?php if($action == 'request'){?>
							<input type="submit" name="sendRequest" id="sendRequest" value="Send Request" class="type2b" />
							<?php }elseif($action == 'login'){ ?>
							<a href="<?php echo Utilities::createAbsoluteUrl('user','popuplogin',array()); ?>"><input type="button" name="sendRequest" id="sendRequest" value="Login" class="type2b" /></a>
							<input type="button" name="newmember" id="newmember" value="I am not a member yet" class="type2b" onclick="javascript:redirectUser('<?php echo Utilities::createAbsoluteUrl('site','index') ?>');" />
						<?php }elseif($action == 'subscribe'){ ?>
						<input type="button" name="sendRequest" id="sendRequest" value="Subscribe Now" class="type2b" onclick="javascript:redirectUser('<?php echo Utilities::createAbsoluteUrl('payment','index') ?>');" />
						<?php }?>
						</div>
				</ul>
			</section>
			</form>
		</div>
		
<script type="text/javascript">
	function redirectUser(url){
		parent.$.fn.colorbox.close();
		parent.window.location.href = url;
	}
</script>