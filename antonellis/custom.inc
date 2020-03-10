<?
// Custom Functions
//echo "custom.inc";
if (!function_exists('connectDB')) {
	function connectDB() {
		$dev = false;
		if ($dev) { 
			// @ Redglue
			$db = array (
				'database' => 'zocalo_antonell',
				'username' => 'zocalo_antonell',
				'password' => 'GBOFEafgSl7',
				'host' => 'localhost',
				'port' => '',
				'driver' => 'mysql',
				'prefix' => 'drupal_',
			);
		} else {
			// @ Zocalo (Pair)
			$db = array (
				'database' => 'zocalo_antonellis',
				'username' => 'zocalo_35',
				'password' => '432NdeGe',
				'host' => 'localhost',
				'port' => '',
				'driver' => 'mysql',
				'prefix' => 'drupal_',
			);
		}
		$connection = mysql_connect($db['host'], $db['username'], $db['password']) or die ("Unable to connect!");
		mysql_query("SET NAMES 'UTF8'", $connection) or die(mysql_error()." - SET NAMES 'UTF8'");
		mysql_select_db($db['database']) or die ("UNABLE TO SELECT DATABASE");
		return $connection;
	}
}
if (!isset($connection)) {
	$connection = connectDB();
}

// Returns a subsection of text, to nearest space, or other specified character.
if (!function_exists('substr_to_char')) {
	function substr_to_char($full_string, $length = '200', $char = ' ', $ellipses = false){
		if (strlen($full_string) > $length) {
			$ret_string = substr($full_string, 0, $length);
			$ret_string = substr($ret_string, 0, strrpos($ret_string, $char));
			if ($ellipses == true) {
				$ret_string = $ret_string."...";
			}
			return $ret_string;
		} else {
			return $full_string;
		}
	}
}

if (!function_exists('string_to_url')) {
	function string_to_url($string='') {
		$string = str_replace(' ', '-', $string);
		$string = str_replace('/', '-', $string);
		$string = str_replace("\\", '-', $string);
		$string = str_replace("&", 'and', $string);
		$string = str_replace("'", '', $string);
		return strtolower($string);
	}
}

if (!function_exists('stripTags')) {
	function stripTags($text=NULL, $tags="<b><strong><i><em><u><a>") {
		 // replace php and comments tags so they do not get stripped 
		$text = preg_replace("@<\?@", "#?#", $text);
		$text = preg_replace("@<!--@", "#!--#", $text);
		 // strip tags normally
		$text = strip_tags($text, $tags);
		 // return php and comments tags to their origial form
		$text = preg_replace("@#\?#@", "<?", $text);
		$text = preg_replace("@#!--#@", "<!--", $text);
		 return $text;
	}
}
?>
