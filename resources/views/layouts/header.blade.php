<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap shopping cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="{{ asset('public/assets/css/bootstrap.css') }}" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="{{ asset('public/style.css') }}" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="{{ asset('public/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('public/assets/ico/favicon.ico') }}">
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
                            
				<a class="active" href="index.html"> <span class="icon-home"></span> Home</a> 
				@if (Route::has('login'))
                                @auth
                                <a href="#"><span class="icon-user"></span> My Account</a> 
				@else
                                <a href="{{ route('login') }}"><span class="icon-edit"></span> Login</a> 
                                <a href="{{ route('register') }}"><span class="icon-edit"></span> Register </a> 
                                @endauth
                                 @endif
				
				<a href=""><span class="icon-shopping-cart"></span> 0 Item(s) - <span class="badge badge-warning"> $448.42</span></a>
			
                        
                        </div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href=""><span>Twitter Bootstrap ecommerce template</span> 
		<img src="{{ asset('public/assets/img/logo-bootstrap-shoping-cart.png') }}" alt="bootstrap sexy shop">
	</a>
	</h1>
	</div>
	<div class="span4">
            <div class="offerNoteWrapper" style="display:none;">
	
	</div>
	</div>
	<div class="span4 alignR">
	
	<span class="btn btn-mini"> <span class="icon-shopping-cart"></span></span>
	
	</div>
</div>
</header>

<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class="active"><a href="{{ url('/') }}">Home	</a></li>
			  
                          <ul class="nav pull-right" style="float: right;">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<button type="submit" class="shopBtn btn-block">Sign in</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
                          @if (Route::has('login'))
                                @auth
                                @guest
                                <li class="" style="float:right; display: none;"><a href="">My Account</a></li>
                                @else
                                <li class="nav-item dropdown" style="float: right;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
				@else
                                <li class=""><a href="{{ route('login') }}"> Login</a> </li>
                                <li class=""><a href="{{ route('register') }}"> Register </a> </li>
                                @endauth
                                 @endif
			</ul>
			
			
		  </div>
		</div>
	  </div>
	</div>
<div class="row">
    
    @yield('content')
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('public/assets/js/jquery.js') }}"></script>
	<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/jquery.easing-1.3.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.scrollTo-1.4.3.1-min.js') }}"></script>
    <script src="{{ asset('public/assets/js/shop.js') }}"></script>
  </body>
</html>