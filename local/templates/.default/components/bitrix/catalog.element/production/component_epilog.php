<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $templateData */
/** @var @global CMain $APPLICATION */
use Bitrix\Main\Loader;

$APPLICATION->AddHeadString('<link href="http://'.SITE_SERVER_NAME.'/amp/amp_catalog.php?ID='.$arResult['ID'].'" rel="amphtml" />',true);
?>