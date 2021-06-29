<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{$mentor[0]->full_name}}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Shelly - Website" />
	<meta name="author" content="merkulove">
	<meta name="keywords" content="" />
	{{-- <link rel="icon" href="assets/img/favicon.png"> --}}
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
		<?php 
			$name = explode(' ',$mentor[0]->full_name)[0];
		?>
		<section class="pager-section" style="background-image: url({{asset('')}})">
			<div class="container">
				<div class="pager-content text-center">
					<h2>{{$mentor[0]->full_name}}</h2>
					<ul>
						<li><a href="{{route('home_page')}}" title="">Home</a></li>
						<li><a href="#" title="">Mentor</a></li>
					</ul>
				</div><!--pager-content end-->
				<h2 class="page-titlee" style="color: red;">{{$name}}</h2>
			</div>
		</section><!--pager-section end-->

		<section class="page-content">
			<div class="container">
				<div class="teacher-single-page">
					<div class="row">
						<div class="col-lg-4">
							<div class="teacher-coly">
								@if ($status == 'mentor')
									<img src="{{asset('assets/img/mentors/'.$mentor[0]->mentor_img)}}" alt="">
								@elseif ($status == 'programmer')
									<img src="{{asset('assets/img/programmers/'.$mentor[0]->mentor_img)}}" alt="">
								@elseif ($status == 'student')
									<img src="{{asset('assets/img/students/'.$mentor[0]->mentor_img)}}" alt="">
								@endif
								<ul class="social-icons">
									@if (isset($mentor[0]->facebook))
										<li><a href="https://facebook.com/{{$mentor[0]->facebook}}" title=""><i class="fab fa-facebook-f"></i></a></li>
									@endif
									@if (isset($mentor[0]->instagram))
										<li><a href="https://www.instagram.com/{{$mentor[0]->instagram}}/" title=""><i class="fab fa-instagram"></i></a></li>
									@endif
									@if (isset($mentor[0]->telegram))
										<li><a href="https://t.me.com/{{$mentor[0]->telegram}}" title=""><i class="fab fa-telegram"></i></a></li>
									@endif
								</ul>
							</div><!--teacher-coly end-->
						</div>
						<div class="col-lg-8">
							<div class="teacher-content">

									{{-- O`quvtuvchi yoki o`quvchi   ekanligi darajasi, kasibi START --}}

								@if ($status == 'mentor')
									<h3>{{$mentor[0]->course_name}} Mentor</h3>	
								@elseif ($status == 'programmer')
									<h3>Programmist</h3>
								@elseif ($status == 'student')
									<h3>Pitkeruwshi</h3>		
								@endif

									{{-- O`quvtuvchi yoki o`quvchi   ekanligi darajasi, kasibi END --}}
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="rol-z">
											<img src="{{asset('assets/img/ro1.png')}}" alt="">
											<div class="rol-info">
												<h3>Telefon</h3>
												<span>{{$mentor[0]->phone}}</span>
											</div>
										</div><!--rol-z end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="rol-z">
											<img src="{{asset('assets/img/ro2.png')}}" alt="">
											<div class="rol-info">
												<h3>Email</h3>
												<span>{{$mentor[0]->email}}</span>
											</div>
										</div><!--rol-z end-->
									</div>
									<div class="col-lg-4 col-md-4 col-sm-6">
										<div class="rol-z style2">
											<img src="{{asset('assets/img/ro3.png')}}" alt="">
											<div class="rol-info">
														{{-- Mentorga telefon qilish --}}
												<h3><a href="tel:{{$mentor[0]->phone}}" title="">Qoniraw etin`<br />Ha`zir</a></h3>

											</div>
										</div><!--rol-z end-->
									</div>
								</div>
												{{-- O`quvtuvchi(o`quvchi)ning shaxsiy malumotlari START --}}
								<p>
									{{$mentor[0]->about}}
								</p>
												{{-- O`quvtuvchi(o`quvchi)ning shaxsiy malumotlari END --}}
								<ul class="tech-detils">
									<li>
										<h3>Tuwilg`an Kuni</h3>
										<span>{{$mentor[0]->mentor_birth}}</span>
									</li>
									<li>
										<h3>Bitirgen</h3>
										<span>{{$mentor[0]->bitirgen}}</span>
									</li>
									<li>
										<h3>Ta`jriybesi</h3>
										<span>{{$mentor[0]->experiense}}</span>
									</li>
								</ul><!--tech-detils end-->
								<div class="skills-tech">
									<h3>Jeke Konlikpeler</h3>
									@foreach ($texnalogies as $texnalogiy)
										
									<div class="progess-row">
										<h3>{{$texnalogiy->tex_name}}</h3>
										<div class="progress">	
																						{{-- bg-clr1 --}}
											<div class="progress-bar wow slideInLeft " data-wow-duration="1000ms" role="progressbar" style="width: {{$texnalogiy->procent}}%" aria-valuenow="{{$texnalogiy->procent}}" aria-valuemin="0" aria-valuemax="100"></div>
										</div>	
										<span>{{$texnalogiy->procent}} %</span>
									</div>

									@endforeach
								</div><!--skills-tech end-->
													{{-- O`quvtuvchi(o`quvchi) o`zlashtirgan texnalogiyalar bo`yicha qisqa malumot START --}}
								<p>
									{{$mentor[0]->portfolio_detail}}
								</p>
													{{-- O`quvtuvchi(o`quvchi) o`zlashtirgan texnalogiyalar bo`yicha qisqa malumot END --}}
								
							</div><!--teacher-content end-->
						</div>
					</div>
				</div><!--teacher-single-page end-->
				<div class="teachers-section teacher-page">
					<div class="section-title text-center">
						@if ($status == 'mentor')
							<h2>Basqa Mentorlar</h2>	
						@elseif ($status == 'programmer')
							<h2>Basqa Programmistler</h2>
						@elseif ($status == 'student')
							<h2>Basqa Pitkeruwshiler</h2>		
						@endif
						
					</div><!--section-title end-->

					<div class="teachers">
						<div class="row">
							@foreach ($mentors as $user)

							<div class="col-lg-3 col-md-3 col-sm-6 col-6 full-wdth">
								<div class="teacher">
									<div class="teacher-img">
										@if ($status == 'mentor')
											<img src="{{asset('assets/img/mentors/'.$user->mentor_img)}}" alt="" class="w-100">							
										@elseif ($status == 'programmer')
											<img src="{{asset('assets/img/programmers/'.$user->mentor_img)}}" alt="" class="w-100">
										@elseif ($status == 'student')
											<img src="{{asset('assets/img/students/'.$user->mentor_img)}}" alt="" class="w-100">
										@endif
										<div class="sc-div">
											<ul>
												@isset($user->instagram)
													<li><a href="https://instagram.com/{{$user->instagram}}" title=""><i class="fab fa-instagram"></i></a></li>
												@endisset
												@isset($user->telegram)
												<li><a href="https://t.me/{{$user->telegram}}" title=""><i class="fab fa-telegram"></i></a></li>
												@endisset
												@isset($user->facebook)
												<li><a href="https://facebook.com/{{$user->facebook}}" title=""><i class="fab fa-facebook-f"></i></a></li>
												@endisset
											</ul>
											<span><img src="{{asset('assets/img/plus.png')}}" alt=""></span>
										</div>
									</div>
									<div class="teacher-info">
										@if ($status == 'mentor')
											<h3><a href="{{route('mentor_portfolio',['id'=>$user->id_mentor])}}" title="">{{$user->full_name}}</a></h3>
										@elseif ($status == 'programmer')
											<h3><a href="{{route('programmer_portfolio',['id'=>$user->id_mentor])}}" title="">{{$user->full_name}}</a></h3>
										@elseif ($status == 'student')
											<h3><a href="{{route('student_portfolio',['id'=>$user->id_mentor])}}" title="">{{$user->full_name}}</a></h3>
										@endif

										@if ($status == 'mentor')
											<a href="{{ route('course_detail', ['id'=>$user->id_course]) }}">
												<span>{{$user->course_name}} Mentor</span>
											</a>
										@endif
										@if ($status == 'student')
											<a href="{{ route('course_detail', ['id'=>$user->id_course]) }}">
												<span>{{$user->course_name}} Pitkerushisi</span>
											</a>
										@endif
									</div>
								</div><!--teacher end-->
							</div>
								
							@endforeach
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

	@include('includes.script')

</body>

</html>