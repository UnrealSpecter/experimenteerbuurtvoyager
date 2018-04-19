$( document ).ready(function() {
    //menu background update
    $('.menu-trigger').addClass('inspiration-menu-bg');
    $('.closebtn').addClass('dark-blue');
});

function introAnimation(){
    setTimeout(function(){
        $('.inspiration-title').removeClass(invisible).addClass('animated slideInLeft');
        $('.inspiration-description').removeClass(invisible).addClass('animated slideInRight');
        $('.fb-analoog-img').removeClass(hidden).addClass('animated slideInUp');
    }, 250);
}
