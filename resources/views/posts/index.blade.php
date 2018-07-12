@extends('pages.layouts.app')

@section('content')
    <h1>Posts</h1>

    @if(count($posts) > 0)
        
        @foreach($posts as $post)
            <div class = "well">
            <h1><a href = "/posts/{{$post->id}}">{{$post->title}}</a></h1>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
    
    @else
        <p>No posts Found</p>
    @endif
@endsection