@extends('layout')
@section('title', 'News Edit')
@section('content')
    <div class="mb-3 d-flex justify-content-between align-items-center">
        <h3>{{ $news->title}}</h3>

        <a href="{{ route('news-index') }}" class="btn btn-sm btn-primary">
            View All News
        </a>
    </div>

    <div class="card">
        <div class="card-header fw-bold">Create News</div>
        <div class="card-body twocolumns-form">
            <form method="POST" action="{{route('news-update', $news->id())}}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Title<sup>*</sup></label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" value="{{$news->title()}}"
                               placeholder="Title" required/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Posted Date<sup>*</sup></label>
                    <div class="col-sm-4">
                        <input type="date" name="postedDate" class="form-control" value="{{$news->postedDate()}}"
                               required/>
                    </div>

                    <label class="col-form-label col-sm-2 text-sm-end">link<sup></sup></label>
                    <div class="col-md-4">
                        <input type="url" class="form-control" name="link" value="{{$news->link()}}"/>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Short Description<sup>*</sup></label>
                    <div class="col-sm-10">
{{--                        <textarea class="ckeditor form-control" name="shortDescription"--}}
{{--                                  required>{{$news->shortDescription()}}</textarea>--}}
                        <textarea id="my-editor" name="shortDescription">{{ $news->shortDescription() }}</textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label col-sm-2 text-sm-end">Long Description<sup>*</sup></label>
                    <div class="col-sm-10">
{{--                        <textarea class="ckeditor form-control"--}}
{{--                                  name="longDescription">{{$news->longDescription()}}</textarea>--}}
                        <textarea id="my-editor1" name="longDescription">{{ $news->longDescription() }}</textarea>
                    </div>
                </div>
                @if($news->image())
                    <div class="mb-3">
                        <img src="{{ asset('storage/'. $news->image()) }}" class="rounded" width="150">
                    </div>
                @else
                    <img src="{{asset('images/no.png')}}" class="rounded" width="150">
                @endif
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
    <script type="text/javascript">

        tinymce.init({

            selector: '#my-editor1',

            height: 300,

            menubar: false,

            plugins: [
                "a11ychecker advcode advlist advtable anchor autocorrect autolink autoresize autosave casechange charmap checklist code codesample directionality editimage emoticons export footnotes formatpainter fullscreen help image importcss inlinecss insertdatetime link linkchecker lists media mediaembed mentions mergetags nonbreaking pagebreak pageembed permanentpen powerpaste preview quickbars save searchreplace table tableofcontents template tinycomments tinydrive tinymcespellchecker typography visualblocks visualchars wordcount",
            ],

            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help | blocks | bold italic',
        });

    </script>
@endsection

