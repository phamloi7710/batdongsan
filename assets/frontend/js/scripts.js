$(window).load(function(){
	var $height = $("#topbar").height();
	if ($(this).scrollTop() > $height){  
		$('#header').addClass("sticky");
	}
	else{
		$('#header').removeClass("sticky");
	}
	$(window).scroll(function() {
		var $height = $("#topbar").height();
		if ($(this).scrollTop() > $height){  
			$('#header').addClass("sticky");
		}
		else{
			$('#header').removeClass("sticky");
		}
	});
});
function slideEffectAjax() {
	var ww = $(window).width();
	if (ww > 767){
		$('.menu__cart').mouseenter(function() {
			$(this).find(".cart-droplist__content").stop(true, true).slideDown();
		});

		$('.menu__cart').mouseleave(function() {
			$(this).find(".cart-droplist__content").stop(true, true).slideUp();
		});
	} else {
		$('.menu__cart').click(function(){
			$(this).find(".cart-droplist__content").slideToggle(300);
		});
	}
}
jQuery(document).ready(function() {
	"use strict";
	slideEffectAjax();
	if($(window).width() < 1200){
		$('.topbar__right__menu .menu__lv1>a').on('click', function(){
			$(this).toggleClass('active');
			$(this).parent('li').children('ul').slideToggle();
		});
	}
	if($(window).width() < 992){
		$('.catalog__item>a').on('click', function(){
			if($(this).next('ul').length != 0 ){
				return false;
			}else{
				return true;
			}
		});
	}
	var ww = $(window).width();
	if(ww < 768){
		$("#menu").mmenu({
			navbars: [
				{
					position: 'bottom',
					content: [
						
						'<a href="/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>',
						
						
						'<a href="/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>',
						
						
						'<a href="/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>',
						
						
						'<a href="/" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>',
						
						
						'<a href="/" target="_blank"><i class="fa fa-pinterest-square" aria-hidden="true"></i></a>',
						
						
						'<a href="/" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>',
						
					]
				}
			]
		});
	}
	var owl_topseller = $("#topseller .slider-product-list");
	owl_topseller.owlCarousel({
		items : 2, //10 items above 1000px browser width
		itemsDesktop : [1190,2], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,2], // 3 items betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0;
		itemsMobile : [590,1],
		navigation : true,
		navigationText : ["<a class=\"btn-prev\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i></a>","<a class=\"btn-next\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>"],
		slideSpeed : 500,
		pagination : false
	});

	var owl_product_hot = $("#product-hot .slider-product-list");
	owl_product_hot.owlCarousel({
		items : 6, //10 items above 1000px browser width
		itemsDesktop : [1190,5], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,4], // 3 items betweem 900px and 601px
		itemsTablet: [600,3], //2 items between 600 and 0;
		itemsMobile : [480,2],
		navigation : true,
		navigationText : ["<a class=\"btn-prev\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i></a>","<a class=\"btn-next\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>"],
		slideSpeed : 500,
		pagination : false
	});

	var owl_product_sidebar = $(".sidebar-product__topseller .product-sidebar-slide");
	owl_product_sidebar.owlCarousel({
		items : 1, //10 items above 1000px browser width
		itemsDesktop : [1190,1], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,1], // 3 items betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0;
		itemsMobile : [480,1],
		navigation : true,
		navigationText : ["<a class=\"btn-prev\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i></a>","<a class=\"btn-next\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>"],
		slideSpeed : 500,
		pagination : false,
		singleItem: true
	});
	jQuery("#bx-pager").owlCarousel({
		items : 4, //10 items above 1000px browser width
		itemsDesktop : [1024,4], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,4], // 3 items betweem 900px and 601px
		itemsTablet: [600,4], //2 items between 600 and 0;
		itemsMobile : [320,4],
		navigation : true,
		navigationText : ["",""],
		slideSpeed : 500,
		pagination : false
	});
	jQuery(".product__content--related-slide").owlCarousel({
		items : 6, //10 items above 1000px browser width
		itemsDesktop : [1024,5], //5 items between 1024px and 901px
		itemsDesktopSmall : [900,4], // 3 items betweem 900px and 601px
		itemsTablet: [600,3], //2 items between 600 and 0;
		itemsMobile : [320,2],
		navigation : true,
		navigationText : ["<a class=\"btn-prev\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i></a>","<a class=\"btn-next\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a>"],
		slideSpeed : 500,
		pagination : false
	});
	$('body').on('click','.quick-view', function(e){
		e.preventDefault();
		$('#QuickView').remove();
		var handle = $(this).data('handle');
		$.ajax({
			url : '/products/'+handle+'?view=quickview',
			success: function(data){
				$('body').addClass('modal-open');
				var $data = $(data).filter("#QuickView");
				$data.modal();
			}
		});
	});
	$('body').on('click','.product-quickview .product-quickview__close',function(){
		$('#QuickView').modal('hide');
	});
	$('.bxslider').bxSlider({
		pagerCustom: '#bx-pager',
		infiniteLoop: false,
		touchEnabled: false,
		nextText: '<i class="fa fa-chevron-right" aria-hidden="true"></i>',
		prevText: '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
		onSlideAfter: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
			$('.active-slide').removeClass('active-slide');
			$('.bxslider>li').eq(currentSlideHtmlObject + 1).addClass('active-slide');
			$('#bx-pager .owl-wrapper').trigger('owl.goTo', currentSlideHtmlObject);
		},
		onSliderLoad: function () {
			$('.bxslider>li').eq(1).addClass('active-slide')
		},
	});
	CloudZoom.quickStart();
	$.extend($.fn.CloudZoom.defaults, {
		zoomPosition: 'inside',
		autoInside: true,
		disableOnScreenWidth: 991
	});
	window.images_size = {
		is_crop: false,
		ratio_width : 1,
		ratio_height : 1,
	};
	$('.product-item__grid .product-item__thumb img').fakecrop({
		fill: window.images_size.is_crop,
		widthSelector: ".product-item__grid .product-item__thumb",
		ratioWrapper: window.images_size
	});
});