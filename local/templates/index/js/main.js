jQuery(document).ready(function(){
	$('.header-menu__item._inside').hover(function(){
		if ($(window).width() > 1800)
			$(this).children('.header-menu__list._second').css('padding-left', $(this).offset().left);
	}, function(){
		$(this).children('.header-menu__list._second').css('padding-left', 0);
	});

	$('.feedback__button').click(function (){
		$('.modal__feedback').fadeIn(function (){
			$('.modal__feedback').css('display','block');			
		});
		$('.feedback_overlay').fadeIn(function (){
			$('.feedback_overlay').css('display','block');			
		});
	});
	$('.feedback_overlay').click(function (){
		$('.modal__feedback').fadeOut(function (){
			$('.modal__feedback').css('display','none');			
		});
		$('.feedback_overlay').fadeOut(function (){
			$('.feedback_overlay').css('display','none');			
		});
	});
	
	var slidesCount = 0;
	$(".news__slider li").each(function(n) {
		if (!$(this).hasClass("slick-cloned")) 
			slidesCount++;
		
	});
	slidesCount--;

	// meeteng accordeon

	$('.meeting-item__title').click(function() {

		if ($(this).next().is(':visible')) {

			$(this).next().slideUp(); 

		} else {

			$('.meeting-item__content').slideUp();

			$(this).next().slideDown();

		}

	});

$('.nav_knop .knop').click(function(){
        $('.v_knop .blok-V.activ').removeClass('activ'); 
       $('.nav_knop .knop.activ').removeClass('activ');
       $(this).addClass('activ');
       index = $(this).index();
       $('.v_knop .blok-V').eq(index).addClass('activ'); 
   });	


// var intervalID;
// $(".swimming-logo").mouseover(function(){
//     intervalID = setInterval(function(){
//         $(".swimming-logo").fadeTo(300,.5);
//     }, 10)
// });

//этот блок скрипта багал весь сайт
// $(".swimming-logo").addClass('_active');
// function animateLogo(){
// 	$(".swimming-logo").animate({
// 		opacity: 0.1
// 	}, 600, 
// 	function(){
// 		$(".swimming-logo").animate({
// 			opacity: 1
// 		}, 600);
// 	});
// }

// setInterval(function () {
// 	animateLogo()
// }, 1200);

// var logoInterval = setTimeout(function(){
	
// }, 5000);

// $(".swimming-logo").mouseout(function(){
//     clearInterval(intervalID);
// });


	$(document).ready(function(){
		$('.slick-arrow').click(function() {
			var currentSlide = $('.news__slider .slick-current');
			console.log(currentSlide.attr('data-slick-index'));
			if ((currentSlide.attr('data-slick-index') == slidesCount) || (currentSlide.attr('data-slick-index') == 0))  {
				($(this).css('display','none'));
			}
			else 
				$('.slick-arrow').css('display','block');
		});
	});



	// presentation effects

	// $('.presentation-elements__part._big_logo').addClass('_animated');

	$('.presentation-elements__part._peter').addClass('_animated');

	// $('.presentation-elements__part._kustik').addClass('_animated');



	// parallax

	windowCenter = $(window).width()/2;

	$( window ).resize(function() {

		windowCenter = $(window).width()/2;

	});   

	$(".presentation-elements").mousemove(function(event) {

		$('.presentation-elements__part._02').css({'right': 'calc('+((event.clientX-windowCenter)*0.002)+'% + 855px', 'bottom': 'calc('+((event.clientY-windowCenter)*0.002)+'% + 252px)'});

		$('.presentation-elements__part._03').css({'right': 'calc('+((event.clientX-windowCenter)*0.002)+'% + 739px', 'bottom': 'calc('+((event.clientY-windowCenter)*0.002)+'% + 298px)'});

		$('.presentation-elements__part._04').css({'right': 'calc('+((event.clientX-windowCenter)*0.004)+'% + 253px)', 'bottom': 'calc('+((event.clientY-windowCenter)*0.004)+'% + 60px)'});

		$('.presentation-elements__part._05').css({'right': 'calc('+((-event.clientX-windowCenter)*0.003)+'% + 475px)'});

		// $('.presentation-elements__part._06').css({'right': 'calc('+((-event.clientX-windowCenter)*0.01)+'% + 827px)', 'bottom': 'calc('+((event.clientY-windowCenter)*0.006)+'% - 50px)'});

		// $('.presentation-elements__part._07').css({'right': 'calc('+((event.clientX-windowCenter)*0.01)+'% + 130px)', 'bottom': 'calc('+((-event.clientY-windowCenter)*0.006)+'% + 620px)'});

		// $('.presentation-elements__part._08').css({'right': 'calc('+((-event.clientX-windowCenter)*0.001)+'% - 93px)', 'bottom': 'calc('+((event.clientY-windowCenter)*0.006)+'% - 318px)'});

		// $('.presentation-elements__part._09').css({'right': 'calc('+((-event.clientX-windowCenter)*0.0005)+'% - 200px)', 'top': 'calc('+((-event.clientY-windowCenter)*0.0005)+'% + 70px)'});

	});



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
	/*$(window).resize(MobileAccordion);
	MobileAccordion();*/
	/*var isMobile = null;
	function MobileAccordion (){
		if($(window).width() < 1801) {
			if (isMobile !== true){
				isMobile = true;
				$('.header-menu__list').on('click','a',function(e){
					console.log($(this));
					var subMenu = $(this).next();
					if(subMenu.length){
						if(subMenu.is(':visible')){
							subMenu.slideUp();
							$(this).parent().removeClass('_open');
						} else {
							subMenu.slideUp();
							$(this).parent().siblings("._open").removeClass('_open').find(" > ul:visible").slideUp();
							subMenu.slideDown();
							$(this).parent().addClass('_open');
						}
						if($(this).hasClass('_open')){
							return true;
						} else {
							$(this).addClass('_open');
							return false;
						}
					}
				});
			} else {
				if (isMobile !== false){
					isMobile = false;
				}
			}
		}
	}*/

	$('li._inside a._first').on('click touchstart', function(e){
		e = e || window.event;
		var obj = $(this);
		if($(window).width() < 1801){
			if(!obj.hasClass('_open')){
				$('.header-menu').find('._open').removeClass('_open');
				obj.addClass('_open');
				e.preventDefault();
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



		$(".products-tab__content .scroll").mCustomScrollbar("scrollTo", 0, {scrollInertia: 0});

	});



	// Table Product

	if( "mCustomScrollbar" in $.fn ) {

		$(".scroll").mCustomScrollbar({

			axis:"x",

			documentTouchScroll: true,

			contentTouchScroll: true,

			mouseWheel: false,

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


	//Рукаводство

	$('.rukavod-more__button').click(function() {

		$(this).text("Свернуть");

		$('.rukavod-more__button._active').text("Руководство предприятия");

		$(this).toggleClass('_active');

		$('.rukavod-table').toggleClass('_active');

	});



	// Popup Search

	$('.search-open').click(function () {

		$("#w-search").fadeIn();

		$('.search__enter').focus();

		return false;

	});

	$('.popup__close._search').click(function (e) {

		if($("#w-search").is(':visible')){

			$("#w-search").fadeOut();

		}

	});

	$('#w-search').click(function (e) {

		if( !$(e.target).closest(".popup__wrapper").length && $("#w-search").is(':visible')){

			$("#w-search").fadeOut();

		}

	});



	// Slider Reviews

	if( "slick" in $.fn ) {

		$('.visualization__list').slick({

			arrows: true,

			dots: false,

			respondTo: 'window',

			draggable: true,

			infinite: true,

			adaptiveHeight: true,

			speed: 300,

			slidesToShow: 5,

			slidesToScroll: 1,

			responsive: [

			{breakpoint: 1366,settings: {slidesToShow: 4}},

			{breakpoint: 1024,settings: {slidesToShow: 3}},

			{breakpoint: 768,settings: {slidesToShow: 2}},

			{breakpoint: 360,settings: {slidesToShow: 1}}



			]

		});
		$('.news__slider').slick({

			arrows: true,

			dots: false,

			respondTo: 'window',

			draggable: true,

			adaptiveHeight: true,

			centerMode: false,

			initialSlide: slidesCount,

			speed: 300,
			infinite: false,

			slidesToShow: 3,

			slidesToScroll: 1,

			asNavFor: '.news-data__wrapper',

			responsive: [

			{breakpoint: 900,settings: {slidesToShow: 2}},

			{breakpoint:768,settings: {slidesToShow: 2,centerMode: false,initialSlide: 0}},

			{breakpoint: 540,settings: {slidesToShow: 1,initialSlide: 0,centerMode: false}}

			]

		});

		$('.news-data__wrapper').slick({

			arrows: false,

			dots: false,

			respondTo: 'window',

			draggable: true,

			adaptiveHeight: true,

			centerMode: false,
			
			infinite: false,


			speed: 300,

			initialSlide: slidesCount,

			slidesToShow: 5,

			slidesToScroll: 1,

			asNavFor: '.news__slider',

			focusOnSelect: true

		});

		$('.products-gallery').slick({

			arrows: true,

			dots: false,

			respondTo: 'window',

			draggable: true,

			infinite: false,

			adaptiveHeight: true,

			fade: true,

			speed: 800,

			slidesToShow: 1,

			slidesToScroll: 1

		});

	}



	// Fancybox

	if( "fancybox" in $.fn ) {

		$(".show-photo, .fb").fancybox({

			openEffect: 'elastic',

			closeEffect: 'elastic',

			padding: 0,

			autoCenter: true,

			helpers: {title: {type: 'inside'}}

		});

		$(".open-video").click(function() {

			$.fancybox({

				'padding'   : 0,

				'autoScale' : false,

				'title'     : this.title,

				'width'     : 680,

				'helpers'   : {'overlay':  {'locked': false}},

				'height'    : 495,

				'href'      : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),

				'type'      : 'swf',

				'swf'       : {'wmode': 'transparent','allowfullscreen': 'true'}

			});

			return false;

		});

		// $(".consurs_video").click(function() {

		// 	$.fancybox({

		// 		'padding'   : 0,

		// 		'autoScale' : true,

		// 		'width'     : 680,

		// 		'height'    : 495,

		// 	});

		// 	return false;

		// });

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



	 function swimLogo() {

	 	var scroll = $(window).scrollTop();

	 	if (scroll > -1) {

	 		$(".swimming-logo").addClass("_active");
			//$(".swimming-logo").css({"bottom": "80px"});
	 		if  (scroll == $(document).height() - $(window).height()) {
	 			$(".swimming-logo").addClass("_bottom");
	 		} else {

	 			$(".swimming-logo").removeClass("_bottom");

	 		}



	 	} else {

	 		$(".swimming-logo").removeClass("_active");

	 	}

	 }

	 swimLogo();

	// Swimming Logo

	$(window).scroll(function() {

		swimLogo();

	});
	
	$( ".feedback" ).on( "submit", function() {
		yaCounter48530642.reachGoal('zayavka');
		console.log("zayavka ok");
	});
	$( ".feedback" ).on( "submit",  function() {
		yaCounter48530642.reachGoal('zayavka');
		console.log("zayavka ok");
	});
	
	 
	 $("#8").mask("+7 (000) 000-00-00" ,{placeholder: "+7 (___) ___-__-__"});

$('.bx-newslist-img a').fancybox({

});
});

