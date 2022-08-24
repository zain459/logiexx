@extends('site.master')

@section('title', 'Webinar Series')
@section('content')
    <div class="title-section">
        <div class="container">
            <div class="inner-menu">
                <a href="courses.php" class="btn-link"><span class="button">Browse Our Courses</span></a>
                <a href="#" class="btn-link btn-opener open"><span class="opener"><span>&nbsp;</span></span></a>
            </div>
            <div class="fields-menu">
                <h2>Browse Our Subject Fields</h2>
                <ul>
                    @foreach($subjectFields as $subjectField)
                        @if($subjectField != null)
                            <li>
                                <a href="{{ route('site.course-index', ['subject_areas' => [$subjectField->id()]]) }}">{{$subjectField->name()}}</a>
                            </li>
                        @endif
                    @endforeach
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
        @foreach($upcomingWebinars as $upcomingWebinar)
            @if($upcomingWebinar != null)
                <section class="block series-block bdb">
                    <div class="container pb-4 mb-5">
                        <h2>Upcoming Webinars</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{'/storage/'.$upcomingWebinar->image()}}" class="img-fluid w-100" alt="">
                                <div class="d-flex justify-content-between py-2">
                                    <a href="{{route('site.webinar-pdf-download', $upcomingWebinar->id())}}"
                                       class="btnlink">Download
                                        PDF Flyer</a>
                                    <a href="webinar-form.php" class="btnlink">Click here to register <i
                                            class="icon-i"></i></a>
                                </div>
                                <div class="webinar-box">
                                    <h3>Link to Join Webinar</h3>
                                    <div class="d-lg-flex">
									<span class="barcode align-self-start">
										<img src="{{'/storage/'.$upcomingWebinar->linkImage()}}" alt="">
									</span>
                                        <div class="text">
                                   <span class="d-block">Link: <a href=""
                                                                  style="text-decoration: none">{{$upcomingWebinar->link()}}</a></span>
                                            <span class="d-block">Meeting Id: {{$upcomingWebinar->meetingId()}}</span>
                                            <span class="d-block">Passcode: {{$upcomingWebinar->passcode()}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h3>{{$upcomingWebinar->title()}}</h3>
                                <p>{{$upcomingWebinar->shortDescription()}}</p>
                                <dl>
                                    <dt>Speakers</dt>
                                    <dd>{{$upcomingWebinar->speaker()}}</dd>
                                    <dt>Moderator</dt>
                                    <dd>{{$upcomingWebinar->moderator()}}</dd>
                                    <dt>Organization(s)</dt>
                                    <dd>{{$upcomingWebinar->organization()}}</dd>
                                    <dt>Sponsors</dt>
                                    <dd>{{$upcomingWebinar->sponsor()}}</dd>
                                    <dt>Focal Person</dt>
                                    <dd>{{$upcomingWebinar->focalPerson()}} <a href="#" class="mx-1"><i
                                                class="icon-phone"></i></a>
                                        <a href="#"
                                           class="mx-1"><i
                                                class="icon-email"></i></a></dd>
                                    <dt class="date-time">Start Date & End Date</dt>
                                    <dd class="date-time">{{\Carbon\Carbon::parse($upcomingWebinar->startDate())->format('F j, Y H:i:s') . ' ' . \Carbon\Carbon::parse($upcomingWebinar->endDate())->format('F j, Y H:i:s')}}</dd>
                                </dl>
                                <div class="d-flex justify-content-end record-data">
                                    <span>1189 Registrations <i class="icon-registration"></i></span>
                                    <span>23 Interested <i class="icon-interest"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endif
        @endforeach
        @if($upcomingWebinars != null)
            <div class="pagination d-flex justify-content-center align-items-center">
                {!! $upcomingWebinars->links() !!}
            </div>
        @endif
    </main>
@endsection
