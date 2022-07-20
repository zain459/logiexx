@extends('layout')
@section('title', 'Course-Feedback-Create')
@section('content')
    <x-course-navbar :course="$course"/>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">New Course Feedback Params</h5>
        </div>
        <div class="card-body">
            <form action="{{route('admin.course-feed-back-params.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="title">Title</label>
                        <select class="form-select" name="feedback_params_id" required>
                            <option></option>
                            @foreach($feedbacks as $feedback)
                                <option value="{{ $feedback->id() }}">{{ $feedback->title() }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="type">Type</label>
                        <input type="text" class="form-control" name="type" id="type"/>
                    </div>
                </div>
                <input type="hidden" value="{{$course->id()}}" name="course_id" required/>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#id</th>
                <th>Type</th>
                <th>Title</th>
            </tr>
            </thead>
            <tbody>
            @forelse($courseFeedbackParams as $courseFeedbackParam)
                <tr>
                    <td>{{ $courseFeedbackParam->id() }}</td>
                    <td>{{ $courseFeedbackParam->type() }}</td>
                    <td>{{ $courseFeedbackParam->feedbackParam->title() }}</td>
                    <td></td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center"> No record found</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
