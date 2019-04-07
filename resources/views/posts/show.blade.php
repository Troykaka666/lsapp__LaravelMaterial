@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary mb-3">Go Back</a>
    <h1 class="text-uppercase font-weight-bold">{{$post->title}}
        <hr>
    <small class="text-muted">{{$post->created_at}}</small>
    </h1>
    <p class="lead">{{$post->body}}</p>
@endsection