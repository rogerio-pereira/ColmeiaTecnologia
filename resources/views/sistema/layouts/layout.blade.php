<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        {{--Styles--}}
        <link href="{{ asset('css/sistema/style.min.css') }}" rel="stylesheet">
        @yield('css')

        {{--JS Libs--}}
        {!! Html::script('/js/jquery.min.js') !!}
        {!! Html::script('/js/bootstrap.min.js') !!}
    </head>
    <body>
        <header>
            <nav class="navbar navbar-default navbar-static-top navbar-inverse">
                <div class="container">
                    <div class="navbar-header">

                        <!-- Collapsed Hamburger -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!-- Branding Image -->
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name') }}
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            @if (Auth::guard('system')->user())
                                @if(Auth::guard('system')->user()->is_client)
                                    @include('sistema.layouts.menu-client')
                                @else
                                    @include('sistema.layouts.menu-technician')
                                @endif
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::guard('system')->user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        {{--<li>
                                            <a href="#">
                                                Alterar Senha
                                            </a>
                                        </li>--}}
                                        <li>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li><a href='{{url('/login')}}'>Login</a></li>
                                <li><a href='{{url('/register')}}'>Register</a></li>
                            @endif
                        </ul>
                    </ul>
                </div>
            </div>
        </nav>
        </header>

        <section>
            <div class='container'>
                @yield('content')
            </div>
        </section>

        <div class='clearfix'></div>

        <footer class='text-center'>
            &copy; 2017 - 
            <a href='http://colmeiatecnologia.com.br' alt='Colmeia Tecnolgia' title='Colmeia Tecnolgia'>
                Colmeia Tecnolgia
            </a>
        </footer>

        @yield('scripts')
    </body>
</html>
