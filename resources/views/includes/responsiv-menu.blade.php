
<div class="responsive-menu">
    <ul>
        <li><a href="{{ route('home_page') }}" title="">Bas Bet <i class="fas fa-home ml-2"></i></a></li>
        <li><a href="{{route('about')}}" class="btn-group" title="">Biz Haqqimizda<i class="fas fa-angle-down ml-2 mt-1"></i></a>
            <ul class="ml-3 mt-3">
                <li><a href="{{route('mentors')}}" title="">Mentorlar</a></li>
                <li><a href="{{route('get_programmers')}}" title="">Programmistler</a></li>
                <li><a href="{{route('get_students')}}" title="">Pitkeriwshiler</a></li>
                {{-- <li><a href="error.html" title="">Dizaynerler</a></li> --}}
            </ul>
        </li>
        <li><a href="{{route('get_courses')}}" title="">Kurslar <i class="fas fa-angle-down ml-2 mt-1"></i></a>
            <ul class="ml-3 mt-3">
                {{-- @for ($i=0;$i < 4;$i++)
                            <li><a href="{{route('course_detail',['id'=>$courses[$i]->id_course])}}">{{$courses[$i]->course_name}}</a></li>
                @endfor --}}
                <li>
                    <div class="lnk-dv">
                        <a href="{{ route('get_courses') }}" style="color: white" class="btn-default">Toliq<i class="fa fa-long-arrow-alt-right"></i></a>
                    </div>
                </li>
            </ul>
        </li>
        <li><a href="#" title="">Portfolio <i class="fas fa-angle-down ml-2 mt-1"></i></a></li>
        <li><a href="{{route('get_blogs')}}" title="">Blog</a></li>
        <li><a href="{{route('contacts')}}" title="">Baylanis</a></li>
    </ul>
</div>