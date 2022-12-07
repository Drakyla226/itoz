<? require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Loader;

Loader::includeModule('iblock');

$IBLOCK_ID = 1;
$ELEMENT_ID = $_GET['ID'];
// $ELEMENT_ID = 84;
// $ELEMENT_ID = 4574;

if ($_SERVER['HTTPS'])
    $siteUrl = 'https://' . $_SERVER['HTTP_HOST'];
else
    $siteUrl = 'http://' . $_SERVER['HTTP_HOST'];

$arElement = CIBlockElement::GetList([], ['IBLOCK_ID' => $IBLOCK_ID, 'ID' => $ELEMENT_ID], false, false, ["NAME", "DETAIL_PAGE_URL", "PREVIEW_PICTURE", "DETAIL_PICTURE", "DETAIL_TEXT", "PREVIEW_TEXT", "ACTIVE_FROM", "TIMESTAMP_X"])->GetNext();

$detailUrl = $siteUrl . $arElement['DETAIL_PAGE_URL'];
if($arElement['DETAIL_PICTURE']){
    $imageUrl = Cfile::ResizeImageGet($arElement['DETAIL_PICTURE'], ["width" => 400, "height" => 400], BX_RESIZE_IMAGE_PROPORTIONAL, true);
}else{
    $imageUrl = Cfile::ResizeImageGet($arElement['PREVIEW_PICTURE'], ["width" => 400, "height" => 400], BX_RESIZE_IMAGE_PROPORTIONAL, true);
}
$pubDate = FormatDate("r", strtotime($arElement['ACTIVE_FROM']));

global $USER;
if ($USER->IsAdmin()) {
// echo "<pre>";
// print_r($arElement);
// echo "</pre>";
}
?>

<!doctype html>
<html ⚡>
<head>
    <meta charset="utf-8">
    <title><?= $arElement['NAME'] ?></title>
    <link rel="canonical" href="<?= $detailUrl ?>">
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
    <style amp-custom>
        .container {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 15px;
            box-sizing: border-box;
        }
        .header-logo {
            display: flex;
            align-items: flex-end;
            justify-content: center;
            padding: 15px 0;
        }
        .presentation-logo__signature {
            color: #6c0316;
            display: inline-block;
            /* font: 18px/22px "Gotham Pro",sans-serif; */
            padding-top: 67px;
            vertical-align: top;
            text-align: left;
            margin-left: 7px;
            font-weight: 600;
        }
        .header {
            border-bottom: 1px solid #cecece;
        }
        article {
            overflow: hidden;
        }
        article p {
            text-align: justify;
        }
        .article-image {
            float: left;
            margin-right: 15px;
            margin-bottom: 15px;
        }
        footer {
            border-top: 1px solid #cecece;
            padding-top: 20px;
        }
        .footer {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .footer-info {
            margin-right: 130px;
            font-size: 12px;
            line-height: 17px;
            color: #777;
        }
        .footer-logo {
            margin-bottom: 24px;
        }
        .footer-copyright {
            color: #272325;
            font: 14px/21px "Gotham Pro",sans-serif;
        }
        .footer-interface {
            flex-shrink: 0;
            display: flex;
            width: 100%;
            justify-content: center;
        }
        .footer-subscribe__title {
            font-weight: bold;
            font-size: 16px;
            line-height: 23px;
            color: #a07349;
            margin-bottom: 17px;
        }
        .footer-subscribe__list {
            display: flex;
            flex-direction: column;
        }
        .footer-subscribe__item {
            font-size: 12px;
            color: #272325;
            height: 17px;
            margin-bottom: 18px;
            text-decoration: none;
            display: flex;
            align-items: flex-end;
            transition: all .4s ease-in-out;
        }
        .footer-social {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 80px;
            width: 100%;
        }
        .footer-social__item {
            margin-right: 30px;
            text-decoration: none;
            transition: all .4s ease-in-out;
            display: flex;
            max-width: 50px;
            width: 100%;
        }
        .footer-social__item:last-child {
            margin-right: 0;
        }
        .footer-social__item img {
            width: 100%;
            object-fit: contain;
            flex-shrink: 0;
        }
        .footer-request {
            margin-top: 0;
            font-size: 12px;
            line-height: 24px;
            color: #272325;
        }
        .footer-request a {
            color: #272325;
            font-weight: bold;
            display: block;
            text-decoration: none;
            transition: all .4s ease-in-out;
        }
        .footer-contacts {
            margin-bottom: 15px;
        }
        .contacts-line {
            margin-bottom: 5px;
        }
        .contacts-line a {
            text-decoration: none;
            color: #272325;
        }
        .footer-social .instagramm {
            background: url(/local/templates/index/img/icons/instagram.svg) center no-repeat;
            -webkit-background-size: 35px 35px;
            background-size: 35px 35px;
            /* padding-left: 29px; */
            text-decoration: none;
            width: 50px;
            height: 50px;
        }
        .footer-social .facebook {
            background: url(/local/templates/index/img/icons/facebook.svg) center no-repeat;
            -webkit-background-size: 35px 35px;
            background-size: 35px 35px;
            /* padding-left: 29px; */
            text-decoration: none;
            width: 50px;
            height: 50px;
        }
        .origin_site {
            padding: 5px 10px;
            border: 1px solid gray;
            border-radius: 3px;
            background: rgba(255, 255, 255, 0.6);
            border-color: #7b7b7b;
            max-width: 140px;
            margin: 0 auto;
            margin-bottom: 20px;
        }
        .origin_site > span > a {
            text-decoration: none;
            color: #272325;
        }
        @media screen and (min-width: 768px) and (max-width: 768px) {
            .footer {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                margin-bottom: 20px;
                align-items: center;
            }
            .footer-contacts {
                margin-bottom: 15px;
                width: 100%;
                display: flex;
                justify-content: space-around;
            }
            .footer-info {
                margin-right: 0px;
                font-size: 12px;
                line-height: 17px;
                color: #777;
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                align-items: center;
            }

        }
        @media screen and (max-width: 560px) {
            .container {
                text-align: center;
            }
            .header-logo {
                /* flex-direction: column; */
            }
            .article-image {
                display: block;
                float: none;
                max-width: 100%;
                margin: 0 auto;
            }
            .footer {
                flex-direction: column;
                align-items: center;
            }
            .footer-info {
                margin: 0;
            }
            .footer-subscribe__item {
                display: inline;
            }
        }
    </style>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "headline": "<?= $arElement['NAME'] ?>",
            "image": [
                "<?= $imageUrl['src'] ?>"
            ],
            "datePublished": "<?= $pubDate ?>",
            "publisher": {
                "@type": "Organization",
                "name": "«Дом Бобра»",
                "logo": {
                  "@type": "ImageObject",
                  "url": "/local/templates/site/img/logo.png",
                  "width": 200,
                  "height": 72
                }
            },
            "author": "«Дом Бобра»"
        }


    </script>
    <style amp-boilerplate>
        body {
            -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
            animation: -amp-start 8s steps(1, end) 0s 1 normal both
        }
        @-webkit-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }
        @-moz-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }
        @-ms-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }
        @-o-keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }
        @keyframes -amp-start {
            from {
                visibility: hidden
            }
            to {
                visibility: visible
            }
        }
    </style>
    <noscript>
        <style amp-boilerplate>
            body {
                -webkit-animation: none;
                -moz-animation: none;
                -ms-animation: none;
                animation: none
            }
        </style>
    </noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
