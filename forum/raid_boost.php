<?php
/**
* @package application.php
* @copyright (c) JimA http://beta-garden.com 2009
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

define('IN_PHPBB', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : './';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup('mods/application');

// You need to login before being able to send out an application
if ($user->data['user_id'] == ANONYMOUS)
{
    login_box('', $user->lang['LOGIN_APPLICATION_FORM']);
}

include($phpbb_root_path . 'includes/functions_posting.' . $phpEx);

// Let's set the configuration, this is the ID of the forum where the post goes to
$forumid_send = 10;

$submit = (isset($_POST['submit'])) ? true : false;

	if ($submit)
	{

// Setting the variables we need to submit the post to the forum where all the applications come in
$apply_subject  = sprintf($user->lang['APPLICATION_SUBJECT'], $user->data['username']);
$apply_post     = sprintf($user->lang['APPLICATION_MESSAGE'], $user->data['username'], utf8_normalize_nfc(request_var('name', '', true)), $user->data['user_email'], request_var('postion', '', true), utf8_normalize_nfc(request_var('why', '', true)));

// variables to hold the parameters for submit_post
$poll = $uid = $bitfield = $options = ''; 

generate_text_for_storage($apply_post, $uid, $bitfield, $options, true, true, true);

$data = array( 
	'forum_id'		=> $forumid_send,
	'icon_id'		=> false,

	'enable_bbcode'		=> true,
	'enable_smilies'	=> true,
	'enable_urls'		=> true,
	'enable_sig'		=> true,

	'message'		=> $apply_post,
	'message_md5'	=> md5($apply_post),
				
	'bbcode_bitfield'	=> $bitfield,
	'bbcode_uid'		=> $uid,

	'post_edit_locked'	=> 0,
	'topic_title'		=> $apply_subject,
	'notify_set'		=> false,
	'notify'			=> false,
	'post_time' 		=> 0,
	'forum_name'		=> '',
	'enable_indexing'	=> true,
);

// Sending the post to the forum set in configuration above
submit_post('post', $apply_subject, '', POST_NORMAL, $poll, $data);

$message = $user->lang['APPLICATION_SEND'];
$message = $message . '<br /><br />' . sprintf($user->lang['RETURN_INDEX'], '<a href="' . append_sid("{$phpbb_root_path}index.$phpEx") . '">', '</a>');
trigger_error($message);
}

page_header($user->lang['APPLICATION_PAGETITLE']);

$template->assign_vars(array(
	'PROCESS_APPFORM'	=> append_sid("{$phpbb_root_path}application.$phpEx"),

	));
	
$template->set_filenames(array(
    'body' => 'appform_body.html',
));

page_footer();

?>