<?
//Отключаем статистику Bitrix
define("NO_KEEP_STATISTIC", true);
//Подключаем движок
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
//устанавливаем тип ответа как xml документ
header('Content-Type: application/xml; charset=utf-8');


$array_pages = array();

//Простые текстовые страницы: начало
$array_pages[] = array(
   	'NAME' => 'Главная страница',
   	'URL' => '/',
);
$array_pages[] = array(
   	'NAME' => 'О предприятии',
   	'URL' => '/o-predpreyatii/',
);
$array_pages[] = array(
   	'NAME' => 'Продукция',
   	'URL' => '/produktsiya/',
);
$array_pages[] = array(
	'NAME' => 'Новости',
   	'URL' => '/novosti/',
);
$array_pages[] = array(
   	'NAME' => 'Для потребителя',
   	'URL' => '/dlya-potrebitelya/',
);
$array_pages[] = array(
    'NAME' => 'Акционерам и инвесторам',
    'URL' => '/aktsioneram-i-investoram/',
);
$array_pages[] = array(
   	'NAME' => 'Оружейный салон',
   	'URL' => '/oruzheynyy-salon/',
);
$array_pages[] = array(
   	'NAME' => 'Контакты',
   	'URL' => '/kontakty/',
);
$array_pages[] = array(
   	'NAME' => 'Вакансии',
   	'URL' => '/vakansii/',
);
$array_pages[] = array(
    'NAME' => 'История',
    'URL' => '/o-predpreyatii/istoriya/',
);
$array_pages[] = array(
    'NAME' => 'Отчётность',
    'URL' => '/o-predpreyatii/otchetnost/',
);

$array_pages[] = array(
    'NAME' => 'Файлы',
    'URL' => '/o-predpreyatii/fayly/',
);
$array_pages[] = array(
    'NAME' => 'Покупка оружия',
    'URL' => '/dlya-potrebitelya/pokupka-oruzhiya/',
);
$array_pages[] = array(
    'NAME' => 'Ремонт оружия',
    'URL' => '/dlya-potrebitelya/remont/',
);
$array_pages[] = array(
    'NAME' => 'Неликвиды',
    'URL' => '/dlya-potrebitelya/nelikvidy/',
);
$array_pages[] = array(
    'NAME' => 'Дилеры',
    'URL' => '/dlya-potrebitelya/dilery/',
);


//Простые текстовые страницы: конец


$array_iblocks_id = array('1', '2', '18'); //ID инфоблоков, разделы и элементы которых попадут в карту сайта
if(CModule::IncludeModule("iblock"))
{
	foreach($array_iblocks_id as $iblock_id)
	{
		//Список разделов
   		$res = CIBlockSection::GetList(
	      	array(),
	      	Array(
	         	"IBLOCK_ID" => $iblock_id,
	         	"ACTIVE" => "Y"
	      	),
      		false,
    		array(
    		"ID",
    		"NAME",
    		"SECTION_PAGE_URL",
    		"TIMESTAMP_X"
    	));
   		while($ob = $res->GetNext())
   		{
			$array_pages_iblock[] = array(
			   	'NAME' => $ob['NAME'],
			   	'URL' => $ob['SECTION_PAGE_URL'],
			   	'LASTMOD' => $ob['TIMESTAMP_X']
			);
   		}
		//Список элементов
   		$res = CIBlockElement::GetList(
	      	array(),
	      	Array(
	         	"IBLOCK_ID" => $iblock_id,
	         	"ACTIVE_DATE" => "Y",
	         	"ACTIVE" => "Y"
	      	),
      		false,
      		false,
    		array(
    		"ID",
    		"NAME",
    		"DETAIL_PAGE_URL",
    		"TIMESTAMP_X"
    	));
   		while($ob = $res->GetNext())
   		{
			$array_pages_iblock[] = array(
			   	'NAME' => $ob['NAME'],
			   	'URL' => $ob['DETAIL_PAGE_URL'],
			   	'LASTMOD' => $ob['TIMESTAMP_X']
			);
   		}
	}
}

//Создаём XML документ: начало
//echo '<pre>'; print_r($array_pages); echo '</pre>';
$xml_content = '';
$xml_content_iblock = '';
$dateformat = 'Y-m-d';
if($_SERVER['HTTP_X_FORWARDED_PROTO']=='https' ) {
	$site_url = 'https://'.$_SERVER['HTTP_HOST'];	
} else {
	$site_url = 'http://'.$_SERVER['HTTP_HOST'];	
}
$quantity_elements = 0;
foreach($array_pages as $v){
	$quantity_elements++;
	if ($quantity_elements == 1){
		$priority = 1;
	} else {
		$priority = 0.8;
	}
	$page_url = mb_substr( $v['URL']."index.php", 1);
	$lastmod = date($dateformat, filemtime($page_url));
	$xml_content.='<url>
		<loc>'.$site_url.$v['URL'].'</loc>
		<lastmod>'.$lastmod.'</lastmod>
		<priority>'.$priority.'</priority>
	</url>
	';
}
foreach($array_pages_iblock as $v){
	$quantity_elements++;
	$priority = 0.6;
	$lastmod = date($dateformat, MakeTimeStamp($v['LASTMOD'], "DD.MM.YYYY"));
	$xml_content_iblock.='<url>
		<loc>'.$site_url.$v['URL'].'</loc>
		<lastmod>'.$lastmod.'</lastmod>
		<priority>'.$priority.'</priority>
		
	</url>
	';
}
$quantity_elements = 0;

//Создаём XML документ: конец

//Выводим документ
echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	'.$xml_content.''.$xml_content_iblock.'
</urlset>
';
?>