<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Biz Haqimizda!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TexnoPOS IT Mektebi" />
    <meta name="author" content="TEXNOPOS DEVELOPERS!">
    <meta name="keywords" content="TexnoPOS" />
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
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
                    <h2 class="myshadow">Haqqimizda</h2>
                </div>
                <!--pager-content end-->
                {{-- <h2 class="page-titlee">Shelly</h2> --}}
            </div>
        </section>
        <!--pager-section end-->

        <section class="about-page-content">
            <div class="container">

                <div class="abt-page-row">
                    <div class="row align-items-center">
                        @foreach ($abouts as $about)
                            <div class="col-lg-6 col-md-6">
                                <div class="section-title">
                                    <!-- <h2>Welcome to <br /> <span>TexnoPOS</span> IT School</h2> -->
                                    <h2>{{ $about->title }}</h2>
                                    <p class="mw-100">
                                        {{ $about->text }}
                                    </p>
                                    <!-- 	<a href="classes.html" title="" class="btn-default">Kurslar <i class="fa fa-long-arrow-alt-right"></i></a> -->
                                </div>
                                <!--section-title end-->
                            </div>
                            <div class="col-lg-6 col-md-6 mb-5">
                                <div class="avt-img">
                                    <img src="{{ $about->img }}" alt="">
                                </div>
                                <!--avt-img end-->
                            </div>
                        @endforeach
                    </div>
                </div>
                <!--abt-page-row end-->
            </div>

        </section>
        <!--about-page-content end-->

        {{-- <section class="benifit-section">
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
		</section><!--benifit-section end--> --}}

        <section class="classes-section">
            <div class="container">
                <div class="sec-title">
                    <h2>Kurslar</h2>
                </div>
                <!--sec-title end-->
                <div class="classes-sec">
                    <div class="row classes-carousel">

                        @foreach ($courses as $course)

                        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
                            <div class="classes-col wow fadeInUp" data-wow-duration="1000ms">
                                <div class="class-thumb">
                                    <img src="{{ $course->course_img }}" alt="" class="w-100">
                                    <a href="{{route('course_detail',['id'=>$course->id_course])}}" title="Baylanis" class="crt-btn fas fa-pen-alt"></a>
                                </div>
                                <div class="class-info">
                                    <h3><a href="{{ route('course_detail', ['id'=>$course->id_course]) }}" title="">{{$course->course_name}}</a></h3>
                                    <span class="ml-1">{{$course->days}}</span>
                                    <span>{{$course->sub_time}}</span>
                                    <div class="d-flex flex-wrap align-items-center">
                                        <div class="posted-by">
                                            <img src="https://via.placeholder.com/26x26" alt="">
                                            <a href="{{ route('mentor_portfolio', ['id'=>$course->id_mentor]) }}" title="Mentor Haqqinda"> {{$course->full_name}}</a>
                                        </div>
                                        <div class="container ml-4">
                                            <strong class="price text-center">{{$course->price}}</strong>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--classes-col end-->
                        </div>

                        @endforeach

                    </div>
                    <div class="lnk-dv text-center">
                        <a href="{{ route('get_courses') }}" title="" class="btn-default">Bárshe kurslar <i class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <!--classes-sec end-->
            </div>
        </section>
        <!--classes-section end-->


        {{-- @include('includes.dizimnen-otuw') --}}
        <!--newsletter-sec end-->

        @include('includes.footer')
        <!--footer end-->


    </div>



    @include('includes.script')

</body>

</html>
