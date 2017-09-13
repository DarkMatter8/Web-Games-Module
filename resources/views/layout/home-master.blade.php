<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.meta')
  
  <title>@yield('title')</title>
  <!-- Favicons !-->
  <!-- <link rel="icon" type="image/png" sizes="64x64" href="{!! URL::asset('images/favicons/favicon-64x64.png') !!}">
  <link rel="icon" type="image/png" sizes="32x32" href="{!! URL::asset('images/favicons/favicon-32x32.png') !!}">
  <link rel="icon" type="image/png" sizes="16x16" href="{!! URL::asset('images/favicons/favicon-16x16.png') !!}"> -->
  <!-- Favicons Ends !-->
  @include('includes.styles')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
  <script src="https://use.fontawesome.com/c9cc9ef658.js"></script>
  
</head>
<body>
  <noscript>Please enable JavaScript to continue.</noscript>
  

  @yield('content')
  @include('includes.scripts')
</body>
</html>