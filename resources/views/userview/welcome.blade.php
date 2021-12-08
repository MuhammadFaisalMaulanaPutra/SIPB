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
		   <hr>
	   </div>
		<div class="container">
			<div class="text-center">
				<h2>Latest News</h2>
			</div>
			<h1></h1>
			
			<ul class="list-unstyled list-spaces">
				<div class="card mb-3" style="max-width: 800px;">
					@foreach ($report as $reports)
						<div class="card w-100">
							<div class="card-body">
							<h3 class="card-title"><a href="">{{ $reports->judul_laporan }}</a></h3>
							<h6>-{{ $reports->bencana->Nama_bencana }}- by: {{ $reports->user->nama_user }} </h6>
							<p class="card-text">{{ $reports->isi_laporan }}</p>
							</div>
						</div>
					@endforeach
					
				</div>
			</ul>
		</div>
	   
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
	