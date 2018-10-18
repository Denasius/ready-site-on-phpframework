$(function () {
  $('.is-order .promo p').on('click', function () {
      $(this).next('.promo-code').toggleClass('promo-code-hidden');
      sessionStorage.setItem('promo-code', 'promo-code-hidden');
  });

  if( sessionStorage.getItem('promo-code') == 'promo-code-hidden' ){
      $('.is-order .promo p').trigger('click');
  }

  $('.is-order .promo .promo-code button').on('click', function () {
      sessionStorage.removeItem('promo-code');
      $('.promo-code').removeClass('promo-code-hidden').fadeOut();
  });
  if (sessionStorage.getItem !== null) {
    $('.cart-order .cart-servise').each(function () {
      for ( var i = 0; i < sessionStorage.length; i++ ) {
        var key = sessionStorage.key(i);
        $(this).attr('data-id-servise', key);
      }
    });
  }
  // Удаление товара из корзины
  $('.delete-from-cart a').on('click', function (e) {
    var mb = $('.info-order .mb');
    e.preventDefault();
    var form = '&deletegoods=' + $(this).attr('data-id');
    $.ajax({
      type: 'post',
      url: $(this).attr('href'),
      data: 'deletegoods_f=1' + form,
      cache: false,
      success: function (result) {
        json = JSON.parse(result);
        if (json.url) {
          window.location.href = json.url;
        } else {
            alert(json.status + ' - ' + json.message);
        }

        // $(this).closest('.info-order .mb').remove();
        // $('.info-order').load( '/cart .info-order' ).hide().fadeIn();
        // $('.cart').load("/cart .cart > *");
        // $('.order-price').load('/cart .order-price > *');
      }
    });
  });

  // Удаление услуги из корзины
  $('.delete-servise-from-cart a').on('click', function (e) {
    e.preventDefault();
    var form = '&deleteserv=' + $(this).attr('data-servise'),
        _this = $(this).closest('.cart-servise').attr('data-id-servise');
    console.log(_this);
    $.ajax({
      type: 'post',
      url: $(this).attr('href'),
      data: 'deleteservise_f=1' + form,
      cache: false,
      success: function (result) {
        json = JSON.parse(result);
        if (json.message) {
            alert(json.status + ' - ' + json.message);
        }else{
          window.location.href = json.url;
        }
        $('.cart').load("/cart .cart > *");
        $('.order-price').load('/cart .order-price > *');
      }
    });
    if ( sessionStorage.getItem !== null ) {
      sessionStorage.removeItem(_this);
    }
  });
});

function redirectPage (url){
  window.location.href = url;
}