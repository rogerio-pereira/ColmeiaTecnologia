<nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top">
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
                <img src="{{ asset('img/colmeia-tecnologia.png') }}" title='{{ config('app.name') }}' class='img-responsive'>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{route('index')}}#home" class='site'>Home</a></li>
                <li><a href="{{route('index')}}#servicos" class='site'>Serviços</a></li>
                <li><a href="{{route('index')}}#portifolio" class='site'>Portifólio</a></li>
                <li><a href="{{route('index')}}#contato" class='site'>Contato</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
            </ul>
        </div>
    </div>
</nav>