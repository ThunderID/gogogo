@section('main')
	<div class="container mt-xl">
		<div class="row">
			{{-- BREADCRUMB --}}
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href='{{route("web.home")}}'>Home</a> /
				<a href='{{route("web.home")}}'>Paket Tour</a> /
				{{$tour->name}}
			</div>

			{{-- PAKET DETAIL --}}
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-xl">
				<h1 class='mb-md'>@yield('title')</h1>

				<a href="tel:+623412992888" rel='phone'>
					<img src="{{asset('images/phone.png')}}">
				</a>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
				@yield('image')
			</div>

			<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">

				<h3 class="subtitle">Ittinary</h3>
				@yield('summary')
				@yield('ittinary')

				<h3 class="subtitle">Harga</h3>
				@yield('harga')

				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h3 class='subtitle mb-sm'>Paket Termasuk:</h3>
						@yield('include')
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h3 class='subtitle mb-sm'>Paket Tidak Termasuk:</h3>
						@yield('exclude')
					</div>
				</div>

				<h3 class="subtitle">Ketentuan Perjalanan</h3>
				@yield('ketentuan')
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mt-xl">
				<h3 class='subtitle'>PAKET TOUR LAINNYA</h3>
				@include($component_dir . 'tours.grid', ['tours' => $tours])
			</div>
		</div>
	</div>
@stop