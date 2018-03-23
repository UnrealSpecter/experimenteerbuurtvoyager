var hidden = 'd-none';
$(document).ready(function(){

    //menu background update
    $('.overlay').addClass('overlay-experimenteerbuurt');
    $('.menu-bg').addClass('experimenteerbuurt-menu-bg');

    //kijk of er een get in de url zit en zet de active slide dan op locatie.
    var prmstr = window.location.search.substr(1);
    if(prmstr == "locatie=1") {
        setTimeout(function(){
            $('.locatie').click();
        }, 1000);
    }


    /* menu */
    //set correct button classes
    $('.button').on('click', function(){
        $('.button').each(function(i, obj) {
             if($(obj).hasClass('selected')){
                 $(obj).removeClass('selected');
             }
        });
        var slideNumber = $(this).data('number');
        $(this).addClass('selected');
        //stop video if a different slide is clicked
        if(!$(this).hasClass('experimenteerbuurt') && player){
            player.stopVideo();
        }
        $('#about-us-carousel').carousel(slideNumber);

    });


    /* wat is de experimenteerbuurt */
    $('.video-toggle-button').click(function(){
        toggleExperimenteerbuurtVideo();
    });

    /* organisatie */
    $('.organisatie').one('click', function(){
        setTimeout(function(){
            $('.organisatie-title').removeClass(hidden).addClass('animated fadeInLeft');
            $('.organisatie-description').removeClass(hidden).addClass('animated fadeInDown');
            animateSponsors();
        }, 750);
    });

    //next clicked
    $('.next-info').click(function(){
        var current = $('.organisatie-info-wrapper').not('.' + hidden);
        var next = current.next().hasClass('organisatie-info-wrapper') ? current.next() : $('.organisatie-info-wrapper').first();
        current.removeClass('animated fadeInLeft').fadeOut(500, function(){
            current.addClass(hidden);
            current.removeAttr('style');
        });
        next.removeClass(hidden).addClass('animated fadeInRight');
        $('.organisation-count').html(next.data('id'));
    });

    //previous arrow click
    $('.previous-info').click(function(){
        var current = $('.organisatie-info-wrapper').not('.' + hidden);
        var previous = current.prev().hasClass("organisatie-info-wrapper") ? current.prev() : $(".organisatie-info-wrapper").last();
        current.removeClass('animated fadeInRight').fadeOut(500, function(){
            current.addClass(hidden);
            current.removeAttr('style');
        });
        previous.removeClass(hidden).addClass('animated fadeInLeft');
        $('.organisation-count').html(previous.data('id'));
    });


    /* locatie */
    $('.locatie').one('click', function(){
        setTimeout(function(){
            $('.analoog-locatie').toggle().addClass('animated fadeIn');
        }, 750);
    });

    $('.swap-locatie-view').click(function(){
        var button = $(this).children('span');
        if(button.html() === 'Zie in Google Maps'){
            button.html('Terug');
        }
        else{
            button.html('Zie in Google Maps');
        }
        $('.analoog-locatie').toggle();
        $('.google-maps-locatie').toggle(function(){
            //initialize google maps
            myMap();
        });
    });


    /* Frequently asked questions */
    $('.faq').one('click', function(){
        setTimeout(function(){
            $('.faq-title').removeClass(hidden).addClass('animated fadeInLeft');
            $('.faq-summary').removeClass(hidden).addClass('animated fadeInDown');
            $('.faq-wrapper').removeClass(hidden).addClass('animated slideInUp');
        }, 750);
    });

    //next clicked
    $('.glyphicon-chevron-right').click(function(){
        var current = $('.faq-question-wrapper').not('.' + hidden);
        var next = current.next().hasClass('faq-question-wrapper') ? current.next() : $('.faq-question-wrapper').first();
        current.removeClass('animated fadeInLeft').fadeOut(500, function(){
            current.addClass(hidden);
            current.removeAttr('style');
        });
        next.removeClass(hidden).addClass('animated fadeInRight');
        $('.faq-count').html(next.data('id'));
    });

    //previous arrow click
    $('.glyphicon-chevron-left').click(function(){
        var current = $('.faq-question-wrapper').not('.' + hidden);
        var previous = current.prev().hasClass("faq-question-wrapper") ? current.prev() : $(".faq-question-wrapper").last();
        current.removeClass('animated fadeInLeft').fadeOut(500, function(){
            current.addClass(hidden);
            current.removeAttr('style');
        });
        previous.removeClass(hidden).addClass('animated fadeInLeft');
        $('.faq-count').html(previous.data('id'));
    });

});

//loop sponsors and store them in the array for use
function animateSponsors(){
    var sponsors = [];
    $('.sponsor').each(function(index, sponsor) {
        //add hidden to each main element while storing them so they can be uncovered
        $(sponsor).addClass(hidden);
            sponsors.push(sponsor);
    });
    //set start index
    var index = 0;
    //setInterval half a second and loop through categories and removeClass
    var interval = setInterval(function() {
      $(sponsors[index]).removeClass(hidden).addClass('animated slideInUp');
      if(index == sponsors.length - 1){
        clearInterval(interval);
      }
      index++;
    }, 500);
}

function toggleExperimenteerbuurtVideo() {
    var video = $('.experimenteerbuurt-video');
    var info = $('.experimenteerbuurt-info');
    var button = $('.video-toggle-button > span');
    if(video.hasClass('fadeIn')){
        video.removeClass('fadeIn').addClass('fadeOut').css('z-index', '0');
        info.removeClass('fadeOut').addClass('fadeIn').css('z-index', '1');
        button.html('Terug naar Video');
        player.stopVideo();
    }
    else{
        video.removeClass('fadeOut').addClass('fadeIn').css('z-index', '1');
        info.removeClass('fadeIn').addClass('fadeOut').css('z-index', '0');
        button.html('Meer Info');
    }
}

// function myMap() {
//     var myCenter = new google.maps.LatLng(52.783063,6.913960);
//     var mapCanvas = document.getElementById("map");
//     var mapOptions = {center: myCenter, zoom: 16};
//     var map = new google.maps.Map(mapCanvas, mapOptions);
//     var marker = new google.maps.Marker({position:myCenter});
//     marker.setMap(map);
// }


// function toggleFaq(faq){
//     var question = faq;
//     var answer = faq.siblings('.answer');
//     if(answer.hasClass('open')){
//         question.find('.glyphicon-collapse-down').removeClass('glyphicon-collapse-down').addClass('glyphicon-expand');
//         answer.addClass('hidden').removeClass('open').removeClass('animated fadeInDown')
//     }
//     else {
//         question.find('.glyphicon-expand').removeClass('glyphicon-expand').addClass('glyphicon-collapse-down');
//         answer.removeClass('hidden').addClass('open').addClass('animated fadeInDown');
//     }
// }
