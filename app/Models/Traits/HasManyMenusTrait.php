<?php 

namespace App;

trait HasManyMenusTrait {

	//
	function menus()
	{
		return $this->HasMany(__NAMESPACE__ . '\Menu');
	}

	function scopeHasMenuId($q, $v = null)
	{
		if (!$v)
		{
			return $q;
		}
		else
		{
			return $q->whereHas('menus', function($q) use ($v) {
				$q->whereIn($q->getTable() . '.id', is_array($v) ? $v : [$v]);
			});
		}
	}
}
