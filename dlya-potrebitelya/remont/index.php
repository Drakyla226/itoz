<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Ремонт оружия ТОЗ - мастерская по ремонту огнестрельного охотничьего гладкоствольного и нарезного оружия");
$APPLICATION->SetPageProperty("description", "На территории Тульского оружейного завода работает мастерская по ремонту стрелкового оружия. Ремонт гладкоствольных и нарезных стволов огнестрельного оружия.");
$APPLICATION->SetTitle("Мастерская по ремонту оружия");
?><div class="repair-content">
	<p style="text-align: justify;">
		 Для проведения ремонта охотничьего оружия на ПАО «Тульский оружейный завод» необходимо отправить спецсвязью ружье по адресу завода: 300002, г. Тула, ул. Советская, д. 1а, со следующими документами:<br>
	</p>
	<ol>
		<li>Лично заявление с указанием модели ружья, причин ремонта, а также Ф.И.О. потребителя, почтового адреса.</li>
		<li>Копию ИНН (для спецсвязи).&nbsp;</li>
		<li>Копию личного паспорта.&nbsp;</li>
		<li>Копию разрешения на право хранения и ношения оружия.&nbsp;</li>
		<li>Направление на ремонт с гербовой печатью из органа регистрации оружия, действительного на дату поступления на завод.</li>
	</ol>
	<p>
	</p>
 <br>
	<p style="text-align: justify; ">
		 &nbsp; &nbsp; &nbsp;В случае личной доставки ружья на завод необходимы следующие документы:&nbsp;<br>
	</p>
	<ol>
		<li>Личное заявление с указанием модели ружья, причин ремонта, а также Ф.И.О. потребителя, почтовым адресом.</li>
		<li>Паспорт.</li>
		<li>Оригинал&nbsp;на право хранения и ношения оружия.</li>
		<li>Оригинал&nbsp;направление на ремонт с гербовой печатью из органа регистрации оружия, действительного на дату поступления на завод.</li>
	</ol>
 <br>
	 &nbsp; &nbsp; &nbsp;Присыл и привоз оружия необходимо предварительно согласовывать с работником завода по телефону 8(4872) 32-14-93&nbsp; &nbsp; с 9.00 – 14.00<br>
	<p>
	</p>
	<p style="text-align: justify;">
		 &nbsp; &nbsp; &nbsp;Для приобретения запасных частей к охотничьему оружию ПАО «Тульский оружейный завод» следует выслать заявку:&nbsp;<br>
	</p>
	<ul>
		<li>в письменном виде по адресу: 300002, г. Тула, ул. Советская, д. 1а;</li>
		<li>по электронной почте <a href="mailto:remont@tulatoz.ru">remont@tulatoz.ru</a></li>
	</ul>
	 с указанием названия и децимального номера необходимых деталей, указанных в паспорте на ружье, их количество. Сообщить свой почтовый адрес с индексом, Ф.И.О. и подтвердить согласие на оплату посылки наложенным платежом.
	<p>
	</p>
	<p style="text-align: justify;">
 <br>
		 &nbsp; &nbsp; &nbsp;Дополнительную информацию Вы сможете получить по телефону 8(4872)&nbsp;32-14-93
	</p>
	<div class="feedback__button _button">
 <span class="right-arrow">Оставить заявку</span>
	</div>
	<div class="feedback_overlay">
	</div>
	<div class="modal__feedback">
		 <?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"feedback",
	Array(
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_HISTORY" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"COMPONENT_TEMPLATE" => "feedback",
		"EDIT_URL" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "Y",
		"VARIABLE_ALIASES" => array("WEB_FORM_ID"=>"","RESULT_ID"=>"",),
		"WEB_FORM_ID" => "1"
	)
);?>
	</div>
	<p>
	</p>
</div>
<p>
</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>