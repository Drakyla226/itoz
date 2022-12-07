<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контролер радио-электронной аппаратуры и приборов 6 разряд");
$APPLICATION->SetPageProperty("description", "Контролер радио-электронной аппаратуры и приборов 6 разряд");
?><div class="treb">

	<span class="trebcolor">Требования:</span>
<ul>
	<li>Среднее профессиональное (техническое) образование</li>
      <li>Опыт работы обязателен</li>
   </ul>
<span class="trebcolor">Обязанности:</span>
    <ul>
        <li>Проведение испытаний, входной контроль поступающих изделий, ведение документации</li>
    </ul>
<span class="trebcolor">Зарплата:</span>
<ul>
     <li>от 24000 руб.</li>
   </ul>
</div>
<?$APPLICATION->IncludeComponent("bitrix:form.result.new","",Array(
        "SEF_MODE" => "Y", 
        "WEB_FORM_ID" => "3", 
        "SUCCESS_URL" => "", 
        "CHAIN_ITEM_TEXT" => "", 
        "CHAIN_ITEM_LINK" => "", 
        "IGNORE_CUSTOM_TEMPLATE" => "Y", 
        "USE_EXTENDED_ERRORS" => "Y", 
        "CACHE_TYPE" => "A", 
        "CACHE_TIME" => "3600", 
        "SEF_FOLDER" => "/", 
        "VARIABLE_ALIASES" => Array(
        )
    )
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>