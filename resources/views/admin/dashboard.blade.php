@extends('layout')
@section('title', 'Dashboard')
@section('content')

    <div class="row">
        <div class="col-md-12 mb-3">

{{--          <example-component></example-component>--}}
        </div>

        <div class="col-md-12">
            <div class="mb-3">
                <h3>Dashboard</h3>
            </div>
            <div class="row row-cols-3 g-3">
                <div class="col shadow-sm border bg-white rounded">
                    <a class="d-block p-3 text-body text-decoration-none" href="{{ route('admin.setting.dashboard') }}">
                        <div class="p-2 rounded d-inline-block mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="24" height="24" class="text-primary">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h4>Settings</h4>
                        <p class="text-muted">Manage category, subject areas.</p>
                    </a>
                </div>

                <div class="col shadow-sm border bg-white rounded">
                    <a class="d-block p-3 text-body text-decoration-none" href="{{ route('course-index')}}">
                        <div class="p-2 rounded d-inline-block mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h4>Courses</h4>
                        <p class="text-muted">Manage courses.</p>
                    </a>
                </div>

                <div class="col shadow-sm border bg-white rounded">
                    <a class="d-block p-3 text-body text-decoration-none" href="{{ route('instructor.index') }}">
                        <div class="p-2 rounded d-inline-block mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" class="text-success" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                            </svg>
                        </div>
                        <h4>Instructors</h4>
                        <p class="text-muted">Instructors.</p>
                    </a>
                </div>

                <div class="col shadow-sm border bg-white rounded">
                    <a class="d-block p-3 text-body text-decoration-none" href="{{ route('admin.partner.index') }}">
                        <div class="p-2 rounded d-inline-block mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg"  width="24" height="24" class="text-info" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h4>Affiliated Partners</h4>
                        <p class="text-muted">Affiliated Partners.</p>
                    </a>
                </div>

                <div class="col shadow-sm border bg-white rounded">
                    <a class="d-block p-3 text-body text-decoration-none" href="{{ route('testimonial-index') }}">
                        <div class="p-2 rounded d-inline-block mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="text-success" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                            </svg>
                        </div>
                        <h4>Testimonials</h4>
                        <p class="text-muted">Testimonials.</p>
                    </a>
                </div>

                <div class="col shadow-sm border bg-white rounded">
                    <a class="d-block p-3 text-body text-decoration-none" href="{{ route('event-index') }}">
                        <div class="p-2 rounded d-inline-block mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="text-info" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h4>Events</h4>
                        <p class="text-muted">Events.</p>
                    </a>
                </div>

                <div class="col shadow-sm border bg-white rounded">
                    <a class="d-block p-3 text-body text-decoration-none" href="{{ route('news-index') }}">
                        <div class="p-2 rounded d-inline-block mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                        </div>
                        <h4>News</h4>
                        <p class="text-muted">News.</p>
                    </a>
                </div>

                <div class="col shadow-sm border bg-white rounded">
                    <a class="d-block p-3 text-body text-decoration-none" href="{{ route('pages-index') }}">
                        <div class="p-2 rounded d-inline-block mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                        </div>
                        <h4>Pages</h4>
                        <p class="text-muted">Pages.</p>
                    </a>
                </div>
{{--                <div class="col shadow-sm border bg-white rounded">--}}
{{--                    <a class="d-block p-3 text-body text-decoration-none" href="{{ route('course.enrollment-index') }}">--}}
{{--                        <div class="p-2 rounded d-inline-block mb-3">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="text-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
{{--                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                        <h4>Enrollment</h4>--}}
{{--                        <p class="text-muted">Enrollment.</p>--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
    </div>
@endsection
