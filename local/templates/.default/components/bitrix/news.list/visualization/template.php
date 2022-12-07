<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>
<div class="visualization clear">
  <div class="visualization__wrapper">
    <ul class="visualization__list _white">
		<?foreach($arResult['ITEMS'][0]['PROPERTIES']['GALLERY']['VALUE'] as $arItem):
			$link = CFile::ResizeImageGet($arItem, array('width' => 800, 'height' => 1000), BX_RESIZE_IMAGE_EXACT)['src'];
			$img = CFile::ResizeImageGet($arItem, array('width' => 364, 'height' => 289), BX_RESIZE_IMAGE_EXACT)['src'];
		?>
      		<li class="visualization__item">
      			<a href="<?=$link?>" data-fancybox-group="group" class="show-photo">
      				<img src="<?=$img?>" alt="">
      			</a>
      		</li>
		<? endforeach;?>
    </ul>
  </div>
</div>