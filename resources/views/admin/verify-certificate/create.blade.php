@extends('layout')
@section('title', 'Create Certificate')
@section('content')

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Add Certificate</h3>

        <a href="{{route('admin.verify-certificate.index', $class->id())}}" class="btn btn-sm btn-primary">
            View All Certificate
        </a>
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">New Certificate</h5>
        </div>
        <div class="card-body">
            <form action="{{route('admin.verify-certificate.store', $class->id())}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="" name="name"
                               placeholder="name"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Certificate Serial Number</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="" name="verify_certificate"
                               placeholder="Verify Certificate"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end" for="issue_date">Issue Date</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="issue_date" id="issue_date"/>
                    </div>
                </div>
                <input type="hidden" value="{{ $class->id() }}" name="class_id" required/>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
