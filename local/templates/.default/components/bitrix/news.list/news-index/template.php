<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="news _main clear">
	<div class="center"><div class="title _main">Новости</div></div>
	<div class="news-list _main _red clear">
		<div class="center">
			<div class="news-slider__wrapper">
				<ul class="news__slider">
					<? 

					$i = count($arResult["ITEMS"]); //16
					$displayCount = (isset($arParams['DISPLAY_COUNT'])) ? $arParams['DISPLAY_COUNT'] : $i; //15
					?>

					<?foreach($arResult["ITEMS"] as $arItem):?>
						<?if (--$i > $displayCount)
								continue; 
						?>
						<li class="news__item _main">
							<div class="news__wrapper _main">
								<div class="news__data"><span><?=FormatDate('d', MakeTimeStamp($arItem['ACTIVE_FROM']));?></span><?=FormatDate('F', MakeTimeStamp($arItem['ACTIVE_FROM']));?></div>
								<div class="news__photo">
									<span>
										<?$img = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width' => 357, 'height' => 289), BX_RESIZE_IMAGE_EXACT)['src'];?>
										<img src="<?=$img?>" alt="<?=$arItem['NAME'];?>">
									</span>
								</div>
								<div class="news-headline"><a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="news-headline__link"><?=$arItem['NAME'];?></a></div>
								<div class="news__text"><?=$arItem['PREVIEW_TEXT'];?></div>
								<div class="news-detail"><a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="news-detail__link">Подробнее</a></div>
							</div>
						</li>
          			<? endforeach;?>
          		</ul>
      		</div>
  		</div>
	</div>
	<div class="center">
		<div class="news-data__list clear">
			<ul class="news-data__wrapper">
				<? $i = count($arResult["ITEMS"]);?>
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?if (--$i > $displayCount)
						continue; 
					?>
					<li class="news-data__item">
						<div class="news-data__center"><span><?=FormatDate('d', MakeTimeStamp($arItem['ACTIVE_FROM']));?></span><span><?=FormatDate('F', MakeTimeStamp($arItem['ACTIVE_FROM']));?></span></div>
					</li>
				<? endforeach;?>	
			</ul>
		</div>
		<div class="news__all"><a href="/novosti/" class="_button"><span class="right-arrow">Смотреть все новости</span></a></div>
	</div>
</div>