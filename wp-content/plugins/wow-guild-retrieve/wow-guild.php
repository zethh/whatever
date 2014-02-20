<?php

wp_enqueue_script('wgrkeenio','/wp-content/plugins/wow-guild-retrieve/js/keen.io.js');

wp_enqueue_script('jquery');

wp_enqueue_script('wgrdatascript','/wp-content/plugins/wow-guild-retrieve/js/jquery.dataTables.min.js',array('jquery'));

wp_enqueue_style('wgrstyle','/wp-content/plugins/wow-guild-retrieve/css/wgr.css');



// Return the base URL for the guild entry on the WoW Armory

function wgr_base_url($guild,$realm,$region) {

	$url = "";

	

	$guild = str_replace(' ','%20',$guild);

	$realm = str_replace(' ','%20',$realm);

		

	$url = "http://" . $region . ".battle.net/api/wow/guild/" . $realm . "/" . $guild . "?fields=members";

		

	return $url;

}



// Add sub page to the Settings Menu

function wgroptions_add_page_fn() {

	add_options_page('WGR Options Page', 'WoW Guild Retrieve', 'administrator', __FILE__, 'wgroptions_page_fn');

}



function register_wgrsettings() {

	register_setting( 'wgr_rank_list', 'wgr_rank_list' );
	
	register_setting( 'wgr_tank_list', 'wgr_tank_list' );
	
	register_setting( 'wgr_healer_list', 'wgr_healer_list' );

	add_settings_section('wgr_main','WGR Settings','section_text_fn', __FILE__);

	add_settings_field('rank_list', 'Rank List', 'ranklist_fn', __FILE__, 'wgr_main');
	
	add_settings_field('tank_list', 'Tank List', 'tanklist_fn', __FILE__, 'wgr_main');
	
	add_settings_field('healer_list', 'Healer List', 'healerlist_fn', __FILE__, 'wgr_main');

}



function ranklist_fn() {

	$options = get_option('wgr_rank_list');

	echo "<input id='plugin_text_string' name='wgr_rank_list[wgr_rank_list]' size='40' type='text' value='{$options['wgr_rank_list']}' />";

}

function tanklist_fn() {

	$options = get_option('wgr_tank_list');

	echo "<input id='plugin_text_string_t' name='wgr_tank_list[wgr_tank_list]' size='40' type='text' value='{$options['wgr_tank_list']}' />";

}

function healerlist_fn() {

	$options = get_option('wgr_healer_list');

	echo "<input id='plugin_text_string_h' name='wgr_healer_list[wgr_healer_list]' size='40' type='text' value='{$options['wgr_healer_list']}' />";

}


function section_text_fn() {

?>

<p>Enter your rank names in the following text box. Remember these two rules:</p>

<ol>

	<li>Ranks are ordered by creation time in-game, and</li>

	<li>Separate each rank by a comma, with <strong>NO SPACE</strong> (e.g., Rank 1,Rank 2,Rank 3,etc.)</li>

<ol>

<?php

}



function wgroptions_page_fn() {

?>

<div class="wrap">

<h2>WoW Guild Retrieve</h2>



<form action="options.php" method="post">

<?php settings_fields('wgr_rank_list'); ?>

<?php settings_fields('wgr_tank_list'); ?>

<?php settings_fields('wgr_healer_list'); ?>

<?php do_settings_sections(__FILE__); ?>

<p class="submit">

	<input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />

</p>

</form>



</div>



<?php

}


// Returns a string race name

function raceText($num,$gen) {

	$racename = '';

	$gendername = '';

	

	switch ($num) {

		case 1:

			$racename = 'Human';

			break;

		case 2:

			$racename = 'Orc';

			break;

		case 3:

			$racename = 'Dwarf';

			break;

		case 4:

			$racename = 'NightElf';

			break;

		case 5:

			$racename = 'Undead';

			break;

		case 6:

			$racename = 'Tauren';

			break;

		case 7:

			$racename = 'Gnome';

			break;

		case 8:

			$racename = 'Troll';

			break;

		case 9:

			$racename = 'Goblin';

			break;

		case 10:

			$racename = 'BloodElf';

			break;

		case 11:

			$racename = 'Draenei';

			break;

		case 22:

			$racename = 'Worgen';

			break;

		case 25:

			$racename = 'Pandaren';

			break;

	}

	

	switch ($gen) {

		case '0':

			$gendername = 'Male';

			break;

		case '1':

			$gendername = 'Female';

			break;

	}

	

	$fullrace = $racename . ' ' . $gendername;

	return $fullrace;

}



// Returns a string class name

