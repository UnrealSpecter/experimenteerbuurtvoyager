var hidden = 'd-none';

function introAnimation(){
    $('.agenda-wrapper').removeClass(hidden).addClass('animated slideInRight');
}

$( document ).ready(function() {

    //menu background update
    $('.closebtn').addClass('red');
    $('.menu-trigger').addClass('agenda-menu-bg');

    //next clicked
    $('.next-event').click(function(){

        var current = $('.event-wrapper').not('.' + invisible);
        var next = current.next().hasClass("event-wrapper") ? current.next() : $(".event-wrapper").first();

        current.addClass(invisible).removeClass('animated fadeInRight');
        next.removeClass(invisible).addClass('animated fadeInRight');

    });

    //previous arrow click
    $('.previous-event').click(function(){
        var current = $('.event-wrapper').not('.' + invisible);
        var previous = current.prev().hasClass("event-wrapper") ? current.prev() : $(".event-wrapper").last();
        current.addClass(invisible).removeClass('animated fadeInRight');
        previous.removeClass(invisible).addClass('animated fadeInRight');
    });

    //more info-block
    $('.more-info').click(function(){

        var buttonMode = $(this).attr('data-mode');
        var initial = $(this).parent().parent();
        var dateInsideNav = initial.siblings('.agenda-nav-wrapper').find('.event-date');
        var detailedInfo = initial.next();
        var lessDetailed = initial.prev();
        initial.addClass('animated fadeOut').css('pointer-events', 'none');

        //show more info
        if(buttonMode == 'meer info'){
            setTimeout(function(){
                dateInsideNav.removeClass(invisible).addClass('animated fadeIn');
                detailedInfo.removeClass(invisible).removeClass('animated fadeOut').addClass('animated fadeIn').css('pointer-events', 'auto');
            }, 1000);
        }
        // show less info
        if(buttonMode == 'minder info'){
            setTimeout(function(){
                lessDetailed.removeClass('animated fadeOut').addClass('animated fadeIn').css('pointer-events', 'auto');
            }, 1000);
        }

    });

});

// when clicking on a flipster item
function animateEvent(element){

    var currentEvent   = $(element);
    var dateAndTime    = currentEvent.find('.date-and-time');
    var kosten         = currentEvent.find('.kosten');
    var description    = currentEvent.find('.description');
    var eventDate      = currentEvent.find('.event-date');
    var countdown      = currentEvent.find('.time-till-event');
    var eventbrite     = currentEvent.find('.eventbrite');
    var imgUrl         = currentEvent.find('.event-block-background-image').attr('src');

    $('.full-background-image').attr('src', imgUrl);

    setTimeout(function() {

        eventDate.addClass('animated fadeOut');

        setTimeout(function(){
            if(dateAndTime.hasClass(hidden)){
                dateAndTime.removeClass(hidden);
                // eventbrite.removeClass('hidden');
                // description.removeClass('hidden');
                // countdown.removeClass('hidden');
            }

            dateAndTime.removeClass(hidden).removeClass('fadeOutDown').addClass('animated fadeInUp');
            kosten.removeClass(hidden + ' slideOutUp').addClass('animated slideInDown');;
            kosten.find('.kosten-text').animate({opacity: '1'}, 2500);
            eventbrite.removeClass(hidden + ' slideOutLeft').addClass('animated slideInLeft');
            countdown.removeClass(hidden + ' fadeOut').addClass('animated fadeIn');

            // eventDate.addClass('hidden');
            // description.addClass('animated fadeIn');

        }, 1500);

    }, 1000);

};

//function that resets the animations
function resetEventAnimations(event){

    var event       = $(event);
    var dateAndTime = event.find('.date-and-time');
    var description = event.find('.description');
    var eventDate   = event.find('.event-date');
    var kosten      = event.find('.kosten');
    var kostenText  = kosten.find('.kosten-text');
    var eventBrite  = event.find('.eventbrite');
    var countdown   = event.find('.time-till-event');

    setTimeout(function(){
        dateAndTime.removeClass('fadeInUp').addClass('fadeOutDown');
        // description.removeClass('fadeIn').addClass('fadeOut');
        setTimeout(function(){
            // dateAndTime.addClass('hidden');
            // description.addClass('hidden');
            eventDate.removeClass(hidden).removeClass('fadeOut').addClass('fadeIn');
            // eventBrite.addClass('hidden');
            // countdown.addClass('hidden');
        }, 1500);
        eventBrite.removeClass('slideInleft').addClass('slideOutLeft');
        countdown.removeClass('fadeIn').addClass('fadeOut');
        kostenText.animate({opacity: '0'}, 1000, 'linear', function(){
            kosten.removeClass('slideInDown').addClass('slideOutUp');
        });
    }, 2000);

};
