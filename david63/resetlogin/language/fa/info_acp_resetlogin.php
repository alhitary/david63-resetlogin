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
	'ACP_USER_UTILS'		=> 'ابزار کاربر',
	
	'LOG_USER_LOGIN_RESET'	=> '<strong>تازه کردن %1$s بار تلاش ناموفق برای</strong><br />» %2$s',

	'NO_LOGINS'				=> 'کاربر مورد نظر هیچ تلاش ناموفقی برای تازه کردن ندارد.',
	'NO_USER'				=> 'کاربر مورد نظر در پایگاه داده وجود ندارد',
	'NO_USER_SPECIFIED'		=> 'کاربری انتخاب نشده',

	'RESET_LOGIN'			=> 'تازه کردن اقدام به ورود',
	'RESET_LOGIN_EXPLAIN'	=> 'اینجا شما میتوانید تلاش های ناموفق کاربران را تازه کنید.',

	'USER_EXPLAIN'			=> 'کاربر مورد نظر را انتخاب کنید',
	'USER_LOGIN_RESET'		=> '%1$s بار تلاش ناموفق ورود به درستی برای کاربر <strong>%2$s</strong> تازه شد.',
));
