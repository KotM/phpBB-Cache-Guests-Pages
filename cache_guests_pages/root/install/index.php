<?php
/**
 *
 * @author Kot Matroskin (Vitaly Filatenko) kot@hacktest.net
 * @version $Id$
 * @copyright (c) 2013 Vitaly Filatenko
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */

/**
 * @ignore
 */
define('UMIL_AUTO', true);
define('IN_PHPBB', true);
define('IN_INSTALL', true);
$phpbb_root_path = (defined('PHPBB_ROOT_PATH')) ? PHPBB_ROOT_PATH : '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);

include($phpbb_root_path . 'common.' . $phpEx);
$user->session_begin();
$auth->acl($user->data);
$user->setup();


if (!file_exists($phpbb_root_path . 'umil/umil_auto.' . $phpEx))
{
	trigger_error('Please download the latest UMIL (Unified MOD Install Library) from: <a href="http://www.phpbb.com/mods/umil/">phpBB.com/mods/umil</a>', E_USER_ERROR);
}

// The name of the mod to be displayed during installation.
$mod_name = 'Cache Guests Pages';

/*
* The name of the config variable which will hold the currently installed version
* UMIL will handle checking, setting, and updating the version itself.
*/
$version_config_name = 'cgp_version';


// The language file which will be included when installing
$language_file = 'mods/info_acp_cgp';


/*
* Optionally we may specify our own logo image to show in the upper corner instead of the default logo.
* $phpbb_root_path will get prepended to the path specified
* Image height should be 50px to prevent cut-off or stretching.
*/
//$logo_img = 'styles/prosilver/imageset/site_logo.gif';

/*
* The array of versions and actions within each.
* You do not need to order it a specific way (it will be sorted automatically), however, you must enter every version, even if no actions are done for it.
*
* You must use correct version numbering.  Unless you know exactly what you can use, only use X.X.X (replacing X with an integer).
* The version numbering must otherwise be compatible with the version_compare function - http://php.net/manual/en/function.version-compare.php
*/
$versions = array(
	// Version 0.2.0
	'0.2.0' => array(

			'config_add' => array(
				array('cgp_enabled', '1', 0),
				array('cgp_ttl', '720', 0),
				),

			// First, lets add a new category named CGP_CAT_NAME to ACP_CAT_DOT_MODS
			'module_add' => array(
				array('acp', 'ACP_CAT_DOT_MODS', 'CGP_CAT_NAME'),

				// next let's add our module
				array('acp', 'CGP_CAT_NAME',
					array(
						'module_basename'	=> 'cgp', 
						'module_auth'		=> 'acl_a_server',
						),
					),
				),
			),

		// Version 0.3.0
		'0.3.0' => array(
			// Nothing changed in this version.
			),
		// Version 0.4.0
		'0.4.0' => array(
			// Nothing changed in this version.
			),
		// Version 0.4.1
		'0.4.1' => array(
			// Nothing changed in this version.
			),
		// Version 1.0.0
		'1.0.0' => array(

			'config_add' => array(
				array('cgp_remove_sid', '1', 0),
				),

			// Purge forum cache for hook enabling
			'cache_purge' => array(),
			),
		// Version 1.1.0
		'1.1.0' => array(

			'config_add' => array(
				array('cgp_force_fcache', '1', 0),
				),
			),
		// Version 1.1.1
		'1.1.1' => array(

			'config_add' => array(
				array('cgp_cache_gc', '7200', 0),
				array('cgp_cache_last_gc', '0', 1),
				),
			),
		// Version 1.1.2
		'1.1.2' => array(
			// Nothing changed in this version.
			),
		); 

// Include the UMIL Auto file, it handles the rest
include($phpbb_root_path . 'umil/umil_auto.' . $phpEx);