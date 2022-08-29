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


    <div class="card mb-3">
        <div class="card-header d-flex flex-column flex-md-row md-align-items-center justify-content-between">
            <div class="title">Filters</div>
        </div>
        <div class="card-body">
            <form method="GET" action="{{route('admin.subject-area.index')}}">
                <div class="row g-3 align-items-end">
                    <div class="col-md-4 form-group">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="">
                    </div>

                    {{--                    <div class="col-md-2">--}}
                    {{--                        <div class="form-group">--}}
                    {{--                            <label class="form-label">Publication Frequency</label>--}}
                    {{--                            <select class="form-select" name="publication_frequency_id">--}}
                    {{--                                <option></option>--}}
                    {{--                                <option value="1">--}}
                    {{--                                    Annual--}}
                    {{--                                </option>--}}
                    {{--                                <option value="2">--}}
                    {{--                                    Article-by-Article--}}
                    {{--                                </option>--}}
                    {{--                                <option value="3">--}}
                    {{--                                    Bimonthly--}}
                    {{--                                </option>--}}
                    {{--                                <option value="4">--}}
                    {{--                                    Continuous Publication--}}
                    {{--                                </option>--}}
                    {{--                                <option value="5">--}}
                    {{--                                    Fortnightly--}}
                    {{--                                </option>--}}
                    {{--                                <option value="6">--}}
                    {{--                                    Irregular--}}
                    {{--                                </option>--}}
                    {{--                                <option value="7">--}}
                    {{--                                    Monthly--}}
                    {{--                                </option>--}}
                    {{--                                <option value="8">--}}
                    {{--                                    Quarterly--}}
                    {{--                                </option>--}}
                    {{--                                <option value="9">--}}
                    {{--                                    Semiannual--}}
                    {{--                                </option>--}}
                    {{--                                <option value="10">--}}
                    {{--                                    Semimonthly--}}
                    {{--                                </option>--}}
                    {{--                                <option value="11">--}}
                    {{--                                    Triannual--}}
                    {{--                                </option>--}}
                    {{--                                <option value="12">--}}
                    {{--                                    Weekly--}}
                    {{--                                </option>--}}
                    {{--                            </select>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    {{--                    <div class="col-md-2">--}}
                    {{--                        <div class="form-group">--}}
                    {{--                            <label class="form-label">State</label>--}}
                    {{--                            <select class="form-select" name="journal_state_id">--}}
                    {{--                                <option></option>--}}
                    {{--                                <option value="2">--}}
                    {{--                                    Published--}}
                    {{--                                </option>--}}
                    {{--                                <option value="1">--}}
                    {{--                                    Draft--}}
                    {{--                                </option>--}}
                    {{--                            </select>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

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
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @if($subjectAreas != null)
            <div class="pagination d-flex justify-content-end align-items-center">
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
                        <h5>New Subject Area</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.subject-area.store') }}"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label">Name</label>
                                <input name="name" class="form-control" value="{{ old('name') }}" required autofocus/>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="image">Image</label>
                                <input type="file" class="form-control" name="image" id="image"/>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
