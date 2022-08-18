@extends('layout')
@section('title', 'Course Learning Objective')
@section('content')

    <x-course-navbar :course="$course"/>

    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Course learning Units</h3>
        <a href="{{ route('course.learning-objective-create', $course->id()) }}" class="btn btn-sm btn-primary">New Learning Unit</a>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Title</th>
{{--                <th>Description</th>--}}
                <td></td>
            </tr>
            </thead>
            <tbody>
            @forelse($courseLearningObjectives as $courseLearningObjective)
                <tr>
                    <td>{{ $courseLearningObjective->title() }}</td>
{{--                    <td>{!! html_entity_decode($courseLearningObjective->description()) !!}</td>--}}
                    <td class="table-action d-flex justify-content-end gap-2">
                        <a href="{{ route('course.learning-objective-edit', $courseLearningObjective->id()) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-edit-2 align-middle me-2">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                        </a>
                        <form method="post" action="{{ route('course.learning-objective-delete', $courseLearningObjective->id()) }}">
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





















{{--    <x-course-navbar :course="$course"/>--}}

{{--    <div class="mb-3 d-flex justify-content-between align-items-center">--}}
{{--        <h3>Course Unit</h3>--}}

{{--        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"--}}
{{--                data-bs-target="#createLearningObjectiveModal">--}}
{{--            Add Course Unit--}}
{{--        </button>--}}
{{--    </div>--}}

{{--    <div class="card">--}}
{{--        <table class="table table-hover">--}}
{{--            <thead>--}}
{{--            <tr>--}}
{{--                <th>Title</th>--}}
{{--                <th>Description</th>--}}
{{--                <td></td>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @forelse($courseLearningObjectives as $courseLearningObjective)--}}
{{--                <tr>--}}
{{--                    <td>{{ $courseLearningObjective->title() }}</td>--}}
{{--                    <td>{!!html_entity_decode($courseLearningObjective->description())!!}</td>--}}
{{--                    <td class="d-flex">--}}
{{--                        @include('course.learning-objective-edit', [--}}
{{--                        'courseLearningObjective' => $courseLearningObjective--}}
{{--                    ])--}}
{{--                        <form method="post"--}}
{{--                              action="{{ route('course.learning-objective-delete', $courseLearningObjective->id()) }}">--}}
{{--                            @csrf--}}
{{--                            <button type="submit" class="btn text-danger p-0" onclick="return confirm('Are you sure?')">--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"--}}
{{--                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
{{--                                     stroke-linejoin="round" class="feather feather-trash align-middle text-danger">--}}
{{--                                    <polyline points="3 6 5 6 21 6"></polyline>--}}
{{--                                    <path--}}
{{--                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>--}}
{{--                                </svg>--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @empty--}}
{{--                <tr>--}}
{{--                    <td colspan="5" class="text-center"> No record found</td>--}}
{{--                </tr>--}}
{{--            @endforelse--}}
{{--            </tbody>--}}
{{--        </table>--}}
{{--    </div>--}}

{{--    <!-- Modal -->--}}
{{--    <div class="modal fade" id="createLearningObjectiveModal" tabindex="-1" role="dialog"--}}
{{--         aria-labelledby="createFeedbackModal"--}}
{{--         aria-hidden="true">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header d-flex align-items-center justify-content-between">--}}
{{--                        <h5>Add Course Unit</h5>--}}
{{--                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
{{--                    </div>--}}
{{--                    <course-unit-create-component :course="{{ $course->id() }}"></course-unit-create-component>--}}
{{--                    --}}{{--                    <div class="card-body">--}}
{{--                    --}}{{--                        <form action="{{route('course.learning-objective-store', $course->id())}}" method="post">--}}
{{--                    --}}{{--                            @csrf--}}

{{--                    --}}{{--                            <div class="mb-3">--}}
{{--                    --}}{{--                                <label class="form-label" for="title">Title</label>--}}
{{--                    --}}{{--                                <input type="text" name="title" class="form-control" value=""--}}
{{--                    --}}{{--                                       id="title" required/>--}}
{{--                    --}}{{--                            </div>--}}

{{--                    --}}{{--                            <label class="form-label" for="description">Description</label>--}}
{{--                    --}}{{--                            <div class="mb-3" id="editor">--}}
{{--                    --}}{{--                                <textarea class="form-control" name="description"></textarea>--}}
{{--                    --}}{{--                            </div>--}}

{{--                    --}}{{--                            <input type="hidden" value="{{ $course->id() }}" name="courseId" required/>--}}

{{--                    --}}{{--                            <button type="submit" class="btn btn-primary">Save</button>--}}
{{--                    --}}{{--                        </form>--}}
{{--                    --}}{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    --}}{{--    <script>--}}
{{--    --}}{{--        var toolbarOptions = ['bold'];--}}
{{--    --}}{{--        var quill = new Quill('#editor', {--}}
{{--    --}}{{--            modules:{--}}
{{--    --}}{{--               // toolbar: toolbarOptions--}}
{{--    --}}{{--            },--}}
{{--    --}}{{--            theme: 'snow'--}}
{{--    --}}{{--        });--}}
{{--    --}}{{--    </script>--}}
@endsection
