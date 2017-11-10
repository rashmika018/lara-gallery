@extends('layouts.front') @section('content')
<div class="wrap">
	<div class="container">
<div class="entry-content row-fluid">
	<h1>Let's get you started with LaraGallery</h1>
<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
<p style="text-align: justify;">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

</div>
		<div class="gift-category-rows resp-center">
			<div class="row-fluid gift-category-row">
			   @foreach ($pricing as $price)
				<div class="span3 resp-spacer text-center plan-title">
					<h4>{{$price->title}}</h4>
					 <h3 class="price">${{$price->price}}</h3>  
					
					<ul>					
						<li id="gift_name">{{$price->description}}</li>						
					</ul>
					<div class="controls-row text-center">
						<input class="btn btn-primary" type="submit" value="Start trial" name="btnsubmit">
					</div>
				</div>
			@endforeach  	
		   </div>
		<div class="row-fluid gift-category-row"></div>
	</div>
 </div>
</div>
@endsection
