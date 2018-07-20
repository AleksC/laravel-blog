@extends('layouts.master')

@section('comment')
<div class="blog-post">
    <form action='/' method='POST'>

    {{ csrf_field() }}

    <div class="form-group">
        <label for="author">Author: </label>
        <input type="text" class="form-control" id="author" name="title" placeholder="Your name:">
    </div>
    @include('partials.error-message', ['fieldName' => 'author'])
    <div class="form-group">
        <label for="text">Body of your blogging blog post</label>
        <textarea class="form-control" name="text" id="text" placeholder="Type your thoughts and opinions here..." rows=10 ></textarea>
    </div>
    @include('partials.error-message', ['fieldName' => 'body'])
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
