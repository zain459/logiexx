@extends('layout')
@section('title', 'Learner Feedback')
@section('content')

    <x-course-navbar :course="$course"/>

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Learner Feedback</h3>

        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                data-bs-target="#createFeedbackModal">
            Add Feedback
        </button>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Title</th>
                <th>Feedback</th>
                <th>Rating</th>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @forelse($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->title() }}</td>
                    <td>{{ $feedback->feedback() }}</td>
                    <td>{{ $feedback->rating() }}</td>
                    <td class="d-flex">
                        @include('course.feedback-edit', [
                        'feedback' => $feedback
                    ])
                        <form method="post" action="{{ route('course.feedback-delete', $feedback->id()) }}">
                            @csrf
                            <button type="submit" class="btn text-danger p-0" onclick="return confirm('Are you sure?')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-trash align-middle text-danger">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center"> No record found</td>
                </tr>

            @endforelse
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="createFeedbackModal" tabindex="-1" role="dialog" aria-labelledby="createFeedbackModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>Add Feedback</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('course.feedback-store') }}" method="post">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}"
                                       id="title" required/>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="feedback">Feedback</label>
                                <textarea class="form-control" name="feedback" required>{{ old('feedback') }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="feedback">Rating</label>
                                <input type="range" name="rating" value="{{ old('rating') }}" class="form-control"
                                       max="5" step="0.5" required>
                            </div>

                            <input type="hidden" value="{{ $course->id() }}" name="courseId" required/>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
