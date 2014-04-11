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
	'APPLICATION_MESSAGE'			=> '',
	'APPLICATION_SEND'				=> 'Your application has been posted. You may view it in the applications section of the forum. Your application is only visible to yourself and members of the guild. You should have a response within a week, but usually earlier.',
	'APPLICATION_PAGETITLE'			=> 'Application - Whatever',
	'APPLICATION_WELCOME_MESSAGE'	=> '<br/>OPEN - Recruiting for Warlords of Draenor<br /><br />
										We always consider exceptional applications of all classes, even if we are not actively seeking said class.<br /><br />
										<b>Progression Raid Schedule</b><br />
										Monday: 20:00 - 00:00<br />
										Tuesday: Off day*<br />
										Wednesday: 20:00 - 00:00<br />
										Thursday: 20:00 - 00:00<br />
										Friday: Off day<br />
										Saturday: Off day<br />
										Sunday: 20:00 - 00:00<br />
										Invites start at 19:45. It is expected that our raiders are online ready for invites and moving towards the instance to help focus their mindset towards the night ahead.<br />
										* Sometimes added as an additional raid day during initial week or two of progression',
	'APPLICATION_WHY'				=> 'Why should we choose you for this position?',
	'CHARACTER_NAME'					=> 'Character Name:',
	'CLASS'								=> 'Class:',
	'REALM'								=> 'Realm:',
	'QUESTION_1'						=> 'Why do you choose to play your class and are you comfortable with different specializations?',
	'QUESTION_2'						=> 'What do you feel is the main point of improvement for yourself in a raiding environment?',
	'QUESTION_3'						=> 'Why are you choosing to apply to Whatever?',
	'QUESTION_4'						=> 'What do you expect from Whatever?',
	'QUESTION_5'						=> 'Tell us a bit about your history in WoW',
	'QUESTION_6'						=> 'Please outline all alternative characters and provide armory links:',
	'QUESTION_7'						=> 'Which of your alternative characters would you play in Alt Raid content, and why?',
	'QUESTION_8'						=> 'Tell us a little bit about yourself; what drives you inside and outside of Azeroth.',
	'QUESTION_9'						=> 'Finally, how did you hear about us?',
	'QUESTION_10'						=> 'Anything you feel we must know about you that wasn\'t asked?'

));

?>