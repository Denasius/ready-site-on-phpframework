$(function () {
    if ( $('.catalog-navigation nav a').has('.dropdown-menu') ) {
        $('.dropdown-menu').each(function () {
            $(this).append('<div class="keyboard"><img class="arrow-down" src="/public/img/assets/catalog/keyboard-right-arrow-button.png" alt="Стрелка"><img class="arrow-up" src="/public/img/assets/catalog/keyboard-right-arrow-button-active.png" alt="Стрелка"></div>');
        });
    }
    
    $('.small-menu a').on('click', function () {
        $('.small-menu a').removeClass('small-menu-a-active');
        $(this).toggleClass('small-menu-a-active');
        $('.wrapper .bread-crumbs ul li:last-child a').text($(this).attr('data-menu'));
        // var filter = $(this).attr('data-filter');
        // $('.banners').isotope({
        //     filter: filter,
        //     hiddenStyle: {
        //         opacity: 0
        //     },
        //     visibleStyle: {
        //         opacity: 1
        //     }
        // });
        // $('.site-catalog-grid').isotope({
        //     filter: filter
        // });
        // return false;
    });
    
    $('.catalog-navigation nav a').each(function () {
        $(this).attr('data-menu', $(this).text());
    });
    
    // $('.catalog-navigation > nav > a').on('click',function () {
    //     $('.wrapper .bread-crumbs ul li:last-child a').text($(this).attr('data-menu'));
    //     var filterMainCategories = $(this).attr('data-filter');
    //     $('.banners').isotope({
    //         filter: filterMainCategories,
    //         hiddenStyle: {
    //             opacity: 0
    //         },
    //         visibleStyle: {
    //             opacity: 1
    //         }
    //     });
    //     $('.site-catalog-grid').isotope({
    //         filter: filterMainCategories
    //     });
    //     return false;
    // });
    
    $('.select-block-cat .select-options ul li a').on('click', function () {
        var filterMenu = $(this).attr('data-filter'),
            _text = $(this).text();
        //$('.select-block-cat p').text(_text);
        $('.select-block-cat .select-options').fadeOut(200);
        $(this).closest('.select-block-cat').removeClass('transform-select');
        // $('.site-catalog-grid').isotope({
        //     filter: filterMenu
        // });
        // return false;
    });
    
    // $('.select-block-subcat .select-options ul li a').on('click', function () {
    //     var _textsub = $(this).text();
    //     $('.select-block-subcat p').text(_textsub);
    //     $('.select-block-subcat .select-options').fadeOut(200);
    //     $(this).closest('.select-block-subcat').removeClass('transform-select');
    //     return false;
    // });
    
    // $('.dropdown nav a').on('click', function () {
    //     var filterDrobdown = $(this).attr('data-filter');
    //     $('.site-catalog-grid').isotope({
    //         filter: filterDrobdown
    //     });
    //     return false;
    // });
    
    $('.dropdown-menu').on('click', function () {
        var down = $(this).find('.keyboard > .arrow-down'),
            up = $(this).find('.keyboard > .arrow-up'),
            toggleMenu = $(this).next('.dropdown');
        $('.dropdown-menu').removeClass('active-menu');
        $(this).addClass('active-menu');
        down.fadeToggle();
        up.fadeToggle();
        toggleMenu.slideToggle();
        return false;
    });
    
    if ( $('.cart-site .image-cart').has('.new-promotion') ) {
        $('.new-promotion').append('<div class="new-position">new</div>');
    }

    $('.select-block').on('click', function () {
        $(this).toggleClass('transform-select');
        $(this).find('.select-options').fadeToggle(200);
    });
});

function redirectPage (url){
    window.location.href = url;
}
(function timer() {
    setInterval(function () {
        var hoursLeft = document.getElementById('timer-v-hours'),
            minutesLeft = document.getElementById('timer-v-minutes'),
            secLeft = document.getElementById('timer-v-seconds'),
            dateNow = new Date().getTime(),
            dateFinish = new Date(2018, 09, 19),
            sec = Math.floor((dateFinish - dateNow) / 1000),
            secToMinutes = sec % 3600,
            hoursNumber = Math.floor(sec / 3600),
            minutesNumber = Math.floor(secToMinutes / 60),
            secondsNumber = secToMinutes % 60;
        hoursLeft.innerHTML = hoursNumber;
        minutesLeft.innerHTML = minutesNumber;
        secLeft.innerHTML = secondsNumber;
    });
})();