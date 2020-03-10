<?
require ("/usr/www/users/zocalo/antonellis/sites/all/themes/antonellis/custom.inc");
?>

	<div id="page-body">
		<div id="page-body-content">
			<!--// begin Content //-->
			<?php if ($messages): ?>
			<div id="messages"><div class="section clearfix">
				<?php print $messages; ?>
			</div></div> <!-- /.section, /#messages -->
			<?php endif; ?>
	
			<?php if ($node->nid) {
					$featured_node = node_load($node->nid);
					if (is_array($featured_node->field_featured_image['und'])) {
						if (is_array($featured_node->field_featured_image['und'][0]) && $field_values = $featured_node->field_featured_image['und'][0]) {
							if ($field_values['filename'] != '') {
								echo '<div id="featured"><div class="section clearfix">';
								echo '<div class="content"><p>';
								
								// we need a new solution for this!
								if (strpos($field_values['uri'],$field_values['filename']) === true) {
									echo '<img id="featured-image-node-'.$node->nid.'" src="/sites/default/files/featured_images/'.$field_values['filename'].'" />';
								} else {
									// strip "public://featured_images/" from uri
									echo '<img id="featured-image-node-'.$node->nid.'" src="/sites/default/files/featured_images/'.substr($field_values['uri'],25).'" />';
								}
								
								echo '</p></div>';
								/*
								echo '<pre>';
								print_r($featured_node);
								echo '</pre>';
								*/
								echo '</div></div> <!-- /.section, /#featured -->';
							}
						}
					}
			 } ?>

			<?php if ($page['featured']) { ?>
			<div id="featured"><div class="section clearfix">
				<?php print render($page['featured']); ?>
			</div></div> <!-- /.section, /#featured -->
			<? } ?>

			<?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
			<a id="main-content"></a>
			<?php print render($title_prefix); ?>
			<?php if ($title): ?>
			<h1 class="title" id="page-title">
				<?php print $title; ?>
			</h1>
			<div id="page-body-content-header-divider"></div>
			<?php endif; ?>
			<?php print render($title_suffix); ?>
			<? /*
			*/ ?>
			<?php if ($tabs): ?>
			<div class="tabs">
				<?php print render($tabs); ?>
			</div>
			<?php endif; ?>
			<?php if ($action_links): ?>
			<ul class="action-links">
				<?php print render($action_links); ?>
			</ul>
			<?php endif; ?>
			<?php print render($page['help']); ?>
			<div id="page-body-content-body">
			<?php print render($page['content']); ?>
			</div>
			<!--// end Content //-->
		</div>
	</div>
<?php if ($node->nid == '16') { ?>

<!-- Texas Cheese Modal content -->
<?php
$query = "SELECT n.nid FROM drupal_node as n WHERE n.type = 'product_window' AND n.status = '1' ORDER BY n.title ASC";
$result = mysql_query($query, $connection) or die("error: ".mysql_error());
$first = true;
while ($node_row = mysql_fetch_array($result)){
	$modal_node = node_load($node_row['nid']);
	echo '<div class="modal-content">';
	echo '<div class="modal-content-body" id="modal-content-'.$modal_node->nid.'">';
	if (is_array($modal_node->field_image['und'])) {if (is_array($modal_node->field_image['und'][0]) && $field_values = $modal_node->field_image['und'][0]) {
			if ($field_values['filename'] != '') {
				echo '<img class="modal-image" src="/sites/default/files/product_images/'.$field_values['filename'].'" />';
			}
		}
	}
	echo '<h2>'.$modal_node->title.'</h2>';
	echo $modal_node->body['und'][0]['value'];
	echo '<br class="clear" />';
//	echo '<pre>';
//	print_r($modal_node->field_image);
//	echo '</pre>';
	echo '</div>';
	echo '</div>
	
';
}
?>
<?php } ?>
