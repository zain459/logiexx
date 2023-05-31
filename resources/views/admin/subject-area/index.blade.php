@extends('layout')
@section('title', 'Subject Area')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Subject Fields</h3>

        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                data-bs-target="#createSubjectAreaModal">
            New Subject Fields
        </button>
    </div>

    <div class="card mb-3">
        <div class="card-header d-flex flex-column flex-md-row md-align-items-center justify-content-between">
            <div class="title">Filters</div>
        </div>
        <div class="card-body">
            <form method="GET" action="{{route('admin.subject-area.index')}}">
                <div class="row g-3 align-items-end">
                    <div class="col-md-4 form-group">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{request()->get('name')}}">
                    </div>
                    <div class="col-md-4 form-group">
                        <button class="btn btn-primary" type="submit">
                            Search
                        </button>
                        <a href="{{route('admin.subject-area.index')}}" class="btn btn-outline-primary">Clear</a>
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
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($subjectAreas as $area)
                <tr>
                    <td>{{ $area->name() }}</td>
                    <td>
                        <div class='d-flex align-items-center justify-content-end'>
                            @include('admin.subject-area.edit', [
                                'area' => $area
                            ])
                            <form method="post" action="{{ route('admin.subject-area.delete', $area->id()) }}">
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
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @if($subjectAreas != null)
            <div class="pagination d-
             justify-content-end align-items-center">
                {!! $subjectAreas->links() !!}
            </div>
        @endif
    </div>

    <!-- Modal -->
    <div class="modal fade" id="createSubjectAreaModal" tabindex="-1" role="dialog"
         aria-labelledby="createSubjectAreaModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>New Subject Fields</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body twocolumns-form">
                        <form method="POST" action="{{ route('admin.subject-area.store') }}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label">Name<sup>*</sup></label>
                                <input name="name" class="form-control" value="{{ old('name') }}" required autofocus/>
                            </div>
                            <div class="mb-3 form-group mb-3">
                                <label class="form-label d-flex justify-content-between" for="image"><span>Image<sup>*</sup></span><span style="font-size: 14px"><small>40 X 40</small></span></label>
                                <input type="file" class="form-control" name="image" id="image" required/>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

