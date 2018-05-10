<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        @include('site.layout.meta')

        <!-- Styles -->
        {!! Html::style('/css/style.min.css') !!}
    </head>
    <body>
        @include('site.layout.analytics')
        @if (Session::has('mensagem'))
            <div class='alert alert-success col-md-4 col-md-offset-4 text-center' role="alert">
                {{Session::get('mensagem')}}
            </div>
        @endif

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

        <script>
            window.scrollTo(0, 0);
            $('a').click(function(){
                $('html, body').animate({
                    scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
                }, 500);
                return false;
            });
        </script>

        {{--Mautic--}}
        <script>
            (function(w,d,t,u,n,a,m){w['MauticTrackingObject']=n;
                w[n]=w[n]||function(){(w[n].q=w[n].q||[]).push(arguments)},a=d.createElement(t),
                m=d.getElementsByTagName(t)[0];a.async=1;a.src=u;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://marketing.colmeiatecnologia.com.br/mtc.js','mt');

            mt('send', 'pageview');
        </script>
        
        @yield('post-script')
</html>
