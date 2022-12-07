<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты Тульского оружейного завода");
$APPLICATION->SetPageProperty("description", "Контакты Тульского оружейного завода.");
$APPLICATION->SetTitle("Контакты");?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"contacts",
	Array(
		"DISPLAY_BOTTOM_PAGER" => "N",
		"IBLOCK_ID" => "4",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"NEWS_COUNT" => "999",
		"PROPERTY_CODE" => array(0=>"HIDE",1=>"",),
		"SET_TITLE" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>