<?php
/**
 *
 * SCSS Compiler. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, MarkDHamill, https://www.phpbbservices.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace phpbbservices\scsscompiler;

/**
 * @ignore
 */
class ext extends \phpbb\extension\base
{

	public function is_enableable()
	{
		$config = $this->container->get('config');

		// Only phpBB 3.3 is supported.
		if (
			phpbb_version_compare($config['version'], '3.3.0', '>=') &&
			phpbb_version_compare($config['version'], '3.4.0', '<')
		)
		{
			// Conditions met to install extension
			return true;
		}
		else
		{
			// Import the extension's language file
			$language = $this->container->get('language');
			$language->add_lang('common', 'phpbbservices/scsscompiler');

			// Return generic message indicating not all install requirements were met.
			return [$language->lang('ACP_SCSSCOMPILER_INSTALL_REQUIREMENTS')];
		}
	}

}

