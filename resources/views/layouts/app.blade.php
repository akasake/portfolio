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
        <title>{{ config('app.name') }} </title>
        <script>
            window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <header>
            @yield('header')
        </header>
        <nav>
            @yield('nav')
        </nav>
        <div class="container">
            @yield('main')
        
        
            <div class="contact" id= "contact">
                <h1>Contact</h1>
                @yield('contact');
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
