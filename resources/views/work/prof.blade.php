@extends('layouts/app')
@section('header')
        <div class="header_box bgPurple">
            <div class="rotation_box">
                <img src="/images/pdev.svg" alt="prof" class="prof">
                <h1 class="header--title fntBlue">Professional Development</h1>
            </div>
        </div>
@endsection
@section('nav')
        <div class="box bgPurple">
            <a href="/#about">About</a>
            <a href="/work/">Work</a>
            <a href="/#contact">Contact</a>
        </div>  
@endsection
@section('main')
    {{$a = 1;}}
    @foreach( $works as $w)
        @if($a === 1)
            <div class = "purple left"> 
                <img src="{{$w->cover_url}}" alt="{{$w->title}} cover image">
                <h2>{{$w->title}}</h2>
                <p>{{$w->description}}</p>
                <a href="/work/{{$w->id}}">read more</a>
                {{$a = 2}}
            </div>
        @elseif($a === 2)
            <div class = "blue right"> 
                <img src="{{$w->cover_url}}" alt="{{$w->title}} cover image">
                <h2>{{$w->title}}</h2>
                <p>{{$w->description}}</p>
                <a href="/work/{{$w->id}}">read more</a>
                {{$a = 3}}
            </div>
        @elseif($a ===3)
            <div class = "beige left"> 
                <img src="{{$w->cover_url}}" alt="{{$w->title}} cover image">
                <h2>{{$w->title}}</h2>
                <p>{{$w->description}}</p>
                <a href="/work/{{$w->id}}">read more</a>
                {{$a = 4}}
            </div>
        @elseif($a===4)
            <div class = "green right"> 
                <img src="{{$w->cover_url}}" alt="{{$w->title}} cover image">
                <h2>{{$w->title}}</h2>
                <p>{{$w->description}}</p>
                <a href="/work/{{$w->id}}">read more</a>
                {{$a = 1}}
            </div>
        @endif

    @endforeach
@endsection