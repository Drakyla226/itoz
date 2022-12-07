<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '<nav class="bread-crumbs clear bx_breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">';


$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	$nextRef = ($index < $itemSize-2 && $arResult[$index+1]["LINK"] <> ""? ' itemref="bx_breadcrumb_'.($index+1).'"' : '');
	$child = ($index > 0? ' itemprop="itemListElement"' : '');



	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'"  itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" '.$child.$nextRef.' class="bread-crumbs__link">
				<span itemprop="name">'.$title.'</span>
			</a>
			<span class="bread-crumbs__slash _yellow" ></span>';
	}
	else
	{
		$strReturn .= '<span class="bread-crumbs__show" itemprop="name">'.$title.'</span>';
	}
}
$strReturn .= '</nav>';


return $strReturn;

