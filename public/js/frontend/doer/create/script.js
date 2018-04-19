$( document ).ready(function() {

    //menu background update
    $('.overlay').addClass('overlay-doer');
    $('.menu-trigger').addClass('doer-menu-bg');
    $('.purple').addClass('active');

});

function introAnimation(){
    setTimeout(function(){
        $('.create-wrapper').removeClass(hidden).addClass('animated slideInRight');
    }, 250);

    setTimeout(function(){
        $('.content-area > p').removeClass('invisible').addClass('animated fadeIn');
    }, 1000);
}
