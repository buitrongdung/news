(function e(t,n,r){function s(o,u){if(!n[o]){if(!t[o]){var a=typeof require=="function"&&require;if(!u&&a)return a(o,!0);if(i)return i(o,!0);var f=new Error("Cannot find module '"+o+"'");throw f.code="MODULE_NOT_FOUND",f}var l=n[o]={exports:{}};t[o][0].call(l.exports,function(e){var n=t[o][1][e];return s(n?n:e)},l,l.exports,e,t,n,r)}return n[o].exports}var i=typeof require=="function"&&require;for(var o=0;o<r.length;o++)s(r[o]);return s})({1:[function(require,module,exports){
'use strict';

$(document).ready(function () {
    new WOW().init();
    $('.menuwrap').scrollToFixed({
        zIndex: 100
    });
    // $('.topbar').scrollToFixed({
    //     marginTop: 129,
    //     zIndex: 50
    // });
    // $('.parallax-window').parallax({
    //     speed: 0.5
    // });
    $('[data-toggle="tooltip"]').tooltip();
    $('.btn-comment').click(function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top - 170
        }, 700);
        // $('.nav-tabs li').removeClass('active');
        // $(this).parent('li').addClass('active');
        return false;
    });
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 100) {
            $('header').addClass('minimal');
        } else {
            $('header').removeClass('minimal');
        }
    });
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 300) {
            $('.up').fadeIn(500);
        } else {
            $('.up').fadeOut(500);
        }
    });
    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 400) {
            $('.product-fly-button').addClass('open');
        } else {
            $('.product-fly-button').removeClass('open');
        }
    });
    $('.up').click(function () {
        $('body').animate({
            scrollTop: 0,
            scrollSpeed:1200
        }, 500);
    });
    // if ($(window).width() < 768) {
    //     $('.btn-showtop').click(function() {
    //         $(this).siblings('ul').slideToggle(300);
    //     });
    // }
    $(".counter").countimator({
        duration: 1000
    });
    $(".pagename").append($('.breadcrumb li a').eq(1).find('span').html());
    // $('.searchtoggle').click(function() {
    //     $('.search').slideToggle(300);
    // });
    // $('.btn-closesearch').click(function() {
    //     $('.search').slideToggle(300);
    // });

    // MENU
    // if ($(window).width() < 1200) {
    //     $('.menu').insertBefore('.fullpage');
    // }
    $('.btn-showmenu').click(function () {
        $(this).toggleClass('active');
        $('.menu').slideToggle(500);
        // $('header').toggleClass('minimal');
        // $('.overlay').fadeIn(500);
        // $('html').css('overflow', 'hidden');
    });
    $('.overlay').click(function () {
        $(this).fadeOut(500);
        $('.menu').removeClass('open');
        $('.search').removeClass('open');
        $('html').css('overflow', 'auto');
    });
    $('.btn-showsub').click(function () {
        // $(this).toggleClass('active');
        $(this).siblings('.sub').addClass('open');
    });
    $('.btn-closesub').click(function () {
        // $(this).toggleClass('active');
        $(this).parent('.sub').removeClass('open');
    });

    $('.searchtoggle').click(function () {
        $('.search').toggleClass('open');
    });
    $('.btn-closesearch').click(function () {
        $('.search').removeClass('open');
    });

    $('.banklist .bank').click(function () {
        $('.banklist .bank').removeClass('active');
        $(this).addClass('active');
    });

    $('.chef-slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        dots: false
    });
    // END-MENU

    $('.btn-apply').click(function () {
        $('.apply-form').slideToggle(300);
    });
    $('#map').click(function () {
        $(this).find('iframe').addClass('active');
    }).mouseleave(function () {
        $(this).find('iframe').removeClass('active');
    });

    // FILTER SCRIPT

    $('.btn-showsubfilter').click(function () {
        $(this).toggleClass('active');
        $(this).siblings('.sub').slideToggle(300);
    });
    $('.btn-showcate').click(function () {
        $(this).toggleClass('active');
        $('.btn-showfilter').removeClass('active');
        $('.filter-wrap').removeClass('open');
        $('.filter-category').toggleClass('open');
        $('html').css('overflow', 'hidden');
    });
    $('.btn-showfilter').click(function () {
        $(this).toggleClass('active');
        $('.btn-showcate').removeClass('active');
        $('.filter-wrap').removeClass('open');
        $('.filter-properties').toggleClass('open');
        $('html').css('overflow', 'hidden');
    });
    $('.btn-closefilter').click(function () {
        $('.btn-showcate').removeClass('active');
        $('.btn-showfilter').removeClass('active');
        $('.filter-wrap').removeClass('open');
        $('html').css('overflow', 'auto');
    });

    // PRODUCT SCRIPT
    if ($(window).width() < 1024) {
        $('.product-policy').insertBefore('.product-description');
    }
    // $('category-link').mCustomScrollbar({
    //     theme: 'minimal-dark',
    //     axis: "x",
    //     scrollInertia: 300,
    // });

    // SLIDE
    $('.banner').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1000
    });

    $('.hotproduct-slide').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        infinite: false,
        autoplay: false,
        speed: 500,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
        }, {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        }, {
            breakpoint: 543,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }]
    });
    $('.category-slide').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        infinite: false,
        autoplay: false,
        speed: 500,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4
            }
        }, {
            breakpoint: 767,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        }, {
            breakpoint: 543,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }]
    });
    $('.bannerads').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true
    });

    // PRODUCT SLIDE

    $('.product-slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        infinite: false,
        fade: true,
        asNavFor: '.product-nav'
    });
    $('.product-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.product-slide',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        infinite: false,
        vertical: true,
        verticalSwiping: true,
        responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 991,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 767,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 543,
            settings: {
                slidesToShow: 3,
                vertical: false,
                verticalSwiping: false
            }
        }]
    });
    $('.lastview-slide').slick({
        slidesToShow: 10,
        slidesToScroll: 1,
        autoplay: false,
        speed: 500,
        responsive: [{
            breakpoint: 1199,
            settings: {
                slidesToShow: 8
            }
        }, {
            breakpoint: 991,
            settings: {
                slidesToShow: 7
            }
        }, {
            breakpoint: 767,
            settings: {
                slidesToShow: 5
            }
        }, {
            breakpoint: 543,
            settings: {
                slidesToShow: 3
            }
        }]
    });

    // CART PAGE SCRIPT

    $('.removenotice').click(function () {
        $('.cartnotice').slideToggle(300);
    });

    $('#btn-ttmh').click(function () {
        $('.user-info').slideToggle(300);
    });
    $('#btn-xuathd').click(function () {
        $('.bill-form').slideToggle(300);
    });

    $('#ship1').click(function () {
        $('#ship1-popup').show(300);
        $('#ship2-popup').hide(300);
    });
    $('#ship2').click(function () {
        $('#ship2-popup').show(300);
        $('#ship1-popup').hide(300);
    });

    $('.btn-spin').click(function () {

        var $button = $(this);
        var oldValue = $button.parent().find('input').val();

        if ($button.text() == '+') {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }

        $button.parent().find('input').val(newVal);
    });
});

