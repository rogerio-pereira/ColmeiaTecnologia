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
                <th width="250px">Imagem</th>
                <th width="100px">Ativo</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($banners as $banner)
            <tr>
                <td></td>
                <td>{{$banner->id}}</td>
                <td>{{$banner->title}}</td>
                <td>{{$banner->image}}</td>
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
@endsection
