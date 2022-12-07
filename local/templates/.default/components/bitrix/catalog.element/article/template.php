<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>
	<?/*<div class="products-page clear">
		<div class="products-page__photo"><img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arResult['NAME']?>"></div>
		<div class="products-page__main clear">
			<div class="products-page__gallery">
				<ul class="products-gallery _silver">
					<?foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $key => $arImage):
						//$link = CFile::ResizeImageGet($arImage, array('width' => 800, 'height' => 800), BX_RESIZE_IMAGE_EXACT)['src'];
						$link = CFile::GetPath($arImage);
						$img = CFile::ResizeImageGet($arImage, array('width' => 225, 'height' => 178), BX_RESIZE_IMAGE_EXACT)['src'];
					?>
						<li><a href="<?=$link?>" data-fancybox-group="group" class="show-photo"><img src="<?=$img?>" alt=""></a></li>
					<?endforeach;?>
				</ul>
			</div>
				<?if($arResult['PROPERTIES']['VIDEO']['VALUE']){?>
				<div class="products-page__video open-video">
					<a class="products-page-video__item open-video" href="<?=$arResult['PROPERTIES']['VIDEO']['VALUE']?>" data-rel="media">
						<? 
						$videoUrl = array_pop(explode('=', $arResult['PROPERTIES']['VIDEO']['VALUE']));
						?>
						<img width="242" height="202" src="https://i.ytimg.com/vi/<?=$videoUrl?>/hqdefault.jpg" alt="<?=$arResult['NAME']?>">
					</a>
				</div>
				<?}?>
			<div class="products-page__info text">
				<h3>Описание</h3>
				<?=$arResult['PREVIEW_TEXT']?>
			</div>
		</div>
	</div>*/?>
</div>


<div class="center" style="<?= (empty($arResult['DETAIL_TEXT']) === true) ? 'height: 0' : ''?>">
	<div>
		<div class="text clear">
		<?if($arResult['DETAIL_TEXT']){?>
			<?=$arResult['DETAIL_TEXT']?>
		<?}else{?>
			Раздел в стадии наполнения контентом
		<?}?>
		</div>
	</div>