@extends('layouts/app')
@section('header')
        <div class="header_box bgGreen">
            <div class="rotation_box">
                <img src="/images/design.svg" alt="design" class="design">
                <h1 class="header--title fntGreen">Design</h1>
            </div>
        </div>
@endsection
@section('nav') 
        <div class="box bgGreen">
            <a href="/#about">About</a>
            <a href="/work/">Work</a>
            <a href="/#contact">Contact</a>
        </div>  
@endsection
@section('main')
    <div class="work_display">
        <p class="hidden">{{$key = 1}}</p>
        @foreach( $works as $w)
            @if($key === 1 )
                <div class = "right"> 
                    <img src="{{$w->cover_url}}" alt="{{$w->title}} cover image">
                    <h2 class="fntPurple">{{$w->title}}</h2>
                    <p>{{$w->description}}</p>
                    <a href="/work/{{$w->id}}">See more</a>
                </div>
                <p class="hidden">{{$key = 2}}</p>
            @elseif($key ===2)
                <div class = "left"> 
                    <img src="{{$w->cover_url}}" alt="{{$w->title}} cover image">
                    <h2 class="fntBlue">{{$w->title}}</h2>
                    <p>{{$w->description}}</p>
                    <a href="/work/{{$w->id}}">See more</a>
                </div>
                <p class="hidden">{{$key = 3}}</p>
            @elseif($key === 3)
                <div class = "right"> 
                    <img src="{{$w->cover_url}}" alt="{{$w->title}} cover image">
                    <h2 class="fntBeige">{{$w->title}}</h2>
                    <p>{{$w->description}}</p>
                    <a href="/work/{{$w->id}}">See more</a>  
                </div>
                <p class="hidden">{{$key = 4}}</p>
            @elseif($key === 4)
                <div class = "left"> 
                    <img src="{{$w->cover_url}}" alt="{{$w->title}} cover image">
                    <h2 class="fntGreen">{{$w->title}}</h2>
                    <p>{{$w->description}}</p>
                    <a href="/work/{{$w->id}}">See more</a>
                </div>
                <p class="hidden">{{$key = 1}}</p>
            @endif
        @endforeach
    </div>
@endsection