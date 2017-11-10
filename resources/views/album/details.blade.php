@extends('layouts.front')

@section('content')

<div id="page-title" class="fullwidth-767">
	<img src="{{ URL::to('/') }}/public/albums/{{$cover_image}}">
	<div class="page-title-cover">
		<h1>Album :- {{$title}}</h1>
	</div>
</div>


<div class="wrap">
	<div class="container">
	<div class="entry-content row-fluid">
		<p>{{ $description}}</p>
	</div>
	
	<div class="row">
	    <ul class="gallery-list1" id="portfolio-list">	    
	      @foreach ($images as $image)	    
	       <li style="display: block" class="span4">
	         <a href="{{ URL::to('/') }}/public/albums/image/{{ $image->image}}" rel="prettyPhoto">
	          <img  class="featured-img-block border-box" src="{{ URL::to('/') }}/public/albums/image/{{ $image->image}}">
	         </a>
	      </li>
	      @endforeach
	   </ul>
	</div>
</div>
</div>


<script type='text/javascript' src="{{ asset('public/custom/js/bootstrap.js') }}"></script>
<script type='text/javascript' src="{{ asset('public/custom/js/jquery.flexslider-min.js') }}"></script>
<script type='text/javascript' src="{{ asset('public/custom/js/custom.js') }}"></script>
<script type='text/javascript' src="{{ asset('public/custom/js/countdown.js') }}"></script>
<script type='text/javascript' src="{{ asset('public/custom/js/filterable.js') }}"></script>
<script type='text/javascript' src="{{ asset('public/custom/js/jquery.prettyPhoto.js') }}"></script> 	
@endsection
