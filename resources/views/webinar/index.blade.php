@extends('layout')
@section('title', 'Webinar Series')
@section('content')

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Webinar</h3>

        <a href="{{route('webinar-create')}}" class="btn btn-primary btn-sm">Add Webinar</a>
    </div>
    <div class="card mb-3">
        <div class="card-header d-flex flex-column flex-md-row md-align-items-center justify-content-between">
            <div class="title">Filters</div>
        </div>
        <div class="card-body">
            <form method="GET" action="{{route('webinar-index')}}">
                <div class="row g-3 align-items-end">
                    <div class="col-md-4 form-group">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" value="">
                    </div>

                    {{--                    <div class="col-md-2">--}}
                    {{--                        <div class="form-group">--}}
                    {{--                            <label class="form-label">Publication Frequency</label>--}}
                    {{--                            <select class="form-select" name="publication_frequency_id">--}}
                    {{--                                <option></option>--}}
                    {{--                                <option value="1">--}}
                    {{--                                    Annual--}}
                    {{--                                </option>--}}
                    {{--                                <option value="2">--}}
                    {{--                                    Article-by-Article--}}
                    {{--                                </option>--}}
                    {{--                                <option value="3">--}}
                    {{--                                    Bimonthly--}}
                    {{--                                </option>--}}
                    {{--                                <option value="4">--}}
                    {{--                                    Continuous Publication--}}
                    {{--                                </option>--}}
                    {{--                                <option value="5">--}}
                    {{--                                    Fortnightly--}}
                    {{--                                </option>--}}
                    {{--                                <option value="6">--}}
                    {{--                                    Irregular--}}
                    {{--                                </option>--}}
                    {{--                                <option value="7">--}}
                    {{--                                    Monthly--}}
                    {{--                                </option>--}}
                    {{--                                <option value="8">--}}
                    {{--                                    Quarterly--}}
                    {{--                                </option>--}}
                    {{--                                <option value="9">--}}
                    {{--                                    Semiannual--}}
                    {{--                                </option>--}}
                    {{--                                <option value="10">--}}
                    {{--                                    Semimonthly--}}
                    {{--                                </option>--}}
                    {{--                                <option value="11">--}}
                    {{--                                    Triannual--}}
                    {{--                                </option>--}}
                    {{--                                <option value="12">--}}
                    {{--                                    Weekly--}}
                    {{--                                </option>--}}
                    {{--                            </select>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="col-md-2">--}}
                    {{--                        <div class="form-group">--}}
                    {{--                            <label class="form-label">Fee Type</label>--}}
                    {{--                            <select class="form-select" name="fee_type">--}}
                    {{--                                <option></option>--}}
                    {{--                                <option value="free">--}}
                    {{--                                    free--}}
                    {{--                                </option>--}}
                    {{--                                <option value="paid">--}}
                    {{--                                    paid--}}
                    {{--                                </option>--}}
                    {{--                            </select>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    <div class="col-md-4 form-group">
                        <button class="btn btn-primary" type="submit">
                            Search
                        </button>
                        <a href="{{route('webinar-index')}}" class="btn btn-outline-primary">Clear</a>
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
                <th>Speaker</th>
                <th>Moderator</th>
                <th>Organization</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($webinars as $webinar)
                <tr>
                    <td>{{$webinar->title()}}</td>
                    <td>{{$webinar->speaker()}}</td>
                    <td>{{$webinar->moderator()}}</td>
                    <td>{{$webinar->organization()}}</td>

                    <td class="table-action d-flex gap-2">
                        <a href="{{route('webinar-edit', $webinar->id())}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-edit-2 align-middle me-2">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                        </a>
                        <form method="post" action="{{route('webinar-delete', $webinar->id())}}">
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
        @if($webinars != null)
            <div class="pagination d-flex justify-content-end align-items-center">
                {!! $webinars->links() !!}
            </div>
        @endif
    </div>

@endsection
