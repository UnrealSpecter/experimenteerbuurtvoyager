$(document).ready(function(){
    //menu background update
    $('.closebtn').addClass('light-blue');
    $('.menu-trigger').addClass('contact-menu-bg');

    //next clicked
    $('.next-info').click(function(){
        var current = $('.contact-info-mobile').not('.' + invisible);
        var next = current.next().hasClass('contact-info-mobile') ? current.next() : $('.contact-info-mobile').first();
        current.addClass(invisible).removeClass('animated fadeIn');
        next.removeClass(invisible).addClass('animated fadeIn');
    });

    //previous arrow click
    $('.prev-info').click(function(){
        var current = $('.contact-info-mobile').not('.' + invisible);
        var previous = current.prev().hasClass("contact-info-mobile") ? current.prev() : $(".contact-info-mobile").last();
        current.addClass(invisible).removeClass('animated fadeIn');
        previous.removeClass(invisible).addClass('animated fadeIn');
    });

});

function introAnimation(){
    setTimeout(function(){
        if($(window).width() >= 992){
            $('.contact-info-wrapper').removeClass(hidden).addClass('animated fadeIn');
        }
        else {
            $('.contact-info-wrapper').removeClass(hidden).addClass('animated fadeInUp');
        }
        $('.contact-analoog-wrapper').removeClass(hidden).addClass('animated fadeInRight');
    }, 250);
}
