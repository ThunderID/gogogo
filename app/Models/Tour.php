<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends BaseModel
{
	//
	protected $table 		= 'tours';
	protected $fillable 	= ['name', 'slug', 'summary', 'ittinary', 'images', 'thumbnail', 'price', 'include', 'exclude'];
	protected $dates 		= ['published_at', 'created_at', 'updated_at'];
}
