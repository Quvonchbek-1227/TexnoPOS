<?php

use SimpleSoftwareIO\QrCode\Facades\QrCode; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TexnoPOS IT Mektebi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TexnoPOS IT Mektebi" />
    <meta name="author" content="TEXNOPOS DEVELOPERS!">
    <meta name="keywords" content="TexnoPOS" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/mycss.css')}}">
    <style>

    </style>
</head>


<body>
            <div class="parda">
                <div class="shadows">
                    <span class="t">T</span>
                    <span class="e">E</span>
                    <span class="x">X</span>
                    <span class="n">N</span>
                    <span class="o">O</span>
                    <span class="p">P</span>
                    <span class="o">O</span>
                    <span class="s">S</span>
                </div>
	        </div>

    <div class="wrapper">

        <div class="main-section">

            @include('includes.header')
            <!--header end-->

            @include('includes.responsiv-menu')
            <!--responsive-menu end-->

            <section class="main-banner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-7">
                            <div class="banner-text wow fadeInLeft" data-wow-duration="1000ms">
                                <h2>Biz benen keleshek k??sibin iyele - <span>TexnoPOS IT Mektebi</span></h2>
                                <p>Biz benen birgelikte programmalast??r??w tillerin ??yren h??m keleshekke ja??a q??dem tasla!</p>
                                <!-- <form class="search-form">
									<input type="text" name="search" placeholder="Search Class">
									<button><i class="fa fa-search"></i></button>
								</form> -->
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5">
                            <div class="banner-img wow zoomIn" data-wow-duration="1000ms">
                                @if (count($frontimg) != 0)
                                    <img width='500' src="{{ $frontimg[0]->image }}" alt="">
                                @endif
                            </div>
                            <!--banner-img end-->
                            <div class=" wow zoomIn" data-wow-duration="1000ms"></div>
                        </div>
                    </div>
                </div>
            </section>
            <!--main-banner end TexnoPOS IT Mektebi-->

        </div>
        <!--main-section end-->

        <section class="about-us-section">
            <div class="container">
                <div class="section-title text-center">
                    <h2><span>TexnoPOS IT Mektebi</span>ne xosh kelipsiz! </h2>
                    <p>Sapali Keleshek Ushin Sapali Ta`lim!</p>
                </div>
                <!--section-title end-->
                <div class="about-sec">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="abt-col wow fadeInUp" data-wow-duration="1000ms">
                                    <img src="assets/img/icon5.png" alt="">
                                    <h3>T??jiriybeli ustazlar</h3>
                                    <!-- <p>Vivamus interdum, mauris interdum quis curdum  sodales</p> -->
                                </div>
                                <!--abt-col end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="200ms">
                                    <img src="assets/img/icon7.png" alt="">
                                    <h3>Sapal?? bilim</h3>
                                    <!-- <p>Pelleneget  tespharetra que fringilla egugue id eget pharetra</p> -->
                                </div>
                                <!--abt-col end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
                                    <img src="assets/img/icon8.png" alt="">
                                    <h3>??piway?? metodika</h3>
                                    <!-- <p>Etiam risus neque, volutpat vel laoreet a, finibus volutpat non</p> -->
                                </div>
                                <!--abt-col end-->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="abt-col wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                                    <img src="assets/img/icon9.png" alt="">
                                    <h3>Jaqsi N??tiyje</h3>
                                    <!-- <p>Mauris nec mi fequis ugiat, cursus tortor nec, pharetra tellus</p> -->
                                </div>
                                <!--abt-col end-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--about-rw end-->
                <div class="abt-img">
                     <ul class="masonary">
                     <?php $i = 1;?>
                         @foreach($images as $image)
                         <?php
                            if($i === 11){
                                $i=1;
                            }
                         ?>
                            <li class="width{{$i}} wow zoomIn" data-wow-duration="1000ms">
                                <a href="{{ $image->img }}" data-group="set1" title="" class="html5lightbox">
                                    <img src="{{ $image->img }}" >
                                </a>
                            </li>
                            <?php $i++; ?>
                        @endforeach
                    </ul> 
                </div>
                <!-- abt-img end-->
            </div>
        </section>
        <!--about-us-section end-->



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
                                <div class="class-info" style="background-color:white">
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
                        <a href="{{ route('get_courses') }}" title="" class="btn-default">B??rshe kurslar <i class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <!--classes-sec end-->
            </div>
        </section>
        <!--classes-section end-->




        <section class="course-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="find-course">
                            <div class="sec-title">
                                <h2>??zi??izge mas kurst?? sayla??</h2>
                                <h3><img src="{{asset('assets/img/icon11.png')}}" alt="">Baylan??s <strong>+99890 592 7117</strong></h3>
                            </div>
                            <!--sec-title end-->
                            <div class="course-img">
                                <img src="{{asset('assets/img/img/4.jpg')}}" alt="">
                            </div>
                            <!--course-img end-->
                        </div>
                        <!--find-course end-->
                    </div>
                    <div class="col-lg-6" style="margin-top: 150px">
                        <div class="courses-list">
                            @foreach ($events as $event)

                            <div class="course-card wow fadeInLeft" data-wow-duration="1000ms">
                                <div class="d-flex flex-wrap align-items-center">
                                    <ul class="course-meta">
                                        <li>
                                            <img src="{{asset('assets/img/icon12.png')}}" alt="">{{$event->date}}
                                        </li>
                                        <li>
                                            {{$event->time}}
                                        </li>
                                    </ul>
                                    <span>{{$event->price}}</span>
                                </div>
                                <h3><a href="{{ route('event',['id'=>$event->id_event]) }}" title="">{{$event->title}}</a></h3>
                                <div class="d-flex flex-wrap">
                                    <div class="posted-by">
                                        <img src="https://via.placeholder.com/26x26" alt="">
                                        <a href="#" title="">{{$event->full_name}}</a>
                                    </div>
                                    <span class="locat"><img src="{{asset('assets/img/loct.png')}}" alt="" />{{$event->adress}}</span>
                                </div>
                            </div>
                            @endforeach
                            <!--course-card end-->
                        </div>
                        <!--courses-list end-->
                        <a href="{{route('get_events')}}" title="" class="all-btn">All Events <i class="fa fa-long-arrow-alt-right"></i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!--course-section end-->

        <section class="blog-section">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Blog</h2>
                </div>
                <!--section-title end-->
                <div class="blog-posts">
                    <div class="row">

                        @foreach ($blogs as $blog)
                        <?php
                        $text = str_split($blog->text);
                        ?>

                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumbnail">
                                    <img src="{{ $blog->img }}" alt="" class="w-100">
                                    <span class="category">TEXNOPOS</span>
                                </div>
                                <div class="blog-info" style="opacity: 1; background-color: white">
                                    <ul class="meta">
                                        <li><a href="{{ route('get_post', ['id'=>$blog->id]) }}" title="">{{$blog->date}}</a></li>
                                        {{-- <li><a href="#" title="">by Admin</a></li> --}}
                                        <li><img src="{{asset('assets/img/icon13.png')}}" alt="" />TEXNOPOS IT MEKTEBI</li>
                                    </ul>
                                    <h3><a href="{{ route('get_post', ['id'=>$blog->id]) }}" title="">{{$blog->title}}</a></h3>
                                    <p>
                                        {{Str::limit($blog->text,50,'...')}}
                                    </p>
                                    <a href="{{ route('get_post', ['id'=>$blog->id]) }}" title="" class="read-more">Toliq Oqiw <i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                            <!--blog-post end-->
                        </div>

                        @endforeach

                    </div>
                </div>
                <!--blog-posts end-->
            </div>
        </section>

        <!--blog-section end-->

        @include('includes.dizimnen-otuw')

        <!--newsletter-sec end-->

        @include('includes.footer')
        <!--footer end-->

    </div>



    @include('includes.script')


</body>

</html>