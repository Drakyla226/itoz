<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
  <title><?$APPLICATION->ShowTitle();?> | Tula Arms Plant</title>
  <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <?$APPLICATION->ShowHead();?>
  <?use \Bitrix\Main\Page\Asset;
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery-3.2.1.min.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/slick/slick.min.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/fancybox/mousewheel.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/fancybox/fancybox.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/scroll/scrollbar.min.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/main.js');

  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/styles/normalize.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/js/slick/slick.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/js/scroll/scrollbar.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/js/fancybox/fancybox.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/styles/styles.css");
  ?>
</head>
<body>
  <div id="panel"><?$APPLICATION->ShowPanel();?></div>
  <div class="wrapper">
    <header class="header _main">
      <div class="header__inner _main">
        <div class="center">
          <div class="header-buttons _left">
            <button class="header-buttons__item _search search-open"></button>
          </div>
          <div class="header-menu clear">
            <button class="header-menu__mobile"><span></span><span></span><span></span></button>
            <?$APPLICATION->IncludeComponent("bitrix:menu", "top", Array(
            "ALLOW_MULTI_SELECT" => "N",  // Разрешить несколько активных пунктов одновременно
            "CHILD_MENU_TYPE" => "left", // Тип меню для остальных уровней
            "DELAY" => "N", // Откладывать выполнение шаблона меню
            "MAX_LEVEL" => "2", // Уровень вложенности меню
            "MENU_CACHE_GET_VARS" => array( // Значимые переменные запроса
              0 => "",
              ),
            "MENU_CACHE_TIME" => "3600",  // Время кеширования (сек.)
            "MENU_CACHE_TYPE" => "A", // Тип кеширования
            "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
            "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
            "USE_EXT" => "Y", // Подключать файлы с именами вида .тип_меню.menu_ext.php
            ),
            false
            );?>
        </div>
        <div class="header-contacts">
          <div class="contacts-line _tel _header"><? $APPLICATION->IncludeFile('/local/includes/phone.php', array(), array('MODE' => 'text'))?></div>
          <div class="contacts-line _mail _header"><? $APPLICATION->IncludeFile('/local/includes/email.php', array(), array('MODE' => 'text'))?></div>
        </div>
        <div class="header-buttons _right">
          <a href="http://tulatoz.ru/" class="header-buttons__item _languages">ru</a>
          <button class="header-buttons__item _languages _active">en</button>
        </div>
      </div>
    </div>
  </header>
  <div class="presentation clear">
    <div class="center">
      <div class="presentation-logo clear">
        <div class="presentation-logo__link">
          <div class="presentation-logo__symbol"><img src="/local/templates/index-en/img/logo.png" alt=""></div>
          <div class="presentation-logo__signature">Keeping Traditions. <br>Increasing the quality.</div>
        </div>
      </div>
      <div class="presentation__title clear"><img src="/local/templates/index-en/img/text.png" alt="Tulsky Oruzheiny Zavod"><!--Tulsky<br>Oruzheiny<br>Zavod--></div>
      <!--<div class="presentation__tagline clear">Centuries-old traditions - a guarantee of quality</div>-->
      <div class="presentation-button__products clear"><a href="/produktsiya/" class="_button"><span class="right-arrow">Our production</span></a></div>
    </div>
    <div class="presentation-elements">
     <?/* <div class="presentation-elements__part _01 _big_logo"><img src="local/templates/index-en/img/parallax/logo_big.png" alt=""></div>*/?>
      <div class="presentation-elements__part _02 _gear"><img src="/local/templates/index-en/img/parallax/gear_1.png" alt=""></div>
      <div class="presentation-elements__part _03 _gear _reverse"><img src="/local/templates/index-en/img/parallax/gear_2.png" alt=""></div>
      <div class="presentation-elements__part _04 _gear _slow"><img src="/local/templates/index-en/img/parallax/gear_3.png" alt=""></div>
      <div class="presentation-elements__part _05 _peter"><img src="/local/templates/index-en/img/parallax/peter.png" alt=""></div>
     <?/* <div class="presentation-elements__part _06 _logo"><img src="local/templates/index-en/img/parallax/logo_1.png" alt=""></div>
      <div class="presentation-elements__part _07 _logo"><img src="local/templates/index-en/img/parallax/logo_2.png" alt=""></div>
      <div class="presentation-elements__part _08 _kustik"><img src="local/templates/index-en/img/parallax/kustik_1.png" alt=""></div>
      <div class="presentation-elements__part _09 _kustik _rotate"><img src="local/templates/index-en/img/parallax/kustik_2.png" alt=""></div>*/?>
    </div>
  </div>
  <div class="products__presentation clear">
    <div class="center">
      <div class="title _main">Products</div>
    </div>
    <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "production", array(
      "IBLOCK_ID" => "15",
      "TOP_DEPTH" => 1,
      "COUNT_ELEMENTS" => "N",
      "ADD_SECTIONS_CHAIN" => "N",
    ));?>
  </div>
  <div class="company clear">
    <div class="center">
      <div class="title _main">About company</div>
    </div>
    <div class="company__wrapper clear">
      <div class="center clear">
        <div class="company__column _left">
          <div class="text clear">
            <? $APPLICATION->IncludeFile('/local/includes/about.php', array(), array('MODE' => 'text'))?>
          </div>
          <div class="company__jump clear">
            <div class="company__detail"><a href="/istoriya/" class="_button"><span class="right-arrow">Read the story</span></a></div>
            <div class="company-decree"><a href="/local/templates/index-en/img/ukaz.jpg" class="company-decree__item show-photo">Read the decree of Peter I</a></div>
          </div>
        </div>
        <div class="company__column _right">
          <div class="company-photo">
            <div class="company-photo__wrapper"><img src="/local/templates/index-en/img/trash/about-us.jpg" alt=""></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"visualization", 
	array(
		"IBLOCK_ID" => "5",
		"NEWS_COUNT" => "0",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"COMPONENT_TEMPLATE" => "visualization",
		"IBLOCK_TYPE" => "-",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "GALLERY",
		),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "Y",
		"STRICT_SECTION_CHECK" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false
);?>