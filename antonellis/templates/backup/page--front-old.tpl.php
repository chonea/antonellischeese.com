<?
//error_reporting(E_ALL);
require_once ("includes/custom.inc");
?>
<div id="page-wrapper">
	<div id="page">xxxxxxx

		<div id="header" class="<?php // print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>">
	
			<div id="header-left">&nbsp;</div>
	
			<div id="header-center">
				<?php if ($secondary_menu): ?>
				<div id="secondary-menu" class="navigation">
					<?php print theme('links__system_secondary_menu', array(
						'links' => $secondary_menu,
						'attributes' => array(
							'id' => 'secondary-menu-links',
							'class' => array('links', 'inline', 'clearfix'),
						),
						'heading' => array(
							'text' => t('Secondary menu'),
							'level' => 'h2',
							'class' => array('element-invisible'),
						),
					)); ?>
				</div> <!-- /#secondary-menu -->
				<?php endif; ?>

				<div class="section clearfix">
					<?php if ($logo): ?>
						<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
							<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
						</a>
					<?php endif; ?>
					<div id="header-content" style="position:absolute; top:50px; right:0px; width:550px;"><?php print render($page['header']); ?></div>
				</div>
				<?
				$nav = array();
				$nav['programs-and-services'] = array(
					"uri" => "/programs-and-services",
					"static_image" => "/sites/all/themes/antonellis/images/antonellis_nav_static_03.png",
					"rollover_image" => "/sites/all/themes/antonellis/images/antonellis_nav_rollover_03.png",
					"active_image" => "/sites/all/themes/antonellis/images/antonellis_nav_active_03.png"
					);
				$nav['donate'] = array(
					"uri" => "/donate",
					"static_image" => "/sites/all/themes/antonellis/images/antonellis_nav_static_05.png",
					"rollover_image" => "/sites/all/themes/antonellis/images/antonellis_nav_rollover_05.png",
					"active_image" => "/sites/all/themes/antonellis/images/antonellis_nav_active_05.png"
					);
				$nav['news-and-updates'] = array(
					"uri" => "/news-and-updates",
					"static_image" => "/sites/all/themes/antonellis/images/antonellis_nav_static_07.png",
					"rollover_image" => "/sites/all/themes/antonellis/images/antonellis_nav_rollover_07.png",
					"active_image" => "/sites/all/themes/antonellis/images/antonellis_nav_active_07.png"
					);
				$nav['volunteer'] = array(
					"uri" => "/volunteer",
					"static_image" => "/sites/all/themes/antonellis/images/antonellis_nav_static_09.png",
					"rollover_image" => "/sites/all/themes/antonellis/images/antonellis_nav_rollover_09.png",
					"active_image" => "/sites/all/themes/antonellis/images/antonellis_nav_active_09.png"
					);
				$nav['workshops-and-ceus'] = array(
					"uri" => "/workshops-and-ceus",
					"static_image" => "/sites/all/themes/antonellis/images/antonellis_nav_static_11.png",
					"rollover_image" => "/sites/all/themes/antonellis/images/antonellis_nav_rollover_11.png",
					"active_image" => "/sites/all/themes/antonellis/images/antonellis_nav_active_11.png"
					);
				$nav['history'] = array(
					"uri" => "/history",
					"static_image" => "/sites/all/themes/antonellis/images/antonellis_nav_static_13.png",
					"rollover_image" => "/sites/all/themes/antonellis/images/antonellis_nav_rollover_13.png",
					"active_image" => "/sites/all/themes/antonellis/images/antonellis_nav_active_13.png"
					);
				$nav['special-events'] = array(
					"uri" => "/special-events",
					"static_image" => "/sites/all/themes/antonellis/images/antonellis_nav_static_15.png",
					"rollover_image" => "/sites/all/themes/antonellis/images/antonellis_nav_rollover_15.png",
					"active_image" => "/sites/all/themes/antonellis/images/antonellis_nav_active_15.png"
					);
				?>
				<div id="main-menu" class="navigation" style="text-align:center;">
					<div style="margin:10px 0 0 0;"><?
						$first = true;
						foreach ($nav as $navitem => $navparams) {
							if (!$first) {
							?><img src="/sites/all/themes/antonellis/images/antonellis_nav_static_04.png" /><?
							} else {
								$first = false;
							}
							if (strpos($_SERVER['REQUEST_URI'],$navparams['uri']) === false) {
							?><a href="<?=$navparams['uri']?>"><img src="<?=$navparams['static_image']?>" border="0" onmouseover='this.src="<?=$navparams['rollover_image']?>"' onmouseout='this.src="<?=$navparams['static_image']?>"' /></a><?
							} else {
							?><a href="<?=$navparams['uri']?>"><img src="<?=$navparams['active_image']?>" border="0" onmouseover='this.src="<?=$navparams['rollover_image']?>"' onmouseout='this.src="<?=$navparams['active_image']?>"' /></a><?
							}
						}
						?></div>
				</div> <!-- /#main-menu -->
			</div>

			<div id="header-right">&nbsp;</div>
		</div> <!-- /.section, /#header -->
		<div>
			<div id="main-wrapper" class="clearfix">
				<div id="main" class="clearfix">
					<div id="main-center">
						<div id="main-left"><div id="main-top-left">&nbsp;</div>&nbsp;</div>
						<div id="main-right"><div id="main-top-right">&nbsp;</div>&nbsp;</div>
			
						<?php if ($messages): ?>
						<div id="messages"><div class="section clearfix">
							<?php print $messages; ?>
						</div></div> <!-- /.section, /#messages -->
						<?php endif; ?>
				
						<?php if ($page['featured']): ?>
						<div id="featured"><div class="section clearfix">
							<?php print render($page['featured']); ?>
						</div></div> <!-- /.section, /#featured -->
						<?php endif; ?>
			
						<div id="content" class="column"><div id="home">
							<div id="slider" style="margin-left:-15px; margin-top:-15px;" class="clearfix"><?
								$query = "SELECT nid FROM drupal_node WHERE type = 'slide' AND status = '1' AND promote = '1' ORDER BY RAND()";
								$result = mysql_query($query);
								while ($node_row = mysql_fetch_array($result)){
									$node = node_load($node_row['nid']);
									//echo "NEW NODE <pre>";
									//print_r ($node);
									//echo "</pre>";
									$slide_begin = '';
									$slide_end = '';
									if (isset($node->field_slide_url['und'][0]['value']) && $node->field_slide_url['und'][0]['value'] != '') {
										$slide_begin = '<a href="'.$node->field_slide_url['und'][0]['value'].'">';
										$slide_end = '</a>';
									}
									if (is_array($node->field_slide_image['und'][0]) && $field_values = $node->field_slide_image['und'][0]) {
										if ($field_values['filename'] != '') {
											echo $slide_begin.'<img src="/sites/default/files/slides/'.$field_values['filename'].'" />'.$slide_end;
										}
									}
									/*
									if (is_array($node->field_image_top['und'][0]) && $field_values = $node->field_image_bottom['und'][0]) {
										if ($field_values['filename'] != '') {
											echo '<img src="/sites/default/files/sidebar/'.$field_values['filename'].'" />';
										}
									}
									*/
								}
								?>
								<? /*
								<a href="/endowment-and-legacy-society"><img src="sites/all/themes/antonellis/images/slides/slide1.jpg" alt="" /></a>
								<a href="/special-events"><img src="sites/all/themes/antonellis/images/slides/slide2.jpg" alt="2011 Garage Sale" /></a>
								<a href="/volunteer"><img src="sites/all/themes/antonellis/images/slides/slide3.jpg" alt="Volunteer" /></a>
								*/ ?>
							</div>
							<div style="position:relative; width:900px; height:165px; margin-top: 18px; margin-bottom: 8px;" class="clearfix">
								<div style="position:absolute; top:0px; left:15px; width:250px; height:165px; padding:5px 20px 10px 0px; "><h1 style="margin-top:0; padding-top:0;">News & Updates</h1>
								<?
									$query = "SELECT * FROM drupal_node, drupal_field_data_body, drupal_users ";
									$query .= "WHERE drupal_node.type = 'article' AND drupal_node.status = '1' AND drupal_node.promote = '1' ";
									$query .= "AND drupal_node.nid = drupal_field_data_body.entity_id ";
									$query .= "AND drupal_node.uid = drupal_users.uid ";
									$query .= "ORDER BY drupal_node.changed DESC ";
									$query .= "LIMIT 1";
									$result = mysql_query($query);
									if ($node_row = mysql_fetch_array($result)) {
										echo '<h3 class="title">'.stripTags(html_entity_decode(stripslashes($node_row['title']))).'</h3>';
										$query2 = "SELECT alias FROM drupal_url_alias ";
										$query2 .= "WHERE source = 'node/".$node_row['nid']."'";
										$result2 = mysql_query($query2);
										$url_row = mysql_fetch_array($result2);		
										echo '<div class="clearfix">';
										echo stripTags(substr_to_char(html_entity_decode(stripslashes($node_row['body_value'])),130));
										echo '&nbsp;&nbsp;';
										echo '<a href="/'.$url_row['alias'].'" class="more-url">READ MORE <span class="raquo">&raquo;</span></a>';
										echo '</div>';
									}
								?></div>
								<div style="position:absolute; top:0px; left:290px; width:250px; height:165px; padding:5px 20px 10px 20px; border-left:1px solid #cccccc;"><h1 style="margin-top:0; padding-top:0;">Spotlight</h1>
								<?
									$query = "SELECT * FROM drupal_node, drupal_field_data_body, drupal_users ";
									$query .= "WHERE drupal_node.type = 'story' AND drupal_node.status = '1' AND drupal_node.promote = '1' ";
									$query .= "AND drupal_node.nid = drupal_field_data_body.entity_id ";
									$query .= "AND drupal_node.uid = drupal_users.uid ";
									$query .= "ORDER BY drupal_node.changed DESC ";
									$query .= "LIMIT 1";
									$result = mysql_query($query);
									if ($node_row = mysql_fetch_array($result)) {
										echo '<h3 class="title">'.stripTags(html_entity_decode(stripslashes($node_row['title']))).'</h3>';
										$query2 = "SELECT alias FROM drupal_url_alias ";
										$query2 .= "WHERE source = 'node/".$node_row['nid']."'";
										$result2 = mysql_query($query2);
										$url_row = mysql_fetch_array($result2);		
										echo '<div class="clearfix">';
										echo stripTags(substr_to_char(html_entity_decode(stripslashes($node_row['body_value'])),130));
										echo '&nbsp;&nbsp;';
										echo '<a href="/'.$url_row['alias'].'" class="more-url">READ MORE <span class="raquo">&raquo;</span></a>';
										echo '</div>';
									}
								?></div>
								<div style="position:absolute; top:0px; left:580px; width:250px; height:165px; padding:5px 20px 10px 20px; border-left:1px solid #cccccc;"><h1 style="margin-top:0; padding-top:0;">Connect With Us</h1>
									<div style="height:40px; margin: 0 0 0 0;">
										<div style="float:left;"><img src="sites/all/themes/antonellis/images/connect_facebook.png" /></div>
										<div style="float:left; margin: 0 0 0 8px;"><a target="_blank" href="http://www.facebook.com/mobileprotection#!/settlementhomeforchildren" class="more-url">BECOME OUR FRIEND <span class="raquo">&raquo;</span></a></div>
										<br style="clear:both;" />
									</div>
									<div style="height:40px; margin: 0 0 0 0;">
										<div style="float:left;"><img src="sites/all/themes/antonellis/images/connect_twitter.png" /></div>
										<div style="float:left; margin: 0 0 0 8px;"><a target="_blank" href="http://twitter.com/SettlementHome" class="more-url">FOLLOW US <span class="raquo">&raquo;</span></a></div>
										<br style="clear:both;" />
									</div>
									<div style="height:40px; margin: 0 0 0 0;">
										<div style="float:left;"><img src="sites/all/themes/antonellis/images/connect_blog.png" /></div>
										<div style="float:left; margin: 0 0 0 8px;"><a target="_blank" href="http://settlementhome.blogspot.com/" class="more-url">CHECK OUT OUR BLOG <span class="raquo">&raquo;</span></a></div>
										<br style="clear:both;" />
									</div>
								</div>
							</div>
	
						</div></div> <!-- /.section, /#content -->
						<br style="clear:both" />
						<div id="main-center-top">&nbsp;</div>
						<div id="main-bottom-left">&nbsp;</div>
						<div id="main-bottom-center">&nbsp;</div>
						<div id="main-bottom-right">&nbsp;</div>
					</div> <!-- /#main-center -->
				</div> <!-- /#main -->
			</div> <!-- /#main-wrapper -->
		</div>
	
		<div id="footer-wrapper"><div class="section">
			<?php if ($page['footer']): ?>
				<div id="footer">
					<?php print render($page['footer']); ?>
					<? /*
					<?php print $feed_icons; ?>
					*/ ?>
				</div> <!-- /#footer -->
			<?php endif; ?>
		</div></div> <!-- /.section, /#footer-wrapper -->

	</div> <!-- /#page -->
</div> <!-- /#page-wrapper -->
