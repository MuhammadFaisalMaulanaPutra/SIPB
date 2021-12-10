@extends('userview.layout.main')	

@section('container')

<!-- /.navbar -->

<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href='/'>Home</a></li>
			<li><a href='/histori'>Histori Laporan</a></li>
			<li class="active">Edit Laporan</li>
		</ol>
	</div>

</div>
	   <hr>
			 <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			   <div class="panel panel-default">
				   <div class="panel-body">
					   <h3 class="thin text-center">Lapor Sigap Bencana</h3>
					   <p class="text-center text-muted">Laporan anda sangat berguna bagi masyarakat sekitar  </p>
					   <hr>
					   
					   <form action = '/edithistori/{{ $title }}' method ="post">
						   @method('put')
						   @csrf
						   <div class="top-margin">
							   <label for="pelapor">Pelapor</label>
							   <select name="id_pelapor" id="id_pelapor">
								   <option value={{ auth()->user()->id }}>{{ auth()->user()->nama_user }}</option>
							   </select>
						   </div>
						   <div class="top-margin">
							   <label for="ketikJudulLaporanAnda">Judul Laporan<span class="text-danger">*</span></label>
							   <input class="form-control" id="ketikJudulLaporanAnda" type="text" name="judul_laporan" placeholder="Ketik Judul Laporan Anda" data-sb-validations="required" value={{ old('judul_laporan', $report->judul_laporan) }} required/>
							   	@error('judul_laporan')
									<div class="invalid-feedback text-danger">
										{{ $message }}
									</div>
						   		@enderror
							</div>
						   <div class="top-margin">
							   <label for="ketikIsiLaporanAnda">Isi Laporan<span class="text-danger">*</span></label>
							   <textarea class="form-control" id="ketikIsiLaporanAnda" type="text" name="isi_laporan" placeholder="Ketik Isi Laporan Anda" style="height: 10rem;" data-sb-validations="required">{{ old('isi_laporan',$report->isi_laporan) }}</textarea>
							   @error('isi_laporan')
									<div class="invalid-feedback text-danger">
										{{ $message }}
									</div>
						   		@enderror   
						   </div>
   
						   <div class="top-margin">
							   <label for="ketikJenisBencana">Pilih Bencana <span class="text-danger">*</span></label>
							   <select class="form-control" name="id_bencana" required>
									<option value='' disabled selected hidden>Pilih Bencana</option>
									   @foreach ($bencana as $bencanas)
											@if (old('id_bencana', $report->FK_Id_bencana) == $bencanas->id_bencana)
												<option value={{ $bencanas->id_bencana }} selected>{{ $bencanas->Nama_bencana }}</option>
											@else
										   		<option value={{ $bencanas->id_bencana }} >{{ $bencanas->Nama_bencana }}</option>
											@endif
									   @endforeach
							   </select>
							   @error('id_bencana')
									<div class="invalid-feedback text-danger">
										{{ $message }}
									</div>
						   		@enderror  
						   </div>
   
						   <div class="top-margin">
							   <label for="ketikJenisBencana">Pilih Kecamatan <span class="text-danger">*</span></label>
							   <select class="form-control" name="id_kecamatan" required>
									<option value='' disabled selected hidden>Pilih Kecamatan</option>
									   @foreach ($kecamatan as $kecamatans)
											@if (old('id_kecamatan', $report->FK_Id_kecamatan) == $kecamatans->id)
												<option value={{ $kecamatans->id }} selected>{{ $kecamatans->Nama_Kecamatan }}</option>
											@else
												<option value={{ $kecamatans->id }} >{{ $kecamatans->Nama_Kecamatan }}</option>
											@endif
									   @endforeach
							   </select>
							   @error('id_kecamatan')
									<div class="invalid-feedback text-danger">
										{{ $message }}
									</div>
						   		@enderror  
						   </div>
   
						   <div class="top-margin">
							   <label for="tanggalKejadian">Tanggal Kejadian <span class="text-danger">*</span></label>
							   <input class="form-control" type="text" name="tanggal" placeholder="Tanggal Kejadian" onfocus="(this.type='date')" value={{ old('tanggal',$report->tgl_bencana) }} required/>
							   @error('tanggal')
									<div class="invalid-feedback text-danger">
										{{ $message }}
									</div>
						   		@enderror  
						   
					   
						   </div>
   
						   <div class="top-margin">
							   <label for="tanggalKejadian">Waktu Kejadian <span class="text-danger">*</span></label>
							   <input class="form-control" type="time" name="waktu" placeholder="Tanggal Kejadian" value={{ old('waktu',$report->waktu_bencana) }} required/>
							   	@error('waktu')
									<div class="invalid-feedback text-danger">
										{{ $message }}
									</div>
						   		@enderror  
						   </div>
						   
						   
						   
   
						   
   
						   <hr>
   
						   <div class="row">
								<div class="col-lg-8">
									
								</div>
							   <div class="col-lg-4 text-right">
								   <button class="btn btn-action" type="submit">Konfirmasi</button>
							   </div>
							   </div>
						   </div>
					   </form>
				   </div>
			   </div>
   
		   </div>

@endsection