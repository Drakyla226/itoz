<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?/*
global $USER;
if($USER ->isAdmin()){
	echo "<pre>";
	print_r ($arResult);
}*/
?>
<!--span><?=$arResult["FORM_ERRORS_TEXT"]?></span-->

<?if (($_GET["WEB_FORM_ID"] == $arResult["arForm"]["ID"]) && ($_GET["formresult"] == "addok")):?>
	<span class="form__title">Сообщение успешно отправлено</span>
<?else:?>
<?=$arResult["FORM_HEADER"]?>
<div class="feedback">
	<span class="form__title"><?=$arResult['arForm']['NAME']?></span>
		<div class="form__name<?=$arResult['FORM_ERRORS']['SIMPLE_QUESTION_163'] ? " _invalid" : ""?>">
			<input
				id="7"
				type="text" 
				placeholder="<?=$arResult['arQuestions']['SIMPLE_QUESTION_163']['TITLE']?>*"
				name="form_text_7">
		</div>				
		<div class="form__phone<?=$arResult['FORM_ERRORS']['SIMPLE_QUESTION_471'] ? " _invalid" : ""?>">
			<input
				id='8'
				type="text" 
				placeholder="<?=$arResult['arQuestions']['SIMPLE_QUESTION_471']['TITLE']?>*"
				name="form_text_8">
		</div>				
		<div class="form__email">
			<input
				id='9'
				type="text" 
				placeholder="<?=$arResult['arQuestions']['SIMPLE_QUESTION_584']['TITLE']?>"
				name="form_text_9">
		</div>					
		<div class="form__question<?=$arResult['FORM_ERRORS']['SIMPLE_QUESTION_824'] ? " _invalid" : ""?>">
			<textarea
				id='10'
				type="text" 
				placeholder="<?=$arResult['arQuestions']['SIMPLE_QUESTION_824']['TITLE']?>"
				name="form_textarea_10"></textarea>
		</div>		
		<div class="form__policy">
			<input <?=$arResult['FORM_ERRORS_TEXT']['SIMPLE_QUESTION_349'] ? 'checked="checked"' : ''?>
				type="checkbox"
				id="11" 
				value="11"
				name="form_checkbox_SIMPLE_QUESTION_349[]">
			<label for="policy">Согласен с <a href="/upload/politika.docx" trget="_blank">правилами обработки персональных данных</a></label>
		</div>					
		<div class="form__check">
			<input
				id='12'
				type="text" 
				placeholder="&nbsp;"
				name="form_text_12"
				value="&nbsp;">
		</div>
		<div class="form__button">
			<input 
				type="submit" 
				value="<?=$arResult['arForm']['BUTTON']?>" 
				name="web_form_submit">
		</div>
</div>
<?=$arResult["FORM_FOOTER"]?>
<?endif;?>


