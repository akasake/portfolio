@extends('layouts/app')
    @section('header')
        <div class="header_box bgBeige">
            <div class="rotation_box">
                <img src="/images/logo color.svg" alt="logo" class="logo">
                <h1 class="header--title">Webdeveloper</h1>
            </div>
        </div>
    @endsection
    @section('nav')
        <div class="box bgBeige">
            <a href="#about">About</a>
            <a href="/work/">Work</a>
            <a href="#contact">Contact</a>
        </div>  
    @endsection
        
        @section('main')
            <div class="about" id = "about">
                <h1 class="fntRed fntRight">About me</h1>
                <p class="fntRight">
                        My name is Benchaphon, or Pham. I study a bachelor course Interactive multimedia design at Thomas More. 
                        You can usually find me <span class="fntGreen">coding</span>, <span class="fntBlue">designing</span>, eating good <span class="fntBeige">food</span>, <span class="fntPurple"> gaming</span>, <span class="fntRed">traveling</span> or <span class="fntGreen">reading</span> a good book. Aside from what I usually do, I also like to <span class="fntBeige">paint</span>, <span class="fntPurple">write</span>, play <span class="fntBlue">piano</span> or learn any new skill I am interested in.
                </p>
            </div>
            <div class="skills">
                <h1 class="fntLeft">My skills</h1>
                <div class="skills_graph-cont">
                    @foreach ($skills as $skill)
                    <div class="skill">
                        <img class="skill_logo" src="{{$skill->logo_url}}" alt="{{$skill->name}}">
                        @if ($skill->id % 2 !== 0)
                            <div class="skill_bar bar{{$skill->id}} barBlue"></div> 
                        @else
                            <div class="skill_bar bar{{$skill->id}} barRed"></div>
                        @endif
                    </div>
                    @endforeach
                </div>
                <div>

                </div>
            </div>  
        </div>   
        <div class="triangle"></div>
        <div class="work">
            <div class="container" >
                <h1 class="fntRed fntLeft">My work</h1>
                <p>In the past years I have done a few projects. Click on the button to see all of them.<br>Or click on the image to see my latest work.</p>
                <a class="button btnGreen" href="#">Show me the work</a>
            </div>
        </div>
        <div class="container" >
        @endsection

        @section('contact')        
            <p>Want to work with me? <br> Or simply just want to say hi?<br>Email me benchaphonvde@gmail.com, or find me on my social media accounts linked below. <br> Talk to you soon!</p>
        @endsection
                

<!--
                @if(session('message'))
                    <div class='alert alert-success'>
                        {{ session('message') }}
                    </div>
                @endif
	

                <form class="form-vertical" method="POST" action="/">
                    {{ csrf_field() }} 
                    
                        <label for="Name">Your name: </label>
                        <input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
                        <label for="email">Your email: </label>
                        <input type="text" class="form-control" id="email" placeholder="pham@example.com" name="email" required>
                        <label for="message">Your message: </label>
                        <textarea type="text" class="form-control" id="message" placeholder="Type your messages here" name="message" required></textarea>
                        <button type="submit" class="button btnPurple" value="Send">Send</button>
                </form>
-->
               
  
