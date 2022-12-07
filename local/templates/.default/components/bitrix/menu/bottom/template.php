<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
	<ul class="footer-menu__list">
		<?foreach($arResult as $arItem):?>
			<li><a class="<?if($arItem["SELECTED"]):?> _active<?endif?>" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
		<?endforeach?>
	</ul>
<?endif?>