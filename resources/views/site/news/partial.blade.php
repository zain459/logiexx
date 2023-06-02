<div class="container my-3">
    <div class="row">
        <div class="col-md-12">
            @if (null !== $news->image())
                <div class="mb-4 news-featured-image-holder-show-page">
                    <img src="{{ $news->image() }}" class="figure-img img-fluid" />
                </div>
            @endif
            <h2 class="dashed-title">{{ $news->title() }}</h2>
            <p class="mb-1 fs-14px line-clamp-1">{{ strip_tags($news->shortDescription()) }}</p>
            <p class="mb-1 fs-14px line-clamp-1">{{ strip_tags($news->longDescription()) }}</p>
            <div class="fs-14px text-muted mt-3">
                <div class="mb-1 fs-14px text-muted"> {{ 'Date: ' . DateTime::createFromFormat('Y-m-d', $news->postedDate())->format('F d, Y') }}</div>
            </div>
        </div>
    </div>
</div>
