<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
}); */






Route::get('/', 'GalleryController@Albums');
//Route::get('/', 'HomeController@index');
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/album', 'GalleryController@Albums');
Route::get('/album/{id}', 'ImagesController@album_Details');
Route::get('/pricing', 'MembershipTypeController@Pricing');





//Route::get('/api/v1/products/{id?}', ['middleware' => 'auth.basic', function($id = null)
/*		

Route::get('/api/v1/products/{id?}', ['middleware' => 'auth.basic', function($id = null) {
	if ($id == null) {
		$products = App\Product::all(array('id', 'name', 'price'));
	} else {
		$products = App\Product::find($id, array('id', 'name', 'price'));
	}
	return Response::json(array(
			'error' => false,
			'products' => $products,
			'status_code' => 200
	));
}]);

	Route::get('/api/v1/categories/{id?}', ['middleware' => 'auth.basic', function($id = null) {
		if ($id == null) {
			$categories = App\Category::all(array('id', 'name'));
		} else {
			$categories = App\Category::find($id, array('id', 'name'));
		}
		return Response::json(array(
				'error' => false,
				'user' => $categories,
				'status_code' => 200
		));
	}]);
	*/



Route::get('/api', 'Front@index');

Route::get('/useranna', function () {
	//
})->middleware('auth:api');



//Route::group(['middleware' => 'admin'], function () {
   Route::resource('gallery','GalleryController');
   Route::resource('images','ImagesController');
   Route::resource('alluser','UsersController');
   Route::resource('role','RoleController');
   Route::resource('membershiptype','MembershipTypeController');
//});

