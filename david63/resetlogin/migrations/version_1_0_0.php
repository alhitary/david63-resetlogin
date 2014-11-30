<?php
/**
*
* @package Reset User Login Attempts
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\resetlogin\migrations;

class version_1_0_0 extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('config.add', array('version_resetlogin', '1.0.0')),

			array('module.add', array('acp', 'ACP_CAT_USERGROUP', 'ACP_USER_UTILS')),
			array('module.add', array(
				'acp', 'ACP_USER_UTILS', array(
					'module_basename'	=> '\david63\resetlogin\acp\resetlogin_module',
					'modes'				=> array('main'),
				),
			)),
		);
	}
}