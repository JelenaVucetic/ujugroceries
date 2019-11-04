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

         <!-- Styles -->
         <link rel="stylesheet" href="/css/header.css">
         <link rel="stylesheet" href="/css/homepage.css">
         <link rel="stylesheet" href="/css/services.css">
         <link rel="stylesheet" href="/css/howitworks.css">
         <link rel="stylesheet" href="/css/coupons.css">
         <link rel="stylesheet" href="/css/contact.css">
         <link rel="stylesheet" href="/css/footer.css">

        @yield('modalcss')
     
        @yield('modal1css')
   
        <script src="https://unpkg.com/scroll-out/dist/scroll-out.min.js"></script>
      
    </head>
    <body>
        @include('layouts.header')
        @yield('content')
        @include('layouts.coupons')
        @include('layouts.footer')

        @yield('modaljs')
        @yield('modal1js')
        

            @include('sweetalert::alert')
    
    </body>
</html>
