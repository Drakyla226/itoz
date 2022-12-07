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

<div class="">
	<div class="news__wrap text clear">
		<?foreach ($arResult['SECTIONS'] as $key => $arSection) {
			$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
			$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
		?>
<div class="brand-gallery">

 

<? 
$file = CFile::GetFileArray($arSection["UF_EXSEL"])["SRC"]; 
	if($file) {
?>
	 <a href="<?=$file;?>" class="brand-gallery__item show-photo" data-fancybox="gallery" rel="group">
		
			<? if (isset($arSection['PICTURE']['SRC'])): ?>
				<img src="<?=$arSection['PICTURE']['SRC']?>" alt="<?=$arSection['NAME'];?>">
			<? else: ?>
				<img src="/upload/images/no_photo.jpg" style="height: 170px;" alt="Нет фото">
			<? endif; ?>
	</a>  
	<a href="<?=$file;?>" class="meeting-item__file" target="_blank"><?=$arSection['NAME'];?></a>

<? } else {?>
	 <a href="<?=$arSection['SECTION_PAGE_URL'];?>" class="brand-gallery__item show-photo" data-fancybox="gallery" rel="group">
		<? if (isset($arSection['PICTURE']['SRC'])): ?>
				<img src="<?=$arSection['PICTURE']['SRC']?>" alt="<?=$arSection['NAME'];?>">
			<? else: ?>
				<img src="/upload/images/no_photo.jpg" style="height: 170px;" alt="Нет фото">
			<? endif; ?>
	</a>  
	<a href="<?=$arSection['SECTION_PAGE_URL'];?>" class="meeting-item__file" target="_blank"><?=$arSection['NAME'];?></a>

<? } ?>


</div>
		<?}?>
	</div>	
</div>




