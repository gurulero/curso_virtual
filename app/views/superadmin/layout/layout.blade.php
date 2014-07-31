<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
      @yield('title') 
    </title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/superadmin/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="{{asset('assets/superadmin/css/sb-admin.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/superadmin/font-awesome/css/font-awesome.min.css')}}">
    @yield('style')
  </head>

  <body>

    <div id="wrapper">

      @include('superadmin.layout.sidebar')

      <div id="page-wrapper">

        <div class="row">
          @include('superadmin.layout.naver')
          @include('superadmin.layout.messages')
          @yield('content')
          
        </div><!-- /.row -->

      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="{{asset('assets/superadmin/js/jquery-1.10.2.js')}}"></script>
    <script src="{{asset('assets/superadmin/js/bootstrap.js')}}"></script>
    @yield('javascript')

  </body>
</html>