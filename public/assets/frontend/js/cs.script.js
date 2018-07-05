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
			$('body').on('click', '.add_to_cart', addToCart);
			$('body').on('click', '.add_to_cart_detail', addToCart);
			$('.add_to_cart_detail_quick_view').bind('click', addToCart); 
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
function addToCart(e){
	if (typeof e !== 'undefined') e.preventDefault();
	var $this = $(this);
	var form = $this.closest('form');
	$.ajax({
		type: 'POST',
		url: '/cart/add.js',
		async: false,
		data: form.serialize(),
		dataType: 'json',
		error: addToCartFail,
		success: addToCartSuccess,
		cache: false
	});
}

function addToCartSuccess (jqXHR, textStatus, errorThrown){
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
		+ '<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: relative; z-index: 9;"><span aria-hidden="true">Ă—</span></button>'
		+ '<h4 class="modal-title"><span><i class="fa fa-check" aria-hidden="true"></i></span>ThĂªm vĂ o giá» hĂ ng<br>thĂ nh cĂ´ng</h4></div>'
		+ '<div class="modal-body"><div class="media"><div class="media-left"><div class="thumb-1x1">'
		+ '<img width="70px" src="'+ itemImage +'" alt="'+ jqXHR['title'] +'"></div></div>'
		+ '<div class="media-body"><div class="product-title">'+ jqXHR['name'] +'</div>'
		+ '<div class="product-new-price"><span>' + (jqXHR['price']).formatMoney(0) + ' Ä‘</span></div></div></div>'
		+ '<button class="btn btn-block btn-outline-red" data-dismiss="modal">Tiáº¿p tá»¥c mua hĂ ng</button>'
		+ '<a href="/checkout" class="btn btn-block btn-red">Tiáº¿n hĂ nh thanh toĂ¡n Â»</a></div></div></div>';
		$('#CartMobile').html($popupMobile);
		$('#CartMobile').modal();
		clearTimeout($('#CartMobile').data('hideInterval'));
		$('#CartMobile').data('hideInterval', setTimeout(function(){
			$('#CartMobile').modal('hide');
		}, 3000));
	}
}
function addToCartFail(jqXHR, textStatus, errorThrown){
	var response = $.parseJSON(jqXHR.responseText);
	var $info = '<div class="error">'+ response.description +'</div>';
}
$(document).on('click', ".items-count", function () {
	$(this).parent().children('.items-count').prop('disabled', true);
	var thisBtn = $(this);
	var variantId = $(this).parent().find('.variantID').val();
	var qty =  $(this).parent().children('.number-sidebar').val();
	updateQuantity(qty, variantId);
});
$(document).on('change', ".number-sidebar", function () {
	var variantId = $(this).parent().children('.variantID').val();
	var qty = $(this).val();
	if(qty == 0){
		removeItemCart(variantId);
	}else{
		updateQuantity(qty, variantId);
	}
});
$(document).on('click', ".remove-item-cart", function () {
	var variantId = $(this).attr('data-id');
	removeItemCart(variantId);
});
function updateQuantity (qty, variantId){
	var variantIdUpdate = variantId;
	$.ajax({
		type: "POST",
		url: "/cart/change.js",
		data: {"quantity": qty, "variantId": variantId},
		dataType: "json",
		success: function (cart, variantId) {
			Bizweb.onCartUpdateClick(cart, variantIdUpdate);
		},
		error: function (qty, variantId) {
			Bizweb.onError(qty, variantId)
		}
	})
}
function removeItemCart (variantId){
	var variantIdRemove = variantId;
	$.ajax({
		type: "POST",
		url: "/cart/change.js",
		data: {"quantity": 0, "variantId": variantId},
		dataType: "json",
		success: function (cart, variantId) {
			Bizweb.onCartRemoveClick(cart, variantIdRemove);
			$('.productid-'+variantIdRemove).remove();
			if($('.list-item-cart>li').length == '0' ){
				$('.mini-list').html('<div class="no-item"><p>KhĂ´ng cĂ³ sáº£n pháº©m nĂ o trong giá» hĂ ng.</p></div>');
			}
			if($('.cart-desktop__tbody>div').length == 0 ){
				$('.cart-desktop__close').trigger("click");
			}
			if($('.cart-tbody>div').length == '0' ){
				$('.bg-cart-page').remove();
				$('.bg-cart-page-mobile').remove();
				jQuery('<div class="bg-cart-page" style="min-height: auto"><p>KhĂ´ng cĂ³ sáº£n pháº©m nĂ o trong giá» hĂ ng. Quay láº¡i <a href="/">cá»­a hĂ ng</a> Ä‘á»ƒ tiáº¿p tá»¥c mua sáº¯m.</p></div>').appendTo('.cart .container');
			}
		},
		error: function (variantId, r) {
			Bizweb.onError(variantId, r)
		}
	})
}