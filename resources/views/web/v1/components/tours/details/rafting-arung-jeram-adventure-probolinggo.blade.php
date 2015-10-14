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
	<strong class='text-uppercase'>Lokasi:</strong>
	<p>Sungai Pekalen, Probolinggo</p>
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
					<td colspan='3' class='text-blue text-uppercase'><strong>Min 5 Pax: Beautiful Trip (Sungai Pekalen Atas - 12km)</strong></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-right-arrow" aria-hidden="true"></span>Domestik/KITAS</td>
					<td class='text-right'>IDR 260.000</td>
				</tr>
				<tr>
					<td>Internasional</td>
					<td class='text-right'>IDR 440.000</td>
				</tr>

				{{-- 3-4 pax --}}
				<tr>
					<td colspan='3' class='text-blue text-uppercase'><strong>Min 10 Pax: Extreme Trip </strong></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-right-arrow" aria-hidden="true"></span>Domestik/KITAS</td>
					<td class='text-right'>IDR 480.000</td>
				</tr>
				<tr>
					<td>Internasional</td>
					<td class='text-right'>IDR 760.000</td>
				</tr>

				{{-- 1 pax --}}
				<tr>
					<td colspan='3' class='text-blue text-uppercase'><strong>Min: 5 Pax: Penginapan Saung Condong</strong></td>
				</tr>
				<tr>
					<td><span class="glyphicon glyphicon-right-arrow" aria-hidden="true"></span>Outdoor Cottage / Gasebo; Kamar Bambu + Breakfast</td>
					<td class='text-right'>IDR 85.000</td>
				</tr>
			</tbody>
		</table>
	</div>
@stop

@section('include')
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Welcome drink, Makan Siang, Snack, Air Mineral <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Transportasi Lokal <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Perlengkapan Rafting <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Guide<br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Asuransi <br>
@stop

@section('exclude')
	<span class="glyphicon glyphicon-remove text-red" aria-hidden="true"></span> Transportasi dari/ke Malang dari luar kota<br>
@stop

@section('ketentuan')
	-
@stop
