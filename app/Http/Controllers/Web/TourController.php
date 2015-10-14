<?php

namespace App\Http\Controllers\Web;

class TourController extends Controller {

	function paket($slug)
	{
		$slug = strtolower($slug);

		$tour = $this->tours->where('slug', $slug);

		if (!$tour)
		{
			App::abort(404);
		}
		else
		{
			$this->layout->page = view($this->page_dir . 'tour_detail');
			$this->layout->page->content 	= view($this->component_dir . 'tours.details.' . $slug, ['tour' => $tour->first()]);


			$current_tour = $tour->first();
			$this->layout->page_title 		= $current_tour->name;
			
			$this->layout->page->tour 		= $current_tour;
			$this->layout->page->tours 		= $this->tours->reject(function($item) use ($current_tour) {
				return $item->slug == $current_tour->slug;
			});

			return $this->layout;
		}
	}

}
	