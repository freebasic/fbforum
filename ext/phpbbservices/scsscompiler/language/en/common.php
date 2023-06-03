<?php
/**
 *
 * SCSS Compiler. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, MarkDHamill, https://www.phpbbservices.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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

$lang = array_merge($lang, [

	'ACP_SCSSCOMPILER_CANT_FIND_STYLE'			=> 'No styles were found to compile. The database may be corrupt.',
	'ACP_SCSSCOMPILER_CREATE_ERROR'				=> 'Unable to create directories in /store folder. This is likely a file permissions issue. The folder should be publicly writable.',
	'ACP_SCSSCOMPILER_CSS_FILE'					=> 'CSS stylesheet to compile to',
	'ACP_SCSSCOMPILER_EXPLAIN'					=> 'Certain styles must be compiled to look differently. The styling commands are written in a SASS format. Changes are made to .scss files and compiled to .css files. <a href="https://sass-lang.com/">Learn more about SASS.</a> This extension will compile these kinds of styles.
<h2>Editing .scss files</h2>
<p><strong>Make backup copies of the theme folders of the styles you will alter.</strong> Often you can edit the files using a file manager tool in your web host control panel. Otherwise, download your styles’ theme folders, then edit the .scss files with a text editor on your computer. Then upload the changed .scss files to the /styles/<em>&lt;style&gt;</em>/theme folders, overwriting the old files.</p>
<h2>Compiling .scss files</h2>
<p>Installed SASS-formatted styles, if any, are shown below. A master SCSS stylesheet stylesheet.scss is assumed. A compiled stylesheet stylesheet.css is also assumed. Change these if incorrect. Click the checkboxes for the styles you want to compile, then press “Recompile checked styles”. If the file cannot be written to the style’s theme folder, the file will be placed in a /store/phpbbservices/scsscompiler/<em>&lt;style&gt;</em>/theme folder instead. You will be notified if this happens. In this case you should move the file manually into the correct theme folder using FTP or a file manager. If there is a compilation error for a style, the compilation error will show. Fix the error then recompile.</p>
<h2>Viewing the style changes</h2>
<p>Go to the index. If you don’t see the changes, reload the page. If you still don’t see the changes you made, <a href="https://refreshyourcache.com/en/cache/">refresh your browser’s cache</a> then reload the page. <em>Note</em>: on some servers, you may have to flush a CloudFlare or similar cache too.</p>
<h2>Restoring the style changes</h2>
<p>Upload your backup copy of the theme folder to the same theme folder, overwriting any files you changed. You may need to also purge the cache on the main page of the ACP.</p>',
	'ACP_SCSSCOMPILER_INSTALL_REQUIREMENTS'		=> 'Your version of PHP must be &gt; 3.3.0 and &lt; 3.4 to install this extension. In addition the zip extension is required. Please address this issue, then try enabling the extension again.',
	'ACP_SCSSCOMPILER_LAST_MODIFIED'			=> 'stylesheet.css last updated on',
	'ACP_SCSSCOMPILER_MARK'						=> 'Mark/unmark',
	'ACP_SCSSCOMPILER_NEVER'					=> 'Not found or never',
	'ACP_SCSSCOMPILER_NO_SCSS_STYLES'			=> 'No SCSS styles are active',
	'ACP_SCSSCOMPILER_NO_STYLES_TO_COMPILE'		=> 'No styles were selected to compile',
	'ACP_SCSSCOMPILER_OVERRIDE'					=> 'Style overrides other styles',
	'ACP_SCSSCOMPILER_RECOMPILE_CHECKED'		=> 'Recompile checked styles',
	'ACP_SCSSCOMPILER_RECOMPILE_STYLE'			=> 'Recompile style',
	'ACP_SCSSCOMPILER_SCSS_COMPILE_ERROR'		=> 'Can’t compile style “%1$s” due to compilation error(s):<br><br>%2$s',
	'ACP_SCSSCOMPILER_SCSS_FILE'				=> 'Style’s master SCSS stylesheet',
	'ACP_SCSSCOMPILER_SCSS_FILE_DOES_NOT_EXIST'	=> 'Can’t compile style “%1$s” because file %2$s cannot be found.',
	'ACP_SCSSCOMPILER_SETTING_SAVED'			=> 'Selected styles were recompiled successfully but some could not be written to the styles’ theme folders and are in the /store/phpbbservices/scsscompiler folder. They now need to be moved to the correct theme folders using FTP or a file manager.',
	'ACP_SCSSCOMPILER_SETTING_SAVED_THEME'		=> 'Selected styles were recompiled successfully.',
	'ACP_SCSSCOMPILER_STYLE_INFO'				=> 'SCSS-based style',
	'ACP_SCSSCOMPILER_WRITE_ERROR'				=> "Can’t write to path “%s”",

]);
