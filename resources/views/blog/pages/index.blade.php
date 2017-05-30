@extends('blog.layout.template')

@section('content')
    <div class='row'>
        <div class='col-md-6'>
            <a href='/_categoria_/_titulo_'>
                <img src='_img_' alt='_Titulo_' title='_Titulo_' class='img-responsive'>
                <p>
                    _DESCRICAO_
                </p>
            </a>
            <hr>
        </div>
    </div>

    {{--Paginação--}}
@endsection