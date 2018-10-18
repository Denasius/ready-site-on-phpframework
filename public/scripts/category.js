$(function () {
  $('.servise-details').on('click', 'a', function () {
      $(this).closest('.servise-description').find('.servise-details-hidden').slideToggle();
      $(this).next('i.fa').toggleClass('fa-transform');
      return false;
  });
  $('.link_text').mousemove(function (e) {
      var showntext = $(this).attr('data-showtext');
      $('#linktext').text(showntext).show().css({
          'top': e.clientY - 100,
          'left': e.clientX - 80,
          'z-index': 2
      });
  }).mouseout(function () {
      $('#linktext').hide();
  });

  $('.add-to-cart a').on('click', function () {
      var _this = $(this).parent().parent().parent().parent(),
          form = '&id=' + $(this).attr('id');
      _this.addClass('row-hidden');
      sessionStorage.setItem(_this.attr('id'), 'none');
      $.ajax({
          type: 'POST',
          url: $(this).attr('href'),
          data: 'servise_f=1' + form,
          cache: false,
          success: function (result) {
              $('#count').text(+$('#count').text()+1);
              $('html, body').animate({ scrollTop: 0 }, 'slow');
          }
      });
      return false;
  });

  if (sessionStorage.getItem !== null) {
      for ( var i = 0; i < sessionStorage.length; i++ ) {
          var key = sessionStorage.key(i);
          var val = sessionStorage.getItem(key);
          $('#' + key).css({'display' : val});
      }
  }
  $('button.btn-ord').on('click', function () {
      $('#count').text(+$('#count').text()+1);
  })
});
function redirectPage (url){
    window.location.href = url;
}