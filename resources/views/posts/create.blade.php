@extends('layouts.app')


@section('content')


    <h1>Create post</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'PostsController@store', 'files'=>true]) !!}

    {{--<form method="post" action="/posts">--}}

    <div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=>'form_control']) !!}
    </div>


    <div class="form-group">
        {!! Form::file('file', ['class'=>'form_control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Create post', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}


    @if(count($errors) > 0)

        <div class="alert alert-danger">
            <ul>
                @foreach($erors->all() as #error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>

    @endif

@endsection
