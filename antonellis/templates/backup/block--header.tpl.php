<!-- styles -->
<style type="text/css">
body {
	background-image: url(images/antonellis_layout_static_67.png);
	padding: 0;
	margin: 0;
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
	font-size: 12px;
	letter-spacing: 0.6pt;
	line-height: 1.8;
}
a {
	text-decoration: none;
	color: #ffffff;
}
a:hover {
	color: #d9b27a;
}
div#page {
	position: relative;
	width: auto;
	background-color: #000000;
	background-image: url(images/antonellis_web_background.jpg);
	background-repeat: repeat-y;
	background-position: top center;
}
div#page-transition {
	height: 10px;
	width: auto;
	background-image: url(images/antonellis_layout_static_66.png);
	background-repeat: repeat-x;
	background-position: center;
}
div#page-header {
	height: 190px;
	width: auto;
	background-image: url(images/antonellis_web_background_01.png);
	background-repeat: repeat-x;
	background-position: bottom;
	color: #ffffff;
	text-align: center;
	z-index: 99;
}
div#page-header-content {
	position: relative;
	height: 190px;
	width: 900px;
	margin-left: auto;
	margin-right: auto;
	color: #ffffff;
}
div#page-header-content-left,
div#page-header-content-center,
div#page-header-content-right {
	position: absolute;
	height: 190px;
}
div#page-header-content-left {
	left: 0px;
	width: 340px;
}
div#page-header-content-left-nav {
	position: absolute;
	left: 0px;
	bottom: 20px;
	height: 43px;
	width: 338px;
	background-image: url(images/antonellis_layout_static_13.png);
	background-repeat: no-repeat;
	z-index: 99;
}
div#header-search-nav {
	position: absolute; 
	right: 10px;
	bottom: 87px;
	/* width: 181px; */ 
	height: 26px; 
	background: url(images/antonellis_layout_static_06.png); 
	background-repeat: no-repeat;
	background-position: left;
	display: inline-block;
}
div#page-header-content-right-nav {
	position: absolute;
	right: 0px;
	bottom: 20px;
	height: 43px;
	width: 338px;
	background-image: url(images/antonellis_layout_static_16.png);
	background-repeat: no-repeat;
	z-index: 99;
}
div#page-header-content-left-nav img,
div#page-header-content-right-nav img {
	padding: 9px 0 0 0;
}
div#page-header-content-left-nav div.nav-obj,
div#page-header-content-right-nav div.nav-obj {
	margin: 9px 0 0 0;
	display: inline-block;
}
div.nav-menu {
	width: 175px;
	background: url(images/antonellis_nav_dropdown.png); 
	background-repeat: no-repeat;
	background-position: bottom center;
	text-align: left;
	color: #000000;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	letter-spacing: 0.6pt;
	text-transform: lowercase;
	z-index: 98;
}
div.nav-menu a {
	text-decoration: none;
	color: #000000;
}
div.nav-menu a:hover {
	color: #886026;
}
div.nav-menu ul {
	list-style: none;
	width: 155px;
	padding: 0 10px 0 15px;
}
div.nav-menu ul li ul {
	list-style: none;
	padding: 0;
	display: none;
}
div.nav-menu ul li {
	padding: 3px 0 2px 0;
}
div.nav-menu ul li span {
	color: #715226;
}
div.nav-menu ul li ul li:before {
	color: #715226;
	content: "» ";
}
div#nav-about {
	background: url(images/antonellis_nav_static_03.png); 
	background-repeat: no-repeat;
	background-position: center;
	width: 76px;
	height: 28px;
}
div#nav-about.active {
	background: url(images/antonellis_nav_rollover_03.png); 
	background-repeat: no-repeat;
	background-position: center;
}
div#nav-about-menu {
	position: absolute;
	left: 2px;
	top: 165px;
	display: none;
}
div#nav-products {
	background: url(images/antonellis_nav_static_04.png); 
	background-repeat: no-repeat;
	background-position: center;
	width: 104px;
	height: 28px;
}
div#nav-products.active {
	background: url(images/antonellis_nav_rollover_04.png); 
	background-repeat: no-repeat;
	background-position: center;
}
div#nav-products-menu {
	position: absolute;
	left: 83px;
	top: 165px;
	display: none;
}
div#nav-happenings {
	background: url(images/antonellis_nav_static_05.png); 
	background-repeat: no-repeat;
	background-position: center;
	width: 136px;
	height: 28px;
}
div#nav-happenings.active {
	background: url(images/antonellis_nav_rollover_05.png); 
	background-repeat: no-repeat;
	background-position: center;
}
div#nav-happenings-menu {
	position: absolute;
	left: 160px;
	top: 165px;
	display: none;
}
div#nav-catering {
	background: url(images/antonellis_nav_static_07.png); 
	background-repeat: no-repeat;
	background-position: center;
	width: 108px;
	height: 28px;
}
div#nav-catering.active {
	background: url(images/antonellis_nav_rollover_07.png); 
	background-repeat: no-repeat;
	background-position: center;
}
div#nav-catering-menu {
	position: absolute;
	left: 25px;
	top: 165px;
	display: none;
}
div#nav-gifts {
	background: url(images/antonellis_nav_static_08.png); 
	background-repeat: no-repeat;
	background-position: center;
	width: 74px;
	height: 28px;
}
div#nav-gifts.active {
	background: url(images/antonellis_nav_rollover_08.png); 
	background-repeat: no-repeat;
	background-position: center;
}
div#nav-gifts-menu {
	position: absolute;
	left: 139px;
	top: 165px;
	display: none;
}
div#nav-contact {
	background: url(images/antonellis_nav_static_09.png); 
	background-repeat: no-repeat;
	background-position: center;
	width: 94px;
	height: 28px;
}
div#nav-contact.active {
	background: url(images/antonellis_nav_rollover_09.png); 
	background-repeat: no-repeat;
	background-position: center;
}
div#nav-contact-menu {
	position: absolute;
	left: 160px;
	top: 165px;
	display: none;
}
ul.nav-sub-menu {
	display: none;
}
div#page-header-content-center {
	left: 360px;
	width: 180px;
	text-align: center;
}
div#page-header-content img,
div#page-footer-content img {
	border: 0;
}
div#page-header-content-center img {
	position: absolute;
	bottom: 0px;
	left: 0px;
	height: 170px;
	width: 180px;
}
div#page-header-content-right {
	right: 0px;
	width: 340px;
}
div#page-body {
	width: auto;
	margin: 10px 0 0 0;
	text-align: center;
}
div#page-body-content {
	position: relative;
	width: 900px;
	margin-left: auto;
	margin-right: auto;
	color: #ffffff;
}
div#page-body-content div#nivoSlider {
	width: 912px;
	margin-left: -6px;
}
div#page-footer {
	height: 140px;
	background-image: url(images/antonellis_web_background_03x.png);
	background-repeat: repeat-x;
	background-position: top;
	color: #ffffff;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	text-align: center;
	line-height: 30px;
}
div#page-footer a {
	text-decoration: none;
	color: #ffffff;
}
div#page-footer a:hover {
	color: #d9b27a;
}
div#page-footer-content {
	position: relative;
	height: 75px;
	width: 900px;
	padding: 25px 0 0 0;
	margin-left: auto;
	margin-right: auto;
}
div#page-footer-content-top-nav,
div#page-footer-content-bottom-nav {
	line-height: 30px;
}
div#page-footer-content-bottom-nav {
	margin: 5px 0 0 0;
}
div#page-footer-content-top-nav img,
div#page-footer-content-bottom-nav img {
	padding: 0 3px;
}
div#page-footer-content-top-nav img.first,
div#page-footer-content-bottom-nav img.first {
	padding: 0 3px 0 0;
}
div#page-footer-content-top-nav img {
	margin-bottom: -8px;
}
div#page-footer-content-bottom-nav img {
}
div#page-footer-content-bottom-nav img#icon-facebook {
	margin-bottom: 5px;
}
div#page-footer-content-bottom-nav img#icon-twitter {
	margin-bottom: 4px;
}

