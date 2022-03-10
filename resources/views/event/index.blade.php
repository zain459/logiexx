@extends('layout')
@section('title', 'Events')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Events</h3>

        <a href="{{ route('event-create') }}" class="btn btn-primary btn-sm">New Event</a>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>description</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
            </thead>
            <tbody>
            @forelse($events as $event)
                <tr>
                    <td>{{ $event->title() }}</td>
                    <td>{!! html_entity_decode($event->description()) !!}</td>
                    <td>{{ $event->startDate()->toDateString() }}</td>
                    <td>{{ $event->endDate()->toDateString() }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center"> No record found</td>
                </tr>

            @endforelse
            </tbody>
        </table>
    </div>

@endsection
