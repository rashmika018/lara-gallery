<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;
use App\Role;

class UsersController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	
	
	public function index(Request $request)
	{
		$users = Users::with(array('rolename'))->orderBy('id','DESC')->paginate(5);
		//$users= Users::orderBy('id','DESC')->paginate(5);
		return view('users.index',compact('users'))
		->with('i', ($request->input('page', 1) - 1) * 5);
	}
	public function destroy($id){		
		Users::find($id)->delete();
		return redirect()->route('users.index')
		->with('success','users deleted successfully');
	}
	
	public function GetRole($id){
	
		return  Role::find(1)->name;
	}
	
	
}
