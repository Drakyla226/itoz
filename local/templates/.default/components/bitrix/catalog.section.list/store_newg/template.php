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
}
?>

<div class="products-category">
	<div class="products-category__cover clear">
		<?foreach ($arResult['SECTIONS'] as $key => $arSection) {
			$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
			$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
		?>
			<div class="products-category__item" id="<?=$this->GetEditAreaId($arSection['ID']); ?>">
                    <a href="<?=$arSection['SECTION_PAGE_URL'];?>" class="products-category__wrapper">
                        <div class="products-category__name _store"> <?=$arSection['NAME'];?></div>
                        <div class="products-category__photo">
                        	<?
						if($key==0){
							$img = CFile::ResizeImageGet($arSection['DETAIL_PICTURE'], array('width' => 1200, 'height' => 328), BX_RESIZE_IMAGE_EXACT)['src'];
							?><img class="mobile_img" src="<?=CFile::ResizeImageGet($arSection['DETAIL_PICTURE'], array('width' => 624, 'height' => 328), BX_RESIZE_IMAGE_EXACT)['src']; ?>" alt="<?=$arSection['NAME'];?>"><?
						}else{
							$img = CFile::ResizeImageGet($arSection['PICTURE'], array('width' => 624, 'height' => 328), BX_RESIZE_IMAGE_EXACT)['src'];
						}?>
                        	<? if (isset($img)): ?>
							<img src="<?=$img; ?>" alt="<?=$arSection['NAME'];?>">
						<? else: ?>
							<img src="/upload/images/no_photo.jpg" style="height: 328px;" alt="Нет фото">
						<? endif; ?>
                                                       
                        </div>
                    </a>
                </div>
		<?}?>
	</div>	
</div>