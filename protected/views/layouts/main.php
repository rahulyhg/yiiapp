<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->params['resourceUrl']; ?>/css/css-new.css"/>
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<script type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>


<body
	onload="MM_preloadImages('images/hedding_regular-search_pink.jpg','images/hedding_advanced-search_pink.jpg','images/hedding_keyword_pink.jpg','images/hedding_search_by_id_pink.jpg','images/login_btn.jpg','images/search_btn_sm.jpg')">
<div id="page">
		<!--wrapper-->
<div id="wrapper">
        	<div id="head-my">
         <a href="index.html"> <img border="0" class="logo" src="images/logo.jpg"></a>
           
            
            
            <div id="mypage-login_box">
          <div class="txt_bld" id="mypage-search-2">Welcome <span class="logout">Guest</span> !</div>
  
  
   <div class="user-login"><!--user-login-->

<div class="left">
<p class="txt_rg">E-Mail / User ID<br></p>
	<input type="text" class="user-form" id="" name=""><br>
<p class="txt_rg"><span class="text_blue"><a href="new-user.html">New User?</a></span></p>
</div>


<div class="left">
<p class="txt_rg">Password<br></p>
	<input type="password" class="user-form" id="" name=""><br>
<p class="txt_rg"><span class="text_blue"><a href="forget-password.html">Forget Passord?</a></span></p>

</div>

<div class="right">

<a onmouseover="MM_swapImage('Image31','','images/login_btn.jpg',1)" onmouseout="MM_swapImgRestore()" href="my-page.html"><img width="49" border="0" height="22" class="user-button" id="Image31" name="Image31" src="images/login_ash.jpg"></a> </div>
</div></div>



        
            </div>

            <p class="clear"></p>
            <p class="space-25px">&nbsp;</p>
            <!--navigation_container-->
        <div class="navigation_container_small">
		<div class="nav_bloc"><!--nav_bloc-->
		  <div class="nav_links"><a href="search.html">search</a></div>
		<div class="nav_links"><a href="01-home-viewed-by-guest.html">payment options</a></div>
		<div class="nav_links_last"><a href="10 my contact.html">contact us</a></div>
	</div><!--nav_bloc-->
</div><!--/navigation_container-->
			<p class="clear"></p><p class="space-15px">&nbsp;</p>
            <!--/navigation_regional-->
            <div class="txt_bld" id="navigation_regional">Regional Sites:<span class="innersidelinks-still"><a href="#">Kerala</a></span>|<span class="innersidelinks"><a href="#">Tamil Nadu</a></span>|<span class="innersidelinks"><a href="#">Karnataka</a></span>|<span class="innersidelinks"><a href="#">Andrapradesh</a></span>|<span class="innersidelinks"><a href="#">Bengali</a></span>|<span class="innersidelinks"><a href="#">Gujarati</a></span>|<span class="innersidelinks"><a href="#">Maharashtra</a></span>|<span class="innersidelinks"><a href="#">Delhi</a></span>|<span class="innersidelinks"><a href="#">Utharpradesh</a></span>|<span class="innersidelinks"><a href="#">Hariyana</a></span>|<span class="innersidelinks"><a href="#">Madhyapredhesh</a></span>|<span class="innersidelinks"><a href="#">Khashmir</a></span>|<span class="innersidelinks"><a href="#">More</a></span>
            </div>
            <!--/navigation_regional-->
            <p class="clear"></p>
            <p class="space-15px">&nbsp;</p>
        	</div>
		
<div id="main-content">

	<?php echo $content; ?>
	
</div>	
	<!--footer-->
	<div id="footer">
		<div class="footer-1">
			<a href="#"><img src="images/rings.jpg" class="icon_footer"
				border="0" /> </a>
			<p class="text_wt_ftr">
				<a href="about-us.html">About us</a> &nbsp;|&nbsp; <a href="#">Contact
					Us</a> &nbsp;|&nbsp; <a href="faq.html">FAQ's</a> &nbsp;|&nbsp; <a
					href="feedback.html">Feedback</a> &nbsp;|&nbsp; <a
					href="privacy-policy.html">Privacy Policy</a> &nbsp;|&nbsp; <a
					href="terms-conditions.html">Terms & Conditions</a> &nbsp;|&nbsp;
				Copyright © 2012 <a href="#">Loloos Technolab Pvt. Ltd.</a>
				&nbsp;All rights reserved.
			</p>
			<p class="text_wt_ftr2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Find
				us on</p>
			<a href="#"><img src="images/facebook_icon.jpg" class="footer_icons"
				border="0" /><a href="#"><img src="images/twitter_icon.jpg"
					class="footer_icons" border="0" /> </a> <a href="#"><img
					src="images/google_icon.jpg" class="footer_icons"
					style="padding-bottom: 2px;" border="0" /> </a>
		
		</div>
	</div>
</div><!-- page -->
<div class="clear"></div>
</body>
</html>
