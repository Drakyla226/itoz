<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Слесарь-инструментальщик - вакансия в Туле");
$APPLICATION->SetPageProperty("description", "Императорский Тульский оружейный завод приглашает специалистов на вакансию слесарь-инструментальщик. Оставляйте заявку на сайте либо звоните на номер отдела кадров +7(4872) 32-17-70");
$APPLICATION->SetTitle("Слесарь-инструментальщик 4-6 разряд");
?><div class="treb">

 <span class="trebcolor">Зарплата:</span>
	<ul>
		<li>30000 руб.</li>
	</ul>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "Y",
		"SEF_FOLDER" => "/",
		"SEF_MODE" => "Y",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "Y",
		"VARIABLE_ALIASES" => Array(),
		"WEB_FORM_ID" => "3"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>