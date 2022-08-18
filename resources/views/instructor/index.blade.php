@extends('layout')
@section('title', 'Instructors')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Instructors</h3>

        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                data-bs-target="#createInstructorModal">
            New Instructor
        </button>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @forelse($instructors as $instructor)
                <tr>
                    <td>{{ $instructor->name() }}</td>
                    <td>{{ $instructor->email() }}</td>
                    <td>{{ $instructor->address() }}</td>
                    <td class="d-flex justify-content-center">
                        @include('instructor.edit', [
                                'instructor' => $instructor
                            ])
                        <form method="post" action="{{ route('instructor.delete', $instructor->id()) }}">
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

    <!-- Modal -->
    <div class="modal fade" id="createInstructorModal" tabindex="-1" role="dialog" aria-labelledby="createInstructorModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>New Instructor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('instructor.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label">Name</label>
                                <input name="name" class="form-control" value="{{ old('name') }}" required autofocus/>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required autofocus/>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Address</label>
                               <textarea name="address" class="form-control">{{ old('address') }}</textarea>
                            </div>

                            <div class="mb-3 col-md-12">
                                <label class="form-label" for="bio">Brief Bio</label>
                                <textarea name="bio" class="form-control" ></textarea>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="image">Image</label>
                                <input type="file" class="form-control" name="image" id="image" />
                            </div>

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
