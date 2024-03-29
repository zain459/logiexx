@extends('site.master')
@section('banner-title', 'Certificate Authentication')
@section('title', 'Certificate Authentication')
@section('content')
    <main id="main">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Logixs Academy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Certificate Authentication</li>
                </ol>
            </nav>
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
        <div class="verify-certificate">
            <div class="head">
                <h3>Verify Certificate</h3>
            </div>
            <div class="body">
                <form action="{{route('site.certificate-authentication-verification')}}" method="post">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="certificate_serial_number"
                               id="certificate_serial_number" placeholder="Serial Number" required>
                        <label for="floatingInput">Certificate Serial Number</label>
                    </div>
                    <div class="d-flex justify-content-center pt-3">
                        <button type="submit" class="btn btn-primary">Verify</button>
                    </div>
                    <span class="d-block text-dark">Enter ‘Name’ and ‘Certificate Serial Number’ as appear on certificate.</span>
                    <div class="form-bottom">
                        <p>This page is designed to provide a means to verify the authenticity of a student's
                            Certificate of Completion for any courses completed. </p>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
