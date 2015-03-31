<?php
/**
*
* @package Reset User Login Attempts
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
* @Italian translation by systemcrack http://morfeuscommunity.biz
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
	'ACP_USER_UTILS'		=> 'Utilities utente',
	
	'LOG_USER_LOGIN_RESET'	=> '<strong>Resetta %1$s tentativi di login falliti per</strong><br />» %2$s',

	'NO_LOGINS'				=> 'L’utente selezionato non ha nessun tentativo di accesso non riusciti da resettare',
	'NO_USER'				=> 'L’utente selezionato non esiste nel database',
	'NO_USER_SPECIFIED'		=> 'Nessun utente selezionato',

	'RESET_LOGIN'			=> 'Resetta tentativi di login',
	'RESET_LOGIN_EXPLAIN'	=> 'Qui è possibile reimpostare i tentativi falliti di login di un utente',

	'USER_EXPLAIN'			=> 'Selezionare l’utente desiderato',
	'USER_LOGIN_RESET'		=> 'Resettati con successo %1$s tentativi di login falliti per <strong>%2$s</strong>.',
));
