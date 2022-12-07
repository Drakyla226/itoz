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

use Bitrix\Main\Localization\Loc,
    Bitrix\Main\Application,
    Bitrix\Main\IO\Directory,
    Bitrix\Main\ModuleManager,
    Bitrix\Main\EventManager,
    Bitrix\Main\SystemException; 

Loc::loadMessages(__FILE__);
Class exabit_scrollup extends CModule
{
	var $MODULE_ID = 'exabit.scrollup';
	var $MODULE_VERSION,
		$MODULE_VERSION_DATE,
		$MODULE_NAME,
		$MODULE_DESCRIPTION,
		$PARTNER_NAME,
		$PARTNER_URI;
		
	var $BITRIX_PATH,
	    $MODULE_PATH;

	function __construct()
	{
		$this->BITRIX_PATH = Application::getDocumentRoot() . '/bitrix';
		$this->MODULE_PATH = dirname(__DIR__);

		$arModuleVersion = array();
		include(__DIR__."/version.php");
		$this->MODULE_VERSION = $arModuleVersion['VERSION'];
		$this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];

		$this->MODULE_NAME = Loc::getMessage('EXABIT_SCROLLUP_MODULE_NAME');
		$this->MODULE_DESCRIPTION = Loc::getMessage('EXABIT_SCROLLUP_MODULE_DESC');
		$this->PARTNER_NAME = Loc::getMessage('EXABIT_SCROLLUP_PARTNER_NAME');
		$this->PARTNER_URI = Loc::getMessage('EXABIT_SCROLLUP_PARTNER_URI');
	}

	function installFiles($install = true)
	{
		foreach(array('js', 'css', 'images') as $dir) {
			if ($install) {
				CopyDirFiles($this->MODULE_PATH . '/install/' . $dir, $this->BITRIX_PATH . '/' . $dir . '/' . $this->MODULE_ID, true, true);
			} else {
				Directory::deleteDirectory($this->BITRIX_PATH . '/' . $dir . '/' . $this->MODULE_ID);
			}
		}
	}

	function installEvents($install = true)
	{
		$method = $install ? 'registerEventHandler' : 'unRegisterEventHandler';
		EventManager::getInstance()->$method(
			'main', 'OnBeforeEndBufferContent',	$this->MODULE_ID, 'Exabit\ScrollUp\CInit', 'appendScriptsToPage');
	}
	
	function DoInstall()
	{
		global $APPLICATION;
		
        if (CheckVersion(ModuleManager::getVersion('main'), '14.00.00')) {
			$this->installFiles();
			ModuleManager::registerModule($this->MODULE_ID);
            $this->installEvents();
        } else {
            $APPLICATION->ThrowException(Loc::getMessage($this->MODULE_ID_UP . '_INSTALL_ERROR_VERSION'));
        }

		$APPLICATION->IncludeAdminFile(Loc::getMessage($this->MODULE_ID_UP . '_INSTALL_TITLE'), $this->MODULE_PATH . '/options.php');
	}
	
	function DoUninstall()
	{
		$this->installEvents(false);
		ModuleManager::unRegisterModule($this->MODULE_ID);
		$this->installFiles(false);
	}

}