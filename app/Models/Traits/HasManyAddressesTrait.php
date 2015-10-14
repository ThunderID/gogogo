<?php 

namespace App;

trait HasManyAddressesTrait {

	//
	function addresses()
	{
		return $this->HasMany(__NAMESPACE__ . '\Address');
	}

	function scopeHasAddressId($q, $v = null)
	{
		if (!$v)
		{
			return $q;
		}
		else
		{
			return $q->whereHas('addresses', function($q) use ($v) {
				$q->whereIn($q->getTable() . '.id', is_array($v) ? $v : [$v]);
			});
		}
	}
}
