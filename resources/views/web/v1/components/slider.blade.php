<?php
	$required_variables = ['sliders'];
	foreach ($required_variables as $x)
	{
		if (!array_key_exists($x, get_defined_vars()))
		{
			throw new Exception($widget_name . ":" . $x . ": Required", 1);
		}
	}
?>

<div id="carousel-id" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		@foreach ($sliders as $k => $slider)
			<li data-target="#carousel-id" data-slide-to="{{$k}}" class="{{$k == 0 ? 'active' : ''}}"></li>
		@endforeach
	</ol>
	<div class="carousel-inner">
		@foreach ($sliders as $k => $slider)
			<div class="item {{$k==0 ? 'active': ''}}">
				<img src="{{ $slider['image']}}" style='width:100%'>
				<div class="container">
					<div class="carousel-caption">
						<h1>{{$slider['title']}}</h1>
						<p>{{$slider['caption']}}</p>
						<p><a class="btn btn-lg btn-primary" href="{{$slider['link']}}" role="button">{{ $slider['button']}}</a></p>
					</div>
				</div>
			</div>
		@endforeach
	</div>
	<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>

