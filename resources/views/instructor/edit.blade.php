<button data-bs-toggle="modal" data-bs-target="#editItemCategoryodal-{{$instructor->id()}}" class="btn btn-sm btn-link">
    Edit
</button>

<div class="modal fade" id="editItemCategoryodal-{{$instructor->id()}}" tabindex="-1" role="dialog" aria-labelledby="editItemCategoryodal-{{$instructor->id()}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Editing {{ $instructor->name() }} Instructor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('instructor.update', $instructor->id()) }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label">Name</label>
                        <input name="name" class="form-control" value="{{ $instructor->name() }}" required />
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Email</label>
                        <input name="email" class="form-control" value="{{ $instructor->email() }}" required />
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Address</label>
                        <textarea name="address" class="form-control">{{ $instructor->address() }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
