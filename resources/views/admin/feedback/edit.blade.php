<button data-bs-toggle="modal" data-bs-target="#editFeedBackModal-{{$feedBackParam->id()}}" class="btn btn-sm btn-link">
    Edit
</button>

<div class="modal fade" id="editFeedBackModal-{{$feedBackParam->id()}}" tabindex="-1" role="dialog" aria-labelledby="editFeedBackModal-{{$feedBackParam->id()}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Editing {{ $feedBackParam->title() }} Instructor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.feed-back.update', $feedBackParam->id()) }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label">Name</label>
                        <input name="category" class="form-control" value="{{ $feedBackParam->category() }}" required />
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label">Address</label>
                        <textarea name="title" class="form-control">{{ $feedBackParam->title() }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

