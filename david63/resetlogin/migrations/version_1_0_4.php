<?php
/**
*
* @package Reset User Login Attempts
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace david63\resetlogin\migrations;

class version_1_0_4 extends \phpbb\db\migration\migration
{
	static public function depends_on()
	{
		return array('david63\resetlogin\migrations\version_1_0_0');
	}

	public function update_data()
	{
		return array(
			array('config.remove', array('version_resetlogin')),
		);
	}
}
