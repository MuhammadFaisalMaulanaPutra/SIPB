@extends('userview.layout.main')	

@section('container')
	<header id="head">
		<div class="container">
			   <div class="banner-content">
				   <div id="da-slider" class="da-slider">
					   <div class="da-slide">
						   <h2>Lapor Sigap</h2>
						   <p>Anda Kena Bencana ? Lancana Solusinya</p>
						   <div class="da-img"></div>
					   </div>
					   <div class="da-slide">
						   <h2>Sistem Informasi Pelaporan Bencana</h2>
						   <p>Solusi Informasi Bencana yang ada di Indonesia</p>
						   <div class="da-img"></div>
					   </div>
					   <div class="da-slide">
						   <h2>Bencana Alam</h2>
						   <p>Bencana Alam adalah peristiwa atau rangkaian peristiwa yang mengancam dan mengganggu kehidupan dan penghidupan masyarakat yang disebabkan, baik oleh faktor alam dan/atau faktor nonalam maupun faktor manusia sehingga mengakibatkan timbulnya korban jiwa manusia, kerusakan lingkungan, kerugian harta benda, dan dampak psikologis.</p>
						   <div class="da-img"></div>
					   </div>
					  
					   <nav class="da-arrows">
						   <span class="da-arrows-prev"></span>
						   <span class="da-arrows-next"></span>
					   </nav>
				   </div>
			   </div>
		   </div>	
	   </header>
   
	   <!-- Intro -->
	   <div class="container text-center">
		   <br> 
		   <h2 >Lancana</h2>
		   <h3 class="text-muted">
			   Layanan Aspirasi dan Pengaduan Online Rakyat
   Sampaikan Laporan Anda Langsung Kepada Instansi Pemerintah Berwenang
		   </h3>
	   </div>
   
	   <hr>
			 <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			   <div class="panel panel-default">
				   <div class="panel-body">
					   <h3 class="thin text-center">Lapor Sigap Bencana</h3>
					   <p class="text-center text-muted">Laporan anda sangat berguna bagi masyarakat sekitar  </p>
					   <hr>
					   
					   <form action = '/lapor' method ="post">
						   @csrf
						   <div class="top-margin">
							   <label for="ketikJudulLaporanAnda">Ketik Judul Laporan Anda <span class="text-danger">*</span></label>
							   <input class="form-control" id="ketikJudulLaporanAnda" type="text" name="judul_laporan" placeholder="Ketik Judul Laporan Anda" data-sb-validations="required" />
							   
							   
						   </div>
						   <div class="top-margin">
							   <label for="ketikIsiLaporanAnda">Ketik Isi Laporan Anda <span class="text-danger">*</span></label>
							   <textarea class="form-control" id="ketikIsiLaporanAnda" type="text" name="isi_laporan" placeholder="Ketik Isi Laporan Anda" style="height: 10rem;" data-sb-validations="required"></textarea>
							   
							   
							   
						   </div>
   
						   <div class="top-margin">
							   <label for="ketikJenisBencana">Pilih Bencana <span class="text-danger">*</span></label>
							   <select class="form-control" name="id_bencana" required>
									<option value='' disabled selected hidden>Pilih Bencana</option>
									   @foreach ($bencana as $bencanas)
										   <option value={{ $bencanas->id_bencana }} >{{ $bencanas->Nama_bencana }}</option>
									   @endforeach
							   </select>
			   
						   </div>
   
						   <div class="top-margin">
							   <label for="ketikJenisBencana">Pilih Kecamatan <span class="text-danger">*</span></label>
							   <select class="form-control" name="id_bencana" required>
									<option value='' disabled selected hidden>Pilih Kecamatan</option>
									   @foreach ($kecamatan as $kecamatans)
										   <option value={{ $kecamatans->id }} >{{ $kecamatans->Nama_Kecamatan }}</option>
									   @endforeach
							   </select>
						   
						   </div>
   
						   <div class="top-margin">
							   <label for="tanggalKejadian">Tanggal Kejadian <span class="text-danger">*</span></label>
							   <input class="form-control" type="text" name="tanggal" placeholder="Tanggal Kejadian" onfocus="(this.type='date')" required/>
							   
						   
					   
						   </div>
   
						   <div class="top-margin">
							   <label for="tanggalKejadian">Waktu Kejadian <span class="text-danger">*</span></label>
							   <input class="form-control" type="time" name="waktu" placeholder="Tanggal Kejadian"  required/>
							   
						   
					   
						   </div>
						   
						   
						   
   
						   
   
						   <hr>
   
						   <div class="row">
							   <div class="col-lg-8">
								   <b><a href="">Upload Lampiran</a></b>
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
	   
   
		   <hr>
   
   
   
   
   
			 
   
   </div>	<!-- /container -->
	   <div class="container">
	 <div class="row">
	   <div class='col-md-offset-2 col-md-8 text-center'>
	   <h2>Penilaian Penduduk</h2>
	   </div>
	 </div>
	 <div class='row'>
	   <div class='col-md-offset-2 col-md-8'>
		 <div class="carousel slide" data-ride="carousel" id="quote-carousel">
		   <!-- Bottom Carousel Indicators -->
		   <ol class="carousel-indicators">
			 <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
			 <li data-target="#quote-carousel" data-slide-to="1"></li>
			 <li data-target="#quote-carousel" data-slide-to="2"></li>
		   </ol>
		   
		   <!-- Carousel Slides / Quotes -->
		   <div class="carousel-inner">
		   
			 <!-- Quote 1 -->
			 <div class="item active">
			   <blockquote>
				 <div class="row">
				   <div class="col-sm-3 text-center">
					 <img class="img-circle" src="assets/images/person_1.png" style="width: 100px;height:100px;">
				   </div>
				   <div class="col-sm-9">
					 <p>Sangat mempermudah ketika kita ingin memastikan suatu tempat</p>
					 <small>Yuk Sri</small>
				   </div>
				 </div>
			   </blockquote>
			 </div>
			 <!-- Quote 2 -->
			 <div class="item">
			   <blockquote>
				 <div class="row">
				   <div class="col-sm-3 text-center">
					 <img class="img-circle" src="assets/images/person_2.png" style="width: 100px;height:100px;">
				   </div>
				   <div class="col-sm-9">
					 <p>Bisa mengetahui lokasi bencana yang baru terjadi</p>
					 <small>Budi</small>
				   </div>
				 </div>
			   </blockquote>
			 </div>
			 <!-- Quote 3 -->
			 <div class="item">
			   <blockquote>
				 <div class="row">
				   <div class="col-sm-3 text-center">
					 <img class="img-circle" src="assets/images/person_3.png" style="width: 100px;height:100px;">
				   </div>
				   <div class="col-sm-9">
					 <p>Ketika kita pulang dari kantor dan hujan deras, kita bisa mengetahui lokasi banjir dimana saja.</p>
					 <small>Lek Kati</small>
				   </div>
				 </div>
			   </blockquote>
			 </div>
		   </div>
		   
		   <!-- Carousel Buttons Next/Prev -->
		   <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
		   <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
		 </div>                          
	   </div>
	 </div>
   </div>   
@endsection
	