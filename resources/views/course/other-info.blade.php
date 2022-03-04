@extends('layout')
@section('title', sprintf('%s' , ucfirst($course->courseCode())))
@section('content')


    <div class="card">
        <div class="card-header fw-bold text-uppercase">{{$course->courseCode()}}</div>
        <div class="card-body">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('course-edit', $course->id()) }}">Details</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('course.other-info', $course->id()) }}">Other Details</a>
                </li>

            </ul>
        </div>
    </div>

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Course Other Details</h3>
        <a href="{{ route('course.other-info-create', $course->id()) }}" class="btn btn-sm btn-primary">New Other Detail</a>
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

            </tbody>
        </table>
    </div>


@endsection
