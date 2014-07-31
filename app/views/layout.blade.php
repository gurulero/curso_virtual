<!-- Stored in app/views/layouts/master.blade.php -->

<html>
    <body>
        @section('header')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>