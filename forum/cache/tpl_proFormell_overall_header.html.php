<?php if (!defined('IN_PHPBB')) exit; ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo (isset($this->_rootref['S_CONTENT_DIRECTION'])) ? $this->_rootref['S_CONTENT_DIRECTION'] : ''; ?>" lang="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>" xml:lang="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>">
<head>
<link href="https://www.we-guild.eu/forum/styles/prosilver/theme/app.css" rel="stylesheet" type="text/css" />
<meta http-equiv="content-type" content="text/html; charset=<?php echo (isset($this->_rootref['S_CONTENT_ENCODING'])) ? $this->_rootref['S_CONTENT_ENCODING'] : ''; ?>" />
<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-language" content="<?php echo (isset($this->_rootref['S_USER_LANG'])) ? $this->_rootref['S_USER_LANG'] : ''; ?>" />
<meta http-equiv="imagetoolbar" content="no" />
<meta name="resource-type" content="document" />
<meta name="distribution" content="global" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<?php echo (isset($this->_rootref['META'])) ? $this->_rootref['META'] : ''; ?>

<title><?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?> &bull; <?php if ($this->_rootref['S_IN_MCP']) {  echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?> &bull; <?php } else if ($this->_rootref['S_IN_UCP']) {  echo ((isset($this->_rootref['L_UCP'])) ? $this->_rootref['L_UCP'] : ((isset($user->lang['UCP'])) ? $user->lang['UCP'] : '{ UCP }')); ?> &bull; <?php } echo (isset($this->_rootref['PAGE_TITLE'])) ? $this->_rootref['PAGE_TITLE'] : ''; ?></title>

<?php if ($this->_rootref['S_ENABLE_FEEDS']) {  if ($this->_rootref['S_ENABLE_FEEDS_OVERALL']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo (isset($this->_rootref['SITENAME'])) ? $this->_rootref['SITENAME'] : ''; ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_NEWS']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_FEED_NEWS'])) ? $this->_rootref['L_FEED_NEWS'] : ((isset($user->lang['FEED_NEWS'])) ? $user->lang['FEED_NEWS'] : '{ FEED_NEWS }')); ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?mode=news" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_FORUMS']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_ALL_FORUMS'])) ? $this->_rootref['L_ALL_FORUMS'] : ((isset($user->lang['ALL_FORUMS'])) ? $user->lang['ALL_FORUMS'] : '{ ALL_FORUMS }')); ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?mode=forums" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_TOPICS']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_FEED_TOPICS_NEW'])) ? $this->_rootref['L_FEED_TOPICS_NEW'] : ((isset($user->lang['FEED_TOPICS_NEW'])) ? $user->lang['FEED_TOPICS_NEW'] : '{ FEED_TOPICS_NEW }')); ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?mode=topics" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_TOPICS_ACTIVE']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_FEED_TOPICS_ACTIVE'])) ? $this->_rootref['L_FEED_TOPICS_ACTIVE'] : ((isset($user->lang['FEED_TOPICS_ACTIVE'])) ? $user->lang['FEED_TOPICS_ACTIVE'] : '{ FEED_TOPICS_ACTIVE }')); ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?mode=topics_active" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_FORUM'] && $this->_rootref['S_FORUM_ID']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?> - <?php echo (isset($this->_rootref['FORUM_NAME'])) ? $this->_rootref['FORUM_NAME'] : ''; ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?f=<?php echo (isset($this->_rootref['S_FORUM_ID'])) ? $this->_rootref['S_FORUM_ID'] : ''; ?>" /><?php } if ($this->_rootref['S_ENABLE_FEEDS_TOPIC'] && $this->_rootref['S_TOPIC_ID']) {  ?><link rel="alternate" type="application/atom+xml" title="<?php echo ((isset($this->_rootref['L_FEED'])) ? $this->_rootref['L_FEED'] : ((isset($user->lang['FEED'])) ? $user->lang['FEED'] : '{ FEED }')); ?> - <?php echo ((isset($this->_rootref['L_TOPIC'])) ? $this->_rootref['L_TOPIC'] : ((isset($user->lang['TOPIC'])) ? $user->lang['TOPIC'] : '{ TOPIC }')); ?> - <?php echo (isset($this->_rootref['TOPIC_TITLE'])) ? $this->_rootref['TOPIC_TITLE'] : ''; ?>" href="<?php echo (isset($this->_rootref['U_FEED'])) ? $this->_rootref['U_FEED'] : ''; ?>?f=<?php echo (isset($this->_rootref['S_FORUM_ID'])) ? $this->_rootref['S_FORUM_ID'] : ''; ?>&amp;t=<?php echo (isset($this->_rootref['S_TOPIC_ID'])) ? $this->_rootref['S_TOPIC_ID'] : ''; ?>" /><?php } } ?>


