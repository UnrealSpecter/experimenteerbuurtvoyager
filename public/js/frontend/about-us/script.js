var hidden = 'd-none';
var invisible = 'invisible';

function introAnimation(){
    $('.about-us-wrapper').addClass('animated fadeInRight');
}

$(document).ready(function(){

    //menu background update
    $('.closebtn').addClass('light-green');
    $('.menu-trigger').addClass('experimenteerbuurt-menu-bg');

    //kijk of er een get in de url zit en zet de active slide dan op locatie.
    var prmstr = window.location.search.substr(1);
    if(prmstr == "locatie=1") {
        setTimeout(function(){
            $('.locatie').click();
        }, 1000);
    }

    /* menu */
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
        organisatieIntro();
    });

    //next clicked
    $('.next-info').click(function(){
        var current = $('.organisatie-info-wrapper').not('.' + invisible);
        var next = current.next().hasClass('organisatie-info-wrapper') ? current.next() : $('.organisatie-info-wrapper').first();
        current.addClass(invisible).removeClass('animated fadeIn');
        next.removeClass(invisible).addClass('animated fadeIn');
        $('.organisation-count').html(next.data('id'));
    });

    //previous arrow click
    $('.previous-info').click(function(){
        var current = $('.organisatie-info-wrapper').not('.' + invisible);
        var previous = current.prev().hasClass("organisatie-info-wrapper") ? current.prev() : $(".organisatie-info-wrapper").last();
        current.addClass(invisible).removeClass('animated fadeIn');
        previous.removeClass(invisible).addClass('animated fadeIn');
        $('.organisation-count').html(previous.data('id'));
    });

    //next clicked
    $('.next-arrow').click(function(){
        var current = $('.mobile-about-button').not('.' + invisible);
        var next = current.next().hasClass('mobile-about-button') ? current.next() : $('.mobile-about-button').first();
        current.addClass(invisible).removeClass('animated fadeIn');
        $('#about-us-carousel').carousel(next.data('number'));
        next.removeClass(invisible).addClass('animated fadeIn');
    });

    //previous arrow click
    $('.prev-arrow').click(function(){
        var current = $('.mobile-about-button').not('.' + invisible);
        var previous = current.prev().hasClass("mobile-about-button") ? current.prev() : $(".mobile-about-button").last();
        current.addClass(invisible).removeClass('animated fadeIn');
        $('#about-us-carousel').carousel(previous.data('number'));
        previous.removeClass(invisible).addClass('animated fadeIn');
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
    $('.next-question').click(function(){
        var current = $('.faq-question-wrapper').not('.' + invisible);
        var next = current.next().hasClass('faq-question-wrapper') ? current.next() : $('.faq-question-wrapper').first();
        current.addClass(invisible).removeClass('animated fadeIn');
        next.removeClass(invisible).addClass('animated fadeIn');
        $('.faq-count').html(next.data('id'));
    });

    //previous arrow click
    $('.prev-question').click(function(){
        var current = $('.faq-question-wrapper').not('.' + invisible);
        var previous = current.prev().hasClass("faq-question-wrapper") ? current.prev() : $(".faq-question-wrapper").last();
        current.addClass(invisible).removeClass('animated fadeIn');
        previous.removeClass(invisible).addClass('animated fadeIn');
        $('.faq-count').html(previous.data('id'));
    });

});

//introduction animation to be run for the first time when the organisation tab is shown.
function organisatieIntro(){
    setTimeout(function(){
        $('.organisatie-title').removeClass(hidden).addClass('animated fadeInLeft');
        $('.organisatie-description').removeClass(hidden).addClass('animated fadeInDown');
        animateSponsors();
    }, 750);
}

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
        var sponsor = $(sponsors[index]);
        sponsor.removeClass(hidden);
        $(window).width() > 1200 ? sponsor.addClass('animated fadeInUp') : index % 2 ? sponsor.addClass('animated slideInRight') : sponsor.addClass('animated slideInLeft');
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
