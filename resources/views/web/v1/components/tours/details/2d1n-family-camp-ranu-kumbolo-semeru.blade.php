@section('title')
	{{$tour->name}}
@stop

@section('image')
	<img src="{{ $tour->images[0] }}" class='thumbnail img-responsive'>
@stop


@section('summary')
	<p>{{$tour->summary}}</p>
@stop

@section('ittinary')
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-sm">
			<strong>Hari ke-1</strong>
		</div>
		
		<div class="col-xs-4 col-sm-3 col-md-4 col-lg-3 mb-sm">
			10.00
		</div>
		<div class="col-xs-8 col-sm-9 col-md-8 col-lg-9 mb-sm">
			Peserta kumpul di meeting point
		</div>

		<div class="col-xs-4 col-sm-3 col-md-4 col-lg-3 mb-sm">
			10.00 - 12.00
		</div>
		<div class="col-xs-8 col-sm-9 col-md-8 col-lg-9 mb-sm">
			Perjalanan menuju Base Ranu Pane
		</div>

		<div class="col-xs-4 col-sm-3 col-md-4 col-lg-3 mb-sm">
			12.00 - 13.00
		</div>
		<div class="col-xs-8 col-sm-9 col-md-8 col-lg-9 mb-sm">
			Makan siang, briefing dari petugas TNBT Semeru
		</div>

		<div class="col-xs-4 col-sm-3 col-md-4 col-lg-3 mb-sm">
			13.00 - 17.00
		</div>
		<div class="col-xs-8 col-sm-9 col-md-8 col-lg-9 mb-sm">
			Perjalanan menugu Base Ranu Kumbolo
		</div>

		<div class="col-xs-4 col-sm-3 col-md-4 col-lg-3 mb-sm">
			17.00 - …
		</div>
		<div class="col-xs-8 col-sm-9 col-md-8 col-lg-9 mb-sm">
			Acara bebas, Makan malam + Coffee &amp; Tea
		</div>

		

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-sm">
			<strong>Hari ke-2</strong>
		</div>

		<div class="col-xs-4 col-sm-3 col-md-4 col-lg-3 mb-sm">
			06.00
		</div>
		<div class="col-xs-8 col-sm-9 col-md-8 col-lg-9 mb-sm">
			Coffee &amp; Tea Time
		</div>

		<div class="col-xs-4 col-sm-3 col-md-4 col-lg-3 mb-sm">
			06.00
		</div>
		<div class="col-xs-8 col-sm-9 col-md-8 col-lg-9 mb-sm">
			Coffee &amp; Tea Time
		</div>

		<div class="col-xs-4 col-sm-3 col-md-4 col-lg-3 mb-sm">
			08.00 - 10.00
		</div>
		<div class="col-xs-8 col-sm-9 col-md-8 col-lg-9 mb-sm">
			Sarapan &amp; acara bebas + Photo session
		</div>
		
		<div class="col-xs-4 col-sm-3 col-md-4 col-lg-3 mb-sm">
			10.00 - 10.30
		</div>
		<div class="col-xs-8 col-sm-9 col-md-8 col-lg-9 mb-sm">
			Persiapan kembali ke base Ranu Pane
		</div>

		<div class="col-xs-4 col-sm-3 col-md-4 col-lg-3 mb-sm">
			10.30 - 13.30
		</div>
		<div class="col-xs-8 col-sm-9 col-md-8 col-lg-9 mb-sm">
			Perjalanan kembali ke Base Ranu Pane
		</div>

		<div class="col-xs-4 col-sm-3 col-md-4 col-lg-3 mb-sm">
			13.30 - 15.30
		</div>
		<div class="col-xs-8 col-sm-9 col-md-8 col-lg-9 mb-sm">
			Perjalanan kembali ke Malang
		</div>

	</div>

@stop

@section('harga')
	<div class="table-responsive mt-sm">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Keterangan</th>
					<th class='text-right'>Harga</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Min 4 Pax</td>
					<td class='text-right'>IDR 800.000</td>
				</tr>
			</tbody>
		</table>
	</div>
@stop

@section('include')
	<span class="glyphicon glyphicon-ok text-green" aria-hidden="true"></span> Tiket Masuk Camp Ranu Gumbolo Semeru <br>
	<span class="glyphicon glyphicon-ok text-green" aria-hidden="true"></span> Tiket Retribusi Pemda <br>
	<span class="glyphicon glyphicon-ok text-green" aria-hidden="true"></span> Tenda Dome, Matras, Sleeping Bag <br>
	<span class="glyphicon glyphicon-ok text-green" aria-hidden="true"></span> Makan 2x, Snack + Coffee/Tea Time <br>
	<span class="glyphicon glyphicon-ok text-green" aria-hidden="true"></span> Pemandu / Porter <br>
	<span class="glyphicon glyphicon-ok text-green" aria-hidden="true"></span> Foto Session <br>
	<span class="glyphicon glyphicon-ok text-green" aria-hidden="true"></span> Transportasi dari Malang (Stasiun Kota Baru, Bandara Abdul Rahman Saleh, Terminal Arjosari)<br>
@stop

@section('exclude')
	<span class="glyphicon glyphicon-remove text-red" aria-hidden="true"></span> Transportasi dari/ke Malang dari luar kota<br>
@stop

@section('ketentuan')
	<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Peserta tour wajib membawa surat keterangan sehat dari dokter atau rumah sakit yang ditunjuk<br>
	<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Membawa perbekalan pribadi, baju hangat dan keperluan pribadi lainnya dan obat obatan yang bersifat pribadi<br>
	<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Mentaati peraturan yang dibuat oleh penyelenggara tour dan peraturan Taman Nasional Bromo Tengger dan Semeru baik tertulis maupun tidak tertulis<br>
	<span class="glyphicon glyphicon-minus" aria-hidden="true"></span> Pembayaran uang muka (50%) maksimal 1 minggu sebelum keberangkatan. Pelunasan pembayaran saat keberangkatan<br>
@stop
