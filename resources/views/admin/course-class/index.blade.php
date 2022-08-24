@extends('layout')
@section('title', 'Classes')
@section('content')
    <x-course-navbar :course="$course"/>

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Course class</h3>

        <a href="{{route('admin.course-class.create', $course->id())}}" class="btn btn-sm btn-primary">New Class</a>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>Date</th>
                <th>No of Seats</th>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @forelse($classes as $class)
                <tr>
                    <td>{{$class->title()}}</td>
                    <td>{{$class->date()}}</td>
                    <td>{{$class->classSeat()}}</td>
                    <td class="d-flex flex-column align-items-center">
                        <a href="{{route('course.enrollment-index', $class->id())}}">
                            View Enrollment
                        </a>
                        <a href="{{ route('admin.verify-certificate.index', $class->id()) }}">
                           View Certificate
                        </a>
                        <a href="{{ route('admin.course-class.edit', $class->id()) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-edit-2 align-middle me-2">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                        </a>
                        <form method="post" action="{{route('admin.course-class.delete', $class->id())}}">
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
    </div>
@endsection
