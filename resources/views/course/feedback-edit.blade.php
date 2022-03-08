<button data-bs-toggle="modal" data-bs-target="#editFeedback-{{$feedback->id()}}" class="btn btn-sm btn-link">
    Edit
</button>

<div class="modal fade" id="editFeedback-{{$feedback->id()}}" tabindex="-1" role="dialog" aria-labelledby="editFeedback-{{$feedback->id()}}" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5>Editing {{ $feedback->title() }} Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('course.feedback-update') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label">Name</label>
                        <input name="title" class="form-control" value="{{ $feedback->title() }}" required />
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="feedback">Feedback</label>
                        <textarea class="form-control" name="feedback" required>{{ $feedback->feedback() }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="feedback">Rating</label>
                        <input type="range" name="rating" value="{{ $feedback->rating() }}" class="form-control"
                               max="5" step="0.5" required>
                    </div>

                    <input type="hidden" value="{{ $feedback->id() }}" name="feedbackId" required/>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
