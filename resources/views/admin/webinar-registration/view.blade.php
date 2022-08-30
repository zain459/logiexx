@extends('layout')
@section('title', 'Webinar Registration View')
@section('content')
    <div class="container">
        <div class="team-single">
            <div class="row">
                <div class="col-lg-2 col-md-5 xs-margin-30px-bottom">
                    <div class="team-single-img">
                        <img src="{{asset('storage/'.$webinarRegistration->file())}}" alt="">
                    </div>

                </div>
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
                                                        <p>{{$webinarRegistration->firstName()}}</p>
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
                                                        <p>{{$webinarRegistration->lastName()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Work
                                                            Email:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>
                                                            <a href="javascript:void(0)">{{$webinarRegistration->workEmail()}}</a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Phone
                                                            Number:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$webinarRegistration->phoneNumber()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Organization
                                                            Name:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$webinarRegistration->organizationName()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Occupation
                                                            Type:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$webinarRegistration->occupationType()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Subject
                                                            Area:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$webinarRegistration->subjectArea()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Hear About
                                                            Webinar:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$webinarRegistration->hearAboutWebinar()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Verifiable
                                                            Certificate:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$webinarRegistration->verifiableCertificate()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong
                                                            class="margin-10px-left text-orange">Description:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$webinarRegistration->description()}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mt-4">
                                        <form
                                            action="{{route('admin.webinar-registration-status.store',$webinarRegistration->id())}}"
                                            method="post">
                                            @csrf
                                            <label class="switch">
                                                <label>status</label>
                                                <input type="checkbox" name="status"
                                                       value="Approved" {{($webinarRegistration->status() == 'Approved'? 'checked': "")}}>
                                                <span class="slider round"></span>
                                            </label>
                                            <div>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
