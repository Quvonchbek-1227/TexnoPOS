<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TexnoPOS Programmistleri</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="TexnoPOS IT Mektebi" />
	<meta name="author" content="TEXNOPOS DEVELOPERS!">
	<meta name="stkeywords" content="TexnoPOS" />
	<link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mycss.css') }}">
</head>

<body>

	<div class="wrapper">

		
		@include('includes.header')
	
		
		@include('includes.responsiv-menu')


		<section class="pager-section">
			<div class="container">
				<div class="pager-content text-center">
					<h2 class="myshadow">{{$proect->title}}</h2>
				</div><!--pager-content end-->
				<h2 class="page-titlee"></h2>
			</div>
		</section><!--pager-section end-->

		<section class="page-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="user">
							<i class="fas fa-user mr-5"></i><span class="m-2">{{$proect->full_name}}</span>
						</div>
					</div>
				</div>	
				<div class="row">
					<div class="col-lg-9">
						<div class="event-single">
							<div class="event-gallery-sec">
								<div class="event-gallery">
									@foreach ($images->where('id_proect', $id) as $img)
										@if($loop->first)
										<a href="{{$img->img}}" title="" class="html5lightbox" data-group="set1">
										
											<img src="{{$img->img}}">
											
										</a>
										@endif
									@endforeach
								</div>
								<div class="row">
									@foreach ($images->where('id_proect', $id) as $img)
									@if(!$loop->first)
									<div class="col-lg-4 col-md-4 col-sm-4 col-4">
										<div class="event-gallery">
											<a href="{{$img->img}}" title="" class="html5lightbox" data-group="set1">
												<img src="{{$img->img}}" class="pr-img2" alt="">
											</a>
										</div><!--event-gallery end-->
									</div>
									@endif
									@endforeach
								</div>

								
							</div><!--event-gallery-sec end-->

							<p>
								{{$proect->text}}
							</p>
							
						</div><!--event-single end-->
					</div>
					<div class="col-lg-3">
						<div class="sidebar">
							<div class="widget widget-posts">
								<h3 class="widget-title">Basqada Proectler</h3>
								<div class="wd-posts">
									
									@foreach ($types as $tip)
									<div class="wd-post d-flex flex-wrap">
										<div class="wd-thumb">
											<i class="fas fa-greater-than"></i>
										</div>
										<div class="wd-info">
											<h4><a href="{{ route('get_proect', ['id'=>$tip->id]) }}">{{$tip->title}}</a></h4>
											<span>#{{$tip->type}}</span>
										</div>
									</div>
									@endforeach
									
								</div><!--wd-posts end-->
							</div><!--widget-posts end-->
						</div>
					</div>
				</div>
			</div>
		</section><!--page-content end-->

		
        @include('includes.dizimnen-otuw')

		@include('includes.footer')

	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	@include('includes.script')

</body>

</html>