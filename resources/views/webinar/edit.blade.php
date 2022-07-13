@extends('layout')
@section('title', 'Webinar Edit')
@section('content')

    <div class="row mb-3">
        <div class="col-md-6">
            <figure class="figure">
                <img src="{{asset('storage/'. $webinar->image())}}" width="200" class="img-cricle mr-6" >
                <img src="{{asset('storage/'. $webinar->linkImage())}}" width="200" class="img-cricle" >
            </figure>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header fw-bold">Update</div>
                <div class="card-body">
                    <form action="{{route('webinar-update', $webinar->id())}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                        <label class="form-label">Title</label>
                            <input type="text" class="form-control" value="{{$webinar->title()}}" name="title"
                                   placeholder="Title"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Speaker</label>
                                <input type="text" class="form-control" value="{{$webinar->speaker()}}" name="speaker"
                                       placeholder="Speaker"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Moderator</label>
                                <input type="text" class="form-control" value="{{$webinar->moderator()}}" name="moderator"
                                       placeholder="Moderator"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Organization</label>
                                <input type="text" class="form-control" value="{{$webinar->organization()}}" name="organization"
                                       placeholder="Organization"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sponsor</label>
                                <input type="text" class="form-control" value="{{$webinar->sponsor()}}" name="sponsor"
                                       placeholder="sponsor"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Focal Person</label>
                                <input type="text" class="form-control" value="{{$webinar->focalPerson()}}" name="focal_person"
                                       placeholder="Focal Person"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Focal Person</label>
                            <input type="text" class="form-control" value="{{$webinar->focalPersonTelephone()}}" name="focal_person_telephone"
                                   placeholder="Focal Person Telephone"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Focal Person</label>
                            <input type="text" class="form-control" value="{{$webinar->focalPersonEmail()}}" name="focal_person_email"
                                   placeholder="Focal Person"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Link</label>
                                <input type="text" class="form-control" value="{{$webinar->link()}}" name="link" placeholder="Link"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Meeting Id</label>
                                <input type="text" class="form-control" value="{{$webinar->meetingId()}}" name="meeting_id"
                                       placeholder="Meeting Id"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="passcode"> Passcode</label>
                                <input type="text" class="form-control" name="passcode" value="{{$webinar->passcode()}}" id="passcode"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="start_date">Webinar Start
                                Date</label>
                                <input type="date" class="form-control" value="{{$webinar->startDate()->toDateString()}}" name="start_date" id="start_date"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="end_date">Webinar End Date</label>
                                <input type="date" class="form-control" value="{{$webinar->endDate()->toDateString()}}" name="end_date"
                                       placeholder="end_date"/>
                        </div>

                        <div class="mb-3">
                            <img src="{{ asset('storage/'. $webinar->image()) }}" width="150" class="rounded">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                                <input type="file" class="form-control" name="image"/>
                        </div>

                        <div class="mb-3">
                            <img src="{{ asset('storage/'. $webinar->linkImage()) }}" width="150" class="rounded">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Link Image</label>
                                <input type="file" class="form-control" name="link_image"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Short Description</label>
                        <textarea class="form-control" name="short_description" placeholder="Short Description"
                                  rows="3" required>{{$webinar->shortDescription()}}</textarea>
                        </div>

{{--                        <input type="hidden" name="webinarId" value="{{$webinar->id()}}" required />--}}

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script>
        import { VueEditor } from "vue2-editor";
    </script>


@endsection
