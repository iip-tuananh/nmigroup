$(document).ready(function ($) {
	awe_backtotop();
	awe_category();
	awe_hidePopup();
	$(window).on('load resize', function () {
		resizeImage();
	});



	$('#trigger-mobile').click(function(){
		$("#nav").toggleClass('active');
		$(this).toggleClass('active');
	});
	$('.plus-nClick1').click(function(e){
		e.preventDefault();
		$(this).parents('.has-childs').toggleClass('opened');
		$(this).parents('.has-childs').children('ul').slideToggle(100);
		$(this).parents('.has-childs').children('.mega-content').slideToggle(100);
	});
	$('.plus-nClick2').click(function(e){
		e.preventDefault();
		$(this).parents('.has-childs2').toggleClass('opened');
		$(this).parents('.has-childs2').children('ul').slideToggle(100);
	});
	$('.plus-nClick3').click(function(e){
		e.preventDefault();
		$(this).parents('.evo-mega-level1').toggleClass('opened');
		$(this).parents('.evo-mega-level1').children('.evo-mega-level2').slideToggle(100);
	});


	$('.ng-has-child1 a .svg1').on('click', function(e){
		e.preventDefault();var $this = $(this);
		$this.parents('.ng-has-child1').find('.ul-has-child1').stop().slideToggle();
		$(this).toggleClass('active');
		return false;
	});
	$('.ng-has-child1 .ul-has-child1 .ng-has-child2 a .svg2').on('click', function(e){
		e.preventDefault();var $this = $(this);
		$this.parents('.ng-has-child1 .ul-has-child1 .ng-has-child2').find('.ul-has-child2').stop().slideToggle();
		$(this).toggleClass('active');
		return false;
	});
	if($('.cart_body>div').length == '0' ){
		$('.cart-footer').hide();
		jQuery('<div class="cart-empty">'
			   + '<span class="empty-icon"><i class="ico ico-cart"></i></span>'
			   + '<div class="btn-cart-empty">'
			   + '<a class="btn btn-default" href="/" title="Tiếp tục mua hàng">Tiếp tục mua hàng</a>'
			   + '</div>'
			   + '</div>').appendTo('.cart_body');
	};
	$(".rte table").wrap( "<div class='table-responsive'></div>" );
	if ($('.addThis_listSharing').length > 0){
		$(window).scroll(function(){
			if(jQuery(window).scrollTop() > 100 ) {
				jQuery('.addThis_listSharing').addClass('is-show');
			} else {
				jQuery('.addThis_listSharing').removeClass('is-show');
			}
		});
	};
});
function resizeImage() {
	setTimeout(function(){
		$('.product-block-item:not(.viewed)').each(function(){
			var thumbset = $(this).find('.product-transition');
			thumbset.css({'height':thumbset.width()+'px'});
		})
	},500);
}
$(document).ready(function(){
	
	var wDWs = $(window).width();
	if (wDWs < 767) {
		$('.footer-click h4').click(function(e){
			$(this).toggleClass('current');
			$(this).next('div').toggleClass("current");
		});
	}

	if (wDWs < 991) {
		$('.close-menu, .opacity_menu').on('click', function(){
			$('.heade_menunavs').removeClass('current');
			$('.opacity_menu').removeClass('current');
		})
		$('.category-action').on('click', function(){
			$('.heade_menunavs').addClass('current');
			$('.opacity_menu').addClass('current');
		})
		$('.item_big li .fa').click(function(e){
			if($(this).hasClass('current')) {
				$(this).closest('ul').find('li, .fa').removeClass('current');
			} else {
				$(this).closest('ul').find('li, .fa').removeClass('current');
				$(this).closest('li').addClass('current');
				$(this).addClass('current');
			}
		});
	}


});
$(document).on('click','.overlay, .close-popup, .btn-continue, .fancybox-close', function() {   
	awe_hidePopup('.awe-popup'); 	
	setTimeout(function(){$('.loading').removeClass('loaded-content');},500);
	return false;
})
function awe_showNoitice(selector) {
	$(selector).animate({right: '0'}, 500);
	setTimeout(function(){$(selector).animate({right: '-300px'}, 500);}, 3500);
}  window.awe_showNoitice=awe_showNoitice;
function awe_showLoading(selector) {
	var loading = $('.loader').html();
	$(selector).addClass("loading").append(loading); 
}  window.awe_showLoading=awe_showLoading;
function awe_hideLoading(selector) {
	$(selector).removeClass("loading"); 
	$(selector + ' .loading-icon').remove();
}  window.awe_hideLoading=awe_hideLoading;
function awe_showPopup(selector) {
	$(selector).addClass('active');
}  window.awe_showPopup=awe_showPopup;
function awe_hidePopup(selector) {
	$(selector).removeClass('active');
}  window.awe_hidePopup=awe_hidePopup;
function awe_convertVietnamese(str) { 
	str= str.toLowerCase();str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");str= str.replace(/đ/g,"d"); str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");str= str.replace(/-+-/g,"-");str= str.replace(/^\-+|\-+$/g,""); 
	return str; 
} window.awe_convertVietnamese=awe_convertVietnamese;
function awe_category(){
	$('.nav-category .Collapsible__Plus').click(function(e){
		$(this).parent().toggleClass('active');
	});
	$('.nav-category .fa-plus').click(function(e){
		$(this).toggleClass('fa-minus fa-plus');
		$(this).parent().toggleClass('active');
	});
	$('.nav-category .fa-minus').click(function(e){
		$(this).toggleClass('fa-plus');
		$(this).parent().toggleClass('active');
	});
} window.awe_category=awe_category;
function awe_backtotop() { 
	$(window).scroll(function() {
		$(this).scrollTop() < 200 ? $('.backtop').addClass('hidden') : $('.backtop').removeClass('hidden')
	});
	$('.backtop').click(function() {
		return $("body,html").animate({
			scrollTop: 0
		}, 800), !1
	});
} window.awe_backtotop=awe_backtotop;
$('.btn-close').click(function() {
	$(this).parents('.dropdown').toggleClass('open');
}); 
$(document).on('keydown','#qty, #quantity-detail, .number-sidebar, .number-phone',function(e){-1!==$.inArray(e.keyCode,[46,8,9,27,13,110,190])||/65|67|86|88/.test(e.keyCode)&&(!0===e.ctrlKey||!0===e.metaKey)||35<=e.keyCode&&40>=e.keyCode||(e.shiftKey||48>e.keyCode||57<e.keyCode)&&(96>e.keyCode||105<e.keyCode)&&e.preventDefault()});
var buy_now = function(id) {
	var quantity = 1;
	var params = {
		type: 'POST',
		url: '/cart/add.js',
		data: 'quantity=' + quantity + '&variantId=' + id,
		dataType: 'json',
		success: function(line_item) {
			window.location = '/checkout';
		},
		error: function(XMLHttpRequest, textStatus) {
			Bizweb.onError(XMLHttpRequest, textStatus);
		}
	};
	jQuery.ajax(params);
}





