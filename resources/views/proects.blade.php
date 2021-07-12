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
	<link rel="stylesheet" href="{{asset('assets/css/mycss.css')}}">
</head>


<body>

	<div class="wrapper">

		
		@include('includes.header')
	
		
		@include('includes.responsiv-menu')


		<section class="pager-section">
			<div class="container">
				<div class="pager-content text-center">
					<h2 class="myshadow">Proect Name</h2>
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
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel venenatis felis. Fusce id lectus sit amet nisi ornare ultricies. In sagittis lacinia lorem et tristique. Quisque mauris neque, sollicitudin sit amet imperdiet in, scelerisque sit amet arcu. In vehicula sem eget nisi convallis, a mattis orci imperdiet. Curabitur vitae sapien vel lectus sagittis consequat. Nullam enim velit, dignissim vel viverra ac, eleifend ut tellus.</p>
							<p>Nunc at tincidunt nisl. Nullam fringilla quis odio vitae eleifend. Quisque sed mi erat. In hac habitasse platea dictumst. Vivamus mattis nunc quis turpis pretium sollicitudin. In eu semper justo. Phasellus facilisis hendrerit massa, sed auctor lacus convallis et. Vestibulum ac odio interdum, efficitur nisl ut, sollicitudin arcu. Donec commodo elementum tempus. In hac habitasse platea dictumst.</p>
							<h3>Activities Involved</h3>
							<ul class="ordrd">
								<li>Program opening</li>
								<li>Dance and have fun</li>
								<li>Present gifts to students</li>
								<li>Program ending</li>
							</ul>
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="sg-event">
										<span>1</span>
										<h3>Program opening</h3>
										<p>Nunc at tincidunt nisl. Nullam fringilla quis odio vitae eleifend. Quisque sed mi</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="sg-event">
										<span>2</span>
										<h3>Dance and have fun</h3>
										<p>Nunc at tincidunt nisl. Nullam fringilla quis odio vitae eleifend. Quisque sed mi</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-6">
									<div class="sg-event">
										<span>3</span>
										<h3>Program ending</h3>
										<p>Nunc at tincidunt nisl. Nullam fringilla quis odio vitae eleifend. Quisque sed mi</p>
									</div>
								</div>
							</div>
						</div><!--event-single end-->
					</div>
					<div class="col-lg-3">
						<div class="sidebar class-sidebar position-static">
							{{-- sidebar content --}}
						</div><!--sidebar end-->
					</div>
				</div>
			</div>
		</section><!--page-content end-->

		
        @include('includes.dizimnen-otuw')

		@include('includes.footer')

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