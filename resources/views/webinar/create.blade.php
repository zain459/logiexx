@extends('layout')
@section('title', 'Create webinar series')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Add Webinar</h3>

        <a href="{{ route('webinar-index') }}" class="btn btn-sm btn-primary">
            View All Webinar
        </a>
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">New Webinar</h5>
        </div>
        <div class="card-body">

            <form action="{{route('webinar-store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Title</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('title')}}" name="title"
                               placeholder="Title"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Speaker</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('speaker')}}" name="speaker"
                               placeholder="Speaker"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Moderator</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('moderator')}}" name="moderator"
                               placeholder="Moderator"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Organization</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('organization')}}" name="organization"
                               placeholder="Organization"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Sponsor</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('sponsor')}}" name="sponsor"
                               placeholder="sponsor"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Focal Person</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('focal_person')}}" name="focal_person"
                               placeholder="Focal Person"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Link</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('link')}}" name="link" placeholder="Link"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Meeting Id</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('meeting_id')}}" name="meeting_id"
                               placeholder="Meeting Id"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end" for="start_date">Webinar Start
                        Date</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="start_date" id="start_date"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end" for="end_date">Webinar End
                        Date</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="end_date" id="end_date"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Passcode</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('passcode')}}" name="passcode"
                               placeholder="Passcode"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Image</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" name="image"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Link Image</label>
                    <div class="col-sm-6">
                        <input type="file" class="form-control" name="link_image"/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Short Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="short_description" placeholder="Short Description"
                                  rows="3" required>{{old('short_description')}}</textarea>
                    </div>
                </div>
                <div class="mb-3 row">
                    <div class="col-sm-10 ms-sm-auto">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

