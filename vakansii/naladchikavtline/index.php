<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Наладчик автоматических линий и агрегатных станков 5 разряд");
$APPLICATION->SetTitle("Наладчик автоматических линий и агрегатных станков 5 разряд" );
$APPLICATION->SetPageProperty("description", "Наладчик автоматических линий и агрегатных станков 5 разряд");
?><div class="treb">
 <span class="trebcolor">Требования:</span>
	<ul>
		<li>Среднее профессиональное (техническое) образование</li>
		<li>Опыт работы</li>
	</ul>
 <span class="trebcolor">Зарплата:</span>
	<ul>
		<li>от 35000 руб.</li>
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