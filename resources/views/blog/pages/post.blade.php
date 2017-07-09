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
@endsection

@section('meta')
@endsection