<?php 

namespace App;

trait BelongsToManyBusinessesTrait {

	//
	function businesses()
	{
		return $this->belongsToMany(__NAMESPACE__ . '\Business');
	}

	function scopeBelongsToBusinessId($q, $v = null)
	{
		if (!$v)
		{
			return $q;
		}
		else
		{
			return $q->whereHas('businesses', function($q) use ($v) {
				$q->whereIn($q->getTable() . '.id', is_array($v) ? $v : [$v]);
			});
		}
	}
}
