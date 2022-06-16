@extends('layout')
@section('title', 'Create Event')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Add Event</h3>

        <a href="{{ route('event-index') }}" class="btn btn-sm btn-primary">
            View All Events
        </a>
    </div>
    <event-create-component></event-create-component>
@endsection
