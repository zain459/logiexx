@extends('layout')
@section('title', 'Edit Class')
@section('content')

    <x-course-navbar :course="$classCourse->course"/>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">New Class</h5>
        </div>
        <div class="card-body">
            <form action="{{route('admin.course-class.update', $classCourse->id())}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="{{ $classCourse->title() }}"
                               id="title" required/>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="modality">Modality</label>
                        <select class="form-select" name="modality" id="modality" required>
                            <option></option>
                            @foreach(\Logixs\Modules\Course\Models\Modality::all() as $modality)
                                <option {{$classCourse->modality()->id() === $modality->id() ? 'selected' : ''}}
                                        value="{{$modality->id()}}">{{$modality->name()}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="date">Date</label>
                        <input type="date" class="form-control" name="date" value="{{$classCourse->date()->toDateString()}}" id="date"/>
                    </div>

                </div>

                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="class_seat">Number Of Seats</label>
                        <input type="text" class="form-control" name="class_seat" value="{{$classCourse->classSeat()}}"
                               id="class_seat" required/>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="venue">Venue</label>
                        <input type="text" class="form-control" name="venue" value="{{$classCourse->venue()}}"
                               id="venue" required/>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="class_duration">Class Duration</label>
                        <input type="text" class="form-control" name="class_duration"
                               value="{{$classCourse->classDuration()}}" id="class_duration" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col">
                        <img src="{{ asset('storage/'.$classCourse->classHandOuts()) }}" class="rounded" width="150">
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="file">Image</label>
                        <input type="file" class="form-control" name="file" id="file"/>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
