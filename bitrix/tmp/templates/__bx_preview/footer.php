<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)	die();?>
<div class="footer-jump"></div>
  <footer class="footer">
    <div class="center">
      <div class="footer-menu clear">
        <?$APPLICATION->IncludeComponent("bitrix:menu", "bottom", Array(
          "ALLOW_MULTI_SELECT" => "N",
          "CHILD_MENU_TYPE" => "child",
          "DELAY" => "N",
          "MAX_LEVEL" => "2",
          "MENU_CACHE_GET_VARS" => array(
            0 => "",
            ),
          "MENU_CACHE_TIME" => "3600",
          "MENU_CACHE_TYPE" => "A",
          "MENU_CACHE_USE_GROUPS" => "Y",
          "ROOT_MENU_TYPE" => "top",
          "USE_EXT" => "Y",
          ),
          false
        );?>
      </div>
      <div class="footer-contacts">
        <div class="contacts-line _tel _footer"><? $APPLICATION->IncludeFile('/local/includes/phone.php', array(), array('MODE' => 'text'))?></div>
        <div class="contacts-line _mail _footer"><? $APPLICATION->IncludeFile('/local/includes/email.php', array(), array('MODE' => 'text'))?></div>
      </div>
      <div class="footer-posters clear">
		  <div class="footer-posters__column _left">
			  <div class="footer-posters-line _01"><a href="http://www.npovk.ru/" target="_blank"><img src="/local/templates/index-en/img/poster-01.png" alt=""></a></div>
			  <?/*<div class="footer-posters-line _02"><a href="/upload/doc/Pamyatka.pdf" target="_blank"><img src="/local/templates/index-en/img/poster-02.png" alt=""></a></div>*/?>
		  </div>
		  <!--<div class="footer-posters__symbolics"><img src="local/templates/index/img/symbolics.png" alt=""></div>-->
		  <div class="footer-posters__column _right">
			  <?/*<div class="footer-posters-line _03"><a href="/upload/doc/PAMYATKA_GOR_RAB.pdf" target="_blank"><img src="/local/templates/index-en/img/poster-03.png" alt=""></a></div>*/?>
			  <div class="footer-posters-line _04"><a href="http://rostec.ru/" target="_blank"><img src="/local/templates/index-en/img/poster-04.png" alt=""></a></div>
		  </div>
      </div>
      <div class="footer__signature clear">
        <div class="footer-signature__company">© 1712-<?=date("Y");?> «Tulsky Oruzheiny Zavod»</div>
        <div class="footer-developer"><a href="https://dialweb.ru/" title="Digital Agency Dial" class="footer-developer__link" target="_blank">Site create Digital Agency Dial <span class="footer-developer__icon"><img src="local/templates/index-en/img/icon-logo.png" alt=""></span></a></div>
      </div>
    </div>
  </footer>
</div>
<?/*<a href="/oruzheynyy-salon/" target="_blank" class="swimming-logo">Armory Salon</a>*/?>
<div id="w-search" class="popup-win">
  <div class="popup__wrapper">
    <div class="popup__close _search"></div>
    <div class="popup__search">
      <div class="center">
        <?$APPLICATION->IncludeComponent("bitrix:search.form", "search", Array(
                "PAGE" => "#SITE_DIR#search/",
                "USE_SUGGEST" => "N"
            )
        );?>
      </div>
    </div>
  </div>
</div>
</body>
</html>