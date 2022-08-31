@extends('layout')
@section('title', 'Enrollment')
@section('content')
    <x-course-navbar :course="$course"/>
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Enrollment</h3>
    </div>
    <div class="card mb-3">
        <div class="card-header d-flex flex-column flex-md-row md-align-items-center justify-content-between">
            <div class="title">Filters</div>
        </div>
        <div class="card-body">
            <form method="GET" action="{{route('course.enrollment-index', $course->id())}}">
                <div class="row g-3 align-items-end">
                    <div class="col-md-4 form-group">
                        <label class="form-label">Key Word</label>
                        <input type="text" name="key" class="form-control" value="{{request()->get('key')}}">
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label" for="status">Status</label>
                            <select class="form-select" name="status">
                                <option></option>
                                    <option value="{{1}}" @selected('1' === request()->get('status'))>{{'Active'}}</option>
                                    <option value="{{0}}" @selected('0' === request()->get('status'))>{{'In Active'}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 form-group">
                        <button class="btn btn-primary" type="submit">
                            Search
                        </button>
                        <a href="{{route('course.enrollment-index', $course->id())}}" class="btn btn-outline-primary">Clear</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>title</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Degree</th>
                <th>Position</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @forelse($enrollments as $enrollment)
                <tr>
                    <td>{{ $enrollment->title() }}</td>
                    <td>{{ $enrollment->firstName() }}</td>
                    <td>{{ $enrollment->lastName() }}</td>
                    <td>{{ $enrollment->degree() }}</td>
                    <td>{{ $enrollment->position() }}</td>
                    @if($enrollment->status() == 1)
                        <td><span class="btn btn-success">Active</span></td>
                    @else
                        <td><span class="btn btn-danger">In Active</span></td>
                    @endif

                    <td class="table-action">
{{--                        <a href="{{ route('admin.verify-certificate.index', $enrollment->id()) }}">--}}
{{--                            View Certificate--}}
{{--                        </a>--}}
                        <a href="{{route('course.enrollment-view', $enrollment->id())}}">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path
                                        d="M12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9C2.121 6.88 6.608 3 12 3zm0 16a9.005 9.005 0 0 0 8.777-7 9.005 9.005 0 0 0-17.554 0A9.005 9.005 0 0 0 12 19zm0-2.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-2a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                </g>
                            </svg>
                        </a>
                        <form method="post" action="{{route('course.enrollment-delete', $enrollment->id())}}">
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
        @if($enrollments != null)
            <div class="pagination d-flex justify-content-end align-items-center">
                {!! $enrollments->links() !!}
            </div>
        @endif
    </div>
@endsection
