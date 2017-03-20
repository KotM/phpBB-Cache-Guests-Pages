<?php
/**
*
* @package cgp
* @version $Id: info_acp_cgp.php, v.1.1.2, 2013/04/05 Kot $
* @copyright (c) 2013 Vitaly Filatenko
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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

$lang = array_merge($lang, array(
	// ACP block

	'CGP_GENERAL_SETTINGS'		=> 'General settings',

	'CGP_ENABLED'				=> 'Enable caching',
	'CGP_ENABLED_EXPLAIN'		=> 'Content of pages displayed to guests and bots will be stored in cache, and obtained from cache on recurrent page visit. Enabling this module will significantly decrease server load caused by guests and bots visits, but please note that cache size will be increased proportional to guests activity.',
	'CGP_TTL'					=> 'Maximum cached time (in minutes)',
	'CGP_TTL_EXPLAIN'			=> 'Although cache is reloaded in case of page modifying, it is recommended to limit maximum time of caching. It will allow displaying actual statistics on topic pages (number of topic\'s views, amount of user\'s messages, etc.). Also keep in mind that size of the cache depends from this value, too.',
	'CGP_REMOVE_SID'			=> 'Remove session identifiers',
	'CGP_REMOVE_SID_EXPLAIN'	=> 'Removes SID from guests and bots URLs. It allows to avoid possible misunderstanding with guests sessions 	(when a guest obtains cached page with specified SIDs from another user), 	significantly improves HTTP caching facilities. It is recommended to disable this setting <strong>only</strong> if you have your own SID removing mechanism.',
	'CGP_FORCE_FCACHE'			=> 'Use file cache',
	'CGP_FORCE_FCACHE_EXPLAIN'	=> 'Force using file cache for storing pages content. Allows to use different cache types for the forum and the mod.',

	'CGP_ADDITIONAL_INFO'		=> 'Additional information',
	
	'CGP_VERSION'				=> 'Mod\'s version',

	'CGP_CACHE_SIZE'			=> 'Cache size',
	'CGP_CACHE_SIZE_EXPLAIN'	=> 'Current cache size',
	'CGP_CACHE_INFO'			=> '<strong>%s</strong> files, <strong>%s</strong>',
	// localized thousands separator
	'CGP_TH_SEP'				=> ',',
	'CGP_CACHE_INFO_ERROR'		=> 'unable to determine cache size. Are you sure that file cache is used now?',
	'CGP_CACHE_TYPE_ERROR'		=> 'Currently used "%s" cache type. It is strongly recommended either to use "file" cache type, or to enable "Use file cache" setting.',

	'LOG_CGP_UPDATED'			=> 'Settings for Cache guests & bots pages mod has been updated',
	
	// Install
	'CGP_CAT_NAME'				=> 'Cache pages',
	'CGP_MOD_NAME'				=> 'Cache guests & bots pages',
	'CGP_MOD_NAME_EXPLAIN'		=> 'Provides ability to cache content of the pages viewed by guests and bots. <br /><br />
		Additional settings recommendations:
		<ol><li>it is recommended to use <strong>file cache type</strong> due to <em>large amount of cached data</em>;</li>
		<li>disable guests\' <strong>quick reply</strong> ability if any mod enables it <em>(to avoid captcha related problems)</em>;</li>
		<li>uncomment corresponding lines in .htaccess, if PHP <strong>does not</strong> installed as Apache module <em>(and if you have no access to HTTP header <strong>If-None-Match</strong>)</em>;</li>
		<li>to increase productivity use this mod together with <a target="_blank" href="https://www.phpbb.com/community/viewtopic.php?f=70&t=2171266">HTTP Guest Cache</a> mod.</li></ol>',
	));

?>