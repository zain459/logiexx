@extends('layout')
@section('title', 'Course Affiliated Partners')
@section('content')

    <x-course-navbar :course="$course"/>
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Course Affiliated Partners</h3>

        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                data-bs-target="#createPartnerModal">
            Assign Partner
        </button>
    </div>

    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Affiliated Partners</th>
                <td></td>
            </tr>
            </thead>
            <tbody>
            @forelse($assignedPartners as $item)
                <tr>
                    <td>{{ $item->partner->link() }}</td>
                    <td>
                        <form method="post" action="{{ route('course.partner-delete', $item->id()) }}">
                            @csrf
                            <button type="submit" class="btn text-danger p-0" onclick="return confirm('Are you sure?')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash align-middle text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
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
    <div class="modal fade" id="createPartnerModal" tabindex="-1" role="dialog" aria-labelledby="createPartnerModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5>Assign Partner</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="card-body twocolumns-form">
                        <form action="{{ route('course.partner.assign-course') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="title">Partners<sup>*</sup></label>
                                <select class="form-select" name="partner" required>
                                    <option></option>
                                    @foreach($partners as $item)
                                        <option value="{{ $item->id() }}">{{ $item->link() }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" value="{{ $course->id() }}" name="courseId" required/>

                            <button type="submit" class="btn btn-primary">Assign</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
