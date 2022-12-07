<?
/**
* Модуль "Прокрутка вверх" / Module "Scrolling Up"
* 
* Кнопка, позволяющая вернуться к началу страницы.
* Модуль включает скрипт для публичной части, а также страницу с настройками.
*
* A button that scrolls a webpage to it's beginning.
* The module includes a script for the public area and a settings section.
* 
* @category Модуль для CMS "1С-Битрикс: Управление сайтом" / A module for CMS "Bitrix Site Manager"
* @version 1.0.0
* @copyright 2016 "Эксабит" / "Exabit"
* @link https://marketplace.1c-bitrix.ru/solutions/exabit.scrollup/ Страница решения на Маркетплейсе / Marketplace webpage
* @see http://exabit.pro/solutions/ Сайт разработчика решения / Developer's webpage
* @author "Exabit" <bit@exabit.pro>
*/

use Bitrix\Main\Localization\Loc,
    Bitrix\Main\Config\Option,
    Bitrix\Main\Page\Asset,
    Bitrix\Main\HttpApplication,
    Bitrix\Main\Application,
    Bitrix\Main\Context;

Loc::loadMessages(__FILE__);

$request = HttpApplication::getInstance()->getContext()->getRequest();

if ($request['install'] == 'Y') {
	if ($ex = CMain::GetException()) {
		echo CAdminMessage::ShowMessage(array(
			'TYPE' => 'ERROR',
			'MESSAGE' => Loc::getMessage('MOD_INST_ERR'),
			'DETAILS' => $ex->GetString(),
			'HTML' => true,
		));
		?>
		<form action="<? echo Context::getCurrent()->getServer()->getScriptName(); ?>">
			<input type="hidden" name="lang" value="<? echo LANGUAGE_ID; ?>">
			<input type="submit" name="" value="<? echo Loc::getMessage("MOD_BACK"); ?>">
		<form>
		<?
		exit;
	} else {
		echo CAdminMessage::ShowNote(Loc::getMessage('MOD_INST_OK'));
	}
}

$moduleId = ($request['mid'] != '' ? $request['mid'] : $request['id']);

Asset::getInstance()->addString('<link href="/bitrix/css/' . $moduleId . '/admin.min.css" rel="stylesheet">');
Asset::getInstance()->addString('<script src="/bitrix/js/' . $moduleId . '/admin.min.js"></script>');

$rsSites = \CSite::GetList($by = 'sort', $order = 'asc', array('ACTIVE' => 'Y'));
$index = 0;
while ( $t = $rsSites->GetNext()) {
	$sites[$index]['ID'] = $t['LID'];
	$sites[$index++]['NAME'] = $t['NAME'];
}

$aTabs = array();
$index = 0;
foreach ($sites as $site) {
	$aTabs[$index]['DIV'] = "settings_" . $site['ID'];
	$aTabs[$index]['TAB'] = Loc::getMessage('EXABIT_SCROLLUP_OPTIONS_TAB_LABEL')  . ' "' . $site['NAME'] . '" (' . $site['ID'] . ')';
	$aTabs[$index++]['TITLE'] = Loc::getMessage('EXABIT_SCROLLUP_OPTIONS_TAB_TITLE');
}

$resetFlag = ($request['reset'] && check_bitrix_sessid());

