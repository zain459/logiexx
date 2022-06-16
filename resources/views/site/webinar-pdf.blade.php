<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<section class="block series-block bdb">
    <div class="container pb-4 mb-5">
        <h2>L.A. Webinars Series</h2>
        <div class="row">
            <div class="col-md-4 pb-3 pb-lg-0">
                <img src="{{'storage/'.$webinars->image()}}" class="img-fluid w-100" alt="">
                <div class="webinar-box d-none d-md-block">
                    <h3>Link to Join Webinar</h3>
                    <div class="d-lg-flex">
                        <span class="barcode align-self-start">
                            <img src="{{'storage/'.$webinars->linkImage()}}" alt="">
                        </span>
                        <div class="text">
                            <span class="d-block">Link: <a href=""
                                                           style="text-decoration: none">{{$webinars->link()}}</a></span>
                            <span class="d-block">Meeting Id: {{$webinars->meetingId()}}</span>
                            <span class="d-block">Passcode: {{$webinars->passcode()}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h3>{{$webinars->title()}}</h3>
                <p>{{$webinars->shortDescription()}}</p>
                <dl>
                    <dt>Speakers</dt>
                    <dd>{{$webinars->speaker()}}</dd>
                    <dt>Moderator</dt>
                    <dd>{{$webinars->moderator()}}</dd>
                    <dt>Organization(s)</dt>
                    <dd>{{$webinars->organization()}}</dd>
                    <dt>Sponsors</dt>
                    <dd>{{$webinars->sponsor()}}</dd>
                    <dt>Focal Person</dt>
                    <dd>{{$webinars->focalPerson()}} <a href="#" class="mx-1"><i class="icon-phone"></i></a>
                        <a href="#"
                           class="mx-1"><i
                                class="icon-email"></i></a></dd>
                    <dt class="date-time">Start Date & End Date</dt>
                    <dd class="date-time">{{\Carbon\Carbon::parse($webinars->startDate())->format('F j, Y H:i:s') . ' ' . \Carbon\Carbon::parse($webinars->endDate())->format('F j, Y H:i:s')}}</dd>
                </dl>
                <div class="d-flex justify-content-end record-data">
                    <span>1189 Registrations <i class="icon-registration"></i></span>
                    <span>23 Interested <i class="icon-interest"></i></span>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
