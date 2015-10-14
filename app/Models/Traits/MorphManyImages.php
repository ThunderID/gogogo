<?php

namespace App;

trait MorphManyImages {
	
	public function images()
	{
		return $this->morphMany('\App\Image', 'imageable');
	}

}