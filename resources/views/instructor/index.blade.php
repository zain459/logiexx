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
                <th></th>
            </tr>
            </thead>
            <tbody>
            @forelse($instructors as $instructor)
                <tr>
                    <td>{{ $instructor->name() }}</td>
                    <td>{{ $instructor->email() }}</td>
                    <td>{{ $instructor->address() }}</td>
                    <td>
                        @include('instructor.edit', [
                                'instructor' => $instructor
                            ])
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
                        <form method="POST" action="{{route('instructor.store')}}">
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

                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
