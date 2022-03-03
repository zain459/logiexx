@extends('layout')
@section('title', 'Subject Area')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Subject Area</h3>

        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                data-bs-target="#createSubjectAreaModal">
            New Area
        </button>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
{{--            @foreach($categories as $item)--}}
{{--                <tr>--}}
{{--                    <td>{{ $item->name() }}</td>--}}
{{--                    <td>--}}
{{--                        <div class='d-flex align-items-center justify-content-end'>--}}
{{--                            @include('inventory.category.edit', [--}}
{{--                                'category' => $item--}}
{{--                            ])--}}
{{--                        </div>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="createSubjectAreaModal" tabindex="-1" role="dialog" aria-labelledby="createSubjectAreaModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>New Subject Area</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('inventory.subject-store') }}">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label">Name</label>
                                <input name="name" class="form-control" value="{{ old('name') }}" required autofocus/>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
