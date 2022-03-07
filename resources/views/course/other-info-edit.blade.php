@extends('layout')
@section('title', 'Other-Details Edit')
@section('content')

    <div class="card">
        <div class="card-header fw-bold text-uppercase">{{ $courseInfo->course->courseCode() }}</div>
        <div class="card-body">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('course-edit', $courseInfo->course->id()) }}">Details</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('course.other-info', $courseInfo->course->id()) }}">Other Details</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-header fw-bold">Create</div>
        <div class="card-body">
            <form action="{{ route('course.other-info-store') }}" method="post">
                @csrf
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{ $courseInfo->title() }}" name="title" placeholder="Title"  />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="description" placeholder="Description" rows="3" required>{{ $courseInfo->description() }}</textarea>
                    </div>
                </div>

                <input type="hidden" name="courseId" value="{{ $courseInfo->course->id() }}" required />

                <div class="mb-3 row">
                    <div class="col-sm-10 ms-sm-auto">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>

            </form>
        </div>
    </div>


@endsection
