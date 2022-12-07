<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>
</div>
<?
if (\Bitrix\Main\Loader::includeModule('iblock'))
{
      //Задаём шаблон.
      $template = "Купить {=this.Name}. Оружейный салон Тульского оружейного завода - оружие.";
      //Исходные данные будем брать из элемента.
      $entity = new Bitrix\Iblock\Template\Entity\Element($arResult['ID']);
      //Не забываем про безопасность.
      $description =  \Bitrix\Main\Text\String::htmlEncode(
              //Вычисляем значение по шаблону.
              Bitrix\Iblock\Template\Engine::process($entity, $template) 
     );
      $APPLICATION->SetPageProperty('description',$description);
}
?>
<div class="center">
	<div>
	
			<div class="news__wrap text clear">
		<?if($arResult['DETAIL_TEXT']){?>
			<?=$arResult['DETAIL_TEXT']?>

		<?}else{?>
			Раздел в стадии наполнения контентом
		<?}?>
			<?foreach($arResult['PROPERTIES']['FILE']['VALUE'] as $key=>$arFile):?>
				<?$file = CFile::GetPath($arFile);?>
		        <div class="brand-gallery">
		            <?foreach ($arResult['BRANDS'] as $keys => $image):
		            	if($arFile == $image['IDFILE'] && !empty($image['ID'])) {
			                $big = CFile::GetPath($image['ID']);
			                $small = CFile::ResizeImageGet($image['ID'], array('width' => 400, 'height' => 400), BX_RESIZE_IMAGE_EXACT)['src'];?>

			                <a href="<?if(strripos($file, 'TOZ')){
			                	echo '/toz-oruzheynyy-salon/toz-produktsiya/';
			                }else{ echo $file;}?>" class="brand-gallery__item show-photo" data-fancybox="gallery" rel="group">
			                    <img src="<?=$big;?>" alt="<?=$arResult['NAME'];?>" title="<?=$arResult['NAME'];?>" >
			                </a>
		            	<? } ?>
		            <?endforeach;?>
					<? if (!empty($file)): ?>
						<a href="<?if(strripos($file, 'TOZ')){
			                	echo '/toz-oruzheynyy-salon/toz-oruzheynyy-salon/';
			                }else{ echo $file;}?>" class="meeting-item__file" target="_blank"><?=$arResult['PROPERTIES']['FILE']['DESCRIPTION'][$key]?></a>
					<? endif;?>
		        </div>
			<? endforeach;?>
		</div>
		<div class="new__information">Более точный ассортимент продукции уточняйте у менеджера Оружейного салона по телефону - <a href="tel:+74872325974">+7 (4872) 32-59-74</a></div>
	</div>
    