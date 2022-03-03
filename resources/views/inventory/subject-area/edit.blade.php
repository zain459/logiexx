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
                <form method="POST" action="{{ route('inventory.subject-update', $area->id()) }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label">Name</label>
                        <input name="name" class="form-control" value="{{ $area->name() }}" required />
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
