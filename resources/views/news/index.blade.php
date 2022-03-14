@extends('layout')
@section('title', 'News')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Events</h3>

        <a href="{{ route('news-create') }}" class="btn btn-primary btn-sm">New Event</a>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>External Link</th>
                <th>Short Description</th>
                <th>Long Description</th>
                <th>Posted Date </th>
                <th>Event Date</th>
                <th>Status</th>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @forelse($news as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->short_description }}</td>
                    <td>{{ $item->long_description }}</td>
                    <td>{{ $item->posted_date }}</td>
                    <td>{{ $item->event_date }}</td>
                    <td>{{ $item->link }}</td>
                    <td><img src="{{ asset('storage/'.$item->image) }}"></td>
                    <td><a href="">Edit</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="text-center"> No record found</td>
                </tr>


            @endforelse
            </tbody>
        </table>
    </div>

@endsection
