@extends('layouts.main')

@section('title','Artists')

@section('content')


    <div class="logo-grid">
        @foreach($group->artists as $artist)
        <div>
            <a class="channel-name" href="{{route('user-artist-detail',['id' => $artist->id])}}">
                <img class="artist-photo" src="{{$artist->photo}}" alt="">
                <p>{{$artist->name}}</p>
            </a>
        </div>
        @endforeach
    </div>

    <h1>Video</h1>
    <div class="video-container">
        @foreach($group->music as $music)
        <div class="video">
            <iframe width="500" height="300" src="https://www.youtube.com/embed/{{$music->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <a class="m-name" href="https://www.youtube.com/watch?v={{$music->link}}"><p>{{ $music->name }}</p></a>
        </div>
        @endforeach
    </div>


    <h2 class="blog-home">NEWS</h2>
    <div class="blog-grid">
        @foreach($group->blogs as $blog)
        <div class="blog-item">
            <a class="channel-name" href="{{route('user-blog-detail',['id' => $blog->id])}}">
                <img class="channel-logo" src="{{$blog->photo}}" alt="">
                <p class="blog-title">{{$blog->title}}</p>
                <p class="name">{{$blog->group->name}}</p>
            </a>
        </div>
        @endforeach
    </div>
@endsection