@extends('painel.layout.layout')

@section('content')
    <div class='col-md-12 text-center'>
        <h1>Posts</h1>
    </div>

    <div class='col-md-12 text-center'>
        <a href='{{url('/posts/create')}}' alt='Cadastrar' title='Cadastrar' class='btn btn-default'>
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
                <th>Descrição</th>
                <th width="150px">Imagem</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
            <tr>
                <td>
                    {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete', 'style' => 'display: inline']) !!}
                    {!! Form::button('<i class="fa fa-trash" aria-hidden="true"></i>', ['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    <a href='posts/{{$post->id}}/edit' class='btn btn-info'>
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                </td>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>
                    <img src='{{$post->image}}' class='img-responsive'>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan='5' class='text-center'>
                    Nenhuma Post cadastrado
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class='col-md-12 text-center'>
        {{$posts->render()}}
    </div>
@endsection
