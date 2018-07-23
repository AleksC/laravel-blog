@extends('layouts.master')

@section('content')
<div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
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
    @include('posts.add-comment')
        @foreach($post->comments as $comment)
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">{{ $comment->author }} says: </h6>
                <p class="card-text">{{ $comment->text }}</p>
            </div>
        </div>
        <br>
        @endforeach  
</div>
@endsection