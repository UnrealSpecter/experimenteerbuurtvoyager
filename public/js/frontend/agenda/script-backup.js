$( document ).ready(function() {

    var events = $(".events").flipster({
        buttons: true,
        // style: 'flat',
        // spacing: -0.25,
        onItemSwitch: function(currentItem, previousItem){
            animateEvent(currentItem);
            // if($(previousItem).hasClass('flipster__item--past')){
            //     resetEventAnimations(previousItem);
            // }
            resetEventAnimations(previousItem);
            // console.log($(currentItem).attr('class'));
        }
    });

    //start flipster at next-event
    //need a way to dynamically add this to the
    events.flipster('jump', $('.next-event'));

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
