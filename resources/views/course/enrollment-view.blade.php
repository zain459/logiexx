@extends('layout')
@section('title', 'Enrollment')
@section('content')
    <div class="container">
        <div class="team-single">
            <div class="row">
                <div class="col-lg-4 col-md-5 xs-margin-30px-bottom">
                    <div class="team-single-img">
                        <img src="{{asset('storage/'.$enrollment->file())}}" alt="">
                    </div>
                    <div>
                        <p>{{$enrollment->fileName()}}</p>
                    </div>
                </div>

                <div class="col-lg-8 col-md-7">
                    <div class="team-single-text padding-50px-left sm-no-padding-left">
                        <h4 class="font-size38 sm-font-size32 xs-font-size30">Description</h4>
                        <p class="no-margin-bottom">
                            {{$enrollment->description()}}.</p>
                        <div class="contact-info-section margin-40px-tb">
                            <h4 class="font-size38 sm-font-size32 xs-font-size30">Personal Information</h4>
                            <ul class="list-style9 no-margin">
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">Course:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->class->course->title()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">fee Type:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->class->course->feeType()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">First Name:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->firstName()}}</p>
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
                                            <p>{{$enrollment->lastName()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">middle Name:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->middleName()}}</p>
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
                                            <p>{{$enrollment->lastName()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">degree:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->degree()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">degree:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->telephone()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-envelope text-pink"></i>
                                            <strong
                                                class="margin-10px-left xs-margin-four-left text-pink">Email:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p><a href="javascript:void(0)">{{$enrollment->email()}}</a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">Address:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->personalAddress()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">City:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->personalCity()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">Post Code:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->personalPostCode()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">Province:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->province()}}</p>
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
                                            <p>{{$enrollment->personalCountry()}}</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h4 class="font-size38 sm-font-size32 xs-font-size30">Institution Related Information</h4>
                            <ul>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">Employment Status:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->employmentStatus()->name()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">Position:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->position()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">Department:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->department()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">Institution:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->institution()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">Address:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->institutionAddress()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">City:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->institutionCity()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">Post Code:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->institutionPostCode()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">Province/State:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->provinceState()}}</p>
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
                                            <p>{{$enrollment->institutionCountry()}}</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-5 col-5">
                                            <i class="fas fa-graduation-cap text-orange"></i>
                                            <strong class="margin-10px-left text-orange">Verifiable Certificate:</strong>
                                        </div>
                                        <div class="col-md-7 col-7">
                                            <p>{{$enrollment->verifiableCertificate()}}</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-4">
                        <form action="{{route('course.enrollment-status-store',$enrollment->id())}}" method="post">
                            @csrf
                            <label class="switch">
                                <label>status</label>
                                <input type="checkbox" name="status" value="1">
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
@endsection
