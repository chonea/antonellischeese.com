<?
require ("/usr/www/users/zocalo/antonellis/sites/all/themes/antonellis/custom.inc");
?>

<!-- About Me page -->
<?
$query = "SELECT n.nid FROM drupal_node as n, drupal_field_data_field_staff_weight as wt WHERE n.nid = wt.entity_id AND n.type = 'about_me' AND n.status = '1' ORDER BY wt.field_staff_weight_value ASC, n.title ASC";
$result = mysql_query($query, $connection) or die("error: ".mysql_error());
$first = true;
while ($node_row = mysql_fetch_array($result)){
	$node = node_load($node_row['nid']);
	if ($first) {
		$first = false;
	} else {
		echo '<div id="page-body-content-header-divider"></div>';
	}
//	echo "NEW NODE <pre>";
//	print_r ($node);
//	echo "</pre>";
	echo '<div class="about-staff">';
	echo '<div class="column half-page left">';
	if (is_array($node->field_staff_image['und'])) {
//	echo "field_staff_image <pre>";
//	print_r ($node->field_staff_image);
//	echo "</pre>";
		if (is_array($node->field_staff_image['und'][0]) && $field_values = $node->field_staff_image['und'][0]) {
		//	if ($field_values['filename'] != '' && file_exists('/sites/default/files/staff/headshots/'.$field_values['filename'])) {
			if ($field_values['filename'] != '') {
				echo '<img class="staff-headshot" src="/sites/default/files/staff/headshots/'.$field_values['filename'].'" />';
			}
		}
	}
	if (is_array($node->field_staff_signature['und'])) {
		if (is_array($node->field_staff_signature['und'][0]) && $field_values = $node->field_staff_signature['und'][0]) {
		//	if ($field_values['filename'] != '' && file_exists('/sites/default/files/staff/signatures/'.$field_values['filename'])) {
			if ($field_values['filename'] != '') {
				echo '<h3 class="staff-signature"><img src="/sites/default/files/staff/signatures/'.$field_values['filename'].'" /></h3>';
			} else {
				echo '<h3 class="staff-signature tk-felt-tip-roman">'.$node->title.'</h3>';
			}
		} else {
			echo '<h3 class="staff-signature tk-felt-tip-roman">'.$node->title.'</h3>';
		}
	} else {
		echo '<h3 class="staff-signature tk-felt-tip-roman">'.$node->title.'</h3>';
	}
	echo '<p>'.$node->body['und'][0]['value'].'</p>';
	echo '</div>';
	echo '<div class="column half-page left" style="margin-top: 40px;">';
	echo '<ul>';
	if (is_array($node->field_staff_text_1['und'][0]) && $node->field_staff_text_1['und'][0]['value'] != '') {
		echo '<li class="staff-data tk-felt-tip-roman"><span class="staff-data-label">Favorite Cheese:</span> '.$node->field_staff_text_1['und'][0]['value'].'</li>';
	}
	if (is_array($node->field_staff_text_2['und'][0]) && $node->field_staff_text_2['und'][0]['value'] != '') {
		echo '<li class="staff-data tk-felt-tip-roman"><span class="staff-data-label">Favorite Pairing:</span> '.$node->field_staff_text_2['und'][0]['value'].'</li>';
	}
	if (is_array($node->field_staff_text_3['und'][0]) && $node->field_staff_text_3['und'][0]['value'] != '') {
		echo '<li class="staff-data tk-felt-tip-roman"><span class="staff-data-label">Ideal Cheese Plate:</span> '.$node->field_staff_text_3['und'][0]['value'].'</li>';
	}
	if (is_array($node->field_staff_text_4['und'][0]) && $node->field_staff_text_4['und'][0]['value'] != '') {
		echo '<li class="staff-data tk-felt-tip-roman"><span class="staff-data-label">Dream Trip:</span> '.$node->field_staff_text_4['und'][0]['value'].'</li>';
	}
	if (is_array($node->field_staff_text_5['und'][0]) && $node->field_staff_text_5['und'][0]['value'] != '') {
		echo '<li class="staff-data tk-felt-tip-roman"><span class="staff-data-label">Other Favorite Shop Product:</span> '.$node->field_staff_text_5['und'][0]['value'].'</li>';
	}
	if (is_array($node->field_staff_text_6['und'][0]) && $node->field_staff_text_6['und'][0]['value'] != '') {
		echo '<li class="staff-data tk-felt-tip-roman"><span class="staff-data-label">Go-To-Product To Evoke Customer Happy Dance:</span> '.$node->field_staff_text_6['und'][0]['value'].'</li>';
	}
	if (is_array($node->field_staff_text_7['und'][0]) && $node->field_staff_text_7['und'][0]['value'] != '') {
		echo '<li class="staff-data tk-felt-tip-roman"><span class="staff-data-label">Cheese-y Nickname:</span> '.$node->field_staff_text_7['und'][0]['value'].'</li>';
	}
	if (is_array($node->field_staff_text_8['und'][0]) && $node->field_staff_text_8['und'][0]['value'] != '') {
		echo '<li class="staff-data tk-felt-tip-roman"><span class="staff-data-label">Favorite Milk Type:</span> '.$node->field_staff_text_8['und'][0]['value'].'</li>';
	}
	if (is_array($node->field_staff_text_9['und'][0]) && $node->field_staff_text_9['und'][0]['value'] != '') {
		echo '<li class="staff-data tk-felt-tip-roman"><span class="staff-data-label">If I Were A Cheese, I\'d Be:</span> '.$node->field_staff_text_9['und'][0]['value'].'</li>';
	}
	if (is_array($node->field_staff_text_10['und'][0]) && $node->field_staff_text_10['und'][0]['value'] != '') {
		echo '<li class="staff-data tk-felt-tip-roman"><span class="staff-data-label">My Favorite Thing About Being A Cheesemonger:</span> '.$node->field_staff_text_10['und'][0]['value'].'</li>';
	}
	if (is_array($node->field_staff_text_11['und'][0]) && $node->field_staff_text_11['und'][0]['value'] != '') {
		echo '<li class="staff-data tk-felt-tip-roman"><span class="staff-data-label">Why I wanted To Work At ACS:</span> '.$node->field_staff_text_11['und'][0]['value'].'</li>';
	}
	if (is_array($node->field_staff_text_12['und'][0]) && $node->field_staff_text_12['und'][0]['value'] != '') {
		echo '<li class="staff-data tk-felt-tip-roman"><span class="staff-data-label">Other Hobbies:</span> '.$node->field_staff_text_12['und'][0]['value'].'</li>';
	}
	echo '</ul>';
	echo '</div>';
	echo '<br class="clear" />';
	echo '</div>';
}
?>