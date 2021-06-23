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
					<h2>Environment conference</h2>
					<ul>
						<li><a href="#" title="">Home</a></li>
						<li><a href="#" title="">Classes</a></li>
						<li><span>Events</span></li>
					</ul>
				</div><!--pager-content end-->
				<h2 class="page-titlee">Shelly</h2>
			</div>
		</section><!--pager-section end-->

		<section class="page-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="event-single">
							<div class="event-gallery-sec">
								<div class="event-gallery">
									<a href="https://via.placeholder.com/761x400" title="" class="html5lightbox" data-group="set1">
										<img src="https://via.placeholder.com/761x400" alt="">
									</a>
									<span class="price">$15</span>
								</div><!--event-gallery end-->
								<div class="row">
									<div class="col-lg-3 col-md-3 col-sm-3 col-3">
										<div class="event-gallery">
											<a href="https://via.placeholder.com/1000x667" title="" class="html5lightbox" data-group="set1">
												<img src="https://via.placeholder.com/176x120" alt="">
											</a>
										</div><!--event-gallery end-->
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-3">
										<div class="event-gallery">
											<a href="https://via.placeholder.com/1000x667" title="" class="html5lightbox" data-group="set1">
												<img src="https://via.placeholder.com/176x120" alt="">
											</a>
										</div><!--event-gallery end-->
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-3">
										<div class="event-gallery">
											<a href="https://via.placeholder.com/1000x667" title="" class="html5lightbox" data-group="set1">
												<img src="https://via.placeholder.com/176x120" alt="">
											</a>
										</div><!--event-gallery end-->
									</div>
									<div class="col-lg-3 col-md-3 col-sm-3 col-3">
										<div class="event-gallery">
											<a href="https://via.placeholder.com/1000x667" title="" class="html5lightbox" data-group="set1">
												<img src="https://via.placeholder.com/176x120" alt="">
											</a>
										</div><!--event-gallery end-->
									</div>
								</div>
							</div><!--event-gallery-sec end-->
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel venenatis felis. Fusce id lectus sit amet nisi ornare ultricies. In sagittis lacinia lorem et tristique. Quisque mauris neque, sollicitudin sit amet imperdiet in, scelerisque sit amet arcu. In vehicula sem eget nisi convallis, a mattis orci imperdiet. Curabitur vitae sapien vel lectus sagittis consequat. Nullam enim velit, dignissim vel viverra ac, eleifend ut tellus.
							</p>
						</div><!--event-single end-->
					</div>
					<div class="col-lg-3">
						<div class="sidebar class-sidebar position-static">
							<div class="widget widget-information">
								<ul class="clt">
									<li>
										<img src="assets/img/cir3.png" alt="">
										<div class="clt-info">
											<h3>43 castle road 517 district</h3>
										</div>
									</li>
									<li>
										<img src="assets/img/cir4.png" alt="">
										<div class="clt-info">
											<h3>29/07/2020 <span>11AM to 15PM</span></h3>
										</div>
									</li>
								</ul>
								<div class="tech-info">
									<div class="tech-tble">
										<img src="https://via.placeholder.com/54x54" alt="">
										<div class="tch-info">
											<h3>Sharapat Kalabayev</h3>
											<span>Android Mentor</span>
										</div>
									</div>
									<a href="contacts.html" title="" class="btn-default">Baylanis<i class="fa fa-long-arrow-alt-right"></i></a>
								</div>
							</div><!--widget-information end-->
							
								{{-- Baylanis Card --}}

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