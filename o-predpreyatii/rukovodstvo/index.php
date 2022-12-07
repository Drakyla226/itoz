<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Руководство предприятия");
$APPLICATION->SetPageProperty("description", "Руководство предприятия");
?>
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
<div class="rukavod__more clear">
				
				<div class="rukavod-table clear _active">
					<?foreach($arResult["RUKOVODSTVO"] as $arItem):?>
					<?if ($arItem['PROPERTY_HIDE_VALUE']){?>
						<!--noindex-->
						<?}?>
						<?if ($arItem['IBLOCK_ID'] == 19):?>

						<div class="rukavod-table__line<?if ($arItem['PREVIEW_PICTURE']['SRC']) {echo ' _whith-pic';}?>">
							<?if ($arItem['PREVIEW_PICTURE']['SRC']) {?>
								<img class="contacts-table__photo" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
								<div class="rukavod__text-right">
									<?}?>
									<div class="rukavod-table__head"><?=$arItem['NAME']?></div>
									<div class="rukavod-table__column _left"><span><?=$arItem['PREVIEW_TEXT']?></span></div>
									<div class="rukavod-table__column _right"><?=$arItem['DETAIL_TEXT']?></div>
									<?if ($arItem['PREVIEW_PICTURE']['SRC']):?>
								</div>
								<?endif;?>
							</div>
							<?endif;?>
							<?if ($arItem['PROPERTIES']['HIDE']['VALUE']):?>
							<!--/noindex-->
							<?endif;?>
							<?endforeach;?>
						</div>
					</div>
				

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>