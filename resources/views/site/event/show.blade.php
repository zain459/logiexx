@extends('site.master')
@section('title', 'Events')
@section('content')


    <div class="border-dark border-top mb-4">
        <div class="container">
            <nav class="pt-4 mb-4 pb-2" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Events</li>
                </ol>
            </nav>
            <div class="container my-3">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="dashed-title mb-1">Events</h2>
                        <div class="">
                            @forelse ($events as $event)
                                <div class="py-4 py-lg-5 row align-items-center">
                                    <div class="col-lg-3 col-xl-2 news-image-col-width">
                                        <a href="">
                                            <div
                                                class="news-featured-image-holder d-flex justify-content-center align-items-center mb-3 mb-lg-0">
                                                @if (null !== $event->image())
                                                    <img src="{{ asset('storage/'. $event->image()) }}" class="figure-img img-fluid"
                                                         width="160" height="114" />
                                                @endif
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-9 col-xl-10">
                                        <a href="{{ $event->link() }}"
                                           class="fs-16px fw-bold font-georgia mb-1 fw-bold text-decoration-none text-primary">{{ $event->title() }}</a>
                                        <p class="mb-1 fs-14px line-clamp-1">{{ strip_tags($event->description()) }}</p>
                                        <div class="mb-1 fs-14px text-muted">{{ 'From: ' . $event->startDate()->format('F d, Y') . ' To: '. $event->endDate()->format('F d, Y') }}</div>
                                    </div>
                                </div>
                            @empty
                                <p class="my-3">No news available!</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
