@extends('layouts.master')

@section('title', 'Mustangs')

@section('content')
    <h1>Mustangs</h1>

    {{-- Form to accept user input --}}
    <form method='POST' action='/edit'>

        {{ csrf_field() }}
        <h2>Id:  &nbsp;&nbsp;
        <select name='id'>
          @foreach($mymustangs as $mymustang)
          <option value="{{ $mymustang->id }}">{{ $mymustang->id }}</option>
          @endforeach
        </select> </h2>
        <br>
        <input type='submit' class="button" value='Get Details'>


    </form>
@endsection
