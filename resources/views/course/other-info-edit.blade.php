@extends('layout')
@section('title', 'Other-Details Edit')
@section('content')

    <x-course-navbar :course="$courseInfo->course" />

    <edit-other-details-component :info="{{ $courseInfo }} "></edit-other-details-component>

@endsection
