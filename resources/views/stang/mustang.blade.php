@extends('layouts.master')

@section('title', 'Mustangs')

@section('content')
    <h1>Mustangs</h1>

    {{-- Form to accept user input --}}
    <form method='POST' action='/mustang'>

        {{ csrf_field() }}
        <h2>Year of manufacture:  &nbsp;&nbsp;
        <select name='year'>
           <option value="1965">1965</option>
           <option value="1970">1970</option>
           <option value="1981">1981</option>
           <option value="1999">1999</option>
           <option value="2007">2007</option>
           <option value="2016">2016</option>
        </select> </h2>
        <br>
        <input type='submit' class="button" value='Generate Text'>


    </form>
@endsection
