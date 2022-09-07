@extends('layout')
@section('title', 'Course Learning-Objective')
@section('content')

    <x-course-navbar :course="$course" />


    <div class="card">
        <div class="card-header fw-bold">Create</div>
        <div class="card-body twocolumns-form">

            <form method="post" action="{{route('course.learning-objective-store')}}">
                @csrf
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Title<sup>*</sup></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" value="{{old('title')}}"
                               placeholder="Title" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Description<sup>*</sup></label>
                    <div class="col-sm-10">
                        <textarea class="ckeditor form-control" name="description">{{old('description')}}</textarea>
{{--                        <vue-editor v-model="formData.description" required></vue-editor>--}}
                    </div>
                </div>
                <input type="hidden" value="{{ $course->id() }}" name="courseId" required/>
                <div class="mb-3 row">
                    <div class="col-sm-10 ms-sm-auto">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

{{--    <course-unit-create-component :course="{{ $course->id() }}"></course-unit-create-component>--}}
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
