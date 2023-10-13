$('.example').owlCarousel({
    loop: true,
    items: 3,
    margin: 20,
    nav: false,
    dots: false,
    autoplay: true,
    // center: true,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            dots: false
        },
        500: {
            items: 1,
            dots: true
        },
        576: {
            items: 1,
            dots: true
        },
        1000: {
            items: 2,
            dots: true
        },
        1299: {
            items: 2,
            dots: true
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});

