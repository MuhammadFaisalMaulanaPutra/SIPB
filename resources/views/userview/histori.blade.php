@extends('userview.layout.main')

@section('container')
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href='/'>Home</a></li>
			<li class="active">Histori Laporan Saya</li>
		</ol>
		<hr>

		<div class="row">
			<div class="col-lg-10">
				<h3>Laporan Saya</h3>
			</div>
			<div class="col-lg-2 text-right">
				<a href="/laporan">
					<button class="btn btn-success btn-block" type="submit">Buat Laporan</button>
				</a>
			</div>
		</div>
		
		<table class="table">
			<thead class="thead-dark">
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Judul</th>
				<th scope="col">Bencana</th>
				<th scope="col">Kecamatan</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Waktu</th>
				<th scope="col">Status</th>
				<th scope="col">Image</th>
				<th scope="col">Edit Laporan</th>
				<th scope="col">Hapus</th>
			</tr>
			</thead>
			
			<tbody>
				@foreach ( $report as $reports)
			<tr>
				<th scope="row"> {{ $reports ->id}}</th>
				<td> {{ $reports ->judul_laporan}}</td>
				<td> {{ $reports ->bencana ->Nama_bencana}} </td>
				<td> {{ $reports ->kecamatan ->Nama_Kecamatan }}</td>
				<td> {{ $reports ->tgl_bencana }}</td>
				<td> {{ $reports ->waktu_bencana }}</td>
				<td> @if ($reports ->status == 1)
					Approved
					@elseif ($reports ->status == 0)
					Pending
					@else
					Declined    
					@endif
				</td>
				
				<td><img src="uploads/{{ $reports->image }}" style="width: 50px;"></td>
				
				<td><a href="{{ url("/histori-") }}{{ $reports->id }}">
					<button class="btn btn-warning btn-block" type="submit">Edit</button>
					</a>
				</td>
				<td>
					<form action="/histori/delete/{{ $reports->id }}" method="POST" class="d-inline">
						@method('delete')
						@csrf
						<button class="btn btn-danger btn-block" onclick="return confirm('Apakah Yakin Data Akan Di Hapus?')" type="submit">Hapus</button>
					</form>
				</td>
			</tr>
			@endforeach
			</tbody>
		</table>
		
	</div>

@endsection