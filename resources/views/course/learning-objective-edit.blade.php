@extends('layout')
@section('title', 'Other-Details Edit')
@section('content')

    <x-course-navbar :course="$courseLearningObjective->course" />
    <edit-course-unit-component :course-learning-objective="{{$courseLearningObjective}}"></edit-course-unit-component>

@endsection

