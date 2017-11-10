<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Role;

class RoleController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$role= Role::orderBy('id','ASC')->paginate(5);
		return view('role.index',compact('role'))
		->with('i', ($request->input('page', 1) - 1) * 5);
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('role.create');
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, [
				'name' => 'required|unique:role|min:4'
		]);
		
		Role::create(array(
				'name' =>$request->get('name')
		));
		
		return redirect()->route('role.index')
		->with('success','Role created successfully');
		
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$role= Role::find($id);
		return view('role.edit',compact('role'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$this->validate($request, [
				'name' => 'required|unique:role|min:4'
		]);
		Role::find($id)->update($request->all());
		return redirect()->route('role.index')
		->with('success','Role updated successfully');
	}
	
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Role::find($id)->delete();
		return redirect()->route('role.index')
		->with('success','Role deleted successfully');
	}
}
