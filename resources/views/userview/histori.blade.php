@extends('userview.layout.main')

@section('container')
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href='/'>Home</a></li>
			<li class="active">Histori</li>
		</ol>
		<hr>

		<table class="table">
			<thead class="thead-dark">
			<tr>
				<th scope="col">No</th>
				<th scope="col">Judul</th>
				<th scope="col">Bencana</th>
				<th scope="col">Kecamatan</th>
				<th scope="col">Tanggal</th>
				<th scope="col">Isi</th>
			</tr>
			</thead>
			
			<tbody>
				@foreach ( $report as $reports)
			<tr>
				<th scope="row"> {{ $reports ->id}}</th>
				<td> {{ $reports ->judul_laporan}}</td>
				<td> {{ $reports ->bencana ->Nama_bencana}} </td>
				<td> {{ $reports ->kecamatan ->Nama_Kecamatan }}</td>
				<td> {{ $reports ->waktu_bencana }}</td>
				<td> {{ $reports ->isi_laporan }}</td>
			</tr>
			@endforeach
			</tbody>
		</table>
	</div>

@endsection