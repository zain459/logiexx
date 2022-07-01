@extends('layout')
@section('title', 'become-an-instructor')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Become Instructor</h3>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Degree</th>
                <th>Telephone</th>
            </tr>
            </thead>
            <tbody>
            @forelse($becomeAnInstructors as $becomeAnInstructor)
                <tr>
                    <td>{{ $becomeAnInstructor->firstName() }}</td>
                    <td>{{ $becomeAnInstructor->lastName() }}</td>
                    <td>{{ $becomeAnInstructor->degree() }}</td>
                    <td>{{ $becomeAnInstructor->telephone() }}</td>
                    <td class="table-action">
                        <a href="{{route('admin.become-an-instructor.view', $becomeAnInstructor->id())}}">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path
                                        d="M12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9C2.121 6.88 6.608 3 12 3zm0 16a9.005 9.005 0 0 0 8.777-7 9.005 9.005 0 0 0-17.554 0A9.005 9.005 0 0 0 12 19zm0-2.5a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-2a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                                </g>
                            </svg>
                        </a>
                        <form method="post"
                              action="{{route('admin.become-an-instructor.delete', $becomeAnInstructor->id())}}">
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
@endsection
