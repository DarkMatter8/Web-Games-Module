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
         <h1 align="center">Web Games Admin</h1>
         <h3><a style="float:right" href="/logout">Logout</a></h3>
         <div class="col-md-6" align="center">
         <br>
         <br>
         <ul class="list-group">
         @foreach($users as $user)
          <li class="list-group-item">
            {{ $user->email }}&nbsp;&nbsp;&nbsp;<form style="display:inline;" action="/refill" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{ $user->id }}">
            <button type="submit" class="btn btn-fill btn-sm" style="color:#000">Refill</button>
          </form>
          </li>
          @endforeach
        </ul>
         </div>
         <div class="row">
            <div class="col-md-6">
            <br>
            <h3>Register</h3>
            <div id="error1" class="alert alert-dismissible alert-danger" style="display: none;">
                
            </div>
            <div id="success" class="alert alert-dismissible alert-success" style="display: none;">
                
            </div>
                <form id="RegisterForm">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" id="register-button" class="btn btn-default" disabled>Register</button>    
                </form>
            </div>
            
         </div>
    </div>
    <script type="text/javascript" src="{!! asset('js/auth.js') !!}"></script>
    </body>
</html>