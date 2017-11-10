<?php


namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\RedirectResponse;

class Admin
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */

	protected $auth;

	//protected $response;


	public function __construct(Guard $auth)
	{
		$this->auth = $auth;
	}


	public function handle($request, Closure $next)
	{
	/*
		if ($this->auth->check())
		{
			if($this->auth->user()->admin==1)
			{
				return $next($request);
			//	return new RedirectResponse(url('/home'));
		    }elseif ($this->auth->user()->admin==4){
		    	return new RedirectResponse(url('/pricing'));
		  	}else{
		    		return new RedirectResponse(url('/'));
		   	}
			
		} */
		
		if ($this->auth->check())
		{
			$admin = 0;
			if($this->auth->user()->admin==1)
			{
			   $admin=1;
			}else{
			   return new RedirectResponse(url('/'));
			}
		}
	    return $next($request);
	} 
}

