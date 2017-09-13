<html>
    <head>
    <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.css') !!}">
    <script type="text/javascript" src="{!! asset('js/bootstrap.js') !!}"></script>
    <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">  
    <meta name="csrf-token" content="{{ csrf_token() }}">  
        <title>
            Web Games
        </title>
        <style>
            h1,h2,h3,a{
                font-family: 'Press Start 2P', cursive;
            }
        </style>
    </head>
    <body>
    <br>
    <br>
    <div class="container">

    <br>
    <br>
    <br>
    <br>
    <br>
         <h1 align="center">You scored {{ $score }} in {{ $game }}</h1>
         <br>
         <br>
         <div align="center">
             <a href="/player/home" class="btn btn-default">Back To Home</a>
         </div>
    </div>
    <script>
      history.pushState(null, null, location.href);
        window.onpopstate = function(event) {
        history.go(1);
      };
    </script>
    </body>
</html>