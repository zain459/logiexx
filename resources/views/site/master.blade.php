<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <title>@yield('title') | Logixs Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
          integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    {{--    <link rel="stylesheet" href="css/all.css">--}}
    <link href="{{ mix('css/site.css') }}" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <div class="wrap">
        <header id="header" class="header">
            <div class="container">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="{{route('site.index')}}"><img src="{{asset('images/logo.png')}}"
                                                                                alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="http://logixs.org/">About Logixs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('site.course-index')}}">Search</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('site.certificate-authentication.index')}}"> Verify
                                    Certificate</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> My Account </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        @if(Route::currentRouteName() === 'site.event-show')
            <div class="title-section">
                <div class="container">
                    <h1>Events</h1>
                </div>
            </div>
        @elseif(Route::currentRouteName() === 'site.news-show')
            <div class="title-section">
                <div class="container">
                    <h1>News</h1>
                </div>
            </div>
        @else
        <div class="title-section">
            <div class="container">
                <div class="inner-menu">
                    <a href="{{route('site.course-index')}}" class="btn-link"><span
                            class="button">Browse Our Courses</span></a>
                    <a href="#" class="btn-link btn-opener open"><span class="opener"><span>&nbsp;</span></span></a>
                </div>
                @if(Route::currentRouteName() === 'site.course-detail')
                <a href="{{route('site.class-calendar.index', $specific->id())}}" class="btn btn-primary btn-enroll">Class
                    Calendar
                    <i class="icon-link ms-3 align-items-center"></i></a>
                @endif
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
                <h1>@yield('banner-title')</h1>
                @if(Route::currentRouteName() === 'site.course-index')
                    <div class="filtermenu-bar">
                        <a href="#" class="opener">Select Filters</a>
                        <form action="{{route('site.course-index')}}" id="filtersForm">
                            <ul class="filter-menu">
                                <li><a href="">Subject Field</a>
                                    <ul>
                                        @foreach($subjectFields as $subjectArea)
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
                @endif
            </div>
        </div>
        @endif
    </div>
    <div class="">
        @yield('content')
    </div>
    <div class="alertbar">
        <div class="container d-flex flex-column flex-md-row justify-content-md-center">
            <label class="align-self-md-center">Get updates on new courses.</label>
            <form method="post" action="{{route('site.mailing-list.store')}}"
                  class="d-flex justify-content-md-center"
                  id="myForm">
                @csrf
                <input type="email" name="email" class="form-control" placeholder="Email address" required>
                <button class="btn-modal" type="submit"><span class="icon-ring"></span></button>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-center flex-column">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                         id="Capa_1" x="0px" y="0px" viewBox="0 0 50 50"
                         style="enable-background:new 0 0 50 50; width: 60px; height: 60px; margin-bottom: 10px;"
                         xml:space="preserve">
                            <circle style="fill:#25AE88;" cx="25" cy="25" r="25"/>
                        <polyline
                            style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                            points="  38,15 22,33 12,25 "/>
                    </svg>
                    <h4 class="modal-title text-center">Success!</h4>
                    <p class="text-center">You are now on our mailing list. We promise not to abuse it.</p>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="button" class="btn btn-primary btn-sm btncls">Got It</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <footer id="footer">
        <div class="container">
            <div class="row justify-content-md-between justify-content-center">
                <div class="col-12 col-md-auto">
                    <div class="d-md-flex">
                        <div class="logo"><a href="#"><img src="{{asset('images/f-logo.png')}}" alt=""></a></div>
                        <div class="text">
                            <p>© 2021 Logixs International (Pvt) Limited</p>
                            <p>Cookies are used by this site. <a href="#">Cookie Settings</a></p>
                            <p>
                                <a href="#" class="me-md-4 mx-2 mx-md-0">Terms & Conditions</a>
                                <a href="#" class="me-md-4 mx-2 mx-md-0">Privacy Policy</a>
                                <a href="#" class="me-md-4 mx-2 mx-md-0">Cookie Notice</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-auto">
                    <h5>Follow Us On</h5>
                    <ul class="social-media d-flex justify-content-center justify-content-md-end">
                        <li><a href="https://www.linkedin.com/login" target="_blank"><i class="icon-linkedin"><span
                                        class="d-none">linkedin</span></i></a></li>
                        <li><a href="https://www.youtube.com/" target="_blank"><i class="icon-youtube"><span
                                        class="d-none">youtube</span></i></a></li>
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="icon-facebook"><span
                                        class="d-none">facebook</span></i></a></li>
                        <li><a href="https://www.instagram.com/?hl=en" target="_blank"><i
                                    class="icon-instagram"><span
                                        class="d-none">instagram</span></i></a>
                        </li>
                        <li><a href="https://twitter.com/i/flow/login" target="_blank"><i class="icon-twitter"><span
                                        class="d-none">twitter</span></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.main.js"></script>
<script src="js/multi-animated-counter.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="/js/site.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    AOS.init({once: true});
</script>
<script type='text/javascript'>
    // import {preventOverflow} from "@popperjs/core";

    $(document).ready(function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

    });

    $('#myForm').on('submit', function (e) {
        $('#myModal').modal('show');
        $(this).parents(".alertbar").hide();
        // e.preventDefault();
    });

    $('.btncls').on('click', function (e) {
        $('#myModal').modal('hide');
        e.preventDefault();
    });

    // $('. btn-modal').on('click', function (e) {
    //     $('#myModal').modal('show');
    //     e.preventDefault();
    // });

</script>
</body>
</html>


