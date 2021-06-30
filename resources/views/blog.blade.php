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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
	<link rel="stylesheet" href="{{asset('assets/css/mycss.css')}}">
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
					<h2>Blog</h2>
					<ul>
						<li><a href="#" title="">Home</a></li>
						<li><span>Blog</span></li>
					</ul>
				</div><!--pager-content end-->
				<h2 class="page-titlee">Quwanishbek</h2>
			</div>
		</section><!--pager-section end-->

		<section class="page-content">
			<div class="container">
				<div class="row">

					<?php $q = 0;?>	
					
					@foreach ($blogs as $blog)
					
					
					<div class="col-lg-9">
						<div class="blog-section p-0 posts-page">
							<div class="blog-posts">

								<div class="blog-post">
									<div class="blog-thumbnail">
										<a href="#" title="">
											<img src="{{ asset('assets/img/blogs/'.$blog->img) }}" alt="" class="" style="width: 100%;">
										</a>
										<span class="category">TEXNOPOS IT MEKTEBI</span>
									</div>
									<div class="blog-info">
										<ul class="meta">
											<li><a href="#" title="">{{$blog->date}}</a></li>
											{{-- <li><a href="#" title="">by Admin</a></li> --}}
											{{-- <li><img src="{{asset('assets/img/icon13.png')}}" alt="" /><a href="#" title="">Teachers,</a><a href="#" title=""> School</a></li> --}}
										</ul>
										<h3 class="stick"><a href="#" title="">{{$blog->title}}</a></h3>
										<p>
											<?php 

												$arr = str_split($blog->text);
												// $mas = str_split($arr,2);

												for($i=0;$i<50;$i++){
													echo $arr[$i];
												}	
												echo '...';
											?>
										</p>
										<a href="{{ route('get_post', ['id'=>$blog->id]) }}" title="" class="read-more">Toliq Post <i class="fa fa-long-arrow-alt-right"></i></a>
									</div>
								</div><!--blog-post end-->

							</div><!--blog-posts end-->
						</div><!--blog-section end-->
					</div>

					
					@if ($q == 0)
					<?php $q++; ?>
					<div class="col-lg-3 left_section">{{-- O`ng tarafdagi yon menyu --}}
						<div class="sidebar">
							<div class="widget widget-categories">
								<h3 class="widget-title">Categories</h3>
								<ul>
									<li>
										<a href="#" title="">Teachers</a>
										<span>45</span>
									</li>
									<li>
										<a href="#" title="">School News</a>
										<span>13</span>
									</li>
									<li>
										<a href="#" title="">Lessons</a>
										<span>6</span>
									</li>
									<li>
										<a href="#" title="">Shelly</a>
										<span>89</span>
									</li>
								</ul>
							</div>
							<!--widget-categories end-->
							<div class="widget widget-posts">
								<h3 class="widget-title">En` song`i postlar</h3>
								<div class="wd-posts">
									
									@for ($i=0; $i < count($blogs); $i++)
									@if ($i >= 5)
										@break
									@endif
									<div class="wd-post d-flex flex-wrap">
										<div class="wd-thumb">
											<img src="{{ asset('assets/img/blogs/'.$blogs[$i]->img) }}" width="50px" height="60px">
										</div>
										<div class="wd-info">
											<h4><a href="{{ route('get_post', ['id'=>$blogs[$i]->id]) }}" title="">{{$blogs[$i]->title}}</a></h4>
											<span>{{$blogs[$i]->date}}</span>
										</div>
									</div>
									@endfor
									
								</div><!--wd-posts end-->
							</div><!--widget-posts end-->
							
							<div class="widget widget-calendar">
								<h3 class="widget-title">Calendar</h3>
								<div class="mdp-calendar">
									<h3 class="month">July 2020</h3>
									<table>
										<thead>
											<tr>
												<th>S</th>
												<th>M</th>
												<th>T</th>
												<th>W</th>
												<th>T</th>
												<th>F</th>
												<th>S</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td>1</td>
												<td>2</td>
												<td>3</td>
												<td>4</td>
											</tr>
											<tr>
												<td>5</td>
												<td class="active">6</td>
												<td>7</td>
												<td>8</td>
												<td>9</td>
												<td>10</td>
												<td>11</td>
											</tr>
											<tr>
												<td>12</td>
												<td>13</td>
												<td>14</td>
												<td>15</td>
												<td>16</td>
												<td>17</td>
												<td>18</td>
											</tr>
											<tr>
												<td>19</td>
												<td>20</td>
												<td>21</td>
												<td>22</td>
												<td>23</td>
												<td>24</td>
												<td>25</td>
											</tr>
											<tr>
												<td>26</td>
												<td>27</td>
												<td>28</td>
												<td>29</td>
												<td>30</td>
												<td>31</td>
											</tr>
										</tbody>
									</table>
									<ul class="controls">
										<li>
											<a href="#" title=""><i class="fa fa-angle-left"></i> Prev</a>
										</li>
										<li>
											<a href="#" title="">Next <i class="fa fa-angle-right"></i></a>
										</li>
									</ul>
								</div><!--mdp-calendar end-->
							</div><!--widget-calendar end-->
						</div><!--sidebar end-->
					</div>
					@endif
					
					@endforeach

					
				</div>
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