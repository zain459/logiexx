@extends('layout')
@section('title', 'Other-Details Edit')
@section('content')

{{--    <x-course-navbar :course="$courseLearningObjective->course" />--}}

    <div class="card">
        <div class="card-header fw-bold">Create</div>
        <div class="card-body">

            <form method="post" action="{{route('course.learning-objective-update', $courseLearningObjective->id())}}">
                @csrf
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" value="{{$courseLearningObjective->title()}}"
                               placeholder="Title"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Description</label>
                    <div class="col-sm-10">
                        <textarea id="my-editor" name="description">{{ $courseLearningObjective->description() }}</textarea>
                    </div>
                </div>
{{--                <input type="hidden" value="{{ $courseLearningObjective->courseId() }}" name="courseId" required/>--}}
                <div class="mb-3 row">
                    <div class="col-sm-10 ms-sm-auto">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
{{--    <edit-course-unit-component :course-learning-objective="{{$courseLearningObjective}}"></edit-course-unit-component>--}}
@endsection

