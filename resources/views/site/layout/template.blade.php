<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {!! Html::style('/css/style.min.css') !!}
</head>
    <body>
        <header>
            @include('site.layout.menu')
        </header>

        <div class='content'>
            @yield('content')
        </div>

        <footer class='text-center'>
            &copy; 2017 - 
            <a href='http://colmeiatecnologia.com.br' alt='Colmeia Tecnolgia' title='Colmeia Tecnolgia'>
                Colmeia Tecnolgia
            </a>
        </footer>
    </body>

        <!-- Scripts -->
        {!! Html::script('/js/jquery.min.js') !!}
        {!! Html::script('/js/bootstrap.min.js') !!}
        {!! Html::script('/js/scrollreveal.min.js') !!}
        {!! Html::script('/js/jquery.maskedinput.min.js') !!}
        {!! Html::script('/js/jquery.price_format.min.js') !!}
        {!! Html::script('/js/jsInit.min.js') !!}
        
        @yield('post-script')
</html>
