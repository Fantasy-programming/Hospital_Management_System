document.addEventListener("DOMContentLoaded", function () {
  let calendarEl = document.getElementById("calendar");
  let calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
      left: "prev,next today",
      center: "title",
      right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth",
    },
    themeSystem: "bootstrap5",
    buttonIcons: {
      prev: "chevron-left",
      next: "chevron-right",
      prevYear: "chevrons-left", // double chevron
      nextYear: "chevrons-right", // double chevron
    },

    initialView: "dayGridMonth",
    height: 650,
    navLinks: true, // can click day/week names to navigate views
    businessHours: true, // display business hours
    editable: true,
    eventDurationEditable: true,
    forceEventDuration: true,

    events: "/doctor/events",
    selectable: true,
    eventDrop: function (info) {
      info.jsEvent.preventDefault();

      console.log(info.event.endStr);
      console.log(info.event.allDay);

      fetch("/doctor/events", {
        method: "PUT",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          requestType: "updateEvent",
          id: info.event.id,
          start: info.event.start,
          end: info.event.end,
          title: info.event.title,
          description: info.event.extendedProps.Description,
          status: info.event.extendedProps.Status,
        }),
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.status == 1) {
            Swal.fire("event updated successfully", "", "success");
          } else {
            Swal.fire(data.error, "", "error");
          }

          // Refresh the calendar
          calendar.refetchEvents();
        });
    },
    eventResize: function (info) {
      info.jsEvent.preventDefault();

      fetch("/doctor/events", {
        method: "PUT",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          requestType: "updateEvent",
          id: info.event.id,
          start: info.event.start,
          end: info.event.end,
          title: info.event.title,
          description: info.event.extendedProps.Description,
          status: info.event.extendedProps.Status,
        }),
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.status == 1) {
            Swal.fire("event updated successfully", "", "success");
          } else {
            Swal.fire(data.error, "", "error");
          }

          // Refresh the calendar
          calendar.refetchEvents();
        })
        .catch((error) => {
          console.log(error);
          info.revert();
        });
    },
    select: async function (start, end, allDay) {
      const { value: formValues } = await Swal.fire({
        title: "Create Event",
        html:
          '<input id="swalEvnTitle" class="swal2-input" placeholder="Enter Title">' +
          '<textarea id="swalEvnDesc" class="swal2-textarea" placeholder="Enter Description"></textarea>',
        focusConfirm: false,
        preConfirm: () => {
          return [
            document.getElementById("swalEvnTitle").value,
            document.getElementById("swalEvnDesc").value,
          ];
        },
      });

      if (formValues) {
        try {
          const response = await fetch("/doctor/events", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify({
              requestType: "addEvent",
              start: start.startStr,
              end: start.endStr,
              eventData: formValues,
            }),
          });

          const data = await response.json();

          if (data.status == 1) {
            Swal.fire("event added successfully", "", "success");
          } else {
            Swal.fire(data.error, "", "error");
          }

          // Refresh the calendar
          calendar.refetchEvents();
        } catch (error) {
          console.log(error);
        }
      }
    },
    eventClick: function (info) {
      info.jsEvent.preventDefault();
      info.el.style.borderColor = "red";

      Swal.fire({
        title: info.event.title,
        icon: "info",
        html: `<b>Start:</b> ${info.event.start.toLocaleString()}<br><b>End:</b> ${info.event.end.toLocaleString()}<br>
        <b>Description</b>: ${info.event.extendedProps.Description}<br>
        <b>Status</b>: ${info.event.extendedProps.Status}<br>`,
        showCloseButton: true,
        showCancelButton: true,
        cancelButtonText: "Close",
        confirmButtonText: "Delete Event",
      }).then((result) => {
        if (result.isConfirmed) {
          // Delete event from the DB
          fetch("/doctor/events", {
            method: "DELETE",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify({
              requestType: "deleteEvent",
              id: info.event.id,
            }),
          })
            .then((response) => response.json())
            .then((data) => {
              if (data.status == 1) {
                Swal.fire("event deleted successfully", "", "success");
              } else {
                Swal.fire(data.error, "", "error");
              }

              // Refresh the calendar
              calendar.refetchEvents();
            })
            .catch((error) => {
              console.log(error);
              info.revert();
            });
        }
      });
    },
  });

  calendar.render();
});
