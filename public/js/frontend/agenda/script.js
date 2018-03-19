$( document ).ready(function() {

    //menu background update
    $('.overlay').addClass('overlay-agenda');
    $('.menu-bg').addClass('agenda-menu-bg');

    //next clicked
    $('.next-event').click(function(){

        var current = $('.event-wrapper').not('.hidden');
        var next = current.next().hasClass("event-wrapper") ? current.next() : $(".event-wrapper").first();

        current.removeClass('animated fadeInRight').fadeOut(500, function(){
            current.addClass('hidden');
            current.removeAttr('style');
        });
        next.removeClass('hidden').addClass('animated fadeInRight');

    });

    //previous arrow click
    $('.previous-event').click(function(){
        var current = $('.event-wrapper').not('.hidden');
        var previous = current.prev().hasClass("event-wrapper") ? current.prev() : $(".event-wrapper").last();
        current.removeClass('animated fadeInRight').fadeOut(500, function(){
            current.addClass('hidden');
            current.removeAttr('style');
        });
        previous.removeClass('hidden').addClass('animated fadeInRight');
    });

    //more info-block
    $('.more-info').click(function(){
        var buttonMode = $(this).attr('data-mode');
        if(buttonMode == 'meer info'){
            var initial = $(this).parent().parent();
            var detailedInfo = initial.next();
            initial.addClass('animated fadeOut').css('pointer-events', 'none');
            setTimeout(function(){
                detailedInfo.removeClass('hidden').removeClass('animated fadeOut').addClass('animated fadeIn').css('pointer-events', 'auto');
            }, 1000);
        }
        if(buttonMode == 'minder info'){
            var initial = $(this).parent().parent();
            var lessDetailed = initial.prev();
            initial.addClass('animated fadeOut').css('pointer-events', 'none');
            setTimeout(function(){
                lessDetailed.removeClass('animated fadeOut').addClass('animated fadeIn').css('pointer-events', 'auto');
            }, 1000);
        }
    });

    $('.fancy-list').one('DOMSubtreeModified',function(){});
    // console.log($('.cd-dropdown').addClass('hallo'));
    //
    // $('.cd-dropdown > span > span').children().children().change(function(){
    //
    // });


    // var events = $(".events").flipster({
    //     buttons: true,
    //     // style: 'flat',
    //     // spacing: -0.25,
    //     onItemSwitch: function(currentItem, previousItem){
    //         animateEvent(currentItem);
    //         // if($(previousItem).hasClass('flipster__item--past')){
    //         //     resetEventAnimations(previousItem);
    //         // }
    //         resetEventAnimations(previousItem);
    //         // console.log($(currentItem).attr('class'));
    //     }
    // });

    //start flipster at next-event
    //need a way to dynamically add this to the
    // events.flipster('jump', $('.next-event'));

    //trigger dropdown
    $( '#cd-dropdown' ).dropdown( {
		gutter : 1
	} );

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
            if(dateAndTime.hasClass('hidden')){
                dateAndTime.removeClass('hidden');
                // eventbrite.removeClass('hidden');
                // description.removeClass('hidden');
                // countdown.removeClass('hidden');
            }

            dateAndTime.removeClass('hidden').removeClass('fadeOutDown').addClass('animated fadeInUp');
            kosten.removeClass('hidden slideOutUp').addClass('animated slideInDown');;
            kosten.find('.kosten-text').animate({opacity: '1'}, 2500);
            eventbrite.removeClass('hidden slideOutLeft').addClass('animated slideInLeft');
            countdown.removeClass('hidden fadeOut').addClass('animated fadeIn');

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
            eventDate.removeClass('hidden').removeClass('fadeOut').addClass('fadeIn');
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
