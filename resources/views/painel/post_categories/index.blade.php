@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Categorias de Posts</h1>
    </div>

    <div class='col-md-12 text-center'>
        <a href='{{url('/categorias_post/create')}}' alt='Cadastrar' title='Cadastrar' class='btn btn-default'>
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
            </tr>
        </thead>
        <tbody>
            @forelse ($postCategories as $postCategory)
            <tr>
                <td>
                    {!! Form::open(['route' => ['categorias_post.destroy', $postCategory->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                    {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    <a href='categorias_post/{{$postCategory->id}}/edit' class='btn btn-info'>
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                </td>
                <td>{{$postCategory->id}}</td>
                <td>{{$postCategory->title}}</td>
            </tr>
            @empty
            <tr>
                <td colspan='3' class='text-center'>
                    Nenhuma Categoria de Post cadastrada
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class='col-md-12 text-center'>
        {{$postCategories->render()}}
    </div>
@endsection
