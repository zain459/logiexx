@extends('layout')
@section('title', 'Courses')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Courses</h3>
        <a href="{{ route('course-create') }}" class="btn btn-sm btn-primary">New Course</a>
    </div>
    <div class="card mb-3">
        <div class="card-header d-flex flex-column flex-md-row md-align-items-center justify-content-between">
            <div class="title">Filters</div>
        </div>
        <div class="card-body">
            <form method="GET" action="{{route('course-index')}}">
                <div class="row g-3 align-items-end">
                    <div class="col-md-4 form-group">
                        <label class="form-label">Key Word</label>
                        <input type="text" name="key" class="form-control" value="{{ request()->get('key') }}">
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label" for="title">Subject Area</label>
                            <select class="form-select" name="subjectArea">
                                <option></option>
                                @foreach($subjectAreas as $subjectArea)
                                    <option
                                        value="{{ $subjectArea->id() }}" @selected($subjectArea->id() == request()->get('subjectArea'))>{{$subjectArea->name()}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label" for="title">Modality</label>
                            <select class="form-select" name="modality">
                                <option></option>
                                @foreach($modalities as $modality)
                                    <option
                                        value="{{ $modality->id() }}" @selected($modality->id() == request()->get('modality'))>{{$modality->name()}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="form-label" for="title">Categories</label>
                            <select class="form-select" name="category">
                                <option></option>
                                @foreach($categories as $category)
                                    <option
                                        value="{{ $category->id() }}" @selected($category->id() == request()->get('category'))>{{$category->name()}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 form-group">
                        <button class="btn btn-primary" type="submit">
                            Search
                        </button>
                        <a href="{{route('course-index')}}" class="btn btn-outline-primary">Clear</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">

        <table class="table table-hover">
            <thead>
            <tr>
                <th>#Code</th>
                <th>Title</th>
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
        @if($courses != null)
            <div class="pagination d-flex justify-content-end align-items-center">
                {!! $courses->links() !!}
            </div>
        @endif
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
