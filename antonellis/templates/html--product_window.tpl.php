<?php
//error_reporting(E_ALL);
?><!doctype html>
<?php print $head; ?>
<title><?php print $head_title; ?></title>
<?php print $styles; ?>
<?php print $scripts; ?>

<!--// libraries //-->
<script src="http://code.jquery.com/jquery-latest.js" type="text/javascript"></script>
<script type="text/javascript" src="http://use.typekit.com/ehy1zyi.js"></script>
<!--// end libraries //-->

<!--// scripts //-->
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!--// end scripts //-->
</head>
<body class="<?php print $classes; ?>">
<?
require ("/usr/www/users/zocalo/antonellis/sites/all/themes/antonellis/custom.inc");
?>
<div id="page">
<!-- Texas Cheese Modal content -->
<?php
$query = "SELECT n.nid FROM drupal_node as n WHERE n.type = 'product_window' AND n.status = '1' ORDER BY n.title ASC";
$result = mysql_query($query, $connection) or die("error: ".mysql_error());
$first = true;
while ($node_row = mysql_fetch_array($result)){
	$modal_node = node_load($node_row['nid']);
//	echo '<pre>';
//	print_r($modal_node);
//	echo '</pre>';
	echo '<div class="modal-content" id="modal-content-'.$modal_node->nid.'">';
	echo '<div class="modal-content-body">';
	if (is_array($modal_node->field_image['und'])) {if (is_array($modal_node->field_image['und'][0]) && $field_values = $modal_node->field_image['und'][0]) {
			if ($field_values['filename'] != '') {
				echo '<img class="modal-image" src="/sites/default/files/secondary_images/'.$field_values['filename'].'" />';
			}
		}
	}
	echo $modal_node->body['und'][0]['value'];
	echo '<br class="clear" />';
	echo '</div>';
	echo '</div>';
}
?>
</div>
</body>
</html>