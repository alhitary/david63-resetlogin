<?php
/**
*
* @package Reset User Login Attempts
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	'ACP_USER_UTILS'		=> 'Kullanıcı hizmetleri',
	
	'LOG_USER_LOGIN_RESET'	=> '<strong>%1$s hatalı girişi sıfırla, şu kullanıcının: </strong><br />» %2$s',

	'NO_LOGINS'				=> 'Seçili kullanıcının sıfırlanacak hatalı giriş denemesi yok',
	'NO_USER'				=> 'Seçili kullanıcı veritabanında yok',
	'NO_USER_SPECIFIED'		=> 'Hiç kullanıcı seçilmedi',

	'RESET_LOGIN'			=> 'Giriş denemelerini sıfırla',
	'RESET_LOGIN_EXPLAIN'	=> 'Buradan bir kullanıcının hatalı giriş denemelerini sıfırlayabilirsiniz',

	'USER_EXPLAIN'			=> 'Gerekli kullanıcıyı seçin',
	'USER_LOGIN_RESET'		=> '%1$s hatalı giriş sıfırlandı, şu kullanıcının: <strong>%2$s</strong>.',
));