if ($request->isPost() && $request['save'] && check_bitrix_sessid()) {
	Option::delete($moduleId, array('name' => 'default'));
		
	$cssTemplate = file_get_contents(__DIR__ . '/admin/tpl/custom.min.css.tpl');
	$jsTemplate = file_get_contents(__DIR__ . '/admin/tpl/settings.min.js.tpl');
	foreach ($sites as $site) {
		$siteId = $site['ID'];
		
		$cssCustom = $cssTemplate;
		$jsSettings = $jsTemplate;
		
		$val = $request[$siteId]['shape'];
		Option::set($moduleId, 'shape', $val, $siteId);
		switch ($val) {
			case 'rect':
				$val2 = '0px';
				break;
			case 'round':
				$val2 = '7px';
				break;
			case 'circle':
				$val2 = '50%';
		}
		$cssCustom = str_replace('[[shape]]', $val2, $cssCustom);
		
		$val = $request[$siteId]['color'];
		Option::set($moduleId, 'color', $val, $siteId);
		$cssCustom = str_replace('[[color]]', $val, $cssCustom);

		$val = strtolower($request[$siteId]['custom_color']);
		$val2 = '';
		if (preg_match('/^([0-9a-f]{3}|[0-9a-f]{6})$/', $val)) {
			$val2 = $val;
		}
		Option::set($moduleId, 'custom_color', $val2, $siteId);
	
		$val = $request[$siteId]['bottom_pos'];
		$val2 = '25';
		if (!preg_match('/[^0-9]/', $val) && strlen($val)) {
			$val2 = $val;
		}
		Option::set($moduleId, 'bottom_pos', $val2, $siteId);
		$cssCustom = str_replace('[[bottom_pos]]', $val2, $cssCustom);	

		$val = $request[$siteId]['side_pos'];
		$val2 = '25';
		if (!preg_match('/[^0-9]/', $val) && strlen($val)) {
			$val2 = $val;
		}
		Option::set($moduleId, 'side_pos', $val2, $siteId);
		$cssCustom = str_replace('[[side_pos]]', $val2, $cssCustom);	
	
		$val = $request[$siteId]['side'];
		Option::set($moduleId, 'side', $val, $siteId);
		$cssCustom = str_replace('[[btn_side]]', $val, $cssCustom);		
		
		$val = $request[$siteId]['show_effect'];
		Option::set($moduleId, 'show_effect', $val, $siteId);
		$val2 = 'opacity: 0';
		if ($val == 'slide') {
			$pos = $request[$siteId]['bottom_pos'] + 100;
			$val2 = 'transform: translateY(' . $pos . 'px); -webkit-transform: translateY(' . $pos . 'px)';
		}
		$cssCustom = str_replace('[[show_effect]]', $val2, $cssCustom);	
		
		$val = $request[$siteId]['size'];
		Option::set($moduleId, 'size', $val, $siteId);
		if ($val == 'normal') {
			$val1 = 44;
			$val2 = 32;
		} else {
			$val1 = 66;
			$val2 = 48;
		}
		$cssCustom = str_replace('[[shape_size]]', $val1, $cssCustom);		
		$cssCustom = str_replace('[[svg_size]]', $val2, $cssCustom);		
		
		$val = $request[$siteId]['icon'];
		Option::set($moduleId, 'icon', $val, $siteId);
		$val = file_get_contents(__DIR__ . '/admin/img/' . $val . '.svg');
		$jsSettings = str_replace('[[image]]', $val, $jsSettings);
		
		$val = $request[$siteId]['scroll_effect'];
		Option::set($moduleId, 'scroll_effect', $val, $siteId);
		$jsSettings = str_replace('[[ease_function]]', $val, $jsSettings);
		
		$val = $request[$siteId]['scroll_speed'];
		Option::set($moduleId, 'scroll_speed', $val, $siteId);
		$val2 = 1500;
		if ($val == 'fast') {
			$val2 *= 2;
		}
		$jsSettings = str_replace('[[ease_speed]]', $val2, $jsSettings);

		Option::set($moduleId, 'default', $request[$siteId]['default'], $siteId);
		Option::set($moduleId, 'include_list', serialize(cleanArr($request[$siteId]['include_list'])), $siteId);
		Option::set($moduleId, 'exclude_list', serialize(cleanArr($request[$siteId]['exclude_list'])), $siteId);
		
		$docRoot = Application::getDocumentRoot();
		file_put_contents($docRoot . '/bitrix/js/' . $moduleId . '/settings_' . $siteId . '.min.js', $jsSettings);
		file_put_contents($docRoot . '/bitrix/css/' . $moduleId . '/custom_' . $siteId . '.min.css', $cssCustom);	
	}
}

function cleanArr($arr)
{
	$arr = array_diff($arr, array(''));
	array_unshift($arr, '');
	return $arr;
}

