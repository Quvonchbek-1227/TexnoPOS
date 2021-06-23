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
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
</head>


<body>

	<div class="wrapper">
		
		@include('includes.header')
		<!--header end-->

		@include('includes.responsiv-menu')
		<!--responsive-menu end-->

		<section class="pager-section" style="background-image: url({{asset('')}})">
			<div class="container">
				<div class="pager-content text-center">
					<h2>Quwanishbek Yuldashev</h2>
					<ul>
						<li><a href="#" title="">Home</a></li>
						<li><a href="#" title="">Classes</a></li>
						<li><span>Events</span></li>
					</ul>
				</div><!--pager-content end-->
				<h2 class="page-titlee" style="color: red;">Quwanishbek</h2>
			</div>
		</section><!--pager-section end-->

		<section class="page-content">
			<div class="container">
				<div class="teacher-single-page">
					<div class="row">
						<div class="col-lg-4">
							<div class="teacher-coly">
								<img src="https://via.placeholder.com/371x505" alt="">
								<ul class="social-icons">
									<li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
									<li><a href="#" title=""><i class="fab fa-telegram"></i></a></li>
								</ul>
							</div><!--teacher-coly end-->
						</div>
						<div class="col-lg-8">
							<div class="teacher-content">

									{{-- O`quvtuvchi yoki o`quvchi   ekanligi darajasi, kasibi START --}}

								<h3>Instructor</h3>

									{{-- O`quvtuvchi yoki o`quvchi   ekanligi darajasi, kasibi END --}}
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="rol-z">
											<img src="assets/img/ro1.png" alt="">
											<div class="rol-info">
												<h3>Telefon</h3>
												<span>+2 342 5446 67</span>
											</div>
										</div><!--rol-z end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="rol-z">
											<img src="assets/img/ro2.png" alt="">
											<div class="rol-info">
												<h3>Email</h3>
												<span>name@domain.com</span>
											</div>
										</div><!--rol-z end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="rol-z style2">
											<img src="assets/img/ro3.png" alt="">
											<div class="rol-info">
														{{-- Mentorga telefon qilish --}}
												<h3><a href="tel:123-456-7890" title="">Qoniraw etin`<br />Ha`zir</a></h3>

											</div>
										</div><!--rol-z end-->
									</div>
								</div>
												{{-- O`quvtuvchi(o`quvchi)ning shaxsiy malumotlari START --}}
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel venenatis felis. Fusce id lectus sit amet nisi ornare ultricies. In sagittis lacinia lorem et tristique. Quisque mauris neque, sollicitudin sit amet imperdiet in, scelerisque sit amet arcu. In vehicula sem eget nisi convallis, a mattis orci imperdiet. Curabitur vitae sapien vel lectus sagittis consequat. Nullam enim velit, dignissim vel viverra ac, eleifend ut tellus.
								</p>
												{{-- O`quvtuvchi(o`quvchi)ning shaxsiy malumotlari END --}}
								<ul class="tech-detils">
									<li>
										<h3>Tuwilg`an Kuni</h3>
										<span>15.03.1987</span>
									</li>
									<li>
										<h3>Bitirgen</h3>
										<span>Music School of Music Arts</span>
									</li>
									<li>
										<h3>Ta`jriybesi</h3>
										<span>10 years</span>
									</li>
								</ul><!--tech-detils end-->
								<div class="skills-tech">
									<h3>Jeke Konlikpeler</h3>
									<div class="progess-row">
										<h3>Teaching</h3>
										<div class="progress">
											<div class="progress-bar wow slideInLeft bg-clr1" data-wow-duration="1000ms" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
										</div>	
										<span>100% </span>
									</div>
									<div class="progess-row">
										<h3>Speaking</h3>
										<div class="progress">
											<div class="progress-bar wow slideInLeft bg-clr2" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
										</div>	
										<span>80% </span>
									</div>
									<div class="progess-row">
										<h3>Family Support</h3>
										<div class="progress">
											<div class="progress-bar wow slideInLeft bg-clr3" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
										</div>	
										<span>85% </span>
									</div>
									<div class="progess-row">
										<h3>Children's Well-being</h3>
										<div class="progress">
											<div class="progress-bar wow slideInLeft bg-clr4" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
										</div>	
										<span>90% </span>
									</div>
								</div><!--skills-tech end-->
													{{-- O`quvtuvchi(o`quvchi) o`zlashtirgan texnalogiyalar bo`yicha qisqa malumot START --}}
								<p>
									Quisque congue ultrices nibh, id consectetur velit consectetur ut. Suspendisse porttitor vulputate imperdiet. Proin rhoncus, mauris sit amet consectetur laoreet, mauris mi volutpat urna, at molestie urna libero quis leo. Pellentesque ut molestie nisi. Suspendisse ut nulla eleifend ligula vulputate tincidunt sed eget orci.
								</p>
													{{-- O`quvtuvchi(o`quvchi) o`zlashtirgan texnalogiyalar bo`yicha qisqa malumot END --}}
								
							</div><!--teacher-content end-->
						</div>
					</div>
				</div><!--teacher-single-page end-->
				<div class="teachers-section teacher-page">
					<div class="section-title text-center">
						<h2>Basqa Mentorlar</h2>
					</div><!--section-title end-->
					<div class="teachers">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
								<div class="teacher">
									<div class="teacher-img">
										<img src="https://via.placeholder.com/1120x1680" alt="" class="w-100">
										<div class="sc-div">
											<ul>
												<li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
												<li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
											</ul>
											<span><img src="assets/img/plus.png" alt=""></span>
										</div>
									</div>
									<div class="teacher-info">
										<h3><a href="#" title="">Polina Kerston</a></h3>
										<span>English Teacher</span>
									</div>
								</div><!--teacher end-->
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
								<div class="teacher">
									<div class="teacher-img">
										<img src="https://via.placeholder.com/1376x2064" alt="" class="w-100">
										<div class="sc-div">
											<ul>
												<li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
												<li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
											</ul>
											<span><img src="assets/img/plus.png" alt=""></span>
										</div>
									</div>
									<div class="teacher-info">
										<h3><a href="#" title="">Quwanishbek@ Yuldashev</a></h3>
										<span>Instructor</span>
									</div>
								</div><!--teacher end-->
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
								<div class="teacher">
									<div class="teacher-img">
										<img src="https://via.placeholder.com/1336x2004" alt="" class="w-100">
										<div class="sc-div">
											<ul>
												<li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
												<li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
											</ul>
											<span><img src="assets/img/plus.png" alt=""></span>
										</div>
									</div>
									<div class="teacher-info">
										<h3><a href="#" title="">Chikelu Obasea</a></h3>
										<span>Art Teacher</span>
									</div>
								</div><!--teacher end-->
							</div>
							<div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
								<div class="teacher">
									<div class="teacher-img">
										<img src="https://via.placeholder.com/1204x1804" alt="" class="w-100">
										<div class="sc-div">
											<ul>
												<li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
												<li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
												<li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
											</ul>
											<span><img src="assets/img/plus.png" alt=""></span>
										</div>
									</div>
									<div class="teacher-info">
										<h3><a href="#" title="">Katayama Fumiki</a></h3>
										<span>Teacher</span>
									</div>
								</div><!--teacher end-->
							</div>
						</div>
					</div><!--teachers end-->
				</div>
			</div>
		</section><!--page-content end-->


        @include('includes.dizimnen-otuw')
		<!--newsletter-sec end-->

		@include('includes.footer')
		<!--footer end-->

		<!--back to top begin-->

		<!--back to top end-->

	</div>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/html5lightbox.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/tweenMax.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/scripts.js"></script>

</body>

</html>