<?
/**
* Модуль "Прокрутка вверх" / Module "Scrolling Up"
* 
* Кнопка, позволяющая вернуться к началу страницы.
* Модуль включает скрипт для публичной части, а также страницу с настройками.
*
* A button that scrolls a webpage to it's beginning.
* The module includes a script for the public area and a settings section.
* 
* @category Модуль для CMS "1С-Битрикс: Управление сайтом" / A module for CMS "Bitrix Site Manager"
* @version 1.0.0
* @copyright 2016 "Эксабит" / "Exabit"
* @link https://marketplace.1c-bitrix.ru/solutions/exabit.scrollup/ Страница решения на Маркетплейсе / Marketplace webpage
* @see http://exabit.pro/solutions/ Сайт разработчика решения / Developer's webpage
* @author "Exabit" <bit@exabit.pro>
*/

namespace Exabit\ScrollUp;

use Bitrix\Main\Config\Option,
    Bitrix\Main\Page\Asset;

class CInit
{
	function appendScriptsToPage()
	{
		$moduleId = dirname(__DIR__);
		$moduleId = str_replace(dirname($moduleId) . '/', '', $moduleId);

		if (!defined(ADMIN_SECTION) && ADMIN_SECTION !== true) {
			$host = ($_SERVER['SERVER_PORT'] == '80' ? $_SERVER['SERVER_NAME'] : $_SERVER['HTTP_HOST']);
			$url = $_SERVER['SCRIPT_URL'] . ($_SERVER['QUERY_STRING'] != '' ? '?' . $_SERVER['QUERY_STRING'] : '');

			$site = SITE_ID;
			$rsSites = \CSite::GetList($by = 'sort', $order = 'asc', array('ACTIVE' => 'Y')) ;
			while ( $t = $rsSites->GetNext()){
				if (Option::get($moduleId, 'default', 'no', $t['LID']) == 'yes') {
					$site = $t['LID'];
					break;
				}
			}

			$flag = self::CheckURL($host, $url, unserialize(Option::get($moduleId, 'include_list', '', $site)), true);
			
			if ($flag) {
				$flag = self::CheckURL($host, $url, unserialize(Option::get($moduleId, 'exclude_list', '', $site)), false);
			}
			
			if ($flag) {	
				$customCss = '/bitrix/css/' . $moduleId . '/custom_' . $site . '.min.css';
				$settingsJs = '/bitrix/js/' . $moduleId . '/settings_' . $site . '.min.js';
				
				Asset::getInstance()->addCss('/bitrix/css/' . $moduleId . '/default.min.css');
				if (file_exists($_SERVER['DOCUMENT_ROOT'] . $customCss))
					Asset::getInstance()->addCss($customCss);
				if (file_exists($_SERVER['DOCUMENT_ROOT'] . $settingsJs))
					Asset::getInstance()->addJs($settingsJs);
				Asset::getInstance()->addJs('/bitrix/js/' . $moduleId . '/script.min.js');
			}
		}	
	}	

	function CheckURL($host, $url, $list, $flag)
	{
		if (is_array($list) && count($list) > 1) {
			$flag = !$flag;
			foreach ($list as $i => $line) {
				if ($line == '') continue;
				$line = '/^' . preg_replace(array('/^(\/.*)/', '/(.*https?:\/\/)/', '/([\-\/+\?.()$])/', '/[*]/'), array($host . '$1', '', '\\\\$1', '.*'), $line) . '$/';
				if (preg_match($line, $host . $url)) {
					$flag = !$flag;
					break;
				}
			}
		} else {
			$flag = true;
		}
		return $flag;
	}
}