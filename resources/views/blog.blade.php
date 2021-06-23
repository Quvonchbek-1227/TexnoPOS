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
					<div class="col-lg-9">
						<div class="blog-section p-0 posts-page">
							<div class="blog-posts">

								<div class="blog-post">
									<div class="blog-thumbnail">
										<a href="#" title="">
											<img src="https://via.placeholder.com/2172x1448" alt="" class="w-100">
										</a>
										<span class="category">English, Teachers, Shelly</span>
									</div>
									<div class="blog-info">
										<ul class="meta">
											<li><a href="#" title="">17/09/2020</a></li>
											<li><a href="#" title="">by Admin</a></li>
											<li><img src="assets/img/icon13.png" alt="" /><a href="#" title="">Teachers,</a><a href="#" title=""> School</a></li>
										</ul>
										<h3 class="stick"><a href="post.html" title="">Standard Post Sticky</a></h3>
										<p>Nullam erat dolor, hendrerit id turpis laoreet, congue dapibus odio. Duis tempor eros tortor, a ornare arcu egestas quis. Donec vehicula eget quam maximus interdum. Duis ultrices sapien eget metus luctus finibus. Morbi nec lobortis ante, sed condimentum nisl. Nam laoreet ullamcorper magna et fringilla</p>
										<a href="post.html" title="" class="read-more">Read <i class="fa fa-long-arrow-alt-right"></i></a>
									</div>
								</div><!--blog-post end-->

							</div><!--blog-posts end-->
						</div><!--blog-section end-->
						<div class="mdp-pagiation">
							<nav aria-label="Page navigation example">
								<ul class="pagination">
							    	<li class="page-item"><a class="page-link" href="#">1</a></li>
							    	<li class="page-item"><a class="page-link active" href="#">2</a></li>
							    	<li class="page-item"><a class="page-link" href="#">3</a></li>
							    	<li class="page-item"><a class="page-link" href="#">4</a></li>
							    	<li class="page-item"><a class="page-link" href="#">...</a></li>
							    	<li class="page-item"><a class="page-link" href="#">15</a></li>
							  	</ul>
							</nav>
						</div><!--pagination-end-->
					</div>
					<div class="col-lg-3">
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
								<h3 class="widget-title">Latest Posts</h3>
								<div class="wd-posts">
									<div class="wd-post d-flex flex-wrap">
										<div class="wd-thumb">
											<img src="https://via.placeholder.com/52x52" alt="">
										</div>
										<div class="wd-info">
											<h3><a href="post.html" title="">Duis tempor eros tortor, a ornare</a></h3>
											<span>17/09/2020</span>
										</div>
									</div><!--wd-post end-->
									<div class="wd-post d-flex flex-wrap">
										<div class="wd-thumb">
											<img src="https://via.placeholder.com/52x52" alt="">
										</div>
										<div class="wd-info">
											<h3><a href="post.html" title="">Duis tempor eros tortor, a ornare</a></h3>
											<span>17/09/2020</span>
										</div>
									</div><!--wd-post end-->
									<div class="wd-post d-flex flex-wrap">
										<div class="wd-thumb">
											<img src="https://via.placeholder.com/52x52" alt="">
										</div>
										<div class="wd-info">
											<h3><a href="post.html" title="">Duis tempor eros tortor, a ornare</a></h3>
											<span>17/09/2020</span>
										</div>
									</div><!--wd-post end-->
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
				</div>
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