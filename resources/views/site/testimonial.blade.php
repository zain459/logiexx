@extends('site.master')
@section('banner-title', 'Testimonials')
@section('title', '')
@section('content')
    <main id="main">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
                </ol>
            </nav>
        </div>
        <section class="block testimonials-block pb-4">
            <div class="container">
                <div class="row row-cols-md-3 row-cols-1 text-center mb-4">
                    @foreach($testimonials as $testimonial)
                        <div class="col mb-4">
                            <div class="photo"><img src="{{'/storage/'.$testimonial->image()}}" class="img-fluid"
                                                    alt=""></div>
                            <strong class="name" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                    title="Lorem, ipsum dolor sit amet">{{$testimonial->name()}}</strong>
                            <span class="post">{{$testimonial->designation(). ','.$testimonial->company().'.'}}</span>
                            <blockquote>
                                <q>{{$testimonial->description()}}</q>
                            </blockquote>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </main>
@endsection
