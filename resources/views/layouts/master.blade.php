<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta property="og:image" content="http://ujunamirnice.me/images/Logo_v01.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://ujunamirnice.me/" />
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/animated.css">
   
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <title>UJU</title>

        <link rel="shortcut icon" type="image/x-icon" href="/images/UJU-TAB-IKONICA.ico" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

         <!-- Styles -->
         <link rel="stylesheet" href="/css/header.css">
         <link rel="stylesheet" href="/css/homepage.css">
         <link rel="stylesheet" href="/css/services.css">
         <link rel="stylesheet" href="/css/coupons.css">
         <link rel="stylesheet" href="/css/questions.css">
         <link rel="stylesheet" href="/css/contact.css">
         <link rel="stylesheet" href="/css/footer.css">

        @yield('modalcss')
     
        @yield('modal1css')
   
        <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
        <script src="/js/jQuery.js"></script>
    </head>

        <style>
            .mystyle {
               padding-bottom: 200px !important;
            }   
        </style>


    <body>
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')

        @yield('modaljs')
        @yield('modal1js')
        

        @include('sweetalert::alert')


        {{-- Animation --}}

    <script>
        let tl = new TimelineMax(); 
        const controller = new ScrollMagic.Controller();

        tl.from("#test", .5, {x: -500, opacity: 0});
        tl.from("#span1", .5, {x: -500, opacity: 0});
        tl.from("#test1", .5, {x: -500, opacity: 0});
        tl.from("#span2", .5, {x: -500, opacity: 0});
        tl.from("#test2", .5, {x: -500, opacity: 0});
        tl.from("#span3", .5, {x: -500, opacity: 0});
        tl.from("#test3", .5, {x: -500, opacity: 0});


        const scene = new ScrollMagic.Scene({
            triggerElement: ".about"
        })
            .setTween(tl)
                .addTo(controller);
        
    </script>

    {{-- Jump to section --}}

<script>
        
    $('#homepage').click(function(){
            positionabout = $('#start').offset().top - $('#myNav').height();
            $('html, body').animate({scrollTop:positionabout}, 'slow' , 'linear');
                $("#homepage span").css("color", "#ed674a");
                $("#services span").css("color", "#454d66");
                $("#ujupaketi span").css("color", "#454d66");
                $("#howToOrder span").css("color", "#454d66");
                $("#whyUju span").css("color", "#454d66");
                $("#contact span").css("color", "#454d66");

        })

    $('#services').click(function(){
        positionabout = $('#main').offset().top - $('#myNav').height();
        $('html, body').animate({scrollTop:positionabout}, 'slow', 'linear' );
            $("#homepage span").css("color", "#454d66");
            $("#services span").css("color", "#ed674a");
            $("#ujupaketi span").css("color", "#454d66");
            $("#howToOrder span").css("color", "#454d66");
            $("#whyUju span").css("color", "#454d66");
            $("#contact span").css("color", "#454d66");
    
    })

    $('#ujupaketi').click(function(){
        positionabout = $('#main').offset().top - $('#myNav').height() ;
        $('html, body').animate({scrollTop:positionabout}, 'slow', 'linear' );
            $("#homepage span").css("color", "#454d66");
            $("#services span").css("color", "#454d66");
            $("#ujupaketi span").css("color", "#ed674a");
            $("#howToOrder span").css("color", "#454d66");
            $("#whyUju span").css("color", "#454d66");
            $("#contact span").css("color", "#454d66");
    })

    $('#howToOrder').click(function(){
        positionabout = $('#about').offset().top - $('#myNav').height();
        $('html, body').animate({scrollTop:positionabout}, 'slow', 'linear');
            $("#homepage span").css("color", "#454d66");
            $("#services span").css("color", "#454d66");
            $("#ujupaketi span").css("color", "#454d66");
            $("#howToOrder span").css("color", "#ed674a");
            $("#whyUju span").css("color", "#454d66");
            $("#contact span").css("color", "#454d66");
    
    })

    $('#whyUju').click(function(){
        positionabout = $('#whyus').offset().top - $('#myNav').height();
        $('html, body').animate({scrollTop:positionabout}, 'slow', 'linear');
            $("#homepage span").css("color", "#454d66");
            $("#services span").css("color", "#454d66");
            $("#ujupaketi span").css("color", "#454d66");
            $("#howToOrder span").css("color", "#454d66");
            $("#whyUju span").css("color", "#ed674a");
            $("#contact span").css("color", "#454d66");
    
    })

    $('#contact').click(function(){
        positionabout = $('#contactForm').offset().top - $('#myNav').height();
        $('html, body').animate({scrollTop:positionabout}, 'slow', 'linear');
            $("#homepage span").css("color", "#454d66");
            $("#services span").css("color", "#454d66");
            $("#ujupaketi span").css("color", "#454d66");
            $("#howToOrder span").css("color", "#454d66");
            $("#whyUju span").css("color", "#454d66");
            $("#contact span").css("color", "#ed674a");
    
    })
</script>


    {{-- Toogle Header --}}
    <script>
        function myFunction() {
        let element = document.getElementById("bottomHeader");
        element.classList.toggle("mystyle");
        }
    </script>

    </body>
</html>
