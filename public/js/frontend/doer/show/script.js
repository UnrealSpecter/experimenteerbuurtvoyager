$( document ).ready(function() {


    
    setTimeout(function(){
            var name = $('.doer-name');
            name.removeClass('hidden').addClass('animated fadeInDown');
    }, 2000);

    setTimeout(function(){
        var content = $('.content-area');
        content.removeClass('hidden').addClass('animated fadeInRight');
    }, 1000);

    $('.doer-video-button').click(function(){

        if($(this).data('mode') === 'profile-data'){

            $(this).html('<span>Terug naar profiel</span>');
            $('.doer-wrapper').addClass('animated fadeOutRight');
            setTimeout(function(){
                $('.doer-wrapper').addClass('hidden');
                $('.doer-video-wrapper').removeClass('hidden').removeClass('animated fadeOutRight').addClass('animated fadeInRight');
            },1000);
            $(this).data('mode', 'profile-video');
        }

        else if($(this).data('mode') === 'profile-video'){
            $(this).html('<span>Mijn video</span>');
            $('.doer-video-wrapper').addClass('animated fadeOutRight');
            setTimeout(function(){
                $('.doer-video-wrapper').addClass('hidden')
                $('.doer-wrapper').removeClass('hidden').removeClass('animated fadeOutRight').addClass('animated fadeInRight');
            }, 1000);
            player.stopVideo();
            $(this).data('mode', 'profile-data');
        }

    });

});
