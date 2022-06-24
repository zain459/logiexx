<button data-bs-toggle="modal" data-bs-target="#editSubjectArea-{{$area->id()}}" class="btn btn-sm btn-link">
    Edit
</button>

<div class="modal fade" id="editSubjectArea-{{$area->id()}}" tabindex="-1" role="dialog" aria-labelledby="editSubjectArea-{{$area->id()}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Editing {{ $area->name() }} Subject Area</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.subject-area.update', $area->id()) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label">Name</label>
                        <input name="name" class="form-control" value="{{ $area->name() }}" required />
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <img src="{{ asset('storage/'.$area->image()) }}" class="rounded" width="150">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col">
                            <label class="form-label" for="overview">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
