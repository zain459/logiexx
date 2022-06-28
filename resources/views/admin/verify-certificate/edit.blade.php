@extends('layout')
@section('title', 'Create Certificate')
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">New Certificate</h5>
        </div>
        <div class="card-body">
            <form action="{{route('admin.verify-certificate.update', $verifyCertificateAuthentication->id())}}"
                  method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{$verifyCertificateAuthentication->name()}}"
                               name="name"
                               placeholder="name"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Moderator</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control"
                               value="{{$verifyCertificateAuthentication->verifyCertificate()}}"
                               name="verify_certificate"
                               placeholder="Verify Certificate"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end" for="issue_date">Issue Date</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="issue_date"
                               value="{{$verifyCertificateAuthentication->issueDate()->toDateString()}}"
                               id="issue_date"/>
                    </div>
                </div>
                <input type="hidden" value="" name="class_id" required/>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
