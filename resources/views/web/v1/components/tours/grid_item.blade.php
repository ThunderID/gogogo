<?php
	$required_variables = ['tour'];
	foreach ($required_variables as $x)
	{
		if (!array_key_exists($x, get_defined_vars()))
		{
			throw new Exception($widget_name . ":" . $x . ": Required", 1);
		}
	}
?>
<div class='grid-item'>
	<a href="{{ route('web.tour', ['slug' => $tour->slug ]) }}" title="{{$tour->name}}" class='text-white text-uppercase'>
		<img src='{{$tour->thumbnail}}' alt='{{$tour->name}}' title='{{$tour->name}}'>
		<div class='title'>
			<div class='pt-xs pb-xs mr-xs ml-xs'>
				{{$tour->name}}
			</div>
		</div>
		<div class='desc'>
			<div class='pt-xs pb-xs mr-xs ml-xs'>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<span class="glyphicon glyphicon-tag" aria-hidden="true"></span> mulai IDR {{number_format($tour->price,0,',','.')}}
					</div>
				</div>
			</div>
		</div>
	</a>
</div>