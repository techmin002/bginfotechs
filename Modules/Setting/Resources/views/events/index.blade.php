@extends('setting::layouts.master')
@section('title', 'Events')

@section('content')
    <link rel="stylesheet" href="{{ asset('backend/plugins/fullcalendar/main.css') }}">

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Calendar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Calendar</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="sticky-top mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Events</h4>
                                </div>
                                <div class="card-body">
                                    <!-- the events -->
                                    <div id="external-events">
                                        @foreach ($events as $event)
                                            <div class="external-event" style="background-color: {{ $event->color }}">
                                                {{ $event->title }}</div>
                                        @endforeach
                                        <div class="checkbox">
                                            <label for="drop-remove">
                                                <input type="checkbox" id="drop-remove">
                                                remove after drop
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Create Event</h3>
                                </div>
                                <div class="card-body">

                                    <form action="{{ route('events.store') }}" method="post">
                                        @csrf

                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <button id="add-new-event" type="button"
                                                    class="btn btn-secondary">Title</button>
                                            </div>
                                            <input id="new-event" type="text" name="title" class="form-control"
                                                placeholder="Event Title">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label class="input-group-text" for="inputGroupSelect01">Event For</label>
                                            </div>
                                            <select class="custom-select" name="user_type" id="inputGroupSelect01">
                                                <option selected>Select User Type</option>
                                                <option value="staff">Staff</option>
                                                <option value="student">Student</option>
                                                <option value="all">All</option>
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <button id="add-new-event" type="button" class="btn btn-secondary">Start
                                                    Date</button>
                                            </div>
                                            <input id="new-event" type="date" name="start_date" class="form-control"
                                                placeholder="Event Title">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <button id="add-new-event" name="end_date" type="button"
                                                    class="btn btn-secondary">End Date</button>
                                            </div>
                                            <input id="new-event" type="date" class="form-control" name="end_date"
                                                placeholder="Event Title">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Description </span>
                                            </div>
                                            <textarea class="form-control" name="description" aria-label="With textarea"></textarea>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <button id="add-new-event" type="button"
                                                    class="btn btn-secondary">Color</button>
                                            </div>
                                            <input id="new-event" type="color" value="#CCCCCC" name="color"
                                                class="form-control" placeholder="Event Color">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Event</button>
                                        <button type="reset" class="btn btn-danger">Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card card-primary">
                            <div class="card-body p-0">
                                <!-- THE CALENDAR -->
                                <div id="calendar"></div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <script src="{{ asset('backend/plugins/fullcalendar/main.js') }}"></script>

    <script>
        $(function() {

            /* initialize the external events
             -----------------------------------------------------------------*/
            function ini_events(ele) {
                ele.each(function() {

                    // create an Event Object (https://fullcalendar.io/docs/event-object)
                    // it doesn't need to have a start or end
                    var eventObject = {
                        title: $.trim($(this).text()) // use the element's text as the event title
                    }

                    // store the Event Object in the DOM element so we can get to it later
                    $(this).data('eventObject', eventObject)

                    // make the event draggable using jQuery UI
                    $(this).draggable({
                        zIndex: 1070,
                        revert: true, // will cause the event to go back to its
                        revertDuration: 0 //  original position after the drag
                    })

                })
            }

            ini_events($('#external-events div.external-event'))

            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date()
            var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear()

            var Calendar = FullCalendar.Calendar;
            var Draggable = FullCalendar.Draggable;

            var containerEl = document.getElementById('external-events');
            var checkbox = document.getElementById('drop-remove');
            var calendarEl = document.getElementById('calendar');

            // initialize the external events
            // -----------------------------------------------------------------

            new Draggable(containerEl, {
                itemSelector: '.external-event',
                eventData: function(eventEl) {
                    return {
                        title: eventEl.innerText,
                        backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue(
                            'background-color'),
                        borderColor: window.getComputedStyle(eventEl, null).getPropertyValue(
                            'background-color'),
                        textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
                    };
                }
            });

            var calendar = new Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            themeSystem: 'bootstrap',
            editable: true,
            droppable: true,
            events: function(fetchInfo, successCallback, failureCallback) {
                $.ajax({
                    url: "{{ route('events.data') }}",
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        var events = [];
                        $(data).each(function() {
                            events.push({
                                title: this.title,
                                start: this.start_date,
                                end: this.end_date,
                                backgroundColor: this.color,
                                borderColor: this.color,
                                description: this.description
                            });
                        });
                        successCallback(events);
                    },
                    error: function() {
                        failureCallback();
                    }
                });
            },
            drop: function(info) {
                if (checkbox.checked) {
                    info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
            }
        });

        calendar.render();
    });
    </script>
@endsection
