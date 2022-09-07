@extends('site.master')
@section('title', 'course')
@section('content')
    <div class="title-section filtermenu-outer">
        <div class="container">
            <div class="inner-menu">
                <a href="{{route('site.course-index')}}" class="btn-link"><span class="button">Browse Our Courses</span></a>
                <a href="#" class="btn-link btn-opener open"><span class="opener"><span>&nbsp;</span></span></a>
            </div>
            <div class="fields-menu">
                <h2>Browse Our Subject Fields</h2>
                <ul>
                    @foreach($subjectAreas as $subjectField)
                        @if($subjectField != null)
                            <li>
                                <a href="{{ route('site.course-index', ['subject_areas' => [$subjectField->id()]]) }}">{{$subjectField->name()}}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <h1>Courses</h1>
            <div class="filtermenu-bar">
                <a href="#" class="opener">Select Filters</a>
                <form action="{{route('site.course-index')}}" id="filtersForm">
                    <ul class="filter-menu">
                        <li><a href="">Subject Field</a>
                            <ul>
                                @foreach($subjectAreas as $subjectArea)
                                    <li>
                                        <label>
                                            <input
                                                {{isset($filters['subject_areas']) && in_array($subjectArea->id(), $filters['subject_areas']) ? "checked": ""}}
                                                name="subject_areas[]" type="checkbox" class="filters"
                                                value="{{$subjectArea->id()}}"> {{$subjectArea->name()}}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="">Fee</a>
                            <ul>
                                @foreach(\Logixs\Modules\Course\Models\CourseFee::all() as $courseFee)
                                    <li>
                                        <label>
                                            <input
                                                {{isset($filters['fee_type']) && in_array($courseFee->id(), $filters['fee_type']) ? "checked": ""}}
                                                type="checkbox" name="fee_type[]" class="filters"
                                                value="{{$courseFee->name()}}">{{$courseFee->name()}}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="">Difficulty Level </a>
                            <ul>
                                @foreach(\Logixs\Modules\Course\Models\DifficultyLevel::all() as $difficultyLevel)
                                    <li>
                                        <label>
                                            <input
                                                {{isset($filters['difficulty_level']) && in_array($difficultyLevel->id(), $filters['difficulty_level']) ? "checked": ""}}
                                                type="checkbox" name="difficulty_level[]" class="filters"
                                                value="{{$difficultyLevel->id()}}">{{ $difficultyLevel->name() }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="">Start Date</a>
                            <ul>
                                @foreach(\Logixs\Modules\Course\Models\StartDateStatus::all() as $dateStatus)
                                    <li>
                                        <label>
                                            <input
                                                {{isset($filters['course_start_date']) && in_array($dateStatus->name(), $filters['course_start_date']) ? "checked": ""}}
                                                type="checkbox" name="course_start_date[]" class="filters"
                                                value="{{$dateStatus->name()}}">{{$dateStatus->name()}}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="">Duration </a>
                            <ul>
                                @foreach(\Logixs\Modules\Course\Models\DurationInterval::all() as $durationInterval)
                                    <li>
                                        <label>
                                            <input
                                                {{isset($filters['duration_interval']) && in_array($durationInterval->id(), $filters['duration_interval']) ? "checked": ""}}
                                                type="checkbox" name="duration_interval[]" class="filters"
                                                value="{{$durationInterval->id()}}">{{$durationInterval->name()}}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="">Modality</a>
                            <ul>
                                @foreach(\Logixs\Modules\Course\Models\Modality::all() as $modality)
                                    <li>
                                        <label>
                                            <input
                                                {{isset($filters['modality']) && in_array($modality->id(), $filters['modality']) ? "checked": ""}}
                                                type="checkbox" name="modality[]" class="   filters"
                                                value="{{$modality->id()}}">{{$modality->name()}}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <main id="main">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('site.index')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('site.course-index')}}">Logixs Academy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Courses</li>
                </ol>
            </nav>
        </div>
        <section class="block apply-block">
            <div class="container">
                <div class="filter-tags d-md-flex flex-wrap justify-content-between">
                    <div class="inner" id="demo">
                        @foreach($subjectAreas as $subjectArea)
                            @if(isset($filters['subject_areas']) && in_array($subjectArea->id(), $filters['subject_areas']))
                                <span class="tag">
                                    <a href="{{ request()->fullUrlWithQuery(['subject_areas' => null]) }}">{{ $subjectArea->name() }} </a>
                                </span>
                            @endif
                        @endforeach
                        @foreach(\Logixs\Modules\Course\Models\CourseFee::all() as $courseFee)
                            @if(isset($filters['fee_type']) && in_array($courseFee->id(), $filters['fee_type']))
                                <span class="tag"><a
                                        href="{{ request()->fullUrlWithQuery(['fee_type' => null]) }}">{{$courseFee->name()}}</a></span>
                            @endif
                        @endforeach
                        @foreach(\Logixs\Modules\Course\Models\DifficultyLevel::all() as $difficultyLevel)
                            @if(isset($filters['difficulty_level']) && in_array($difficultyLevel->id(), $filters['difficulty_level']))
                                <span class="tag"><a
                                        href="{{ request()->fullUrlWithQuery(['difficulty_level' => null]) }}">{{$difficultyLevel->name()}} </a></span>
                            @endif
                        @endforeach
                        @foreach(\Logixs\Modules\Course\Models\StartDateStatus::all() as $startDateStatus)
                            @if(isset($filters['start_date_status']) && in_array($startDateStatus->id(), $filters['start_date_status']))
                                <span class="tag"><a
                                        href="{{ request()->fullUrlWithQuery(['start_date_status' => null]) }}">{{$startDateStatus->name()}} </a></span>
                            @endif
                        @endforeach

                        @foreach(\Logixs\Modules\Course\Models\DurationInterval::all() as $durationInterval)
                            @if(isset($filters['duration_interval']) && in_array($durationInterval->id(), $filters['duration_interval']))
                                <span class="tag"><a
                                        href="{{ request()->fullUrlWithQuery(['duration_interval' => null]) }}">{{$durationInterval->name()}} </a></span>
                            @endif
                        @endforeach
                        @foreach(\Logixs\Modules\Course\Models\Modality::all() as $modality)
                            @if(isset($filters['modality']) && in_array($modality->id(), $filters['modality']))
                                <span class="tag"><a
                                        href="{{ request()->fullUrlWithQuery(['modality' => null]) }}">{{$modality->name()}} </a></span>
                            @endif
                        @endforeach

                        <span class="btn-remove"><a href="{{route('site.course-index')}}">Remove all filters</a></span>
                    </div>
                    <span class="align-self-center">3 results on Logixs Academy</span>
                </div>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 posts">
                    @foreach($courses as $course)
                        @if($course != null)
                            <div class="col post">
                                <div class="inner">
                                    <div class="img">
                                        <a href="{{ route('site.course-detail', $course->id()) }}">
                                            <img src="{{'/storage/'.$course->image()}}" class="img-fluid" alt="">
                                        </a>
                                    </div>
                                    <div class="text">
                                        <span class="modality">Modality: {{($course->modality()->name())}}</span>
                                        <h3><a href="{{route('site.course-detail', $course->id())}}">{{$course->title()}}</a>
                                        </h3>
                                        <dl>
                                            <dt>Duration</dt>
                                            <dd>{{$course->duration()}}</dd>
                                            <dt>Course Fee</dt>
                                            <dd>{{$course->feeAmount()}}</dd>
                                            <dt>Start Date</dt>
                                            <dd>{{\Carbon\Carbon::parse($course->courseStartDate())->format('F j, Y')}}</dd>
                                        </dl>
                                        <a href="{{route('site.course-detail', $course->id())}}" class="learnmore">Learn
                                            More</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                @if($courses != null)
                    <div class="pagination d-flex justify-content-center align-items-center">
                        {!! $courses->links() !!}
                    </div>
                @endif
            </div>
        </section>
    </main>
    <script>
        $(document).ready(function () {
            $(".filters").on('change', function () {
                $('#filtersForm').submit();
                // var url = window.location.href;
                // console.log(url, 'hello')
                // if (url.indexOf('?') > -1) {
                //     url += '&' + this.name + "=" + this.value;
                // } else {
                //     url += '?' + this.name + "=" + this.value;
                // }
                // window.location = url;
            })
        })
        // window.location.reload(false);
    </script>
@endsection
