@extends('layouts.master')

@section('content')
<div class="blog-post">
    <form action='/register' method='POST'>

    {{ csrf_field() }}

    <div class="form-group">
        <label for="text">Username: </label>
        <input type="text" class="form-control" id="username" name="username">
    </div>
    @include('partials.error-message', ['fieldName' => 'username'])
    <div class="form-group">
        <label for="age">Age: </label>
        <input type="number" class="form-control" id="age" name="age">
    </div>
    @include('partials.error-message', ['fieldName' => 'age'])
    <div class="form-group">
        <label for="email">Email: </label>
        <input type='email' class="form-control" name="email" id="email"/>
    </div>
    @include('partials.error-message', ['fieldName' => 'email'])
    <div class="form-group">
        <label for="bodyOfYourBlog">Password: </label>
        <input type='password' class="form-control" name="password" id="password"/>
    </div>
    @include('partials.error-message', ['fieldName' => 'password'])
    <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection
