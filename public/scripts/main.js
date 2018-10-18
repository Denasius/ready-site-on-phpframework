$(document).ready(function () {
    // $('.headerTop').on('wheel', function (e) {
    //     if ( e.originalEvent.deltaY > 0 ) {
    //         $('html, body').animate({
    //             scrollTop: $('#scrollMenu').offset().top
    //         }, 1000)
    //     }
    // });

    // $(window).on('scroll', function () {
    //     var position = $(window).scrollTop(),
    //         block_position = $('.best-decision').offset().top;
    //
    //     if ( position > block_position ) {
    //         $('.freelance').addClass('fadeIn1');
    //         $('.web-studio').addClass('fadeIn2');
    //         $('.constructor').addClass('fadeIn3');
    //     }else{
    //         $('.freelance').removeClass('fadeIn1');
    //         $('.web-studio').removeClass('fadeIn2');
    //         $('.constructor').removeClass('fadeIn3');
    //     }
    //
    // });

    $('.order-call').on('click', function () {
        $('.modal-popap').fadeIn();
        $('.popap').slideDown(200);
        return false;
    });
    $('.fa-times').on('click',function () {
        $('.modal-popap').fadeOut();
        $('.popap').slideUp(200);
    });
    $('._btn-phone').on('click', function () {
        var datanamecall = $(this).closest('.form_call').find('#name_call').val(),
            dataphonecall = $(this).closest('.form_call').find('#phone_call').val(),
            dataemailcall = $(this).closest('.form_call').find('#email_call').val();
        $.ajax({
            url: $(this).attr('href'),
            type: 'POST',
            data: 'call_f=1&name=' + datanamecall + '&email=' + dataemailcall + '&phone=' + dataphonecall,
            cache: false,
            success: function (data) {
                json = JSON.parse(data);
                if ( json.message == 'error' ) {
                    $('#error_call_field').show().text(json.status);
                }else{
                    $('.col-to-form').hide();
                    $('.head').hide();
                    $('.success-field').show();
                    setTimeout(function () {
                        $('.modal-popap').fadeOut();
                        $('.popap').slideUp(200);
                    }, 5000);
                }
            }
        });
        return false;
    });
    $('#back').on('click', function () {
        $('.modal-popap').fadeOut();
        $('.popap').slideUp(200);
        return false;
    });
    $('#consult-link').on('click', function () {
        $('.choose-website').fadeIn();
        $('.choose').slideDown(200);
        return false;
    });
    $('.choose .fa-times').on('click', function () {
        $('.choose-website').fadeOut();
        $('.choose').slideUp(200);
    });
    $('.get-consult-choose').on('click', function () {
        var dataname = $(this).closest('.choose-form').find('#name_choose').val(),
            dataemail = $(this).closest('.choose-form').find('#email_choose').val(),
            dataphone = $(this).closest('.choose-form').find('#phone_choose').val();
        $.ajax({
            url: $(this).attr('href'),
            type: 'POST',
            data: 'consult_f=1&name=' + dataname + '&email=' + dataemail + '&phone=' + dataphone,
            cache: false,
            success: function (data) {
                json = JSON.parse(data);
                if (json.message == 'error') {
                    $('#error').show().text(json.status);
                } else {
                    $('.choose').hide();
                    $('.choose-success').show();
                    $('.choose-form').find('input').val('');
                    $('#error').hide();
                    setTimeout(function () {
                        $('.choose-website').fadeOut();
                        $('.choose-success').slideUp()
                    }, 5000);
                }
            }
        });
        return false;
    });
    $('#choose-back').on('click', function () {
        $('.choose-website').fadeOut();
        $('.choose-success').slideUp(200).hide();
        return false;
    });

    $(window).on('load', function () {
        $('.line').each(function () {
            $(this).addClass('line-animation');
        });
        $('.fade_effects').each(function () {
            $(this).addClass('animation-fade');
        });
    });

    if ( $(window).width() <= 767 ) {
        $('.scroll-menu .botoom-scroll-nav a').on('click', function () {
            $('.scroll-menu .botoom-scroll-nav a').removeClass('active-link');
            $(this).toggleClass('active-link');
        });
    }

    $('.for-choice').each(function ( index ) {
        $(this).attr('data-choice', 'choice-' + index);
    });

    $('section.choice').each(function ( index ) {
        $(this).attr('data-choice', 'choice-' + index);
    });

    $('.for-choice').on('click', function () {
        var _this = $(this).attr('data-choice');
        var wrapper = $(this).closest('body');
        wrapper.find('section.choice').removeClass('active-choice');
        wrapper.find('section.choice[data-choice='+ _this +']').addClass('active-choice');
        return false;
    });
    $('form').on('submit', function () {
        $(this).find('input').val('');
    });
});
function redirectPage (url){
    window.location.href = url;
}
