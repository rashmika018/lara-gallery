
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ config('app.name', 'Laravel') }}</title>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700'	rel='stylesheet' type='text/css'>
<link rel='stylesheet' id='bootstrap-css' href="{{ asset('public/custom/bootstrap.css') }}" type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap_responsive-css' href= "{{ asset('public/custom/bootstrap-responsive.css') }}" type='text/css'	media='all' />
<link rel='stylesheet' id='main_style-css' href="{{ asset('public/custom/wd-pink.css') }}" type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css' href="{{ asset('public/custom/responsive.css') }}"  type='text/css' media='all' />
<link rel='stylesheet' id='flexslider-css' href="{{ asset('public/custom/flexslider.css') }}" type='text/css' media='all' />
<link rel='stylesheet' id='prettyPhoto-css' href="{{ asset('public/custom/prettyPhoto.css') }}" type='text/css' media='all' />
<link rel='stylesheet' id='validationEnginejquery-css' href="{{ asset('public/custom/validationEngine.jquery.css') }}" type='text/css' media='all' />
<script type='text/javascript' src="{{ asset('public/custom/js/jquery.js') }}" ></script>
<script type='text/javascript'	src='http://maps.google.com/maps/api/js?sensor=false&#038;ver=3.8.1'></script>
<link type="text/css" rel="stylesheet" href="{{ asset('public/custom/wd-pink.css') }}">	
</head>
<body class="fullwidth">
<div id="main">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<div class="nav-collapse">
			 		<ul id="main-nav" class="nav navbar-nav">
						<li class="menu-item"><a href="{{ url('/album') }}">Album</a></li>
						<li class="menu-item"><a href="{{ url('/pricing') }}">Pricing</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
   @yield('content')
 <div class="footer-wrap">
   	<div class="container">
		<div class="pull-left">
			<p>Copyright 2017. All Rights Reserved</p>
		</div>
		  <div class="pull-right footer-social">			
		</div>
	</div>
  </div>
 </div>
</body>
</html>