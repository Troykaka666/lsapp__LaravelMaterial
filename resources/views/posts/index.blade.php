@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <a href="/posts/create" class="btn btn-primary mb-3">Create Post</a>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                    </div>  
                    <div class="col-md-4 col-sm-4">
                        <h4><a href="/posts/{{$post->id}}">{{ $post->title }}</a></h4>
                        <small class="lead">Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>     
                </div>   
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif
@endsection