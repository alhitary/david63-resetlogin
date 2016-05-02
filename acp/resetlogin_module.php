<?php
/**
*
* @package Reset User Login Attempts
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\resetlogin\acp;

class resetlogin_module
{
	public $u_action;

	function main($id, $mode)
	{
		global $phpbb_container, $user;

		$this->tpl_name		= 'reset_login';
		$this->page_title	= $user->lang('RESET_LOGIN');

		// Get an instance of the admin controller
		$admin_controller = $phpbb_container->get('david63.resetlogin.admin.controller');

		$admin_controller->display_output();
	}
}
