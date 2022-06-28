@extends('layout')
@section('title', 'Create Class')
@section('content')

    <x-course-navbar :course="$course"/>
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Add New Class</h3>

        <a href="{{route('admin.course-class.index', $course->id())}}" class="btn btn-sm btn-primary">
            View All Class
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">New Class</h5>
        </div>
        <div class="card-body">
            <form action="{{route('admin.course-class.store', $course->id())}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" required/>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="modality">Modality</label>
                        <select class="form-select" name="modality" id="modality" required>
                            <option></option>
                            @foreach(\Logixs\Modules\Course\Models\Modality::all() as $modality)
                                <option value="{{$modality->id()}}">{{$modality->name()}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="date">Date</label>
                        <input type="date" class="form-control" name="date" id="date"/>
                    </div>

                </div>

                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="class_seat">Number Of Seats</label>
                        <input type="text" class="form-control" name="class_seat" id="class_seat" required/>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="venue">Venue</label>
                        <input type="text" class="form-control" name="venue" id="venue" required/>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="class_duration">Class Duration</label>
                        <input type="text" class="form-control" name="class_duration" id="class_duration" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="file">Image</label>
                        <input type="file" class="form-control" name="file" id="fi  le"/>
                    </div>
                </div>
                <input type="hidden" value="{{ $course->id() }}" name="courseId" required/>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
