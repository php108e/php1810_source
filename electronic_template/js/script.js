$(document).ready(function(){
	$('.add-wishlist').hide();
	$('.add-compare').hide();

	$(".item-product-func-wishlist").mouseover(function(){
		$('.add-wishlist').show();
		$('.add-cart').hide();

		$('.btn-add-cart').removeClass('col-xs-6');
		$('.btn-add-cart').addClass('col-xs-3');
		$('.btn-add-wishlist').removeClass('col-xs-3');
		$('.btn-add-wishlist').addClass('col-xs-6');

	});
	$(".item-product-func-wishlist").mouseout(function(){
		$('.add-wishlist').hide();
		$('.add-cart').show();

		$('.btn-add-cart').removeClass('col-xs-3');
		$('.btn-add-cart').addClass('col-xs-6');
		$('.btn-add-wishlist').removeClass('col-xs-6');
		$('.btn-add-wishlist').addClass('col-xs-3');
	});


	$(".item-product-func-compare").mouseover(function(){
		$('.add-compare').show();
		$('.add-wishlist').hide();
		$('.add-cart').hide();

		$('.btn-add-cart').removeClass('col-xs-6');
		$('.btn-add-cart').addClass('col-xs-3');
		$('.btn-add-wishlist').removeClass('col-xs-6');
		$('.btn-add-wishlist').addClass('col-xs-3');

		$('.btn-add-compare').removeClass('col-xs-3');
		$('.btn-add-compare').addClass('col-xs-6');


	});
	$(".item-product-func-compare").mouseout(function(){
		$('.add-compare').hide();
		$('.add-wishlist').hide();
		$('.add-cart').show();

		$('.btn-add-cart').removeClass('col-xs-3');
		$('.btn-add-cart').addClass('col-xs-6');
		$('.btn-add-wishlist').removeClass('col-xs-6');
		$('.btn-add-wishlist').addClass('col-xs-3');

		$('.btn-add-compare').removeClass('col-xs-6');
		$('.btn-add-compare').addClass('col-xs-3');
	});


});