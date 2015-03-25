<?php
/**
*
* @package Reset User Login Attempts
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* Croatian translation by Ančica Sečan (http://ancica.sunceko.net)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
'ACP_USER_UTILS'=>'Resetiranje neuspjelih pokušaja prijavljivanja korisnika/ca',
'LOG_USER_LOGIN_RESET'=>'<strong>Resetirano %1$s neuspjelih pokušaja prijavljivanja na forum korisnika/ce</strong><br />» %2$s',
'NO_LOGINS'=>'Korisnik/ca nema neuspjelih pokušaja prijavljivanja na forum [(a) koje bi (ti) mogao/la resetirati].',
'NO_USER'=>'Izabrano korisničko ime ne postoji u bazi podataka.',
'NO_USER_SPECIFIED'=>'Nije izabrano niti jedno korisničko ime.',
'RESET_LOGIN'=>'Resetiranje neuspjelih pokušaja prijavljivanja',
'RESET_LOGIN_EXPLAIN'=>'Ovdje možeš resetirati neuspjele pokušaje prijavljivanja korisnika/ca na forum.',
'USER_EXPLAIN'=>'Izaberi korisničko ime korisnika/ce čije neuspjele pokušaje prijavljivanja na forum želiš resetirati.',
'USER_LOGIN_RESET'=>'Resetirano je %1$s neuspjelih pokušaja prijavljivanja na forum korisnika/ce <strong>%2$s</strong>.',
));
