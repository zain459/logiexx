@extends('layout')
@section('title', 'Create News')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>Add News</h3>

        <a href="{{ route('news-index') }}" class="btn btn-sm btn-primary">
            View All News
        </a>
    </div>
    <div class="card">
        <div class="card-header fw-bold">Create News</div>
        <div class="card-body twocolumns-form">
            <form method="POST" action="{{route('news-store')}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Title<sup>*</sup></label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" value="{{old('title')}}"
                               placeholder="Title" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Posted Date<sup>*</sup></label>
                    <div class="col-sm-4">
                        <input type="date" name="postedDate" class="form-control" value="{{old('postedDate')}}"
                               required/>
                    </div>

                    <label class="col-form-label col-sm-2 text-sm-end">link<sup></sup></label>
                    <div class="col-md-4">
                        <input type="url" class="form-control" name="link" value="{{old('link')}}" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Short Description<sup>*</sup></label>
                    <div class="col-sm-10">
                        <textarea class="ckeditor form-control" name="shortDescription" required></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Long Description<sup>*</sup></label>
                    <div class="col-sm-10">
                        <textarea class="ckeditor form-control" name="longDescription"></textarea>
                        {{--                        <vue-editor v-model="formData.longDescription" required></vue-editor>--}}
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-end">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="image" accept="image/png, image/jpeg">

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
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
    {{--    <news-form></news-form>--}}

@endsection

