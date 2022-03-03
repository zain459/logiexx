@extends('layout')
@section('title', 'Dashboard')
@section('content')

    <div class="row">
        <div class="col-md-12">
        </div>

        <div class="col-md-12">
            <div class="mb-3">
                <h3>Dashboard</h3>
            </div>
            <div class="row row-cols-3 g-3">
                <div class="col shadow-sm border bg-white rounded">
                    <a class="d-block p-3 text-body text-decoration-none" href="{{route('inventory.dashboard')}}">
                        <div class="p-2 rounded d-inline-block mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="24" height="24" class="text-primary">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h4>Inventory</h4>
                        <p class="text-muted">Manage category, subject areas.</p>
                    </a>
                </div>

                <div class="col shadow-sm border bg-white rounded">
                    <a class="d-block p-3 text-body text-decoration-none" href="{{route('inventory.dashboard')}}">
                        <div class="p-2 rounded d-inline-block mb-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h4>Courses</h4>
                        <p class="text-muted">Manage courses.</p>
                    </a>
                </div>

            </div>
    </div>
@endsection
