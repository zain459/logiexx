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
        @foreach($pastWebinars as $pastWebinar)
            @if($pastWebinar != null)
                <section class="block series-block bdb">
                    <div class="container pb-4 mb-5">
                        <h2>Past Webinars</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="video-box">
                                    <h3>Video</h3>
                                    <div class="video"><a href="{{$pastWebinar->link()}}"><img
                                                src="{{'/storage/'.$pastWebinar->image()}}" alt=""></a></div>
                                </div>
                                <div class="d-flex justify-content-between py-2">
                                    <a href="{{route('site.webinar-pdf-download', $pastWebinar->id())}}"
                                       class="btnlink">Download PDF Flyer</a>
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
                                    <dd>{{$pastWebinar->focalPerson()}} <a href="#" class="mx-1"><i
                                                class="icon-phone"></i></a>
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
                    </div>
                </section>
            @endif
        @endforeach
        @if($pastWebinars != null)
            <div class="pagination d-flex justify-content-center align-items-center">
                {!! $pastWebinars->links() !!}
            </div>
        @endif
    </main>
@endsection
