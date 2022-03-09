@extends('layout')
@section('title', 'Testimonial Edit')
@section('content')

    <div class="row mb-3">
        <div class="col-md-6">
            <figure class="figure ">
                <img src="{{ asset('storage/'. $testimonial->image()) }}" width="200" class="img-cricle" >
                <figcaption class="figure-caption text-end fs-4">Name:<span class="fw-bold text-muted">{{ $testimonial->name() }}</span></figcaption>
            </figure>
        </div>

        <div class="col-md-6">

            <div class="card">
                <div class="card-header fw-bold">Update</div>
                <div class="card-body">
                    <form action="{{ route('testimonial-update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $testimonial->name() }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Company</label>
                            <input type="text" class="form-control" name="company" value="{{ $testimonial->company() }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Designation</label>
                            <input type="text" class="form-control" name="designation" value="{{ $testimonial->designation() }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                          <textarea class="form-control" name="description">{{ $testimonial->description() }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Other</label>
                            <input type="text" class="form-control" name="other" value="{{ $testimonial->other() }}">
                        </div>

                        <div class="mb-3">
                          <img src="{{ asset('storage/'. $testimonial->image()) }}" width="150" class="rounded">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" >
                        </div>

                        <input type="hidden" name="testimonialId" value="{{ $testimonial->id() }}" required />

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>


                </div>
            </div>
        </div>

    </div>

    <script>
        import { VueEditor } from "vue2-editor";
    </script>


@endsection
