<?php
/**
 * Plugin Name: Whatever API
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A brief description of the Plugin.
 * Version: The Plugin's Version Number, e.g.: 1.0
 * Author: Strel & Zeth
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: Very license
 */

//PLUGIN MENU SETUP

// bootstrap.php
// Include Composer Autoload (relative to project root)

// bootstrap.php

require_once "/home/zethh/php/vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(plugin_dir_url( __FILE__ ) . '/classes');
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'zethh',
    'password' => 'X3lmeromeroX',
    'dbname'   => 'whatever_db',
);

function add_to_admin_menu()
{

	add_menu_page('Whatever admin API', 'Whatever', 'manage_options', 'whatever-api-top-level', 'whatever_api_admin', plugin_dir_url( __FILE__ ) . "/images/wow_icon.png", 0);
	add_submenu_page('whatever-api-top-level','Item settings', 'Item settings', 'manage_options', 'whatever-item-settings', 'whatever_item_settings');
}

function whatever_api_admin()
{
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	//parse_wowhead("wow");
	echo '<p>Here is where the form would go if I actually had options.</p>';
	echo '</div>';
}

add_action('admin_menu', 'add_to_admin_menu');
add_action('admin_post_we_get_items', 'whatever_item_settings_get_items');

//PLUGIN FUNCTIONS

function whatever_item_settings_get_items()
{
	if ( !current_user_can( 'manage_options' ) )
   {
      wp_die( 'You are not allowed to be on this page.' );
   }
	echo $_POST['boss-url'] . '<br>' . $_POST['boss-name'];
}

function whatever_item_settings()
{
	$submit = (isset($_POST['suchform'])) ? true : false;
	
	if (empty($_REQUEST['action'])){
		?>
		<div id="wrap">
			<form method="post" name="suchform">
			<input type="hidden" name="action" value="we_get_items" >
			URL for boss<input type="text" name="boss-url"><br>
			Boss name<input type="text" name="boss-name"><br> 
			<input type="submit" name="submit" value="submit">
			</form>
		</div>
		<?php
	}
	else{
		if ($_REQUEST['action'] == 'we_get_items'){
			get_items_for_boss($_POST['boss-url'], $_POST['boss-name']);
		}
	}

}

function such_test($url = "http://eu.battle.net/api/wow/data/item/classes")
{
	$JSON = file_get_contents($url, true);

    $list = json_decode($JSON, true);

    foreach($list['classes'] as $item) {

    	echo $item['name'] . "<br>";

    }
}

/*
$wowdb_filters = array(
	'Back' => '65536',
	'Chest' => '32',
	'Feet' => '256',
	'Finger' => '2048',
	'Hands' => '1024',
	'Head' => '2',
	'Legs' => '128',
	'Neck' => '4',
	'Shoulders' => '8',
	'Trinket' => '4096',
	'Waist' => '64',
	'Wrist' => '512',
	'Main Hand' => '2097152',
	'Off Hand' => '16384',
	'One Hand' => '8192',
	'Ranged' => '32768',
	'Two Hand' => '131072'
	);
	*/
function get_items_for_boss($url, $boss_name)
{
	

	$items = get_items_from_url($url);

	foreach ($items as $item) {

		echo "<a href='http://www.wowhead.com/item=" . $item . "'>item</a><br>";
	}
	echo count($items);
}

function get_items_list_from_url($url)
{
	
	$html = file_get_contents($url);

	libxml_use_internal_errors(true);

	libxml_clear_errors();

	$doc = new DOMDocument();

	$doc->loadHTML($html);

	$links = $doc->getElementsByTagName('a');

	$itemIds = array();

	foreach ($links as $element) {

		$itemId = preg_replace("/(http:..www.wowdb.com.items.)(\d*)(.*)|(.*)/", "$2", $element->getAttribute('href'));

		if ($itemId != ""){

			if (!in_array($itemId, $itemIds)){

				array_push($itemIds, $itemId);

			}
		}
	}

	return $itemIds;
}


function get_items_from_url($url)
{
	$html = file_get_contents($url);

	libxml_use_internal_errors(true);

	libxml_clear_errors();

	$doc = new DOMDocument();

	$doc->loadHTML($html);

	$links = $doc->getElementsByTagName('a');

	$list = $doc->getElementById('tab-drops-item');

	$lists =  $list->getElementsByTagName('ul');

	$listitems = array();

	foreach ($lists as $element) {
		

		array_push($listitems, $element->getElementsByTagName("a"));

	}

	$other_urls = array();

	foreach ($listitems as $item) {
		
		foreach ($item as $element) {
			
			$new_url = $element->getAttribute('href');

			if (!in_array($new_url, $other_urls)){

				array_push($other_urls, $new_url);
			}

		}	

	}

	$itemIds = array();

	foreach ($other_urls as $new_url){

		$new_items = get_items_list_from_url('http://www.wowdb.com' . $new_url);

		foreach ($new_items as $item) {

			if (!in_array($item, $itemIds)){

				array_push($itemIds, $item);

			}

		}
	}

	foreach ($links as $element) {

		$itemId = preg_replace("/(http:..www.wowdb.com.items.)(\d*)(.*)|(.*)/", "$2", $element->getAttribute('href'));

		if ($itemId != ""){

			if (!in_array($itemId, $itemIds)){

				array_push($itemIds, $itemId);

			}
		}
	}

	return $itemIds;
	
}
?>