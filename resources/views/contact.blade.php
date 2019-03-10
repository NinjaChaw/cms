@extends('layouts.app')


@section('contact')

    <h1>contact page here</h1>


    @if(count($people))


        <ul>

        @foreach($people as $person)

            <li>{{$person}}</li>


        @endforeach

        </ul>


    @endif



    @stop

@section('footer')

    {{--<script>alert('Hi there')</script>--}}

@stop