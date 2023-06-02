@extends('site.master')
@section('title', '')
@section('content')
    <div class="title-section">
        <div class="container">
            <h1>Events</h1>
        </div>
    </div>

    <div class="border-dark border-top mb-4">
        <div class="container">
            <nav class="pt-4 mb-4 pb-2" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events</li>
                </ol>
            </nav>
            @include('site.event.partial', ['event'=> $event])
        </div>
    </div>
@endsection
