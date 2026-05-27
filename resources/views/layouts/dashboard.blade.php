<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>@yield('title', 'Dashboard') - {{ config('app.name', 'Laravel') }}</title>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
</head>

<body class=" d-flex flex-column">
    <div class="page">
        <!-- Navbar -->
        <header class="navbar navbar-expand-md d-print-none">
            <div class="container-xl">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <h1 class="navbar-brand navbar-brand-autodark">
                    <a href="{{ url('/') }}" class="link-secondary">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </h1>
                
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="navbar-nav pt-lg-3">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                                </span>
                                <span class="nav-link-title">Home</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="page-header d-print-none">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="page-title">@yield('page-title', 'Dashboard')</h2>
                            <div class="text-secondary mt-1">@yield('page-subtitle', 'Overview')</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                @yield('content')
            </div>
        </div>
        
        <!-- Footer -->
        <footer class="footer footer-transparent d-print-none">
            <div class="container-xl">
                <div class="row text-center align-items-center flex-row-reverse">
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item">
                                Copyright &copy; {{ date('Y') }}
                                <a href="#" class="link-secondary">{{ config('app.name', 'Laravel') }}</a>.
                                All rights reserved.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    
    @stack('scripts')
</body>
</html>
