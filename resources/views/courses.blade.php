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
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
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
					<h2>Kurslar</h2>
					<ul>
						<li><a href="{{ route('home_page')}}" title="">Home</a></li>
						<li><span>Kurslar</span></li>
					</ul>
				</div><!--pager-content end-->
				<h2 class="page-titlee">Shelly</h2>
			</div>
		</section><!--pager-section end-->

		<section class="classes-page">
			<div class="container">
				<div class="classes-banner">
					<span>Try now </span>

					<h2>Bilimge Ajiratilg`an Investitsiya En` Jaqsi <span class="text-center">Investitsiya!</span></h2>
					
					{{-- <a href="classes.html" title="" class="btn-default">Kurslar<i class="fa fa-long-arrow-alt-right"></i></a> --}}
				</div><!--classes-banner end-->
				<div class="classes-section">
					<div class="classes-sec">
						<div class="row">

							@foreach ($courses as $course)

							<div class="col-lg-3 col-md-6 col-sm-6">
								<div class="classes-col">
									<div class="class-thumb">
										<img src="{{asset('assets/img/courses/'.$course->course_img)}}" alt="Course Img" class="w-100">
										 <a href="contacts.html"  title="Baylanis" class="crt-btn fas fa-pen-alt"></a>
									</div>
									<div class="class-info">
										<h3><a href="{{route('course_detail',['id'=>$course->id_course])}}" title="">{{$course->course_name}}</a></h3>
										<span>{{$course->days}}</span>
										<span>{{$course->sub_time}}</span>
										<div class="d-flex flex-wrap align-items-center">
											<div class="posted-by">
												<img src="https://via.placeholder.com/26x26" alt="">
												<a href="{{route('mentor_portfolio',['id'=>$course->id_mentor])}}" title="">{{$course->full_name}}</a>
											</div>
											<div class="container ml-4">
                                            	<strong class="price text-center">{{$course->price}}</strong>
                                        	</div>
										</div>
									</div>
								</div><!--classes-col end-->
							</div>
							
							@endforeach
							<div class="container">
								{{$courses->links()}}
							</div>
						</div>
					</div><!--classes-sec end-->
					{{-- <div class="mdp-pagiation">
						<nav aria-label="Page navigation example">
							<ul class="pagination">
						    	<li class="page-item"><a class="page-link" href="#">1</a></li>
						    	<li class="page-item"><a class="page-link active" href="#">2</a></li>
						    	<li class="page-item"><a class="page-link" href="#">3</a></li>
						    	<li class="page-item"><a class="page-link" href="#">4</a></li>
						    	<li class="page-item"><a class="page-link" href="#">...</a></li>
						    	<li class="page-item"><a class="page-link" href="#">15</a></li>
						  	</ul>
						</nav>
					</div><!--pagination-end--> --}}
				</div>
			</div>
		</section><!--classes-page end-->

        @include('includes.dizimnen-otuw')
		<!--newsletter-sec end-->

		@include('includes.footer')
		<!--footer end-->

	</div>

	@include('includes.script')

</body>

</html>