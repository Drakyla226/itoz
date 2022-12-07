<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
  <title><?$APPLICATION->ShowTitle();?></title>
  <link href="/local/templates/index/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
  <meta name="yandex-verification" content="4ef74b29926213f2" />
  <meta name="viewport" content="width=device-width">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="google-site-verification" content="e2mxoZ-0GL7FsWjrQ5ciN3z7v-8vflwWRr8b_bP9Y0E" />
<meta name="cmsmagazine" content="f22b5ad5e4bbe60ef30214757d5df9a1" /> 
  <?$APPLICATION->ShowHead();?>
  <?use \Bitrix\Main\Page\Asset;
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery-3.2.1.min.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/slick/slick.min.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/fancybox/mousewheel.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/fancybox/fancybox.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/scroll/scrollbar.min.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/main.js');
  Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jquery.mask.min.js');

  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/styles/normalize.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/js/slick/slick.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/js/scroll/scrollbar.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/js/fancybox/fancybox.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/styles/styles.css");
  Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/styles/custom.css");
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
		  <div class="contacts-line _social _header"><? $APPLICATION->IncludeFile('/local/includes/social.php', array(), array('MODE' => 'text'))?></div>
        </div>
        <div class="header-buttons _right">
          <button class="header-buttons__item _languages _active">ru</button>
          <a href="http://en.tulatoz.ru" class="header-buttons__item _languages">en</a>
        </div>
      </div>
    </div>
  </header>
  <h1 class="index-title">Императорский Тульский оружейный завод</h1>
  <div class="presentation clear">
    <div class="center">
      <div class="presentation-logo clear">
        <div class="presentation-logo__link">
          <!--<div class="presentation-logo__symbol"><img src="local/templates/index/img/logo.png" alt=""></div>-->
          <div class="presentation-logo__signature">Сохраняя традиции. <br>Приумножая качество.</div>
        </div>
      </div>
      <div class="presentation__title clear"><img width="350" src="local/templates/index/img/text2.png" alt="Императорский Тульский оружейный завод"><!--Тульский <br>оружейный <br>завод--></div>
      <!--div class="presentation__tagline clear">Вековые традиции – гарантия качества</div-->
	  <div class="presentation-button__products clear">
		<a href="/produktsiya/" class="_button">
		  <span class="right-arrow">Наша продукция</span>
		</a>
		<div class="zvezda_block">
			<a href="/o-predpreyatii/memorialkompleks/" class="_button button_zvezda">
				<span class="right-arrow _zvezda">Мемориальный комплекс</span>
				<img class="logotypeTop" src="/upload/medialibrary/c45/zvezda.png" alt="Значок">
			</a>
		</div>
	</div>

 </div>
    <div class="presentation-elements">
      <?/*<div class="presentation-elements__part _01 _big_logo"><img src="local/templates/index/img/parallax/logo_big.png" alt=""></div>*/?>
      <div class="presentation-elements__part _02 _gear"><img src="local/templates/index/img/parallax/gear_1.png" alt=""></div>
      <div class="presentation-elements__part _03 _gear _reverse"><img src="local/templates/index/img/parallax/gear_2.png" alt=""></div>
      <div class="presentation-elements__part _04 _gear _slow"><img src="local/templates/index/img/parallax/gear_3.png" alt=""></div>
      <div class="presentation-elements__part _05 _peter"><img src="local/templates/index/img/parallax/peter.png" alt=""></div>
    <?/*  <div class="presentation-elements__part _06 _logo"><img src="local/templates/index/img/parallax/logo_1.png" alt=""></div>
      <div class="presentation-elements__part _07 _logo"><img src="local/templates/index/img/parallax/logo_2.png" alt=""></div>
      <div class="presentation-elements__part _08 _kustik"><img src="local/templates/index/img/parallax/kustik_1.png" alt=""></div>
      <div class="presentation-elements__part _09 _kustik _rotate"><img src="local/templates/index/img/parallax/kustik_2.png" alt=""></div>*/?>
    </div>
  </div>
  <div class="products__presentation clear">
    <div class="center">
		<?/*<h1><?$APPLICATION->ShowTitle(false);?></h1>*/?>
      <div class="title _main">Продукция</div>
    </div>
    <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "production_index", array(
      "IBLOCK_ID" => "1",
      "TOP_DEPTH" => 1,
      "COUNT_ELEMENTS" => "N",
      "ADD_SECTIONS_CHAIN" => "N",
    ));?>
  </div>
  <div class="company clear">
    <div class="center">
      <div class="title _main _about-index">О компании</div>
    </div>
    <div class="company__wrapper clear">
      <div class="center clear">
        <div class="company__column _left">
          <div class="text clear">
            <? $APPLICATION->IncludeFile('/local/includes/about.php', array(), array('MODE' => 'text'))?>
          </div>
          <div class="company__jump clear">
            <div class="company__detail"><a href="/o-predpreyatii/istoriya/" class="_button"><span class="right-arrow">Читать историю</span></a></div>
            <div class="company-decree"><a href="/local/templates/index/img/ukaz.jpg" class="company-decree__item show-photo">Читать Указ Петра I</a></div>
          </div>
        </div>
        <div class="company__column _right">
          <div class="company-photo">
            <div class="company-photo__wrapper"><img src="local/templates/index/img/trash/about-us.jpg" alt=""></div>
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
  <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"news-index", 
	array(
		"IBLOCK_ID" => "2",
		"={#\"DISPLAY_COUNT\"}" => "4",
		"DISPLAY_COUNT" => "4",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"SET_TITLE" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"COMPONENT_TEMPLATE" => "news-index",
		"IBLOCK_TYPE" => "-",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "ASC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
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
		"ACTIVE_DATE_FORMAT" => "j F",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"INCLUDE_SUBSECTIONS" => "N",
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
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "999"
	),
	false
);?>