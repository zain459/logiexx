@extends('site.master')

@section('title', 'Course Detail')
@section('content')

    <div class="title-section coursesdetail-title">
        <div class="container">
            <div class="inner-menu">
                <a href="#subjectArea" class="btn-link"><span class="button">Browse Our Courses</span></a>
                <a href="#" class="btn-link btn-opener open"><span class="opener"><span>&nbsp;</span></span></a>
            </div>
            <a href="course-enrollment.php" class="btn btn-primary btn-enroll">Enroll Now <i
                    class="icon-link ms-3 align-items-center"></i></a>
            <div class="fields-menu">
                <h2>Browse Our Subject Fields</h2>
                @foreach($subjectFields as $subjectField)
                    <ul>
                        <li><a href="#">{{$subjectField->name()}}</a></li>
                    </ul>
                @endforeach
            </div>
            @if($specific != null)
                <h1>{{$specific->title()}}</h1>
            @endif
        </div>
    </div>
    <main id="main" class="p-0">
        <section class="block bg-light detail-block">
            <div class="container">
                <div class="float-lg-end right-block">
                    <img src="{{asset('images/detail-img.jpg')}}" class="img-fluid w-100" alt="">
                    <div class="text">
                        <h2>At a Glance</h2>
                        @if($specific != null)
                            <dl>
                                <dt>Category</dt>
                                <dd>{{$specific->category->name()}}</dd>
                                <dt>Language</dt>
                                <dd>{{$specific->language()->name()}}</dd>
                                <dt>Level</dt>
                                <dd>{{$specific->difficultyLevel()->name()}}</dd>
                                <dt>Pace</dt>
                                <dd>{{$specific->pace()->name()}}</dd>
                                <dt>Platform</dt>
                                <dd>{{$specific->platform()}}</dd>
                                <dt>Class Size</dt>
                                <dd>{{$specific->classSize()}}</dd>
                                <dt>Duration</dt>
                                <dd>{{$specific->duration()}}</dd>
                                <dt>Time Commitment</dt>
                                <dd>{{$specific->timeCommitment()}}</dd>
                                <dt>Course Fee</dt>
                                <dd>{{$specific->feeAmount()}}</dd>
                                <dt>Course Start Date</dt>
                                <dd>{{Carbon\Carbon::parse($specific->courseStartDate())->format('F j, Y')}}</dd>
                                <dt>Course Code</dt>
                                <dd>{{$specific->courseCode()}}</dd>
                                <dt>Venue</dt>
                                <dd>{{$specific->venue()}}</dd>
                            </dl>
                        @endif
                    </div>
                </div>
                <div class="outer-group">
                    @if($specific != null)
                        <div class="group">
                            <h2>Course Overview</h2>
                            <p>{{$specific->overview()}}</p>
                        </div>
                    @endif
                    <div class="group">
                        <h2>Course Modality</h2>
                        <ul class="overview-list">
                            <li class="selected">In-Person</li>
                            <li>Online</li>
                            <li>Blended</li>
                            <li>Online Live</li>
                        </ul>
                    </div>
                    <div class="group">
                        <div class="inline-field d-flex flex-column flex-md-row align-items-center" id="subjectArea">
                            <span for="CourseTitle" class="me-3">Subject Area(s):</span>
                            @foreach($courses as $course)
                                @if($course != null)
                                    <span class="tag">{{$course->subjectArea->name()}}</span>
                                @endif
                            @endforeach
                        </div>
                        <div class="d-flex justify-content-start record-data py-4">
                            @if($specific != null)
                                <span> <i
                                        class="icon-students ms-0 me-1"></i> {{$specific->classSize()}} Students</span>
                            @endif
                        </div>
                        <a href="#" class="view-all"><i class="icon-arrow"></i> Download Course Catalogue (PDF)</a>
                    </div>
                </div>
            </div>
        </section>
        @foreach($courseLearningObjectives as $courseLearningObjective)
            @if($courseLearningObjective)
                <section class="block bdb">

                    <div class="container pb-4 mb-5">
                        <h2>{{$courseLearningObjective->title()}}</h2>
                        <p>{!!html_entity_decode($courseLearningObjective->description())!!}</p>
                    </div>
                </section>
            @endif
        @endforeach
        @if($pages != null)
            <section class="block academy-block">
                <div class="container">
                    {{--                    <h2>{{$page->title()}}</h2>--}}
                    <div class="row row-cols-md-3 row-cols-1 text-center mb-4">
                        {{--                    @foreach($pages as $page)--}}
                        {{--                        <div class="col" data-aos-delay="100" data-aos="fade-left" data-aos-duration="1000">--}}
                        {!! html_entity_decode($pages->description()) !!}
                        {{--                            <img src="{{asset('images/img-7.png')}}" alt="">--}}
                        {{--                            <h3>Active</h3>--}}
                        {{--                            <p>Our courses are nothing like a typical sit-back-and-listen lecture. You’ll engage in a--}}
                        {{--                                new--}}
                        {{--                                activity every three to five minutes. Each element is designed to keep you interested,--}}
                        {{--                                involved, and on your toes.</p>--}}
                        {{--                        </div>--}}
                        {{--                    @endforeach--}}
                        {{--                        <div class="col" data-aos-delay="400" data-aos="fade-left" data-aos-duration="1000">--}}
                        {{--                            <img src="{{asset('images/img-8.png')}}" alt="">--}}
                        {{--                            <h3>Social</h3>--}}
                        {{--                            <p>Engaging with your peers is a big part of what makes Logixs Academy unique. You exchange--}}
                        {{--                                ideas, offer input, and seek out viewpoints from a community of learners gathered from--}}
                        {{--                                around the globe. In the process, you learn from each other’s experiences and--}}
                        {{--                                perspectives.</p>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="col" data-aos-delay="700" data-aos="fade-left" data-aos-duration="1000">--}}
                        {{--                            <img src="{{asset('images/img-9.png')}}" alt="">--}}
                        {{--                            <h3>Scenario-Based</h3>--}}
                        {{--                            <p>Immerse yourself in real-world learning. Lessons are brought to life through cases, which--}}
                        {{--                                put--}}
                        {{--                                you in the shoes of real time scenarios. Hear firsthand the challenges they faced, and--}}
                        {{--                                wrestle with the same issues and imperfect information.</p>--}}
                        {{--                        </div>--}}
                    </div>

                </div>
            </section>
        @endif
        @if($specific != null)
            <section class="block bdb">
                <div class="container pb-4 mb-5">
                    <h2>Who developed the course?</h2>
                    <p>{{$specific->description()}}</p>
                </div>
            </section>
        @endif
        <section class="block bdb">
            <div class="container pb-4 mb-5">
                <h2>Other courses you may like</h2>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 posts">
                    @foreach($courses as $course)
                        @if($course)
                            <div class="col post">
                                <div class="inner">
                                    <div class="img"><img src="{{'/storage/'.$course->image()}}" class="img-fluid"
                                                          alt="">
                                    </div>
                                    <div class="text">
                                        <span class="modality">Modality: {{$course->modality()->name()}}</span>
                                        <h3>{{$course->title()}}</h3>
                                        <dl>
                                            <dt>Duration</dt>
                                            <dd>{{$course->duration()}}</dd>
                                            <dt>Course Fee</dt>
                                            <dd>PKR {{$course->feeAmount()}}</dd>
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
                <a href="{{route('site.course-index')}}" class="view-all"><i class="icon-arrow"></i> View all
                    courses</a>
            </div>
        </section>
        <section class="block learn-block mb-5">
            <div class="container">
                <h2>Who will you learn with?</h2>
                <div class="row">
                    @foreach($courseInstructors as $courseInstructor)
                        @if($courseInstructor != null)
                            <div class="col-lg-6 col-12">
                                <div class="d-md-flex align-items-center mb-4">
                                    <div class="image"><img src="{{'/storage/'.$courseInstructor->instructor->image()}}"
                                                            class="img-fluid rounded-circle mx-auto mx-md-0 d-block"
                                                            alt="">
                                    </div>
                                    <div class="text">
                                        <ul>
                                            <li><i class="icon-rating"></i> 4.9 Instructor Rating</li>
                                            <li><i class="icon-reviews"></i> 533 Reviews</li>
                                            <li><i class="icon-students"></i> 3251 Students</li>
                                        </ul>
                                    </div>
                                </div>
                                <h3><a href="#">{{$courseInstructor->instructor->name}}</a></h3>
                                <a href="#" class="btn-brief" data-bs-toggle="modal"
                                   data-bs-target="#briefbio-{{$courseInstructor->instructor->id}}"><i
                                        class="icon-link"></i> Brief Bio</a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
                <section class="logos-outer mb-5">
                    <div class="d-flex justify-content-center trust-row">
                        <span>Affiliated Partners</span>
                    </div>
                        <div class="logos">
                            <div class="container">
                                <div class="slick-slider">
                                    @foreach($partners as $partner)
                                        @if($partner != null)
                                            <div class="slide"><img src="{{'/storage/'.$partner->image()}}" class="img-fluid mx-auto d-block" alt=""></div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                </section>
        <section class="block bdb">
            <div class="container pb-4 mb-5">
                <h2>Learner Feedback</h2>
                <div class="d-flex feedback-section">
                    @foreach($courseFeedbacks as $courseFeedback)
                        @if($courseFeedback)
                            <p>{{$courseFeedback->feedback()}}</p>
                        @endif
                    @endforeach
                </div>
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <a href="learner-feedback.php" class="btn btn-primary mb-4 mb-md-0">Submit Feedback <i
                            class="icon-link ms-3 align-items-center"></i></a>
                    <span class="rating"><span class="star-rating">5.0</span><img src="{{asset('images/rating.png')}}"> 588 Feedbacks <b>Excellent</b>  </span>
                </div>
            </div>
        </section>
        <section class="block">
            <div class="container mb-5">
                <h2>Licensing Information</h2>
                <p><a href="https://creativecommons.org/licenses/by-nc/4.0" target="_blank"><img
                            src="{{asset('images/creativecommons.png')}}" class="img-fluid" alt=""></a></p>
            </div>
        </section>
    </main>
@endsection
<!-- Modal -->
@foreach($instructors as $instructor)
    @if($instructor != null)
        <div class="modal fade" id="briefbio-{{$instructor->id}}" tabindex="-1" aria-labelledby="staticBackdropLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="mb-0">{{$instructor->name()}}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{$instructor->bio()}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endforeach
