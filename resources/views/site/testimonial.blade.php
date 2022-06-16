@extends('site.master')

@section('title', '')
@section('content')

    <div class="title-section">
        <div class="container">
            <div class="inner-menu">
                <a href="courses.php" class="btn-link"><span class="button">Browse Our Courses</span></a>
                <a href="#" class="btn-link btn-opener open"><span class="opener"><span>&nbsp;</span></span></a>
            </div>
            <div class="fields-menu">
                <h2>Browse Our Subject Fields</h2>
                <ul>
                    <li><a href="#">Business & Management</a></li>
                    <li><a href="#">Social Sciences</a></li>
                    <li><a href="#">Health & Medicine</a></li>
                    <li><a href="#">Statistics</a></li>
                    <li><a href="#">Education & Teaching</a></li>
                    <li><a href="#">Supply Chain Management</a></li>
                </ul>
            </div>
            <h1>Testimonials</h1>
        </div>
    </div>
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
