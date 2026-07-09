@extends('layouts.base')

@section('page.title', $post->title)

@section('content')
    <div style="text-align: left; padding-left: 10px">
        <a href="{{route('blog.index')}}"><- Назад</a>
    </div>

    <h1 class="mb-5">{{$post->title}}</h1>

    <p>{{$post->content}}</p>
@endsection
