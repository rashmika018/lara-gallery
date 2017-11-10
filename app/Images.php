<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
	protected $table = 'images';
	public $fillable = ['album_id','description','image'];
	
	
	
	public function albumname()
	{
		return $this->belongsTo('App\Gallery', 'album_id','id');
	}
	
}