function classText($num) {

	$classname = '';

	

	switch ($num) {

		case 1:

			$classname = 'Warrior';

			break;

		case 2:

			$classname = 'Paladin';

			break;

		case 3:

			$classname = 'Hunter';

			break;

		case 4:

			$classname = 'Rogue';

			break;

		case 5:

			$classname = 'Priest';

			break;

		case 6:

			$classname = 'Death Knight';

			break;

		case 7:

			$classname = 'Shaman';

			break;

		case 8:

			$classname = 'Mage';

			break;

		case 9:

			$classname = 'Warlock';

			break;

		case 10:

			$classname = 'Monk';

			break;

		case 11:

			$classname = 'Druid';

			break;

		default:

			$classname = $num;

			break;

	}

	

	return $classname;

}

function roster_sort($a, $b){

	if ($a['character']['class'] == $b['character']['class'])
	{
		if ($a['rank'] == $b['rank'])
		{
			if ($a['character']['name'] == $b['character']['name']) return 0;
			
			return ($a['character']['name'] < $b['character']['name']) ? - 1 : 1;
				
		}
		return ($a['rank'] < $b['rank']) ? -1 : 1;
	}
	return ($a['character']['class'] < $b['character']['class']) ? - 1 : 1;
}

function roster_sort_by_role($a, $b){

	if ($a['character']['spec']['role'] == $b['character']['spec']['role']) return 0;
	return ($a['character']['spec']['role'] > $b['character']['spec']['role']) ? - 1 : 1;
}


function role_table($characters, $title, $count, $role){

	$roleimg = 'role-' . str_replace(' ','',$role) . '.png';

	$content .= "<table class='dataTable'><thead id='header-block'>
	<tr>
		<th><img src='" . WP_PLUGIN_URL . "/wow-guild-retrieve/images/" . $roleimg . "' alt='" . $role . "' width='24' height='24'/></th>
		<th colspan='2' id='header-text'>" . $title . " (" . $count . ")</th>
	</tr></thead>\n";

	$content .= "<tbody>\n";

	$content .= $characters;

	$content .= "</tbody>";

	$content .= "</table>";

	return $content;

}

