<?php use Illuminate\Support\Str; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TexnoPOS Programmistleri</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="TexnoPOS IT Mektebi" />
	<meta name="author" content="TEXNOPOS DEVELOPERS!">
	<meta name="stkeywords" content="TexnoPOS" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/mycss.css')}}">
</head>


<body>
	<div class="parda">
		<div class="shadows">
			<span class="t">T</span>
			<span class="e">E</span>
			<span class="x">X</span>
			<span class="n">N</span>
			<span class="o">O</span>
			<span class="p">P</span>
			<span class="o">O</span>
			<span class="s">S</span>
		</div>
	</div>
	<div class="wrapper">
		

		@include('includes.header')
	
		
		@include('includes.responsiv-menu')


		<section class="pager-section">
			<div class="container">
				<div class="pager-content text-center">
					<h2 class="myshadow">Proectler</h2>
				</div><!--pager-content end-->
				<h2 class="page-titlee"></h2>
			</div>
		</section><!--pager-section end-->

		<section class="page-content">

			<div class="container d-flex" style="justify-content: space-around">
				<div class="row">
					@foreach ($proects as $proect)
						
					<div class="col-md-3 col-12 col-xl-3 col-lg-3 col-sm-3 mb-3">
						<div class="card" style="">
							<div id="carousel{{$loop->index}}" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-inner">
									@foreach ($imgs->where('id_proect', $proect->id) as $img)
									@if($loop->first)
										<div class="carousel-item active rounded" >
											<img  height="100" width="100" src="{{asset('assets/img/proects/'.$img->img)}}" class="d-block pr-img" alt="...">
										</div>
									@else
									<div class="carousel-item rounded" >
										<img  height="100" width="100" src="{{asset('assets/img/proects/'.$img->img)}}" class="d-block w-100" alt="...">
									</div>
									@endif
									@endforeach
								  
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carousel{{$loop->index}}" data-bs-slide="prev">
								  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
								  <span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carousel{{$loop->index}}" data-bs-slide="next">
								  <span class="carousel-control-next-icon" aria-hidden="true"></span>
								  <span class="visually-hidden">Next</span>
								</button>
							</div>
							<div class="card-body d-flex flex-column">
							  <h3 class="card-title fw-bold text-dark text-center">{{$proect->title}}</h3>
							  <h1 class="text-center">#{{$proect->type}}</h1>
							  <p class="card-text text-center m-2">
								  {{Str::limit($proect->text,50,' ...')}}
								</p>
							  <a href="{{ route('get_proect', ['id'=>$proect->id]) }}" class="btn btn-dark">Toliq Mag`liwmat</a>
							</div>
						</div>
					</div>

					@endforeach
				</div>
			</div>
		</section><!--page-content end-->


        @include('includes.dizimnen-otuw')
		<!--newsletter-sec end-->

		@include('includes.footer')
		<!--footer end-->

	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	@include('includes.script')


</body>

</html>