@extends('layout')
@section('title', 'News')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>News</h3>

        <a href="{{ route('news-create') }}" class="btn btn-primary btn-sm">New News</a>
    </div>

    <div class="card mb-3">
        <div class="card-header d-flex flex-column flex-md-row md-align-items-center justify-content-between">
            <div class="title">Filters</div>
        </div>
        <div class="card-body">
            <form method="GET" action="{{route('news-index')}}">
                <div class="row g-3 align-items-end">
                    <div class="col-md-4 form-group">
                        <label class="form-label">Key Word</label>
                        <input type="text" name="key" class="form-control" value="{{request()->get('key')}}">
                    </div>

                    <div class="col-md-3 form-group">
                        <label class="form-label">Post Date</label>
                        <input type="date" name="date" class="form-control" autocomplete="off"
                               value="{{request()->get('date')}}"/>
                    </div>

                    <div class="col-md-4 form-group">
                        <button class="btn btn-primary" type="submit">
                            Search
                        </button>
                        <a href="{{route('news-index')}}" class="btn btn-outline-primary">Clear</a>
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
                <th>Short Description</th>
                <th>Long Description</th>
                <th>Posted Date</th>
                <th>Image</th>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @forelse($news as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{strip_tags( $item->short_description )}}</td>
                    <td>{{ strip_tags($item->long_description) }}</td>
{{--                    <td>{!! html_entity_decode($item->long_description) !!}</td>--}}
                    <td>{{ $item->posted_date }}</td>
                    <td><img src="{{ asset('storage/'. $item->image()) }}" width="100"></td>

                    <td class="table-action">
                        <a href="{{ route('news-edit', $item->id()) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-edit-2 align-middle me-2">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                        </a>
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
                    <td colspan="6" class="text-center"> No record found</td>
                </tr>

            @endforelse
            </tbody>
        </table>
        @if($news != null)
            <div class="pagination d-flex justify-content-end align-items-center">
                {!! $news->links() !!}
            </div>
        @endif
    </div>

@endsection
