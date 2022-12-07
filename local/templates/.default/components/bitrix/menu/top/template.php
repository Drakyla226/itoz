<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)):?>
<ul class="header-menu__list _first">
<?
$previousLevel = 0;
foreach($arResult as $arItem):
    if ($arItem['DEPTH_LEVEL'] == '1') {
    	$levelClass = ' _first';
    } else {
    	$levelClass = ' _second';
    }
	?>
	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>
	<?if ($arItem["IS_PARENT"]):?>
		<li class="header-menu__item<?=$levelClass?><?if($arItem["SELECTED"]):?> _active<?endif?> _inside">
			<a class="header-menu__link<?=$levelClass?>" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
			<ul class="header-menu__list _second">
	<?else:?>
			<li class="header-menu__item<?=$levelClass?><?if($arItem["SELECTED"]):?> _active<?endif?>">
				<a class="header-menu__link<?=$levelClass?>" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
			</li>
	<?endif?>
	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
<?endforeach?>
<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>
</ul>
<?endif?>