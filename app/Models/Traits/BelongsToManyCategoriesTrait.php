<?php 

namespace App;

trait BelongsToManyCategoriesTrait {

	//
	function categories()
	{
		return $this->belongsToMany(__NAMESPACE__ . '\Category');
	}

	function scopeBelongsToCategoryId($q, $v = null)
	{
		if (!$v)
		{
			return $q;
		}
		else
		{
			return $q->whereHas('categories', function($q) use ($v) {
				$q->whereIn($q->getTable() . '.id', is_array($v) ? $v : [$v]);
			});
		}
	}
}
