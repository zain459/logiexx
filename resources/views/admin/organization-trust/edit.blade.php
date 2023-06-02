<button data-bs-toggle="modal" data-bs-target="#editOrganizationTrustModal-{{$organizationTrust->id()}}" class="btn btn-sm btn-link">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
         stroke-linejoin="round" class="feather feather-edit-2 align-middle me-2">
        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
    </svg>
</button>

<div class="modal fade" id="editOrganizationTrustModal-{{$organizationTrust->id()}}" tabindex="-1" role="dialog" aria-labelledby="editOrganizationTrustModal-{{$organizationTrust->id()}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Editing Organization Trust</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('organization-trust.update') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label">Link</label>
                        <input type="text" name="link" class="form-control" value="{{ $organizationTrust->link() }}" required autofocus/>
                    </div>

                    <div class="form-group mb-3">
                        <img src="{{ asset('storage/'.$organizationTrust->image()) }}" width="50">
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label d-flex justify-content-between" for="image"><span>Image<sup>*</sup></span><span style="font-size: 14px"><small>50 X 50</small></span></label>
                        <input type="file" name="image" class="form-control" value="{{ old('image') }}" autofocus/>
                    </div>

                    <input type="hidden" name="organizationTrustId" value="{{ $organizationTrust->id() }}" required />

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>