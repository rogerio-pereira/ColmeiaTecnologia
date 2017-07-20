@extends('sistema.layouts.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Clientes</h1>
    </div>

    <div class='col-md-12 text-center margin-bottom'>
        <a href='{{url('/clients/create')}}' alt='Cadastrar' title='Cadastrar' class='btn btn-default'>
            Cadastrar
        </a>
    </div>

    @include('layouts.errors')

    <div class='col-md-12'>
        <table class='table table-bordered table-hover table-responsive'>
            <thead>
                <tr>
                    <th width='100px'>Ações</th>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th width="130px">Telefone</th>
                    <th width="130px">Celular</th>
                    <th>Endereço</th>
                </tr>
            </thead>
            <tbody>
                @forelse($clients as $client)
                    <tr>
                        <td>
                            {!! Form::open(['route' => ['clients.destroy', $client->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                                {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}

                            <a href='clients/{{$client->id}}/edit' class='btn btn-info'>
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                        </td>
                        <td>{{$client->id}}</td>
                        <td>{{$client->name}}</td>
                        <td>{{$client->email}}</td>
                        <td>{{$client->client->phone}}</td>
                        <td>{{$client->client->cellphone}}</td>
                        <td>
                            {{$client->client->street}}, {{$client->client->number}}.

                            @if(isset($client->client->complement))
                                {{$client->client->complement}}.
                            @endif

                            {{$client->client->neighborhood}}. {{$client->client->city}} - {{$client->client->state}}. {{$client->client->zipcode}}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan='7' class='text-center'>
                            Nenhum Cliente Cadastrado
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
