@extends('layout')
@section('title', 'Course Other-Details')
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

    create

@endsection
