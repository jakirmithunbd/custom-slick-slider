jQuery(document).ready(function ($) {
    $('.quality-image-nav-slider-init .quality-image-nav-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        adaptiveHeight: true,
        autoplay: true,
        asNavFor: '.quality-image-nav-slider-init .quality-image-nav-slidernav',
    });
    $('.quality-image-nav-slider-init .quality-image-nav-slidernav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.quality-image-nav-slider-init .quality-image-nav-slider',
        dots: false,
        arrows: false,
        focusOnSelect: true,
        autoplay: true,

        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: false,
                },
            },
        ],
    });
});
