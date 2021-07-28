<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TexnoPOS IT Mektebi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="TexnoPOS IT Mektebi" />
	<meta name="author" content="TEXNOPOS DEVELOPERS!">
	<meta name="keywords" content="TexnoPOS" />
	<link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
</head>


<body>

	<div class="wrapper">
		

		@include('includes.header')
		<!--header end-->

		@include('includes.responsiv-menu')
		<!--responsive-menu end-->

		<?php $text = $post[0]->text;?>

		<section class="pager-section blog-version" style="background-image: url('{{asset('assets/img/blogs/'.$post[0]->img)}}');">
			<div class="container">
				<div class="pager-content text-center">
					<h2>{{$post[0]->title}}</h2>
					<ul class="meta">
						<li><a title="">{{$post[0]->date}}</a></li>
						<li><img src="{{asset('assets/img/icon13.png')}}"/>TEXNOPOS IT MEKTEBI</li>
					</ul>
				</div><!--pager-content end-->
			</div>
		</section><!--pager-section end-->

		<section class="page-content p80">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="blog-post single">
							<p style="font-size: 20px ">
								{{$post[0]->text}}
							</p>
						</div><!--blog-post single end-->
					</div>
					<div class="col-lg-3">
						<div class="sidebar">

							{{-- <div class="widget widget-categories">
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
							</div> --}}

							<!--widget-categories end-->
							<div class="widget widget-posts">
								<h3 class="widget-title">Basqada Postlar</h3>
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
							
							{{-- <div class="widget widget-calendar">
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
							</div> --}}

							<!--widget-calendar end-->
						</div><!--sidebar end-->
					</div>
				</div>
			</div>
		</section>

        @include('includes.dizimnen-otuw')
		<!--newsletter-sec end-->
		@include('includes.footer')
		<!--footer end-->
	</div>


	@include('includes.script')

</body>

</html>