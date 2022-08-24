@extends('site.master')
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
    <div class="title-section coursesdetail-title">
        <div class="container">
            <div class="inner-menu">
                {{--                <a href="#subjectArea" class="btn-link"><span class="button">Browse Our Courses</span></a>--}}
                <a href="{{route('site.course-index')}}" class="btn-link"><span class="button">Browse Our Courses</span></a>
                <a href="#" class="btn-link btn-opener open"><span class="opener"><span>&nbsp;</span></span></a>
            </div>
            {{--                        <a href="{{route('site.course-class-enrollment', $class->id())}}" class="btn btn-primary btn-enroll">Enroll--}}
            {{--                            Now <i class="icon-link ms-3 align-items-center"></i></a>--}}
            <div class="fields-menu">
                <h2>Browse Our Subject Fields</h2>
                <ul>
                    @foreach($subjectFields as $subjectField)
                        @if($subjectField != null)
                            <li>
                                <a href="{{ route('site.course-index', ['subject_areas' => [$subjectField->id()]]) }}">{{$subjectField->name()}}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            @if($specific != null)
                <h1>{{$specific->title()}}</h1>
            @endif
        </div>
    </div>
    <div class="container">
        <h1></h1>
        <div id='calendar'></div>
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
