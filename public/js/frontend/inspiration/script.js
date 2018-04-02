$( document ).ready(function() {
    //menu background update
    $('.overlay').addClass('overlay-inspiration');
    $('.menu-bg').addClass('inspiration-menu-bg');
});

function introAnimation(){
    setTimeout(function(){
        $('.inspiration-title').removeClass(invisible).addClass('animated slideInLeft');
        $('.inspiration-description').removeClass(invisible).addClass('animated slideInRight');
        $('.fb-analoog-img').removeClass(hidden).addClass('animated slideInUp');
    }, 250);
}
