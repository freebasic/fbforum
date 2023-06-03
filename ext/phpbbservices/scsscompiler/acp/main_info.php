<?php
/**
 *
 * SCSS Compiler. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, MarkDHamill, https://www.phpbbservices.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbservices\scsscompiler\acp;

/**
 * SCSS Compiler ACP module info.
 */
class main_info
{
	public function module()
	{
		return [
			'filename'	=> '\phpbbservices\scsscompiler\acp\main_module',
			'title'		=> 'ACP_SCSSCOMPILER_TITLE',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_SCSSCOMPILER',
					'auth'	=> 'ext_phpbbservices/scsscompiler && acl_a_board',
					'cat'	=> ['ACP_SCSSCOMPILER_TITLE'],
				],
			],
		];
	}
}
