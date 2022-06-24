@extends('layout')
@section('title', 'Courses')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Courses</h3>
        <a href="{{ route('course-create') }}" class="btn btn-sm btn-primary">New Course</a>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#Code</th>
                <th>Name</th>
                <th>Category</th>
                <th>Subject Area</th>
                <th>Fee Type</th>
            </tr>
            </thead>
            <tbody>
            @forelse($courses as $course)
                <tr>
                    <td><a href="{{ route('course-edit', $course->id()) }}">{{ $course->courseCode() }}</a></td>
                    <td>{{ $course->title() }}</td>
                    <td>{{ $course->category->name() }}</td>
                    <td>{{ $course->subjectArea->name() }}</td>
                    <td>{{ $course->feeType() }}</td>
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
    <div class="modal fade" id="createCategoryModal" tabindex="-1" role="dialog" aria-labelledby="createCategoryModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>New Category</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('admin.category.store')}}">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label">Name</label>
                                <input name="name" class="form-control" value="{{ old('name') }}" required autofocus/>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