div#footer-transition {
	height: 10px;
	width: auto;
	background-image: url(images/antonellis_layout_static_66.png);
	background-repeat: repeat-x;
	background-position: center;
}
div#footer {
	height: 50px;
	width: auto;
	text-align: center;
	font-family: arial, sans-serif;
	color: #715226;
	font-size: 11px;
	letter-spacing: 0.6pt;
}
div#footer-copy a {
	font-family: arial, sans-serif;
	color: #715226;
	font-size: 11px;
	line-height: 11px;
	letter-spacing: 0.6pt;
	text-decoration: none;
}
div#footer a:hover {
	color: #e8bf83;
}
div#footer-email-field {
	position: relative; 
	width: 162px; 
	height: 25px; 
	background: url(images/antonellis_layout_static_54.png); 
	background-repeat: no-repeat;
	display: inline-block;
}
div#footer-email-field input {
	position: absolute; 
	width: 142px; 
	height: 25px; 
	line-height: 25px;
	top: 0px; 
	left: 10px;
	border-style: none; 
	background-color: transparent; 
	font-size: 10px;
}
div#header-search-field {
	position: relative; 
	width: 162px; 
	height: 25px; 
	background: url(images/antonellis_layout_static_06.png); 
	background-repeat: no-repeat;
	display: inline-block;
}
div#header-search-field input {
	position: absolute; 
	width: 142px; 
	height: 25px; 
	line-height: 25px;
	top: 0px; 
	left: 10px;
	border-style: none; 
	background-color: transparent; 
	font-size: 10px;
}
div#header-search-field input.text-active,
div#footer-email-field input.text-active {
	color: #000000;
}
div#header-search-field input.text-inactive,
div#footer-email-field input.text-inactive {
	color: #777777;
}

