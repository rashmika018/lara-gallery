<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MembershipType;
use Illuminate\Contracts\Auth\Guard;
//use App\Http\Middleware\Admin;


class MembershipTypeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$membershiptype= MembershipType::orderBy('id','ASC')->paginate(5);
		return view('membership_type.index',compact('membershiptype'))
		->with('i', ($request->input('page', 1) - 1) * 5);
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('membership_type.create');
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	
	public function store(Request $request,Guard $auth)
	{
		//,Guard $auth
		$this->validate($request, [
				'title' => 'required|unique:membership_type|min:4',
				'price' => 'required|regex:/^\d*(\.\d{2})?$/',
				'description'=>'required|min:4|max:255'
		]);		
		MembershipType::create(array(
				'uid'=>$auth->id(),
				'title' =>$request->get('title'),
				'price' =>$request->get('price'),
				'description' => $request->get('description')
		));
		
		return redirect()->route('membershiptype.index')
		->with('success','Membership Type created successfully');
		
	} 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$membershiptype= MembershipType::find($id);
		return view('membership_type.edit',compact('membershiptype'));
	}
	
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id,Guard $auth)
	{
		$this->validate($request, [
				'title' => 'required|unique:membership_type|min:4',
				'price' =>  'required|regex:/^\d*(\.\d{2})?$/',
				'description'=>'required|min:4|max:255'
		]);
		MembershipType::find($id)->update($request->all());
		return redirect()->route('membershiptype.index')
		->with('success','Membership Type updated successfully');
	}
	

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		MembershipType::find($id)->delete();
		return redirect()->route('membershiptype.index')
		->with('success','Membership Type deleted successfully');
	}
	
	
	public function Pricing(Request $request){
			$pricing= MembershipType::orderBy('id','ASC')->paginate(6);
			//return view('membership_type.pricing',compact('pricing'))->with('i', ($request->input('page', 1) - 1) * 6);
			return view('membership_type.pricing',compact('pricing'));
	 }
}
