@extends('site.master')

@section('title', 'Webinar Series')
@section('content')
    <div class="title-section">
        <div class="container">
            <div class="inner-menu">
                <a href="{{route('site.course-index')}}" class="btn-link"><span class="button">Browse Our Courses</span></a>
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
            <h1>Webinar Series</h1>
        </div>
    </div>
    <main id="main">
        <section class="block bdb">
            <div class="container pb-4 mb-5">
                <h2>Overview</h2>
                <p>Join Youth Outside, an organization committed to advancing racial equity and inclusion in the
                    outdoors, for this Logixs Academy webinar to discuss the importance of asking critical questions
                    related to race, equity, and inclusion as we envision programming that connects people to the
                    environment during these uncertain and evolving times. Join Youth Outside, an organization committed
                    to advancing racial equity and inclusion in the outdoors, for this Logixs Academy webinar to discuss
                    the importance of asking critical questions related to race, equity, and inclusion.</p>
            </div>
        </section>
        @if($upComingWebinar != null)
            <section class="block series-block bdb">
                <div class="container pb-4 mb-5">
                    <h2>Upcoming Webinars</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{'/storage/'.$upComingWebinar->image()}}" class="img-fluid w-100" alt="">
                            <div class="d-flex justify-content-between py-2">
                                <a href="{{route('site.webinar-pdf-download', $upComingWebinar->id())}}"
                                   class="btnlink">Download
                                    PDF Flyer</a>
                                <a href="webinar-form.php" class="btnlink">Click here to register <i class="icon-i"></i></a>
                            </div>
                            <div class="webinar-box">
                                <h3>Link to Join Webinar</h3>
                                <div class="d-lg-flex">
									<span class="barcode align-self-start">
										<img src="{{'/storage/'.$upComingWebinar->linkImage()}}" alt="">
									</span>
                                    <div class="text">
                                   <span class="d-block">Link: <a href=""
                                                                  style="text-decoration: none">{{$upComingWebinar->link()}}</a></span>
                                        <span class="d-block">Meeting Id: {{$upComingWebinar->meetingId()}}</span>
                                        <span class="d-block">Passcode: {{$upComingWebinar->passcode()}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3>{{$upComingWebinar->title()}}</h3>
                            <p>{{$upComingWebinar->shortDescription()}}</p>
                            <dl>
                                <dt>Speakers</dt>
                                <dd>{{$upComingWebinar->speaker()}}</dd>
                                <dt>Moderator</dt>
                                <dd>{{$upComingWebinar->moderator()}}</dd>
                                <dt>Organization(s)</dt>
                                <dd>{{$upComingWebinar->organization()}}</dd>
                                <dt>Sponsors</dt>
                                <dd>{{$upComingWebinar->sponsor()}}</dd>
                                <dt>Focal Person</dt>
                                <dd>{{$upComingWebinar->focalPerson()}} <a href="#" class="mx-1"><i
                                            class="icon-phone"></i></a>
                                    <a href="#"
                                       class="mx-1"><i
                                            class="icon-email"></i></a></dd>
                                <dt class="date-time">Start Date & End Date</dt>
                                <dd class="date-time">{{\Carbon\Carbon::parse($upComingWebinar->startDate())->format('F j, Y H:i:s') . ' ' . \Carbon\Carbon::parse($upComingWebinar->endDate())->format('F j, Y H:i:s')}}</dd>
                            </dl>
                            <div class="d-flex justify-content-end record-data">
                                <span>1189 Registrations <i class="icon-registration"></i></span>
                                <span>23 Interested <i class="icon-interest"></i></span>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('site.view-all-upcoming-webinar-series')}}" class="view-all"><i
                            class="icon-arrow"></i> View all Upcoming
                        webinars</a>
                </div>
            </section>
        @endif
        @if($pastWebinar != null)
            <section class="block series-block">
                <div class="container">
                    <h2>Past Webinars</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="video-box">
                                <h3>Video</h3>
                                <div class="video"><a href="{{$pastWebinar->link()}}"><img
                                            src="{{'/storage/'.$pastWebinar->image()}}" alt=""></a></div>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <a href="{{route('site.webinar-pdf-download', $pastWebinar->id())}}" class="btnlink">Download
                                    PDF Flyer</a>
                                <a href="#" class="btnlink">Click here to watch <i class="icon-i"></i></a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h3>{{$pastWebinar->title()}}</h3>
                            <p>{{$pastWebinar->shortDescription()}}</p>
                            <dl>
                                <dt>Speakers</dt>
                                <dd>{{$pastWebinar->speaker()}}</dd>
                                <dt>Moderator</dt>
                                <dd>{{$pastWebinar->moderator()}}</dd>
                                <dt>Organization(s)</dt>
                                <dd>{{$pastWebinar->organization()}}</dd>
                                <dt>Sponsors</dt>
                                <dd>{{$pastWebinar->sponsor()}}</dd>
                                <dt>Focal Person</dt>
                                <dd>{{$pastWebinar->focalPerson()}} <a href="#" class="mx-1"><i class="icon-phone"></i></a>
                                    <a href="#"
                                       class="mx-1"><i
                                            class="icon-email"></i></a></dd>
                                <dt class="date-time">Start Date & End Date</dt>
                                <dd class="date-time">{{\Carbon\Carbon::parse($pastWebinar->startDate())->format('F j, Y H:i:s') . ' ' . \Carbon\Carbon::parse($pastWebinar->endDate())->format('F j, Y H:i:s')}}</dd>
                            </dl>
                            <div class="d-flex justify-content-end record-data">
                                <span>1189 Registrations <i class="icon-registration"></i></span>
                                <span>23 Interested <i class="icon-interest"></i></span>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('site.view-all-past-webinar-series')}}" class="view-all"><i class="icon-arrow"></i>
                        View all Past
                        webinars</a>
                </div>
            </section>
        @endif
    </main>
@endsection