function wow_guild_retrieve($atts) {

	extract(shortcode_atts(array(

		'guildname' => '',

		'realmname' => '',

		'region' => 'us',

		'sorttype' => '1',

		'sortorder' => 'asc',

		'restrict' => 'false',

		'tablesize' => '10'

	), $atts));

	

	$wgrpluginoptions = get_option('wgr_rank_list');

	$ranklist = $wgrpluginoptions['wgr_rank_list'];

	$rankarray = explode(',', $ranklist);

	$wgrpluginoptions = get_option('wgr_tank_list');
	
	$tanklist = $wgrpluginoptions['wgr_tank_list'];
	
	$tankarray = explode(',', $tanklist);
	
	$wgrpluginoptions = get_option('wgr_healer_list');
	
	$healerlist = $wgrpluginoptions['wgr_healer_list'];
	
	$healerarray = explode(',', $healerlist);

	$widgetid = 'wgrtable' . rand(1,100);

	

	$realmstr = str_replace(' ','-',$realmname);

	

    $baseurl = wgr_base_url($guildname,$realmname,$region);

	

	$rosterJSON = file_get_contents($baseurl, true);

	

	$roster = json_decode($rosterJSON, true);

		

	if (!$roster) {

		$content = "Unable to contact Armory.";

	} else {

		// Set up the header

$jScript = 'jQuery(function($) {
var timer;
function mouseoverActiontooltip(event)
{
$("body").append("<p id=\'tooltip\'>"+ this.rel + "</p>");
$("#tooltip").css("left",(event.pageX + 20) + "px");
$("#tooltip").css("top",(event.pageY - 10) + "px");
}

function mouseoutActiontooltip(event)
{
$("#tooltip").remove();
}

function mousemoveActiontooltip(event)
{
$("#tooltip").css("left",(event.pageX + 20) + "px");
$("#tooltip").css("top",(event.pageY - 10) + "px");
}

function mouseoverActiontooltipImage(event)
{
$("body").append("<p id=\'tooltip\'><img src="+ this.rel + "></img></p>");
$("#tooltip").css("left",(event.pageX + 20) + "px");
$("#tooltip").css("top",(event.pageY - 10) + "px");
}

function mouseoutActiontooltipImage(event)
{
$("#tooltip").remove();
}

function mousemoveActiontooltipImage(event)
{
$("#tooltip").css("left",(event.pageX + 20) + "px");
$("#tooltip").css("top",(event.pageY - 10) + "px");
}

$(\'.tooltip\').bind(\'mouseover\', mouseoverActiontooltip);

$(\'.tooltip\').bind(\'mouseout\', mouseoutActiontooltip);

$(\'.tooltip\').bind(\'mousemove\', mousemoveActiontooltip);

$(\'.tooltipImage\').bind(\'mouseover\', mouseoverActiontooltipImage);

$(\'.tooltipImage\').bind(\'mouseout\', mouseoutActiontooltipImage);

$(\'.tooltipImage\').bind(\'mousemove\', mousemoveActiontooltipImage);

});';

$muchStyle = '<style type="text/css">
#tooltip{
position:absolute;
border:1px solid #ccc;
background:#333;
padding:5px;
color:#fff;
}

#tooltipList ul
{
margin:0px;
padding:0px;
}

#tooltipList li
{
display:block;
margin-bottom:20px;
}
</style>';

		$content ="<script type='text/javascript'>" . $jScript  . "</script>";
		$content .= $muchStyle;

		$content .= "<div id='guild-data-div'>\r\n";

		$content .= "<div id='header-block'>\r\n";

		

		// Process roster data

		$gname = $roster[name];

		$gfaction = $roster[side];

		$glevel = $roster[level];

		$gachieve = $roster[achievementPoints];

		$tankcontent = "";
		
		$dpscontent = "";
		
		$healercontent = "";
		
		
		usort($roster[members], "roster_sort");
				

		// Output the roster table header

		$content .= '<img src="' . WP_PLUGIN_URL . '/wow-guild-retrieve/images/faction-' . $gfaction . '.png" alt="" height="64" width="64"/>';

		$content .= '<div id="header-text">';

		$content .= '<h2>' . $gname . '</h2>';

		$content .= '<h3>' . $gachieve . ' Achievement Points | Level ' . $glevel . '</h3>';

		$content .= '</div>';

		$content .= '<div class="clear"></div>';

		$content .= '</div>';

		$healerContent = 0;

		$dpsCount = 0;

		$tankCount = 0;

		
		// Output a member row
		
		
		//$content .= "<table id='$widgetid' class='dataTable'>\n";

		//$content .= "<thead><tr><th class='ginfo-name'>Name</th><th class='ginfo-role'>Role</th><th class='ginfo-class'>Class</th><th class='ginfo-rank'>Rank</th></tr></thead>\n";

		//$content .= "<tbody>\n";
		
		foreach($roster[members] as $character) {
			
			$cname = $character['character']['name'];

			$gennum = $character['character']['gender'];
			
			$classnum = $character['character']['class'];

			$class = classText($classnum);

			$classimg = 'class-' . str_replace(' ','',$class) . '.png';
			
			$role;
				
			if (in_array($cname, $tankarray)){
			
				$role = 'tank';
				
			}elseif (in_array($cname, $healerarray)){
			
				$role = 'healer';
			
			}else {
			
				$role = 'dps';
			}
				
			//$role = strtolower($character['character']['spec']['role']);
			
			$roleimg = 'role-' . str_replace(' ','',$role) . '.png';								
			
			//Remove unwated ranks and Noeky
			
			$rankid = $character['rank'];
			
			if($rankid == '2' || $rankid == '4' || $rankid == '6'){
				continue;
			}
			

			if ($rankarray[$rankid] == '' || $rankarray[$rankid] == null){

				$rank = "Rank " . $rankid;

			}else{

				$rank = $rankarray[$rankid];

			}

			$ranknum = str_replace('Rank ','',$rankid);

			$rank = substr($rank, 0, 1);			

			$level = $character['character']['level'];


			if (($restrict == 'true' AND $level == '90') OR ($restrict == 'false')){

				if ($whichrow == 0) {

					$rowstyle = "odd";

				} else {

					$rowstyle = "even";

				}
				
				$thumbnail = $character['character']['thumbnail'];
			
				$tooltipURL = "http://" . $region . ".battle.net/static-render/" . $region . "/" . $thumbnail;

				$rowdata = "<tr class='$rowstyle'>
				<td class='ginfo-class'>
				<a class='tooltipImage' rel='" . $tooltipURL . "'>
				<img src='" . WP_PLUGIN_URL . "/wow-guild-retrieve/images/" . $classimg . "' alt='" . $class . "' width='24' height='24' />
				</a></td>
				<td class='ginfo-name'><a href='http://" . $region . ".battle.net/wow/en/character/" . $realmstr . "/" . $cname . "/advanced'>" . $cname . "</a></td>
				<td class='ginfo-rank'>" . $rank . "</td>
				</tr>";			

				switch ($role)
				{
					case 'dps': 
						$dpscontent .= $rowdata;
						$dpsCount++;
					break;
					case 'tank': 
						$tankcontent .= $rowdata;
						$tankCount++;
					break;
					case 'healer': 
						$healercontent .= $rowdata;
						$healerCount++;
					break;
				}

			}

		}

		$content .= role_table($tankcontent, "Tanks", $tankCount, "tank");

		$content .= role_table($healercontent, "Healers", $healerCount, "healer");

		$content .= role_table($dpscontent, "Dps", $dpsCount, "dps");
		
		$content .= "<div class='clear'></div>";

		$content .= "</div>";

	}
	
	

	return $content;

}



add_action('admin_init', 'register_wgrsettings');

add_action('admin_menu', 'wgroptions_add_page_fn');

add_shortcode('wgr','wow_guild_retrieve');

