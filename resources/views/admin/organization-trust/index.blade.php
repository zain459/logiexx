@extends('layout')
@section('title', 'Organization Trust')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Organization Trust</h3>

        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                data-bs-target="#createOrganizationTrustModal">
            New Organization Trust
        </button>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Link</th>
                <th>Image</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($organizationTrusts as $organizationTrust)
                <tr>
                    <td><a href="{{$organizationTrust->link()}}">{{$organizationTrust->link()}}</a></td>
                    <td><img src="{{ asset('storage/'. $organizationTrust->image()) }}" width="50"></td>
                    <td>
                        <div class='d-flex align-items-center justify-content-end'>
                            @include('admin.organization-trust.edit', [
                                'organizationTrust' => $organizationTrust
                            ])
                            <form method="post" action="{{ route('organization-trust.delete', $organizationTrust->id()) }}">
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
    </div>

    <!-- Modal -->
    <div class="modal fade" id="createOrganizationTrustModal" tabindex="-1" role="dialog" aria-labelledby="createOrganizationTrustModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>Organization Trust</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('organization-trust.store') }}" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label">Link</label>
                                <input type="text" name="link" class="form-control" value="{{ old('link') }}" required autofocus/>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label d-flex justify-content-between" for="image"><span>Image<sup>*</sup></span><span style="font-size: 14px"><small>50 X 50</small></span></label>
                                <input type="file" name="image" class="form-control" value="{{ old('image') }}" required autofocus/>
                            </div>

                            <button type="submit" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
