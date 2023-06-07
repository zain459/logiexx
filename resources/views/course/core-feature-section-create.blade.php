@extends('layout')
@section('title', 'Course Learning-Objective')
@section('content')

    <x-course-navbar :course="$course" />

    <div class="card">
        <div class="card-header fw-bold">Create</div>
        <div class="card-body twocolumns-form">
            <form method="post" action="{{ route('core-feature-section.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Sub Heading<sup>*</sup></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sub_heading" value="{{old('sub_heading')}}"
                               placeholder="Sub Heading" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Description<sup>*</sup></label>
                    <div class="col-sm-10">
                        <textarea id="my-editor" name="description">{{ old('description') }}</textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="form-label col-sm-2 text-sm-end" for="image">image<sup></sup></label>
                    <div class="col-sm-10">
                    <input type="file" class="form-control" name="image" id="image" required/>
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

@endsection
