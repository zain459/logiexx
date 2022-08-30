@extends('layout')
@section('title', 'Create Testimonial')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Add Testimonial</h3>

        <a href="{{ route('testimonial-index') }}" class="btn btn-sm btn-primary">
            View All Testimonials
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">New Testimonial</h5>
        </div>
        <div class="card-body twocolumns-form">

            <form action="{{ route('testimonial-store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Name<sup>*</sup></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="Name"  />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Company<sup>*</sup></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{old('company')}}" name="company" placeholder="Company"  />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Designation<sup>*</sup></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{old('designation')}}" name="designation" placeholder="Designation"  />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Description<sup>*</sup></label>
                    <div class="col-md-10">
                        <textarea class="ckeditor form-control" name="description" required>{{ old('description') }}    </textarea>
                        {{--                        <vue-editor v-model="formData.description" required></vue-editor>--}}
                    </div>
                </div>
{{--                <div class="mb-3 row">--}}
{{--                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Description<sup>*</sup></label>--}}
{{--                    <div class="col-sm-10">--}}
{{--                        <textarea class="form-control" name="description" placeholder="Description" rows="3" required>{{ old('description') }}</textarea>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Image</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" name="image" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-10 ms-sm-auto">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection

