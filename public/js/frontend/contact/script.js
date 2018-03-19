$(document).ready(function(){

    //animate contact info in
    setTimeout(function(){
        $('.contact-info').removeClass('hidden').addClass('animated fadeInRight');
    }, 500);

    //menu background update
    $('.overlay').addClass('overlay-contact');
    $('.menu-bg').addClass('contact-menu-bg');

});
