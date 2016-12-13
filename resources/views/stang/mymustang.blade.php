@extends('layouts.master')

@section('title', 'My Mustang')

@section('content')
    <h1>My Mustang</h1>
    {{-- Form to accept user input --}}
    <form method='POST' action='/loremipsum'>

        {{ csrf_field() }}

        <h2>Year of manufacture:  &nbsp;&nbsp;
        <select name=year>
           <option value="1965">1965</option>
           <option value="1970">1970</option>
           <option value="1981">1981</option>
           <option value="1999">1999</option>
           <option value="2007">2007</option>
           <option value="2016">2016</option>
        </select> </h2>
        <h2>No. of paragraphs:  &nbsp;&nbsp;
        <input type='text' name='NoOfParagraphs' maxlength="2" value='{{ old("title") }}'></h2>
        <br>
        <input type='submit' class="button" value='Generate Text'>

        {{-- Throws an error if the input is anything else other than a number between 1-99 --}}
        @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>
@endsection
