@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype'=> 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'title'])}}
        </div>
        <div class="form-group">
            {{Form::label('Body', 'Body')}}
            {{Form::textarea('body', '', ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'Body'])}}
        </div>
        {{-- <div class="form-group">
            {{Form::file("profile-image", ["class" => "form-group",])}}
        </div> --}}
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        <div class="form-group">
            {{Form::submit('Submit', ["class" => 'btn btn-primary',])}}
        </div>
        
    {!! Form::close() !!}
    <br>


@endsection