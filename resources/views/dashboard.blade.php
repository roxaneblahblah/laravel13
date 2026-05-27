@extends('layouts.dashboard')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-subtitle', 'Welcome to your Laravel + Tabler application')

@section('content')
<div class="row row-deck row-cards">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Getting Started</h3>
            </div>
            <div class="card-body">
                <p>You have successfully integrated <strong>Tabler UI</strong> with your <strong>Laravel</strong> application!</p>
                <p>Tabler is a free, open-source Bootstrap 5 admin dashboard template. Here are some resources to help you get started:</p>
                
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <span class="bg-blue text-white avatar rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" /><path d="M12 12l8 -4.5" /><path d="M12 12l0 9" /><path d="M12 12l-8 -4.5" /><path d="M16 5.25l-8 4.5" /></svg>
                                    </span>
                                    <div class="ms-3">
                                        <h4 class="mb-0">Documentation</h4>
                                        <p class="text-secondary mb-0">Learn how to use Tabler components</p>
                                    </div>
                                </div>
                            </div>
                            <a href="https://tabler.io/docs" target="_blank" class="card-btn">View Docs <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M13 18l6 -6" /><path d="M13 6l6 6" /></svg></a>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <span class="bg-green text-white avatar rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M14.5 4h-2.5a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h2.5a2 2 0 0 0 2 -2v-10a2 2 0 0 0 -2 -2z" /><path d="M17 4v20" /><path d="M10 4v4c0 4.418 -2.239 8 -5 8" /></svg>
                                    </span>
                                    <div class="ms-3">
                                        <h4 class="mb-0">Laravel</h4>
                                        <p class="text-secondary mb-0">Explore Laravel features</p>
                                    </div>
                                </div>
                            </div>
                            <a href="https://laravel.com/docs" target="_blank" class="card-btn">Laravel Docs <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M13 18l6 -6" /><path d="M13 6l6 6" /></svg></a>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="card card-sm">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <span class="bg-purple text-white avatar rounded">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 13a2 2 0 1 0 0 4a2 2 0 0 0 0 -4m0 -5a2 2 0 1 0 0 4a2 2 0 0 0 0 -4m5 5a2 2 0 1 0 0 4a2 2 0 0 0 0 -4m0 -5a2 2 0 1 0 0 4a2 2 0 0 0 0 -4" /></svg>
                                    </span>
                                    <div class="ms-3">
                                        <h4 class="mb-0">Components</h4>
                                        <p class="text-secondary mb-0">Browse Tabler UI components</p>
                                    </div>
                                </div>
                            </div>
                            <a href="https://tabler.io/demo" target="_blank" class="card-btn">See Demo <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M13 18l6 -6" /><path d="M13 6l6 6" /></svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="subheader">Sales</div>
                    <div class="ms-auto lh-1">
                        <div class="dropdown">
                            <a class="link-secondary dropdown-toggle" href="#" data-bs-toggle="dropdown">Last 7 days</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-baseline">
                    <div class="h1 mb-0 me-2">$43</div>
                    <div class="me-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                            7% <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="subheader">Orders</div>
                    <div class="ms-auto lh-1">
                        <div class="dropdown">
                            <a class="link-secondary dropdown-toggle" href="#" data-bs-toggle="dropdown">Last 7 days</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-baseline">
                    <div class="h1 mb-0 me-2">15</div>
                    <div class="me-auto">
                        <span class="text-yellow d-inline-flex align-items-center lh-1">
                            0% <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /></svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="subheader">Visitors</div>
                    <div class="ms-auto lh-1">
                        <div class="dropdown">
                            <a class="link-secondary dropdown-toggle" href="#" data-bs-toggle="dropdown">Last 7 days</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-baseline">
                    <div class="h1 mb-0 me-2">2,845</div>
                    <div class="me-auto">
                        <span class="text-green d-inline-flex align-items-center lh-1">
                            12% <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 17l6 -6l4 4l8 -8" /><path d="M14 7l7 0l0 7" /></svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-sm-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="subheader">Online</div>
                    <div class="ms-auto lh-1">
                        <div class="dropdown">
                            <a class="link-secondary dropdown-toggle" href="#" data-bs-toggle="dropdown">Last 7 days</a>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-baseline">
                    <div class="h1 mb-0 me-2">54</div>
                    <div class="me-auto">
                        <span class="text-red d-inline-flex align-items-center lh-1">
                            -5% <svg xmlns="http://www.w3.org/2000/svg" class="icon ms-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7l6 6l4 -4l8 8" /><path d="M21 17l-7 0l0 -7" /></svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
