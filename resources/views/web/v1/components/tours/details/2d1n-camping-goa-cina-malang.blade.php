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
					<td>Min 20 Pax</td>
					<td class='text-right'>IDR 225.000</td>
				</tr>
				<tr>
					<td>Min 15 Pax</td>
					<td class='text-right'>IDR 250.000</td>
				</tr>
				<tr>
					<td>Min 12 Pax</td>
					<td class='text-right'>IDR 275.000</td>
				</tr>
				<tr>
					<td>Min 7 Pax</td>
					<td class='text-right'>IDR 300.000</td>
				</tr>
				<tr>
					<td>Min 4 Pax</td>
					<td class='text-right'>IDR 325.000</td>
				</tr>
			</tbody>
		</table>
	</div>
@stop

@section('include')
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Tiket Masuk Goa Cina <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Tiket Retribusi Pemda <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Tenda Dome, Matras, Sleeping Bag <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Api Unggun <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Makan 3x, Snack + Coffee/Tea Time <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Pemandu & Keamanan <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Penerangan <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Toilet <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Transportasi dari Malang (Stasiun Kota Baru, Bandara Abdul Rahman Saleh, Terminal Arjosari) ke Goa Cina <br>
@stop

@section('exclude')
	<span class="glyphicon glyphicon-remove text-red" aria-hidden="true"></span> Transportasi dari/ke Malang dari luar kota<br>
@stop

@section('ketentuan')
	-
@stop
