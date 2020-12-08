<!DOCTYPE HTML>

<html lang="fr" >
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
        <meta charset="utf-8">
    
        <!-- Description, Keywords and Author -->
    
        <meta name="description" content="site personnel de mr Malan, j'affiche l'ensemble de mes projet realiés ou en cour de realisation et leur different lien respectif">
    
        <meta name="author" content="Emmanuel Malan">
    
        <title>Malan.Dev</title>
    
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon">
        
        <!-- style -->
    
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
    
        <!-- style -->
    
        <!-- bootstrap -->
    
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        
        <!-- responsive -->
    
        <link href="{{ asset('css/responsive.css')}}" rel="stylesheet" type="text/css">
        
        <!-- font-awesome -->
    
        <link href="{{ asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    
        <!-- font-awesome -->
    
        <link href="{{ asset('css/effects/set2.css')}}" rel="stylesheet" type="text/css">
    
        <link href="{{ asset('css/effects/normalize.css')}}" rel="stylesheet" type="text/css">
    
        <link href="{{ asset('css/effects/component.css')}}" rel="stylesheet" type="text/css">
    
    </head>
<body>
	 @include('layouts.header')
     <main role="main-home-wrapper" class="container">
        @yield('content')
     </main>
     @include('layouts.footer')
   
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
 <script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>
    
 <!-- custom -->
 
 <script src="{{ asset('js/nav.js')}}" type="text/javascript"></script>
 
 
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 
 <script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
 
 <script src="{{ asset('js/effects/masonry.pkgd.min.js')}}" type="text/javascript"></script>
 
 <script src="{{ asset('js/effects/imagesloaded.js')}}" type="text/javascript"></script>
 
 <script src="{{ asset('js/effects/classie.js')}}" type="text/javascript"></script>
 
 <script src="{{ asset('js/effects/AnimOnScroll.js')}}" type="text/javascript"></script>
 
 <script src="{{ asset('js/effects/modernizr.custom.js')}}"></script>
 
 <!-- jquery.countdown -->
 
 

@yield('extra-js')
</body>
</html>