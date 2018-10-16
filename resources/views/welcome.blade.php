<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-126471748-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-126471748-1');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ URL::asset( 'css/normalize.css' ) }}">
        <link rel="stylesheet" href="{{ URL::asset( 'css/app.min.css' ) }}">
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700i" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <title>{{ config('app.name') }}</title>
        <script>
            window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            ]) !!};
        </script>
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
                        Email me benchaphonvde@gmail.com, or find me on my social media accounts linked below. <br>
                        Talk to you soon!</p>


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
                <div class="contact-socials">
                    <a href = "https://twitter.com/benchaphone" ><i class="fab fa-twitter fa-2x fntGreen"></i> </a>
                    <a href = "https://github.com/akasake" ><i class="fab fa-github-alt fa-2x fntBeige"></i></a>
                    <a href = "https://www.linkedin.com/in/benchaphonvandeneynden/" ><i class="fab fa-linkedin-in fa-2x fntPurple"></i></a>
                    <a href = "https://www.instagram.com/akasake_pham/" ><i class="fab fa-instagram fa-2x fntPink"></i></a>
                </div>
                
            </div> 
        </div>
    </body> 
</html>
