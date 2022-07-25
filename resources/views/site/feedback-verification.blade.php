@extends('site.master')
@section('title', 'feedback-varification')
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
            <h1>Learner Feedback</h1>
        </div>
    </div>
    <div class="container p-0">
        @if ($errors->any())
            <div class="my-3 d-flex align-items-center text-uppercase alert alert-danger alert-message">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @include('flash::message')

        @yield('content')
    </div>
    <main id="main">
        <div class="feedback-block">
            <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="title-box">
                    <h2>Your Feedback Matters!</h2>
                    <span class="subheading">3 Easy Steps to Submit Response...</span>
                </div>
                <ul class="three-stepsnav">
                    <li title="1"><a href="#Verify">Verify</a></li>
                    <li title="2"><a href="#provide-feedback">Provide Feedback</a></li>
                    <li title="3"><a href="#Submit">Submit</a></li>
                </ul>
            </div>
        </div>
        <div class="block">
            <span id="Verify" class="scroll">scroll</span>
            <div class="container">
                <h2>Identity Verification of Alumna</h2>
                <div class="verify-certificate">
                    <div class="head">
                        <h3>Verify Certificate</h3>
                    </div>
                    <div class="body">
                        <form action="{{route('site.learner-feedback.verify', $course->id())}}"
                              method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                                <label for="floatingInput">Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="certificate_serial_number"
                                       placeholder="Serial Number" name="certificate_serial_number">
                                <label for="floatingInput">Certificate Serial Number</label>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-dark">Verify</button>
                            </div>
                            <span class="d-block text-dark">Enter ‘Name’ and ‘Certificate Serial Number’ as appear on certificate.</span>
                            <div class="form-bottom">
                                <p>This page is designed to provide a means to verify the authenticity of a
                                    student's
                                    Certificate of Completion for any courses completed. </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
