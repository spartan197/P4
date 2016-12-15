@extends('layouts.master')

@section('title')
    My Mustang
@stop

@section('content')

    <h2>Since Mustang is a modifiable sports car, every Mustang is different from the other.<br>You can add your Mustang's specification here.</h2><br>

    <form method='POST' action='/mymustang'>

        {{ csrf_field() }}

        <div class='form-group'>
           <label>Name: </label>
            <input
                type='text'
                id='name'
                name='name'
                value='{{ old('name', 'Mustang GT') }}'
            >
           <div class='error'>{{ $errors->first('name') }}</div>
        </div>
        <br>

        <div class='form-group'>
           <label>Color: </label>
           <input
               type='text'
               id='color'
               name='color'
               value='{{ old('color', 'Black') }}'
           >
           <div class='error'>{{ $errors->first('color') }}</div>
        </div>
        <br>

        <div class='form-group'>
           <label>Horsepower: </label>
           <input
               type='text'
               id='horsepower'
               name='horsepower'
               value='{{ old('horsepower', '300') }}'
           >
           <div class='error'>{{ $errors->first('horsepower') }}</div>
        </div>
        <br>

        <div class='form-group'>
           <label>Torque: </label>
           <input
               type='text'
               id='torque'
               name='torque'
               value='{{ old('torque', '450') }}'
           >
           <div class='error'>{{ $errors->first('torque') }}</div>
        </div>
        <br>

        <div class='form-group'>
            <label>Fuel Economy: </label>
            <input
                type='text'
                id='fuel_economy'
                name='fuel_economy'
                value='{{ old('fuel_economy', '12') }}'
            >
            <div class='error'>{{ $errors->first('fuel_economy') }}</div>
         </div>
        <br>

        <div class='form-instructions'>
            *All fields are required
        </div>

        <button type="submit" class="button">Add My Mustang</button>

        <div class='error'>
            @if(count($errors) > 0)
                Please correct the errors above and try again.
            @endif
        </div>

    </form>
@stop
