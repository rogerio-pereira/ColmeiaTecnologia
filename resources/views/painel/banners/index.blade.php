@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Banners</h1>
    </div>

    <div class='col-md-12 text-center'>
        <a href='{{url('/banners/create')}}' alt='Cadastrar' title='Cadastrar' class='btn btn-default'>
            Cadastrar
        </a>
        <br/>
        <br/>
    </div>

    <table class="table table-responsive table-striped table-bordered table-hovered">
        <thead>
            <tr>
                <th width="100px">Ações</th>
                <th width="100px">ID</th>
                <th>Titulo</th>
                <th width="150px">Imagem</th>
                <th width="100px">Ativo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($banners as $banner)
            <tr>
                <td>
                    {!! Form::open(['route' => ['banners.destroy', $banner->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                    {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    <a href='banners/{{$banner->id}}/edit' class='btn btn-info'>
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                </td>
                <td>{{$banner->id}}</td>
                <td>{{$banner->title}}</td>
                <td>
                    <img src='{{$banner->image}}' class='img-responsive'>
                </td>
                <td></td>
            </tr>
            @empty
            <tr>
                <td colspan='5' class='text-center'>
                    Nenhum Banner cadastrado
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class='col-md-12 text-center'>
        {{$banners->render()}}
    </div>
@endsection
