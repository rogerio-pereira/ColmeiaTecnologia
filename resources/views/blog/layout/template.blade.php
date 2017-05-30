<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Blog - {{ config('app.name') }}</title>

        <!-- Styles -->
        {!! Html::style('/css/blog/style.min.css') !!}
    </head>

    <body>
        @include('site.layout.analytics')

        <header>
            @include('blog.layout.menu')
        </header>

        <div class='whiteSection content'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-9'>
                        @yield('content')
                    </div>
                    <div class='col-md-3'>
                        <aside>
                            <div class='newsletter text-center'>
                                <h1>Newsletter</h1>

                                {!! Form::open(['route' => 'newsletter.create',  'class' => 'form']) !!}
                                    {!! Form::input('email', 'email', null, ['placeholder' => 'Receba nossas novidades!', 'class' => 'form-control', 'required']) !!}
                                    
                                    {!! Form::submit('Receber', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close() !!}
                            </div>

                            <div class='busca text-center'>
                                <h1>Busca</h1>

                                {!! Form::open(['route' => 'newsletter.create',  'class' => 'form']) !!}
                                    {!! Form::input('text', 'busca', null, ['placeholder' => 'O que está buscando?', 'class' => 'form-control', 'required']) !!}
                                    
                                    {!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close() !!}
                            </div>

                            <div class='categorias'>
                                <h1 class='text-center'>Categorias</h1>

                                <ul>
                                    <li>
                                        <a href='/categoria/_categoria_' alt='_categoria_' title='_categoria_'>
                                            _categoria_
                                        </a>
                                    </li>
                                    <li>
                                        <a href='/categoria/_categoria_' alt='_categoria_' title='_categoria_'>
                                            _categoria_
                                        </a>
                                    </li>
                                    <li>
                                        <a href='/categoria/_categoria_' alt='_categoria_' title='_categoria_'>
                                            _categoria_
                                        </a>
                                    </li>
                                    <li>
                                        <a href='/categoria/_categoria_' alt='_categoria_' title='_categoria_'>
                                            _categoria_
                                        </a>
                                    </li>   
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        <footer class='text-center'>
            &copy; 2017 - 
            <a href='http://colmeiatecnologia.com.br' alt='Colmeia Tecnolgia' title='Colmeia Tecnolgia'>
                Colmeia Tecnolgia
            </a>
        </footer>
    </body>

    <script>
        window.scrollTo(0, 0);
        $('.site').click(function(){
            $('html, body').animate({
                scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
            }, 500);
            return false;
        });
    </script>
</html>