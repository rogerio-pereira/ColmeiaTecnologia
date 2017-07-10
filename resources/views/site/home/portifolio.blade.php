<div class='container' data-scroll-reveal="enter left move 20px">
    <a name='portifolio'></a>
    <h1 class='text-center '>
        Portifólio
    </h1>

    <div class='row'>
        @foreach ($portfolios as $portfolio)
            <div class='col-sm-4 col-xs-12 text-center portifolio-item'>
                <a href='{{$portfolio->url}}' target="_blank"  alt='{{$portfolio->name}}' title='{{$portfolio->name}}'>
                    <figure class='portifolio'>
                        <img src='{{$portfolio->image}}' alt='{{$portfolio->name}}' title='{{$portfolio->name}}' class='img-responsive'>
                        <figcaption>
                            {{$portfolio->name}}
                        </figcaption>
                    </figure>
                </a>
            </div>
        @endforeach
    </div>
</div>