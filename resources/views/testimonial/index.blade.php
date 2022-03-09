@extends('layout')
@section('title', 'Testimonials')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Testimonials</h3>

        <a href="{{ route('testimonial-create') }}" class="btn btn-sm btn-primary">New Testimonial</a>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Company</th>
                <th>Designation</th>
                <th>Description</th>
                <th>image</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($testimonials as $testimonial)
                <tr>
                    <td>{{ $testimonial->name() }}</td>
                    <td>{{ $testimonial->company() }}</td>
                    <td>{{ $testimonial->designation() }}</td>
                    <td>{{ $testimonial->description() }}</td>
                    <td><img src="{{ asset('storage/'. $testimonial->image()) }}" width="70" class="rounded"></td>
                    <td><a href="{{ route('testimonial-edit', $testimonial->id()) }}">Edit</a> </td>

                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center"> No record found</td>
                </tr>

            @endforelse
            </tbody>
        </table>
    </div>

@endsection
