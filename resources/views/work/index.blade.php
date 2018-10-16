@extends('layouts/app') 
@section('header')
        <div class="header_box bgBeige">
            <div class="rotation_box">
                <img src="/images/logo color.svg" alt="logo" class="logo">
                <h1 class="header--title">My work</h1>
            </div>
        </div>
@endsection
@section('nav')
        <div class="box bgBeige">
            <a href="/#about">About</a>
            <a href="/work/">Work</a>
            <a href="/#contact">Contact</a>
        </div>  
@endsection
@section('main')
    <div class="worktypes">
        <a href="/work/development" > <img src="/images/work/Codingprojects.png" alt="coding" class="coding worktype"></a>
        <a href="/work/design" > <img src="/images/work/Design project.png" alt="coding" class="design worktype"></a>
        <a href="/work/prof" > <img src="/images/work/Professional Development.png" alt="coding" class="prof worktype"></a>
    </div>
    
@endsection