<html>
    <head>
    
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

            td,th{
                text-align: center;
            }
        </style>
    </head>
    <body>
    <br>

    <br>
    <div class="container">
    <div align="center">
        <h1>Web Games</h1>
        <h3>ScoreBoard</h3>
    </div>
    <br>
    <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Flappy Birds</th>
      <th>T-rex Runner</th>
      <th>Goblin</th>
      <th>Ping Pong</th>
      <th>Space Invaders</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>1</td>
      <td>{{$user->name}}</td>
      <td>{{$user->flappy}}</td>
      <td>{{$user->trex}}</td>
      <td>{{$user->goblin}}</td>
      <td>{{$user->ping}}</td>
      <td>{{$user->space}}</td>
      <td>{{$user->total}}</td>
    </tr>
    @endforeach
    </tbody>
    </table>
    </div>
    </body>
</html>