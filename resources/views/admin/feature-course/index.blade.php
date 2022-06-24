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
                            <option value="2">popular</option>
                            <option value="3">editor pick</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
@endsection
