@extends('layout')
@section('title', 'Testimonials')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Testimonials</h3>

        <a href="{{ route('testimonial-create') }}" class="btn btn-sm btn-primary">New Testimonial</a>
    </div>
    <div class="card mb-3">
        <div class="card-header d-flex flex-column flex-md-row md-align-items-center justify-content-between">
            <div class="title">Filters</div>
        </div>
        <div class="card-body">
            <form method="GET" action="{{route('testimonial-index')}}">
                <div class="row g-3 align-items-end">
                    <div class="col-md-4 form-group">
                        <label class="form-label">Key Word</label>
                        <input type="text" name="key" class="form-control" value="{{request()->get('key')}}">
                    </div>
                    <div class="col-md-4 form-group">
                        <button class="btn btn-primary" type="submit">
                            Search
                        </button>
                        <a href="{{route('testimonial-index')}}" class="btn btn-outline-primary">Clear</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Company</th>
                <th>Designation</th>
                <th>Description</th>
                <th class="text-center">image</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($testimonials as $testimonial)
                <tr>
                    <td>{{ $testimonial->name() }}</td>
                    <td>{{ $testimonial->company() }}</td>
                    <td>{{ $testimonial->designation() }}</td>
                    <td class="text-truncate">{!! html_entity_decode($testimonial->description()) !!}</td>
                    @if($testimonial->image())
                        <td class="text-center"><img src="{{ asset('storage/'. $testimonial->image()) }}" width="70"
                                                     class="rounded"></td>
                    @else
                        <td class="text-center"><img src="{{asset('imag   es/no.png')}}" width="70" class="rounded">
                        </td>
                    @endif
                    <td class="text-center">
                        <a href="{{ route('testimonial-edit', $testimonial->id()) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="feather feather-edit-2 align-middle me-2">
                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                            </svg>
                        </a>
                        <form method="post" action="{{ route('testimonial.delete', $testimonial->id()) }}">
                            @csrf
                            <button type="submit" class="btn text-danger p-0" onclick="return confirm('Are you sure?')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" class="feather feather-trash align-middle text-danger">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center"> No record found</td>
                </tr>

            @endforelse
            </tbody>
        </table>
        @if($testimonials != null)
            <div class="pagination d-flex justify-content-end align-items-center">
                {!! $testimonials->links() !!}
            </div>
        @endif
    </div>

@endsection
