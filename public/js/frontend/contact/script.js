$(document).ready(function(){
    //menu background update
    $('.overlay').addClass('overlay-contact');
    $('.menu-bg').addClass('contact-menu-bg');
});

function introAnimation(){
    setTimeout(function(){
        $('.contact-info').removeClass(hidden).addClass('animated fadeInLeft');
        $('.contact-analoog-wrapper').removeClass(hidden).addClass('animated fadeInRight');
    }, 250);
}
