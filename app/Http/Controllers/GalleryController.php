<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;
use Faker\Provider\Image;

class GalleryController extends Controller
{
  
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$gallerys= Gallery::orderBy('id','DESC')->paginate(5);
		return view('gallery.index',compact('gallerys'))
		->with('i', ($request->input('page', 1) - 1) * 5);
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('gallery.create');
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
				'name' => 'required',
				'details' => 'required',
				'cover_image'=>'required|image'
		]);
		$file = $request->file('cover_image');
		$random_name = str_random(8);
		$destinationPath = 'albums/';
		$extension = $file->getClientOriginalExtension();
		$filename=$random_name.'_cover.'.$extension;
		
		$uploadSuccess = $request->file('cover_image')->move($destinationPath, $filename);
		
	    //$img =	$destinationPath.$filename;
	    //  $img->resize(1200, 600);
		//Image::make(sprintf('albums/%s', $filename))->resize(1200, 600)->save();		
		
		Gallery::create(array(
				'name' =>$request->get('name'),
				'details' =>$request->get('details'),
				'cover_image' => $filename,
		));	
		
		return redirect()->route('gallery.index')
		->with('success','gallery created successfully');
	}
	
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$gallery= Gallery::find($id);
		return view('gallery.show',compact('gallery'));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$gallery= Gallery::find($id);
		return view('gallery.edit',compact('gallery'));
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
				'name' => 'required',
				'details' => 'required',
		]);
		Gallery::find($id)->update($request->all());
		return redirect()->route('gallery.index')
		->with('success','Gallery updated successfully');
	}
	
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Gallery::find($id)->delete();
		return redirect()->route('gallery.index')
		->with('success','gallery deleted successfully');
	}
	

	public function Albums(Request $request){
		
		$albums= Gallery::orderBy('id','ASC')->paginate(6);
		return view('album.index',compact('albums'))->with('i', ($request->input('page', 1) - 1) * 6);
	}
	
}
