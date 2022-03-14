@extends('layout')
@section('title', 'Create News')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Add News</h3>

        <a href="{{ route('news-index') }}" class="btn btn-sm btn-primary">
            View All News
        </a>
    </div>

    <news-form></news-form>

@endsection

