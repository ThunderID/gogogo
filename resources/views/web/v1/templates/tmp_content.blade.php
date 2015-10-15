@section('top_bar')
	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
			<span class="glyphicon glyphicon-phone" aria-hidden="true">0341-2992888</span>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			
		</div>
	</div>
@show

@section('header')
	<div class="row">
		{{-- MOBILE --}}
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<div class='text-center hidden-md hidden-lg'>
				<a href='{{route("web.home")}}'>{!! Html::image('images/logo/logo.png', 'Gogogo.id Logo', ['height' => 40]) !!}</a>
			</div>
			<div class='hidden-xs hidden-sm'>
				<a href='{{route("web.home")}}'>{!! Html::image('images/logo/logo.png', 'Gogogo.id Logo', ['height' => 40]) !!}</a>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 pt-sm text-right menu">
			<div class='text-center hidden-md hidden-lg'>
				{!! Html::link(route('web.home'), 'Home', ['class' => 'ml-md']) !!}
			</div>
			<div class='hidden-xs hidden-sm'>
				{!! Html::link(route('web.home'), 'Home', ['class' => 'ml-md']) !!}
			</div>
			{{-- {!! Html::link(route('web.home'), 'Paket Tour', ['class' => 'ml-md']) !!} --}}
			{{-- {!! Html::link(route('web.home'), 'Sewa Mobil', ['class' => 'ml-md']) !!} --}}
		</div>
	</div>
@show

@section('footer')
	<div class="row mt-xl mb-xl">
		<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 pt-xs">
			{!! Html::image('images/logo/logo.png', 'Gogogo.id Logo', ['height' => 40]) !!}
			<p class='mt-xs ml-md'>
				Office:
				{{-- <br>Ruko Puri Niaga A10 Araya - Malang --}}
				<br><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> 0341-2992888
				<br><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> 
					halo
					<span class="glyphicon glyphicon-at" aria-hidden="true"></span>gogogo
					<span class="glyphicon glyphicon-dot" aria-hidden="true"><span>id
			</p>
			<p class='mt-xs ml-md'>
				Office Hour: 
				<br>Senin-Jumat: 09.00 - 16.00 
			</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
			<h4 class='mt-sm'>TENTANG KAMI</h4>
			<p class='mt-sm'>
				Sedang ada waktu senggang dan bingung mau ngapain? Cari aja info di Gogogo.id tentang berbagai kegiatan yang
				dapat menjadi referensi anda.
			</p>
		</div>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						
		</div>
	</div>
@show