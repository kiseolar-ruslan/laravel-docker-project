@extends('layouts.base')

@section('page.title', 'Blog Posts')

@section('content')
    <h1 class="mb-5">Blog Posts</h1>

    @if(!empty($posts))
        @foreach($posts as $post)
            <div class="mb-4">
                <h5>
                    <a href="{{route('blog.show', $post->id)}}">
                        {{$post->title}}
                    </a>
                </h5>

                <p>
                    {{$post->content}}
                </p>
            </div>
        @endforeach
    @else
        <p>Немає постів!</p>
    @endif
@endsection
