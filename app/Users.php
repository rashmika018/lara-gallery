<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	protected $table = 'users';
	
	public function rolename()
	{
		return $this->belongsTo('App\Role', 'admin','id');
	}
	
	
}
