$( document ).ready(function() {
    //menu background update
    $('.overlay').addClass('overlay-inspiration');
    $('.menu-trigger').addClass('inspiration-menu-bg');
    $('.dark-blue').addClass('active');
});

function introAnimation(){
    setTimeout(function(){
        $('.inspiration-title').removeClass(invisible).addClass('animated slideInLeft');
        $('.inspiration-description').removeClass(invisible).addClass('animated slideInRight');
        $('.fb-analoog-img').removeClass(hidden).addClass('animated slideInUp');
    }, 250);
}
