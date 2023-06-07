@extends('layout')
@section('title', 'Testimonial Edit')
@section('content')

    <div class="row mb-3">
        <div class="col-md-6">
            @if($testimonial->image())
                <figure class="figure ">
                    <img src="{{ asset('storage/'. $testimonial->image()) }}" width="200" class="img-cricle">
                    <figcaption class="figure-caption text-end fs-4">Name:<span
                            class="fw-bold text-muted">{{ $testimonial->name() }}</span></figcaption>
                </figure>
            @else
                <figure class="figure ">
                    <img src="{{asset('images/f-logo.png')}}" width="200" class="img-cricle">
                    <figcaption class="figure-caption text-end fs-4">Name:<span
                            class="fw-bold text-muted">{{ 'No Image' }}</span></figcaption>
                </figure>
            @endif
        </div>

        <div class="col-md-6">
            <div class="card twocolumns-form">
                <div class="card-header fw-bold">Update</div>
                <div class="card-body">
                    <form action="{{ route('testimonial-update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name<sup>*</sup></label>
                            <input type="text" class="form-control" name="name" value="{{ $testimonial->name() }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Company<sup>*</sup></label>
                            <input type="text" class="form-control" name="company"
                                   value="{{ $testimonial->company() }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Designation<sup>*</sup></label>
                            <input type="text" class="form-control" name="designation"
                                   value="{{ $testimonial->designation() }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description<sup>*</sup></label>
                            <textarea id="my-editor" name="description">{{ $testimonial->description() }}</textarea>
                        </div>

                        @if($testimonial->image())
                            <div class="mb-3">
                                <img src="{{ asset('storage/'. $testimonial->image()) }}" width="150" class="rounded">
                            </div>
                        @else
                            <div class="mb-3">
                                <img src="{{asset('images/no.png')}}" width="150" class="rounded">
                            </div>
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <input type="hidden" name="testimonialId" value="{{ $testimonial->id() }}" required/>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>

@endsection