// REVOLUTION SLIDER
var tpj = jQuery;

var banner001;
tpj(document).ready(function () {
    if (tpj("#banner001").revolution == undefined) {
        revslider_showDoubleJqueryError("#banner001");
    } else {
        banner001 = tpj("#banner001").show().revolution({
            sliderType: "standard",
            sliderLayout: 'fullscreen',
            dottedOverlay: "none",
            delay: 5000,
            navigation: {
                keyboardNavigation: "off",
                keyboard_direction: "horizontal",
                mouseScrollNavigation: "off",
                onHoverStop: "off",
                touch: {
                    touchenabled: "on",
                    swipe_threshold: 75,
                    swipe_min_touches: 50,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                },
                arrows: {
                    enable: true,
                    style: 'uranus',
                    tmp: '',
                    rtl: false,
                    hide_onleave: true,
                    hide_onmobile: true,
                    hide_under: 0,
                    hide_over: 9999,
                    hide_delay: 300,
                    hide_delay_mobile: 1200,
                    left: {
                        container: 'slider',
                        h_align: 'left',
                        v_align: 'center',
                        h_offset: 20,
                        v_offset: 0
                    },

                    right: {
                        container: 'slider',
                        h_align: 'right',
                        v_align: 'center',
                        h_offset: 20,
                        v_offset: 0
                    }
                },
                bullets: {
                    enable: true,
                    style: 'hermes',
                    tmp: '',
                    direction: 'horizontal',
                    rtl: false,

                    container: 'slider',
                    h_align: 'center',
                    v_align: 'bottom',
                    h_offset: 0,
                    v_offset: 20,
                    space: 5,

                    hide_onleave: false,
                    hide_onmobile: false,
                    hide_under: 0,
                    hide_over: 9999,
                    hide_delay: 200,
                    hide_delay_mobile: 1200

                }
            },
            responsiveLevels: [1024, 991, 767, 543],
            visibilityLevels: [1024, 991, 767, 543],
            gridwidth: [1200, 1200, 1200, 1200],
            gridheight: [550, 550, 550, 550],
            lazyType: "none",
            parallax: {
                type: "scroll",
                origo: "slidercenter",
                speed: 50,
                levels: [5000]
            },
            shadow: 0,
            spinner: "off",
            stopLoop: "off",
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
                simplifyAll: "off",
                nextSlideOnWindowFocus: "off",
                disableFocusListener: false
            }
        });
    }
});

},{}]},{},[1])

//# sourceMappingURL=main.js.map
