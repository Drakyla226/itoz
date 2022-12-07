<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);?>
<?if ($arResult['ITEMS'][0] != '') :?>
    <div class="products-category">
        <div class="products-category__cover clear">
            <?foreach ($arResult["ITEMS"] as $key => $arItem) {
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], $strSectionEdit);
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
            ?>
                <div class="products-category__item" id="<?=$this->GetEditAreaId($arSection['ID']); ?>">
                    <a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="products-category__wrapper">
                        <div class="products-category__name"><?=$arItem['NAME']?></div>
                        <div class="products-category__photo">
                        <? $img = CFile::ResizeImageGet($arItem['PREVIEW_PICTURE']['ID'], array('width' => 320, 'height' => 120), BX_RESIZE_IMAGE_PROPORTIONAL_ALT  )['src'];?>
                            <img src="<?=$img;?>" alt="<?=$arItem['NAME']?>">
                        </div>
                    </a>
                </div>
            <?}?>
        </div>
    </div>
    <?=$arResult["NAV_STRING"]?>
    <div class="seo-text">
        <?=$arResult['~DESCRIPTION']?>
    </div>
<?else:?>
    <p>Раздел находится в разработке. Приносим свои извинения.</p>
<?endif;?>