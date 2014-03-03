<?php
/**
*
* application [English]
*
* @package language
* @copyright (c) Jim http://beta-garden.com 2009
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'LOGIN_APPLICATION_FORM'		=> 'You need to login before you can send out an application.',
	'APPLICATION_SUBJECT'			=> 'Application from %s',
	'APPLICATION_MESSAGE'			=> 'A new user has signed up by the application form, called [b] %1$s[/b].<br /><br />[b]Real name[/b]: %2$s<br />[b]E-mail address[/b]: %3$s<br />[b]Appling for[/b]: %4$s<br /><br />[b]Why would we choose him/her?[/b]<br /> %5$s',
	'APPLICATION_SEND'				=> 'Your application has been sent to the administrators of this board. They’ll decide whether your application is good enough and get back to you in the coming days.',
	'APPLICATION_PAGETITLE'			=> 'Application form',
	
	'APPLICATION_WELCOME_MESSAGE'	=> 'Welcome at this application form. Since we are a still growing community, we wanted to apply new members to a team position, if you feel that you’re the right person, then please fill out the form below and we might get back to you and ask you for conversion regarding this. Good luck!',
	'APPLICATION_REALNAME'			=> 'Real name',
	'APPLICATION_EMAIL'				=> 'E-mail address',
	'APPLICATION_POSITION'			=> 'Position you would like to have',
	'APPLICATION_TEAM1'				=> '#swag',
	'APPLICATION_TEAM2'				=> '#yolo',
	'APPLICATION_TEAM3'				=> '#why',
	'APPLICATION_WHY'				=> 'Why should we choose you for this position?',
));

?>