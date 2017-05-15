@extends('site.layout.template')

@section('content')
    <section id='sectionCarousel'>
        @include('site.home.carousel')
    </section>

    <section id='sectionServicos'>
        @include('site.home.servicos')
    </section>

    <section id='sectionPortifolio' class='whiteSection'>
        @include('site.home.portifolio')
    </section>

    <section id='sectionContato'>
        @include('site.home.contato')
    </section>
@endsection
