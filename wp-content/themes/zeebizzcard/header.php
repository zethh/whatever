<!DOCTYPE html><!-- HTML 5 -->
<html <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.ico" type="image/x-icon" />
	<title><?php wp_title('|', true, 'right'); ?></title>

<?php wp_head(); ?>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/analyticstracking.php") ?>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/wowhead.php") ?>
</head>

<body <?php body_class(); ?>>
<!--<?php include_once("http://www.we-guild.eu/analyticstracking.php") ?> -->
<?php themezee_wrapper_before(); // hook before #wrapper ?>
<div id="wrapper">
	
	<div id="wrap">
		<div id="contentwrap">
		
			<div id="navi">
				<?php 
				// Get Main Navigation out of Theme Options
					wp_nav_menu(array('theme_location' => 'main_navi', 'container' => false, 'menu_id' => 'nav', 'echo' => true, 'fallback_cb' => 'themezee_default_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 0));
				?>
			</div>
			<div class="clear"></div>