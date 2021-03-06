<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	@if ($status == 'mentor')
		<title>TexnoPOS Mentorlari</title>
	@elseif ($status == 'programmer')
		<title>TexnoPOS Programmistleri</title>
	@elseif ($status == 'student')
		<title>TexnoPOS Pikeruwshileri</title>
	@endif
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
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mycss.css') }}">
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
					@if ($status == 'mentor')
						<h2 class="myshadow">Mentorlar</h2>
					@elseif ($status == 'programmer')
						<h2 class="myshadow">Programmistler</h2>
					@elseif ($status == 'student')
						<h2 class="myshadow">Pitkeriwshiler</h2>
					@endif
				</div><!--pager-content end-->
				<h2 class="page-titlee">   </h2>
			</div>
		</section>
		<!--pager-section end-->

		<section class="page-content">
			<div class="container">
				<div class="teachers-section p-0">
					<div class="teachers">
						<div class="row">
							@foreach ($mentors as $mentor)
								
							<div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
								<div class="teacher">
									<div class="teacher-img">
											<img src="{{asset('assets/img/portfolio_user.png')}}" class="w-100">
										<div class="sc-div">
											<ul>
												@if (isset($mentor->instagram))
													<li><a href="https://www.instagram.com/{{$mentor->instagram}}" title=""><i class="fab fa-instagram"></i></a></li>
												@endif
												@if (isset($mentor->telegram))
													<li><a href="https://t.me/{{$mentor->telegram}}/" title=""><i class="fab fa-telegram"></i></a></li>
												@endif
												@if (isset($mentor->facebook))
													<li><a href="https://www.facebook.com/search/top/?q={{$mentor->facebook}}" title=""><i class="fab fa-facebook-f"></i></a></li>
												@endif
											</ul>
											<span><img src="{{asset('assets/img/plus.png')}}" alt=""></span>
										</div>
									</div>
									<div class="teacher-info">
										@if ($status == 'mentor')
											<h3><a href="{{ route('mentor_portfolio', ['id'=>$mentor->id_mentor]) }}" title="">{{$mentor->full_name}}</a></h3>
										@elseif ($status == 'programmer')
											<h3><a href="{{ route('programmer_portfolio', ['id'=>$mentor->id_mentor]) }}" title="">{{$mentor->full_name}}</a></h3>
										@elseif ($status == 'student')
											<h3><a href="{{ route('student_portfolio', ['id'=>$mentor->id_mentor]) }}" title="">{{$mentor->full_name}}</a></h3>
										@endif

										@if ($status == 'student')
											<span><a href="{{route('course_detail',['id'=>$mentor->id_course])}}">{{$mentor->course_name}} Pitkerushisi</a></span>
										@endif
									</div>
								</div><!--teacher end-->
							</div>

							@endforeach
							<br>
							<div class="ml-5 pl-5">
								{{$mentors->links()}}
							</div>
							
						</div>
					</div><!--teachers end-->
				</div><!--teachers-section end-->
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