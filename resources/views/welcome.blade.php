<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ URL::asset( 'css/normalize.css' ) }}">
        <link rel="stylesheet" href="{{ URL::asset( 'css/app.min.css' ) }}">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700i" rel="stylesheet">
        <title>Pham Akasake</title>
    </head>
    <body>
        <header>
            <img src="/images/logo color.svg" alt="logo" class="logo">
            <h1>Webdevelopment and Design</h1>
        </header>
        <nav>
                <!--<div class="box">
                    <a href="#">About me</a>
                    <a href="#">My work</a>
                    <a href="#">Contact</a>
                </div>-->
        </nav>
        <div class="container">
           
            <div class="about">
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
            <div class="contact">
                <h1>Contact</h1>
                <p>Want to work with me? <br>
                        Or simply just want to say hi?<br>
                        Email me, or find me on my social media accounts linked below. <br>
                        Talk to you soon!</p>
            </div> 
        </div>
    </body> 
</html>
