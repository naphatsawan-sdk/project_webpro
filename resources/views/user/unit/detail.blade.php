@extends('layouts.main')

@section('title',$unit->name)

@section('content')

<div>
    @foreach($unit->group->units as $unit)
    <a href="{{route('user-unit-detail',['id' => $unit->id])}}">{{$unit->name}}</a>
    @endforeach
</div>

<div class="logo-grid">
    @foreach($artists as $artist)
    <div>
        <a class="channel-name" href="{{route('user-artist-detail',['id' => $artist->id])}}">
            <img class="artist-photo" src="{{$artist->photo}}" alt="">
            <p>{{$artist->name}}</p>
        </a>
    </div>
    @endforeach
</div>

<div>
    @foreach($music as $m)
    <h1>{{$m->name}}</h1>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$m->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    @endforeach
</div>

@endsection