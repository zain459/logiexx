<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            @if (null !== $event->image())
                <div class="mb-4 news-featured-image-holder-show-page">
                    <img src="{{ asset('storage/'. $event->image()) }}" class="figure-img img-fluid" />
                </div>
            @endif
            <h2 class="dashed-title">{{ $event->title() }}</h2>
                <p class="mb-1 fs-14px line-clamp-1">{{ strip_tags($event->description()) }}</p>
            <div class="fs-14px text-muted mt-3">
                <div class="mb-1 fs-14px text-muted">{{ 'From: ' . $event->startDate()->format('F d, Y') . ' To: '. $event->endDate()->format('F d, Y') }}</div>
            </div>
        </div>
    </div>
</div>
