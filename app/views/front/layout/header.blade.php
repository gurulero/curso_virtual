<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.css')}}">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="{{URL::to('assets/js/bootstrap.js')}}"></script>
  <script src="{{URL::to('assets/js/bootstrap.min.js')}}"></script>

  @yield('style')
</head>
<body>
@include('front.layout.nav')

@yield('content')
</body>
</html>