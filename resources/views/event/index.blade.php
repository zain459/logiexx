@extends('layout')
@section('title', 'Events')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Events</h3>

        <a href="{{ route('event-create') }}" class="btn btn-primary btn-sm">New Event</a>
    </div>
    <div class="card mb-3">
        <div class="card-header d-flex flex-column flex-md-row md-align-items-center justify-content-between">
            <div class="title">Filters</div>
        </div>
        <div class="card-body">
            <form method="GET" action="{{route('event-index')}}" autocomplete="off">
                <div class="row g-3 align-items-end">
                    <div class="col-md-3 form-group">
                        <label class="form-label">Key Word</label>
                        <input type="text" name="key" class="form-control" value="{{request()->get('key')}}">
                    </div>

                    <div class="col-md-3 form-group">
                        <label class="form-label">Date</label>
                        <input type="text" name="date-filter" class="form-control" autocomplete="off"
                               value="{{request()->get('date-filter')}}"/>
                    </div>

                    <div class="col-md-4 form-group">
                        <button class="btn btn-primary" type="submit">
                            Search
                        </button>
                        <a href="{{route('event-index')}}" class="btn btn-outline-primary">Clear</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>description</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Image</th>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @forelse($events as $event)
                <tr>
                    <td>{{ $event->title() }}</td>
                    <td>{!! html_entity_decode($event->description()) !!}</td>
                    <td>{{ $event->startDate()->toDateString() }}</td>
                    <td>{{ $event->endDate()->toDateString() }}</td>
                    @if($event->image())
                        <td><img src="{{ asset('storage/'. $event->image()) }}" width="100" alt="Image"></td>
                    @else
                        <td><img src="{{asset('images/f-logo.png')}}" width="100" alt="Image"></td>
                    @endif
                    <td>
                        <a href="{{ route('event-edit', $event->id()) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-edit-2 align-middle me-2">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                        </a>
                        <form method="post" action="{{ route('event-delete', $event->id()) }}">
                            @csrf
                            <button type="submit" class="btn text-danger p-0" onclick="return confirm('Are you sure?')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-trash align-middle text-danger">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center"> No record found</td>
                </tr>

            @endforelse
            </tbody>
        </table>
        @if($events != null)
            <div class="pagination d-flex justify-content-end align-items-center">
                {!! $events->links() !!}
            </div>
        @endif
    </div>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
    <script type="text/javascript">
        $(function () {

            $('input[name="date-filter"]').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                }
            });

            $('input[name="date-filter"]').on('apply.daterangepicker', function (ev, picker) {
                $(this).val(picker.startDate.format('YYYY-MM-DD') + ' ' + picker.endDate.format('YYYY-MM-DD'));
            });

            $('input[name="date-filter"]').on('cancel.daterangepicker', function (ev, picker) {
                $(this).val('');
            });

        });
    </script>
@endsection
