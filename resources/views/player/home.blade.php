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
            h1,h2,h3,a,h4{
                font-family: 'Press Start 2P', cursive;
            }
            a{
                color:#fff;
            }
        </style>
    </head>
    <body>
    <br>

    <br>
    <div class="container">
    <h4>Hello, {{$user->name}}<span style="float:right"><a href="/scoreboard">ScoreBoard</a>&nbsp;&nbsp;<a href="/logout">Logout</a></span></h4>
         <br>
         <br>
         <div align="center">
         <div style="padding:20px;">
             <a href="/pingpong" class="btn btn-default">Ping Pong</a>
         </div>
         <div style="padding:20px;">    
             <a href="/space" class="btn btn-default">Space Invaders</a>
         </div>
         <div style="padding:20px;">
             <a href="/flappy" class="btn btn-default">Flappy Birds</a>
         </div>
         <div style="padding:20px;">
             <a href="/trex" class="btn btn-default">T-Rex Runner</a>
         </div>
         <div style="padding:20px;">
             <a href="/goblin" class="btn btn-default">Catch the Goblin</a>
         </div>
         </div>
    </div>
    </body>
</html>