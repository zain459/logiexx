@extends('layout')
@section('title', 'corporate-partnership-view')
@section('content')
    <div class="container">
        <div class="team-single">
            <div class="row">
{{--                <div class="col-lg-2 col-md-5 xs-margin-30px-bottom">--}}
{{--                    <div class="team-single-img">--}}
{{--                        <img src="{{asset('storage/'.$corporatePartnership->file())}}" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-lg-10 col-md-9">
                    <div class="team-single-text padding-50px-left sm-no-padding-left">
                        <div class="contact-info-section margin-40px-tb">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box">
                                        <h4 class="font-size38 sm-font-size32 xs-font-size30">
                                            <span>Personal Information</span></h4>
                                        <ul class="list-style9 no-margin list-unstyled">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">First
                                                            Name:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$corporatePartnership->firstName()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Last Name:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$corporatePartnership->lastName()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Work Email:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>
                                                            <a href="javascript:void(0)">{{$corporatePartnership->workEmail()}}</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Company Name:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$corporatePartnership->companyName()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Phone Number:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$corporatePartnership->phoneNumber()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Job Title:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$corporatePartnership->jobTitle()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Teaching Interest:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$corporatePartnership->teachingInterest()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-envelope text-pink"></i>
                                                        <strong
                                                            class="margin-10px-left xs-margin-four-left text-pink">Description:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$corporatePartnership->description()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Company Size:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$corporatePartnership->companySize()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Contact On Behalf Of:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$corporatePartnership->contactOnBehalfOf()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Company Type:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$corporatePartnership->companyType()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Expected Learners:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$corporatePartnership->expectedLearners()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Country:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$corporatePartnership->country()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




{{--    <div class="container">--}}
{{--        <div class="team-single">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-8 col-md-7">--}}
{{--                    <div class="team-single-text padding-50px-left sm-no-padding-left">--}}
{{--                        <div class="contact-info-section margin-40px-tb">--}}
{{--                            <h4 class="font-size38 sm-font-size32 xs-font-size30">Personal Information</h4>--}}
{{--                            <ul class="list-style9 no-margin">--}}
{{--                                <li>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-5 col-5">--}}
{{--                                            <i class="fas fa-graduation-cap text-orange"></i>--}}
{{--                                            <strong class="margin-10px-left text-orange">First Name:</strong>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7 col-7">--}}
{{--                                            <p>{{$corporatePartnership->firstName()}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-5 col-5">--}}
{{--                                            <i class="fas fa-graduation-cap text-orange"></i>--}}
{{--                                            <strong class="margin-10px-left text-orange">Last Name:</strong>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7 col-7">--}}
{{--                                            <p>{{$corporatePartnership->lastName()}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-5 col-5">--}}
{{--                                            <i class="fas fa-envelope text-pink"></i>--}}
{{--                                            <strong--}}
{{--                                                class="margin-10px-left xs-margin-four-left text-pink">Email:</strong>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7 col-7">--}}
{{--                                            <p><a href="javascript:void(0)">{{$corporatePartnership->workEmail()}}</a>--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-5 col-5">--}}
{{--                                            <i class="fas fa-graduation-cap text-orange"></i>--}}
{{--                                            <strong class="margin-10px-left text-orange">Company Name:</strong>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7 col-7">--}}
{{--                                            <p>{{$corporatePartnership->companyName()}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-5 col-5">--}}
{{--                                            <i class="fas fa-graduation-cap text-orange"></i>--}}
{{--                                            <strong class="margin-10px-left text-orange">Phone Number:</strong>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7 col-7">--}}
{{--                                            <p>{{$corporatePartnership->phoneNumber()}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-5 col-5">--}}
{{--                                            <i class="fas fa-graduation-cap text-orange"></i>--}}
{{--                                            <strong class="margin-10px-left text-orange">Job Title:</strong>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7 col-7">--}}
{{--                                            <p>{{$corporatePartnership->jobTitle()}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-5 col-5">--}}
{{--                                            <i class="fas fa-graduation-cap text-orange"></i>--}}
{{--                                            <strong class="margin-10px-left text-orange">Teaching Interest:</strong>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7 col-7">--}}
{{--                                            <p>{{$corporatePartnership->teachingInterest()}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-5 col-5">--}}
{{--                                            <i class="fas fa-graduation-cap text-orange"></i>--}}
{{--                                            <strong class="margin-10px-left text-orange">Description:</strong>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7 col-7">--}}
{{--                                            <p>{{$corporatePartnership->description()}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-5 col-5">--}}
{{--                                            <i class="fas fa-graduation-cap text-orange"></i>--}}
{{--                                            <strong class="margin-10px-left text-orange">Company Size:</strong>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7 col-7">--}}
{{--                                            <p>{{$corporatePartnership->companySize()}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-5 col-5">--}}
{{--                                            <i class="fas fa-graduation-cap text-orange"></i>--}}
{{--                                            <strong class="margin-10px-left text-orange">Contact On Behalf Of:</strong>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7 col-7">--}}
{{--                                            <p>{{$corporatePartnership->contactOnBehalfOf()}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-5 col-5">--}}
{{--                                            <i class="fas fa-graduation-cap text-orange"></i>--}}
{{--                                            <strong class="margin-10px-left text-orange">Company Type:</strong>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7 col-7">--}}
{{--                                            <p>{{$corporatePartnership->companyType()}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-5 col-5">--}}
{{--                                            <i class="fas fa-graduation-cap text-orange"></i>--}}
{{--                                            <strong class="margin-10px-left text-orange">Expected Learners:</strong>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7 col-7">--}}
{{--                                            <p>{{$corporatePartnership->expectedLearners()}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-md-5 col-5">--}}
{{--                                            <i class="fas fa-graduation-cap text-orange"></i>--}}
{{--                                            <strong class="margin-10px-left text-orange">Country:</strong>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7 col-7">--}}
{{--                                            <p>{{$corporatePartnership->country()}}</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
