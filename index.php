<!DOCTYPE html>
<html lang="es">   
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon_v2010.ico">

    <title>Calendario</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom styles for this template
    <link href="css/jumbotron-narrow.css" rel="stylesheet"> -->

    <!-- fullcalendar -->
    <link href="libraries/fullcalendar/lib/fullcalendar.min.css" rel="stylesheet">
    <link href="libraries/fullcalendar/lib/fullcalendar.print.css" rel='stylesheet' media='print'>
    <link href="libraries/fullcalendar/lib/bootstrap-fullcalendar.css" rel="stylesheet">
    <link href="libraries/fullcalendar/scheduler.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/octicons/3.5.0/octicons.min.css" rel="stylesheet">
    <link href="libraries/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">

     
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

    body {
        margin: 0;
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 14px;
    }

    #calendar {
        max-width: 900px;
        margin: 50px auto;
    }

    .closeon{
        position: absolute;
        top: 0;
        right: 0;
        margin-top: 3px;
        margin-right: 3px;
        z-index: 10;
    }

</style>

  </head>

  <body>
        <div class="container">
          <div class="header clearfix">
            <nav>
              <ul class="nav nav-pills pull-right">
                <li role="presentation" class="active"><a href="#">Mi calendario</a></li>
              </ul>
            </nav>
            <h3 class="text-muted">Calendario</h3>
          </div>
           <div class="jumbotron">
        <h1>Calendario de citas</h1>
        <p class="lead">Este calendario esta destinado a ser usado en la asignacion de citas.</p>
      </div>

      <div class="row marketing">
        <div class="col-lg-12">
          <h4>calendario</h4>
          
            <div id='calendar'></div>

        </div>

     
      </div>


      <div class="modal fade" id="modalCitaNueva" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Nueva cita</h4>
          </div>
          <div class="modal-body">
                <form class="form-horizontal" id="frm-event" role="form">
                    <div class="form-group">
                        <label class="col-sm-2 control-label" for="descripcionCita">Descripción</label>
                        <div class="col-sm-15">
                            <textarea id="descripcionCita" name="event[descripcionCita]" style="width: 76%;" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-2 control-label">Inicio
                            <span class="label label-success" id="startDate"></span></label>
                            <input type="hidden" id="EventStartDate" name="event[startDate]" value=""/>
                        </div>
                        <div class="col-lg-6 form-group">
                            <label class="col-sm-2 control-label">Fin 
                            <span class="label label-warning" id="enDate"></span></label>
                            <input type="hidden" id="EventEnDate" name="event[enDate]" value=""/>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="control-label">Color del evento </label>
                            <div id="cp2" class="input-group colorpicker-component">
                                  <input id="color" type="text" value="#23527c" name="event[color]" class="form-control"/>
                                  <span class="input-group-addon"><i></i></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" id="savEvent">Guardar</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
 </div>
      <footer class="footer">
        <p>&copy; 2015 Company, Inc.</p>
      </footer>

       

    <script src="libraries/fullcalendar/lib/moment.min.js" type="text/javascript"></script>

    <!-- <script src="js/moment/moment-with-locales.js" type="text/javascript"></script> -->

    <script src="libraries/fullcalendar/lib/jquery.min.js"></script>
    
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


    <script src="libraries/fullcalendar/lib/fullcalendar.min.js"></script>
    <script src='http://fullcalendar.io/js/fullcalendar-2.6.0/lang-all.js'></script>
    
    <script src='libraries/fullcalendar/lib/gcal.js'></script> 

    <script src='libraries/fullcalendar/scheduler.js'></script>

    <script src="libraries/bootbox/bootbox.min.js"></script>

    <script src="libraries/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>

    <script type="text/javascript">
        
            $(function() { // document ready


                $('#cp2').colorpicker();   

                $(document).on('click', "#savEvent", function(){
                    $.ajax({
                        url: 'savEvent.php',
                        dataType: 'json',
                        'type': 'POST',  
                        data: $("#frm-event").serialize(),
                        success: function(data) {

                            $('#calendar').fullCalendar('unselect');

                            $('#calendar').fullCalendar('renderEvent',
                                {
                                    id: data.id,
                                    title: data.descripcionCita,
                                    start: new Date(data.startDate),
                                    end: new Date(data.enDate),
                                    color: data.color
                                  //  allDay: allDay
                                },
                                true // make the event "stick"
                            );
                            $('#modalCitaNueva').modal('hide');
                        },
                        error:function(respuesta) {
                            console.log(respuesta);
                        }
                    });
                });

                $('#modalCitaNueva').on('hidden.bs.modal', function () {
                    $('#calendar').fullCalendar('unselect');
                });

                var newDate = new Date();

                $('#calendar').fullCalendar({
                    schedulerLicenseKey: 'GPL-My-Project-Is-Open-Source',
                    now: newDate,
                    timeFormat: 'hh:mm a',
                    columnFormat: 'ddd M /D',
                    lang: 'es',
                    selectable: true,
                    selectHelper: true,
                    editable: false, // enable draggable events
                    unselectAuto: false,
                    aspectRatio: 1.5,
                    scrollTime: '00:00', // undo default 6am scrollTime
                    selectOverlap: false,
                    slotEventOverlap: false,
                    BusinessHours: true,
                    eventOverlap: function(stillEvent, movingEvent){
                        console.log("@@@@@");
                        return false;
                    },
                    header: {
                        left: 'today prev,next',
                        center: 'Candario oscar',
                        //right: 'timelineDay,timelineThreeDays,agendaWeek,month'
                        right: 'agendaWeek,month'
                    },
                    defaultView: 'agendaWeek',
                    views: {
                        timelineThreeDays: {
                            type: 'timeline',
                            duration: { days: 3 }
                        }
                    },
                    resourceLabelText: 'Rooms',
                    resources: [
                        { id: 'a', title: 'Auditorium A' },
                        { id: 'b', title: 'Auditorium B', eventColor: 'green' },
                        { id: 'c', title: 'Auditorium C', eventColor: 'orange' },
                        { id: 'd', title: 'Auditorium D', children: [
                            { id: 'd1', title: 'Room D1' },
                            { id: 'd2', title: 'Room D2' }
                        ] },
                        { id: 'e', title: 'Auditorium E' },
                        { id: 'f', title: 'Auditorium F', eventColor: 'red' },
                        { id: 'g', title: 'Auditorium G' },
                        { id: 'h', title: 'Auditorium H' },
                        { id: 'i', title: 'Auditorium I' },
                        { id: 'j', title: 'Auditorium J' },
                        { id: 'k', title: 'Auditorium K' },
                        { id: 'l', title: 'Auditorium L' },
                        { id: 'm', title: 'Auditorium M' },
                        { id: 'n', title: 'Auditorium N' },
                        { id: 'o', title: 'Auditorium O' },
                        { id: 'p', title: 'Auditorium P' },
                        { id: 'q', title: 'Auditorium Q' },
                        { id: 'r', title: 'Auditorium R' },
                        { id: 's', title: 'Auditorium S' },
                        { id: 't', title: 'Auditorium T' },
                        { id: 'u', title: 'Auditorium U' },
                        { id: 'v', title: 'Auditorium V' },
                        { id: 'w', title: 'Auditorium W' },
                        { id: 'x', title: 'Auditorium X' },
                        { id: 'y', title: 'Auditorium Y' },
                        { id: 'z', title: 'Auditorium Z' }
                    ],
                    events: function(start, end, timezone, callback){

                        $.ajax({
                            url: 'loaData.php',
                            dataType: 'json',
                            data: {
                                // our hypothetical feed requires UNIX timestamps
                                start: start.unix(),
                                end: end.unix()
                            },
                            success: function(events) {
                                callback(events);
                            }
                        });



                    },
                    select: function(start, end, jsEvent, view, resource) {
                    
                        $("#startDate").html(start.format("YYYY-MM-DD  hh:mm"));
                        $("#enDate").html(end.format("YYYY-MM-DD  hh:mm"));
                        $("#EventStartDate").val(start.format("YYYY-MM-DD  hh:mm"));
                        $("#EventEnDate").val(end.format("YYYY-MM-DD  hh:mm"));

                        $("#modalCitaNueva").modal("show");
                    },
                    eventResize: function(event, delta, revertFunc, jsEvent, ui, view){
                        bootbox.confirm({
                            message: "Esta seguro de realizar el cambio de cita?", 
                            locale: 'es', 
                            callback: function(result) {                
                                if (!result) {                                             
                                    revertFunc();  
                                }                                
                            },
                            buttons: {
                                confirm: {
                                    label: 'Aceptar',
                                },
                                cancel: {
                                    label: 'Cancelar',
                                }
                            },
                        });
                    },
                    eventDrop : function(event, delta, revertFunc, jsEvent, ui, view ){
                        bootbox.confirm({
                            message: "Esta seguro de realizar el cambio de cita?", 
                            locale: 'es', 
                            callback: function(result) {                
                                if (!result) {                                             
                                    revertFunc();  
                                }                                
                            },
                            buttons: {
                                confirm: {
                                    label: 'Aceptar',
                                },
                                cancel: {
                                    label: 'Cancelar',
                                }
                            },
                        });
                    },
                    eventRender: function(event, element) {
                        e  = $("<a id='removEvent"+event._id+"' class='closeon'>X</a>");
                        element.append( e );
                        $(document).on("click", "#removEvent"+event._id, function() {
                            $('#calendar').fullCalendar('removeEvents',event._id);
                        });

                        element.on("dblclick",function(){
                                $("#descripcionCita").val(event.title);
                                $("#startDate").html(event.start.format("YYYY-MM-DD  hh:mm"));
                                $("#enDate").html(event.end.format("YYYY-MM-DD  hh:mm"));
                                $("#color").val(event.color);
                                $('#modalCitaNueva').modal('show');
                        });  
//
                    },
                    /*dayClick: function(date, jsEvent, view, resource) {
                        console.log(
                            'dayClick',
                            date.format(),
                            resource ? resource.id : '(no resource)'
                        );
                    }*/
                });
            
            });

    </script>

    
   

   <!--  -->

    <!--<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"  integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI="  crossorigin="anonymous"></script> -->

    
    <!-- Latest compiled and minified JavaScript -->
   

    
    



  </body>