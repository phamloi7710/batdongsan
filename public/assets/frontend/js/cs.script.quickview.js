/**
 * Look under your chair! console.log FOR EVERYONE!
 *
 * @see http://paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
 */
(function(b){function c(){}for(var d="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,timeStamp,profile,profileEnd,time,timeEnd,trace,warn".split(","),a;a=d.pop();){b[a]=b[a]||c}})((function(){try
{console.log();return window.console;}catch(err){return window.console={};}})());



/**
 * Page-specific call-backs
 * Called after dom has loaded.
 */
var GLOBAL = {
	common : {
		init: function(){
			$('.add_to_cart_detail_quick_view').bind('click', addToCartQuickView);
		}
	},

	templateIndex : {
		init: function(){

		}
	},

	templateProduct : {
		init: function(){

		}
	},

	templateCart : {
		init: function(){

		}
	}

}
var UTIL = {
	fire : function(func,funcname, args){
		var namespace = GLOBAL;
		funcname = (funcname === undefined) ? 'init' : funcname;
		if (func !== '' && namespace[func] && typeof namespace[func][funcname] == 'function'){
			namespace[func][funcname](args);
		}
	},

	loadEvents : function(){
		var bodyId = document.body.id;

		// hit up common first.
		UTIL.fire('common');

		// do all the classes too.
		$.each(document.body.className.split(/\s+/),function(i,classnm){
			UTIL.fire(classnm);
			UTIL.fire(classnm,bodyId);
		});
	}

};
$(document).ready(UTIL.loadEvents);
/**
 * Ajaxy add-to-cart
 */
Number.prototype.formatMoney = function(c, d, t){
	var n = this, 
		c = isNaN(c = Math.abs(c)) ? 2 : c, 
		d = d == undefined ? "." : d, 
		t = t == undefined ? "." : t, 
		s = n < 0 ? "-" : "", 
		i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", 
		j = (j = i.length) > 3 ? j % 3 : 0;
	return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};
function addToCartQuickView(e){
	if (typeof e !== 'undefined') e.preventDefault();
	var $this = $(this);
	var form = $this.closest('form');
	$.ajax({
		type: 'POST',
		url: '/cart/add.js',
		async: false,
		data: form.serialize(),
		dataType: 'json',
		error: addToCartQuickViewFail,
		success: addToCartQuickViewSuccess,
		cache: false
	});
}

function addToCartQuickViewSuccess (jqXHR, textStatus, errorThrown){
	$.ajax({
		type: 'GET',
		url: '/cart.js',
		async: false,
		cache: false,
		dataType: 'json',
		success: function (cart){
			Bizweb.updateCartFromForm(cart, '.mini-list');
			Bizweb.updateCartPopupForm(cart, '#CartDesktop .cart-desktop__tbody');
		}
	});
	jQuery('.cart-desktop__status_item').html(jqXHR['name']).attr('href', jqXHR['url']);
	var windowW = $(window).width();
	if(windowW > 767){
		$('#QuickView').modal('hide');
		$('#CartDesktop').modal();
	}else{
		$('#CartMobile').html('');
		var itemImage = '';
		if(jqXHR['image'] == null){
			itemImage = 'http://bizweb.dktcdn.net/thumb/medium/assets/themes_support/noimage.gif';
		}else{
			itemImage = Bizweb.resizeImage(jqXHR['image'], 'small');
		}
		var $popupMobile = '<div class="modal-dialog"><div class="modal-content"><div class="modal-header">'
		+ '<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative; z-index: 9;"><span aria-hidden="true">×</span></button>'
		+ '<h4 class="modal-title"><span><i class="fa fa-check" aria-hidden="true"></i></span>Thêm vào giỏ hàng<br>thành công</h4></div>'
		+ '<div class="modal-body"><div class="media"><div class="media-left"><div class="thumb-1x1">'
		+ '<img width="70px" src="'+ itemImage +'" alt="'+ jqXHR['title'] +'"></div></div>'
		+ '<div class="media-body"><div class="product-title">'+ jqXHR['name'] +'</div>'
		+ '<div class="product-new-price"><span>' + (jqXHR['price']).formatMoney(0) + ' đ</span></div></div></div>'
		+ '<button class="btn btn-block btn-outline-red" data-dismiss="modal">Tiếp tục mua hàng</button>'
		+ '<a href="/checkout" class="btn btn-block btn-red">Tiến hành thanh toán »</a></div></div></div>';
		$('#CartMobile').html($popupMobile);
		$('#CartMobile').modal();
		clearTimeout($('#CartMobile').data('hideInterval'));
		$('#CartMobile').data('hideInterval', setTimeout(function(){
			$('#CartMobile').modal('hide');
		}, 3000));
	}
}
function addToCartQuickViewFail(jqXHR, textStatus, errorThrown){
	var response = $.parseJSON(jqXHR.responseText);
	var $info = '<div class="error">'+ response.description +'</div>';
}