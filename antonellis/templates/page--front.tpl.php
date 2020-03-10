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
	
			<?php if ($page['featured']): ?>
			<div id="featured"><div class="section clearfix">
				<?php print render($page['featured']); ?>
			</div></div> <!-- /.section, /#featured -->
			<?php endif; ?>

			<div id="slider-container">
				<div id="slider">
					<?
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
					}
					?>
				</div>
				<div id="slider-overlay">&nbsp;</div>
			</div>
			<!--// end Content //-->
		</div>
	</div>
