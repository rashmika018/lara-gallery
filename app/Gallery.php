<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	protected $table = 'gallery';
	public $fillable = ['name','details','cover_image'];
}
