<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        @include('site.layout.meta')

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

                                {!! Form::open(['route' => 'subscription.create',  'class' => 'form']) !!}
                                    <div class='form-group'>
                                        {!! Form::input('email', 'email', null, ['placeholder' => 'Receba nossas novidades!', 'class' => 'form-control', 'required']) !!}
                                    </div>
                                    
                                    {!! Form::submit('Receber', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close() !!}
                            </div>
    
                            <div class='alertMessage'>
                                @include('layouts.errors')
                            </div>

                            <div class='busca text-center'>
                                <h1>Busca</h1>

                                {!! Form::open(['route' => 'busca',  'class' => 'form']) !!}
                                    <div class='form-group'>
                                        {!! Form::input('text', 'busca', null, ['placeholder' => 'O que está buscando?', 'class' => 'form-control', 'required']) !!}
                                    </div>
                                    
                                    {!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close() !!}
                            </div>

                            <div class='categorias'>
                                <h1 class='text-center'>Categorias</h1>

                                <ul>
                                    @foreach ($categoriesList as $category)
                                        @php
                                            $categoryName = App\Http\Controllers\Util\UrlController::friendlyUrl($category->title);
                                        @endphp

                                        <li>
                                            <a 
                                                href='/{{$categoryName}}' 
                                                title='{{$categoryName}}'
                                            >
                                                {{$category->title}}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

        <footer class='text-center'>
            &copy; 2017 - 
            <a href='http://colmeiatecnologia.com.br' title='Colmeia Tecnolgia'>
                Colmeia Tecnolgia
            </a>
        </footer>
    </body>

    <script>
        {!! Html::script('/js/jquery.min.js') !!}
        {!! Html::script('/js/bootstrap.min.js') !!}
    </script>
</html>