<!--
	phpBB style name: proFormell
	Based on style:   prosilver (this is the default phpBB3 style)
	Inspired by:	  Formell (Joomla Style)
	Original author:  Tom Beddard ( http://www.subBlue.com/ )
	Modified by:  	  Marc Alexander
-->

<script type="text/javascript">
// <![CDATA[
	var jump_page = '<?php echo ((isset($this->_rootref['LA_JUMP_PAGE'])) ? $this->_rootref['LA_JUMP_PAGE'] : ((isset($this->_rootref['L_JUMP_PAGE'])) ? addslashes($this->_rootref['L_JUMP_PAGE']) : ((isset($user->lang['JUMP_PAGE'])) ? addslashes($user->lang['JUMP_PAGE']) : '{ JUMP_PAGE }'))); ?>:';
	var on_page = '<?php echo (isset($this->_rootref['ON_PAGE'])) ? $this->_rootref['ON_PAGE'] : ''; ?>';
	var per_page = '<?php echo (isset($this->_rootref['PER_PAGE'])) ? $this->_rootref['PER_PAGE'] : ''; ?>';
	var base_url = '<?php echo (isset($this->_rootref['A_BASE_URL'])) ? $this->_rootref['A_BASE_URL'] : ''; ?>';
	var style_cookie = 'phpBBstyle';
	var style_cookie_settings = '<?php echo (isset($this->_rootref['A_COOKIE_SETTINGS'])) ? $this->_rootref['A_COOKIE_SETTINGS'] : ''; ?>';
	var onload_functions = new Array();
	var onunload_functions = new Array();
	var is_ie6 = false;

	/**
	* Find a member
	*/
	function find_username(url)
	{
		popup(url, 760, 570, '_usersearch');
		return false;
	}

	/**
	* New function for handling multiple calls to window.onload and window.unload by pentapenguin
	*/
	window.onload = function()
	{
		for (var i = 0; i < onload_functions.length; i++)
		{
			eval(onload_functions[i]);
		}
	};

	window.onunload = function()
	{
		for (var i = 0; i < onunload_functions.length; i++)
		{
			eval(onunload_functions[i]);
		}
	};

// ]]>
</script>




<!--[if lt IE 7]>
<script type="text/javascript">
// <![CDATA[
var is_ie6 = true;
// ]]>
</script>
<![endif]-->

<?php if ($this->_rootref['U_PRINT_TOPIC']) {  ?>

<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/print.css" rel="stylesheet" type="text/css" media="print" title="printonly" />
<?php } ?>

<link href="<?php echo (isset($this->_rootref['T_STYLESHEET_LINK'])) ? $this->_rootref['T_STYLESHEET_LINK'] : ''; ?>" rel="stylesheet" type="text/css" media="screen, projection" />

<?php if ($this->_rootref['S_CONTENT_DIRECTION'] == ('rtl')) {  ?>

	<link href="<?php echo (isset($this->_rootref['T_THEME_PATH'])) ? $this->_rootref['T_THEME_PATH'] : ''; ?>/bidi.css" rel="stylesheet" type="text/css" media="screen, projection" />
<?php } ?>



<script type="text/javascript" src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/forum_fn.js"></script>
<script src="<?php echo (isset($this->_rootref['T_TEMPLATE_PATH'])) ? $this->_rootref['T_TEMPLATE_PATH'] : ''; ?>/jquery-1.8.2.min.js" type="text/javascript"></script>

<script type="text/javascript">
// <![CDATA[
/**
* New pop-up functions
* based on  http://yensdesign.com/2008/09/how-to-create-a-stunning-and-smooth-popup-using-jquery/
*/

//SETTING UP OUR POPUP
//0 means disabled; 1 means enabled;
var popupStatus = 0;
var openPopup = '';

//loading popup with jQuery magic!
function loadPopup()
{
	//loads popup only if it is disabled
	if(popupStatus==0)
	{
		$('#backgroundPopup').css({'opacity': '0.7'});
		// Now let's make sure we actually see the image
		var scroll = $(window).scrollTop();
		$('#popupPM').animate({marginTop: scroll}, 'fast', function() {
			// Animation complete.
			});
		$('#backgroundPopup').fadeIn('slow');
		$('#popupPM').fadeIn('slow');
		popupStatus = 1;
		openPopup = 'PM';
	}
}

//disabling popup with jQuery magic!
function disablePopup()
{
	//disables popup only if it is enabled
	if(popupStatus==1 && openPopup == 'PM')
	{
		$('#backgroundPopup').fadeOut('slow');
		$('#popupPM').fadeOut('slow');
		popupStatus = 0;
		openPopup = '';
	}
}

//centering popup
function centerPopup()
{
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $('#popupPM').height();
	var popupWidth = $('#popupPM').width();
	//centering
	$('#popupPM').css({
	'position': 'absolute',
	'top': windowHeight/2-popupHeight/2,
	'left': windowWidth/2-popupWidth/2
	});
	//only need force for IE6
	$('#backgroundPopup').css({'height': windowHeight});
}

$(document).ready(function(){
	<?php if ($this->_rootref['S_USER_PM_POPUP'] && $this->_rootref['S_NEW_PM']) {  ?>	
		//centering with css
		centerPopup();
		//load popup
		loadPopup();
	<?php } if ($this->_rootref['S_VIEWTOPIC']) {  ?>

	resize_images();
	<?php } ?>

	
	// IE6 and below PNG fix (not really)
	if(is_ie6)
	{
		replace_png();
	}
	
	//CLOSING POPUP
	//Click the x event!
	$('#popupPMClose').click(function(){
		disablePopup();
	});
	//Click out event!
	$('#backgroundPopup').click(function(){
		disablePopup();
		<?php if ($this->_rootref['S_VIEWTOPIC']) {  ?>

		disableImage();
		<?php } ?>

	});
	//Press Escape event!
	$(document).keypress(function(e){
		if(e.keyCode==27 && popupStatus==1)
		{
			disablePopup();
			<?php if ($this->_rootref['S_VIEWTOPIC']) {  ?>

			disableImage();
			<?php } ?>

		}
	});
	
	<?php if ($this->_rootref['S_VIEWTOPIC']) {  ?>

	// Image popup
	$('img', 'dt.attach-image').click(function(){
		image_load($(this).attr('src'), $(this).attr('alt'));
		centerImage();
	});
	
	$('.content img').click(function(){
		var check = $(this).parent().hasClass('content');
		if(check)
		{
			image_load($(this).attr('src'), $(this).attr('alt'));
			centerImage();
		}
	});
	
	// Closing Image popup
	//Click the x event!
	$('#popupImageClose').click(function(){
		disableImage();
	});
	
	//Click image box event
	$('#popupImage').click(function(){
		disableImage();
	});
	
	//Click image event
	$('#ImagePopup img').click(function(){
		disableImage();
	});
	<?php } ?>


});

/**
* Replaces weird looking PNG files with the respectie GIF file
* Only run this if the browser is IE6 or below
*/
function replace_png()
{
	// Fix Logo
	var str = $('#logo img').attr('src'); 
	$('#logo img').attr('src', str.substring(0, str.length - 3) + 'gif');
	
	// Fix forum icons
	$('dl.icon').each(function() {
		var str = $(this).css('background-image');
		if(str != '')
		{
			$(this).css('background-image', str.substring(0, str.length - 5) + 'gif")');
		}
	});
}

<?php if ($this->_rootref['S_VIEWTOPIC']) {  ?>

/**
* Image resizer
*/
function resize_images()
{
	var hello = $('dl.attachbox dd dl.file dt.attach-image img').innerWidth();
	var maxWidth = $('div.content').innerWidth() - 30;
	
	// resize the attached images
	$('img', 'dt.attach-image').each(function(i){
		// check the width of the image
		if ($(this).width() > maxWidth)
		{
			// calculate new image dimensions
			newWidth = maxWidth;
			newHeight = $(this).height() / ( $(this).width() / maxWidth );
			   
			// set new image dimensions
			$(this).height(newHeight).width(newWidth);
		}
	});
	
	// resize the images that were added via [img] bbcode
	$('img', 'div.content').each(function(i){
		// check the width of the image
		$(this).css('max-width', maxWidth); // fix for IE
		if ($(this).width() > maxWidth)
		{
			// calculate new image dimensions
			newWidth = maxWidth;
			newHeight = $(this).height() / ( $(this).width() / maxWidth );
			   
			// set new image dimensions
			$(this).height(newHeight).width(newWidth);
		}
	});
}

/**
* Image pop-up
*/
function image_load(src, alt)
{
	//loads popup only if it is disabled
	if(popupStatus==0)
	{
		$('#ImagePopup').html('<img id="imgpopup" src="' + src + '" alt="' + alt + '" />');
		var windowWidth = document.documentElement.clientWidth;
		var windowHeight = document.documentElement.clientHeight;
		var maxWidth = windowWidth * 0.85;
		var maxHeight = windowHeight * 0.85;
		$('#popupImage img').css('max-width', maxWidth);
		$('#popupImage img').css('max-height', maxHeight);
		$('#backgroundPopup').css({'opacity': '0.7'});
		// Now let's make sure we actually see the image
		var scroll = $(window).scrollTop();
		$('#popupImage').animate({marginTop: scroll}, 'fast', function() {
			// Animation complete.
			});
		$('#backgroundPopup').fadeIn('slow');
		$('#popupImage').fadeIn('slow');
		popupStatus = 1;
		openPopup = 'Image';
	}
}

//centering popup
function centerImage()
{
	//request data for centering
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	var popupHeight = $('#popupImage').height();
	var popupWidth = $('#popupImage').width();
	var newTop = windowHeight/2-popupHeight/2;
	var newLeft = windowWidth/2-popupWidth/2;
	//centering
	$('#popupImage').css({
	'position': 'absolute',
	'top': newTop,
	'left': newLeft
	});
	
	//only need force for IE6
	$('#backgroundPopup').css({'height': windowHeight});
}

//disabling popup with jQuery magic!
function disableImage()
{
	//disables popup only if it is enabled
	if(popupStatus==1 && openPopup == 'Image')
	{
		$('#backgroundPopup').fadeOut('slow');
		$('#popupImage').fadeOut('slow');
		popupStatus = 0;
		openPopup = '';
	}
}
<?php } ?>


// ]]>
</script>

<script type="text/javascript" src="http://static.wowhead.com/widgets/power.js"></script><script>var wowhead_tooltips = { "colorlinks": true, "iconizelinks": true, "renamelinks": true }</script>

</head>

<body id="phpbb" class="section-<?php echo (isset($this->_rootref['SCRIPT_NAME'])) ? $this->_rootref['SCRIPT_NAME'] : ''; ?> <?php echo (isset($this->_rootref['S_CONTENT_DIRECTION'])) ? $this->_rootref['S_CONTENT_DIRECTION'] : ''; ?>">
<!--- box border START -->
<div id="box">
<div class="top-left"></div><div class="top-center"></div><div class="top-right"></div>
<div id="left-border">
<div id="right-border">

<!--- box border END -->
<div class="inside">
 <div class="notopgap">
<div id="wrap">
	<a id="top" name="top" accesskey="t"></a>
	<div id="page-header">


		<div class="navbar">
			<div class="inner"><span class="corners-top"><span></span></span>

			<ul class="linklist navlinks">
				<li class="icon-home"><a href="<?php echo (isset($this->_rootref['U_INDEX'])) ? $this->_rootref['U_INDEX'] : ''; ?>" accesskey="h"><?php echo ((isset($this->_rootref['L_INDEX'])) ? $this->_rootref['L_INDEX'] : ((isset($user->lang['INDEX'])) ? $user->lang['INDEX'] : '{ INDEX }')); ?></a> <?php $_navlinks_count = (isset($this->_tpldata['navlinks'])) ? sizeof($this->_tpldata['navlinks']) : 0;if ($_navlinks_count) {for ($_navlinks_i = 0; $_navlinks_i < $_navlinks_count; ++$_navlinks_i){$_navlinks_val = &$this->_tpldata['navlinks'][$_navlinks_i]; ?> <strong>&#8249;</strong> <a href="<?php echo $_navlinks_val['U_VIEW_FORUM']; ?>"><?php echo $_navlinks_val['FORUM_NAME']; ?></a><?php }} ?></li>

				<li class="rightside"><a href="#" onclick="fontsizeup(); return false;" onkeypress="return fontsizeup(event);" class="fontsize" title="<?php echo ((isset($this->_rootref['L_CHANGE_FONT_SIZE'])) ? $this->_rootref['L_CHANGE_FONT_SIZE'] : ((isset($user->lang['CHANGE_FONT_SIZE'])) ? $user->lang['CHANGE_FONT_SIZE'] : '{ CHANGE_FONT_SIZE }')); ?>"><?php echo ((isset($this->_rootref['L_CHANGE_FONT_SIZE'])) ? $this->_rootref['L_CHANGE_FONT_SIZE'] : ((isset($user->lang['CHANGE_FONT_SIZE'])) ? $user->lang['CHANGE_FONT_SIZE'] : '{ CHANGE_FONT_SIZE }')); ?></a></li>

				<?php if ($this->_rootref['U_EMAIL_TOPIC']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_EMAIL_TOPIC'])) ? $this->_rootref['U_EMAIL_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_EMAIL_TOPIC'])) ? $this->_rootref['L_EMAIL_TOPIC'] : ((isset($user->lang['EMAIL_TOPIC'])) ? $user->lang['EMAIL_TOPIC'] : '{ EMAIL_TOPIC }')); ?>" class="sendemail"><?php echo ((isset($this->_rootref['L_EMAIL_TOPIC'])) ? $this->_rootref['L_EMAIL_TOPIC'] : ((isset($user->lang['EMAIL_TOPIC'])) ? $user->lang['EMAIL_TOPIC'] : '{ EMAIL_TOPIC }')); ?></a></li><?php } if ($this->_rootref['U_EMAIL_PM']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_EMAIL_PM'])) ? $this->_rootref['U_EMAIL_PM'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_EMAIL_PM'])) ? $this->_rootref['L_EMAIL_PM'] : ((isset($user->lang['EMAIL_PM'])) ? $user->lang['EMAIL_PM'] : '{ EMAIL_PM }')); ?>" class="sendemail"><?php echo ((isset($this->_rootref['L_EMAIL_PM'])) ? $this->_rootref['L_EMAIL_PM'] : ((isset($user->lang['EMAIL_PM'])) ? $user->lang['EMAIL_PM'] : '{ EMAIL_PM }')); ?></a></li><?php } if ($this->_rootref['U_PRINT_TOPIC']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_PRINT_TOPIC'])) ? $this->_rootref['U_PRINT_TOPIC'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PRINT_TOPIC'])) ? $this->_rootref['L_PRINT_TOPIC'] : ((isset($user->lang['PRINT_TOPIC'])) ? $user->lang['PRINT_TOPIC'] : '{ PRINT_TOPIC }')); ?>" accesskey="p" class="print"><?php echo ((isset($this->_rootref['L_PRINT_TOPIC'])) ? $this->_rootref['L_PRINT_TOPIC'] : ((isset($user->lang['PRINT_TOPIC'])) ? $user->lang['PRINT_TOPIC'] : '{ PRINT_TOPIC }')); ?></a></li><?php } if ($this->_rootref['U_PRINT_PM']) {  ?><li class="rightside"><a href="<?php echo (isset($this->_rootref['U_PRINT_PM'])) ? $this->_rootref['U_PRINT_PM'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PRINT_PM'])) ? $this->_rootref['L_PRINT_PM'] : ((isset($user->lang['PRINT_PM'])) ? $user->lang['PRINT_PM'] : '{ PRINT_PM }')); ?>" accesskey="p" class="print"><?php echo ((isset($this->_rootref['L_PRINT_PM'])) ? $this->_rootref['L_PRINT_PM'] : ((isset($user->lang['PRINT_PM'])) ? $user->lang['PRINT_PM'] : '{ PRINT_PM }')); ?></a></li><?php } ?>

			</ul>

			<?php if (! $this->_rootref['S_IS_BOT'] && $this->_rootref['S_USER_LOGGED_IN']) {  ?>

			<ul class="linklist leftside">
				<li class="icon-ucp">
					<a href="<?php echo (isset($this->_rootref['U_PROFILE'])) ? $this->_rootref['U_PROFILE'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?>" accesskey="e"><?php echo ((isset($this->_rootref['L_PROFILE'])) ? $this->_rootref['L_PROFILE'] : ((isset($user->lang['PROFILE'])) ? $user->lang['PROFILE'] : '{ PROFILE }')); ?></a>
						<?php if ($this->_rootref['S_DISPLAY_PM']) {  ?> (<a href="<?php echo (isset($this->_rootref['U_PRIVATEMSGS'])) ? $this->_rootref['U_PRIVATEMSGS'] : ''; ?>"><?php echo (isset($this->_rootref['PRIVATE_MESSAGE_INFO'])) ? $this->_rootref['PRIVATE_MESSAGE_INFO'] : ''; ?></a>)<?php } if ($this->_rootref['S_DISPLAY_SEARCH']) {  ?> &bull;
					<a href="<?php echo (isset($this->_rootref['U_SEARCH_SELF'])) ? $this->_rootref['U_SEARCH_SELF'] : ''; ?>"><?php echo ((isset($this->_rootref['L_SEARCH_SELF'])) ? $this->_rootref['L_SEARCH_SELF'] : ((isset($user->lang['SEARCH_SELF'])) ? $user->lang['SEARCH_SELF'] : '{ SEARCH_SELF }')); ?></a>
					<?php } if ($this->_rootref['U_RESTORE_PERMISSIONS']) {  ?> &bull;
					<a href="<?php echo (isset($this->_rootref['U_RESTORE_PERMISSIONS'])) ? $this->_rootref['U_RESTORE_PERMISSIONS'] : ''; ?>"><?php echo ((isset($this->_rootref['L_RESTORE_PERMISSIONS'])) ? $this->_rootref['L_RESTORE_PERMISSIONS'] : ((isset($user->lang['RESTORE_PERMISSIONS'])) ? $user->lang['RESTORE_PERMISSIONS'] : '{ RESTORE_PERMISSIONS }')); ?></a>
					<?php } ?>

				</li>
			</ul>
			<?php } ?>


			<ul class="linklist rightside">
				<li class="icon-faq"><a href="<?php echo (isset($this->_rootref['U_FAQ'])) ? $this->_rootref['U_FAQ'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_FAQ_EXPLAIN'])) ? $this->_rootref['L_FAQ_EXPLAIN'] : ((isset($user->lang['FAQ_EXPLAIN'])) ? $user->lang['FAQ_EXPLAIN'] : '{ FAQ_EXPLAIN }')); ?>"><?php echo ((isset($this->_rootref['L_FAQ'])) ? $this->_rootref['L_FAQ'] : ((isset($user->lang['FAQ'])) ? $user->lang['FAQ'] : '{ FAQ }')); ?></a></li>
				
				<?php if (! $this->_rootref['S_IS_BOT']) {  if ($this->_rootref['S_DISPLAY_MEMBERLIST']) {  ?><li class="icon-members"><a href="<?php echo (isset($this->_rootref['U_MEMBERLIST'])) ? $this->_rootref['U_MEMBERLIST'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_MEMBERLIST_EXPLAIN'])) ? $this->_rootref['L_MEMBERLIST_EXPLAIN'] : ((isset($user->lang['MEMBERLIST_EXPLAIN'])) ? $user->lang['MEMBERLIST_EXPLAIN'] : '{ MEMBERLIST_EXPLAIN }')); ?>"><?php echo ((isset($this->_rootref['L_MEMBERLIST'])) ? $this->_rootref['L_MEMBERLIST'] : ((isset($user->lang['MEMBERLIST'])) ? $user->lang['MEMBERLIST'] : '{ MEMBERLIST }')); ?></a></li><?php } if (! $this->_rootref['S_USER_LOGGED_IN'] && $this->_rootref['S_REGISTER_ENABLED'] && ! ( $this->_rootref['S_SHOW_COPPA'] || $this->_rootref['S_REGISTRATION'] )) {  ?><li class="icon-register"><a href="<?php echo (isset($this->_rootref['U_REGISTER'])) ? $this->_rootref['U_REGISTER'] : ''; ?>"><?php echo ((isset($this->_rootref['L_REGISTER'])) ? $this->_rootref['L_REGISTER'] : ((isset($user->lang['REGISTER'])) ? $user->lang['REGISTER'] : '{ REGISTER }')); ?></a></li><?php } ?>

					<li class="icon-logout"><a href="<?php echo (isset($this->_rootref['U_LOGIN_LOGOUT'])) ? $this->_rootref['U_LOGIN_LOGOUT'] : ''; ?>" title="<?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?>" accesskey="x"><?php echo ((isset($this->_rootref['L_LOGIN_LOGOUT'])) ? $this->_rootref['L_LOGIN_LOGOUT'] : ((isset($user->lang['LOGIN_LOGOUT'])) ? $user->lang['LOGIN_LOGOUT'] : '{ LOGIN_LOGOUT }')); ?></a></li>
				<?php } ?>

			</ul>

			<span class="corners-bottom"><span></span></span></div>
		</div>
	</div>

	<a name="start_here"></a>
	<div id="page-body">
		<?php if ($this->_rootref['S_BOARD_DISABLED'] && $this->_rootref['S_USER_LOGGED_IN'] && ( $this->_rootref['U_MCP'] || $this->_rootref['U_ACP'] )) {  ?>

		<div id="information" class="rules">
			<div class="inner"><span class="corners-top"><span></span></span>
				<strong><?php echo ((isset($this->_rootref['L_INFORMATION'])) ? $this->_rootref['L_INFORMATION'] : ((isset($user->lang['INFORMATION'])) ? $user->lang['INFORMATION'] : '{ INFORMATION }')); ?>:</strong> <?php echo ((isset($this->_rootref['L_BOARD_DISABLED'])) ? $this->_rootref['L_BOARD_DISABLED'] : ((isset($user->lang['BOARD_DISABLED'])) ? $user->lang['BOARD_DISABLED'] : '{ BOARD_DISABLED }')); ?>

			<span class="corners-bottom"><span></span></span></div>
		</div>
		<?php } ?>