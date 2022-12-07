<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Инженер-конструктор - вакансия в Туле");
$APPLICATION->SetTitle("Инженер-конструктор");
$APPLICATION->SetPageProperty("description", "Императорский Тульский оружейный завод приглашает специалистов на вакансию инженер-конструктор. Оставляйте заявку на сайте либо звоните на номер отдела кадров +7(4872) 32-17-70");
?><div class="treb">
 <span class="trebcolor">Требования:</span>
	<ul>
		<li>Высшее образование ( техническое)</li>
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
		<li>от 28000 руб.</li>
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