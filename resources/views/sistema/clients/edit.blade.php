@extends('sistema.layouts.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>
            Alterar Cliente: {{$client->name}}  - ID: {{$client->id}}
        </h1>
    </div>

    <div class='col-md-12'>
        @include('sistema.layouts.errors')
    </div>

    {!! Form::model($client, ['route' => ['clients.update', $client->id], 'method' => 'put']) !!}
        @include('sistema.clients._formEdit')
    {!! Form::close() !!}
@endsection

@section('scripts')
    {{--MASCARAS--}}
    {!! Html::script('/js/jquery.maskedinput.min.js') !!}
    {!! Html::script('/js/jquery.price_format.min.js') !!}
    {!! Html::script('/js/jsMascaras.min.js') !!}
    <script>
        $('#state').val('{{$client->client->state}}');
    </script>
@endsection