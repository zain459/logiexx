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
                        <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="Name" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Company<sup>*</sup></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{old('company')}}" name="company" placeholder="Company"  required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Designation<sup>*</sup></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{old('designation')}}" name="designation" placeholder="Designation"  required/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Description<sup>*</sup></label>
                    <div class="col-md-10">
                        <textarea id="my-editor" name="description">{{old('description')}}</textarea>
                    </div>
                </div>
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
@endsection

