
!function($) {
    "use strict";

    var CalendarApp = function() {
        this.$body = $("body")
        this.$calendar = $('#calendar'),
        this.$event = ('#calendar-events div.calendar-events'),
        this.$categoryForm = $('#add-new-event form'),
        this.$extEvents = $('#calendar-events'),
        this.$modal = $('#my-event'),
        this.$saveCategoryBtn = $('.save-category'),
        this.$calendarObj = null
    };

    /* Initializing */
    CalendarApp.prototype.init = function() {
        /*  Initialize the calendar  */
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var form = '';
        var today = new Date($.now());

        var defaultEvents =  [{
                title: 'Released Ample Admin!',
                start: new Date($.now() + 506800000),
                className: 'bg-info'
            }, {
                title: 'This is today check date',
                start: today,
                end: today,
                className: 'bg-danger'
            }, {
                title: 'This is your birthday',
                start: new Date($.now() + 848000000),
                className: 'bg-info'
            },{
                title: 'your meeting with john',
                start: new Date($.now() - 1099000000),
                end:  new Date($.now() - 919000000),
                className: 'bg-warning'
            },{
                title: 'your meeting with john',
                start: new Date($.now() - 1199000000),
                end: new Date($.now() - 1199000000),
                className: 'bg-purple'
            },{
                title: 'your meeting with john',
                start: new Date($.now() - 399000000),
                end: new Date($.now() - 219000000),
                className: 'bg-info'
            },  
              {
                title: 'Hanns birthday',
                start: new Date($.now() + 868000000),
                className: 'bg-danger'
            },{
                title: 'Like it?',
                start: new Date($.now() + 348000000),
                className: 'bg-success'
            }];

        var $this = this;
        $this.$calendarObj = $this.$calendar.fullCalendar({
            slotDuration: '00:15:00', /* If we want to split day time each 15minutes */
            minTime: '06:00:00',
            maxTime: '24:00:00',
            defaultView: 'agendaDay',
            handleWindowResize: true,   
             
            header: {
                left: 'title',
                right: 'prev,next today'
            },
            events: defaultEvents,
            eventLimit: true, // allow "more" link when too many events
            selectable: true
        });
    },

   //init CalendarApp
    $.CalendarApp = new CalendarApp, $.CalendarApp.Constructor = CalendarApp
    
}(window.jQuery),

//initializing CalendarApp
function($) {
    "use strict";
    $.CalendarApp.init()
}(window.jQuery);