@extends('blog.layout.template')

@section('content')
    @php
        $title = $post->title;
        $description = $post->description;
        $image = $post->image;
    @endphp

    <h1 class='text-center'>{{$post->title}}</h1>

    <img src='{{$post->image}}' alt='{{$post->title}}' title='{{$post->title}}' class='img-responsive'>

    {!!$post->text!!}

    <p class='margin-top'>
        @php
            $friendlyAuthor = App\Http\Controllers\Util\UrlController::friendlyUrl($post->author->name);
        @endphp

        <strong>Autor</strong>: 
        <a href='/autor/{{$friendlyAuthor}}' title='{{$post->author->name}}'>
            {{$post->author->name}}
        </a>
    </p>
@endsection

@section('meta')
@endsection