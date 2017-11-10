<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipType extends Model
{
	protected $table = 'membership_type';
	public $fillable = ['title','price','description'];
}
