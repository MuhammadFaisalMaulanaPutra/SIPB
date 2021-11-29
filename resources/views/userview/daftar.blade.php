@extends('userview.layout.main')

@section('container')

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href='/'>Home</a></li>
			<li class="active">Registration</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Registration</h1>
				</header>
				
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Register a new account</h3>
							
							<hr>

							<form action = "{{ url ('/register') }}" method="POST">
								@csrf
								<div class="top-margin">
									<label>Name</label>
									<input type="text" class="form-control" placeholder="Name" name="nama_user">
								</div>
								<div class="top-margin">
									<label>Date of Birth</label>
									<input class="form-control" type="text" name="tgl_lahir" placeholder="Date of Birth" onfocus="(this.type='date')" required/>
								</div>
								<div class="top-margin">
									<label>Email Address <span class="text-danger">*</span></label>
									<input type="text" class="form-control" placeholder="Email Address" name="email">
								</div>

								<div class="top-margin">
									
										<label>Password <span class="text-danger">*</span></label>
										<input type="password" class="form-control" placeholder="Password" name="password">
								
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										<label class="checkbox">
											<input type="checkbox"> 
											I've read the <a href="#">Terms and Conditions</a>
										</label>                        
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit">Sign Up</button>
									</div>
									<div class="col-lg-8">
										<b>Already have an account ? <a href="login">Sign In</a></b>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	
@endsection