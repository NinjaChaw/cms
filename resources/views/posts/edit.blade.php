@extends('layouts.app')


@section('content')


    <h1>Edit post</h1>




    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['PostsController@update', $post->id]]) !!}

        {{csrf_field()}}

    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=>'form_control']) !!}

    {!! Form::submit('Create post', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}




    {!! Form::open( ['method'=>'DELETE', 'action'=>['PostsController@delete', $post->id]]) !!}

    {!! Form::submit('Delete post', ['class'=>'btn btn-danger']) !!}

    {!! Form::close() !!}

@endsection