<?php 

namespace App;

use Illuminate\Support\MessageBag;

trait PublishableTrait {

	static function bootPublishableTrait()
	{
		if (!isset(Static::$slug_field))
		{
			throw new Exception("\$slug_field has not been set", 1);
		}

		if (!isset(Static::$slug_source_field))
		{
			throw new Exception("\$slug_source_field has not been set", 1);
		}

		Static::saving(function($model){
			if (!$model->{$model->slug_field})
			{
				$model->{$model->slug_field} = str_slug($model->{$model->slug_source_field});
			}
		});
	}

	//-----------------------------------------------------------------------------------------------------------------------
	// SCOPE
	//-----------------------------------------------------------------------------------------------------------------------
	function scopePublished($q, \Carbon\Carbon $v = null)
	{
		if (!$v)
		{
			return $q->whereNotNull('published_at');
		}
		else
		{
			return $q->where('published_at', '<='. $v);
		}
	}

	function scopeDraft($q)
	{
		return $q->whereNull('published_at');
	}

	function scopeUpcoming($q, \Carbon\Carbon $v = null)
	{
		if (!$v)
		{
			return $q->where('published_at', '>', \Carbon\Carbon::now());
		}
		else
		{
			return $q->where('published_at', '>', $v);
		}
	}

	function scopeSlugIs($q, $v = null)
	{
		if (!$v)
		{
			return $q;
		}
		else
		{
			return $q->where(Static::$slug_field, 'like', $v);
		}
	}

}
