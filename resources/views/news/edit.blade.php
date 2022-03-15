@extends('layout')
@section('title', 'News Edit')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>{{ $news->title}}</h3>

        <a href="{{ route('news-index') }}" class="btn btn-sm btn-primary">
            View All News
        </a>
    </div>

    <news-edit :news="{{ $news }} "></news-edit>

@endsection

