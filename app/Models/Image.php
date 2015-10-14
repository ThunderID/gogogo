<?php

namespace App;

class Image extends BaseModel
{
	protected $table 		= 'images';
	protected $fillable 	= ['url'];
	protected $dates 		= ['created_at', 'updated_at'];

	public function imageable()
	{
		return $this->morphTo();
	}
}
