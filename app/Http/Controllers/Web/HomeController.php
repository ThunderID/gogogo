<?php

namespace App\Http\Controllers\Web;

class HomeController extends Controller {
	
	function index()
	{
		$this->layout->page_title = 'Gogogo.id - paket tour adventure malang';

		$this->layout->page = view($this->page_dir . 'home');
		$this->layout->page->sliders = $this->sliders;
		$this->layout->page->tours = $this->tours;
		return $this->layout;
	}
}