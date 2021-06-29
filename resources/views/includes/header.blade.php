<header>
    <div class="container">
        <div class="header-content d-flex flex-wrap align-items-center">
            <div class="logo">
                <a href="{{ route('home_page') }}" title="">
                    <img width='250' src="{{asset('assets/img/logo.png')}}" alt="" srcset="{{asset('assets/img/logo.png')}} 2x">
                </a>
            </div>
            <!--logo end-->
            <ul class="contact-add d-flex flex-wrap">
                <li>
                    <div class="contact-info">
                        <img src="{{asset('assets/img/icon1.png')}}" alt="">
                        <div class="contact-tt">
                            <h4>Telefon</h4>
                            <span>+99890 592 71 17</span>

                        </div>
                    </div>
                    <!--contact-info end-->
                </li>
                <li>
                    <div class="contact-info">
                        <img src="{{asset('assets/img/icon2.png')}}" alt="">
                        <div class="contact-tt">
                            <h4>Jumıs waqtı</h4>
                            <span>Dúysenbi - Ekshenbi </span>
                            <span>9:00 - 20:00</span>
                        </div>
                    </div>
                    <!--contact-info end-->
                </li>
                <li>
                    <div class="contact-info">
                        <img src="{{asset('assets/img/icon3.png')}}" alt="">
                        <div class="contact-tt">
                            <h4>Mánzil</h4>
                            <span>Ǵárezsizlik kóshesi 80/4</span>
                        </div>
                    </div>
                    <!--contact-info end-->
                </li>
            </ul>
            <!--contact-information end-->
            <div class="menu-btn">
                <a href="#">
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </a>
            </div>
            <!--menu-btn end-->
        </div>
        <!--header-content end-->
        <div class="navigation-bar d-flex flex-wrap align-items-center">
            <nav>
                <ul>
                    <li><a href="{{ route('home_page') }}" title="">Bas Bet</a></li>
                    <li><a href="#" title="">Biz haqqımızda</a>
                        <ul>
                            <li><a href="{{route('mentors')}}" title="">Mentorlar</a>
                                {{-- <ul>
                                    <li><a href="event-single.html" title="">Event Single</a></li>
                                </ul> --}}
                            </li>
                            <li><a href="{{route('get_programmers')}}" title="">Programmistler</a></li>
                            <li><a href="{{route('get_students')}}" title="">Pitkeruwshiler</a></li>
                            {{-- <li><a href="error.html" title="">Dizaynerler</a></li> --}}
                        </ul>
                    </li>
                    <li><a href="#" title="">Kurslar</a>
                        <ul>
                            {{-- @for ($i=0;$i < 4;$i++)
                            <li><a href="{{route('course_detail',['id'=>$courses[$i]->id_course])}}">{{$courses[$i]->course_name}}</a></li>
                            @endfor --}}
                            <li>
                                <div class="lnk-dv text-center">
                                    <a href="{{ route('get_courses') }}" style="color: white" class="btn-default">Toliq<i class="fa fa-long-arrow-alt-right"></i></a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#" title="">Portfolio</a>
                        {{-- <ul>
                            <li><a href="schedule.html" title="">TexnoPOS</a></li>
                            <li><a href="teacher-single.html" title="">Pitkeruwshiler</a></li>
                        </ul> --}}
                    </li>
                    <li><a href="{{ route('get_blogs') }}" title="">Blog</a>
                        {{-- <ul>
                            <li><a href="post.html" title="">Blog Single</a></li>
                        </ul> --}}
                    </li>
                    <li><a href="{{ route('contacts') }}" title="">Baylanıs</a></li>
                </ul>
            </nav>
            <!--nav end-->
            <ul class="social-links ml-auto">
                <li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" title=""><i class="fab fa-telegram"></i></a></li>
                <li><a href="#" title=""><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" title=""><i class="fab fa-youtube"></i></a></li>
                <li><a href="#" title=""><i class="fab fa-tiktok"></i></a></li>
            </ul>
        </div>
        <!--navigation-bar end-->
    </div>
</header>