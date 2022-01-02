@extends('userview.layout.main')	

@section('container')

<!-- /.navbar -->

<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href='/'>Home</a></li>
			<li class="active">Buat Laporan</li>
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
					   
					   <form action = '/lapor' method ="post" enctype="multipart/form-data">
						   @csrf
						   <div class="top-margin">
							   <label for="pelapor">Pelapor</label>
							   <select name="id_pelapor" id="id_pelapor">
								   <option value={{ auth()->user()->id }}>{{ auth()->user()->nama_user }}</option>
							   </select>
						   </div>
						   <div class="top-margin">
							   <label for="ketikJudulLaporanAnda">Ketik Judul Laporan Anda <span class="text-danger">*</span></label>
							   <input class="form-control @error('judul_laporan') is-invalid @enderror" id="ketikJudulLaporanAnda" type="text" name="judul_laporan" placeholder="Ketik Judul Laporan Anda" data-sb-validations="required" />
							   	@error('judul_laporan')
                                    <div class="invalid-feedback text-danger">
                            	        {{ $message }}
                                	</div>
                                @enderror
						   </div>
						   <div class="top-margin">
							   <label for="ketikIsiLaporanAnda">Ketik Isi Laporan Anda <span class="text-danger">*</span></label>
							   <textarea class="form-control @error('isi_laporan') is-invalid @enderror" id="ketikIsiLaporanAnda" type="text" name="isi_laporan" placeholder="Ketik Isi Laporan Anda" style="height: 10rem;" data-sb-validations="required"></textarea>
							   @error('isi_laporan')
                                    <div class="invalid-feedback text-danger">
                            	        {{ $message }}
                                	</div>
                                @enderror
						   </div>
   
						   <div class="top-margin">
							   <label for="ketikJenisBencana">Pilih Bencana <span class="text-danger">*</span></label>
							   <select class="form-control @error('id_bencana') is-invalid @enderror" name="id_bencana" required>
									<option value='' disabled selected hidden>Pilih Bencana</option>
									@foreach ($bencana as $bencanas)
										@if (old('id_bencana') == $bencanas->id_bencana)
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
							   <select class="form-control @error('id_kecamatan') is-invalid @enderror" name="id_kecamatan" required>
									<option value='' disabled selected hidden>Pilih Kecamatan</option>
									@foreach ($kecamatan as $kecamatans)
										@if (old('id_kecamatan') == $kecamatans->id)
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
							   <input class="form-control @error('tanggal') is-invalid @enderror" type="text" name="tanggal" placeholder="Tanggal Kejadian" onfocus="(this.type='date')" value='{{ old('tanggal') }}' required/>
							    @error('tanggal')
                                    <div class="invalid-feedback text-danger">
                            	        {{ $message }}
                                	</div>
                                @enderror
						   </div>
   
						   <div class="top-margin">
							   <label for="tanggalKejadian">Waktu Kejadian <span class="text-danger">*</span></label>
							   <input class="form-control @error('waktu') is-invalid @enderror" type="time" name="waktu" placeholder="Tanggal Kejadian" value='{{ old('waktu') }}'  required/>
							    @error('waktu')
                                    <div class="invalid-feedback text-danger">
                            	        {{ $message }}
                                	</div>
                                @enderror
						   </div>
						   
						   <div class="top-margin">
							<label for="image" class="form-label">Upload Lampiran</label>
							<input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
							@error('image')

                                    <div class="invalid-feedback text-danger">
                            	        {{ $message }}
                                	</div>
                                @enderror
						   </div>
						
						</div>
						   
   
						   
   
						   <hr>
   
						   <div class="row">
							   <div class="col-lg-8">
								   
							   </div>
							   
							   <div class="col-lg-4 text-right">
								   <button class="btn btn-action" type="submit">Kirim</button>
							   </div>
							   </div>
						   </div>
					   </form>
				   </div>
			   </div>
   
		   </div>

@endsection