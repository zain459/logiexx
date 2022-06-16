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
                <form method="POST" action="{{ route('instructor.update', $instructor->id()) }}" enctype="multipart/form-data">
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

                    <div class="form-group mb-3">
                        <label class="form-label">Brief Bio</label>
                        <textarea name="bio" class="form-control">{{ $instructor->bio() }}</textarea>
                    </div>

                    <div class="row">
                        <div class="mb-3 col">
                            <img src="{{ asset('storage/'.$instructor->image()) }}" class="rounded" width="150">
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
