@extends('pages.layouts.app')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Welcome to Laravel App</h1>
    <p class="lead">This is basic Laravel CRUD application</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a>
        <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
    </p>
</div>
@endsection 