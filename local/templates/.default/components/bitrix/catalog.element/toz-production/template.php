<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>
	<div class="products-page clear">
		<div class="products-page__photo">
			 <?$renderImage = CFile::ResizeImageGet($arResult['PREVIEW_PICTURE'], Array("width" => 1000, "height" => 300), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, false); 
      echo '<img title="'.$arSection["NAME"].'" alt="'.$arSection["NAME"].'" src="'.$renderImage["src"].'" />'; ?>


			<!--img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arResult['NAME']?>"-->
		</div>
		<div class="products-page__main clear">
			<?if ($arResult['PROPERTIES']['GALLERY']['VALUE']) {?>
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
			<?}?>
			<? if ($arResult["SECTION"] != 2 && $arResult['PROPERTIES']['VIDEO']['VALUE']): ?>
<!--noindex-->
				<div class="products-page__video open-video">
					<a class="products-page-video__item open-video" href="https://www.youtube.com/watch?v=<?=$arResult['PROPERTIES']['VIDEO']['VALUE']?>" data-rel="media">
						<? 
						$videoUrl = array_pop(explode('=', $arResult['PROPERTIES']['VIDEO']['VALUE']));
						?>
						<img width="242" height="202" src="https://i.ytimg.com/vi/<?=$videoUrl?>/hqdefault.jpg" alt="<?=$arResult['NAME']?>">
					</a>
				</div>
				<!--/noindex-->
			<? endif; ?>
			<div class="products-page__info text">
				<h3>Описание</h3>
				<?=$arResult['PREVIEW_TEXT']?>
			</div>
		</div>
	</div>
</div>
<div class="products-page__options clear">
	<div class="center">
		<div class="products-page__signature text">
			<h3>Характеристики</h3>
			<!-- <p>Модель:</p> -->
		</div>
		<div class="products-tab clear">
			<div class="products-tab__section" >
				<?/*foreach ($arResult['PROPERTIES']['CHARS']['DESCRIPTION'] as $key => $arChar):?>
					<button class="products-tab__button<?= ($key == 0) ? ' _active' : ''?>"><?=$arChar?></button>
				<?endforeach;*/?>
			</div>
			<div class="products-tab__content clear">
				<?foreach ($arResult['PROPERTIES']['CHARS']['DESCRIPTION'] as $key => $arChar):?>
					<div class="products-tab__item<?= ($key == 0) ? ' _active' : ''?>">
						<div class="options-table__wrapper scroll clear">
							<?=$arResult['PROPERTIES']['CHARS']['~VALUE'][$key]['TEXT']?>
						</div>
					</div>
				<?endforeach;?>
			</div>
		</div>
	</div>
</div>
<? if ($arResult['SECTION']['ID'] != 1) 
 echo '<div class="products-button__buy clear"><a href="/dlya-potrebitelya/pokupka-oruzhiya/" class="_button"><span class="right-arrow">Купить оружие</span></a></div>';?>

<div class="center" style="<?= (empty($arResult['DETAIL_TEXT']) === true) ? 'height: 0' : ''?>">
	<div>
		<div class="products-page__tip text clear">
			<?=$arResult['DETAIL_TEXT']?>
		</div>
	</div>