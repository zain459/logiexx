<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>@yield('title') | Logixs Academy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
{{--    <link rel="stylesheet" href="css/all.css">--}}
    <link href="{{ mix('css/site.css') }}" rel="stylesheet">
</head>
<body>
<div id="wrapper">
    <header id="header" class="header">
        <div class="container">
            <nav class="navbar navbar-expand-md">
                <a class="navbar-brand" href="index.php"><img src="{{asset('images/logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0" id="nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="http://logixs.org/">About Logixs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Search</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="certificate-authentication.php"> Verify Certificate</a>
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
   <div class="">
       @yield('content')
   </div>
    <div class="alertbar">
        <div class="container d-flex flex-column flex-md-row justify-content-md-center">
            <label class="align-self-md-center">Get updates on new courses.</label>
            <div class="d-flex justify-content-md-center">
                <input type="text" class="form-control" placeholder="Email address">
                <button type="submit"><span class="icon-ring"></span></button>
            </div>
        </div>
    </div>
    <footer id="footer">
        <div class="container">
            <div class="row justify-content-md-between justify-content-center">
                <div class="col-12 col-md-auto">
                    <div class="d-md-flex">
                        <div class="logo"><a href="#"><img src="{{asset('images/f-logo.png')}}" alt=""></a></div>
                        <div class="text">
                            <p>© 2021 Logixs International (Pvt) Limited</p>
                            <p>Cookies are used by this site. <a href="#">Cookie Settings</a></p>
                            <p><a href="#" class="me-md-4 mx-2 mx-md-0">Terms & Conditions</a><a href="#" class="me-md-4 mx-2 mx-md-0">Privacy Policy</a><a href="#" class="me-md-4 mx-2 mx-md-0">Cookie Notice</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-auto">
                    <h5>Follow Us On</h5>
                    <ul class="social-media d-flex justify-content-center justify-content-md-end">
                        <li><a href="#"><i class="icon-linkedin"><span class="d-none">linkedin</span></i></a></li>
                        <li><a href="#"><i class="icon-youtube"><span class="d-none">youtube</span></i></a></li>
                        <li><a href="#"><i class="icon-facebook"><span class="d-none">facebook</span></i></a></li>
                        <li><a href="#"><i class="icon-instagram"><span class="d-none">instagram</span></i></a></li>
                        <li><a href="#"><i class="icon-twitter"><span class="d-none">twitter</span></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- Optional JavaScript; choose one of the two! -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.main.js"></script>
<script src="js/multi-animated-counter.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="/js/site.js"></script>
<script>
    AOS.init({once: true});
</script>
<script type='text/javascript'>
    $(document).ready(function () {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })

    });
</script>
</body>
</html>


