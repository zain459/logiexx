@extends('layout')
@section('title', 'Course Learning-Objective')
@section('content')

    <x-course-navbar :course="$course" />

    <course-unit-create-component :course="{{ $course->id() }}"></course-unit-create-component>

@endsection
