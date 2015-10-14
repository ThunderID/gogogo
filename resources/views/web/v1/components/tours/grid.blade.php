<?php
	$required_variables = ['tours'];
	foreach ($required_variables as $x)
	{
		if (!array_key_exists($x, get_defined_vars()))
		{
			throw new Exception($widget_name . ":" . $x . ": Required", 1);
		}
	}
?>

<div class='tours grid'>
	<div class="row">
		@foreach ($tours as $tour)
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 mb-md">
				@include($component_dir . 'tours.grid_item', [ 'tour' => $tour ])
			</div>
		@endforeach
	</div>
</div>