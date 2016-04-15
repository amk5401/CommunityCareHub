/**
 * Created by Adam Prout on 4/13/2016.
 */

$(document).on('ready', function() {
    $('#personal-calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        defaultDate: '2016-04-20',
        editable: true,
        events: [
            {
                title: 'Event for Carlu',
                start: '2016-04-20'
            }
        ]
    });

    // need this for fullcalendar to work with bootstrap tabs
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $('#personal-calendar').fullCalendar('render');
    });

    $("#addCalendarEvent-modal").on('hide.bs.modal', function () {
        console.log('add calendar event modal is closing.');
    });
})
