@extends('layouts.main-admin')

@section('title','Group List')

@section('content')

<div class="action-bar">
    <a href="{{ route('group-create-form')}}">
        <button class="action">
            <img src="https://img.icons8.com/material-outlined/24/000000/add.png" />New Group
        </button>
    </a>
</div>


<table class="list">
    <tr>
        <th>Logo</th>
        <th>Name</th>
        <th>Fandom Name</th>
    </tr>
    @foreach($groups as $group)
    <tr>
        <td><img width="80" src="{{$group->logo}}" alt=""></td>
        <td><a href="{{route('group-detail',['id' => $group->id])}}">{{$group->name}}</a> </td>
        <td>{{$group->fandom}}</td>
    </tr>
    @endforeach
</table>

@endsection