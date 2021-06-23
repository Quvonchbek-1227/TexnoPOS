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
					<h2>About Us</h2>
					<ul>
						<li><a href="#" title="">Home</a></li>
						<li><span>About</span></li>
					</ul>
				</div><!--pager-content end-->
				<h2 class="page-titlee">Shelly</h2>
			</div>
		</section><!--pager-section end-->

		<section class="about-page-content">
			<div class="container">

				<div class="abt-page-row">
					<div class="row align-items-center">
						<div class="col-lg-6 col-md-6">
							<div class="section-title">
								<h2>Welcome to <br /> <span>TexnoPOS</span> IT School</h2>
								<p class="mw-100">
									Morbi vel augue et metus pellentesque lacinia eu non odio. Sed id purus urna. Maecenas ultrices ligula a nisi dictum tristique. Suspendisse potenti. Curabitur egestas ultrices sem, eu vestibulum leo sagittis et.
								</p>
								<a href="classes.html" title="" class="btn-default">Kurslar <i class="fa fa-long-arrow-alt-right"></i></a>
							</div><!--section-title end-->
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="avt-img">
								<img src="https://via.placeholder.com/601x645" alt="">
							</div><!--avt-img end-->
						</div>
					</div>
				</div><!--abt-page-row end-->
			</div>

		</section><!--about-page-content end-->

		<section class="benifit-section">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="section-title">
							<h2>Our Benefits</h2>
							<p>Praesent rhoncus justo erat, sed sollicitudin arcu malesuada vel. Etiam scelerisque justo ut purus luctus ullamcorper. Vivamus vitae elit ligula. Fusce eu rutrum nisl. Vestibulum ut sagittis neque</p>
							<a href="contacts.html" title="" class="btn-default">Baylanis <i class="fa fa-long-arrow-alt-right"></i></a>
						</div><!--section-title end-->
					</div>
					<div class="col-lg-6">
						<div class="about-us-section p-0">
							<div class="about-sec">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="abt-col">
											<img src="assets/img/icon5.png" alt="">
											<h3>Awesome Teachers</h3>
											<p>Vivamus interdum, mauris interdum quis curdum  sodales</p>
										</div><!--abt-col end-->
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="abt-col">
											<img src="assets/img/icon7.png" alt="">
											<h3>Global Certificate</h3>
											<p>Pelleneget  tespharetra que fringilla egugue id eget pharetra</p>
										</div><!--abt-col end-->
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="abt-col">
											<img src="assets/img/icon9.png" alt="">
											<h3>Student Support Service</h3>
											<p>Mauris nec mi fequis ugiat, cursus tortor nec, pharetra tellus</p>
										</div><!--abt-col end-->
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="abt-col">
											<img src="assets/img/icon8.png" alt="">
											<h3>Best Programm</h3>
											<p>Etiam risus neque, volutpat vel laoreet a, finibus volutpat non ligula</p>
										</div><!--abt-col end-->
									</div>
								</div>
							</div><!--about-rw end-->
						</div>
					</div>
				</div>
			</div>
		</section><!--benifit-section end-->

		<section class="classes-section">
			<div class="container">
				<div class="sec-title">
					<h2 class="no-bg">Bizdin` Kurslar</h2>
				</div><!--sec-title end-->
				<div class="classes-sec">
					<div class="row classes-carousel">
						<div class="col-lg-3">
							<div class="classes-col">
								<div class="class-thumb">
									<img src="https://via.placeholder.com/1680x1120" alt="" class="w-100">
									<a href="#" title="" class="crt-btn">
										<img src="assets/img/icon10.png" alt="">
									</a>
								</div>
								<div class="class-info">
									<h3><a href="#" title="">Basic English Speaking and Grammar</a></h3>
									<span>Mon-Fri</span>
									<span>10 AM - 12 AM</span>
									<div class="d-flex flex-wrap align-items-center">
										<div class="posted-by">
											<img src="https://via.placeholder.com/26x26" alt="">
											<a href="#" title="">Amanda Kern</a>
										</div>
										<strong class="price">$45</strong>
									</div>
								</div>
							</div><!--classes-col end-->
						</div>
						<div class="col-lg-3">
							<div class="classes-col">
								<div class="class-thumb">
									<img src="https://via.placeholder.com/1970x1326" alt="" class="w-100">
									<a href="#" title="" class="crt-btn">
										<img src="assets/img/icon10.png" alt="">
									</a>
								</div>
								<div class="class-info">
									<h3><a href="#" title="">Natural Sciences & Mathematics Courses</a></h3>
									<span>Mon-Fri</span>
									<span>10 AM - 12 AM</span>
									<div class="d-flex flex-wrap align-items-center">
										<div class="posted-by">
											<img src="https://via.placeholder.com/26x26" alt="">
											<a href="#" title="">Gypsy Hardinge</a>
										</div>
										<strong class="price">$67</strong>
									</div>
								</div>
							</div><!--classes-col end-->
						</div>
						<div class="col-lg-3">
							<div class="classes-col">
								<div class="class-thumb">
									<img src="https://via.placeholder.com/1440x960" alt="" class="w-100">
									<a href="#" title="" class="crt-btn">
										<img src="assets/img/icon10.png" alt="">
									</a>
								</div>
								<div class="class-info">
									<h3><a href="class-single.html" title="">Environmental Studies & Earth Sciences</a></h3>
									<span>Mon-Fri</span>
									<span>10 AM - 12 AM</span>
									<div class="d-flex flex-wrap align-items-center">
										<div class="posted-by">
											<img src="https://via.placeholder.com/26x26" alt="">
											<a href="#" title="">Margje Jutten</a>
										</div>
										<strong class="price">$89</strong>
									</div>
								</div>
							</div><!--classes-col end-->
						</div>
						<div class="col-lg-3">
							<div class="classes-col">
								<div class="class-thumb">
									<img src="https://via.placeholder.com/1296x864" alt="" class="w-100">
									<a href="#" title="" class="crt-btn">
										<img src="assets/img/icon10.png" alt="">
									</a>
								</div>
								<div class="class-info">
									<h3><a href="class-single.html" title="">Hospitality, Leisure & Sports Courses</a></h3>
									<span>Mon-Fri</span>
									<span>10 AM - 12 AM</span>
									<div class="d-flex flex-wrap align-items-center">
										<div class="posted-by">
											<img src="https://via.placeholder.com/26x26" alt="">
											<a href="#" title="">Hubert Franck</a>
										</div>
										<strong class="price">$67</strong>
									</div>
								</div>
							</div><!--classes-col end-->
						</div>
						<div class="col-lg-3">
							<div class="classes-col">
								<div class="class-thumb">
									<img src="https://via.placeholder.com/1680x1120" alt="" class="w-100">
									<a href="#" title="" class="crt-btn">
										<img src="assets/img/icon10.png" alt="">
									</a>
								</div>
								<div class="class-info">
									<h3><a href="class-single.html" title="">Basic English Speaking and Grammar</a></h3>
									<span>Mon-Fri</span>
									<span>10 AM - 12 AM</span>
									<div class="d-flex flex-wrap align-items-center">
										<div class="posted-by">
											<img src="https://via.placeholder.com/26x26" alt="">
											<a href="#" title="">Amanda Kern</a>
										</div>
										<strong class="price">$45</strong>
									</div>
								</div>
							</div><!--classes-col end-->
						</div>
						<div class="col-lg-3">
							<div class="classes-col">
								<div class="class-thumb">
									<img src="https://via.placeholder.com/1970x1326" alt="" class="w-100">
									<a href="#" title="" class="crt-btn">
										<img src="assets/img/icon10.png" alt="">
									</a>
								</div>
								<div class="class-info">
									<h3><a href="class-single.html" title="">Natural Sciences & Mathematics Courses</a></h3>
									<span>Mon-Fri</span>
									<span>10 AM - 12 AM</span>
									<div class="d-flex flex-wrap align-items-center">
										<div class="posted-by">
											<img src="https://via.placeholder.com/26x26" alt="">
											<a href="#" title="">Gypsy Hardinge</a>
										</div>
										<strong class="price">$67</strong>
									</div>
								</div>
							</div><!--classes-col end-->
						</div>
						<div class="col-lg-3">
							<div class="classes-col">
								<div class="class-thumb">
									<img src="https://via.placeholder.com/1440x960" alt="" class="w-100">
									<a href="#" title="" class="crt-btn">
										<img src="assets/img/icon10.png" alt="">
									</a>
								</div>
								<div class="class-info">
									<h3><a href="class-single.html" title="">Environmental Studies & Earth Sciences</a></h3>
									<span>Mon-Fri</span>
									<span>10 AM - 12 AM</span>
									<div class="d-flex flex-wrap align-items-center">
										<div class="posted-by">
											<img src="https://via.placeholder.com/26x26" alt="">
											<a href="#" title="">Margje Jutten</a>
										</div>
										<strong class="price">$89</strong>
									</div>
								</div>
							</div><!--classes-col end-->
						</div>
						<div class="col-lg-3">
							<div class="classes-col">
								<div class="class-thumb">
									<img src="https://via.placeholder.com/1296x864" alt="" class="w-100">
									<a href="#" title="" class="crt-btn">
										<img src="assets/img/icon10.png" alt="">
									</a>
								</div>
								<div class="class-info">
									<h3><a href="class-single.html" title="">Hospitality, Leisure & Sports Courses</a></h3>
									<span>Mon-Fri</span>
									<span>10 AM - 12 AM</span>
									<div class="d-flex flex-wrap align-items-center">
										<div class="posted-by">
											<img src="https://via.placeholder.com/26x26" alt="">
											<a href="#" title="">Hubert Franck</a>
										</div>
										<strong class="price">$67</strong>
									</div>
								</div>
							</div><!--classes-col end-->
						</div>
					</div>
					<div class="lnk-dv text-center">
						<a href="classes.html" title="" class="btn-default">Kurslar<i class="fa fa-long-arrow-alt-right"></i></a>
					</div>
				</div><!--classes-sec end-->
			</div>
		</section><!--classes-section end-->

       
		@include('includes.dizimnen-otuw')
		<!--newsletter-sec end-->

		@include('includes.footer')
		<!--footer end-->


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