@extends('layout')
@section('title', 'Pages Edit')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>{{ $page->title()}}</h3>

        <a href="{{ route('pages-index') }}" class="btn btn-sm btn-primary">
            View All Pages
        </a>
    </div>

    <pages-edit :page="{{ $page }} "></pages-edit>

@endsection

