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
	<p>
		<strong>1 Day</strong>: 07.30 - 17.00 WIB <br>
		<strong>Night Trip</strong>: 00.00 - 12.00 WIB (Gunung Bromo)
	</p>

	<strong class='text-uppercase'>Rute:</strong>
	<p>Gunung Bromo, Gunung Mujur, Gunung Panderman, Kebun Teh, Air Terjun Coban Rondo, Air Terjun Coban Putri, PWEC, Wisata Bedengan, Gunung Kawi, dll</p>
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
					<td class='text-right'>IDR 500.000</td>
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
					<td class='text-right'>IDR 600.000</td>
				</tr>
				<tr>
					<td>Internasional</td>
					<td class='text-right'>IDR 875.000</td>
				</tr>

				{{-- 1 pax --}}
				<tr>
					<td colspan='3' class='text-blue text-uppercase'><strong>1-2 Pax</strong></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-right-arrow" aria-hidden="true"></span>Domestik/KITAS</td>
					<td class='text-right'>IDR 700.000</td>
				</tr>
				<tr>
					<td>Internasional</td>
					<td class='text-right'>IDR 975.000</td>
				</tr>
			</tbody>
		</table>
	</div>
@stop

@section('include')
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Welcome drink, 1x Makan, 2x Snack <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Guide Captain Road &amp; Sweeper <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Air Mineral <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Helm, Sarung Tangan (Glove), Standard Protector (Knee-Elbow), Jersey, Kacamata Goggle <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Dokumentasi Foto &amp; Video <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Unit Motor Kawasaki KLX150 + BBM <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Transportasi dari Malang (Stasiun Kota Baru, Bandara Abdul Rahman Saleh, Terminal Arjosari)<br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Tiket masuk wisata (khusus Bromo, Sabtu-Minggu untuk travellers internasional dikenakan tambahan biaya sebesar IDR 125.000/pax)<br>
@stop

@section('exclude')
	<span class="glyphicon glyphicon-remove text-red" aria-hidden="true"></span> Transportasi dari/ke Malang dari luar kota<br>
@stop

@section('ketentuan')
	-
@stop
