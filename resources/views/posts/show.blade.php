@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary mb-3">Go Back</a>
    <h1 class="text-uppercase font-weight-bold">{{$post->title}}
        <hr>
    <small class="text-muted">{{$post->created_at}} by {{$post->user->name}}</small>
    </h1>
    <img style="width:30%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
    <p class="lead">{!! $post->body !!}</p>
    <hr>
    
    {{-- @if(!Auth::guest())
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>

    {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'d-inline float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
    @endif --}}
    @auth
        @if (Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>
        {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'d-inline float-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
    @endauth
    @guest
        <h2>Login to see more</h2>
    @endguest
@endsection