$options = array(
	'default' => array('default' => 'no', 'vals' => array('yes', 'no')),
	'shape' => array('default' => 'round', 'vals' => array('rect', 'round', 'circle')),
	'color' => array('default' => 'f7c221',	'vals' => array(
			'bf3030', '269926', '009999', 'f7c221', 'c4ccd0', 'ee4056', '9b59b6', '639744', '4e75a0', 'fd7336', '7b8586', '34495e', '41a7eb', ''
		)
	),
	'custom_color' => array('default' => ''),
	'icon' => array('default' => 'arr1'),
	'bottom_pos' => array('default' => '25'),
	'side_pos' => array('default' => '25'),
	'side' => array('default' => 'right', 'vals' => array('left', 'right')),
	'show_effect' => array('default' => 'slide', 'vals' => array('slide', 'fade')),
	'scroll_effect' => array('default' => 'out', 'vals' => array('out', 'in', 'even', 'inout')),
	'scroll_speed' => array('default' => 'fast', 'vals' => array('slow', 'fast')),
	'size' => array('default' => 'normal', 'vals' => array('normal', 'big')),
	'include_list' => array('default' => 'a:1:{i:0;s:0:"";}'),
	'exclude_list' => array('default' => 'a:1:{i:0;s:0:"";}')
);

$vals = scandir(__DIR__ . '/admin/img');
foreach ($vals as $i => $file) {
	if (!preg_match('/^arr\d+\.svg$/', $file)) {
		unset($vals[$i]);
	} else {
		$vals[$i] = substr($vals[$i], 0, strlen($vals[$i]) - 4);
	}
}
$options['icon']['vals'] = $vals;

$options_loaded = array('default' => '');
foreach ($sites as $site) {
	$siteId = $site['ID'];
	foreach ($options as $name => $opt) {
		$options_loaded[$siteId][$name] = ($resetFlag ? $opt['default'] : Option::get($moduleId, $name, $opt['default'], $siteId));
	}
	foreach (array('include_list', 'exclude_list') as $el) {
		$options_loaded[$siteId][$el] = unserialize($options_loaded[$siteId][$el]);
	}
	if ($options_loaded[$siteId]['default'] == 'yes') $options_loaded['default'] = $siteId;	
}

echo file_get_contents(__DIR__ . '/admin/img/admin_icons.svg');

$tabControl = new CAdminTabControl('tabControl', $aTabs);
$tabControl->Begin();
?>

