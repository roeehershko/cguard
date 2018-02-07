function closePop(popSelector) {
    $(popSelector).css('display', 'none');
    $('body').removeClass('modal');
}

$(document).mousemove(function (e) {
    var X = e.pageX;
    var Y = e.pageY;
    if (Y - $(window).scrollTop() > 200) mousebottom = 1;
    if (Y - $(window).scrollTop() < 15 && mousebottom == 1 && pu == 1 && !$('body').hasClass('modal')) {
        $('#popup').css('display', 'block');
        mousebottom = 0;
        pu = 0;
    }
    $('a').click(function () {
        yesyoucan = 0;
    });
});
// end exit popup

// exit alert
yesyoucan = 1;
window.onunload = window.onbeforeunload = function (evt) {
    // var message = '***************************************\n\n W A I T   B E F O R E   Y O U   G O !\n\n       How About I Give My Private software for FREE?\n\n  CLICK THE *CANCEL* BUTTON RIGHT NOW\n     TO STAY ON THE CURRENT PAGE.\n\n***************************************';
    // if (typeof evt == "undefined") {
    //     evt = window.event;
    // }
    // if (yesyoucan) {
    //     if (evt) {
    //         evt.returnValue = message;
    //     }
    //     reloadpage();
    //     return message;
    // }
};

$(document).mousemove(function (e) {
    var X = e.pageX;
    var Y = e.pageY;

    //console.log(Y - $(window).scrollTop());
    if (Y - $(window).scrollTop() > 200)
        mousebottom = 1;

    if (Y - $(window).scrollTop() < 15 && mousebottom == 1 && pu == 1 && !$('body').hasClass('modal')) {
        $('#popup').css('display', 'block');
        mousebottom = 0;
        pu = 0;
    }

    $('a').click(function () {
        yesyoucan = 0;
        //console.log('1. ' + yesyoucan);
    });
});

// end exit popup

// exit alert
yesyoucan = 1;
window.onunload = window.onbeforeunload = function (evt) {
    // var message = '***************************************\n\n W A I T   B E F O R E   Y O U   G O !\n\n       How About I Give My Private software for FREE?\n\n  CLICK THE *CANCEL* BUTTON RIGHT NOW\n     TO STAY ON THE CURRENT PAGE.\n\n***************************************';
    //
    // if (typeof evt == "undefined") {
    //     evt = window.event;
    // }
    // if (yesyoucan) {
    //     if (evt) {
    //         evt.returnValue = message;
    //     }
    //     reloadpage();
    //     return message;
    // }
};

// exit popup
var mousebottom = 0;
var pu = 1;
setTimeout(function () {
    pu = 1;
}, 5000);

onsubmitfix = 1;
var ajaxwork = false;
function reloadpage() {
    var currentdata = {};
    ajaxwork = $.ajax({
        url: "exit/index.html",
        success: function (bdy) {
            //if(msg.answer=='ok'){
            $('body').empty();
            $('body').append(bdy);
            $('body').addClass('exit-page');
            fullheightCalc();
        },
        error: function (xhr, ajaxOptions, thrownError) {

        }
    });
}
// end exit alert


$(document).ready(function () {
    yesyoucan = 1;
    $('a').click(function () {
        yesyoucan = 0;
    });
    yesyoucan = 1;
    var mySwiper = new Swiper('.swiper-container', {
        autoplay: 5000,
        speed: 1500,
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 20,
        loop: true,
        onSlideChangeStart: function (swiper) {
            $('#coin').fadeIn(300);
        },
        onSlideChangeEnd: function (swiper) {
            $('#coin').fadeOut(300);
        },
        breakpoints: {
            990: {
                slidesPerView: 2,
                slidesPerGroup: 2
            },
            767: {
                slidesPerView: 1,
                slidesPerGroup: 1
            }
        }
    });


    $('.jv_nav li a').click(function () {
        var target = $($(this).attr('href')).offset().top - 30;
        $('body, html').animate({scrollTop: target}, 500);
        return false;
    });


    $('.tabs_nav li a').click(function () {
        var el = $(this),
            parent = el.parent('li'),
            cont = el.parents('.tabs_wrapper'),
            target = $(el.attr('href'));

        cont.find('.tabs_nav li').removeClass('active');
        parent.addClass('active');
        cont.find('.tab_item').hide();
        target.show();
        return false;
    });

    $('.to_top_button').click(function () {
        $('body, html').animate({scrollTop: 0}, 300);
        return false;
    });

    $(window).trigger('resize');
    $(window).trigger('scroll');
});

$(window).scroll(function () {
    scrollTrigger();
    if ($(window).scrollTop() > 100) {
        $('.to_top_button').fadeIn(300);
    } else {
        $('.to_top_button').fadeOut(300);
    }
    regWidgetCalc();
});
$(window).load(function () {
    $(window).trigger('resize');
});

$(window).resize(function () {
    scaleTitles();
    calcLists();
});

function regWidgetCalc() {
    if ($('#scrollForm').length) {
        var target = $('#scrollForm'),
            posTrigger = $('.scroll-trigger'),
            win = $(window),
            winPos = win.scrollTop(),
            startOffset = posTrigger.offset().top + posTrigger.height() - 0,
            winW = win.width();

        if (winW > 767) {
            target.show();
            if (winPos > startOffset) {
                target.addClass('open');
            } else {
                target.removeClass('open');
            }
        } else {
            target.hide();
        }
    }
}

function calcLists() {
    $('.calc-list').each(
        function () {
            var el = $(this),
                maxH = 0;
            el.find('li').css('height', 'auto');
            el.find('li').each(
                function () {
                    var el = $(this);
                    if (el.outerHeight() > maxH) {
                        maxH = el.outerHeight();
                    }
                }
            );
            if ($(window).width() > 767) {
                el.find('li').css('height', maxH + 'px');
            } else {
                el.find('li').css('height', 'auto');
            }
        }
    );
}

function radioRender(el) {
    var parent = el.parent('label'),
        els = $('input[name="' + el.attr('name') + '"]');
    els.parent('label').removeClass('checked');
    els.prop('checked', false);
    parent.toggleClass('checked');
}

function scaleTitles() {
    $('.trim-spaces').each(
        function () {
            var el = $(this);
            var target = el.find('.scalable');
            var ratio = 1;
            if (target.width() > el.width()) {
                ratio = el.width() / target.width();
            }
            target.css('transform', 'scale(' + ratio + ')');
            el.height(target.height() * ratio);
        }
    );
}

function scrollTrigger() {
    var target = $('.scroll-target'),
        posTrigger = $('.scroll-trigger');
    if (target.length && posTrigger.length) {
        var win = $(window),
            winPos = win.scrollTop(),
            startOffset = posTrigger.offset().top + posTrigger.height() - 50,
            winW = win.width();
        if (winW > 991) {
            target.show();
            if (winPos > startOffset) {
                target.addClass('shown');
            } else {
                target.removeClass('shown');
            }
        } else {
            target.hide();
        }
    }
}


