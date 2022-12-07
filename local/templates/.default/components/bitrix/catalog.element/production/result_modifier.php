<?
use Bitrix\Main\Type\Collection;
use Bitrix\Currency\CurrencyTable;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponentTemplate $this */
/** @var array $arParams */
/** @var array $arResult */

//For AMP
$arElement = CIblockElement::GetById($arResult["ID"])->GetNext();
$arResult['DETAIL_PAGE_URL'] = $arElement['DETAIL_PAGE_URL'];
$cp = $this->__component; 
if (is_object($cp))
$cp->SetResultCacheKeys(array('DETAIL_PAGE_URL'));
?>