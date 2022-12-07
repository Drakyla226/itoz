<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
// echo "<pre>";
// print_r($arResult["ITEMS"]);
// echo "</pre>";
?>
</div>
<div class="contacts" >
	<div class="center">
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?if ($arItem['IBLOCK_SECTION_ID'] == 3):?>
		<div class="contacts__column"  >
					<div class="contacts__line clear">
				<div class="contacts__title"><?=$arItem['~NAME']?></div>
				<div class="contacts__date"><?=$arItem['~PREVIEW_TEXT']?></div>
			</div>	
		</div>
		<?endif;?>	
		<?endforeach;?>
		<div class="contacts__more clear">
			<button class="contacts-more__button">Смотреть все телефоны</button>
			<div class="contacts-table clear">
				<?foreach($arResult["ITEMS"] as $arItem):?>
				<?if ($arItem['PROPERTIES']['HIDE']['VALUE']):?>
				<!--noindex-->
				<?endif;?>
				<?if ($arItem['IBLOCK_SECTION_ID'] != 3):?>
				<div class="contacts-table__line<?if ($arItem['PREVIEW_PICTURE']['SRC']) {echo ' _whith-pic';}?>">
					<?if ($arItem['PREVIEW_PICTURE']['SRC']):?>
					<img class="contacts-table__photo" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="">
					<div class="text-right">
						<?endif;?>
						<div class="contacts-table__head"><?=$arItem['NAME']?></div>
						<div class="contacts-table__column _left"><span><?=$arItem['~PREVIEW_TEXT']?></span></div>
						<div class="contacts-table__column _right"><?=$arItem['~DETAIL_TEXT']?></div>
						<?if ($arItem['PREVIEW_PICTURE']['SRC']) {?></div><?}?>
					</div>
					<?endif;?>	
					<?if ($arItem['PROPERTIES']['HIDE']['VALUE']):?>
					<!--/noindex-->
					<?endif;?>
					<?endforeach;?>
				</div>
			</div>
				<div id="ymap" class="contacts__map clear">
					<script src="https://api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&lang=ru-RU"></script>
					<script>
					$(document).ready(function(){ 
						ymaps.ready(function () {
							let myMap = new ymaps.Map('ymap', {
								center: [54.20127607, 37.61706950],
								zoom: 15
							}, {
								suppressMapOpenBlock: true,
								searchControlProvider: 'yandex#search'
							});
							myPlacemark = new ymaps.Placemark([54.20127607, 37.61706950], {
								hintContent: 'г. Тула, ул. Советская, 1 А'
							}, {
								iconLayout: 'default#image',
								iconImageHref: '/local/templates/index/img/icons/label.png',
								iconImageSize: [65, 74],
								iconImageOffset: [-32, -74]
							});
							var isMobile = {
								Android: function() {return navigator.userAgent.match(/Android/i);},
								BlackBerry: function() {return navigator.userAgent.match(/BlackBerry/i);},
								iOS: function() {return navigator.userAgent.match(/iPhone|iPad|iPod/i);},
								Opera: function() {return navigator.userAgent.match(/Opera Mini/i);},
								Windows: function() {return navigator.userAgent.match(/IEMobile/i);},
								any: function() {return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());}
							};
							myMap.geoObjects.add(myPlacemark);
							myMap.behaviors.disable('scrollZoom');
							myMap.controls.remove('typeSelector');
							myMap.controls.remove('trafficControl');
							myMap.controls.remove('searchControl');
							myMap.controls.add('zoomControl');
							myMap.controls.remove('geolocationControl');
							myMap.controls.remove('fullscreenControl');
							myMap.controls.remove('rulerControl');
							if(isMobile.any()){
								myMap.behaviors.disable('drag');
							}
						});
					});
					</script>
				</div>
		

	</div></div>
			<div>