@extends('layout')
@section('title', 'Create Pages')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Add Pages</h3>

        <a href="{{ route('pages-index') }}" class="btn btn-sm btn-primary">
            View All Pages
        </a>
    </div>

    <pages-form></pages-form>

@endsection

