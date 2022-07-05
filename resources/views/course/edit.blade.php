@extends('layout')
@section('title', sprintf('%s Edit' , ucfirst($course->courseCode())))
@section('content')

    <x-course-navbar :course="$course" />

    <form action="{{ route('course-update', $course->id()) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header fw-bold text-uppercase"></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3">
                                <label class="form-label" for="title">Title</label>
                                <input type="text" class="form-control" name="title" value="{{ $course->title() }}" id="title" required />
                            </div>

                            <div class="mb-3 col">
                                <label class="form-label" for="overview">Class Size</label>
                                <input type="number" class="form-control" name="classSize" value="{{ $course->classSize() }}" min="0" id="overview"/>
                            </div>

                            <div class="mb-3 col">
                                <label class="form-label" for="timeCommitment">Time Commitment</label>
                                <input type="text" class="form-control" name="timeCommitment" value="{{ $course->timeCommitment() }}" id="timeCommitment"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col">
                                <label class="form-label" for="courseCode">Course Code</label>
                                <input type="text" class="form-control" name="courseCode" value="{{ $course->courseCode() }}" id="courseCode"/>
                            </div>

                            <div class="mb-3 col">
                                <label class="form-label" for="duration">Duration</label>
                                <input type="text" class="form-control" name="duration" value="{{ $course->duration() }}" id="duration" required/>
                            </div>
                        </div>


                        <div class="row">
                            <div class="mb-3 col">
                                <label class="form-label" for="venue">Venue</label>
                                <input type="text" class="form-control" name="venue" value="{{ $course->venue() }}" id="venue"/>
                            </div>

                            <div class="mb-3 col">
                                <label class="form-label" for="platform">Platform</label>
                                <input type="text" class="form-control" name="platform" value="{{ $course->platform() }}" id="platform" required/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col">
                                <label class="form-label" for="courseStartDate">Course Start Date</label>
                                <input type="date" class="form-control" name="courseStartDate" value="{{ $course->courseStartDate()->toDateString() }}" id="courseStartDate"/>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col">
                                <label class="form-label" for="overview">Overview</label>
                                <textarea name="overview" class="form-control">{{ $course->overview() }}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="mb-3 col">
                                <label class="form-label" for="description">Description</label>
                                <textarea name="description" class="form-control">{{ $course->Description() }}</textarea>
                            </div>
                        </div>

                        <div class="mb-3 col-md-12">
                            <div class="mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="feeType" {{ $course->feeType() === 'paid' ? 'checked':'' }} onclick="javascript:check();" id="paid" value="paid"/>
                                    <label class="form-check-label" for="paid">Paid</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="feeType" {{ $course->feeType() === 'free' ? 'checked':'' }} onclick="javascript:check();" id="free" value="free"/>
                                    <label class="form-check-label" for="free">Free</label>
                                </div>
                            </div>

                            <div class="col mb-3" id="show" style="visibility:hidden">
                                <input type="number" class="form-control" min="0" name="feeAmount" value="{{ $course->feeAmount() }}"/>
                            </div>

                            <div class="row">
                                <div class="mb-3 col">
                                    <img src="{{ asset('storage/'.$course->image()) }}" class="rounded" width="150">
                                </div>
                            </div>

                            <div class="row">
                                <div class="mb-3 col">
                                    <label class="form-label" for="overview">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col">
                                    <label class="form-label" for="overview">PDF File</label>
                                    <input type="file" name="file" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header fw-bold text-uppercase"></div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="title">Category</label>
                            <select class="form-select" name="categoryId" required>
                                <option></option>
                                @foreach($category as $cat)
                                    <option
                                        {{ $course->categoryId() === $cat->id() ? 'selected':'' }} value="{{ $cat->id() }}">{{ $cat->name() }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="title">Subject Area</label>
                            <select class="form-select" name="subjectArea" required>
                                <option></option>
                                @foreach($subjectArea as $area)
                                    <option
                                        {{ $course->SubjectAreaId() === $area->id() ? 'selected':'' }} value="{{ $area->id() }}">{{ $area->name() }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="language">Language</label>
                            <select class="form-select" name="language" id="language" required>
                                <option></option>
                                @foreach( \Logixs\Modules\Course\Models\Language::all() as $language )
                                    <option
                                        {{ $course->language()->id() === $language->id() ? 'selected':'' }} value="{{ $language->id() }}">{{ $language->name() }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="difficultyLevel">Difficulty Level</label>
                            <select class="form-select" name="difficultyLevel" id="difficultyLevel" required>
                                <option></option>
                                @foreach( \Logixs\Modules\Course\Models\DifficultyLevel::all() as $difficultyLevel )
                                    <option
                                        {{ $course->difficultyLevel()->id() === $difficultyLevel->id() ? 'selected':'' }} value="{{ $difficultyLevel->id() }}">{{ $difficultyLevel->name() }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="dateStatus">Start Date Status</label>
                            <select class="form-select" name="dateStatus" id="dateStatus" required>
                                <option></option>
                                @foreach( \Logixs\Modules\Course\Models\StartDateStatus::all() as $dateStatus )
                                    <option
                                        {{ $course->startDateStatus()->id() === $dateStatus->id() ? 'selected':'' }} value="{{ $dateStatus->id() }}">{{ $dateStatus->name() }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="durationInterval">Duration Interval</label>
                            <select class="form-select" name="durationInterval" id="durationInterval" required>
                                <option></option>
                                @foreach(\Logixs\Modules\Course\Models\DurationInterval::all() as $durationInterval)
                                    <option
                                        {{ $course->durationInterval()->id() === $durationInterval->id() ? 'selected':'' }} value="{{ $durationInterval->id() }}">{{ $durationInterval->name() }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="modality">Modality</label>
                            <select class="form-select" name="modality" id="modality" required>
                                <option></option>
                                @foreach(\Logixs\Modules\Course\Models\Modality::all() as $modality)
                                    <option
                                        {{ $course->modality()->id() === $modality->id() ? 'selected':'' }} value="{{ $modality->id() }}">{{ $modality->name() }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="pace">Pace</label>
                            <select class="form-select" name="pace" id="pace" required>
                                <option></option>
                                @foreach(\Logixs\Modules\Course\Models\Pace::all() as $pace)
                                    <option
                                        {{ $course->pace()->id() === $pace->id() ? 'selected':'' }} value="{{ $pace->id() }}">{{ $pace->name() }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <script>
        function check() {
            if (document.getElementById('paid').checked) {
                document.getElementById('show').style.visibility = 'visible';
            } else document.getElementById('show').style.visibility = 'hidden';

        }
    </script>
@endsection
