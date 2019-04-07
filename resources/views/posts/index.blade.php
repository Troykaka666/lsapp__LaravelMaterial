@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <a href="/posts/create" class="btn btn-primary mb-3">Create Post</a>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="jumbotron">
                
            <h4><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h4>
            <small class="lead">Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
@endsection