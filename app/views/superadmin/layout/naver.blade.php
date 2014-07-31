<div class="col-lg-12">
    <h1> @yield('pagename') <small>@yield('pagedescription')</small></h1>
	<ol class="breadcrumb">
    	<li><a href="{{URL::to('cpanel')}}"><i class="fa fa-home"></i></a></li>
        @yield('breadcrumbs')
    </ol>
</div>