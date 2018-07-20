@extends('layouts.master')

@section('content')
    @if(auth()->check())
    <div class='blog-post-meta'>
    <a href="{{ route('create-post') }}"><button class="btn btn-primary">Create new post</button></a>
    </div>
    @endif
    @foreach($posts as $post)


    <div class="blog-post">
        <h2 class="blog-post-title"><a href="{{ route('single-post', ['id' => $post->id]) }}"> {{ $post->title }} </a> </h2>
        <p class="blog-post-meta">{{ $post->created_at }}</p>
        by: <a href="{{ '/users/' . $post->user->id }}" class="blog-post-meta">{{ $post->user->name }}</a>
        <p class="blog-post-meta">
            @foreach($post->tags as $tag)
                <a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a>
                @endforeach
            </p>
        
        <p>
        {{ $post->body }}
        </p>
        
    </div>
    @endforeach
@endsection