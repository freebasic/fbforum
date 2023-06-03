<?php
/**
 *
 * SCSS Compiler. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, MarkDHamill, https://www.phpbbservices.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbservices\scsscompiler\migrations;

class install_acp_module extends \phpbb\db\migration\migration
{
	public static function depends_on()
	{
		return ['\phpbb\db\migration\data\v330\v330'];
	}

	public function update_data()
	{
		return [
			// Install SCSS compiler module in the ACP Style Management group
			['module.add', [
				'acp',
				'ACP_STYLE_MANAGEMENT',
				[
					'module_basename'	=> '\phpbbservices\scsscompiler\acp\main_module',
					'modes'				=> ['settings'],
				],
			]],
		];
	}
}
