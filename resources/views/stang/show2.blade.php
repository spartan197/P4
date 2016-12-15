@extends('layouts.master')

@section('title', 'Mustangs')

@section('content')
    <h1>Edit your Mustang</h1>

      @if(sizeof($mymustangs) == 0)
           <h3>You have not added any Mustangs to your account.<br>
          <a href='/mymustang'>Click here to add your Mustang's details.</a></h3>
      @else

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
      @endif

    </form>
@endsection
