@extends('layout')
@section('title', 'Course Instructors')
@section('content')

    <x-course-navbar :course="$course"/>

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Course Instructors</h3>

        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                data-bs-target="#createInstructorModal">
            Assign Instructor
        </button>
    </div>
    <div class="card mb-3">
        <div class="card-header d-flex flex-column flex-md-row md-align-items-center justify-content-between">
            <div class="title">Filters</div>
        </div>
        <div class="card-body">
            <form method="GET" action="{{route('course.instructors-index', $course->id())}}">
                <div class="row g-3 align-items-end">
                    <div class="col-md-4 form-group">
                        <label class="form-label">Key Word</label>
                        <input type="text" name="key" class="form-control" value="{{request()->get('key')}}">
                    </div>
                    <div class="col-md-4 form-group">
                        <button class="btn btn-primary" type="submit">
                            Search
                        </button>
                        <a href="{{route('course.instructors-index', $course->id())}}" class="btn btn-outline-primary">Clear</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Instructor</th>
                <th>Email</th>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @forelse($assignedInstructors as $item)
                <tr>
                    <td>{{ $item->instructor->name() }}</td>
                    <td>{{ $item->instructor->email() }}</td>
                    <td>
                        <form method="post" action="{{ route('course.instructors-delete', $item->id()) }}">
                            @csrf
                            <button type="submit" class="btn text-danger p-0" onclick="return confirm('Are you sure?')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
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
        @if($assignedInstructors != null)
            <div class="pagination d-flex justify-content-end align-items-center">
                {!! $assignedInstructors->links() !!}
            </div>
        @endif
    </div>

    <!-- Modal -->
    <div class="modal fade" id="createInstructorModal" tabindex="-1" role="dialog" aria-labelledby="createInstructorModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>Assign Instructor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body twocolumns-form">
                        <form action="{{ route('course.instructors-assign') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="title">Instructors<sup>*</sup></label>
                                <select class="form-select" name="instructor" required>
                                    <option></option>
                                    @foreach($instructors as $item)
                                        <option value="{{ $item->id() }}">{{ $item->name() }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" value="{{ $course->id() }}" name="courseId" required/>

                            <button type="submit" class="btn btn-primary">Assign</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
