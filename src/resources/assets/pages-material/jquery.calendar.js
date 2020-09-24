/**
* Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
* Author: Mannatthemes
* Component: Full-Calendar
*/
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay'
      },
      defaultDate: '2020-04-12',
      navLinks: true, // can click day/week names to navigate views
      selectable: true,
      selectMirror: true,
      select: function(arg) {
        var title = prompt('Event Title:');
        if (title) {
          calendar.addEvent({
            title: title,
            start: arg.start,
            end: arg.end,
            allDay: arg.allDay
          })
        }
        calendar.unselect()
      },
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: [
        {
          title: 'Business Lunch',
          start: '2020-04-03T13:00:00',
          constraint: 'businessHours',
          className: 'bg-soft-warning',
        },
        {
          title: 'Meeting',
          start: '2020-04-13T11:00:00',
          constraint: 'availableForMeeting', // defined below
          className: 'bg-soft-purple',
          textColor: 'white'
        },
        {
          title: 'Conference',
          start: '2020-04-27',
          end: '2020-04-29',
          className: 'bg-soft-primary',
        },
        

        // areas where "Meeting" must be dropped
        {
          groupId: 'availableForMeeting',
          start: '2020-04-11T10:00:00',
          end: '2020-04-11T16:00:00',
          title: 'Repeating Event',
          className: 'bg-soft-purple',
        },
        {
          groupId: 'availableForMeeting',
          start: '2020-04-15T10:00:00',
          end: '2020-04-15T16:00:00',
          title: 'holiday',
          className: 'bg-soft-success',
        },

        // red areas where no events can be dropped
        
        {
          start: '2020-04-06',
          end: '2020-04-08',
          overlap: false,
          title: 'New Event',
          className: 'bg-soft-pink',
        }
      ],
      eventClick: function(arg) {
        if (confirm('delete event?')) {
          arg.event.remove()
        }
      }
    });

    calendar.render();
  });
