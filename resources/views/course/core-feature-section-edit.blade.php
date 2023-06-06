@extends('layout')
@section('title', 'Core Feature')
@section('content')

    <x-course-navbar :course="$coreFeatureSection->course"></x-course-navbar>

    <div class="card">
        <div class="card-header fw-bold">Create</div>
        <div class="card-body twocolumns-form">
            <form method="post" action="{{ route('core-feature-section-update', $coreFeatureSection->id()) }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Sub Heading<sup>*</sup></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sub_heading" value="{{ $coreFeatureSection->subHeading() }}"
                               placeholder="Sub Heading" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Description<sup>*</sup></label>
                    <div class="col-sm-10">
                        <textarea class="ckeditor form-control" name="description">{{ $coreFeatureSection->description() }}</textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col">
                        <img src="{{ asset('storage/'.$coreFeatureSection->image()) }}" class="rounded" width="150">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="form-label col-sm-2 text-sm-end" for="image">image<sup></sup></label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="image" id="image"/>
                    </div>
                </div>
                <input type="hidden" value="{{ $coreFeatureSection->courseId() }}" name="courseId" required/>
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
