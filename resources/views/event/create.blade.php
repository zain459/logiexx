@extends('layout')
@section('title', 'Create Event')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Add Event</h3>

        <a href="{{ route('event-index') }}" class="btn btn-sm btn-primary">
            View All Events
        </a>
    </div>
    <div class="card">
        <div class="card-header fw-bold">Create Event</div>
        <div class="card-body twocolumns-form">
            <form action="{{route('event-store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Title<sup>*</sup></label>
                    <div class="col-sm-10">
                        <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="Title" required/>
                    </div>
                </div>

                <div class="mb-3 row">

                    <label class="col-form-label col-sm-2 text-sm-end">Start Date<sup>*</sup></label>
                    <div class="col-sm-4">
                        <input type="date" name="startDate" value="{{old('startDate')}}" class="form-control" required/>
                    </div>

                    <label class="col-form-label col-sm-2 text-sm-end">End Date<sup>*</sup></label>
                    <div class="col-sm-4">
                        <input type="date" name="endDate" value="{{old('endDate')}}" class="form-control" required/>
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Link</label>
                    <div class="col-md-4">
                        <input type="url" name="link" value="{{old('link')}}" class="form-control"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Description<sup>*</sup></label>
                    <div class="col-md-10">
                        <textarea class="ckeditor form-control" name="description" required>{{old('description')}}</textarea>
{{--                        <vue-editor v-model="formData.description" required></vue-editor>--}}
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="image" class="form-control" accept="image/png, image/jpeg">
                        </div>
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
    {{--    <event-create-component></event-create-component>--}}
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection

