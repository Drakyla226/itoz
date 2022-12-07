<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

if($GLOBALS['APPLICATION']->GetCurPage(false) == SITE_DIR) {
	$class = " _main";
	$centerClass = "center clear";
} else {
	$class = " _inside clear";
	$centerClass = "";
};
?>

<div class="products-list<?=$class?>">
	<div class="<?=$centerClass?> products__list">
		<?foreach ($arResult['SECTIONS'] as $key => $arSection) {
			$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
			$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
		?>
			<div class="products-preview" id="<?=$this->GetEditAreaId($arSection['ID']); ?>">
				<a href="<?=$arSection['SECTION_PAGE_URL'];?>" class="products-preview__wrapper">
					<div class="products-preview__photo">

						<? $img = ($arSection !== reset($arResult['SECTIONS'])) ? CFile::ResizeImageGet($arSection['PICTURE'], array('width' => 624, 'height' => 328), BX_RESIZE_IMAGE_EXACT)['src'] : $arSection['PICTURE']['SRC'];?>
						<? if (isset($img)): ?>
							<img src="<?=$img; ?>" alt="<?=$arSection['NAME'];?>">
						<? else: ?>
							<img src="/upload/images/no_photo.jpg" style="height: 328px;" alt="Нет фото">
						<? endif; ?>
					</div>
					<div class="products-preview__name"><span class="right-arrow"><?=$arSection['NAME'];?></span></div>
				</a>
			</div>
		<?}?>
	</div>	
</div>
