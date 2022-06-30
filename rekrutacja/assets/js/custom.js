jQuery(document).ready(function(){
    let Slider = $('.bxslider').bxSlider({
        auto: true,
        pause: 7000,
        controls: false,
        pager: false,
        touchEnabled: false,
    });

    jQuery('.left-button').click(function(){
        Slider.goToPrevSlide();
    });
    jQuery('.right-button').click(function(){
        Slider.goToNextSlide();
    });
});