<form method="post" action="/bitrix/admin/settings.php?mid=<?=$moduleId?>&amp;lang=<?=$request['lang']?>" name="<?=str_replace('.', '_', $moduleId)?>_settings">

    <?
	function genOptionBlock($siteId, $val, $option, $vals, $type, $class)
	{		
		echo '<tr><td><label>' . Loc::getMessage('EXABIT_SCROLLUP_OPTION_' . mb_strtoupper($option) . '_LABEL')
			. '&nbsp;</label></td><td><div' . ($class != '' ? ' class="' . $class . '"' : '') . '>';
		
		if ($type == 'radio') {
			foreach ($vals as $el) {
				$data = '<div class="option-element"><div';
	
				switch ($option) {
					case 'shape':
						$data .= ' class="' . $el . '">';
						break;
					case 'default':
					case 'side':
					case 'show_effect':
					case 'scroll_effect':
					case 'scroll_speed':
					case 'size':
						$data .= '>' . Loc::getMessage('EXABIT_SCROLLUP_OPTION_' . mb_strtoupper($option) . '_' . mb_strtoupper($el));
						break;
					case 'color':
						$data .= ' style="background-color: #' . $el . ';">';
						break;
					case 'icon':
						$data .= '>' . file_get_contents(__DIR__ . '/admin/img/' . $el . '.svg');
				}
	
				$data .= '</div><input ' . (($val == $el) ? 'checked ' : '');
				$data .= 'type="radio" name="' . $siteId . '[' . $option . ']" value="' . $el . '"></div>';
				echo $data;
			}	
		}

		if ($type == 'text')
		{
			if ($option == 'custom_color') {
				echo '<div class="hash-icon"><svg><use xlink:href="#hash"></use></div>';
			}
			echo '<input class="input-text" name="' . $siteId . '[' . $option . ']" value="' . $val . '">';
		}
		
		if ($type == 'list') {
			$data = '';
			foreach ($val as $i => $line) {
				if ($i == 1) {
					$data .= '<div>';
				}
				$data .= '<div' . ($i == 0 ? ' data-listname="' . $option . '"' : '') . '><input class="input-text" name="'
					  . $siteId . '[' . $option . '][' . $i . ']" value="' . $line . '" data-id="' . $i
					  . '"><button class="icon-btn' . ($i == 0 ? ' add-btn' : '') . '">' . '<svg><use xlink:href="#'
					  . ($i == 0 ? 'add' : 'del') . '"></use></svg></button></div>';
				if ($i == count($val)) {
					$data .= '</div>';
				}
			}
			echo $data;
		}
			
		echo '</div></td></tr>';		
	}	
	
	foreach ($aTabs as $index => $aTab)	{
		$siteId = $sites[$index]['ID'];
		$tabControl->BeginNextTab();		

		echo '<tr data-site="' . $siteId . '"></tr>';

		$optionBlocks = array(
			array('name' => 'default', 'type' => 'radio', 'class' => 'option-default'),
			array('name' => 'STYLE', 'type' => 'separator'),
			array('name' => 'shape', 'type' => 'radio', 'class' => 'shapes'),
			array('name' => 'icon', 'type' => 'radio', 'class' => 'icons'),
			array('name' => 'color', 'type' => 'radio', 'class' => 'colors'),
			array('name' => 'custom_color', 'type' => 'text', 'class' => 'custom-color'),
			array('name' => 'size', 'type' => 'radio'),
			array('name' => 'POS', 'type' => 'separator'),
			array('name' => 'side', 'type' => 'radio'),
			array('name' => 'bottom_pos', 'type' => 'text', 'class' => 'dig-cont'),
			array('name' => 'side_pos', 'type' => 'text', 'class' => 'dig-cont'),
			array('name' => 'EFFECTS', 'type' => 'separator'),
			array('name' => 'show_effect', 'type' => 'radio'),
			array('name' => 'scroll_effect', 'type' => 'radio'),
			array('name' => 'scroll_speed', 'type' => 'radio'),
			array('name' => 'LISTS', 'type' => 'separator'),
			array('name' => 'include_list', 'type' => 'list', 'class' => 'list-cont'),
			array('name' => 'exclude_list', 'type' => 'list', 'class' => 'list-cont'),
			array('name' => 'LISTS', 'type' => 'note')
		);
		
		foreach ($optionBlocks as $block) {
			if ($block['type'] == 'separator') {
				echo '<tr class="heading"><td colspan="2">' . Loc::getMessage('EXABIT_SCROLLUP_OPTION_SEPARATOR_' . $block[name]) . '</td></tr>';
			} elseif ($block['type'] == 'note') {
				echo '<tr class="option-note"><td></td><td><div class="adm-info-message">' . Loc::getMessage('EXABIT_SCROLLUP_OPTION_NOTE_' . $block[name]) . '</div></td></tr>';
			} else {
				$vals = $options[$block['name']]['vals'];
				if ($block['name'] == 'color') {
					$vals[count($vals) - 1] = ($options_loaded[$siteId]['custom_color'] == '' ? 'fff' : $options_loaded[$siteId]['custom_color']);
				}
				genOptionBlock($siteId, $options_loaded[$siteId][$block['name']], $block['name'], $vals, $block['type'], $block['class']);
			}
		}
    }
	
    $tabControl->Buttons();

	echo '<div id="test"></div>';
	
	?>
    <input type="submit" name="save" value="<?=GetMessage("MAIN_APPLY")?>">
	<?
		if ($resetFlag) {
			echo '<input type="submit" name="reload" value="' . GetMessage('EXABIT_TO_RELOAD') . '">';
			echo '<div class="adm-info-message">' . Loc::getMessage('EXABIT_TO_DEFAULT_WARN') . '</div>';
		} else {
			echo '<input type="submit" name="reset" value="' . GetMessage('EXABIT_TO_DEFAULT') . '">';
		}
	?>
    <?=bitrix_sessid_post();?>
</form>
<?
$tabControl->End();

echo '<div class="adm-info-message">' . Loc::getMessage('EXABIT_SCROLLUP_OPTION_NOTE_DESC') . '</div>';

echo '<script>const cyrRegexp = "' . Loc::getMessage('EXABIT_SCROLLUP_OPTION_CYR_REGEXP') . '";</script>';