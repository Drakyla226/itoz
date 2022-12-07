<?
define("NO_KEEP_STATISTIC", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
header('Content-Type: text/xml; charset=utf-8');
$site_url = 'https://'.$_SERVER['HTTP_HOST'];
$array_iblocks_id = array('1'); 
if(CModule::IncludeModule("iblock")) {
	foreach($array_iblocks_id as $iblock_id) {
		//Список разделов
		$arSections = CIBlockSection::GetList(Array('section' => 'asc', 'id' => 'asc'), Array("IBLOCK_ID" => $iblock_id, "ACTIVE" => "Y"), false, Array("ID", "NAME", "DETAIL_PICTURE", "IBLOCK_SECTION_ID", "UF_OPISANIE", "SECTION_PAGE_URL"));
		
		while($arSection = $arSections->GetNext()) {
			$sectionImg = CFile::GetFileArray($arSection['DETAIL_PICTURE']);
			$content = '';
			$arElements = CIBlockElement::GetList(Array(), Array("IBLOCK_ID" => $iblock_id, "IBLOCK_SECTION_ID" => $arSection['ID'], "ACTIVE" => "Y", "!CATALOG_PRICE_1" => false), false, Array('nTopCount' => 10), Array("ID", "NAME", "DETAIL_PAGE_URL", "CATALOG_GROUP_1", "DETAIL_PICTURE"));
			while($arElement = $arElements->GetNext()) {
				$elementImg = CFile::GetFileArray($arElement['DETAIL_PICTURE']);
				$content .= '
					<img src="'.$site_url.$elementImg['SRC'].'">
					<h2>'.$arElement['NAME'].'-'.$arElement['ID'].'</h2>
					<p>Цена: <b>'.$arElement['CATALOG_PRICE_1'].' руб.</b></p>
					<button formaction="'.$site_url.$arElement['DETAIL_PAGE_URL'].'" data-background-color="#d12030" data-color="#ffffff" data-primary="true">Купить</button>
				';
			}
			if ($content) {
				$arrCategory[] = Array(
					'NAME' => $arSection['NAME'],
					'URL' => $arSection['SECTION_PAGE_URL'],
					'ID' => $arSection['ID'],
					'SECTION_ID' => $arSection['IBLOCK_SECTION_ID'],
					'PICTURE' => $sectionImg['SRC'],
					'CONTENT' => $content,
					'DESCRIPTION' => $arSection['~UF_OPISANIE']
				);
			}
        }
        
        //Список элементов
		$res = CIBlockElement::GetList(
			array(),
			Array(
				"IBLOCK_ID" => 1,
				//"!CATALOG_PRICE_1" => false,
				"ACTIVE" => "Y",
				"GLOBAL_ACTIVE" => "Y",
				//"SECTION_ACTIVE" => "Y",
				//"SECTION_GLOBAL_ACTIVE" => "Y"
			),
			false,
			false,
			array(
				"ID",
				"NAME",
				"IBLOCK_SECTION_ID",
				"DETAIL_PAGE_URL",
				"TIMESTAMP_X",
				"CATALOG_GROUP_1",
				"DETAIL_TEXT",
				"PREVIEW_PICTURE",
				"DETAIL_PICTURE ",
				"PREVIEW_TEXT",
			));

		while($ob = $res->GetNextElement()) {
			$arFields = $ob->GetFields();
			$arrElement[] = array(
				'ID' => $arFields['ID'],
				'NAME' => $arFields['~NAME'],
				'URL' => $arFields['DETAIL_PAGE_URL'],
				'PRICE' => $arFields['CATALOG_PRICE_1'],
				'SECTION_ID' => $arFields['IBLOCK_SECTION_ID'],
				'DETAIL_TEXT' => $arFields['DETAIL_TEXT'],
				'PREVIEW_TEXT' => $arFields['PREVIEW_TEXT'],
				'PICTURE' => $arFields['PREVIEW_PICTURE'],
			);
			
		}

	}
}
// global $USER;
// if ($USER->IsAdmin()) {
// echo "<pre>";
// print_r($arrElement);
// echo "</pre>";
// die();
// }
foreach ($arrElement as $arItem) {
	$xml_content_element.='
		<item turbo="true">
		<title>'.$arItem['NAME'].'</title>
		<link>'.$site_url.$arItem['URL'].'</link>
		<turbo:content>
			<![CDATA[
				<header>
					<h1>'.$arItem['NAME'].'</h1>
				</header>
						
				'.$arItem['DETAIL_TEXT'].'
			]]>
		</turbo:content>
		<enclosure url="'.$site_url.$arItem['PICTURE'].'" type="image/jpeg"/>
		</item>
    ';
   
}

/*Выводим документ*/ 
$today = date("Y-m-d H:i:s"); 
echo '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0" xmlns:yandex="http://news.yandex.ru" xmlns:atom="http://www.w3.org/2005/Atom" xmlns:media="http://search.yahoo.com/mrss/" xmlns:turbo="http://turbo.yandex.ru">
<channel>
<atom:link href="'.$site_url.'/yandex-turbo.php" rel="self" type="application/rss+xml"/>
<title>ТДСМ</title>
<link>'.$site_url.'</link>
<description>ТДСМ</description>
<image>
<url>'.$site_url.'/bitrix/templates/index-new/template/img/logo.svg</url>
<title>ТДСМ</title>
<link>'.$site_url.'</link>
</image>
<yandex:logo>'.$site_url.'/bitrix/templates/index-new/template/img/logo.svg</yandex:logo>
<yandex:logo type="square">'.$site_url.'/bitrix/templates/index-new/template/img/logo.svg</yandex:logo>

'.$xml_content_element.'

</channel>
</rss>';

?>