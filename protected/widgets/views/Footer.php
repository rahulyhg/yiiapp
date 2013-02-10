<footer class="footer">
	<ul class="footer-links">
		<li>
			<a class="loloos" href="#"></a>
		</li>
		<li>
			<a class="iframe" href="<?php echo Utilities::createAbsoluteUrl('guest','about'); ?>" id="footerPops">About us</a>
		</li>
		<li>
		<a class="iframe" href="<?php echo Utilities::createAbsoluteUrl('guest','contact'); ?>" id="footerPops">Contact Us</a>
		</li>
		<li>
			<a class="iframe" href="<?php echo Utilities::createAbsoluteUrl('guest','faq'); ?>" id="footerPops">FAQ's</a>
		</li>
		<li>
			<a class="iframe" href="<?php echo Utilities::createAbsoluteUrl('guest','feedback'); ?>" id="footerPops">Feedback</a>
		</li>
		<li>
		<a class="iframe" href="<?php echo Utilities::createAbsoluteUrl('guest','privacy'); ?>" id="footerPops">Privacy Policy</a>
		</li>
		<li>
			<a class="iframe" href="./popups/pop_terms-contitions.htm">Terms &amp; Conditions</a>
		</li>
		<li>
			Copyright &#169; 2012 <a class="lol" href="#">Loloos Technolab</a> Pvt. Ltd. All rights reserved.
		</li> 
	</ul>
</footer>

<script type="text/javascript">
$(document).ready(function(){
    $('[id^=footerPops]').colorbox({iframe:true, width:"860", height:"900",overlayClose: false});
    
  });


</script>