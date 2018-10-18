$(function () {
  $('.toggle').on('click', function () {
    $(this).toggleClass('active-button')
    $('.toggle span').toggleClass('active-shadow');
    $('.mobile-menu').toggleClass('mobile-menu-active');
  });
});