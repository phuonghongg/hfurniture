(function($) {
    'use strict';
    /* wow */
    new WOW().init();
    // Init Slider
    $('.owl-slider').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-caret-left'></i>", "<i class='fa fa-caret-right'></i>"],
    });
    // Pref add class active to 1st thumbnail via js
    $('.thumbnails').eq(0).addClass('active');
    // When slider autoplay or drag is true 
    $('.owl-slider').on('changed.owl.carousel', function(event) {
        $('.thumbnails').removeClass('active');
        var sliders = 4;
        var currentItem = event.item.index - 2;
        if (currentItem >= sliders) {
            currentItem = 0;
        }
        $('.thumbnails').eq(currentItem).addClass('active');
    });
    // When thumbnail is clicked
    $( ".thumbnails" ).on( "click", "a", function( event ) {  
        event.preventDefault();
        $('.thumbnails').removeClass('active');
        var index = $('.thumbnails a').index(this);
        $('.thumbnails').eq(index).addClass('active');
        $('.owl-slider').trigger('to.owl.carousel', [index, 300, true]);
    });    

    $('#pupoler-items-slide').owlCarousel({
        items: 1,
        loop: true,
        autoplay: false,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    });
    $('#latest-items-slide').owlCarousel({
        items: 1,
        loop: true,
        autoplay: false,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    });
    $('#topsell-items-slide').owlCarousel({
        items: 1,
        loop: true,
        autoplay: false,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    });
    $(".client-carousel").owlCarousel({
        items: 5,
        loop: true,
        autoplay: false,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            200: {
                items: 1,
            },
            350: {
                items: 2,
            },
            600: {
                items: 3,
            },
            768: {
                items: 4,
            },
            1200: {
                items: 5,
            }
        }
    });
    if ($('div').hasClass("slider-range")) {
        $("#slider-range").slider({
            range: true,
            min: 10,
            max: 500,
            values: [80, 196],
            slide: function(event, ui) {
                $(".minamount").val('$ ' + ui.values[0]);
                $(".maxamount").val('$ ' + ui.values[1]);
            }
        });
        $(".minamount").val('$ ' + $("#slider-range").slider("values", 0));
        $(".maxamount").val('$ ' + $("#slider-range").slider("values", 1));
    }
    $("#testimonial-carousel").owlCarousel({
        items: 3,
        loop: true,
        autoplay: false,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            500: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1024: {
                items: 3,
            },
            1200: {
                items: 3,
            }
        },
    });
    $('#carosel-might-like').owlCarousel({
        items: 4,
        loop: true,
        autoplay: false,
        nav: true,
        dots: false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        responsive: {
            0: {
                items: 1,
            },
            450: {
                items: 1,
            },
            500: {
                items: 2,
            },
            600: {
                items: 2,
            },
            1024: {
                items: 3,
            },
            1200: {
                items: 4,
            }
        },
    });
    $('.quotation-blog-post').owlCarousel({
        items: 1,
        autoplay: true,
        nav: true,
        loop: true
    });
    $(function() {
        if ($('div').hasClass("side-bar")) {
            $("#accordion").accordion();
        }
    });
    // Product preview
    $('.zoom').magnificPopup({
        disableOn: 300,
        type: 'image',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
    // $('input[type=number]').spinner();
    $('.boxed-content-container').directionalHover({
        overlay: "dh-overlay",
        easing: "linear"
    });
    // venobox
    $('.venobox').venobox({
        numeratio: true,
        infinigall: true
    });

    //like
    $(".icon_heart_alt").on('click',function(e) {    
        e.preventDefault();
        $(this).toggleClass("like");
    });

    //popup
    $('.zoom').magnificPopup({
        disableOn: 700,
        type: 'image',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false,
    });

})(jQuery);