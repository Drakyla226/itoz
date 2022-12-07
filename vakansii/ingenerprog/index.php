<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Инженер-программист");
$APPLICATION->SetTitle("Инженер-программист" );
$APPLICATION->SetPageProperty("description", "Инженер-программист");
?><div class="treb">
 <span class="trebcolor">Требования:</span>
	<ul>
		<li>Высшее образование (техническое или инженерно- экономическое)</li>
		<li>Опыт работы обязателен</li>
	</ul>
 <span class="trebcolor">Обязанности:</span>
	<ul>
		<li>Руководящие и нормативные материалы, регламентирующие методы разработки алгоритмов и программ использования вычислительной техники при обработке информации<br>
 </li>
		<li>Основные принципы структурного программирования&nbsp;</li>
		<li>Виды программного обеспечения</li>
		<li>Технико-эксплуатационные характеристики, конструктивные особенности, назначение и режимы работы оборудования, правила его технической эксплуатации<br>
 </li>
		<li>Технологию автоматической обработки информации<br>
 </li>
		<li>Виды технических носителей информации</li>
		<li>Методы классификации и кодирования&nbsp; информации</li>
		<li>Формализованные языки программирования</li>
		<li>Действующие стандарты, порядок оформления технической документации, основы экономики, организации труда и управления; основы законодательства РФ</li>
	</ul>
 <span class="trebcolor">Зарплата:</span>
	<ul>
		<li>от 26000 руб.</li>
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