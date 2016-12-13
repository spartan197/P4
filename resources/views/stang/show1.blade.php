@extends('layouts.master')

@section('title', 'Generate Random Text')

{{-- Displaying random text --}}
@section('content')

<table>
    <tr>
        <th><h2>Description</h2></th>
        <th><h2>Value</h2></th>
    </tr>
    <tr>
        <td><h3>Year of manufacture</h3></td>
        <td><h3>{!! $mus->year_of_manufacture !!}</h3></td>
    </tr>
    <tr>
        <td><h3>Name</h3></td>
        <td><h3>{!! $mus->name !!}</h3></td>
    </tr>
    <tr>
        <td><h3>Horsepower</h3></td>
        <td><h3>{!! $mus->horsepower !!}</h3></td>
    </tr>
    <tr>
        <td><h3>Torque</h3></td>
        <td><h3>{!! $mus->torque !!}</h3></td>
    </tr>
    <tr>
        <td><h3>Fuel Economy</h3></td>
        <td><h3>{!! $mus->fuel_economy !!}</h3></td>
    </tr>
    <tr>
        <td><h3>Picture</h3></td>
        <td><img src='{{ $mus->picture }}'></td>
    </tr>
</table>


@endsection
