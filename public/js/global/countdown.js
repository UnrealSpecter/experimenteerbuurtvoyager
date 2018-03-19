$(document).ready(function(){

        function initializeClock(element, endTime){
            var timeinterval = setInterval(function(){
                var t = getTimeRemaining(endTime);
                sethtml(element,t.days,t.hours,t.minutes,t.seconds, t.total);
                if(t.total <= 0){
                    sethtml(element,0,0,0,0, t.total);
                    clearInterval(timeinterval);
                }
            }, 1000);
        }

        $('.timer').each(function(){
            initializeClock($(this),$(this).data("date"));
        });
});

function getTimeRemaining(endTime){
    var d = moment(endTime);
    var m = moment().tz("Europe/Amsterdam");

    var total = d.diff(m);
    var seconds = d.diff(m, 'seconds') % 60;
    var minutes = d.diff(m, 'minutes') % 60;
    var hours = d.diff(m,'hours') % 24;
    var days = d.diff(m, 'days');

    return {
        'total' : total,
        'days' : days,
        'hours' : hours,
        'minutes' : minutes,
        'seconds' : seconds
    };
}

function sethtml(element, days, hours, minutes, seconds, total)
{
    if(total <= 0){
        var eventbrite = element.parent().siblings('.eventbrite');
        var kosten = element.parent().siblings('.kosten');
        if(eventbrite){
            eventbrite.addClass('hidden');
        }
        if(kosten) {
            kosten.addClass('hidden');
        }
        element.parent().addClass('hidden');
        element.parent().parent().addClass('hidden');
        element.parent().parent().next().find('.event-background').css('height', '100%');

    }
    else {
        element.html('<span class="icon glyphicon glyphicon-time"></span><span class="date"> ' +
            'Nog ' +
            days + 'd ' +
            hours + 'u ' +
            minutes + 'm ' +
            seconds + 's' +
            '</span>'
        );
    }

}
