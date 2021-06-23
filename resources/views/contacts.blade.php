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
					<h2>Contacts</h2>
					<ul>
						<li><a href="#" title="">Home</a></li>
						<li><span>Contacts</span></li>
					</ul>
				</div><!--pager-content end-->
				<h2 class="page-titlee">Shelly</h2>
			</div>
		</section><!--pager-section end-->

		<section class="page-content">
			<div class="container">
				<div class="mdp-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2943.478873868036!2d59.6053283154205!3d42.46010287918027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41dd9b45e9466243%3A0xfaf3ec1bf09d22b1!2sTexnoPOS%20IT%20Mektebi!5e0!3m2!1sru!2sus!4v1620609905772!5m2!1sru!2sus"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					{{-- <iframe src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> --}}
				</div><!--mdp-map end-->
				<div class="mdp-contact">
					<div class="row">
						<div class="col-lg-8 col-md-7">
							<div class="comment-area">
								<h3>Xabar Jiberiw</h3>
								<form id="contact-form" method="post" action="#">
									<div class="response"></div>
									<div class="row">
										<div class="col-lg-6">
											<div class="form-group">
												<input type="text" name="name" class="name" placeholder="Atıńız" required>
											</div><!--form-group end-->
										</div>
										<div class="col-lg-6">
											<div class="form-group">
												<input type="email" name="email" class="email" placeholder="Email" required>
											</div><!--form-group end-->
										</div>
										<div class="col-lg-12">
											<div class="form-group">
												<textarea name="message" placeholder="Xabar"></textarea>
											</div><!--form-group end-->
										</div>
										<div class="col-lg-12">
											<div class="form-submit">
												<button type="button" id="submit" class="btn-default">Xabar Jiberiw<i class="fa fa-long-arrow-alt-right"></i></button>
											</div><!--form-submit end-->
										</div>
									</div>
								</form>
							</div><!--comment-area end-->
						</div>
						<div class="col-lg-4 col-md-5">
							<div class="mdp-our-contacts">
								<h3>Baylanis</h3>
								<ul>
									<li>
										<div class="d-flex flex-wrap">
											<div class="icon-v">
												<img src="assets/img/icon15.png" alt="">
											</div>
											<div class="dd-cont">
												<h4>Telefon</h4>
												<span>+99890 592 71 17</span>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex flex-wrap">
											<div class="icon-v">
												<img src="assets/img/icon16.png" alt="">
											</div>
											<div class="dd-cont">
												<h4>Jumis Waqti</h4>
												<span>Dúysenbi - Ekshenbi <br>
													9:00 - 20:00</span>
											</div>
										</div>
									</li>
									<li>
										<div class="d-flex flex-wrap">
											<div class="icon-v">
												<img src="assets/img/icon17.png" alt="">
											</div>
											<div class="dd-cont">
												<h4>Mánzil</h4>
												<span>Ǵárezsizlik kóshesi 80/4	</span>
											</div>
										</div>
									</li>
								</ul>
							</div><!--mdp-our-contacts end-->
						</div>
					</div>
				</div><!--mdp-contact end-->
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