@extends('layout')
@section('title', 'become-an-instructor-view')
@section('content')
    <div class="container">
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
                                                <p>{{$becomeAnInstructor->firstName()}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="fas fa-graduation-cap text-orange"></i>
                                                <strong class="margin-10px-left text-orange">Middle Name:</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p>{{$becomeAnInstructor->middleName()}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="fas fa-graduation-cap text-orange"></i>
                                                <strong class="margin-10px-left text-orange">Last
                                                    Name:</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p>{{$becomeAnInstructor->lastName()}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="fas fa-graduation-cap text-orange"></i>
                                                <strong class="margin-10px-left text-orange">Degree:</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p>{{$becomeAnInstructor->degree()}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="fas fa-graduation-cap text-orange"></i>
                                                <strong class="margin-10px-left text-orange">Telephone :</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p>{{$becomeAnInstructor->telephone()}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="fas fa-graduation-cap text-orange"></i>
                                                <strong class="margin-10px-left text-orange">Email:</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p><a href="javascript:void(0)">{{$becomeAnInstructor->email()}}</a>
                                                </p>
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
                                                <p>{{$becomeAnInstructor->address()}}</p>
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
                                                <p>{{$becomeAnInstructor->city()}}</p>
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
                                                <p>{{$becomeAnInstructor->postCode()}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="fas fa-graduation-cap text-orange"></i>
                                                <strong
                                                    class="margin-10px-left text-orange">Province:</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p>{{$becomeAnInstructor->province()}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="fas fa-graduation-cap text-orange"></i>
                                                <strong
                                                    class="margin-10px-left text-orange">Country:</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p>{{$becomeAnInstructor->country()}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="fas fa-graduation-cap text-orange"></i>
                                                <strong
                                                    class="margin-10px-left text-orange">Teaching Interest:</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p>{{$becomeAnInstructor->teachingInterest()}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="fas fa-graduation-cap text-orange"></i>
                                                <strong
                                                    class="margin-10px-left text-orange">Subject Area:</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p>{{$becomeAnInstructor->subjectAreas()}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="fas fa-graduation-cap text-orange"></i>
                                                <strong
                                                    class="margin-10px-left text-orange">Tentative Course
                                                    Title:</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p>{{$becomeAnInstructor->tentativeCourseTitle()}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="fas fa-graduation-cap text-orange"></i>
                                                <strong
                                                    class="margin-10px-left text-orange">Available To Start
                                                    Work:</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p>{{$becomeAnInstructor->availableToStartWork()}}</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-md-5 col-5">
                                                <i class="fas fa-graduation-cap text-orange"></i>
                                                <strong
                                                    class="margin-10px-left text-orange">Date:</strong>
                                            </div>
                                            <div class="col-md-7 col-7">
                                                <p>{{$becomeAnInstructor->date()}}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="/storage/{{$becomeAnInstructor->file()}}" class="view-all" download=""><i
                                    class="fa fa-file-pdf-o" aria-hidden="true"></i> Download CV (PDF)</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
