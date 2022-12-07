<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Оператор станков с программным управлением 5 разряд" );
$APPLICATION->SetPageProperty("description", "Оператор станков с программным управлением 5 разряд");
?>
<div class="treb">

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