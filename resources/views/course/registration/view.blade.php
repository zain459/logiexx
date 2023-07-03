@extends('layout')
@section('title', 'Registration-view')
@section('content')
    <div class="container">
        <div class="team-single">
            <div class="row">
                <div class="col-lg-2 col-md-5 xs-margin-30px-bottom">
                    <div class="team-single-img">
                        <img class="enrollment-image" src="{{asset('/storage/'.$registration->file())}}" alt="">
                    </div>
                </div>
                <div class="col-lg-10 col-md-9">
                    <div class="team-single-text padding-50px-left sm-no-padding-left">
                        <div class="contact-info-section margin-40px-tb">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box">
                                        <h4 class="font-size38 sm-font-size32 xs-font-size30">
                                            <span>1. Personal Information</span></h4>
                                        <ul class="list-style9 no-margin list-unstyled">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Full Name:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->fullName() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Father/Husband Name
                                                            :</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->fatherHusbandName() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Date of
                                                            Birth:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->dateOfBirth() ?? '---'}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Gender:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->gender() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Marital
                                                            Status:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->maritalStatus() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">National Identity
                                                            Card No.:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->cnic() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Passport
                                                            No:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->passportNo() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Religion:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->religion() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong
                                                            class="margin-10px-left text-orange">Nationality:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->nationality() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-envelope text-pink"></i>
                                                        <strong
                                                            class="margin-10px-left xs-margin-four-left text-pink">Blood
                                                            Group:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->bloodGroup()?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Preferred Learning
                                                            Method:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->preferredLearningMethod() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box">
                                        <h4 class="font-size38 sm-font-size32 xs-font-size30"><span>2. Correspondence Information</span>
                                        </h4>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Residential
                                                            Address:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->preferredLearningMethod() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Postal
                                                            Code:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->postalCode() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong
                                                            class="margin-10px-left text-orange">City:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->city() ?? '---' }}</p>
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
                                                        <p>{{ $registration->country() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Telephone:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->telephone() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                            $code = $registration->code();
                                            $pattern = "/\+(\d+)/";
                                            preg_match($pattern, $code, $matches);
                                            $extractedCode = !empty($matches) ? $matches[0] : '';
                                            ?>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">phone:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $extractedCode . ' ' . $registration->phone() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Personal
                                                            Email:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->personalEmail() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    {{--                                    <div class="box">--}}
                                    {{--                                        <h4 class="font-size38 sm-font-size32 xs-font-size30"><span>Description</span>--}}
                                    {{--                                        </h4>--}}
                                    {{--                                        <p class="no-margin-bottom">--}}
                                    {{--                                            {{$enrollment->description()}}.</p>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="mt-4">--}}
                                    {{--                                        <form action="{{route('course.enrollment-status-store',$enrollment->id())}}"--}}
                                    {{--                                              method="post">--}}
                                    {{--                                            @csrf--}}
                                    {{--                                            <div class="d-flex justify-content-between align-items-center">--}}
                                    {{--                                                <label class="switch">--}}
                                    {{--                                                    <span>status</span>--}}
                                    {{--                                                    <input type="checkbox" name="status"--}}
                                    {{--                                                           value="1" {{$enrollment->status() == 1 ? 'checked': ''}}>--}}
                                    {{--                                                    <span class="slider round"></span>--}}
                                    {{--                                                </label>--}}
                                    {{--                                                <div>--}}
                                    {{--                                                    <button type="submit" class="btn btn-primary">Submit</button>--}}
                                    {{--                                                </div>--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </form>--}}
                                    {{--                                    </div>--}}
                                    {{--                                </div>--}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box">
                                        <h4 class="font-size38 sm-font-size32 xs-font-size30">
                                            <span>3. Education and Employment Information</span></h4>
                                        <ul class="list-style9 no-margin list-unstyled">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Educational
                                                            Qualification (e.g., BS, MBBS, BDS, etc.):</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->educationalQualification() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Employment Status
                                                            :</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->employmentStatus() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Business
                                                            Type/Designation if self-employed/employed</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->businessTypeDesignation() ?? '---'}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Business
                                                            Name:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->businessName() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Official
                                                            Address:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->officialAddress() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Official
                                                            Telephone:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->officialTelephone() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Institutional
                                                            Email:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->institutionalEmail() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box">
                                        <h4 class="font-size38 sm-font-size32 xs-font-size30">
                                            <span>4. Type of Activity</span>
                                        </h4>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Type:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->activityType() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Activity
                                                            Title:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->activityTitle() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box">
                                        <h4 class="font-size38 sm-font-size32 xs-font-size30">
                                            <span>5. Fee Information</span></h4>
                                        <ul class="list-style9 no-margin list-unstyled">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Is this a paid
                                                            course:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->isPaid() == 0 ? 'No' : 'Yes' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Course Fee (PKR)
                                                            :</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->courseFee() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Taxes (if
                                                            applicable)</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->courseTax() ?? '---'}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box">
                                        <h4 class="font-size38 sm-font-size32 xs-font-size30"><span>6. Sponsor Information (Leave blank if the course is free)</span>
                                        </h4>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Sponsor
                                                            Name:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->sponsorName() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Contact
                                                            Person:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->contactPerson() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Mobile No:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->sponsorMobile() ?? '---' }}</p>
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
                                                        <p>{{ $registration->sponsorEmail() ?? '---' }}</p>
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
                                                        <p>{{ $registration->sponsorAddress() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box">
                                        <h4 class="font-size38 sm-font-size32 xs-font-size30">
                                            <span>7. Certificate Information (for free courses only)</span></h4>
                                        <ul class="list-style9 no-margin list-unstyled">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Iif you are attend
                                                            a free course and would like to obtain a verifiable
                                                            certificate, a nominal fee will be charged:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->certificateNominalFee() ?? '---'}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">ICertificate Charges (PKR):</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->certificateCharge() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box">
                                        <h4 class="font-size38 sm-font-size32 xs-font-size30"><span>8. Emergency Contact Information</span>
                                        </h4>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">
                                                            Name:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->emergencyName() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Relationship:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->emergencyRelationship() ?? '---' }}</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Mobile No:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{ $registration->emergencyMobileNo() ?? '---' }}</p>
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
    </div>
    </div>
@endsection
