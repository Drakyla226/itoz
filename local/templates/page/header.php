<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">
<head>
	<title><?$APPLICATION->ShowTitle();?> | ТОЗ</title>
	<link href="/local/templates/index/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta name="cmsmagazine" content="f22b5ad5e4bbe60ef30214757d5df9a1" /> 
	<?$APPLICATION->ShowHead();?>
	<?use \Bitrix\Main\Page\Asset;
	Asset::getInstance()->addJs('/local/templates/index/js/jquery-3.2.1.min.js');
	Asset::getInstance()->addJs('/local/templates/index/js/slick/slick.min.js');
	Asset::getInstance()->addJs('/local/templates/index/js/fancybox/mousewheel.js');
	Asset::getInstance()->addJs('/local/templates/index/js/fancybox/fancybox.js');
	Asset::getInstance()->addJs('/local/templates/index/js/scroll/scrollbar.min.js');
	Asset::getInstance()->addJs('/local/templates/index/js/main.js');
	Asset::getInstance()->addJs('/local/templates/index/js/jquery.mask.min.js');

	Asset::getInstance()->addCss("/local/templates/index/styles/normalize.css");
	Asset::getInstance()->addCss("/local/templates/index/js/slick/slick.css");
	Asset::getInstance()->addCss("/local/templates/index/js/scroll/scrollbar.css");
	Asset::getInstance()->addCss("/local/templates/index/js/fancybox/fancybox.css");
	Asset::getInstance()->addCss("/local/templates/index/styles/styles.css");
	?>
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>
<div class="wrapper">
	<header class="header _inside">
		<div class="header__inner _main">
			<div class="center">
				<div class="header-buttons _symbolics">
					<a href="/" class="header-buttons__symbolics"><img src="/local/templates/index/img/mini-symbolics.png" alt=""></a>
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
					<button class="header-buttons__item _languages _active">ru</button>
					<a href="http://en.tulatoz.ru" class="header-buttons__item _languages">en</a>
					<button class="header-buttons__item _search search-open"></button>
				</div>
			</div>
		</div>
	</header>
	<div class="center">
		<?$APPLICATION->IncludeComponent(
			"bitrix:breadcrumb",
			"site",
			array(
				"PATH" => "",
				"SITE_ID" => "s1",
				"START_FROM" => "0",
				"COMPONENT_TEMPLATE" => "site"
			),
			false
		);?>
	  <h1 class="title _inside"><?$APPLICATION->ShowTitle(false);?></h1>
	</div>
	<div class="content center clear">