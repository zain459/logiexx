@extends('layout')
@section('title', 'Course Other-Details')
@section('content')

    <x-course-navbar :course="$course" />

    <div class="card">
        <div class="card-header fw-bold">Create</div>
        <div class="card-body">
            <form action="{{ route('course.other-info-store') }}" method="post">
                @csrf
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="{{old('title')}}" name="title" placeholder="Title"  />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="description" placeholder="Description" rows="3" required>{{ old('description') }}</textarea>
                    </div>
                </div>

                <input type="hidden" name="courseId" value="{{ $course->id() }}" required />

                <div class="mb-3 row">
                    <div class="col-sm-10 ms-sm-auto">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>

            </form>
        </div>
    </div>


@endsection
