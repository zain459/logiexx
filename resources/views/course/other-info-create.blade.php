@extends('layout')
@section('title', 'Course Other-Details')
@section('content')

    <x-course-navbar :course="$course" />

    <other-details-component :course="{{ $course->id() }}"></other-details-component>


@endsection
