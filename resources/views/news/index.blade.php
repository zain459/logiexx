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
                <th>Short Description</th>
                <th>Long Description</th>
                <th>Posted Date </th>
                <th>link</th>
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
                    <td>
                        <form method="post" action="{{ route('news-delete', $item->id()) }}">
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
                    <td colspan="8" class="text-center"> No record found</td>
                </tr>


            @endforelse
            </tbody>
        </table>
    </div>

@endsection
