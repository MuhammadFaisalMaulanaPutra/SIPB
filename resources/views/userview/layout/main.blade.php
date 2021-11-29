<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Lancana">
	<meta name="author" content="Lancana">
	<link rel="icon" href="assets/images/lancanabig.png">		
	<title>Lancana.id | {{ $title }}</title>

	<link rel="favicon" href="assets/images/favicon.png">	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
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
					<li class="{{ ($title === 'Home') ? 'active' : '' }}"><a href="/">Home</a></li>
					<li class="{{ ($title === 'About') ? 'active' : '' }}"><a href = 'about'>About</a></li>
                    
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href='artikel'>Daftar Bencana</a></li>
							<li><a href="#">Pencegahan</a></li>
							<li><a href='histori'>Histori Laporan</a></li>
						
						</ul>
					</li>
                    @auth
                    <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Hai, {{ auth()->user()->nama_user }} <b class="caret"></b></a>
						<ul class="dropdown-menu">
                            <li><a href=''>Profile</a></li>
							<div class="d-grid gap-2 col-6 mx-auto">
								
							<form action="/logout" method="post">
								@csrf
								<div class="d-grid gap-2 d-md-flex justify-content-md-end">
									<button type="submit" class="btn btn-danger">Logout</button>
								</div>
							</form>
						</ul>
					</li>
                    @else
						@if ($title === 'Login')
						<li class="active"><a href='login'>Log In</a></li>
						@elseif($title === 'Sign Up')
						<li class="active"><a href='daftar'>Sign Up</a></li>
						@else
						<li class=""><a class="btn" href='login'>Log In</a></li>
						@endif
                    @endauth
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
    @yield('container')
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					<div class="col-md-5 panel">
						<h3 class="panel-title">About Lancana</h3>
						<div class="panel-body">
							<p>ngoceh.</p> 
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
	<script src="assets/js/modernizr-latest.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>

</html>
    