div#footer-emaillist div#home_emaillist_submit {position:absolute; width:75px; height:22px; bottom:10px; left:33px; cursor:pointer;}
</style>
<!-- end styles -->

<!--// libraries //-->
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script type="text/javascript" src="http://use.typekit.com/cec3gkj.js"></script>
<!--// end libraries //-->

<!--// scripts //-->
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<script type="text/javascript">
	$(document).ready(function(){
		var $expandNavObjId = '';
		var $collapseNavObjId = '';
		$('div.nav-obj').mouseenter(function(){
			if (!$('div#'+$(this).attr('id')).hasClass('active')) {
				$expandNavObjId = $(this).attr('id');
				$collapseNavObjId = '';
				if ($('div.nav-obj').hasClass('active')) {
					$('div.nav-obj').removeClass('active');
					$('div.nav-menu ul li ul').slideUp(200);
					$('div.nav-menu').slideUp(200);
				}
				$('div#'+$(this).attr('id')).addClass('active');
				$('div#'+$(this).attr('id')+'-menu').slideDown();
			}
		});
		$('div.nav-menu').mouseenter(function(){
				$collapseNavObjId = '';
		});
		$('div.nav-menu').mouseleave(function(){
			$collapseNavObjId = $expandNavObjId;
			$('div#'+$collapseNavObjId+'-menu li ul').slideUp(200);
			setTimeout(function(){
				if ($('div#'+$collapseNavObjId).hasClass('active') && $collapseNavObjId != '') {
					$('div#'+$collapseNavObjId).removeClass('active');
					$('div#'+$collapseNavObjId+'-menu').slideUp(200);
					$collapseNavObjId = ''
				}
			}, 2000);
		});
		$('*').click(function(){
			$expandNavObjId = '';
			$collapseNavObjId = '';
			$('div.nav-obj').removeClass('active');
			$('div.nav-menu').slideUp(200);
		});
		$('div.nav-menu ul li').mouseenter(function(){
			$(this).find('ul').slideDown();
		});
	});
