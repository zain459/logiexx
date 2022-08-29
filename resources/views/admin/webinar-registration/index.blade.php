@extends('layout')
@section('title', 'Webinar Registration')
@section('content')


    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Webinar Registration</h3>
    </div>
    <div class="card mb-3">
        <div class="card-header d-flex flex-column flex-md-row md-align-items-center justify-content-between">
            <div class="title">Filters</div>
        </div>
        <div class="card-body">
            <form method="GET" action="{{route('admin.webinar-registration.index')}}">
                <div class="row g-3 align-items-end">
                    <div class="col-md-4 form-group">
                        <label class="form-label">First Name</label>
                        <input type="text" name="first_name" class="form-control" value="">
                    </div>
                    <div class="col-md-4 form-group">
                        <label class="form-label">Organization Name</label>
                        <input type="text" name="organization_name" class="form-control" value="">
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
                        <a href="{{route('admin.webinar-registration.index')}}" class="btn btn-outline-primary">Clear</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>organization Name</th>
                <th>Occupation Type</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @forelse($webinarRegistrations as $webinarRegistration)
                <tr>
                    <td>{{$webinarRegistration->firstName()}}</td>
                    <td>{{$webinarRegistration->lastName()}}</td>
                    <td>{{$webinarRegistration->phoneNumber()}}</td>
                    <td>{{$webinarRegistration->organizationName()}}</td>
                    <td>{{$webinarRegistration->occupationType()}}</td>
                    @if($webinarRegistration->status() == 1)
                        <td><span class="btn btn-success">Approved</span></td>
                    @else
                        <td><span class="btn btn-danger">UnApproved</span></td>
                    @endif
                    <td></td>
                    <td class="table-action">
                        <a href="{{route('admin.webinar-registration.view', $webinarRegistration->id())}}">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path
                                        d="M12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9C2.121 6.88 6.608 3 12 3zm0 16a9.005 9.005 0 0 0 8.777-7 9.005 9.005 0 0 0-17.554 0A9.005 9.005 0 0 0 12 19zm0-2.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-2a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                </g>
                            </svg>
                        </a>
                        <form method="post"
                              action="{{route('admin.webinar-registration.delete', $webinarRegistration->id())}}">
                            @csrf
                            <button type="submit" class="btn text-danger p-0"
                                    onclick="return confirm('Are you sure?')">
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
    </div>
@endsection
