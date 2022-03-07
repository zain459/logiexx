@extends('layout')
@section('title', 'Course Affiliated Partners')
@section('content')

    <x-course-navbar :course="$course"/>
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Affiliated Partners</h3>

        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                data-bs-target="#createPartnerModal">
            Assign Course
        </button>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#Code</th>
                <th>Name</th>
                <th>Category</th>
                <th>Subject Area</th>
                <th>Fee Type</th>
            </tr>
            </thead>
            <tbody>
            {{--            @forelse($courses as $course)--}}
            {{--                <tr>--}}
            {{--                    <td><a href="{{ route('course-edit', $course->id()) }}">{{ $course->courseCode() }}</a></td>--}}
            {{--                    <td>{{ $course->title() }}</td>--}}
            {{--                    <td>{{ $course->category->name() }}</td>--}}
            {{--                    <td>{{ $course->subjectArea->name() }}</td>--}}
            {{--                    <td>{{ $course->feeType() }}</td>--}}
            {{--                </tr>--}}
            {{--            @empty--}}
            {{--                <tr>--}}
            {{--                    <td colspan="5" class="text-center"> No record found</td>--}}
            {{--                </tr>--}}

            {{--            @endforelse--}}
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="createPartnerModal" tabindex="-1" role="dialog" aria-labelledby="createPartnerModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>Assign Course</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('course.partner.assign-course') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="title">Category</label>
                                <select class="form-select" name="assignedCourse" required>
                                    <option></option>
                                    @foreach($courses as $item)
                                        <option value="{{ $item->id() }}">{{ $item->title() }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" value="{{ $course->id() }}" name="courseId" required />

                            <button type="submit" class="btn btn-primary">Assign</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
