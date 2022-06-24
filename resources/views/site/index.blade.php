@extends('site.master')
@section('title', '')
@section('content')
    <div class="title-section">
        <div class="container">
            <div class="inner-menu">
                <a href="{{route('site.course-index')}}" class="btn-link"><span class="button">Browse Our Courses</span></a>
                <a href="#" class="btn-link btn-opener open"><span class="opener"><span>&nbsp;</span></span></a>
            </div>
            <div class="fields-menu">
                <h2>Browse Our Subject Fields</h2>
                @foreach($subjectFields as $subjectField)
                    @if($subjectField != null)
                        <ul>
                            <li><a href="#">{{$subjectField->name()}}</a></li>
                        </ul>
                    @endif
                @endforeach
            </div>
            <h1>Logixs Academy</h1>
        </div>
    </div>
    <main id="main">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Logixs Academy</li>
                </ol>
            </nav>
        </div>
        <section class="block our-courses bdb">
            <div class="container pb-4 mb-5">
                <h2>Our Courses</h2>
                <div>
                    <ul class="nav nav-tabs d-flex justify-content-between" id="myTab" role="tablist">
                        <li class="nav-item active" role="presentation">
                            <a href="#" class="nav-link active" data-bs-toggle="tab" data-bs-target="#trending-courses" role="tab"
                               aria-controls="tab1" aria-selected="true">Trending</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#popular-courses" role="tab"
                               aria-controls="tab2" aria-selected="false">Most Popular</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#recent-courses" role="tab"
                               aria-controls="tab3" aria-selected="false">Recently Added</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#upcoming-courses" role="tab"
                               aria-controls="tab4" aria-selected="false">Starting Soon</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#editors-courses" role="tab"
                               aria-controls="tab5" aria-selected="false">Editor’s Pick</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="trending-courses" role="tabpanel">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 posts">
                                @foreach($featuredTrendingCourses as $featuredTrendingCourse)
                                    @include('site.partials.featured-course-tab-content', ['course' => $featuredTrendingCourse])
                                @endforeach
                            </div>
                            <a href="{{route('site.course-index')}}" class="view-all"><i class="icon-arrow"></i>View
                                all courses</a>
                        </div>
                        <div class="tab-pane fade" id="popular-courses" role="tabpanel">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 posts">
                                @foreach($featuredPopularCourses as $featuredPopularCourse)
                                    @include('site.partials.featured-course-tab-content', ['course' => $featuredPopularCourse])
                                @endforeach
                            </div>
                            <a href="{{route('site.course-index')}}" class="view-all"><i class="icon-arrow"></i>View
                                all courses</a>
                        </div>
                        <div class="tab-pane fade" id="recent-courses" role="tabpanel">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 posts">
                                @foreach($courses as $c)
                                    @include('site.partials.featured-course-tab-content', ['course' => $c])
                                @endforeach
                            </div>
                            <a href="{{route('site.course-index')}}" class="view-all"><i class="icon-arrow"></i>View
                                all courses</a>
                        </div>
                        <div class="tab-pane fade" id="upcoming-courses" role="tabpanel">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 posts">
                                @foreach($startingSoon as $c)
                                    @include('site.partials.featured-course-tab-content', ['course' => $c])
                                @endforeach
                            </div>
                            <a href="{{route('site.course-index')}}" class="view-all"><i class="icon-arrow"></i>View
                                all courses</a>
                        </div>
                        <div class="tab-pane fade" id="editors-courses" role="tabpanel">
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 posts">
                                @foreach($featuresEditorPickCourses as $c)
                                    @include('site.partials.featured-course-tab-content', ['course' => $c])
                                @endforeach
                            </div>
                            <a href="{{route('site.course-index')}}" class="view-all"><i class="icon-arrow"></i>View
                                all courses</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="block subject-fields bdb">
            <div class="container pb-4 mb-5">
                <h2>Subject Fields</h2>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 text-center">
                    @foreach($subjectFields as $subjectField)
                        @if($subjectField != null)
                            <div class="col">
                                <i class=""><img src="{{'storage/'.$subjectField->image()}}" class="img-fluid w-10"
                                                 alt=""></i>
                                <h3><a href="#">{{$subjectField->name()}}</a></h3>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        @if($webinar != null)
            <section class="block series-block bdb">
                <div class="container pb-4 mb-5">
                    <h2>L.A. Webinars Series</h2>
                    <div class="row">
                        <div class="col-md-4 pb-3 pb-lg-0">
                            <img src="{{'storage/'.$webinar->image()}}" class="img-fluid w-100" alt="">
                            <div class="d-flex justify-content-between py-2">
                                <a href="{{route('site.webinar-pdf-download', $webinar->id())}}" class="btnlink">Download
                                    PDF Flyer</a>
                                <a href="webinar-form.php" class="btnlink">Click here to register <i class="icon-i"></i></a>
                            </div>
                            <div class="webinar-box d-none d-md-block">
                                <h3>Link to Join Webinar</h3>
                                <div class="d-lg-flex">
									<span class="barcode align-self-start">
										<img src="{{'storage/'.$webinar->linkImage()}}" alt="">
									</span>
                                    <div class="text">
                                        <span class="d-block">Link: <a href=""
                                                                       style="text-decoration: none">{{$webinar->link()}}</a></span>
                                        <span class="d-block">Meeting Id: {{$webinar->meetingId()}}</span>
                                        <span class="d-block">Passcode: {{$webinar->passcode()}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3>{{$webinar->title()}}</h3>
                            <p>{{$webinar->shortDescription()}}</p>
                            <dl>
                                <dt>Speakers</dt>
                                <dd>{{$webinar->speaker()}}</dd>
                                <dt>Moderator</dt>
                                <dd>{{$webinar->moderator()}}</dd>
                                <dt>Organization(s)</dt>
                                <dd>{{$webinar->organization()}}</dd>
                                <dt>Sponsors</dt>
                                <dd>{{$webinar->sponsor()}}</dd>
                                <dt>Focal Person</dt>
                                <dd>{{$webinar->focalPerson()}} <a href="#" class="mx-1"><i class="icon-phone"></i></a>
                                    <a href="#"
                                       class="mx-1"><i
                                            class="icon-email"></i></a></dd>
                                <dt class="date-time">Start Date & End Date</dt>
                                <dd class="date-time">{{\Carbon\Carbon::parse($webinar->startDate())->format('F j, Y H:i:s') . ' ' . \Carbon\Carbon::parse($webinar->endDate())->format('F j, Y H:i:s')}}</dd>
                            </dl>
                            <div class="d-flex justify-content-end record-data">
                                <span>1189 Registrations <i class="icon-registration"></i></span>
                                <span>23 Interested <i class="icon-interest"></i></span>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('site.view-all-webinar')}}" class="view-all"><i class="icon-arrow"></i> View all
                        webinars</a>
                </div>
            </section>
        @endif
        <section class="block academy-block">
            <div class="container">
                <h2>Why Logixs Academy</h2>
                <div class="row row-cols-md-3 row-cols-1 text-center mb-4">
                    <div class="col" data-aos-delay="100" data-aos="fade-left" data-aos-duration="1000">
                        <img src="images/img-1.png" alt="">
                        <h3>Explore with experts</h3>
                        <p>Meet educators from top universities and renowned organizations, who'll share their
                            experience through videos, articles, quizzes and discussions.</p>
                    </div>
                    <div class="col" data-aos-delay="400" data-aos="fade-left" data-aos-duration="1000">
                        <img src="images/img-2.png" alt="">
                        <h3>Explore together</h3>
                        <p>Join thousands of people learning together. Learning is as easy and natural as exploring with
                            a group of friends.</p>
                    </div>
                    <div class="col" data-aos-delay="700" data-aos="fade-left" data-aos-duration="1000">
                        <img src="images/img-3.png" alt="">
                        <h3>Explore anything</h3>
                        <p>Whether you want to develop as a professional or discover a new hobby, there's a course for
                            that. You can even take your learning further with online courses.</p>
                    </div>
                </div>
                <div class="text-center">
                    <strong class="subtitle">Our Community</strong>
                    <div class="row community-count" id="counters">
                        <div class="col col ps-lg-0">
                            @if($totalCourses != null)
                                <strong class="bold"><span class="counter" data-TargetNum="15"
                                                           data-Speed="2000"></span>+{{$totalCourses}}
                                </strong>
                                <span>Courses</span>
                            @endif
                        </div>
                        <div class="col">
                            <strong class="bold"><span class="counter" data-TargetNum="10000" data-Speed="2000"></span>+</strong>
                            <span>Global Alumni</span>
                        </div>
                        <div class="col">
                            @if($totalEnrollments != null)
                                <strong class="bold"><span class="counter" data-TargetNum="15000"
                                                           data-Speed="2000"></span>+{{$totalEnrollments}}</strong>
                                <span>Enrollments</span>
                            @endif
                        </div>
                        <div class="col">
                            @if($totalInstructors != null)
                                <strong class="bold"><span class="counter" data-TargetNum="30"
                                                           data-Speed="2000"></span>{{$totalInstructors}}+</strong>
                                <span>Instructors</span>
                            @endif
                        </div>
                        <div class="col">
                            @if($totalPartners != null)
                                <strong class="bold"><span class="counter" data-TargetNum="10"
                                                           data-Speed="2000"></span>{{$totalPartners}}+</strong>
                                <span>Corporate Partners</span>
                            @endif
                        </div>
                        <div class="col pe-lg-0">
                            <strong class="bold"><span class="counter" data-TargetNum="5"
                                                       data-Speed="2000"></span>+</strong>
                            <span>Countries</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="logos-outer">
            <div class="d-flex justify-content-center trust-row">
                <span>Organizations trust Logixs Academy</span>
            </div>
            <div class="logos">
                <div class="container">
                    <div class="slick-slider">
                        @foreach($partners as $partner)
                            @if($partner != null)
                                <div class="slide"><img src="{{'storage/'. $partner->image()}}"
                                                        class="img-fluid mx-auto d-block" alt=""></div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <section class="block academy-block pt-5 bdb">
            <div class="container pb-4 mb-0">
                <h2>Need to train your team?</h2>
                <p>We’ve got the solution: world-class training and development programs developed by field experts.</p>
                <div class="d-flex justify-content-end">
                    <a href="corporate-partnership.php" class="btn btn-primary">Get Started</a>
                </div>
            </div>
        </section>
        <section class="block academy-block pt-5 bdb">
            <div class="container pb-4 mb-5">
                <h2>Become an instructor</h2>
                <p>Instructors from around the globe can teach students on Logixs Academy. We provide the platform to
                    teach what you love.</p>
                <div class="row py-md-5 py-3">
                    <div class="col-md-3 d-none d-md-flex flex-column justify-content-center text-center"><span
                            class="subheading">Several Reasons to Join Us</span></div>
                    <div class="col-md-9 features">
                        <div class="row row-cols-md-3 row-cols-1 text-center">
                            <div class="col" data-aos-delay="400" data-aos="fade-left" data-aos-offset="-300"
                                 data-aos-duration="1000">
                                <h3>Teach your way</h3>
                                <img src="images/img-4.png" alt="">
                                <p>Publish the course you want, in the way you want, and always have of control your own
                                    content.</p>
                            </div>
                            <div class="col" data-aos-delay="500" data-aos="fade-left" data-aos-offset="-300"
                                 data-aos-duration="1000">
                                <h3>Inspire learners</h3>
                                <img src="images/img-5.png" alt="">
                                <p>Teach what you know and help learners explore their interests, gain new skills, and
                                    advance their careers.</p>
                            </div>
                            <div class="col" data-aos-delay="700" data-aos="fade-left" data-aos-offset="-300"
                                 data-aos-duration="1000">
                                <h3>Get rewarded</h3>
                                <img src="images/img-6.png" alt="">
                                <p>Expand your professional network, build your expertise, and earn money on each paid
                                    enrollment.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="become-an-instructor.php" class="btn btn-primary">Apply Here </a>
                </div>
            </div>
        </section>
        <section class="block testimonials-block pb-4">
            <div class="container">
                <h2 class="text-center">Testimonials</h2>
                <div class="row row-cols-md-3 row-cols-1 text-center mb-4">
                    @foreach($testimonials as $testimonial)
                        @if($testimonial)
                            <div class="col">
                                <div class="photo"><img src="{{'storage/'.$testimonial->image()}}" class="img-fluid"
                                                        alt=""></div>
                                <strong class="name" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                        title="Lorem, ipsum dolor sit amet">{{$testimonial->name()}}</strong>
                                <span
                                    class="post">{{$testimonial->designation(). ','.$testimonial->company().'.'}}</span>
                                <blockquote>
                                    <q>{{$testimonial->description()}}</q>
                                </blockquote>
                            </div>
                        @endif
                    @endforeach
                </div>
                <a href="{{route('site.testimonial-index')}}" class="view-all"><i class="icon-arrow"></i> View more
                    testimonials</a>
            </div>
        </section>
        <section class="block">
            <div class="container">
                <div class="advertisement-box mb-5">
                    <h2>Advertisement</h2>
                    <div class="advbox">
                    </div>
                </div>
                <div>
                    <ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link active" data-bs-toggle="tab" data-bs-target="#upcomingevents"
                               role="tab" aria-controls="upcomingevents" aria-selected="true">Upcoming Events</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#" class="nav-link" data-bs-toggle="tab" data-bs-target="#latestnews" role="tab"
                               aria-controls="latestnews" aria-selected="false">Latest News</a>
                        </li>
                    </ul>
                    <div class="tab-content tab-data" id="myTabContent">
                        @if($event)
                            <div class="tab-pane fade show active" id="upcomingevents" role="tabpanel"
                                 aria-labelledby="upcomingevents">
                                <h3>Event Details</h3>
                                <p>Posted Date: {{\Carbon\Carbon::parse($event->startDate())->format('j F, Y')}}</p>
                            </div>
                        @endif
                        @if($new)
                            <div class="tab-pane fade" id="latestnews" role="tabpanel" aria-labelledby="tab2">
                                <h3>News Details</h3>
                                <p>Posted Date:{{\Carbon\Carbon::parse($new->posted_date)->format('j F, Y')}}</p>
                            </div>
                        @endif
                    </div>
                    <a href="#" class="view-all"><i class="icon-arrow"></i> View all upcoming events & latest news</a>
                </div>
            </div>
        </section>
    </main>

@endsection

