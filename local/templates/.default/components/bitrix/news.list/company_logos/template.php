<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<? if (count($arResult["ITEMS"]) > 0) : ?>
	<div class="title__block">набор логотипов ПАО «тульский оружейный завод»</div>
	<div class="logo__wrapper">
	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
        	
        <div class="logo__block_wrapper" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

			<div class="logo__img_wrapper">
				<? 
					if (!empty($arItem['PREVIEW_PICTURE']['SRC'])){
						$file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>364, 'height'=>236),  BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
						$file_big = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width'=>800, 'height'=>600),  BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
						$img_big = $file_big['src'];
						$img = $file['src'];
					}else{ 
						$img='/local/templates/index/img/news__back.jpg';
					}
				?>
				<a href="<?=$img_big?>"  class="logo__preview fb" rel="group"><img src="<?=$img?>" alt=""></a>
			</div>
        	<div class="logo__dowload_block">
				<?
					$cdr= CFile::GetFileArray($arItem["PROPERTIES"]["CDR"]["VALUE"]);
					$cdr_file = $cdr['SRC'];

					$pdf= CFile::GetFileArray($arItem["PROPERTIES"]["PDF"]["VALUE"]);
					$pdf_file = $pdf['SRC'];
					
				?>
        	   <div class="logo__cdr">
					<a href="<?=$cdr_file?>" download title="Скачать CDR">
						<!--img src="/local/templates/index/img/icons/logo_cdr.png" alt="Cкачать CDR"-->
						Скачать CDR
					</a>
				</div>
        	    <div class="logo__pdf">
					<a href="<?=$pdf_file?>" download title="Скачать PDF">
						<!--img src="/local/templates/index/img/icons/logo_pdf.png" alt="Скачать PDF"-->
						Скачать PDF
					</a>
				</div> 
        	</div>
		</div>
    
	<? endforeach;?>
</div>
<div class="title__block">Для размещения логотипа на черном фоне используется выворотка</div>
<div class="logo__wrapper _vivorotka">
	<?include $_SERVER['DOCUMENT_ROOT'].'/local/templates/index/include/vivorotka.php';?>
	<div class="logo__dowload_block">
        	   <div class="logo__cdr">
					<a href="/upload/iblock/9ee/015_TOZ_PETER_vivorotka.cdr" download title="Скачать CDR">
						Скачать CDR
					</a>
				</div>
        	    <div class="logo__pdf">
					<a href="/upload/iblock/255/015_TOZ_PETER_vivorotka.pdf" download title="Скачать PDF">
						Скачать PDF
					</a>
				</div> 
        	</div>
</div>
<div class="title__block">корпоративные цвета</div>
<div class="logo__wrapper _color-company ">
	<?include $_SERVER['DOCUMENT_ROOT'].'/local/templates/index/include/color-company.php';?>
			<div class="logo__dowload_block">
        	   <div class="logo__cdr">
					<a href="/upload/iblock/f0f/016_TOZ_cvet.cdr" download title="Скачать CDR">
						Скачать CDR
					</a>
				</div>
        	</div>
</div>
	<?=$arResult["NAV_STRING"]?>
<? endif;?>
<?/*
global $USER;
if ($USER->IsAdmin()) {
echo "<pre>";
print_r($arResult);
echo "</pre>";
}*/
?>
