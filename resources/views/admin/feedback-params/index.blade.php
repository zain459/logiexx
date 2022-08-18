@extends('layout')
@section('title', 'FeedBack')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>FeedBack</h3>
        <a class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#createFeedBackModal">New FeedBack</a>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#id</th>
                <th>Category</th>
                <th>Title</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($feedBackParams as $feedBackParam)
                <tr>
                    <td>{{ $feedBackParam->id() }}</td>
                    <td>{{ $feedBackParam->category() }}</td>
                    <td>{{ $feedBackParam->title() }}</td>
                    <td class="d-flex justify-content-start">
                        @include('admin.feedback-params.edit',[
                                    'feedBackParam' => $feedBackParam
                        ])
                        <form method="post" action="{{route('admin.feed-back.delete', $feedBackParam->id())}}">
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
    </div>

    <div class="modal fade" id="createFeedBackModal" tabindex="-1" role="dialog" aria-labelledby="createFeedBackModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>New FeedBack</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('admin.feed-back.store')}}">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label">Category</label>
                                <input type="text" name="category" class="form-control" value="{{ old('category') }}"
                                       required autofocus/>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Title</label>
                                <textarea name="title" class="form-control">{{ old('title') }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
