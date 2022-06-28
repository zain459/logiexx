@extends('layout')
@section('title', 'Inventory')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <div class="list-group-item list-group-item-action bg-light fw-bold" aria-current="true">
                    Configurations
                </div>
                <a href="{{ route('admin.category.index') }}" class="list-group-item list-group-item-action">Categories</a>
                <a href="{{ route('admin.subject-area.index') }}" class="list-group-item list-group-item-action">Subject Area </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="list-group">
                <div class="list-group-item list-group-item-action bg-light fw-bold" aria-current="true">
                    Affiliated Partners
                </div>
                <a href="{{ route('admin.partner.index') }}" class="list-group-item list-group-item-action">Create New Partner</a>
                <a href="{{ route('admin.partner.index') }}" class="list-group-item list-group-item-action">View All Partners </a>

            </div>
        </div>

        <div class="col-md-4">
            <div class="list-group">
                <div class="list-group-item list-group-item-action bg-light fw-bold" aria-current="true">
                    Course Feature
                </div>
                <a href="{{ route('admin.featured-course.index') }}" class="list-group-item list-group-item-action">Featured Courses</a>
            </div>
        </div>
    </div>
@endsection
