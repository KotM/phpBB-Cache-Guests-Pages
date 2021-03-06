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

	'CGP_GENERAL_SETTINGS'		=> 'Основные настройки',

	'CGP_ENABLED'				=> 'Включить кэширование',
	'CGP_ENABLED_EXPLAIN'		=> 'Содержимое страниц, открываемых гостями и ботами, будет сохраняться в кэше, и возвращаться из кэша при повторном обращении. Включение этого модуля позволяет значительно уменьшить нагрузку на сервер со стороны гостей и ботов, однако следует учесть, что размер кэша заметно вырастет пропорционально гостевой активности.',
	'CGP_TTL'					=> 'Максимальный срок кэширования (в минутах)',
	'CGP_TTL_EXPLAIN'			=> 'Несмотря на то, что в случае изменения страницы кэш обновляется, рекомендуется ограничивать максимальное время кэширования. Это позволит отображать на страницах актуальную статистическую информацию (количество сообщений, просмотров и так далее). Также следует учесть, что чем больше время кэширования, тем большим будет размер кэша.',
	'CGP_REMOVE_SID'			=> 'Удалять идентификаторы сессий',
	'CGP_REMOVE_SID_EXPLAIN'	=> 'Убирает SID из гостевых URL. Позволяет избежать возможной путаницы с гостевыми сессиями (когда гость получает закэшированную страницу с сохранёнными SID другого посетителя), значительно улучшает возможности HTTP кэширования. Эту настройку рекомендуется отключать <strong>только</strong> в том случае, если вы используете свой собственный механизм сокрытия SID.',
	'CGP_FORCE_FCACHE'			=> 'Использовать файловый кэш',
	'CGP_FORCE_FCACHE_EXPLAIN'	=> 'Принудительное использование файлового кэша для хранения содержимого страниц. Позволяет использовать разные типы кэширования для сайта и для мода.',
	
	'CGP_ADDITIONAL_INFO'		=> 'Дополнительная информация',
	
	'CGP_VERSION'				=> 'Версия мода',

	'CGP_CACHE_SIZE'			=> 'Размер кэша',
	'CGP_CACHE_SIZE_EXPLAIN'	=> 'Информация о состоянии файлового кэша на текущий момент',
	'CGP_CACHE_INFO'			=> 'Файлов в кэше <strong>%s</strong>, общий объём <strong>%s</strong>',
	// localized thousands separator
	'CGP_TH_SEP'				=> ' ',
	'CGP_CACHE_INFO_ERROR'		=> 'Невозможно определить размер кэша. Вы уверены, что используете именно файловый кэш?',
	'CGP_CACHE_TYPE_ERROR'		=> 'В настоящий момент используется "%s" тип кэша. Настоятельно рекомендуется либо включить файловый кэш, либо активировать настройку "Использовать файловый кэш".',

	'LOG_CGP_UPDATED'			=> 'Обновлены настройки Cache guests & bots pages модуля',
	
	// Install
	'CGP_CAT_NAME'				=> 'Кэширование страниц',
	'CGP_MOD_NAME'				=> 'Кэширование страниц для гостей и ботов',
	'CGP_MOD_NAME_EXPLAIN'		=> 'Предоставляет возможность кэширования содержимого страниц, просматриваемых гостями и ботами. <br /><br />
		Рекомендации по дополнительной настройке:
		<ol><li>желательно использовать <strong>файловый кэш</strong> по причине <em>больших объёмов закэшированных данных</em>;</li>
		<li>обязательно отключите возможность <strong>быстрого ответа для гостей</strong>, если какой-то мод её включает <em>(во избежание проблем с капчей)</em>;</li>
		<li>раскомментируйте соответствующие строки в .htaccess, если PHP <strong>не</strong> установлен как модуль Apache <em>(и если нет доступа к HTTP заголовку <strong>If-None-Match</strong>)</em>;</li>
		<li>более эффективных результатов можно добиться используя этот мод совместно с модом <a target="_blank" href="https://www.phpbb.com/community/viewtopic.php?f=70&t=2171266">HTTP Guest Cache</a>.</li></ol>',
	
	));

?>