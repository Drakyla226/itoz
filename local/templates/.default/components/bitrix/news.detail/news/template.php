<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
<div class="news-page">	
	<div class="news-page__date"><?=$arResult['DISPLAY_ACTIVE_FROM']?></div>
	<div class="news-page__text clear">
		<?=$arResult["DETAIL_TEXT"];?>
	</div>
    <?if ($arResult['PROPERTIES']['GALLERY']['VALUE'] != ''):?>
        <div class="news-gallery">
            <?foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $image):?>
                <?$big = CFile::GetPath($image);?>
                <?$small = CFile::ResizeImageGet($image, array('width' => 400, 'height' => 400), BX_RESIZE_IMAGE_EXACT)['src'];?>
                <a href="<?=$big;?>" class="news-gallery__item show-photo" data-fancybox="gallery" rel="group">
                    <img src="<?=$small;?>" alt="<?=$arResult['NAME'];?>" title="<?=$arResult['NAME'];?>" >
                </a>
            <?endforeach;?>
        </div>
    <?endif;?>
    <a href="/novosti/" class="button _detail-news">Все новости</a>
</div>