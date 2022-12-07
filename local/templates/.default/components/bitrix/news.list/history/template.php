<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
</div>
<div class="history clear">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?if ($arItem['PREVIEW_PICTURE'] != ''):?>
			<div class="history__photo clear" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC'];?>)"></div>
		<?endif;;?>
		<div class="center">
		    <div class="history__text text clear">
		        <h3><?=$arItem['NAME'];?></h3>
		        <p><?=$arItem['PREVIEW_TEXT'];?></p>
		    </div>
		</div>
	<? endforeach;?>
</div>
<div>

				
