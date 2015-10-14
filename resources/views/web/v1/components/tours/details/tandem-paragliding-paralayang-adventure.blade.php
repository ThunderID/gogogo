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

	<p>Lokasi: Gunung Banyak, Batu - Malang</p>
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
				{{-- 2 pax --}}
				<tr>
					<td>Medium Tandem: Min 2 Pax</td>
					<td class='text-right'>IDR 425.000</td>
				</tr>

				<tr>
					<td>Advanced Tandem: Min 2 Pax</td>
					<td class='text-right'>IDR 600.000</td>
				</tr>
			</tbody>
		</table>
	</div>
@stop

@section('include')
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Tandem Paralayang <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Sertifikat Paragliding <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> 8x Softcopy dokumentasi foto <br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Khusus Advanced Tanem: Welcome dring & Snack<br>
	<span class="glyphicon glyphicon-check text-green" aria-hidden="true"></span> Khusus Advanced Tanem: Softcopy Video / Foto fly mode (menggunakan Gopro atau sejenisnya)<br>
@stop

@section('exclude')
	<span class="glyphicon glyphicon-remove text-red" aria-hidden="true"></span> Transportasi dari/ke Malang dari luar kota<br>
@stop

@section('ketentuan')
	- Meeting point di lokasi take off paralayang
@stop