</head>
<body>
<header class="header">
    <div class="container">
        <div class="header-logo">
            <div class="header-logo__image">
                <amp-img src="/local/templates/index/img/logo.png" width="70" height="100" alt="logo">
            </div>
            <div class="presentation-logo__signature">Сохраняя традиции. <br>Приумножая качество.</div>
        </div>
    </div>
</header>
<main>
    <article>
        <div class="container">
            <h1><?= $arElement['NAME'] ?></h1>
            <?
            if(!empty($imageUrl['src'])){?>
                <amp-img src=<?= $imageUrl['src'] ?> class="article-image"
                     width="<?= $imageUrl['width'] ?>" height="<?= $imageUrl['height'] ?>"></amp-img>
                    
            <?}else{?>
                <amp-img src=/bitrix/templates/site/img/no-photo.png class="article-image"
                     width="150" height="150" style="margin-bottom:20px;"></amp-img>
            <?}?>
            
            <?if(!empty($arElement['DETAIL_TEXT'])){?>
                <p><span><b>Описание:</b></span><br><?= $arElement['DETAIL_TEXT'] ?></p>
            <?}else{?>
                <p><span><b>Описание:</b></span><br><?= $arElement['PREVIEW_TEXT'] ?></p>
            <?}?>
            <div class="origin_site"><span><a href="<?=$arElement['DETAIL_PAGE_URL']?>">Читать на сайте</a></span></div>
        </div>
    </article>
</main>
<footer>
    <div class="container">
        <div class="footer">
            <div class="footer-contacts">
                <div class="contacts-line _tel _footer"><a href="tel:+74872321499">+7 (4872) 32-14-99</a></div>
                <div class="contacts-line _mail _footer"><a>mail@tulatoz.ru</a></div>
                <div class="contacts-line _adress _footer"><a href="">300002, г. Тула, ул. Советская, 1 А</a></div>
            </div>
            <div class="footer-info">
                <a class="footer-logo" href="/">
                    <amp-img src="/local/templates/index/img/logo.png" width="70" height="100" alt="logo">
                </a>
                <p class="footer-copyright">
                © 1712 - <?echo date('Y');?> «Тульский оружейный завод».
                </p>
            </div>
            
            <div class="footer-interface">
                <div class="footer-social">
                <a class="instagramm" href="https://www.instagram.com/Tozmedia/" target="_blank"></a>
                <a class="facebook" href="https://www.facebook.com/TOZMedia/" target="_blank"></a>
                    
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
