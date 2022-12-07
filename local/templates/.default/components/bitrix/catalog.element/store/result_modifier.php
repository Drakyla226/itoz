<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$arSelect = Array("ID", "PROPERTY_GALLERY", "PROPERTY_FILE");
$arFilter = Array("IBLOCK_ID"=>"18", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(
	Array("SORT"=>"ASC"), 
	$arFilter,
	false,
	false,
	$arSelect
);
while($ob = $res->GetNext())
{
	$desc = CFile::GetFileArray($ob['PROPERTY_FILE_VALUE']);
	$img = CFile::GetFileArray($ob['PROPERTY_GALLERY_VALUE']);

	$arResult['BRANDS'][$desc['DESCRIPTION']]['IDFILE'] = $desc['ID'];

	if($desc['DESCRIPTION'] == $img['DESCRIPTION']) {
		$arResult['BRANDS'][$desc['DESCRIPTION']]['ID'] = $img['ID'];
	}

}
// print_r($arResult['BRANDS']);

