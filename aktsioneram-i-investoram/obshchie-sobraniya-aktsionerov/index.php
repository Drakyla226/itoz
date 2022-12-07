<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Общие собрания акционеров Тульского оружейного завода.");
$APPLICATION->SetTitle("Общие собрания акционеров");
?><p style="text-align: justify;">
	 &nbsp; &nbsp; &nbsp;Сообщение о проведении общего собрания акционеров&nbsp; и сообщение о проведении общего собрания акционеров, повестка дня которого содержит вопрос о реорганизации Общества должно быть сделано в сроки, установленные пунктом 1 статьи 52 Федерального закона "Об акционерных обществах".&nbsp;
</p>
<p style="text-align: justify;">
</p>
<p style="text-align: justify;">
 <br>
</p>
<p style="text-align: justify;">
</p>
<p style="text-align: justify;">
</p>
<p style="text-align: justify;">
</p>
<p style="text-align: justify;">
	 &nbsp; &nbsp; &nbsp;В указанные сроки Общество обязано довести до сведения лиц, имеющих право на участие в общем собрании акционеров и зарегистрированных в реестре акционеров Общества, сообщение о проведении общего собрания акционеров путем размещения сообщения о проведении общего собрания акционеров в информационно-телекоммуникационной сети «Интернет» на сайте Общества <a href="https://www.tulatoz.ru/">www.tulatoz.ru</a>. (п. 11.12. Устава Общества).
</p>
<p style="text-align: justify;">
</p>
<p style="text-align: justify;">
 <br>
</p>
<p style="text-align: justify;">
</p>
<p style="text-align: justify;">
	 &nbsp; &nbsp; &nbsp;В течение 20 дней, а в случае проведения общего собрания акционеров, повестка дня которого содержит вопрос о реорганизации Общества, в течение 30 дней до проведения общего собрания акционеров, информация (материалы) должна быть доступна лицам, имеющим право на участие в общем собрании акционеров, для ознакомления в помещении исполнительного органа Общества и иных местах, адреса которых указаны в сообщении о проведении общего собрания акционеров, а также может быть размещена на сайте Общества <a href="https://www.tulatoz.ru/">www.tulatoz.ru</a> в информационно-телекоммуникационной сети «Интернет». (п. 12.7. Устава Общества)
</p>
<p>
	 Информация об общих собраниях акционеров:
</p>
<p>
 <br>
</p>
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"meeting",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("",""),
		"FILE_404" => "",
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "services",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "1000",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("","FILE",""),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>