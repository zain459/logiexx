@extends('layout')
@section('title', 'Inventory')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="list-group">
                <div class="list-group-item list-group-item-action bg-light fw-bold" aria-current="true">
                    Configurations
                </div>
                <a href="{{route('inventory.category-index')}}" class="list-group-item list-group-item-action">Categories</a>
                <a href="{{ route('inventory.subject-index') }}" class="list-group-item list-group-item-action">Subject Area </a>

            </div>
        </div>

    </div>
@endsection
