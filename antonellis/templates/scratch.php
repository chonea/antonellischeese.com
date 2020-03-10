<?
//error_reporting(E_ALL);
require ("/usr/www/users/zocalo/antonellis/sites/all/themes/antonellis/custom.inc");
?>
<h1 style="margin-top:0; padding-top:0;">News & Updates</h1>
<?
	$query = "SELECT * FROM drupal_node, drupal_field_data_body ";
	$query .= "WHERE drupal_node.type = 'article' AND drupal_node.status = '1' AND drupal_node.nid = drupal_field_data_body.entity_id ORDER BY drupal_node.changed DESC LIMIT 5";
	$result = mysql_query($query, $connection);
	while ($node_row = mysql_fetch_array($result)) {
		echo '<div class="clearfix">';
		echo '<h2>'.$node_row['title'].'</h2>';
		echo stripTags(substr_to_char(html_entity_decode(stripslashes($node_row['body_value'])),190));
		echo '&nbsp;&nbsp;';
		echo '<a href="/news-and-updates" class="more-url">READ MORE <span class="raquo">&raquo;</span></a>';
		echo '</div>';
	}
?>