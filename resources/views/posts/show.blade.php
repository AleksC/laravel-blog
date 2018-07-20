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
    <ul>
        @foreach($post->comments as $comment) 
            <li> 
                <p>{{ $comment->author }} says:</p> 
                <p>{{ $comment->text }}</p> 
            </li>
        @endforeach
    </ul>
</div>
@endsection