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
	<p><strong>Waktu</strong>: 23.00 - 12.00 WIB</p>

	<p>Rute:
		<ol>
			<li>Malang - Tumpang - Penanjakan - Padang Pasir - Kawah Bromo - Savana</li>
			<li>Malang -Nongkojajar - Penanjakan - Padang Pasir - Kawah Bromo - Savana</li>
		</ol>
	</p>
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
				{{-- 5 pax --}}
				<tr>
					<td colspan='3' class='text-blue text-uppercase'><strong>Min 5 Pax</strong></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-right-arrow" aria-hidden="true"></span>Domestik/KITAS</td>
					<td class='text-right'>IDR 400.000</td>
				</tr>
				<tr>
					<td>Internasional</td>
					<td class='text-right'>IDR 775.000</td>
				</tr>

				{{-- 3-4 pax --}}
				<tr>
					<td colspan='3' class='text-blue text-uppercase'><strong>3-4 Pax</strong></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-right-arrow" aria-hidden="true"></span>Domestik/KITAS</td>
					<td class='text-right'>IDR 625.000</td>
				</tr>
				<tr>
					<td>Internasional</td>
					<td class='text-right'>IDR 1.025.000</td>
				</tr>

				{{-- 2 pax --}}
				<tr>
					<td colspan='3' class='text-blue text-uppercase'><strong>2 Pax</strong></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-right-arrow" aria-hidden="true"></span>Domestik/KITAS</td>
					<td class='text-right'>IDR 925.000</td>
				</tr>
				<tr>
					<td>Internasional</td>
					<td class='text-right'>IDR 1.375.000</td>
				</tr>

				{{-- 1 pax --}}
				<tr>
					<td colspan='3' class='text-blue text-uppercase'><strong>1 Pax</strong></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-right-arrow" aria-hidden="true"></span>Domestik/KITAS</td>
					<td class='text-right'>IDR 1.800.000</td>
				</tr>
				<tr>
					<td>Internasional</td>
					<td class='text-right'>IDR 2.300.000</td>
				</tr>
			</tbody>
		</table>
	</div>
@stop

@section('include')
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Welcome drink, 1x Makan, 2x Snack <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Guide + Driver <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Air Mineral 600ml <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> BBM <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Transportasi dari Malang (Stasiun Kota Baru, Bandara Abdul Rahman Saleh, Terminal Arjosari)<br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Tiket masuk wisata <br>
@stop

@section('exclude')
	<span class="glyphicon glyphicon-remove text-red" aria-hidden="true"></span> Transportasi dari/ke Malang dari luar kota<br>
@stop

@section('ketentuan')
	-
@stop
