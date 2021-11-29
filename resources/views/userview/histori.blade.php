<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Atlanta is a modern and fully responsive Template by WebThemez.">
	<meta name="author" content="webThemez.com">	

    <link rel="icon" href="assets/images/lancanabig.png">		
	<title>Lancana.id</title>
	<link rel="favicon" href="assets/images/favicon.png">	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	
	<!-- Custom styles-->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href='/'><img src="assets/images/lancana.png" widht="180" height="30"alt="Atlanta HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href='/'>Home</a></li>
					<li><a href='about'>About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href='artikel'>Daftar Bencana</a></li>
							<li><a href="#">Pencegahan</a></li>
							<li><a href='histori'>Histori Laporan</a></li>
						</ul>
					</li>
					
					<li><a href='daftar'>Daftar Akun</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
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
		@foreach ( $pelaporan as $pelaporans)
	  <tr>
		<th scope="row"> {{ $pelaporans ->id}}</th>
		<td> {{ $pelaporans ->judul_laporan}}</td>
		<td> {{ $pelaporans ->bencana ->Nama_bencana}} </td>
		<td> {{ $pelaporans ->kecamatan ->Nama_Kecamatan }}</td>
		<td> {{ $pelaporans ->waktu_bencana }}</td>
		<td> {{ $pelaporans ->isi_laporan }}</td>

		

	  </tr>
	  @endforeach
	</tbody>
  </table>
  
  
  </table>


















			</aside>
			<!-- /Sidebar -->

 <!--image slider start-->
 
	<!--manual navigation end-->
  </div>
  <!--image slider end-->
		</div>
	</div>	<!-- /container -->
	
	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					<div class="col-md-5 panel">
						<h3 class="panel-title">About Atlanta</h3>
						<div class="panel-body">
							<p>Lorem ipsum dolor amet, consectetur adipiscing elit. Aenean leo lectus sollicitudin convallis eget libero. Aliquam laoreet tellus ut libero semper, egestas velit malesuada. Sed non risus eget dolor amet vestibulum ullamcorper. Integer feugiat molestie.</p> 
						</div>
					</div>

					<div class="col-md-4 panel contact"> 
						<h3 class="panel-title">Contact Info</h4>
						<div class="panel-body">
							<p>Hubungi kami .</p>
							<ul>
							  <li><i class="fa fa-phone"></i>0812-3418-9999</li>
							  <li><a href="#"><i class="fa fa-envelope-o"></i> lancana@gmail.com</a></li>
							  <li><i class="fa fa-flag"></i>Gubeng Jaya</li>
							</div>
					</div>

					<div class="col-md-3 panel">
						<h3 class="panel-title">Follow me</h3>
						<div class="panel-body">
							<p class="follow-me-icons">
								<a href=""><i class="fa fa-twitter fa-2"></i></a>
								<a href=""><i class="fa fa-dribbble fa-2"></i></a>
								<a href=""><i class="fa fa-github fa-2"></i></a>
								<a href=""><i class="fa fa-facebook fa-2"></i></a>
								<a href=""><i class="fa fa-youtube fa-2"></i></a>
								<a href=""><i class="fa fa-pinterest fa-2"></i></a>
							</p>	
						</div>
					</div>
			
				</div> <!-- /row of panels -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="simplenav">
								<a href='/'>Home</a> | 
								<a href='about'>About</a> |
								
							</p>
						</div>
					</div>

					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy; 2021.
							</p>
						</div>
					</div>

				</div> <!-- /row of panels -->
			</div>
		</div>

	</footer>	
		



	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>