var SuccessNoti = function(SuccessText){
	$.notify({
		// options
		title: '<strong>Tuyệt vời</strong><br>',
		message: SuccessText,
		icon: 'glyphicon glyphicon-ok'
	},{
		// settings
		element: 'body',
		//position: null,
		type: "success",
		//allow_dismiss: true,
		//newest_on_top: false,
		showProgressbar: false,
		placement: {
			from: "top",
			align: "right"
		},
		offset: 20,
		spacing: 10,
		z_index: 1031,
		delay: 3300,
		timer: 1000,
		url_target: '_blank',
		mouse_over: null,
		animate: {
			enter: 'animated fadeInDown',
			exit: 'animated fadeOutRight'
		},
		onShow: null,
		onShown: null,
		onClose: null,
		onClosed: null,
		icon_type: 'class',
	});
}
var InfoNoti = function(InfoText){
	$.notify({
		// options
		title: '<strong>Thông báo</strong><br>',
		message: InfoText,
		icon: 'glyphicon glyphicon-info-sign',
	},{
		// settings
		element: 'body',
		position: null,
		type: "info",
		allow_dismiss: true,
		newest_on_top: false,
		showProgressbar: false,
		placement: {
			from: "top",
			align: "right"
		},
		offset: 20,
		spacing: 10,
		z_index: 1031,
		delay: 3300,
		timer: 1000,
		url_target: '_blank',
		mouse_over: null,
		animate: {
			enter: 'animated bounceInDown',
			exit: 'animated bounceOutUp'
		},
		onShow: null,
		onShown: null,
		onClose: null,
		onClosed: null,
		icon_type: 'class',
	});
}
var ErrorNoti = function(ErrorText){
	$.notify({
		// options
		title: '<strong>Thông báo</strong><br',
		message: ErrorText,
		icon: 'glyphicon glyphicon-info-sign',
	},{
		// settings
		element: 'body',
		position: null,
		type: "warning",
		allow_dismiss: true,
		newest_on_top: false,
		showProgressbar: false,
		placement: {
			from: "top",
			align: "right"
		},
		offset: 20,
		spacing: 10,
		z_index: 1031,
		delay: 3300,
		timer: 1000,
		url_target: '_blank',
		mouse_over: null,
		animate: {
			enter: 'animated bounceInDown',
			exit: 'animated bounceOutUp'
		},
		onShow: null,
		onShown: null,
		onClose: null,
		onClosed: null,
		icon_type: 'class',
	});
}
$('.section_product .title-links .btn-more-cate').on('click', function(e){
	e.preventDefault();
	var $this = $(this);
	$this.parents('.section_product .title-links').find('.block-cate').stop().slideToggle();
	$(this).toggleClass('active')
	return false;
});