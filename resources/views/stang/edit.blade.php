@extends('layouts.master')

@section('title')
    Editing My Mustang's Details
@stop

@section('content')
    <h2>Editing My Mustang's Details</h2><br>
        <form method='POST' action='/edit'>

            {{ method_field('PUT') }}
            {{ csrf_field() }}

            <input name='id' value='{{$must->id}}' type='hidden'>

            <div class='form-group'>
               <label>Name: </label>
                <input
                    type='text'
                    id='name'
                    name='name'
                    value='{{ old('name', $must->name) }}'
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
                   value='{{ old('color', $must->color) }}'
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
                   value='{{ old('horsepower', $must->horsepower) }}'
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
                   value='{{ old('torque', $must->torque) }}'
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
                    value='{{ old('fuel_economy', $must->fuel_economy) }}'
                >
                <div class='error'>{{ $errors->first('fuel_economy') }}</div>
             </div>
            <br>

            <div class='form-instructions'>
                *All fields are required
            </div>

            <button type="submit" class="button">Update My Mustang</button>

            <div class='error'>
                @if(count($errors) > 0)
                    Please correct the errors above and try again.
                @endif
            </div>

        </form>

@stop
