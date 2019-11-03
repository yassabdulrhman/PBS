<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <img height="30" src="{{ asset('storage/logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  @if(auth()->user()->type==1)
                                  <a class="dropdown-item" href="{{ route('register') }}">{{ __('New user') }}</a>
                                  <a class="dropdown-item" href="{{ route('newproject') }}">{{ __('New Project') }}</a>
                                  <a class="dropdown-item" href="{{ route('projects') }}">{{ __('Projects') }}</a>
                                  <a class="dropdown-item" href="{{ route('ratings') }}">{{ __('Ratings') }}</a>
                                  <a class="dropdown-item" href="{{ route('reporting') }}">{{ __('Reporting') }}</a>
                                  @endif
                                  @if(auth()->user()->type==2)
                                  <a class="dropdown-item" href="{{ route('newproject') }}">{{ __('New Project') }}</a>
                                  <a class="dropdown-item" href="{{ route('projects') }}">{{ __('Projects') }}</a>
                                  @endif
                                  @if(auth()->user()->type==3)
                                  <a class="dropdown-item" href="{{ route('ratings') }}">{{ __('Ratings') }}</a>
                                  @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="site-footer">
<div class="container">
<div class="row">
<div class="col-lg-3">
<h2 class="footer-heading mb-3">About Me</h2>
<p>Professional Business Solutions (PBS) is the leading company in providing consultancy services, and making solutions dedicated to the entrepreneurship community.</p>
</div>
<div class="col-lg-8 ml-auto">
<div class="row">
<div class="col-lg-6 ml-auto">
<h2 class="footer-heading mb-4">Quick Links</h2>
<ul class="list-unstyled">
<li><a href="#">About Us</a></li>
<li><a href="#">Testimonials</a></li>
<li><a href="#">Terms of Service</a></li>
<li><a href="#">Privacy</a></li>
<li><a href="#">Contact Us</a></li>
</ul>
</div>
<div class="col-lg-6">
<h2 class="footer-heading mb-4">Connect</h2>
<div class="social_29128 white mb-5">
<a href="#"><span class="icon-facebook"></span></a>
<a href="#"><span class="icon-instagram"></span></a>
<a href="#"><span class="icon-twitter"></span></a>
</div>
<h2 class="footer-heading mb-4">Newsletter</h2>
<form action="#" class="d-flex">
<input type="text" class="form-control mr-3" placeholder="Email">
<input type="submit" value="Send" class="btn btn-primary">
</form>
</div>
</div>
</div>
</div>
<div class="row pt-5 mt-5 text-center">
<div class="col-md-12">
<div class="border-top pt-5">
<p>

Copyright ©2019 All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://pbs.sa" target="_blank">pbs.sa</a>

</p>
</div>
</div>
</div>
</div>
</footer>
</body>
</html>
