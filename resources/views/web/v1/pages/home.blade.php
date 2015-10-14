@section('main')
	{{-- SLIDER --}}
	@include($component_dir . 'slider', ['sliders' => $sliders])

	{{--  WHAT WE DO --}}
	<div class="container">
		<div class="row mt-md">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h1>Go! <span class='text-orange'>Go!</span> Go!</h1>
			</div>
		</div>
		<div class="row mt-md">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				@include($component_dir . 'tours.grid', ['tours' => $tours])
			</div>
		</div>
	</div>


	{{-- LATEST TOUR --}}
@stop