<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Техник- конструктор");
$APPLICATION->SetTitle("Техник- конструктор");
?><div class="treb">
 <span class="trebcolor">Требования:</span>
	<ul>
		<li>Высшее&nbsp; образование (техническое)</li>
		<li>Знание САПР</li>
		<li>Опыт работы обязателен</li>
	</ul>
 <span class="trebcolor">Обязанности:</span>
	<ul>
		<li>Участие в разработке изделий </li>
		<li>Внесение изменений в серийно-выпускаемые изделия, выпуск КД</li>
		<li>Участие в сборке макетов, образцов изделий</li>
		<li>Техническое сопровождение изготовления деталей и узлов в опытном и серийном производстве</li>
		<li>Участие в испытаниях </li>
		<li>Обеспечение соответствий разрабатываемых конструкций техническим заданиям и нормам ЕСКД</li>
		<li>Проведение технических расчетов</li>
		<li>Составление эксплуатационных документов</li>
	</ul>
 <span class="trebcolor">Зарплата:</span>
	<ul>
		<li>от 25000 руб.</li>
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