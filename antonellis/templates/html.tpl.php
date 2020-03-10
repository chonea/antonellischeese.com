<?php
// $Id$
/**
* @file
* Default theme implementation to display the basic html structure of a single
* Drupal page.
*
* Variables:
* - $css: An array of CSS files for the current page.
* - $language: (object) The language the site is being displayed in.
* $language->language contains its textual representation.
* $language->dir contains the language direction. It will either be 'ltr' or 'rtl'.
* - $rdf_namespaces: All the RDF namespace prefixes used in the HTML document.
* - $grddl_profile: A GRDDL profile allowing agents to extract the RDF data.
* - $head_title: A modified version of the page title, for use in the TITLE tag.
* - $head: Markup for the HEAD section (including meta tags, keyword tags, and
* so on).
* - $styles: Style tags necessary to import all CSS files for the page.
* - $scripts: Script tags necessary to load the JavaScript files and settings
* for the page.
* - $page_top: Initial markup from any modules that have altered the
* page. This variable should always be output first, before all other dynamic
* content.
* - $page: The rendered page content.
* - $page_bottom: Final closing markup from any modules that have altered the
* page. This variable should always be output last, after all other dynamic
* content.
* - $classes String of classes that can be used to style contextually through
* CSS.
*
* @see template_preprocess()
* @see template_preprocess_html()
* @see template_process()
*/
//error_reporting(E_ALL);
?><!doctype html>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>

<!--// libraries //-->
<script src="http://code.jquery.com/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://use.typekit.com/ehy1zyi.js"></script>
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
					$('div.nav-menu ul li ul').stop(true, true).slideUp(200);
					$('div.nav-menu').stop(true, true).slideUp(200);
				}
				$('div#'+$(this).attr('id')).addClass('active');
				$('div#'+$(this).attr('id')+'-menu').stop(true, true).slideDown();
			}
		});

		$('div.nav-menu').mouseenter(function(){
				$collapseNavObjId = '';
		});

		$('div.nav-menu').mouseleave(function(){
			$collapseNavObjId = $expandNavObjId;
			$('div#'+$collapseNavObjId+'-menu li ul').stop(true, true).slideUp(200);
			setTimeout(function(){
				if ($collapseNavObjId != '') {
					if ($('div#'+$collapseNavObjId).hasClass('active')) {
						$('div#'+$collapseNavObjId).removeClass('active');
						$('div#'+$collapseNavObjId+'-menu').stop(true, true).slideUp(200);
						$collapseNavObjId = ''
					}
				}
			}, 1000);
		});

		$('*').click(function(){
			$expandNavObjId = '';
			$collapseNavObjId = '';
			$('div.nav-obj').removeClass('active');
			$('div.nav-menu').stop(true, true).slideUp(200);
		});
		$('div.nav-menu ul li').mouseenter(function(){
			$(this).find('ul').stop(true, true).slideDown();
		});

//		$('#page-title').addClass('tk-felt-tip-roman');
	});
</script>

<? if (0) { ?>
<!-- Include LongTail jwplayer video and controls -->
<script type="text/javascript" src="/sites/all/js/jwplayer/jwplayer.js"></script>
<script type="text/javascript" src="/sites/all/js/jwplayer/jscontrolbar/jquery.js"></script>
<script type="text/javascript" src="/sites/all/js/jwplayer/jscontrolbar/ui.core.js"></script>
<script type="text/javascript" src="/sites/all/js/jwplayer/jscontrolbar/ui.slider.js"></script>
<script type="text/javascript" src="/sites/all/js/jwplayer/jscontrolbar/jquery.jscontrolbar.js"></script>
<link rel="stylesheet" type="text/css" href="/sites/all/js/jwplayer/jscontrolbar/jscontrolbar.css" />
<? } ?>

