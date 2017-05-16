<div id="homeCarousel" class="carousel slide carouselHome" data-ride="carousel">
    <a name='home'></a>
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#homeCarousel" data-slide-to="1"></li>
        <li data-target="#homeCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{ asset('img/assistencia-tecnica.jpg') }}" alt='Assistencia Técnica Especializada' title='Assistencia Técnica Especializada'>
            <div class="carousel-caption">
                <div>
                    <h1>
                        Assistencia Técnica Especializada
                    </h1><br/>
                    <a href='#' class='btn btn-primary'>Entre em contato</a>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="{{ asset('img/desenvolvimento-sites.jpg') }}" alt='Desenvolviemento de Sites' title='Desenvolviemento de Sites'>
            <div class="carousel-caption">
                <div>
                    <h1>
                        Desenvolvimento de sites
                    </h1><br/>
                    <a href='#' class='btn btn-primary'>Faça um orçamento</a>
                </div>
            </div>
        </div>

        <div class="item">
            <img src="{{ asset('img/desenvolvimento-sistemas.jpg') }}" alt='Desenvolvimento de sistemas' title='Desenvolvimento de sistemas'>
            <div class="carousel-caption">
                <div>
                    <h1>
                        Desenvolvimento de sistemas
                    </h1><br/>
                    <a href='#' class='btn btn-primary'>O que você precisa?</a>
                </div>
            </div>
        </div>
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