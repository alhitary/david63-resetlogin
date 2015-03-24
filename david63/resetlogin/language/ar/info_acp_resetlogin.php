<?php
/**
*
* @package Reset User Login Attempts
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Bassel Taha Alhitary - www.alhitary.net
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
	'ACP_USER_UTILS'		=> 'خدمات العضو',
	
	'LOG_USER_LOGIN_RESET'	=> '<strong>إعادة ضبط عدد %1$s محاولات فاشلة لتسجيل دخول العضو</strong><br />» %2$s',

	'NO_LOGINS'				=> 'لا توجد أي محاولات تسجيل دخول فاشلة للعضو المُحدد',
	'NO_USER'				=> 'العضو المُحدد غير موجود في قاعدة البيانات',
	'NO_USER_SPECIFIED'		=> 'لم يتم تحديد العضو',

	'RESET_LOGIN'			=> 'إعادة ضبط محاولات الدخول',
	'RESET_LOGIN_EXPLAIN'	=> 'هنا تستطيع إعادة ضبط ( تصفير ) عدد المحاولات الفاشلة لتسجيل دخول العضو',

	'USER_EXPLAIN'			=> 'تحديد العضو المطلوب ',
	'USER_LOGIN_RESET'		=> 'تم بنجاح إعادة ضبط عدد %1$s محاولات فاشلة لتسجيل دخول العضو <strong>%2$s</strong>.',
));
