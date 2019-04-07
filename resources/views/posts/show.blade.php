@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary mb-3">Go Back</a>
    <h1 class="text-uppercase font-weight-bold">{{$post->title}}
        <hr>
    <small class="text-muted">{{$post->created_at}}</small>
    </h1>
    <p class="lead">{!! $post->body !!}</p>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit</a>

    {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'d-inline float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection