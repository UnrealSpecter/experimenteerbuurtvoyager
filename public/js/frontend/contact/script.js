$(document).ready(function(){
    //menu background update
    $('.overlay').addClass('overlay-contact');
    $('.menu-bg').addClass('contact-menu-bg');

    //next clicked
    $('.next-info').click(function(){
        var current = $('.contact-info').not('.' + invisible);
        var next = current.next().hasClass('contact-info') ? current.next() : $('.contact-info').first();
        current.addClass(invisible).removeClass('animated fadeIn');
        next.removeClass(invisible).addClass('animated fadeIn');
    });

    //previous arrow click
    $('.prev-info').click(function(){
        var current = $('.contact-info').not('.' + invisible);
        var previous = current.prev().hasClass("contact-info") ? current.prev() : $(".contact-info").last();
        current.addClass(invisible).removeClass('animated fadeIn');
        previous.removeClass(invisible).addClass('animated fadeIn');
    });

});

function introAnimation(){
    setTimeout(function(){
        if($(window).width() >= 1200){
            $('.contact-info-wrapper').removeClass(hidden).addClass('animated fadeInLeft');
        }
        else {
            $('.contact-info-wrapper').removeClass(hidden).addClass('animated fadeInUp');
        }
        $('.contact-analoog-wrapper').removeClass(hidden).addClass('animated fadeInRight');
    }, 250);
}
