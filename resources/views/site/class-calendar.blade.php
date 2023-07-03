@extends('site.master')
@section('banner-title', $specific['title']?? '')
@section('title', 'Course Detail')
@section('content')
    <html>
    <head>
        <title></title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
        <style>
            .fc-day-grid-event .fc-content {
                white-space: normal !important;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                <h1 class="mt-2">Heading</h1>
            </div>
            <div id='calendar' class="w-50 mt-2"></div>
        </div>

    </div>

    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var calendar = $('#calendar').fullCalendar({
                events: "{{ route('site.class-calendar.index', $id)

 }}",
                selectable: true,
                selectHandler: true,
                displayEventTime: true,
                header: {
                    left: 'prev, next today',
                    center: 'title',
                    right: 'month, agendaWeek, agendaDay'
                },
            });

        });

    </script>

    </body>
    </html>
@endsection
