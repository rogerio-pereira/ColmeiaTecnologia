<div id="homeCarousel" class="carousel slide carouselHome" data-ride="carousel">
    <a name='home'></a>
    <!-- Indicators -->
    <ol class="carousel-indicators">
        @php
            $activeIndicator = 'active';
        @endphp

        @for ($i=0; $i<count($banners); $i++) 
            @if($i==1)
                @php
                    $activeIndicator = '';
                @endphp
            @endif

            <li 
                data-target="#homeCarousel" 
                data-slide-to="{{$i}}" 
                class='{{$activeIndicator}}'
            ></li>
        @endfor
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        @php
            $item = 0;
            $active = 'active';
        @endphp

        @foreach ($banners as $banner)
            @if($item == 1)
                @php
                    $active = '';
                @endphp
            @endif

            <div class="item {{$active}}">
                <img 
                    src='{{ $banner->image }}' 
                    alt='{{ $banner->title }}' 
                    title='{{ $banner->title }}'
                    class='img-responsive'
                >
                <div class="carousel-caption">
                    <div>
                        <h1>
                            {{ $banner->title }}
                        </h1><br/>
                        
                        {!! $banner->description !!}
                    </div>
                </div>
            </div>

            @php
                $item++;
            @endphp
        @endforeach
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>