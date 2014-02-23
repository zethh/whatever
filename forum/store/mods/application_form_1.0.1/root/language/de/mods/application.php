<?php
/**
*
* application [German]
*
* @package language (c) lugsciath
* @copyright (c) JimA http://beta-garden.com 2009
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
   'LOGIN_APPLICATION_FORM'      => 'Du musst dich vorher einloggen bevor du deinen Antrag absenden kannst.',
   'APPLICATION_SUBJECT'         => 'Antragsformular von %s',
   'APPLICATION_MESSAGE'         => 'Ein neuer User sandte einen Antrag ab, genannt [b] %1$s[/b].<br /><br />[b]Wirklicher Name[/b]: %2$s<br />[b]E-mail Adresse[/b]: %3$s<br />[b]Antrag bezug [/b]: %4$s<br /><br />[b]Warum sollten wir dich nehmen?[/b]<br /> %5$s',
   'APPLICATION_SEND'            => 'Dein Antragsformular wurde zu einem Administrators dieses Bords gesendet. Er wird entscheiden ob deinem Antrag stattgegeben wird und wird sich mit dir in den kommenden Tagen in Verbindung setzen.',
   'APPLICATION_PAGETITLE'         => 'Antragsformular',
   
   'APPLICATION_WELCOME_MESSAGE'   => 'Willkommen beim Antragsformular. Seitdem wir eine wachsende Gemeinschaft sind, suchen wir neue Mitglieder. Wenn du dich bewerben willst, dann schreibe deine Angaben in die Felder des untenstehenden Antrags und wir setzen uns mit dir in Verbindung.',
   'APPLICATION_REALNAME'         => 'Wirklicher Vor- und Zuname',
   'APPLICATION_EMAIL'            => 'E-mail Adresse',
   'APPLICATION_POSITION'         => 'Welche Position möchtest du?',
   'APPLICATION_TEAM1'            => 'Team 1',
   'APPLICATION_TEAM2'            => 'Team 2',
   'APPLICATION_TEAM3'            => 'Team 3',
   'APPLICATION_WHY'            => 'Weshalb sollten wir dich nehmen?',

));

?>