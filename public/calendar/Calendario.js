$(document).ready(function(){
$('#calendar').fullCalendar(
			 {
		      header: {
		        left: 'prev,next today',
		        center: 'title',
		        right: 'month,agendaWeek,agendaDay,listMonth'
		      },
		      defaultDate: '2019-04-06',
		      navLinks: true, // can click day/week names to navigate views
		      businessHours: true, // display business hours
		      editable: true,
		      eventSources:[{
		      	events: [
		        {
		          title: 'que onda we',
		          descripcion:'Es un buen tutorial',
		          start: '2019-04-03T13:00:00',
		          constraint: 'businessHours'
		        },
		        {
		          title: 'Meeting',
		          descripcion:'Es un buen tutorial el de Develoteca',
		          start: '2019-04-13T11:00:00',
		          constraint: 'availableForMeeting'
		        }
		      ],
		      color:"black",
		      textColor:"white"

		      }],
		      eventClick:function(calEvent,jsEvent,view)
		      {
		      	 $("#descripcion").html(calEvent.descripcion);
		      	 $("#exampleModal").modal();
		      }
		  }
	);
});