@extends('layouts.master')

@section('content')
<div class="blog-post">
    <form action='/' method='POST'>

    {{ csrf_field() }}

    <div class="form-group">
        <label for="text">Title: </label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter the title of your blog post for bloggin'">
    </div>
    @include('partials.error-message', ['fieldName' => 'title'])
    <div class="form-group">
        <label for="bodyOfYourBlog">Body of your blogging blog post</label>
        <textarea class="form-control" name="body" id="bodyOfYourBlog" placeholder="Type your thoughts and opinions here..." rows=10 ></textarea>
    </div>
    @include('partials.error-message', ['fieldName' => 'body'])
    <div class="form-group form-check">
        <input type="checkbox" name="published" value='1' checked class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Publish article immediately?</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
