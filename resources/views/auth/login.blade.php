@extends('layouts.master')

@section('content')
<div class="blog-post">
    <form action='/login' method='POST'>

    {{ csrf_field() }}
    
    
    @include('partials.error-message', ['fieldName' => 'message'])

    <div class="form-group">
        <label for="email">E-mail: </label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    @include('partials.error-message', ['fieldName' => 'username'])
    <div class="form-group">
        <label for="bodyOfYourBlog">Password: </label>
        <input type='password' class="form-control" name="password" id="password" required>
    </div>
    @include('partials.error-message', ['fieldName' => 'password'])
    <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection
