$(function () {
  $('.catalog-navigation-top nav a').on('click', function () {
    var filterTopCategories = $(this).attr('data-filter');
    $('.site-catalog-grid').isotope({
        filter: filterTopCategories
    });
    return false;
  });
})