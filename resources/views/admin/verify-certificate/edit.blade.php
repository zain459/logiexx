<button data-bs-toggle="modal" data-bs-target="#editCertificate-{{$verifyCertification->id()}}"
        class="btn btn-sm btn-link">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
         stroke-linejoin="round" class="feather feather-edit-2 align-middle me-2">
        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
    </svg>
</button>


<div class="modal fade" id="editCertificate-{{$verifyCertification->id()}}" tabindex="-1" role="dialog"
     aria-labelledby="createSubjectAreaModal"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">New Certificate</h5>
                </div>
                <div class="card-body">
                    <form
                        action="{{route('admin.verify-certificate.update', $verifyCertification->id())}}"
                        method="post">
                        @csrf
                        <div class="mb-3 row">
                            <label for="recipient-name"
                                   class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" name="name" id="name"
                                   value="{{$verifyCertification->name()}}">
                        </div>

                        <div class="mb-3 row">
                            <label for="recipient-name" class="col-form-label">Certificate
                                Serial Number:</label>
                            <input type="text" class="form-control" name="certificate"
                                   id="certificate" value="{{$verifyCertification->verifyCertificate()}}"
                                   name="certificate">
                        </div>

                        <div class="mb-3 row">
                            <label for="recipient-name" class="col-form-label">Issue Date</label>
                            <input type="date" class="form-control" name="issue_date"
                                   id="issue_date" value="{{$verifyCertification->issueDate()->toDateString()}}">
                        </div>
                        <input type="hidden" value="{{ $enrollment->id() }}"
                               name="enrollment_id"
                               required/>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


{{--<div class="modal fade" id="editSubjectArea-{{$verifyCertification->id()}}" tabindex="-1" role="dialog"--}}
{{--     aria-labelledby="editSubjectArea-{{$verifyCertification->id()}}" aria-hidden="true">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="card-header d-flex align-items-center justify-content-between">--}}
{{--                <h5>Editing {{ $verifyCertification->name() }} Subject Area</h5>--}}
{{--                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--            </div>--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}
{{--                    <h5 class="card-title">New Certificate</h5>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <form action="{{route('admin.verify-certificate.update', $verifyCertification->id())}}"--}}
{{--                          method="post" enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        <div class="mb-3 row">--}}
{{--                            <label class="col-form-label fw-bold col-sm-2 text-sm-end">Name</label>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <input type="text" class="form-control" value="{{$verifyCertification->name()}}"--}}
{{--                                       name="name"--}}
{{--                                       placeholder="name"/>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="mb-3 row">--}}
{{--                            <label class="col-form-label fw-bold col-sm-2 text-sm-end">Moderator</label>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <input type="text" class="form-control"--}}
{{--                                       value="{{$verifyCertification->verifyCertificate()}}"--}}
{{--                                       name="certificate"--}}
{{--                                       placeholder="Verify Certificate"/>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="mb-3 row">--}}
{{--                            <label class="col-form-label fw-bold col-sm-2 text-sm-end" for="issue_date">Issue--}}
{{--                                Date</label>--}}
{{--                            <div class="col-sm-6">--}}
{{--                                <input type="date" class="form-control" name="issue_date"--}}
{{--                                       value="{{$verifyCertification->issueDate()->toDateString()}}"--}}
{{--                                       id="issue_date"/>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <input type="hidden" value="" name="class_id" required/>--}}
{{--                        <button type="submit" class="btn btn-primary">Submit</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
