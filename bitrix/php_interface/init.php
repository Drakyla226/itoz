<?
AddEventHandler('main', 'OnEpilog' , array('CMainHandlers', 'OnEpilogHandler'));  
class CMainHandlers { 
   function OnEpilogHandler() {
      $page = ' - Страница ';
      if (isset($_GET['PAGEN_1']) && intval($_GET['PAGEN_1'])>0) 
      {
         $title = $GLOBALS['APPLICATION']->GetTitle();
         $GLOBALS['APPLICATION']->SetPageProperty('title', $title.$page.intval($_GET['PAGEN_1']));
         $GLOBALS['APPLICATION']->SetTitle($title.' – Страница '.intval($_GET['PAGEN_1']));
         $description = $GLOBALS['APPLICATION']->GetProperty("description");
         $GLOBALS['APPLICATION']->SetPageProperty('description', $description.$page.intval($_GET['PAGEN_1']));
      }
      elseif (isset($_GET['PAGEN_2']) && intval($_GET['PAGEN_2'])>0)
       {
         $title = $GLOBALS['APPLICATION']->GetTitle();
         $GLOBALS['APPLICATION']->SetPageProperty('title', $title.$page.intval($_GET['PAGEN_2']));
         $description = $GLOBALS['APPLICATION']->GetProperty("description");
         $GLOBALS['APPLICATION']->SetPageProperty('description', $description.$page.intval($_GET['PAGEN_2']));
        }
   }
}

function getIdByCode($code,$iblock_id,$type){
	if(CModule::IncludeModule("iblock")){
		if($type=='IBLOCK_ELEMENT'){
			$arFilter=array("IBLOCK_ID"=>$iblock_id,"CODE"=>$code);
			$res=CIBlockElement::GetList(array(),$arFilter,false,array("nPageSize"=>1),array('ID'));
			$element=$res->Fetch();
			if($res->SelectedRowsCount()!=1) return '<p style="font-weight:bold;color:#ff0000">Элемент не найден</p>';
			else return $element['ID'];
		}
		else if($type=='IBLOCK_SECTION'){
			$res=CIBlockSection::GetList(array(),array('IBLOCK_ID'=>$iblock_id,'CODE'=>$code));
			$section=$res->Fetch();
			if($res->SelectedRowsCount()!=1) return '<p style="font-weight:bold;color:#ff0000">Раздел не найден</p>';
			else return $section['ID'];
		}
		else{
			return '<p style="font-weight:bold;color:#ff0000">Укажите тип</p>';
		}
	}
}


?>