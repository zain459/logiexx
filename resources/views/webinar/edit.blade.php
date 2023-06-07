@extends('layout')
@section('title', 'Webinar Edit')
@section('content')

    <div class="row mb-3">
        <div class="col-md-6">
            <figure class="figure">
                @if($webinar->image())
                    <img src="{{asset('storage/'. $webinar->image())}}" width="200" class="img-cricle mr-6">
                @else
                    <img src="{{ asset('images/f-logo.png') }}" width="200" class="img-cricle mr-6">
                @endif
                @if($webinar->linkImage())
                    <img src="{{asset('storage/'. $webinar->linkImage())}}" width="200" class="img-cricle">
                @else
                    <img src="{{ asset('images/f-logo.png') }}" width="200" class="img-cricle">
                @endif
            </figure>
        </div>

        <div class="col-md-6">
            <div class="card twocolumns-form">
                <div class="card-header fw-bold">Update</div>
                <div class="card-body">
                    <form action="{{route('webinar-update', $webinar->id())}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Title<sup>*</sup></label>
                            <input type="text" class="form-control" value="{{$webinar->title()}}" name="title"
                                   placeholder="Title"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Speaker<sup>*</sup></label>
                            <input type="text" class="form-control" value="{{$webinar->speaker()}}" name="speaker"
                                   placeholder="Speaker"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Moderator<sup>*</sup></label>
                            <input type="text" class="form-control" value="{{$webinar->moderator()}}" name="moderator"
                                   placeholder="Moderator"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Organization<sup>*</sup></label>
                            <input type="text" class="form-control" value="{{$webinar->organization()}}"
                                   name="organization"
                                   placeholder="Organization"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sponsor<sup>*</sup></label>
                            <input type="text" class="form-control" value="{{$webinar->sponsor()}}" name="sponsor"
                                   placeholder="sponsor"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Focal Person<sup>*</sup></label>
                            <input type="text" class="form-control" value="{{$webinar->focalPerson()}}"
                                   name="focal_person"
                                   placeholder="Focal Person"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Focal Person<sup>*</sup></label>
                            <input type="text" class="form-control" value="{{$webinar->focalPersonTelephone()}}"
                                   name="focal_person_telephone"
                                   placeholder="Focal Person Telephone"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Focal Person<sup>*</sup></label>
                            <input type="text" class="form-control" value="{{$webinar->focalPersonEmail()}}"
                                   name="focal_person_email"
                                   placeholder="Focal Person"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Link<sup>*</sup></label>
                            <input type="text" class="form-control" value="{{$webinar->link()}}" name="link"
                                   placeholder="Link"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Meeting Id<sup>*</sup></label>
                            <input type="text" class="form-control" value="{{$webinar->meetingId()}}" name="meeting_id"
                                   placeholder="Meeting Id"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="passcode"> Passcode<sup>*</sup></label>
                            <input type="text" class="form-control" name="passcode" value="{{$webinar->passcode()}}"
                                   id="passcode"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="start_date">Webinar Start
                                Date<sup>*</sup></label>
                            <input type="date" class="form-control" value="{{$webinar->startDate()->toDateString()}}"
                                   name="start_date" id="start_date"/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="end_date">Webinar End Date<sup>*</sup></label>
                            <input type="date" class="form-control" value="{{$webinar->endDate()->toDateString()}}"
                                   name="end_date"
                                   placeholder="end_date"/>
                        </div>
                        @if($webinar->image())
                            <div class="mb-3">
                                <img src="{{ asset('storage/'. $webinar->image()) }}" width="150" class="rounded">
                            </div>
                        @else
                            <div class="mb-3">
                                <img src="{{ asset('images/f-logo.png') }}" width="150" class="rounded">
                            </div>
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Image</label>
                            <input type="file" class="form-control" name="image"/>
                        </div>
                        @if($webinar->linkImage())
                            <div class="mb-3">
                                <img src="{{ asset('storage/'. $webinar->linkImage()) }}" width="150" class="rounded">
                            </div>
                        @else
                            <div class="mb-3">
                                <img src="{{ asset('images/f-logo.png') }}" width="150" class="rounded">
                            </div>
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Link Image</label>
                            <input type="file" class="form-control" name="link_image">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Short Description<sup>*</sup></label>
{{--                                <textarea class="ckeditor form-control" name="short_description">{{$webinar->shortDescription()}}</textarea>--}}
                            <textarea id="my-editor" name="short_description">{{ $webinar->shortDescription() }}</textarea>

                        </div>
                        {{--                        <input type="hidden" name="webinarId" value="{{$webinar->id()}}" required />--}}

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>

@endsection
