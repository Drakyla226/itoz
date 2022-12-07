<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ведущий инженер-технолог");
$APPLICATION->SetPageProperty("description", "Ведущий инженер-технолог");
?><div class="treb">
 <span class="trebcolor">Требования:</span>
	<ul>
		<li>Высшее образование ( техническое)</li>
		<li>Знание САПР</li>
		<li>Опыт работы обязателен</li>
	</ul>
 <span class="trebcolor">Обязанности:</span>
	<ul>
		<li>Построение техпроцесса (разведение процессов на станки ЧПУ и универсальные станки)</li>
		<li>Подбор режущего инструмента на универсальные станки и станки ЧПУ</li>
		<li>Оформление сопроводительной документации</li>
	</ul>
 <span class="trebcolor">Зарплата:</span>
	<ul>
		<li>от 30000 руб.</li>
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