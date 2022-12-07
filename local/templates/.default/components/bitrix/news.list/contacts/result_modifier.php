<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
use Bitix\Main\Loader;
if (CModule::IncludeModule("iblock")) {
    $bxElement = CIBlockElement::GetList(
        Array("SORT" => "ASC"),//arSort
        Array("IBLOCK_ID" => '19', "ACTIVE" => "Y"),//arFilter
        false,//arGroupBy
        false,//arNavStartParams
        Array("ID", "IBLOCK_ID", "CODE", "DETAIL_PAGE_URL", "DETAIL_PICTURE", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT", "NAME", "PROPERTY_HIDE")//arSelect

    );
    while ($arElement = $bxElement->Fetch())//Перебераем массив элементов
    {
        $arResult['RUKOVODSTVO'][$arElement['ID']] = $arElement;//Создаем массив элементов
        $arResult['RUKOVODSTVO'][$arElement['ID']]['PREVIEW_PICTURE'] = CFile::GetFileArray($arElement['PREVIEW_PICTURE']);
    }
}
?>
