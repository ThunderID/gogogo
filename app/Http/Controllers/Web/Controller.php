<?php

namespace App\Http\Controllers\Web;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Collection;
use \App\Tour;

abstract class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	protected $layout;
	protected $template_dir;
	protected $tours;

	function __construct() 
	{
		// INITIALISE CURRENT VIEW
		$this->template_dir = 'web.v1.';
		$this->page_dir = $this->template_dir . 'pages.';
		$this->component_dir = $this->template_dir . 'components.';
		
		view()->share('template_dir', $this->template_dir);
		view()->share('page_dir', $this->page_dir);
		view()->share('component_dir', $this->component_dir);

		// LOAD TEMPLATES
		$this->layout = view($this->template_dir . 'templates.tmp');
		$this->layout->basic = view($this->template_dir . 'templates.tmp_content');

		// LOAD TOUR
		$this->load_sliders();
		$this->load_tour();
	}

	function load_sliders()
	{
		$this->sliders = new Collection;

		$this->sliders->push([
								'image' => 'http://drive.thunder.id/file/public/3/1/2015/10/13/16/camp-ranu-gumbolo.jpg', 
								'title' => '2D/1N Family Camp Ranu Kumbolo, Semeru',
								'caption' => 'Mulai dari Rp. 800.000',
								'link'	=> route('web.tour', ['slug' => str_slug('2D/1N Family Camp Ranu Kumbolo, Semeru')]),
								'button'=> 'Go!',
							]);
	}

	function load_tour()
	{
		$this->tours = new Collection;

		$thumbnail = 'http://drive.thunder.id/file/public/3/1/2015/10/12/20/feet-morning-adventure-camping.jpg';

		// CAMPING GOA CINA
		$this->tours->push(new Tour([
										'name'      => '2D/1N Camping Goa Cina, Malang',
										'slug'      => str_slug('2D/1N Camping Goa Cina, Malang'),
										'summary'   => 'Malang - Goa Cina - Malang',
										'ittinary'  => 'Lorem ipsum Veniam velit fugiat minim ex aute mollit minim ex dolore eiusmod ullamco ut et dolore sint est ut aliqua et incididunt ad amet laboris culpa amet anim irure ex Ut consequat nulla reprehenderit exercitation ullamco et dolore proident velit ut id dolor qui sint deserunt fugiat in ut nisi esse occaecat quis labore labore incididunt quis elit exercitation non velit mollit et tempor sunt deserunt irure cupidatat pariatur sit velit quis in quis eiusmod proident voluptate consequat cillum cupidatat cupidatat irure aliqua ex minim dolore est id nulla exercitation in labore mollit aliqua quis elit ut ex officia laborum commodo enim veniam veniam irure voluptate in dolore elit consequat consequat Ut aliqua eiusmod dolore deserunt qui anim ullamco officia labore enim exercitation dolor ut Duis officia nulla nulla officia velit tempor labore Ut occaecat consectetur non sunt incididunt sint exercitation ex anim laborum eiusmod cillum consectetur labore veniam ad anim amet deserunt nostrud deserunt qui aliquip pariatur aliquip consequat exercitation officia fugiat nulla elit aliqua sed magna ut officia esse.',
										'include'	=> [
															
														],
										'exclude'	=> [
															'Transportasi dari/ke Malang dari luar kota'
														],
										'images'    => ['http://drive.thunder.id/file/public/3/1/2015/10/13/16/goa-cina.jpg'],
										'thumbnail' => 'http://drive.thunder.id/file/public/3/1/2015/10/13/16/goa-cina.jpg',
										'price'     => 225000
									])
		);

		// CAMPING RANU KUMBOLO
		$this->tours->push(new Tour([
										'name'      => '2D/1N Family Camp Ranu Kumbolo, Semeru',
										'slug'      => str_slug('2D/1N Family Camp Ranu Kumbolo, Semeru'),
										'summary'   => '',
										'ittinary'  => 'Lorem ipsum Veniam commodo incididunt pariatur exercitation ex ex sit magna nostrud sit non ea enim culpa aute do non Duis in amet non dolor fugiat.',
										'include'	=> '',
										'exclude'	=> '',
										'images'    => ['http://drive.thunder.id/file/public/3/1/2015/10/13/16/ranu-gumbolo.jpg'],
										'thumbnail' => 'http://drive.thunder.id/file/public/3/1/2015/10/13/16/ranu-gumbolo.jpg',
										'price'     => 800000
									])
		);

		// Bromo Bike Adventure
		$this->tours->push(new Tour([
										'name'      => '1D Bromo Trail/Dirt Bike Adventure',
										'slug'      => str_slug('1D Bromo Trail/Dirt Bike Adventure'),
										'summary'   => '',
										'ittinary'  => 'Lorem ipsum Veniam commodo incididunt pariatur exercitation ex ex sit magna nostrud sit non ea enim culpa aute do non Duis in amet non dolor fugiat.',
										'include'	=> '',
										'exclude'	=> '',
										'images'    => ['http://drive.thunder.id/file/public/3/1/2015/10/13/16/trail-bromo.jpg'],
										'thumbnail' => 'http://drive.thunder.id/file/public/3/1/2015/10/13/16/trail-bromo.jpg',
										'price'     => 500000
									])
		);

		// Bromo Sunrise Adventure
		$this->tours->push(new Tour([
										'name'      => '1D Bromo Jeep Sunrise Adventure',
										'slug'      => str_slug('1D Bromo Jeep Sunrise Adventure'),
										'summary'   => '',
										'ittinary'  => 'Lorem ipsum Veniam commodo incididunt pariatur exercitation ex ex sit magna nostrud sit non ea enim culpa aute do non Duis in amet non dolor fugiat.',
										'include'	=> [
														],
										'exclude'	=> '',
										'images'    => ['http://drive.thunder.id/file/public/3/1/2015/10/13/16/Bromo_jeep_path.jpg'],
										'thumbnail' => 'http://drive.thunder.id/file/public/3/1/2015/10/13/16/Bromo_jeep_path.jpg',
										'price'     => 400000
									])
		);

		// Rafting
		$this->tours->push(new Tour([
										'name'      => 'Rafting / Arung Jeram Adventure, Probolinggo',
										'slug'      => str_slug('Rafting / Arung Jeram Adventure, Probolinggo'),
										'summary'   => '',
										'ittinary'  => 'Lorem ipsum Veniam commodo incididunt pariatur exercitation ex ex sit magna nostrud sit non ea enim culpa aute do non Duis in amet non dolor fugiat.',
										'include'	=> '',
										'exclude'	=> '',
										'images'    => ['http://drive.thunder.id/file/public/3/1/2015/10/13/16/rafting.jpg'],
										'thumbnail' => 'http://drive.thunder.id/file/public/3/1/2015/10/13/16/rafting.jpg',
										'price'     => 260000
									])
		);

		// Paragliding
		$this->tours->push(new Tour([
										'name'      => 'Tandem Paragliding / Paralayang Adventure, Gunung Banyak Batu',
										'slug'      => str_slug('Tandem Paragliding / Paralayang Adventure'),
										'summary'   => '',
										'ittinary'  => 'Lorem ipsum Veniam commodo incididunt pariatur exercitation ex ex sit magna nostrud sit non ea enim culpa aute do non Duis in amet non dolor fugiat.',
										'include'	=> '',
										'exclude'	=> '',
										'images'    => ['http://drive.thunder.id/file/public/3/1/2015/10/13/16/Paralayang-2-1024x768.jpg'],
										'thumbnail' => 'http://drive.thunder.id/file/public/3/1/2015/10/13/16/Paralayang-2-1024x768.jpg',
										'price'     => 425000
									])
		);
	}
}
