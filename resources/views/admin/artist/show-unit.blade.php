@extends('layouts.main-admin')

@section('title', $artist->name)

@section('content')

<a href="{{ route('artist-detail',['id' => $artist->id])}}"><strong> &lt; Back</strong></a>

<nav>
    <a class="link" href="{{ route('artist-add-unit-form',['id' => $artist->id]) }}">Add Units </a> 
</nav>

<table class="list">
    <tr>
        <th>Unit</th>
        <th></th>
    </tr>
    @foreach($units as $unit)
    <tr>
        <td>{{$unit->name}}</td>
        <td> <a href="{{ route('artist-unit-remove', ['unitId'=> $unit->id, 'artistId' => $artist->id,]) }}">Remove</a></td>
    </tr>
    @endforeach
</table>

@endsection