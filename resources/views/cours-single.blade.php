<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shelly School HTML Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Shelly - Website" />
	<meta name="author" content="merkulove">
	<meta name="keywords" content="" />
	<link rel="icon" href="assets/img/favicon.png">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asseT('assets/css/responsive.css')}}">
</head>


<body>

	<div class="wrapper">
		
			@include('includes.header')
		<!--header end-->

		@include('includes.responsiv-menu')
		<!--responsive-menu end-->

		<section class="class-single-banner">
			<img src="https://via.placeholder.com/1919x700" alt="" class="w-100">
		</section><!--class-single-banner end-->

		<section class="page-content style2">
			<div class="container">
				<div class="row">
					<div class="col-xl-8 col-lg-8">
						<div class="class-single-content">
							<h2>{{$course[0]->name}}</h2>
							<ul class="meta-box">
								{{-- <li><a href="#" title="">Home</a></li>
								<li><span>Classes</span></li> --}}
							</ul>
							<div class="class-gallery">
								<div class="class-gallery-img">
									<a href="{{ asset('assets/img/courses/'.$course[0]->course_img) }}" title="" class="html5lightbox" data-group="set1">
										<img src="{{ asset('assets/img/courses/'.$course[0]->course_img) }}" alt="">
									</a>
								</div><!--class-gallery-img end-->

								{{-- <div class="row">
									<div class="col-lg-3 col-md-3 col-sm-3 col-3">
										<div class="class-gallery-img">
											<a href="https://via.placeholder.com/1000x704" title="" class="html5lightbox" data-group="set1">
												<img src="https://via.placeholder.com/176x120" alt="">
											</a>
										</div><!--class-gallery-img end-->
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-3">
										<div class="class-gallery-img">
											<a href="https://via.placeholder.com/1000x667" title="" class="html5lightbox" data-group="set1">
												<img src="https://via.placeholder.com/176x120" alt="">
											</a>
										</div><!--class-gallery-img end-->
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-3">
										<div class="class-gallery-img">
											<a href="https://via.placeholder.com/1000x667" title="" class="html5lightbox" data-group="set1">
												<img src="https://via.placeholder.com/176x120" alt="">
											</a>
										</div><!--class-gallery-img end-->
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-3">
										<div class="class-gallery-img">
											<a href="https://via.placeholder.com/1000x667" title="" class="html5lightbox" data-group="set1">
												<img src="https://via.placeholder.com/176x120" alt="">
											</a>
										</div><!--class-gallery-img end-->
									</div>
								</div> --}}		

							</div><!--class-gallery end-->

							<p>
								{{$course[0]->description}}
							</p>
							<a href="{{route('contacts')}}" title="" class="btn-default">Dizimnen ótiw<i class="fa fa-long-arrow-alt-right"></i></a>
						</div><!--class-single-content end-->
					</div>
					<div class="col-xl-4 col-lg-4">
						<div class="sidebar class-sidebar">
							<div class="widget widget-information">
								<h3 class="widget-title">Kurs Haqqinda</h3>
								<ul>
									<li>
										<h4>{{$course[0]->days}}</h4>
										<span>{{$course[0]->sub_time}}</span>
									</li>
									<li>
										<h4>Jas araligi</h4>
										<span>{{$course[0]->age}}</span>
									</li>
									<li>
										<h4>Qabillaw Sani</h4>
										<span>{{$course[0]->student_count}}</span>
									</li>
									<li>
										<h4>Kurs Dawamiylig`i</h4>
										<span>{{$course[0]->hour}}</span>
									</li>
								</ul>
								<div class="tech-info">
									<div class="tech-tble">
										<img src="https://via.placeholder.com/54x54" alt="">
										<div class="tch-info">
											<h3>{{$course[0]->full_name}}</h3>
											<span>{{$course[0]->name}} Mentor</span>
										</div>
									</div>
									<a href="{{route('contacts')}}" title="" class="btn-default">Dizimnen ótiw<i class="fa fa-long-arrow-alt-right"></i></a>
								</div>
							</div><!--widget-information end-->
							<div class="widget widget-class">
								<div class="wd-class-post">
									<div class="wd-class-thumb">
										<img src="{{asset('assets/img/ci1.png')}}" alt="">
									</div>
									<div class="wd-class-info">
										<h3>Class Program</h3>
										<span>Adobe Acrobat file, 123 КB</span>
									</div>
								</div><!--wd-class-post end-->
							</div><!--widget-class end-->
							<div class="widget widget-classes-carousel">
								<h3 class="widget-title">Basqa Kurslar</h3>
								<div class="classes-section classes-section-sidebar classes-widget-slider">
									
									@foreach ($courses as $key)
										
									

									<div class="classes-col">
										<div class="class-thumb">
											<img src="{{ asset('assets/img/courses/'.$key->course_img) }}" alt="" class="w-100">
											<a href="{{route('contacts')}}" title="" class="crt-btn">
												<i class="fas fa-pen-alt"></i>
											</a>
										</div>
										<div class="class-info">
											<h3>{{$key->course_name}}</h3>
											<span>{{$key->days}}</span>
											<span>{{$key->sub_time}}</span>
											<div class="d-flex flex-wrap align-items-center">
												<div class="posted-by">
													<img src="https://via.placeholder.com/26x26" alt="">
													<a href="#" title="">{{$key->full_name}}</a>
												</div>
												<strong class="price">{{$key->price}}</strong>
											</div>
										</div>									
									</div>
									@endforeach
								</div><!--classes-section end-->
							</div><!--widget-classes-carousel end-->
							
							@include('includes.baylanis-card')
							
							<!--widget-contact-dp end-->
						</div><!--sidebar end-->
					</div>
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