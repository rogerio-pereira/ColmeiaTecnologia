@extends('blog.layout.template')

@section('content')
    <div class='row margin-top-g'>
        @forelse ($posts as $post)
            @php
                $urlCategory = App\Http\Controllers\Util\UrlController::friendlyUrl($post->category->title);
                $urlTitle = App\Http\Controllers\Util\UrlController::friendlyUrl($post->title);
            @endphp

            <div class='col-md-6 listPosts'>
                <a href='{{url($urlCategory.'/'.$urlTitle)}}'>
                    <img src='{{$post->image}}' alt='{{$post->title}}' title='{{$post->title}}' class='img-responsive'>
                    <h1>
                        {{$post->title}}
                    </h1>
                </a>
                <hr>
            </div>
        @empty
            @if(isset($search))
                <div class='col-md-12 text-center'>
                    Nenhum post encontrado que contenha "{{$search}}" no título.
                </div>
            @else
                <div class='col-md-12 text-center'>
                    Nenhum post cadastrado.
                </div>
            @endif
        @endforelse
    </div>

    {{--Paginação--}}
    <div class='col-md-12 text-center'>
        {{$posts->render()}}
    </div>
@endsection