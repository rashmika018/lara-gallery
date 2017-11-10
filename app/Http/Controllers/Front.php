<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Product;
use App\User;
use Laravel\Passport\Passport;



class Front extends Controller
{
	public function index(Request $request)
	{
		
		$user = User::find(1);
		
		
		echo '<pre>';
		print_r($user);
		echo '</pre>';
		
		
		//$token = $user->createToken('Token Name')->accessToken;
		$token = $user->createToken('My Token', ['place-orders'])->accessToken;
		echo '<br>@token';
		print_r($token);
		
		
		exit;
		// Creating a token without scopes...
		//$token = $user->createToken('Token Name')->accessToken;
		
		
		// Creating a token with scopes...
		$token = $user->createToken('My Token', ['81bab3288e05f3f19babc5b269a5845e57c11d733e55a0cdfdb527a1f7676ba113952f8ab252b311'])->accessToken;
				
		
		
		exit;
		
		$products =Product::paginate(5);
		
		return response(array(
				'error' => false,
				'products' =>$products->toArray(),
		),200);
	//	return 'come';
	}
}
