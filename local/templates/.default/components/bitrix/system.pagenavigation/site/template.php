<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
if (
	$_GET["PAGEN_" . $arResult["NavNum"]] > 0 &&
	$arResult["NavPageNomer"] != $_GET["PAGEN_" . $arResult["NavNum"]]) {
	CHTTP::SetStatus("404 Not Found");
	define('ERROR_404', 'Y');
	return;
}
if (!$arResult["NavShowAlways"])
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>
<div class="navigation clear">
<?if ($arResult["NavPageNomer"] > 2):?>
	<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>" class="navigation__button _return"></a>
<?elseif ($arResult["NavPageNomer"] == 2):?>
	<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>" class="navigation__button _return"></a>
<?endif?>
<?if ($arResult["nStartPage"] > 1):?>
	<a href="<?=$arResult["sUrlPath"]?>?PAGEN_1=1" class="navigation__number">1</a>
<?endif?>
<?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>
	<?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
		<span class="navigation__number _active"><?=$arResult["nStartPage"]?></span>
	<?elseif($arResult["nStartPage"] == 1):?>
		<a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>" class="navigation__number"><?=$arResult["nStartPage"]?></a>
	<?else:?>
		<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>" class="navigation__number"><?=$arResult["nStartPage"]?></a>
	<?endif?>
	<?$arResult["nStartPage"]++;?>
<?endwhile?>

<?if ($arResult["nEndPage"] < $arResult["NavPageCount"]):?>
	<a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>" class="navigation__number"><?=$arResult["NavPageCount"]?></a>
<?endif?>
<?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?><a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>" class="navigation__button _next">›</a><?endif?>
</div>