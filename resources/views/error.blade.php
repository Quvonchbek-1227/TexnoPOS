<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Shelly School HTML Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Shelly - Website" />
	<meta name="author" content="merkulove">
	<meta name="keywords" content="" />
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
</head>


<body>

	<div class="wrapper">

		<div class="error-page">
			<h2 class="page-title">Shelly</h2>
			<div class="container">
				<div class="error-text">
					<h2>Oops!</h2>
					<h3>The page does not exist</h3>
					<a href="index.html" title="" class="btn-default">Home Page <i class="fa fa-long-arrow-alt-right"></i></a>
					<ul class="social-icons">
						<li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#" title=""><i class="fab fa-twitter"></i></a></li>
						<li><a href="#" title=""><i class="fab fa-linkedin-in"></i></a></li>
					</ul><!--social-icons end-->
				</div><!--error-text end-->
			</div>
		</div><!--error-page end-->

	</div><!--wrapper end-->


	@include('includes.script')

</body>

</html>