<?
require ("/usr/www/users/zocalo/antonellis/sites/all/themes/antonellis/custom.inc");
?>

<!-- Two-Column Page layout -->
<?
if ($content['field_body_header']) {
	?>
	<div class="column whole-page">
	<?
		echo drupal_render($content['field_body_header']);
	if ($content['field_header_divider']['#items'][0]['value'] != 0) {
		?>
		<div id="page-body-content-body-divider"></div>
		<?
	}
	?>
	</div>
	<?
}
?>
<div class="column half-page left">

<?
echo drupal_render($content['field_image_left']);
?>

<?
echo drupal_render($content['field_body_left']);
?>

</div>
<div class="column half-page left">
<?
echo drupal_render($content['field_image_right']);
?>

<?
if (arg(0) == 'node' && is_numeric(arg(1))) {
  $nid = arg(1);
	$node = node_load($nid);
	if ($nid == '69') {
	?>

<? if (0) { ?>
	<div class="featured-video right">
		<div class="featured-video-overlay">&nbsp;</div>
		<div class="featured-video-player">
		<!--
		<video controls="controls" width="440" height="248" id="video-our-story">
			<source src="http://antonellis.redglue.com/sites/default/files/videos/COOKINGCHANNEL_FOODPEOPLE_JOHN.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
		</video>
		-->
		</div>
		<div class="featured-video-control">
			<div class="featured-video-control-play">&nbsp;</div>
			<div class="featured-video-control-slide">&nbsp;</div>
			<div class="featured-video-control-slide-position">&nbsp;</div>
			<div class="featured-video-control-volume">&nbsp;</div>
		</div>
	</div>
<? } ?>

<? if (1) { ?>
  <!-- Begin VideoJS -->
  <div class="video-js-box antonellis-vjs-css featured-video right" style="float:left">
		<!--[if (gte IE 9)|!(IE)]><!-->
		<div class="featured-video-overlay" style="z-index:2;">&nbsp;</div>
		<!--<![endif]-->
    <!-- Using the Video for Everybody Embed Code http://camendesign.com/code/video_for_everybody -->
    <video id="about_us_video" class="video-js featured-video-player" width="440" height="248" controls="controls" preload="auto" poster="http://antonellis.zocalodesign.com/sites/all/themes/antonellis/images/antonellis_video_preview.jpg">
      <source src="http://antonellis.zocalodesign.com/sites/default/files/videos/cookingchannel_antonellis.ogv" type='video/ogg; codecs="theora, vorbis"' />
      <source src="http://antonellis.zocalodesign.com/sites/default/files/videos/cookingchannel_antonellis.iphone.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
    	<source src="http://antonellis.zocalodesign.com/sites/default/files/videos/cookingchannel_antonellis.webm" type='video/webm; codecs="vp8, vorbis"' />
      <!-- Flash Fallback. Use any flash video player here. Make sure to keep the vjs-flash-fallback class. -->
      <object id="about_us_video_flash" class="vjs-flash-fallback" width="440" height="248" type="application/x-shockwave-flash"
        data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf">
        <param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
				<param name="wmode" value="transparent">
        <param name="allowfullscreen" value="true" />
        <param name="flashvars" value='config={"playlist":["http://antonellis.zocalodesign.com/sites/all/themes/antonellis/images/antonellis_video_preview.jpg", {"url": "http://antonellis.zocalodesign.com/sites/default/files/videos/COOKINGCHANNEL_FOODPEOPLE_JOHN.mp4","autoPlay":false,"autoBuffering":true, "scaling":"fit"}]}' />
        <!-- Image Fallback. Typically the same as the poster image. -->
        <img src="http://antonellis.zocalodesign.com/sites/all/themes/antonellis/images/antonellis_video_preview.jpg" width="440" height="248" alt="Poster Image"
          title="No video playback capabilities." />
      </object>
    </video>
  </div>
  <!-- End VideoJS -->
<? } ?>

<? if (0) { ?>
  <div class="video-js-box antonellis-vjs-css featured-video right" style="float:left">
		<div class="featured-video-overlay" style="z-index:2;">&nbsp;</div>
		<div id="jw_player">Loading the player ...</div>
	</div>
	<script type="text/javascript">
		jwplayer('jw_player').setup({
			'flashplayer': '/sites/all/js/jwplayer/player.swf', 
			'id': 'playerID',
			'file': 'http://antonellis.redglue.com/sites/default/files/videos/COOKINGCHANNEL_FOODPEOPLE_JOHN.mp4', 
			'image': 'http://antonellis.redglue.com/sites/all/themes/antonellis/images/antonellis_video_preview.jpg', 
			'skin': '/sites/all/js/jwplayer/skins/antonellis/antonellis.xml', 
			'stretching': 'fill', 
			'controlbar': 'over',
			'margin': '-120px',  
			'dock' : 'false', 
			'height': '248', 
			'width': '440',
		}); 
	</script>
<? } ?>
<?
	}
}
?>

<?
echo drupal_render($content['field_body_right']);
?>
</div>
<br class="clear" />
<?
if ($content['field_body_footer']) {
	?>
	<div class="column whole-page">
	<?
	if ($content['field_footer_divider']['#items'][0]['value'] != 0) {
		?>
		<div id="page-body-content-body-divider"></div>
		<?
	}
	echo drupal_render($content['field_body_footer']);
?>
</div>
<?
}
?>