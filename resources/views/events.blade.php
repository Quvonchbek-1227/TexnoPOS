<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TexnoPOS IT Mektebi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="TexnoPOS IT Mektebi" />
	<meta name="author" content="TEXNOPOS DEVELOPERS!">
	<meta name="keywords" content="TexnoPOS" />
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/mycss.css')}}">
</head>


<body>

	<div class="wrapper">
		

		@include('includes.header')
		<!--header end-->

		@include('includes.responsiv-menu')
		<!--responsive-menu end-->

		<section class="pager-section">
			<div class="container">
				<div class="pager-content text-center">
					<h2 class="myshadow">Events</h2>
				</div><!--pager-content end-->
				<h2 class="page-titlee"></h2>
			</div>
		</section><!--pager-section end-->

		<section class="page-content">
			<div class="container">
				<div class="course-section">
					<div class="courses-list">
						<div class="row">
							@foreach ($events as $event)
								
							<div class="col-lg-6">
								<div class="course-card">
									<div class="d-flex flex-wrap align-items-center">
										<ul class="course-meta">
											<li>
												<img src="{{asset('assets/img/icon12.png')}}" alt="">
												{{$event->date}}
											</li>
											<li>
												{{$event->time}}
											</li>
										</ul>
										<span>{{$event->price}}</span>
									</div>
									<h3><a href="{{ route('event',['id'=>$event->id_event]) }}" title="">{{$event->title}}</a></h3>
									<div class="d-flex flex-wrap">
										<div class="posted-by">
											<img src="https://via.placeholder.com/26x26" alt="">
											<a href="#" title="">{{$event->full_name}}</a>
										</div>
										<span class="locat"><img src="{{asset('assets/img/loct.png')}}" alt="">{{$event->adress}}</span>
									</div>
								</div><!--course-card end-->
							</div>
							
							@endforeach
							{{$events->links()}}
						</div>
					</div><!--courses-list end-->
				</div>
			</div>
		</section><!--page-content end-->

        @include('includes.dizimnen-otuw')
		<!--newsletter-sec end-->

		@include('includes.footer')
		<!--footer end-->
		

	</div>


	@include('includes.script')

</body>

</html>