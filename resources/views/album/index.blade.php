@extends('layouts.front')

@section('content')

<div id="page-title" class="fullwidth-767">
	<img src="http://localhost:8081/laragallery/public/img/banner_album.jpg">
	<div class="page-title-cover">
		<h1>Album</h1>
	</div>
</div>

<div class="wrap">
	<div class="container">
	<div class="entry-content row-fluid">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed mi sapien, egestas ut consectetur et, consectetur et magna. Pellentesque consectetur dolor nulla, quis rhoncus lorem finibus at. Praesent ut ante leo. Maecenas in nunc pharetra, vulputate nisl eget, suscipit purus. Nam eget dolor fermentum, bibendum ligula in, pretium massa. Nunc nulla elit, sodales id nisl quis, aliquam convallis turpis. Morbi ante arcu, vehicula non faucibus ut, accumsan et magna. Mauris sed vehicula urna, eu efficitur enim. Praesent at risus volutpat, suscipit odio at, pretium nisl. Curabitur ac ante accumsan, ultrices nunc quis, sagittis ante. Vivamus ac mattis massa, sit amet porta elit. </p>
	</div>
	<div class="row">
	  @foreach ($albums as $album)	  
	   <div class="span4 resp-spacer m30">
	     <div class="thumbnail">
	         <a href="{{ URL::to('/') }}/album/{{$album->id}}">
               <img width="350" height="250" class="img-responsive" src="{{ URL::to('/') }}/public/albums/{{$album->cover_image}}" alt="" title="">
            </a>
              <h4>{{ $album->name}}</h4>
	     </div>
	   </div>	  
	  
	  @endforeach
	  
	</div>
	 <div class="row">
       <div class="col-md-12">
            {!! $albums->render() !!}
        </div>
    </div>
</div>
</div>
@endsection
