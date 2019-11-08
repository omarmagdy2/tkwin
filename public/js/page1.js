$(document).ready(function() {
    'use strict';

    // navbar
    function setNavbar() {
        let nav = $('.navbar');
        let win = $(window);
        function navWhenScroll() {
            if (win.scrollTop() >= 100) {
                nav.addClass('dark');
            } else {
                nav.removeClass('dark');
            }
        }
        navWhenScroll();
        win.on('scroll', function () {
            navWhenScroll();
        });
    }
    setNavbar();
      
    // slider
    function runSlider($parentElems, $toshow) {
        $($parentElems).slick({
            slidesToShow: $toshow,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            responsive: [{
                breakpoint: 990,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 750,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 500,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    }
    runSlider('.slider2', 3);

    // visitors
    function visitorCount() {
        let visitor = $('.visitor');
        visitor.each(function () {
            let str = $(this).text();
            $(this).html('');
            for(let i = 0; i < str.length; i++) {
                str[i]
                $(this).html($(this).html() + '<span>' + str[i] + '</span>')
            }
        });
    }
    visitorCount();
});