<? if (1) { ?>
<!-- Include the VideoJS Library -->
<script src="/sites/all/js/video-js/video.js" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript">
	// Must come after the video.js library

	// Add VideoJS to all video tags on the page when the DOM is ready
	// VideoJS.setupAllWhenReady();

	/* ============= OR ============ */

	// Setup and store a reference to the player(s).
	// Must happen after the DOM is loaded
	// You can use any library's DOM Ready method instead of VideoJS.DOMReady

	/*
	VideoJS.DOMReady(function(){
		
		// Using the video's ID or element
		var myPlayer = VideoJS.setup("example_video_1");
		
		// OR using an array of video elements/IDs
		// Note: It returns an array of players
		var myManyPlayers = VideoJS.setup(["example_video_1", "example_video_2", video3Element]);

		// OR all videos on the page
		var myManyPlayers = VideoJS.setup("All");

		// After you have references to your players you can...(example)
		myPlayer.play(); // Starts playing the video for this player.
	});
	*/

	/* ========= SETTING OPTIONS ========= */

	// Set options when setting up the videos. The defaults are shown here.

	/*
	VideoJS.setupAllWhenReady({
		controlsBelow: false, // Display control bar below video instead of in front of
		controlsHiding: true, // Hide controls when mouse is not over the video
		defaultVolume: 0.85, // Will be overridden by user's last volume if available
		flashVersion: 9, // Required flash version for fallback
		linksHiding: true // Hide download links when video is supported
	});
	*/

	// Add VideoJS to all video tags on the page when the DOM is ready
	VideoJS.setupAllWhenReady({
		controlsBelow: true, // Display control bar below video instead of in front of
		controlsHiding: false, // Hide controls when mouse is not over the video
		defaultVolume: 0.85, // Will be overridden by user's last volume if available
		flashVersion: 9, // Required flash version for fallback
		linksHiding: true // Hide download links when video is supported
	});

	// Or as the second option of VideoJS.setup
	
	/*
	VideoJS.DOMReady(function(){
		var myPlayer = VideoJS.setup("example_video_1", {
			// Same options
		});
	});
	*/

</script>
<? } ?>
<? if (drupal_is_front_page()) { ?>

<link rel="stylesheet" href="/sites/all/js/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<script src="/sites/all/js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
<script type="text/javascript">
	$(window).load(function() {
		var total = $('#slider img').length;
		var rand = Math.floor(Math.random()*total);
		$('#slider').nivoSlider({
			effect:'fade', //Specify sets like: 'fold,fade,sliceDown,random'
			slices:1, //Only need 1 slice for fade to work!
			animSpeed:1000, //Slide transition speed
			pauseTime:12000, //Slide display time
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
<?php // if ($node->nid == '16') { ?>
<!--
<script src="http://cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
<script type="text/javascript">
	/* jquerytools overlay */
	$(document).ready(function() {
		$("map > area.fancybox").overlay();
	});
</script>
-->
<script type="text/javascript" src="/sites/all/js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" href="/sites/all/js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
<script type="text/javascript">
$(document).ready(function() {

	$('map > area.fancybox').click(function(event) {
		event.preventDefault();
		var url = $(this).attr('href');
		var title = $(this).attr('title');
		var type = $(this).attr('rel');
		$.fancybox({
			'title': title,
			'titlePosition': 'inside',
			'href' : url,
			'type' : type,
			'transitionIn'	:	'fade',
			'transitionOut'	:	'fade',
			'speedIn'		:	600, 
			'speedOut'		:	200, 
			'overlayShow'	:	false,
			'hideOnContentClick': false,
			'overlayShow': true,
			'overlayColor': '#000',
			'overlayOpacity': 0.5,
		});
	});
	
});

</script>
<? // } ?>

<script type="text/javascript">
	$(window).load(function() {
		$('body').addClass('background');
	});
</script>
<!--// end scripts //-->
</head>
<body class="<?php print $classes; ?>">
<?php print $page_top; ?>

<?
require ("/usr/www/users/zocalo/antonellis/sites/all/themes/antonellis/custom.inc");
?>

<div id="page">
	<div id="page-header">
		<div id="page-header-content">
			<div id="page-header-content-left">
				<div id="page-header-content-left-nav">
					<a class="first-nav" href="/about"><div id="nav-about" class="nav-obj">&nbsp;</div></a>
					<a class="second-nav" href="/products"><div id="nav-products" class="nav-obj">&nbsp;</div></a>
					<a class="third-nav" href="/happenings"><div id="nav-happenings" class="nav-obj">&nbsp;</div></a>
				</div>
				<div id="nav-about-menu" class="nav-menu">
					<ul>
					<?
						$menu_links_query = "SELECT l.link_title, l.link_path, (SELECT a.alias FROM drupal_url_alias as a WHERE a.source = l.link_path) AS path FROM drupal_menu_links AS l WHERE plid = '485' ORDER BY weight";
						$menu_links_result = mysql_query($menu_links_query, $connection);
						while ($menu_links_row = mysql_fetch_array($menu_links_result)) {
							echo "<li>";
							echo "<a href=\"/".$menu_links_row['path']."\">".$menu_links_row['link_title']."</a>";
							echo "</li>";
						}
					?>
					</ul>
				</div>
				<div id="nav-products-menu" class="nav-menu">
					<ul>
					<?
						$menu_links_query = "SELECT l.link_title, l.link_path, (SELECT a.alias FROM drupal_url_alias as a WHERE a.source = l.link_path) AS path FROM drupal_menu_links AS l WHERE plid = '351' ORDER BY weight";
						$menu_links_result = mysql_query($menu_links_query, $connection);
						while ($menu_links_row = mysql_fetch_array($menu_links_result)) {
							echo "<li>";
							echo "<a href=\"/".$menu_links_row['path']."\">".$menu_links_row['link_title']."</a>";
							echo "</li>";
						}
					?>
					</ul>
				</div>
				<div id="nav-happenings-menu" class="nav-menu">
					<ul>
					<?
						$menu_links_query = "SELECT l.link_title, l.link_path, (SELECT a.alias FROM drupal_url_alias as a WHERE a.source = l.link_path) AS path FROM drupal_menu_links AS l WHERE plid = '508' ORDER BY weight";
						$menu_links_result = mysql_query($menu_links_query, $connection);
						while ($menu_links_row = mysql_fetch_array($menu_links_result)) {
							echo "<li>";
							echo "<a href=\"/".$menu_links_row['path']."\">".$menu_links_row['link_title']."</a>";
							echo "</li>";
						}
					?>
					</ul>
				</div>
			</div>
			<div id="page-header-content-center"><a href="/"><img src="/sites/all/themes/antonellis/images/antonellis_layout_static_03.png" /></a></div>
			<div id="page-header-content-right">
				<div id="header-search-nav">
					<div id="header-search-field">
						<form name="searchForm" id="search-form" action="/search" method="post">
							<input id="edit-keys" name="keys" class="text-inactive" type="text" size="40" maxlength="255" value="Search Site" onFocus="if (this.value == 'Search Site') {this.value = ''; this.className = 'text-active';}" onBlur="if (this.value == '') {this.value='Search Site'; this.className = 'text-inactive';}" />
						</form>
					</div>
					<a href="#" onMouseOver="document.getElementById('search-submit').src = '/sites/all/themes/antonellis/images/antonellis_layout_rollover_08.png'" onMouseOut="document.getElementById('search-submit').src = '/sites/all/themes/antonellis/images/antonellis_layout_static_08.png'" onClick="document.searchForm.submit()"><img src="/sites/all/themes/antonellis/images/antonellis_layout_static_08.png" id="search-submit" alt="Submit" /></a>
				</div>
				<div id="page-header-content-right-nav">
					<a href="/catering"><div id="nav-catering" class="nav-obj">&nbsp;</div></a>
					<a href="/gifts"><div id="nav-gifts" class="nav-obj">&nbsp;</div></a>
					<a href="/contact"><div id="nav-contact" class="nav-obj">&nbsp;</div></a>
				</div>
				<div id="nav-catering-menu" class="nav-menu">
					<ul>
					<?
						$menu_links_query = "SELECT l.link_title, l.link_path, (SELECT a.alias FROM drupal_url_alias as a WHERE a.source = l.link_path) AS path FROM drupal_menu_links AS l WHERE plid = '353' ORDER BY weight";
						$menu_links_result = mysql_query($menu_links_query, $connection);
						while ($menu_links_row = mysql_fetch_array($menu_links_result)) {
							echo "<li>";
							echo "<a href=\"/".$menu_links_row['path']."\">".$menu_links_row['link_title']."</a>";
							echo "</li>";
						}
					?>
					</ul>
				</div>
				<div id="nav-gifts-menu" class="nav-menu">
					<ul>
					<?
						$menu_links_query = "SELECT l.link_title, l.link_path, (SELECT a.alias FROM drupal_url_alias as a WHERE a.source = l.link_path) AS path FROM drupal_menu_links AS l WHERE plid = '354' ORDER BY weight";
						$menu_links_result = mysql_query($menu_links_query, $connection);
						while ($menu_links_row = mysql_fetch_array($menu_links_result)) {
							echo "<li>";
							echo "<a href=\"/".$menu_links_row['path']."\">".$menu_links_row['link_title']."</a>";
							echo "</li>";
						}
					?>
					</ul>
				</div>
				<div id="nav-contact-menu" class="nav-menu">
					<ul>
					<?
						$menu_links_query = "SELECT l.link_title, l.link_path, (SELECT a.alias FROM drupal_url_alias as a WHERE a.source = l.link_path) AS path FROM drupal_menu_links AS l WHERE plid = '355' ORDER BY weight";
						$menu_links_result = mysql_query($menu_links_query, $connection);
						while ($menu_links_row = mysql_fetch_array($menu_links_result)) {
							echo "<li>";
							echo "<a href=\"/".$menu_links_row['path']."\">".$menu_links_row['link_title']."</a>";
							echo "</li>";
						}
					?>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php print $page; ?>

	<div id="page-footer">
		<div id="page-footer-content">
			<div id="page-footer-content-top">
				<div id="page-footer-content-top-nav">
					<img src="/sites/all/themes/antonellis/images/antonellis_layout_static_22.png" class="first" /> <a target="_blank" href="http://maps.google.com/maps?q=Antonelli%27s+Cheese+Shop,+4220+Duval+Street,+Austin,+TX+78751&oe=utf-8&rls=org.mozilla:en-US:official&client=firefox-a&um=1&ie=UTF-8&ei=ONQiT8mkMemssAKM_sHBCQ&sa=X&oi=mode_link&ct=mode&cd=3&ved=0CBkQ_AUoAg">4220 Duval St, Austin, TX 78751</a> &nbsp;
					<img src="/sites/all/themes/antonellis/images/antonellis_layout_static_24.png" /> <a target="_blank" href="tel:5125319610">512 531 9610</a> &nbsp; 
					<img src="/sites/all/themes/antonellis/images/antonellis_layout_static_26.png" /> <a target="_blank" href="mailto:info@antonellischeese.com">Email us</a> &nbsp;  
					<img src="/sites/all/themes/antonellis/images/antonellis_layout_static_29.png" /> Mon-Sat 11-7  
					<img src="/sites/all/themes/antonellis/images/antonellis_layout_static_31.png" /> Sun 12-5
				</div>
			</div>
			<div id="page-footer-content-middle"></div>
			<div id="page-footer-content-bottom">
				<div id="page-footer-content-bottom-nav">
					<img src="/sites/all/themes/antonellis/images/antonellis_layout_static_41.png" /> <a target="_blank" href="http://www.facebook.com/pages/Austin-TX/Antonellis-Cheese-Shop/164160170684?ref=sgm" onMouseOver="document.getElementById('icon-facebook').src = '/sites/all/themes/antonellis/images/antonellis_layout_rollover_48.png'" onMouseOut="document.getElementById('icon-facebook').src = '/sites/all/themes/antonellis/images/antonellis_layout_static_48.png'"><img src="/sites/all/themes/antonellis/images/antonellis_layout_static_48.png" id="icon-facebook" class="icon" alt="Facebook" /></a>  &nbsp;&nbsp;
					<img src="/sites/all/themes/antonellis/images/antonellis_layout_static_43.png" /> <a target="_blank" href="http://twitter.com/antonellischz" onMouseOver="document.getElementById('icon-twitter').src = '/sites/all/themes/antonellis/images/antonellis_layout_rollover_51.png'" onMouseOut="document.getElementById('icon-twitter').src = '/sites/all/themes/antonellis/images/antonellis_layout_static_51.png'"><img src="/sites/all/themes/antonellis/images/antonellis_layout_static_51.png" id="icon-twitter" class="icon" alt="Twitter" /></a>  &nbsp;&nbsp;
					<img src="/sites/all/themes/antonellis/images/antonellis_text_instagram.png" /> <a target="_blank" href="http://www.instagram.com/antonellischz" onMouseOver="document.getElementById('icon-instagram').src = '/sites/all/themes/antonellis/images/antonellis_layout_rollover_instagram.png'" onMouseOut="document.getElementById('icon-instagram').src = '/sites/all/themes/antonellis/images/antonellis_layout_instagram.png'"><img src="/sites/all/themes/antonellis/images/antonellis_layout_instagram.png" id="icon-instagram" class="icon" alt="Instagram" /></a>  &nbsp;&nbsp;
					<img src="/sites/all/themes/antonellis/images/antonellis_layout_static_45.png" />
					<div id="footer-email-field">
						<form id="emailForm" name="ccoptin" action="http://visitor.constantcontact.com/d.jsp" target="_blank" method="post">
							<input type="hidden" name="m" value="1102893682887">
							<input type="hidden" name="p" value="oi">
							<input class="text-inactive" id="hlsju-hlsju" name="ea" type="text" size="32" value="Enter Email Address" onFocus="if (this.value == 'Enter Email Address') {this.value = ''; this.className = 'text-active';}" onBlur="if (this.value == '') {this.value='Enter Email Address'; this.className = 'text-inactive';}" />
						</form>
					</div>
					<a target="_blank" href="#" onMouseOver="document.getElementById('email-submit').src = '/sites/all/themes/antonellis/images/antonellis_layout_rollover_56.png'" onMouseOut="document.getElementById('email-submit').src = '/sites/all/themes/antonellis/images/antonellis_layout_static_56.png'" onClick="document.getElementById('emailForm').submit(); return false;"><img src="/sites/all/themes/antonellis/images/antonellis_layout_static_56.png" id="email-submit" alt="Submit" /></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="footer">
	<div id="footer-transition">&nbsp;</div>
	<div id="footer-copy">&copy;<?=date('Y');?> Antonelli's Cheese. All Rights Reserved.  |  Site by <a target="_blank" href="http://www.zocalodesign.com">Zocalo Design</a></div>
</div>

<?php print $page_bottom; ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56237713-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
