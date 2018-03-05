<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TripAdvisor</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jssocials.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jssocials-theme-flat.css') }}" rel="stylesheet">
    <link href="{{ asset('css/pnotify.custom.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" type="text/css" href="jssocials.css" />--}}

</head>
<body>

    <nav class="navbar nav-bar-headre navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <div class="">

                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{url('images/LOGO.png')}}">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/') }}">Explore</a>
                    </li>
                    @if (\Auth::user())
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('profile.favorites')}}">Favorite</a>
                        </li>
                    @else
                        <li class="nav-item login-modal ">
                            <a class="nav-link" href="#">Favorite</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('place')}}">add Place</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">add Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Claim your Busness</a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">

                    @guest

                        <li><a class="nav-link join-in" href="">Join</a></li>
                        <li><a class="nav-link login-modal" href="">Login</a></li>
                        @else
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i> {{ Auth::user()->firstname }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <a class="dropdown-item" href="{{route('profile')}}">
                                        View profile
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                            @endguest
                </ul>
            </div>
        </div>
    </nav>

    <div id="app " class="">
    <main class="">
        @yield('content')
    </main>
    @include('frontend.modals.login-modal')
</div>

<!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugin/jssocials.min.js') }}"></script>
<script src="{{ asset('js/plugin/select2.min.js') }}"></script>
<script src="{{ asset('js/plugin/pnotify.custom.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/welcome.js') }}"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</body>
</html>
