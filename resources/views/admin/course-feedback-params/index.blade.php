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
                        <label class="form-label" for="type">type</label>
                        <select class="form-select" name="type" id="type" required>
                            <option></option>
                            <option value="{{'Instructor'}}">{{ 'Instructor' }}</option>
                            <option value="{{'Course'}}">{{ 'Course' }}</option>
                        </select>
                    </div>


                    {{--                    <div class="mb-3 col-md-4">--}}
                    {{--                        <label class="form-label" for="type">Type</label><option value="{{ $durationInterval->id() }}">{{ 'Course' }}</option>--}}
                    {{--                        <option value="">{{ 'Instructor' }}</option>--}}
                    {{--                        <option value="">{{ 'Course' }}</option>--}}
                    {{--                        <input type="text" class="form-control" name="type" id="type"/>--}}
                    {{--                    </div>--}}
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
                    <td>
                        <form method="post"
                              action="{{route('admin.course-feed-back-params.delete', $courseFeedbackParam->id())}}">
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
@endsection
