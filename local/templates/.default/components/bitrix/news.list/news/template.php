<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<? if (count($arResult["ITEMS"]) > 0) : ?>
	<div class="news-list _inside clear">
		<div class="news-list__cover clear">
			<?foreach($arResult["ITEMS"] as $key => $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
<a href="<?=$arItem['DETAIL_PAGE_URL']?>"  class="news-list-name__link news-list__item">
				<div id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<? if (!empty($arItem['PREVIEW_PICTURE']['SRC'])){
							$file = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE'], array('width'=>364, 'height'=>236),  BX_RESIZE_IMAGE_PROPORTIONAL_ALT, true);
							$img = $file['src'];
						}else if ($key%2 == 0){ 
							$img='/local/templates/index/img/news__back.jpg';
						}else { 
							$img='';
						}?>
					<div class="news-list__wrapper"	style="background:url(<?=$img?>) no-repeat center;background-size: cover;" />
						<div class="news-list-name"><p><?=TruncateText($arItem['NAME'], 100);?></p></div>
						<div class="news-list__data"><?=$arItem['DISPLAY_ACTIVE_FROM'];?></div>
					</div>
				</div>
</a>
			<? endforeach;?>
		</div>
	</div>
	<?=$arResult["NAV_STRING"]?>
<? endif;?>
