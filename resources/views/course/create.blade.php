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
                <div class="row twocolumns-form">
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="title">Title<sup>*</sup></label>
                        <input type="text" class="form-control" name="title" value="{{old('title')}}" id="title"
                               required/>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="title">Category<sup>*</sup></label>
                        <select class="form-select" name="categoryId" required>
                            <option></option>
                            @foreach($category as $cat)
                                <option
                                    value="{{ $cat->id() }}" @selected(old('categoryId') == $cat->id())>{{ $cat->name() }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="title">Subject Fields<sup>*</sup></label>
                        <select class="form-select" name="subjectArea" required>
                            <option></option>
                            @foreach($areas as $area)
                                <option
                                    value="{{ $area->id() }}" @selected(old('subjectArea') == $area->id())>{{ $area->name() }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row twocolumns-form">
                    <div class="mb-3 col-md-3">
                        <label class="form-label" for="language">Language<sup>*</sup></label>
                        <select class="form-select" name="language" id="language" required>
                            <option></option>
                            @foreach(\Logixs\Modules\Course\Models\Language::all() as $language)
                                <option
                                    value="{{ $language->id() }}" @selected(old('language') == $language->id())>{{ $language->name() }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-md-3">
                        <label class="form-label" for="difficultyLevel">Difficulty Level<sup>*</sup></label>
                        <select class="form-select" name="difficultyLevel" id="difficultyLevel" required>
                            <option></option>
                            @foreach(\Logixs\Modules\Course\Models\DifficultyLevel::all() as $difficultyLevel)
                                <option
                                    value="{{ $difficultyLevel->id() }}" @selected(old('difficultyLevel') == $difficultyLevel->id())>{{ $difficultyLevel->name() }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-md-3">
                        <label class="form-label" for="dateStatus">Start Date Status<sup>*</sup></label>
                        <select class="form-select" name="dateStatus" id="dateStatus" required>
                            <option></option>
                            @foreach(\Logixs\Modules\Course\Models\StartDateStatus::all() as $dateStatus)
                                <option value="{{ $dateStatus->id() }}"  @selected(old('dateStatus') == $dateStatus->id())>{{ $dateStatus->name() }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-md-3">
                        <label class="form-label" for="durationInterval">Duration Interval<sup>*</sup></label>
                        <select class="form-select" name="durationInterval" id="durationInterval" required>
                            <option></option>
                            @foreach(\Logixs\Modules\Course\Models\DurationInterval::all() as $durationInterval)
                                <option value="{{ $durationInterval->id() }}" @selected(old('durationInterval') == $durationInterval->id())>{{ $durationInterval->name() }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-md-3">
                        <label class="form-label" for="modality">Modality<sup>*</sup></label>
                        <select class="form-select" name="modality" id="modality" required>
                            <option></option>
                            @foreach(\Logixs\Modules\Course\Models\Modality::all() as $modality)
                                <option
                                    value="{{ $modality->id() }}" @selected(old('modality') == $modality->id())>{{ $modality->name() }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3 col-md-3">
                        <label class="form-label" for="pace">Pace<sup>*</sup></label>
                        <select class="form-select" name="pace" id="pace" required>
                            <option></option>
                            @foreach(\Logixs\Modules\Course\Models\Pace::all() as $pace)
                                <option value="{{ $pace->id() }}"  @selected(old('pace') == $pace->id())>{{ $pace->name() }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row twocolumns-form">
                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="overview">Class Size<sup>*</sup></label>
                        <input type="number" class="form-control" name="classSize" value="{{old('classSize')}}" min="0" id="overview" required/>
                    </div>
                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="timeCommitment">Time Commitment<sup>*</sup></label>
                        <input type="text" class="form-control" name="timeCommitment" value="{{old('timeCommitment')}}" id="timeCommitment" required/>
                    </div>

                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="courseCode">Course Code<sup>*</sup></label>
                        <input type="text" class="form-control" name="courseCode" value="{{old('courseCode')}}" id="courseCode" required/>
                    </div>

                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="duration">Duration<sup>*</sup></label>
                        <input type="text" class="form-control" name="duration" value="{{old('duration')}}" id="duration" required/>
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="courseStartDate">Course Start Date<sup>*</sup></label>
                        <input type="date" class="form-control" name="courseStartDate" value="{{old('courseStartDate')}}" id="courseStartDate" required/>
                    </div>

                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="venue">Venue<sup>*</sup></label>
                        <input type="text" class="form-control" name="venue" id="venue" value="{{old('venue')}}" required/>
                    </div>

                    <div class="mb-3 col-md-2">
                        <label class="form-label" for="platform">Platform<sup>*</sup></label>
                        <input type="text" class="form-control" name="platform" id="platform" value="{{old('platform')}}" required/>
                    </div>

                    <div class="mb-3 col-md-12">
                        <label class="form-label" for="overview">Overview<sup>*</sup></label>
                        <textarea name="overview" class="form-control" required>{{old('overview')}}</textarea>
                    </div>
                    {{--                    <div class="mb-3 col-md-12">--}}
                    {{--                        <label class="form-label" for="description">Description</label>--}}
                    {{--                        <textarea name="description" class="form-control"></textarea>--}}
                    {{--                    </div>--}}

                    <div class="mb-3 col-md-12">
                        <div class="mb-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="feeType" @checked("feeType")
                                       onclick="javascript:check();"  id="paid" value="paid" />
                                <label class="form-check-label" for="paid">Paid</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="feeType" @checked('feeType')
                                       onclick="javascript:check();" id="free" value="free"/>
                                <label class="form-check-label" for="free">Free</label>
                            </div>
                        </div>

                        <div class="col-md-2" id="show" style="visibility:hidden">
                            <input type="number" class="form-control" min="0" name="feeAmount" value="{{old('feeAmount')}}"
                                   placeholder="enter amount"/>
                        </div>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="platform">Link<sup>*</sup></label>
                        <input type="text" class="form-control" name="link" value="{{old('link')}}" id="link" required/>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="image">Licensing Information Image<sup>*</sup></label>
                        <input type="file" class="form-control" name="licensing_information_image" id="image" required/>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="image">Image<sup>*</sup></label>
                        <input type="file" class="form-control" name="image" id="image" required/>
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="file">PDF File<sup>*</sup></label>
                        <input type="file" class="form-control" name="file" id="file" required/>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="description">Description<sup>*</sup></label>
                        <textarea class="ckeditor form-control" name="description">{{old('description')}}</textarea>
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

