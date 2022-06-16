$(document).ready(function () {
   $('.carousel-inner').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 2000,
       adaptiveHeight: true,
        responsive: [
            {
                 breakpoint: 767,
                 settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      // dots: true,
                 }
            },
            {
                 breakpoint: 900,
                 settings: {
                      slidesToShow: 1,
                      slidesToScroll: 1,
                      // dots: true,
                 }
            }
       ]
    });
});
