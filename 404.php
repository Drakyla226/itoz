<?include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');
CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("404 Страница не найдена");
$APPLICATION->SetPageProperty("description",  "404 Страница не найдена. К сожалению, запрашиваемой Вами страницы не существует на нашем сайте."); ?>
<p>К сожалению, запрашиваемой Вами страницы не существует на нашем сайте.</p>
<p>Возможно, это случилось по одной из этих причин:</p>
<ul>
<li>Вы ошиблись при наборе адреса страницы (URL)</li>
<li>перешли по &laquo;битой&raquo; (неработающей, неправильной) ссылке</li>
<li>запрашиваемой страницы никогда не было на сайте или она была удалена</li>
</ul>
<p>Мы предлагаем следующие пути:</p>
<ul>
<li>вернуться назад при помощи кнопки браузера back</li>
<li>проверить правильность написания адреса страницы</li>
<li>перейти на <a href="/">главную страницу сайта</a></li>
<li>связаться с нами по телефону: <a href="tel:+74872321499">+7 (4872) 32-14-99</a></li>
<li>написать письмо нашим сотрудникам <a href="mailto:mail@tulatoz.ru">mail@tulatoz.ru</a></li>
<li>воспользоваться картой сайта:</li>
</ul>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.map", 
	".default", 
	array(
		"LEVEL" => "3",
		"COL_NUM" => "1",
		"SHOW_DESCRIPTION" => "Y",
		"SET_TITLE" => "N",
		"CACHE_TIME" => "36000000",
		"COMPONENT_TEMPLATE" => ".default",
		"CACHE_TYPE" => "A"
	),
	false
);?>
<p>Если Вы уверены в правильности набранного адреса страницы и считаете, что эта ошибка произошла по нашей вине, пожалуйста, сообщите об этом разработчикам (или владельцам) сайта при помощи электронной почты.</p>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>