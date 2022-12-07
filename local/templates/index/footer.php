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
        <div class="contacts-line _adress _footer"><? $APPLICATION->IncludeFile('/local/includes/adress.php', array(), array('MODE' => 'text'))?></div>
		<div class="contacts-line _adress _footer"><? $APPLICATION->IncludeFile('/local/includes/politika.php', array(), array('MODE' => 'text'))?></div>
	<div class="contacts-line _adress _footer"><? $APPLICATION->IncludeFile('/local/includes/karta.php', array(), array('MODE' => 'text'))?></div>
  </div>
      <div class="footer-posters clear">
        <!--div class="footer-posters__column _left"-->
<div class="footer-posters-line _011"><!--noindex--><a href="https://soyuzmash.ru/regional-offices/tulskoe-regionalnoe-otdelenie" target="_blank" rel="nofollow"><img src="https://www.tulatoz.ru/upload/medialibrary/95d/_-_-1.png" class="posterlogo1" alt="Союз Машиностроителей"></a><!--/noindex--></div>
<div class="footer-posters-line _03"><a href="/upload/doc/paotoz05.pdf" target="_blank"><img src="/local/templates/index/img/05.png" alt="Горячая линия по противодействию коррупции ПАО «Императорский Тульский оружейный завод»"></a></div>
<?/*<div class="footer-posters-line _01"><!--noindex--><a href="http://www.npovk.ru/" target="_blank" rel="nofollow"><img src="/local/templates/index/img/poster-01.png" alt="Высокоточные комплексы"></a><!--/noindex--></div>
<div class="footer-posters-line _02"><a href="/upload/doc/Pamyatka.pdf" target="_blank"><img src="/local/templates/index/img/poster-02.png" alt="Высокоточные комплексы горячая линия"></a></div>*/?>
        
        <!--<div class="footer-posters__symbolics"><img src="local/templates/index/img/symbolics.png" alt=""></div>-->
        <!--<div class="footer-posters__column _right">-->

		  <?/*<div class="footer-posters-line _03"><a href="/upload/doc/PAMYATKA_GOR_RAB.pdf" target="_blank"><img src="/local/templates/index/img/poster-03.png" alt="Горячая линия Ростех"></a></div>
<div class="footer-posters-line _04"><!--noindex--><a href="http://rostec.ru/" target="_blank" rel="nofollow"><img src="/local/templates/index/img/poster-04.png" alt="Ростех"></a><!--/noindex--></div>*/?>
        
      </div>
      <div class="footer__signature clear">
        <div class="footer-signature__company">© 1712-<?=date("Y");?> «Императорский Тульский оружейный завод»</div>
        <div class="footer-developer"><a href="https://dialweb.ru/" title="Digital Agency Dial" class="footer-developer__link" target="_blank">Продвижение сайта Digital Agency DIAL</a></div>
      </div>
      <div class="footer__count">
        <!--LiveInternet counter-->
        <script type="text/javascript" data-skip-moving="true"><!--
          document.write("<a href='http://www.liveinternet.ru/click' "+
          "target=_blank><img src='//counter.yadro.ru/hit?t44.7;r"+
          escape(document.referrer)+((typeof(screen)=="undefined")?"":
          ";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
          screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
          ";"+Math.random()+
          "' alt='' title='LiveInternet' "+
          "border='0' width='31' height='31'><\/a>")
          //-->
        </script>
        <!--/LiveInternet-->    
      </div>
    </div>
  </footer>
</div>
<a href="/oruzheynyy-salon/" target="_blank" class="swimming-logo"></a>
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

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48530642 = new Ya.Metrika({
                    id:48530642,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48530642" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-100690756-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-100690756-7');
</script>
	<!-- /Global site tag (gtag.js) - Google Analytics -->

</body>
</html>