</script>

<? if (drupal_is_front_page()) { ?>
<link rel="stylesheet" href="sites/all/js/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<script src="sites/all/js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
<script type="text/javascript">
	$(window).load(function() {
		var total = $('#slider img').length;
		var rand = Math.floor(Math.random()*total);
		$('#slider').nivoSlider({
			effect:'fade', //Specify sets like: 'fold,fade,sliceDown,random'
			slices:1, //Only need 1 slice for fade to work!
			animSpeed:1000, //Slide transition speed
			pauseTime:10000, //Slide display time
			startSlide:rand, //Set starting Slide (0 index)
			directionNav:false, //Next & Prev
			directionNavHide:true, //Only show on hover
			controlNav:false, //1,2,3...
			controlNavThumbs:false, //Use thumbnails for Control Nav
			controlNavThumbsFromRel:false, //Use image rel for thumbs
			controlNavThumbsSearch: '.jpg', //Replace this with...
			controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
			keyboardNav:true, //Use left & right arrows
			pauseOnHover:false, //Stop animation while hovering
			manualAdvance:false, //Force manual transitions
			captionOpacity:0.8, //Universal caption opacity
			beforeChange: function(){},
			afterChange: function(){},
			slideshowEnd: function(){}, //Triggers after all slides have been shown
			lastSlide: function(){}, //Triggers when last slide is shown
			afterLoad: function(){} //Triggers when slider has loaded
		});
	});
</script>
<? } ?>
<!-- end scripts -->




























<div id="header-navigation">
	<div id="header-navigation-links">
		<?
		$textnav = array();
		$textnav['contact-us'] = array(
			"uri" => "/contact-us",
			"text" => "Contact Us"
			);
		$textnav['careers'] = array(
			"uri" => "/careers",
			"text" => "Careers"
			);
		$textnav['settlement-club'] = array(
			"uri" => "/settlement-club",
			"text" => "Settlement Club"
			);

		$first = true;
		foreach ($textnav as $navitem => $navparams) {
			if (!$first) {
			?> &nbsp;|&nbsp; <?
			} else {
				$first = false;
			}
			if (strpos($_SERVER['REQUEST_URI'],$navparams['uri']) === false) {
			?><a href="<?=$navparams['uri']?>"><?=$navparams['text']?></a><?
			} else {
			?><a href="<?=$navparams['uri']?>" class="active"><?=$navparams['text']?></a><?
			}
		}
		?></div>
	<div id="header-navigation-subscribe" onmouseover="this.style.backgroundImage='url(\'/sites/all/themes/antonellis/images/antonellis_signup_rollover.png\')'" onmouseout="this.style.backgroundImage='url(\'/sites/all/themes/antonellis/images/antonellis_signup_static.png\')'">
		<form name="subscribeForm" action="/subscribe" method="post"><input class="textfield_inactive" id="idldik-idldik" name="cm-idldik-idldik" type="text" size="32" value="Email Sign-up" onFocus="if (this.value == 'Email Sign-up') {this.value = ''; this.className = 'textfield_active';}" onBlur="if (this.value == '') {this.value='Email Sign-up'; this.className = 'textfield_inactive';}" />
			<div id="header-navigation-subscribe-submit" name="subscribeSubmit" onClick="if (document.getElementById('idldik-idldik').value == 'Email Sign-up') {return false;} else {document.subscribeForm.submit();}"></div>
		</form></div>
	<div id="header-navigation-donate"><a href="/donate"><img src="/sites/all/themes/antonellis/images/antonellis_donate_static.png" border="0" onmouseover='this.src="/sites/all/themes/antonellis/images/antonellis_donate_rollover.png"' onmouseout='this.src="/sites/all/themes/antonellis/images/antonellis_donate_static.png"' /></a></div>
</div>
<div id="header-tagline"><img src="/sites/all/themes/antonellis/images/antonellis_tagline.png" /></div>