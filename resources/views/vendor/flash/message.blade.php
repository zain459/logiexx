@foreach (session('flash_notification', collect())->toArray() as $message)
    @if ($message['overlay'])
        @include('flash::modal', [
            'modalClass' => 'flash-modal',
            'title'      => $message['title'],
            'body'       => $message['message']
        ])
    @else
        <div class="alert alert-dismissible fade show
                    alert-{{ $message['level'] }}
                    {{ $message['important'] ? 'alert-important' : '' }}"
                    role="alert"
        >
            @if ($message['important'])
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            @endif

            <div class="alert-message">{!! $message['message'] !!}</div>
        </div>
    @endif
@endforeach

{{ session()->forget('flash_notification') }}
