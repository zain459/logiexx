@extends('site.master')
@section('title', '')
@section('content')
    <div class="title-section filtermenu-outer">
        <div class="container">
            <div class="inner-menu">
                <a href="courses.php" class="btn-link"><span class="button">Browse Our Courses</span></a>
                <a href="#" class="btn-link btn-opener open"><span class="opener"><span>&nbsp;</span></span></a>
            </div>
            <div class="fields-menu">
                <h2>Browse Our Subject Fields</h2>
                <ul>
                    <li><a href="#">Business & Management</a></li>
                    <li><a href="#">Social Sciences</a></li>
                    <li><a href="#">Health & Medicine</a></li>
                    <li><a href="#">Statistics</a></li>
                    <li><a href="#">Education & Teaching</a></li>
                    <li><a href="#">Supply Chain Management</a></li>
                </ul>
            </div>
            <h1>Courses</h1>
            <div class="filtermenu-bar">
                <form method="get">
                    <a href="#" class="opener">Select Filters</a>
                    <ul class="filter-menu">
                        <li><a href="#">Subject Field</a>
                            <ul>
                                @foreach($subjectAreas as $subjectArea)
                                    <li>
                                        <label>
                                            <input
                                                {{isset($filters['subject_areas']) && in_array($subjectArea->id(), $filters['subject_areas']) ? "checked": ""}}
                                                name="subject_areas[]" type="checkbox"
                                                value="{{$subjectArea->id()}}"> {{$subjectArea->name()}}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#">Fee</a>
                            <ul>
                                <li><label><input type="checkbox">Sub Item</label></li>
                                <li><label><input type="checkbox">Sub Item</label></li>
                                <li><label><input type="checkbox">Sub Item</label></li>
                            </ul>
                        </li>
                        <li><a href="#">Difficulty Level </a>
                            <ul>
                                @foreach(\Logixs\Modules\Course\Models\DifficultyLevel::all() as $difficultyLevel)
                                    <li>
                                        <label>
                                            <input
                                                {{isset($filters['difficulty_level']) && in_array($difficultyLevel->id(), $filters['difficulty_level']) ? "checked": ""}}
                                                type="checkbox" name="difficulty_level[]"
                                                value="{{$difficultyLevel->id()}}">{{ $difficultyLevel->name() }}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#">Start Date</a>
                            <ul>
                                @foreach(\Logixs\Modules\Course\Models\StartDateStatus::all() as $dateStatus)
                                    <li>
                                        <label>
                                            <input
                                                {{isset($filters['start_date_status']) && in_array($dateStatus->id(), $filters['start_date_status']) ? "checked": ""}}
                                                type="checkbox" name="start_date_status[]"
                                                value="{{$dateStatus->id()}}">{{$dateStatus->name()}}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#">Duration </a>
                            <ul>
                                @foreach(\Logixs\Modules\Course\Models\DurationInterval::all() as $durationInterval)
                                    <li>
                                        <label>
                                            <input
                                                {{isset($filters['duration_interval']) && in_array($durationInterval->id(), $filters['duration_interval']) ? "checked": ""}}
                                                type="checkbox" name="duration_interval[]"
                                                value="{{$durationInterval->id()}}">{{$durationInterval->name()}}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="#">Modality</a>
                            <ul>
                                @foreach(\Logixs\Modules\Course\Models\Modality::all() as $modality)
                                    <li>
                                        <label>
                                            <input
                                                {{isset($filters['$modality']) && in_array($modality->id(), $filters['$modality']) ? "checked": ""}}
                                                type="checkbox" name="modality[]"
                                                value="{{$modality->id()}}">{{$modality->name()}}
                                        </label>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </ul>

                </form>
            </div>
        </div>
    </div>
    <main id="main">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Logixs Academy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Courses</li>
                </ol>
            </nav>
        </div>
        <section class="block apply-block">
            <div class="container">
                <div class="filter-tags d-md-flex flex-wrap justify-content-between">
                    <div class="inner">
                        @foreach($subjectAreas as $subjectArea)
                            @if(isset($filters['subject_areas']) && in_array($subjectArea->id(), $filters['subject_areas']))
                                <span class="tag">{{ $subjectArea->name()  }} </a></span>
                            @endif
                        @endforeach
                        @foreach(\Logixs\Modules\Course\Models\DifficultyLevel::all() as $difficultyLevel)
                            @if(isset($filters['difficulty_level']) && in_array($difficultyLevel->id(), $filters['difficulty_level']))
                                <span class="tag">{{$difficultyLevel->name()}} </a></span>
                            @endif
                        @endforeach
                        @foreach(\Logixs\Modules\Course\Models\DurationInterval::all() as $durationInterval)
                            @if(isset($filters['duration_interval']) && in_array($durationInterval->id(), $filters['duration_interval']))
                                <span class="tag">{{$durationInterval->name()}} </a></span>
                            @endif
                        @endforeach
                        @foreach(\Logixs\Modules\Course\Models\Modality::all() as $modality)
                            @if(isset($filters['$modality']) && in_array($modality->id(), $filters['$modality']))
                                <span class="tag">{{$modality->name()}} </a></span>
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
                                    <div class="img"><img src="{{'/storage/'.$course->image()}}" class="img-fluid"
                                                          alt="">
                                    </div>
                                    <div class="text">
                                        <span class="modality">Modality: {{($course->modality()->name())}}</span>
                                        <h3><a href="#">{{$course->category->name()}}</a>
                                        </h3>
                                        <dl>
                                            <dt>Duration</dt>
                                            <dd>{{$course->duration()}}</dd>
                                            <dt>Course Fee</dt>
                                            <dd>{{$course->feeAmount()}}</dd>
                                            <dt>Start Date</dt>
                                            <dd>{{\Carbon\Carbon::parse($course->courseStartDate())->format('F j, Y')}}</dd>
                                        </dl>
                                        <a href="#" class="learnmore">Learn More</a>
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
@endsection
