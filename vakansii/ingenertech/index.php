<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Инженер-технолог - вакансия в Туле");
$APPLICATION->SetTitle("Инженер-технолог ");
$APPLICATION->SetTitle("Инженер-технолог" );
$APPLICATION->SetPageProperty("description", "Императорский Тульский оружейный завод приглашает специалистов на вакансию инженер-технолог. Оставляйте заявку на сайте либо звоните на номер отдела кадров +7(4872) 32-17-70");
?><div class="treb">
 <span class="trebcolor">Требования:</span>
	<ul>
		<li>Высшее образование (техническое)</li>
		<li>Знание САПР</li>
		<li>Опыт работы обязателен</li>
	</ul>
 <span class="trebcolor">Обязанности:</span>
	<ul>
		<li>Разработка технологической документации</li>
		<li>Разработка технических заданий на проектируемые участки</li>
		<li>Контроль технологической дисциплины в цехах</li>
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