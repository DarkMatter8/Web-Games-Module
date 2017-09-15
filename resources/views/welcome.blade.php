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
            h1,h2,h3{
                font-family: 'Press Start 2P', cursive;
            }
        </style>
    </head>
    <body>
    <br>
    <br>
    <div class="container">
         <h1 align="center">Web Games</h1>
         <div class="col-md-6" align="center">
             <img src="assets/techlogo1.png" width="60%" height="60%">
         </div>
         <div class="row">
            <div class="col-md-6">
            <br>
            <h3>Sign In</h3>
            <div id="error" class="alert alert-dismissible alert-danger" style="display: none;">
                
            </div>
                <form id="loginForm" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" id="login-btn" class="btn btn-default" disabled>Login</button>    
                </form>
            </div>
         </div>
    </div>

    <script type="text/javascript" src="{!! asset('js/auth.js') !!}"></script>
    </body>
</html>