<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Images;
use App\Gallery;

class ImagesController extends Controller
{
	

	//$albumlist =ga
	
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request){
		
		
		$images = Images::with(array('albumname'))->orderBy('id','DESC')->paginate(5);
		return view('images.index',compact('images'))->with('i', ($request->input('page', 1) - 1) * 5);
		/*	$images= Images::orderBy('id','DESC')->paginate(5);
	        return view('images.index',compact('images'))->with('i', ($request->input('page', 1) - 1) * 5);*/
	    
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create(){
		return view('images.create');
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request){
		
		$this->validate($request, [
				'album_id' => 'required',
				'description' => 'required',
				'image'=>'required|image'
		]);		
		
		$file = $request->file('image');
		$random_name = str_random(8);
		$destinationPath = 'albums/image/';
		$extension = $file->getClientOriginalExtension();
		$filename=$random_name.'_cover.'.$extension;
		$uploadSuccess = $request->file('image')
		->move($destinationPath, $filename);
		
		Images::create(array(
				'album_id' =>$request->get('album_id'),
				'description' =>$request->get('description'),
				'image' => $filename,
		));
		
		return redirect()->route('images.index')->with('success','images created successfully');
		
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		$image= Images::find($id);
		return view('images.show',compact('image'));
	}
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$image= Images::find($id);
		return view('images.edit',compact('image'));
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
				'album_id' => 'required',
				'description' => 'required',
		]);
		//Images::find($id)->update($request->all());		
		
		Images::find($id)->update(array(
				'album_id' =>$request->get('album_id'),
				'description' =>$request->get('description'),
		));
		return redirect()->route('images.index')->with('success','images updated successfully');
	}
	
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		Images::find($id)->delete();
		return redirect()->route('images.index')->with('success','images deleted successfully');
	}
	
	public function album_Details($id){
		$gallery =Gallery::whereid($id)->first();
		//$post = Post::whereUrl($url)->first();
		$title = $gallery->name;
		$description = $gallery->details;
		$cover_image = $gallery->cover_image;
		
		$images=Images::where('album_id', $id)->get();
		
		//Images::search('')->where('album_id', '=', $id)->paginate(6);
		//$images= Images::orderBy('id','DESC')->paginate(5);
		
		$data = compact( 'title', 'description','cover_image','images');
		return view('album.details', $data);
	}
	
}
