<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Antonelli's Cheese Shop Demo</title>
</head>

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

<!-- scripts -->
<? /*
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
*/ ?>
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
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
<!-- end scripts -->

<body>
<div id="page">
	<div id="page-header">
		<div id="page-header-content">
			<div id="page-header-content-left">
				<div id="page-header-content-left-nav">
					<a href="/about"><div id="nav-about" class="nav-obj">&nbsp;</div></a>
					<a href="/products"><div id="nav-products" class="nav-obj">&nbsp;</div></a>
					<a href="/happenings"><div id="nav-happenings" class="nav-obj">&nbsp;</div></a>
				</div>
				<div id="nav-about-menu" class="nav-menu">
					<ul>
						<li><a href="/about/our-story">our story</a></li>
						<li><a href="/about/your-cheesemongers">your cheesemongers</a></li>
						<li><a href="/about/press">press</a></li>
						<li><a href="/about/newsletter">newsletter</a></li>
						<li><a href="/about/our-cheese-around-town">our cheese around town <span>&raquo;</span></a>
							<ul>
								<li><a href="/about/our-cheese-around-town#acs-plates">acs plates</a></li>
								<li><a href="/about/our-cheese-around-town#other-partners">other partners</a></li>
								<li><a href="/about/our-cheese-around-town#wholesale-opportunities">wholesale opportunities</a></li>
							</ul>
						</li>
						<li><a href="/about/shop-faqs">shop faqs</a></li>
					</ul>
				</div>
				<div id="nav-products-menu" class="nav-menu">
					<ul>
						<li><a href="/about/general-cheese">general cheese</a></li>
						<li><a href="/about/texas-cheese">texas cheese</a></li>
						<li><a href="/about/charcuterie">charcuterie</a></li>
						<li><a href="/about/other-goodies">other goodies</a></li>
						<li><a href="/about/cheese-faqs">cheese faqs</a></li>
					</ul>
				</div>
				<div id="nav-happenings-menu" class="nav-menu">
					<ul>
						<li><a href="/about/calendar-of-events">calendar of events</a></li>
						<li><a href="/about/cheese-classes">cheese classes</a></li>
					</ul>
				</div>
			</div>
			<div id="page-header-content-center"><a href="/"><img src="images/antonellis_layout_static_03.png" /></a></div>
			<div id="page-header-content-right">
				<div id="header-search-nav">
					<div id="header-search-field">
						<form name="searchForm" action="#" method="post">
							<input class="text-inactive" type="text" size="32" value="Search Site" onFocus="if (this.value == 'Search Site') {this.value = ''; this.className = 'text-active';}" onBlur="if (this.value == '') {this.value='Search Site'; this.className = 'text-inactive';}" />
						</form>
					</div>
					<a href="#" onmouseover="document.getElementById('search-submit').src = 'images/antonellis_layout_rollover_08.png'" onmouseout="document.getElementById('search-submit').src = 'images/antonellis_layout_static_08.png'" onClick="document.searchForm.submit()"><img src="images/antonellis_layout_static_08.png" id="search-submit" alt="Submit" /></a>
				</div>
				<div id="page-header-content-right-nav">
					<a href="/catering"><div id="nav-catering" class="nav-obj">&nbsp;</div></a>
					<a href="/gifts"><div id="nav-gifts" class="nav-obj">&nbsp;</div></a>
					<a href="/contact"><div id="nav-contact" class="nav-obj">&nbsp;</div></a>
				</div>
				<div id="nav-catering-menu" class="nav-menu">
					<ul>
						<li><a href="/about/prepared-platters">prepared platters</a></li>
						<li><a href="/about/picnic-basket-rental">picnic basket rental</a></li>
						<li><a href="/about/private-party-tastings">private party tastings</a></li>
					</ul>
				</div>
				<div id="nav-gifts-menu" class="nav-menu">
					<ul>
						<li><a href="/gifts/baskets">baskets <span>&raquo;</span></a>
							<ul>
								<li><a href="/gifts/baskets#gift-catalogue">gift catalogue</a></li>
							</ul>
						</li>
						<li><a href="/gifts/other-ideas">other ideas</a></li>
						<li><a href="/gifts/cheese-of-the-month">cheese of the month</a></li>
						<li><a href="/gifts/order-form">order form</a></li>
					</ul>
				</div>
				<div id="nav-contact-menu" class="nav-menu">
					<ul>
						<li><a href="/contact/general-info-and-hours">general info &amp; hours <span>&raquo;</span></a>
							<ul>
								<li><a href="/contact/general-info-and-hours#map-and-directions">map & directions</a></li>
								<li><a href="/contact/general-info-and-hours#hours-of-operation">hours of operation</a></li>
								<li><a href="/contact/general-info-and-hours#phone">phone</a></li>
								<li><a href="/contact/general-info-and-hours#email">email</a></li>
								<li><a href="/contact/general-info-and-hours#facebook">facebook</a></li>
								<li><a href="/contact/general-info-and-hours#twitter">twitter</a></li>
								<li><a href="/contact/general-info-and-hours#email-sign-up">email sign-up</a></li>
							</ul>
						</li>
						<li><a href="/contact/employment">employment</a></li>
						<li><a href="/contact/wholesale-opportunities">wholesale opportunities</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="page-body">
		<div id="page-body-content">
			<div id="nivoSlider">
				<img src="images/slides/slide_02.png" />
			</div>
		</div>
	</div>
	<div id="page-footer">
		<div id="page-footer-content">
			<div id="page-footer-content-top">
				<div id="page-footer-content-top-nav">
					<img src="images/antonellis_layout_static_22.png" class="first" /> 4220 Duval St, Austin, TX 78751&nbsp;
					<img src="images/antonellis_layout_static_24.png" /> 512 531 9610&nbsp; 
					<img src="images/antonellis_layout_static_26.png" /> <a href="mailto:#">Email us</a>&nbsp;  
					<img src="images/antonellis_layout_static_29.png" /> Tues-Sat 11-7  
					<img src="images/antonellis_layout_static_31.png" /> Sun 12-5 
					<img src="images/antonellis_layout_static_31.png" /> Closed Mon
				</div>
			</div>
			<div id="page-footer-content-middle"><a href="/"><img src="images/antonellis_layout_static_38.png" /></a></div>
			<div id="page-footer-content-bottom">
				<div id="page-footer-content-bottom-nav">
					<img src="images/antonellis_layout_static_41.png" /> <a target="_blank" href="http://www.facebook.com/" onmouseover="document.getElementById('icon-facebook').src = 'images/antonellis_layout_rollover_48.png'" onmouseout="document.getElementById('icon-facebook').src = 'images/antonellis_layout_static_48.png'"><img src="images/antonellis_layout_static_48.png" id="icon-facebook" class="icon" alt="Facebook" /></a>  &nbsp;&nbsp;
					<img src="images/antonellis_layout_static_43.png" /> <a target="_blank" href="http://www.twitter.com/" onmouseover="document.getElementById('icon-twitter').src = 'images/antonellis_layout_rollover_51.png'" onmouseout="document.getElementById('icon-twitter').src = 'images/antonellis_layout_static_51.png'"><img src="images/antonellis_layout_static_51.png" id="icon-twitter" class="icon" alt="Twitter" /></a>  &nbsp;&nbsp;
					<div id="footer-email-field">
						<form name="emailForm" action="#" method="post">
							<input class="text-inactive" id="idldik-idldik" name="cm-idldik-idldik" type="text" size="32" value="Enter Email Address" onFocus="if (this.value == 'Enter Email Address') {this.value = ''; this.className = 'text-active';}" onBlur="if (this.value == '') {this.value='Enter Email Address'; this.className = 'text-inactive';}" />
						</form>
					</div>
					<a target="_blank" href="#" onmouseover="document.getElementById('email-submit').src = 'images/antonellis_layout_rollover_56.png'" onmouseout="document.getElementById('email-submit').src = 'images/antonellis_layout_static_56.png'" onClick="document.emailForm.submit()"><img src="images/antonellis_layout_static_56.png" id="email-submit" alt="Submit" /></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<div id="footer-transition">&nbsp;</div>
	<div id="footer-copy">&copy;<?=date('Y');?> Antonelli's Cheese Shop. All Rights Reserved.  |  Site by <a href="http://www.zocalodesign.com">Zocalo Design</a></div>
</div>


</body>
</html>
