@extends('layout')
@section('title', 'Course Feature')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Course Feature</h5>
        </div>
        <div class="card-body">
            <form action="{{route('admin.featured-course.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="title">Course</label>
                        <select class="form-select" name="course_id" required>
                            <option></option>
                            @foreach(\Logixs\Modules\Course\Models\Course::all() as $course)
                                <option value="{{$course->id()}}">{{$course->title()}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="title">Type</label>
                        <select class="form-select" name="type_id" required>
                            <option></option>
                            <option value=""></option>
                            <option value="1">Trending</option>
                            <option value="2">Popular</option>
                            <option value="3">Editor Pick</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Type</th>
                <th>Course Title</th>
            </tr>
            </thead>
            <tbody>
            @foreach($featuredCourses as $featuredCourse)
                <tr>
{{--                    @if($featuredCourse->type_id === 1)--}}
                        <td>{{ $featuredCourse->type() }}</td>
{{--                    @endif--}}
                    <td>{{ $featuredCourse->course->title() }}</td>
                    <td>
                        <form method="post" action="{{ route('admin.featured-course.delete', $featuredCourse->id) }}">
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
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
