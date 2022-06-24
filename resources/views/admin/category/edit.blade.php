<button data-bs-toggle="modal" data-bs-target="#editItemCategoryodal-{{$category->id()}}" class="btn btn-sm btn-link">
    Edit
</button>

<div class="modal fade" id="editItemCategoryodal-{{$category->id()}}" tabindex="-1" role="dialog" aria-labelledby="editItemCategoryodal-{{$category->id()}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Editing {{ $category->name() }} Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.category.update', $category->id()) }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label">Name</label>
                        <input name="name" class="form-control" value="{{ $category->name() }}" required />
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
