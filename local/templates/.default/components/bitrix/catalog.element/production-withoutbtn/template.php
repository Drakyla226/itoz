<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>
	<div class="products-page clear">
		<div class="products-page__photo">
			 <?$renderImage = CFile::ResizeImageGet($arResult['PREVIEW_PICTURE'], Array("width" => 1000, "height" => 300), BX_RESIZE_IMAGE_PROPORTIONAL_ALT, false); 
      echo '<img title="'.$arSection["NAME"].'" alt="'.$arSection["NAME"].'" src="'.$renderImage["src"].'" />'; ?>


			<?if ($arResult['PROPERTIES']['GALLERY']['VALUE']) {?>
			<div class="products-page__gallery">
				<ul class="products-gallery _silver">
					<?foreach ($arResult['PROPERTIES']['GALLERY']['VALUE'] as $key => $arImage):
						//$link = CFile::ResizeImageGet($arImage, array('width' => 800, 'height' => 800), BX_RESIZE_IMAGE_EXACT)['src'];
						$link = CFile::GetPath($arImage);
						$img = CFile::ResizeImageGet($arImage, array('width' => 225, 'height' => 178), BX_RESIZE_IMAGE_EXACT)['src'];
					?>

							
						<li>
							
							<a href="<?=$link?>" data-fancybox-group="group" class="show-photo"><img src="<?=$img?>" alt=""></a>
						</li>
					<?endforeach;?>
					<?/* if ($arResult["SECTION"] != 2 && $arResult['PROPERTIES']['VIDEO']['VALUE']): ?>
								<li class="products-page__video_new"><a class="products-page-video__item open-video" href="https://www.youtube.com/watch?v=<?=$arResult['PROPERTIES']['VIDEO']['VALUE']?>" data-rel="media">
								<? 
									$videoUrl = array_pop(explode('=', $arResult['PROPERTIES']['VIDEO']['VALUE']));
								?>
								<img width="242" height="202" src="https://i.ytimg.com/vi/<?=$videoUrl?>/hqdefault.jpg" alt="<?=$arResult['NAME']?>">
								</a></li>
								<? endif; */?>
				</ul>
			</div>
			<?}?>
			<?if ($arResult["SECTION"] != 2 && $arResult['PROPERTIES']['VIDEO']['VALUE']): ?>
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
			<? endif;?>
		</div>
		<!--div class="products-page__main clear">
			
			<div class="products-page__info text">
				<h3>Описание</h3>
				<?=$arResult['PREVIEW_TEXT']?>
			</div>
		</div-->


    

<!--<div class="feedback__button _button">
 <span class="right-arrow">Купить оружие</span>
</div>-->

	<div class="nav_knop">
		<div class="knop activ"><h3>Описание</h3></div>
		<div class="knop"><h3>Характеристики</h3></div>
		
	</div>
	<div class="v_knop">
		<div class="blok-V text activ"><?=$arResult['PREVIEW_TEXT']?></div>
		<div class="blok-V ser">
			<div class="products-page__signature text"><p>Модель:</p></div>
			<div class="products-tab clear">
				<div class="products-tab__section" >
					<?foreach ($arResult['PROPERTIES']['CHARS']['DESCRIPTION'] as $key => $arChar):?>
						<button class="products-tab__button<?= ($key == 0) ? ' _active' : ''?>"><?=$arChar?></button>
					<?endforeach;?>
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



	</div>
</div>
<!--div class="products-page__options clear">
	<div class="center">
		<div class="products-page__signature text">
			<h3>Характеристики</h3>
			<p>Модель:</p>
		</div>
		<div class="products-tab clear">
			<div class="products-tab__section" >
				<?foreach ($arResult['PROPERTIES']['CHARS']['DESCRIPTION'] as $key => $arChar):?>
					<button class="products-tab__button<?= ($key == 0) ? ' _active' : ''?>"><?=$arChar?></button>
				<?endforeach;?>
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
</div-->

<?if($arResult['IBLOCK_ID'] == '18')  { ?>
<div class="kupit">
	<div class="center">

<p>Приобрести оружие Вы можете в Оружейном салоне "ТУЛЬСКОЕ ОРУЖИЕ" </p>
<p>г. Тула, ул. Советская 1а</p>
<p>тел. (4872) 32-59-74 e-mail: gunstore@tulatoz.ru</p>
<div class="feedback_overlay">
</div>
<div class="modal__feedback">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"feedback_pokupka",
	Array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"COMPONENT_TEMPLATE" => "feedback_pokupka",
		"EDIT_URL" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "Y",
		"LIST_URL" => "",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "Y",
		"VARIABLE_ALIASES" => array("WEB_FORM_ID"=>"2","RESULT_ID"=>"",),
		"WEB_FORM_ID" => "2"
	)
);?>
</div></div>
</div>
<?}?>

<?/*if($arResult['SECTION']['ID'] == '2')  { ?>
<?}*/?>

<div class="kupit">
	<div class="center">

<p>Приобрести оружие Вы можете в Оружейном салоне  

<?if($arResult['ORIGINAL_PARAMETERS']['SECTION_CODE'] == 'ognestrelnoe-orujie'):?>
<a href="https://tozarms.com/" class="link-tozarms" target="_blank"> "ТУЛЬСКОЕ ОРУЖИЕ" </a>
<?else:?>
"ТУЛЬСКОЕ ОРУЖИЕ"
<?endif;?>
</p>
<p>г. Тула, ул. Советская 1а</p>
<p>тел. (4872) 32-59-74 e-mail: gunstore@tulatoz.ru</p>
<div class="feedback_overlay">
</div>
<div class="modal__feedback">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"feedback_pokupka",
	Array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"COMPONENT_TEMPLATE" => "feedback_pokupka",
		"EDIT_URL" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "Y",
		"LIST_URL" => "",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "Y",
		"VARIABLE_ALIASES" => array("WEB_FORM_ID"=>"2","RESULT_ID"=>"",),
		"WEB_FORM_ID" => "2"
	)
);?>
</div></div>
</div>

<?/* if ($arResult['SECTION']['ID'] != 1) 
echo '<div class="products-button__buy clear"><a href="/dlya-potrebitelya/pokupka-oruzhiya/" class="_button"><span class="right-arrow">Купить оружие</span></a></div-->';*/?>

<div class="center" style="<?= (empty($arResult['DETAIL_TEXT']) === true) ? 'height: 0' : ''?>">
	<div>
		<div class="products-page__tip text clear">
			<?=$arResult['DETAIL_TEXT']?>
		</div>
	</div>