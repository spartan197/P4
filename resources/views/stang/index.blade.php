@extends('layouts.master')


@section('title')
    Mustangs ...!!!
@stop


{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific stylesheets.
--}}
@section('head')
    <link href="/css/mustang.css" type='text/css' rel='stylesheet'>
@stop


@section('content')

      @foreach($mustangs as $mustang)
          <h2>{{ $mustang->name }}</h2>
          <img src='{{ $mustang->picture }}'>
      @endforeach

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
