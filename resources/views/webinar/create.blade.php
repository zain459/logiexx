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
        <div class="card-body twocolumns-form">
            <form action="{{route('webinar-store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Title<sup>*</sup></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('title')}}" name="title"
                               placeholder="Title" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Speaker<sup>*</sup></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('speaker')}}" name="speaker"
                               placeholder="Speaker" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Moderator<sup>*</sup></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('moderator')}}" name="moderator"
                               placeholder="Moderator" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Organization<sup>*</sup></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('organization')}}" name="organization"
                               placeholder="Organization" required/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Sponsor<sup>*</sup></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('sponsor')}}" name="sponsor"
                               placeholder="S   ponsor" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Focal Person<sup>*</sup></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('focal_person')}}" name="focal_person"
                               placeholder="Focal Person" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Focal Person Telephone<sup>*</sup></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('focal_person_telephone')}}" name="focal_person_telephone"
                               placeholder="Focal Person Telephone" required/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Focal Person Email<sup>*</sup></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('focal_person_email')}}" name="focal_person_email"
                               placeholder="Focal Person Email" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Link<sup>*</sup></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('link')}}" name="link" placeholder="Link" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Meeting Id<sup>*</sup></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('meeting_id')}}" name="meeting_id"
                               placeholder="Meeting Id" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end" for="start_date">Webinar Start
                        Date<sup>*</sup></label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="start_date" value="{{old('start_date')}}" id="start_date" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end" for="end_date">Webinar End
                        Date<sup>*</sup></label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="end_date" value="{{old('end_date')}}" id="end_date" required/>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Passcode<sup>*</sup></label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="{{old('passcode')}}" name="passcode"
                               placeholder="Passcode" required/>
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
                    <label class="col-form-label fw-bold col-sm-2 text-sm-end">Short Description<sup>*</sup></label>
                    <div class="col-sm-10">
                        <textarea class="ckeditor form-control" rows="3" name="short_description" required>{{ old('short_description') }}    </textarea>
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
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection

