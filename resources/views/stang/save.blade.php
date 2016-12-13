@extends('layouts.master')

@section('title', 'Generate Random Text')

{{-- Displaying random text --}}
@section('content')

  <h2>Your {{ $name }} was added.
  <br><br>
  <a href='/mymustang'>Click here to add another one</a><h2>


@endsection
