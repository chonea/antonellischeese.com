<?
//error_reporting(E_ALL);
require_once ("includes/custom.inc");
$db = array (
	'database' => 'antonellis_drupal',
	'username' => 'antonellis_drupal',
	'password' => 'MYFajlG5Y2j',
	'host' => 'localhost',
	'port' => '',
	'driver' => 'mysql',
	'prefix' => 'drupal_'
);
$connection = mysql_connect($db['host'], $db['username'], $db['password']) or die ("Unable to connect!");
mysql_select_db($db['database']) or die ("UNABLE TO SELECT DATABASE");
?>
<!--// Nivo Slider //-->
<link rel="stylesheet" href="js/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
<style type="text/css">
#slider {
    position:relative;
    width:900px; /* Change this to your images width */
    height:376px; /* Change this to your images height */
    background:url(sites/all/js/nivo-slider/loading.gif) no-repeat 50% 50%;
}
#slider img {
    position:absolute;
    top:0px;
    left:0px;
    display:none;
}
#slider a {
    border:0;
    display:block;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<script src="sites/all/js/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script>
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
<div id="slider" style="margin-left:-15px; margin-top:-15px;" class="clearfix">
	<a href="/endowment-and-legacy-society"><img src="sites/all/themes/antonellis/images/slides/slide1.jpg" alt="" /></a>
	<a href="/special-events"><img src="sites/all/themes/antonellis/images/slides/slide2.jpg" alt="" /></a>
	<a href="/donate"><img src="sites/all/themes/antonellis/images/slides/slide3.jpg" alt="" /></a>
</div>
<div style="position:relative; width:900px; height:165px; margin-top: 18px; margin-bottom: 8px;" class="clearfix">
	<div style="position:absolute; top:0px; left:15px; width:250px; height:165px; padding:5px 20px 10px 0px; "><h1 style="margin-top:0; padding-top:0;">Recent News</h1>
	<?
		$query = "SELECT nid FROM drupal_node WHERE type = 'article' AND status = '1' AND promote = '1' ORDER BY changed DESC LIMIT 1";
		$result = mysql_query($query, $connection);
		if ($node_row = mysql_fetch_array($result)) {
			$query = "SELECT body_value FROM drupal_field_data_body WHERE entity_id = '".$node_row['nid']."' LIMIT 1";
			$result = mysql_query($query, $connection);
			$body_row = mysql_fetch_array($result);
			echo stripTags(substr_to_char(html_entity_decode(stripslashes($body_row['body_value'])),190));
			echo "&nbsp;&nbsp;";
		}
		/*
		$node_row = db_query("SELECT nid FROM {node} WHERE type = :type AND status = '1' AND promote = '1' ORDER BY changed DESC LIMIT 1", array(':type' => 'article'))->fetchAll();
		if ($node = node_load($node_row['nid'])) {
			echo $node->body;
		}
			echo "<pre>";
			print_r ($node_row);
			echo "</pre>";
	*/
	?><a href="/news-and-updates" class="more-url">READ MORE <span class="raquo">&raquo;</span></a></div>
	<div style="position:absolute; top:0px; left:290px; width:250px; height:165px; padding:5px 20px 10px 20px; border-left:1px solid #cccccc;"><h1 style="margin-top:0; padding-top:0;">Featured Story</h1>
	<?
		$query = "SELECT nid FROM drupal_node WHERE type = 'story' AND status = '1' AND promote = '1' ORDER BY changed DESC LIMIT 1";
		$result = mysql_query($query, $connection);
		if ($node_row = mysql_fetch_array($result)) {
			$query = "SELECT body_value FROM drupal_field_data_body WHERE entity_id = '".$node_row['nid']."' LIMIT 1";
			$result = mysql_query($query, $connection);
			$body_row = mysql_fetch_array($result);
			echo stripTags(substr_to_char(html_entity_decode(stripslashes($body_row['body_value'])),190));
			echo "&nbsp;&nbsp;";
		}
	?><a href="/stories" class="more-url">READ MORE <span class="raquo">&raquo;</span></a></div>
	<div style="position:absolute; top:0px; left:580px; width:250px; height:165px; padding:5px 20px 10px 20px; border-left:1px solid #cccccc;"><h1 style="margin-top:0; padding-top:0;">Connect With Us</h1>
		<div style="height:40px; margin: 0 0 0 0;">
			<div style="float:left;"><img src="sites/all/themes/antonellis/images/connect_facebook.png" /></div>
			<div style="float:left; margin: 0 0 0 8px;"><a target="_blank" href="http://www.facebook.com/pages/The-Settlement-Home-for-Children/102589046472019" class="more-url">BECOME OUR FRIEND <span class="raquo">&raquo;</span></a></div>
			<br style="clear:both;" />
		</div>
		<div style="height:40px; margin: 0 0 0 0;">
			<div style="float:left;"><img src="sites/all/themes/antonellis/images/connect_twitter.png" /></div>
			<div style="float:left; margin: 0 0 0 8px;"><a target="_blank" href="http://twitter.com/SettlementHome" class="more-url">FOLLOW US <span class="raquo">&raquo;</span></a></div>
			<br style="clear:both;" />
		</div>
		<div style="height:40px; margin: 0 0 0 0;">
			<div style="float:left;"><img src="sites/all/themes/antonellis/images/connect_blog.png" /></div>
			<div style="float:left; margin: 0 0 0 8px;"><a href="/blog" class="more-url">CHECK OUT OUR BLOG <span class="raquo">&raquo;</span></a></div>
			<br style="clear:both;" />
		</div>
	</div>
</div>