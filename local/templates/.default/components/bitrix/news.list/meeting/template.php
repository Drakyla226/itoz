<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->setFrameMode(true);?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<div class="meeting-item">
		<div class="meeting-item__title"><?=$arItem['NAME']?></div>
		<div class="meeting-item__content">
		<? if (!isset($arItem['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']['ID'])): ?>
			<?foreach($arItem['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE'] as $arFile):?>
				<a href="<?=$arFile['SRC']?>" class="meeting-item__file" target="_blank"><?=$arFile['DESCRIPTION']?></a>
			<? endforeach;?>
		<? else: ?>
			<? $arFile = $arItem['DISPLAY_PROPERTIES']['FILE']['FILE_VALUE']; ?>
			<a href="<?=$arFile['SRC']?>" class="meeting-item__file" target="_blank"><?=$arFile['DESCRIPTION']?></a>
		<? endif; ?>
		</div>
	</div>
<? endforeach;?>