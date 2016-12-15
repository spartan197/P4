@extends('layouts.master')

@section('title')
    Delete Your Mustang Details
@endsection

@section('content')
    @if(sizeof($mymustangs) == 0)
           <h3>You have not added any Mustangs to your account.<br>
          <a href='/mymustang'>Click here to add your Mustang's details.</a></h3>
    @else
        <h1>  Delete Your Mustang Details</h1>
        <form method='POST' action='/delete'>

            {{ method_field('DELETE') }}
            {{ csrf_field() }}

            <h2>Id:  &nbsp;&nbsp;
            <select name='id'>
              @foreach($mymustangs as $mymustang)
              <option value="{{ $mymustang->id }}">{{ $mymustang->id }}</option>
              @endforeach
            </select> </h2>
            <br>
            <input type='submit' class='button' value='Delete'>

        </form>
    @endif

@endsection
