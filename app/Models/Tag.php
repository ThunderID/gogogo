<?php

namespace App;

class Tag extends BaseModel
{
    //
	protected $table 		= 'tags';
	protected $fillable 	= ['tag'];
	protected $dates 		= ['created_at', 'updated_at'];
}
