@extends('sistema.layouts.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Novo Cliente</h1>
    </div>

    @include('sistema.layouts.errors')

    {!! Form::open(['route' => 'clients.store']) !!}
        @include('sistema.clients._form')
    {!! Form::close() !!}
@endsection

@section('scripts')
    {{--MASCARAS--}}
    {!! Html::script('/js/jquery.maskedinput.min.js') !!}
    {!! Html::script('/js/jquery.price_format.min.js') !!}
    {!! Html::script('/js/jsMascaras.min.js') !!}
@endsection