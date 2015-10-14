<?php 

namespace App;

trait BelongsToBusinessTrait {

	//
	function business()
	{
		return $this->belongsTo(__NAMESPACE__ . '\Business');
	}

	function scopeBelongsToBusinessId($q, $v = null)
	{
		if (!$v)
		{
			return $q;
		}
		else
		{
			$q->whereIn($q->getTable() . '.business_id', is_array($v) ? $v : [$v]);
		}
	}
}
