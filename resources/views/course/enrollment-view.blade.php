@extends('layout')
@section('title', 'Enrollment')
@section('content')
    <div class="container">
        <div class="team-single">
            <div class="row">
                <div class="col-lg-2 col-md-5 xs-margin-30px-bottom">
                    <div class="team-single-img">
                        <img class="enrollment-image" src="{{asset('storage/'.$enrollment->file())}}" alt="">
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
                                                        <strong class="margin-10px-left text-orange">Class
                                                            Name:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$enrollment->class->title()}}</p>
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
                                                        <strong class="margin-10px-left text-orange">First
                                                            Name:</strong>
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
                                                        <strong class="margin-10px-left text-orange">middle
                                                            Name:</strong>
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
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box">
                                        <h4 class="font-size38 sm-font-size32 xs-font-size30"><span>Institution Related Information</span>
                                        </h4>
                                        <ul class="list-unstyled">
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-5 col-5">
                                                        <i class="fas fa-graduation-cap text-orange"></i>
                                                        <strong class="margin-10px-left text-orange">Employment
                                                            Status:</strong>
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
                                                        <strong
                                                            class="margin-10px-left text-orange">Department:</strong>
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
                                                        <strong
                                                            class="margin-10px-left text-orange">Institution:</strong>
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
                                                        <strong
                                                            class="margin-10px-left text-orange">Province/State:</strong>
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
                                                        <strong class="margin-10px-left text-orange">Verifiable
                                                            Certificate:</strong>
                                                    </div>
                                                    <div class="col-md-7 col-7">
                                                        <p>{{$enrollment->verifiableCertificate() ? 'Yes':'No'}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="box">
                                        <h4 class="font-size38 sm-font-size32 xs-font-size30"><span>Description</span>
                                        </h4>
                                        <p class="no-margin-bottom">
                                            {{$enrollment->description()}}.</p>
                                    </div>
                                    <div class="mt-4">
                                        <form action="{{route('course.enrollment-status-store',$enrollment->id())}}"
                                              method="post">
                                            @csrf
                                            <div class="d-flex justify-content-between align-items-center">
                                                <label class="switch">
                                                    <span>status</span>
                                                    <input type="checkbox" name="status"
                                                           value="1" {{$enrollment->status() == 1 ? 'checked': ''}}>
                                                    <span class="slider round"></span>
                                                </label>
                                                <div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="createSubjectAreaModal" tabindex="-1" role="dialog"
                         aria-labelledby="createSubjectAreaModal"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">New Certificate</h5>
                                    </div>
                                    <div class="card-body">
                                        <form
                                            action="{{route('admin.verify-certificate.store', $enrollment->id())}}"
                                            method="post">
                                            @csrf
                                            <div class="mb-3 row">
                                                <label for="recipient-name"
                                                       class="col-form-label">Recipient:</label>
                                                <input type="text" class="form-control" name="name" id="name">
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="recipient-name" class="col-form-label">Certificate
                                                    Serial Number:</label>
                                                <input type="text" class="form-control" name="certificate"
                                                       id="certificate">
                                            </div>

                                            <div class="mb-3 row">
                                                <label for="recipient-name" class="col-form-label">Issue Date:</label>
                                                <input type="date" class="form-control" name="issue_date"
                                                       id="issue_date">
                                            </div>
                                            <input type="hidden" value="{{ $enrollment->id() }}"
                                                   name="enrollment_id"
                                                   required/>
                                            <input type="hidden" value="{{ $enrollment->class   ->courseId() }}"
                                                   name="course_id"
                                                   required/>
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
    @if($enrollment->status() == 1 && $enrollment->verifiableCertificate() != 1)
        <hr>
        <div class="mb-3 d-flex justify-content-between align-items-center">
            <h4>Certificate</h4>

            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#createSubjectAreaModal">
                Add Certificate
            </button>
        </div>
        <div class="card mt-4">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Certificate</th>
                    <th>Issue Date</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($verifyCertifications as $verifyCertification)
                    <tr>
                        <td>{{ $verifyCertification->name()}}</td>
                        <td>{{ $verifyCertification->verifyCertificate() }}</td>
                        <td>{{ $verifyCertification->issueDate() }}</td>
                        <td width="100">
                            <div class="d-flex">
                                <div class='d-flex align-items-center'>
                                    @include('admin.verify-certificate.edit', [
                                        'verifyCertification' => $verifyCertification
                                    ])
                                </div>
                                <form method="post"
                                      action="{{route('admin.verify-certificate.delete', $verifyCertification->id())}}">
                                    @csrf
                                    <button type="submit" class="btn text-danger"
                                            onclick="return confirm('Are you sure?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-trash align-middle text-danger">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="card mt-4">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Certificate</th>
                    <th>Issue Date</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($verifyCertifications as $verifyCertification)
                    <tr>
                        <td>{{ $verifyCertification->name() }}</td>
                        <td>{{ $verifyCertification->verifyCertificate() }}</td>
                        <td>{{ $verifyCertification->issueDate() }}</td>
                        <td width="100">
                            <div class="d-flex">
                                <div class='d-flex align-items-center'>
                                    @include('admin.verify-certificate.edit', [
                                        'verifyCertification' => $verifyCertification
                                    ])
                                </div>
                                <form method="post"
                                      action="{{route('admin.verify-certificate.delete', $verifyCertification->id())}}">
                                    @csrf
                                    <button type="submit" class="btn text-danger"
                                            onclick="return confirm('Are you sure?')">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                             stroke-linejoin="round" class="feather feather-trash align-middle text-danger">
                                            <polyline points="3 6 5 6 21 6"></polyline>
                                            <path
                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif

{{--    @if($enrollment->verifiableCertificate() == 1)--}}
{{--        <div class="card mt-4">--}}
{{--            <table class="table table-hover">--}}
{{--                <thead>--}}
{{--                <tr>--}}
{{--                    <th>Name</th>--}}
{{--                    <th>Certificate</th>--}}
{{--                    <th>Issue Date</th>--}}
{{--                    <th></th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                @foreach($verifyCertifications as $verifyCertification)--}}
{{--                    <tr>--}}
{{--                        <td>{{ $verifyCertification->name() }}</td>--}}
{{--                        <td>{{ $verifyCertification->verifyCertificate() }}</td>--}}
{{--                        <td>{{ $verifyCertification->issueDate() }}</td>--}}
{{--                        <td width="100">--}}
{{--                            <div class="d-flex">--}}
{{--                                <div class='d-flex align-items-center'>--}}
{{--                                    @include('admin.verify-certificate.edit', [--}}
{{--                                        'verifyCertification' => $verifyCertification--}}
{{--                                    ])--}}
{{--                                </div>--}}
{{--                                <form method="post"--}}
{{--                                      action="{{route('admin.verify-certificate.delete', $verifyCertification->id())}}">--}}
{{--                                    @csrf--}}
{{--                                    <button type="submit" class="btn text-danger"--}}
{{--                                            onclick="return confirm('Are you sure?')">--}}
{{--                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"--}}
{{--                                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
{{--                                             stroke-linejoin="round" class="feather feather-trash align-middle text-danger">--}}
{{--                                            <polyline points="3 6 5 6 21 6"></polyline>--}}
{{--                                            <path--}}
{{--                                                d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>--}}
{{--                                        </svg>--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                    </tr>--}}
{{--                @endforeach--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}
{{--    @endif--}}
@endsection
