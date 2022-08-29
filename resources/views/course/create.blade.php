@extends('layout')
@section('title', 'Create Course')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Add New Course</h3>

        <a href="{{ route('course-index') }}" class="btn btn-sm btn-primary">
            View all Courses
        </a>
    </div>

    <div class="card">
        <div class="card-header">
            <h5 class="card-title">New Course</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('course-store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" required/>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="title">Category</label>
                        <select class="form-select" name="categoryId" required>
                            <option></option>
                            @foreach($category as $cat)
                                <option value="{{ $cat->id() }}">{{ $cat->name() }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="title">Subject Area</label>
                        <select class="form-select" name="subjectArea" required>
                            <option></option>
                            @foreach($areas as $area)
                                <option value="{{ $area->id() }}">{{ $area->name() }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-md-3">
                        <label class="form-label" for="language">Language</label>
                        <select class="form-select" name="language" id="language" required>
                            <option></option>
                            @foreach(\Logixs\Modules\Course\Models\Language::all() as $language)
                                <option value="{{ $language->id() }}">{{ $language->name() }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-md-3">
                        <label class="form-label" for="difficultyLevel">Difficulty Level</label>
                        <select class="form-select" name="difficultyLevel" id="difficultyLevel" required>
                            <option></option>
                            @foreach(\Logixs\Modules\Course\Models\DifficultyLevel::all() as $difficultyLevel)
                                <option value="{{ $difficultyLevel->id() }}">{{ $difficultyLevel->name() }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-md-3">
                        <label class="form-label" for="dateStatus">Start Date Status</label>
                        <select class="form-select" name="dateStatus" id="dateStatus" required>
                            <option></option>
                            @foreach(\Logixs\Modules\Course\Models\StartDateStatus::all() as $dateStatus)
                                <option value="{{ $dateStatus->id() }}">{{ $dateStatus->name() }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-md-3">
                        <label class="form-label" for="durationInterval">Duration Interval</label>
                        <select class="form-select" name="durationInterval" id="durationInterval" required>
                            <option></option>
                            @foreach(\Logixs\Modules\Course\Models\DurationInterval::all() as $durationInterval)
                                <option value="{{ $durationInterval->id() }}">{{ $durationInterval->name() }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-md-3">
                        <label class="form-label" for="modality">Modality</label>
                        <select class="form-select" name="modality" id="modality" required>
                            <option></option>
                            @foreach(\Logixs\Modules\Course\Models\Modality::all() as $modality)
                                <option value="{{ $modality->id() }}">{{ $modality->name() }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-md-3">
                        <label class="form-label" for="pace">Pace</label>
                        <select class="form-select" name="pace" id="pace" required>
                            <option></option>
                            @foreach(\Logixs\Modules\Course\Models\Pace::all() as $pace)
                                <option value="{{ $pace->id() }}">{{ $pace->name() }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="row">
                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="overview">Class Size</label>
                        <input type="number" class="form-control" name="classSize" min="0" id="overview"/>
                    </div>
                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="timeCommitment">Time Commitment</label>
                        <input type="text" class="form-control" name="timeCommitment" id="timeCommitment"/>
                    </div>

                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="courseCode">Course Code</label>
                        <input type="text" class="form-control" name="courseCode" id="courseCode"/>
                    </div>

                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="duration">Duration</label>
                        <input type="text" class="form-control" name="duration" id="duration" required/>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="courseStartDate">Course Start Date</label>
                        <input type="date" class="form-control" name="courseStartDate" id="courseStartDate"/>
                    </div>

                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="venue">Venue</label>
                        <input type="text" class="form-control" name="venue" id="venue" required/>
                    </div>

                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="platform">Platform</label>
                        <input type="text" class="form-control" name="platform" id="platform" required/>
                    </div>

                    <div class="mb-3 col-md-12">
                        <label class="form-label" for="overview">Overview</label>
                        <textarea name="overview" class="form-control"></textarea>
                    </div>
                    {{--                    <div class="mb-3 col-md-12">--}}
                    {{--                        <label class="form-label" for="description">Description</label>--}}
                    {{--                        <textarea name="description" class="form-control"></textarea>--}}
                    {{--                    </div>--}}

                    <div class="mb-3 col-md-12">
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="feeType"
                                       onclick="javascript:check();" id="paid" value="paid"/>
                                <label class="form-check-label" for="paid">Paid</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="feeType"
                                       onclick="javascript:check();" id="free" value="free"/>
                                <label class="form-check-label" for="free">Free</label>
                            </div>
                        </div>

                        <div class="col-md-2" id="show" style="visibility:hidden">
                            <input type="number" class="form-control" min="0" name="feeAmount"
                                   placeholder="enter amount"/>
                        </div>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="platform">Link</label>
                        <input type="text" class="form-control" name="link" id="link" required/>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="image">Licensing Information Image</label>
                        <input type="file" class="form-control" name="licensing_information_image" id="image"/>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="image">Image</label>
                        <input type="file" class="form-control" name="image" id="image"/>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="file">PDF File</label>
                        <input type="file" class="form-control" name="file" id="file"/>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="description">Description</label>
                        <textarea class="ckeditor form-control" name="description"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        function check() {
            if (document.getElementById('paid').checked) {
                document.getElementById('show').style.visibility = 'visible';
            } else document.getElementById('show').style.visibility = 'hidden';

        }

        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
    {{--    <script type="text/javascript">--}}
    {{--        $(document).ready(function() {--}}
    {{--            $('.ckeditor').ckeditor();--}}
    {{--        });--}}
    {{--    </script>--}}
@endsection

