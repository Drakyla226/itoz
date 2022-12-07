<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мемориальный комплекс");
$APPLICATION->SetPageProperty("description", "Мемориальный комплекс");
?>


  <div class="wrapper1">

  <div class="half">
	  <a href="/upload/medialibrary/66a/_.JPG" data-fancybox-group="group" class="show-photo"><img class="leftimg" src="/upload/medialibrary/66a/_.JPG" alt=""></a>Помнить, чтобы гордиться<br>
	  <div class="textjustify"><br>
<b>МЕМОРИАЛ ПАМЯТИ</b><br>
<br>
<b><i>Всё дальше в историю уходит героическое время всенародной битвы наших соотечественников в Великой Отечественной войне, но подвиг их не меркнет. Солдат на передовой, старик или подросток на заводе, партизан в тылу врага или работница в поле – каждый как мог, а чаще всего сверх всяких сил, приближал Победу. И только, благодаря мужеству и великой любви к Родине, наш народ выстоял и победил, принеся мир и свободу. </i></b><br>
	  </div>
<br>
    <div class="tab">
      <input id="tab-one" type="checkbox" name="tabs">
      <label for="tab-one">ТОЗ в период ВОВ</label>
      <div class="tab-content">
		  <?$APPLICATION->IncludeFile(
    "/local/includes/toz.php",
    Array(),
    Array("MODE"=>"php") // text, html, php
);?>
      </div>
    </div>
    <div class="tab">
      <input id="tab-two" type="checkbox" name="tabs">
      <label for="tab-two">Герои-оружейники</label>
      <div class="tab-content">
        <?$APPLICATION->IncludeFile(
    "/local/includes/geroi.php",
    Array(),
    Array("MODE"=>"php") // text, html, php
);?>
      </div>
    </div>
    <div class="tab">
      <input id="tab-three" type="checkbox" name="tabs">
      <label for="tab-three">Мемориал памяти. История создания</label>
      <div class="tab-content">
        <p><?$APPLICATION->IncludeFile(
    "/local/includes/historymemorial.php",
    Array(),
    Array("MODE"=>"php") // text, html, php
);?></p>
      </div>
    </div>
    <div class="tab">
      <input id="tab-four" type="checkbox" name="tabs">
      <label for="tab-four">Галерея</label>
      <div class="tab-content">
        <p><?$APPLICATION->IncludeComponent("bitrix:news.list","visualization1",Array(
        "AJAX_MODE" => "Y",
        "IBLOCK_TYPE" => "news",
        "IBLOCK_ID" => "22",
        "NEWS_COUNT" => "20",
"PROPERTY_CODE" => array(
      0 => "PHOTO",
      1 => "",
   ),
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",
    )
);?></p>
      </div>
    </div>
  </div></div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>