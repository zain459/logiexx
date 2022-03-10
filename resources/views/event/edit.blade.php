@extends('layout')
@section('title', 'Event Edit')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>{{ $event->title() }}</h3>

        <a href="{{ route('event-index') }}" class="btn btn-sm btn-primary">
            View All Events
        </a>
    </div>

    <event-edit-component :event="{{ $event }} "></event-edit-component>

@endsection

