<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">

    <!-- Scripts --> <?php /* ?>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script> */ ?>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}/home">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                      <ul class="nav navbar-nav">
                       <?php /*?><li>
                        <a href="{{ url('/') }}">Home</a>
                       </li>
                       <li>
                        <a href="{{ url('/album') }}">Album</a>
                       </li>    @if(Auth::check() && Auth::user()->admin==1) 
                         @if(Auth::user()->admin==1) */?>
                  
                     @if(Auth::check())
                       @if(Auth::user()->admin==1)
			            <li class="dropdown">
			              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Albums<b class="caret"></b></a>
			              <ul class="dropdown-menu">
			                <li><a href="{{ url('/gallery') }}">Gallery</a></li>
			                <li><a href="{{ url('images') }}">Images</a></li>
			              </ul>
			            </li>
			            <li class="dropdown">
			              <a href="#" class="dropdown-toggle" data-toggle="dropdown">User<b class="caret"></b></a>
			              <ul class="dropdown-menu">
			                <li><a href="{{ url('/alluser') }}">User</a></li>
			                <li><a href="{{ url('/role') }}">Role</a></li>
			              </ul>
			            </li>
			             <li class="dropdown">
			              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Membership<b class="caret"></b></a>
			              <ul class="dropdown-menu">
			                 <li><a href="{{ url('/membershiptype') }}">Membership Type</a></li>
			                 <li><a href="#">Members</a></li>
			              </ul>
			            </li> 
			              @endif <?php /* ?>
			              @if(Auth::user()->admin==4)
			                 <li><a href="{{ url('/pricing') }}">Pricing</a></li>
			              @endif */ ?>
			          @endif
			         </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
	<div class="container">
        @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
</body>
</html>
