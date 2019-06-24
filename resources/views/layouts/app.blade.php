<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Studentske udruge</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!--icon-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


</head>
<body style="position: relative; min-height: 100%; padding-bottom: 6rem;">
<div id="app">
    <nav class="navbar navbar-expand-md navbar-laravel">
        <div class="container">
            <a style="color:whitesmoke" class="navbar-brand" href="{{ url('/home') }}">
                <i class="fa fa-graduation-cap"></i> Studentske udruge
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                @auth
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a style="color:whitesmoke" id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Fakulteti <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @foreach($faculties as $faculty)
                                    <a class="dropdown-item" href="{{ route('faculties') }}/{{$faculty->id}}">
                                        {{$faculty->short_name}}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-3">
                        <li class="nav-item"><a style="color:whitesmoke;" href="{{route('associations')}}">Udruge</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ml-3">
                        <li class="nav-item dropdown">
                            <a style="color:whitesmoke" id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Moje udruge <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @foreach($members as $member)
                                    <a class="dropdown-item"
                                       href="{{ route('associations') }}/{{$member->association->id}}">
                                        {{$member->association->name}}
                                    </a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                @endauth

            <!-- Right Side Of Navbar -->

                <!-- Authentication Links -->
                @guest
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Prijava') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registracija') }}</a>
                            </li>
                        @endif
                    </ul>
                @else
                    <ul class="navbar-nav ml-2">
                        <li class="nav-item dropdown">
                            <a style="color:whitesmoke" id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('users') }}/{{ Auth::user()->id }}">
                                    {{ __('Profil') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Odjava') }}
                                </a>
                                @if(Auth::user()->type==='admin')
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">
                                        {{ __('Administracija') }}
                                    </a>
                                @endif

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    </ul>
                @endguest

            </div>
        </div>
    </nav>

    <main class="py">
        @yield('content')
    </main>

</div>
</body>
<footer style="background-color: #32383e; height: 80px; width:100%; position:fixed; bottom:0;">
    <br>
    <p style="text-align: center; color:whitesmoke;">© Marko Džoić - 2019</p>
</footer>
</html>
