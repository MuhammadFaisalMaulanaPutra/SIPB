@extends('userview.layout.main')

@section('container')
<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

	<ol class="breadcrumb">
		<li><a href='/'>Home</a></li>
		<li class="active">About</li>
	</ol>

	<div class="row">
		
		<!-- Article main content -->
		<article class="col-sm-8 maincontent">
			<header class="page-header">
				<h1 class="page-title">About Lancana</h1>
			</header>
			<h3>Lancana</h3>
			<p><img src="assets/images/about.jpg" alt="" class="img-rounded pull-right" width="300" ></p>
			<p>Sejarah Lancana terbentuk tidak terlepas dari perkembangan penanggulangan bencana pada masa tugas pwbf hingga bencana alam berupa gempa bumi dahsyat di Samudera Hindia pada abad 20. Sementara itu, perkembangan tersebut sangat dipengaruhi pada konteks situasi, cakupan dan paradigma penanggulangan bencana.</p>
			<p> Melihat kenyataan saat ini, berbagai bencana yang dilatarbelakangi kondisi geografis, geologis, hidrologis, dan demografis mendorong Indonesia untuk membangun visi untuk membangun ketangguhan bangsa dalam menghadapi bencana.</p>
			
			<!--
			<h3>Company Goals</h3>
			<p>tak de!</p>
			<h3>Team</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente. voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia voluptatem natus velit fugiat omnis rem eos sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p>
			<h3>Public News</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente., consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil nesciunt unde veniam magnam repudiandae sapiente.</p>
			-->
		</article>
		<!-- /Article -->
		
		{{-- <!-- Sidebar -->
		<aside class="col-sm-4 sidebar sidebar-right">

			<div class="panel">
				<h4>Latest News</h4>
				
				<ul class="list-unstyled list-spaces">
					@foreach ($report as $reports)
						<div class="card w-100">
							<div class="card-body">
							<h4 class="card-title"><a href="">{{ $reports->judul_laporan }}</a></h4>
							<p class="card-text">{{ $reports->isi_laporan }}</p>
							</div>
						</div>
					@endforeach
				</ul>
			</div>

		</aside>
		<!-- /Sidebar --> --}}

	</div>
</div>	

<!-- /container -->
@endsection
	