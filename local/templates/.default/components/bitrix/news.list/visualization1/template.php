<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);
?>

		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?	/*
		$link = CFile::ResizeImageGet($arItem, array('width' => 800, 'height' => 1000), BX_RESIZE_IMAGE_EXACT)['src'];
			$img = CFile::ResizeImageGet($arItem, array('width' => 364, 'height' => 289), BX_RESIZE_IMAGE_EXACT)['src'];
*/?>

<?foreach($arItem["DISPLAY_PROPERTIES"]["PHOTO"]["FILE_VALUE"] as $arPhoto):?>
   


      			<a href="<?=($arPhoto["SRC"]);?>" data-fancybox-group="group" class="show-photo">
      				<img class="photo" src="<?=($arPhoto["SRC"]);?>" alt="">
      			</a>
     <?endforeach;?>
		<? endforeach;?>