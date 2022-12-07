jQuery(document).ready(function(){
    // Main Menu Mobile
    $(function() {
        $('.header-menu__mobile').click(function() {
            $('.header-menu__list').toggleClass('_active');
            $(this).toggleClass('_active');
            $('.wrapper').toggleClass('_menu');
        });
        $('body').click(function (e) {
            if( !$(e.target).closest(".header-menu__list, .header-menu__mobile").length && $(".wrapper._menu").is(':visible')){
                $('.header-menu__list').toggleClass('_active');
                $('.header-menu__mobile').toggleClass('_active');
                $('.wrapper').toggleClass('_menu');
            }
        });
    });

    // Accordion Menu
    $(function() {
        $(window).resize(MobileAccordion);
        MobileAccordion();
        var isMobile = null;

        function MobileAccordion (){
            if($(window).width() < 1801) {
                if (isMobile !== true){
                    isMobile = true;
                    $('.header-menu__list').on('click','a',function(e){
                        var subMenu = $(this).next();
                        if(subMenu.length){
                            if(subMenu.is(':visible')){
                                subMenu.slideUp();
                                $(this).parent().removeClass('_open');
                            } else {
                                subMenu.slideUp();
                                $(this).parent().siblings("._open").removeClass('_open')
                                    .find(" > ul:visible").slideUp();

                                subMenu.slideDown();
                                $(this).parent().addClass('_open');
                            }							if($(this).hasClass('_open')){								return true;							} else {								$(this).addClass('_open');								return false;							}
                        }
                    });
                }else{
                    if (isMobile !== false){
                        isMobile = false;
                    }
                }

            }
        }
    });

    // Product Tab
    $('.products-tab__button').click(function(){
        $('.products-tab__button').removeClass('_active');
        $(this).addClass('_active');

        var num_active = $('.products-tab__section').find('._active').index();
        $('.products-tab__item').removeClass('_active');
        $('.products-tab__item').eq(num_active).addClass('_active');
    });

    // Table Product
    if( "mCustomScrollbar" in $.fn ) {
        $(".scroll").mCustomScrollbar({
            axis:"x",
            documentTouchScroll: false,
            contentTouchScroll: false,
            mouseWheel: false,
            scrollInertia: 0,
            scrollbarPosition: "outside"
        });
    }

    //Inside Menu
    $('.contacts-more__button').click(function() {
        $(this).text("Свернуть");
        $('.contacts-more__button._active').text("Смотреть все телефоны");
        $(this).toggleClass('_active');
        $('.contacts-table').toggleClass('_active');
    });

    // Popup Search
    $(function() {
        $('.search-open').click(function () {
            $("#w-search").fadeIn();
            return false;
        });
        $('.popup__close').click(function (e) {
            if($("#w-search").is(':visible')){
                $("#w-search").fadeOut();
            }
        });
        $('body').click(function (e) {
            if( !$(e.target).closest(".popup__wrapper").length && $("#w-search").is(':visible')){
                $("#w-search").fadeOut();
            }
        });
    });

    // Popup Video
    $(function() {
        $('.open-video').click(function () {
            $("#w-video").fadeIn();
            return false;
        });
        $('.popup__close').click(function (e) {
            if($("#w-video").is(':visible')){
                $("#w-video").fadeOut();
            }
        });
        $('body').click(function (e) {
            if( !$(e.target).closest(".popup__wrapper").length && $("#w-video").is(':visible')){
                $("#w-video").fadeOut();
            }
        });
    });

    // Slider Reviews
    if( "slick" in $.fn ) {
        $('.visualization__list').slick({
            arrows: true, //навигационные кнопоки
            dots: false, //точки навигации
            respondTo: 'window',
            draggable: true, //перелистывания мышью
            infinite: true, //Бесконечная прокрутка
            adaptiveHeight: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1366,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 360,
                    settings: {
                        slidesToShow: 1
                    }
                }

            ]
        });
        $('.news__slider').slick({
            arrows: true, //навигационные кнопоки
            dots: false, //точки навигации
            respondTo: 'window',
            draggable: true, //перелистывания мышью
            //infinite: true, //Бесконечная прокрутка
            adaptiveHeight: true,
            centerMode: true,
            initialSlide: 2,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.news-data__wrapper',
            responsive: [
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint:768,
                    settings: {
                        slidesToShow: 2,
                        centerMode: false,
                        initialSlide: 0
                    }
                },
                {
                    breakpoint: 540,
                    settings: {
                        slidesToShow: 1,
                        initialSlide: 0,
                        centerMode: false
                    }
                }
            ]
        });
        $('.news-data__wrapper').slick({
            arrows: false, //навигационные кнопоки
            dots: false, //точки навигации
            respondTo: 'window',
            draggable: true, //перелистывания мышью
            //infinite: false, //Бесконечная прокрутка
            adaptiveHeight: true,
            centerMode: true,
            speed: 300,
            initialSlide: 2,
            slidesToShow: 5,
            slidesToScroll: 1,
            asNavFor: '.news__slider',
            focusOnSelect: true
        });
        $('.products-gallery').slick({
            arrows: true, //навигационные кнопоки
            dots: false, //точки навигации
            respondTo: 'window',
            draggable: true, //перелистывания мышью
            infinite: true, //Бесконечная прокрутка
            adaptiveHeight: true,
            fade: true,
            speed: 800,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    }

    // Show Big Photo
    if( "fancybox" in $.fn ) {
        $(".show-photo").fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic',
            padding: 0,
            autoCenter: true,
            helpers 			: {
                title 			: {
                    type 				: 'inside'
                }
            }
        });
    }

    // Search
    $('.search__enter').change(function(){
        if ($(this).val() != '') {
            $(this).addClass('_not-empty');
        } else {
            $(this).removeClass('_not-empty');
        }
    });

     // Scroll
     $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 0) {
            $(".header__inner").addClass("_fix");
        } else {
            $(".header__inner").removeClass("_fix");
        }
     });

    // Swimming Logo
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 150) {
            $(".swimming-logo").addClass("_active");
            if  (scroll == $(document).height() - $(window).height()) //Если доскроллили в самый низ, добавляем класс
                {
                    $(".swimming-logo").addClass("_bottom");
                } else {
                    $(".swimming-logo").removeClass("_bottom");
            }

        } else {
            $(".swimming-logo").removeClass("_active");
        }
    });
});