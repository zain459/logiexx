<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Logixs</title>
    <link rel="shortcut icon" href="{{asset('images/favicon-32x32.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/@adminkit/core@latest/dist/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{--    <link href="{{ asset('css/vendor/tinymce.css')}}"  rel="stylesheet">--}}
    <script src="https://unpkg.com/@adminkit/core@latest/dist/js/app.js"></script>
    <script type="text/javascript" src="{{ mix('js/admin.js') }}" defer></script>
    <link href="{{ mix('css/admin.css') }}" rel="stylesheet">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">

    tinymce.init({

        selector: '#my-editor',

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
<div id="app">
    @include('sidebar')
    <main class="content">
        <div class="coantiner-fluid p-0">
            @if ($errors->any())
                <div class="my-3 d-flex align-items-center text-uppercase alert alert-danger alert-message">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @include('flash::message')

            @yield('content')
        </div>
    </main>

</div>
</body>
</html>
