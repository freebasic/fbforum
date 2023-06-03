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

class release_1_0_4 extends \phpbb\db\migration\migration
{

	public static function depends_on()
	{
		return ['\phpbbservices\scsscompiler\migrations\install_acp_module'];
	}

	public function revert_data()
	{
		return array(array('custom', array(array($this, 'remove_files'))));
	}

	public function remove_files()
	{

		// Remove the extension's directory and any files inside it.
		global $phpbb_container;

		$filesystem = $phpbb_container->get('filesystem');
		$filepath = $this->phpbb_root_path . 'store/phpbbservices/scsscompiler';
		if ($filesystem->exists($filepath))
		{
			$filesystem->remove($filepath);
		}

	}

}



