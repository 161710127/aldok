<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Taxx</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">

	<!-- Stylesheets -->

	<link href="assets/taxx/common-css/bootstrap.css" rel="stylesheet">

	<link href="assets/taxx/common-css/ionicons.css" rel="stylesheet">

	<link href="assets/taxx/05-news/css/styles.css" rel="stylesheet">

	<link href="assets/taxx/05-news/css/responsive.css" rel="stylesheet">

</head>
<body>

 	<header>

		<div class="container">

			<a class="logo" href="#"><img src="assets/taxx/images/logo-with-bg.jpg" alt="Logo"></a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="icon ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="02-about-us.html">About Us</a></li>
				<li><a href="03-services.html">Services</a></li>
				<li><a href="04-portfolio.html">Portfolio</a></li>
				<li><a href="05-news.html">Blog</a></li>
				<li><a href="06-contact.html">Contact</a></li>
			</ul><!-- main-menu -->

		</div><!-- container -->
	</header>


	<div class="main-slider" style="background-image: url(assets/taxx/images/slider-1-1920x1080.jpg);">
		<div class="display-table center-text">
			<div class="display-table-cell">
				<div class="slider-content">

					<h5 class="pre-heading">This is the blog</h5>
					<h1><b>News</b></h1>

				</div><!-- slider-content-->
			</div><!--display-table-cell-->
		</div><!-- display-table-->
	</div><!-- main-slider -->



	<section class="blog-section section">
		<div class="container">

			<div class="single-post margin-b-50">
				<a class="margin-b-50" href="#"><img src="assets/taxx/images/blog-1-1200x500.jpg" alt=""></a>
				<div class="post-details">
					<h6><b><a href="#">Design</a><span class="margin-lr-10"> | </span><a href="#">27/12/2018</a></b></h6>
					<h4 class="margin-tb-10"><a href="#"><b>Design Inspiration</b></a></h4>
					<h6 class="font-white-lite"><b>By <a href="#">LORENDA PAAP</a><span class="margin-lr-10"> | </span><a href="#">3 COMMENTS</a></b></h6>
					<p class="margin-tb-30">{{$table_barang->deskripsi}}</p>
					<a class="btn btn-fill read-more-btn" href="#"> <i class="ion-chevron-right"></i><i class="ion-chevron-right"></i></a>
				</div><!-- post-details -->
			</div><!-- single-post -->

			<div class="single-post margin-b-50">
				<a class="margin-b-50" href="#"><img src="assets/taxx/images/blog-2-1200x500.jpg" alt=""></a>
				<div class="post-details">
					<h6><b><a href="#">Design</a><span class="margin-lr-10"> | </span><a href="#">27/12/2018</a></b></h6>
					<h4 class="margin-tb-10"><a href="#"><b>Design Inspiration</b></a></h4>
					<h6 class="font-white-lite"><b>By <a href="#">LORENDA PAAP</a><span class="margin-lr-10"> | </span><a href="#">3 COMMENTS</a></b></h6>
					<p class="margin-tb-30">Litora torquent per conubia nostra, per inceptos himena eos. Fusce quis tempus elit.
					Class aptent taciti orquent per conubia nostra inceptos. Litora torquent per conubia nostra,
					per inceptos himena eos. Fusce quis tempus elit. Class aptent taciti orquent per conubia nostra
					inceptos ... Litora torquent per conubia nostra, per inceptos himena eos. Fusce quis
					tempus elittaciti orquent per conubia nostra inceptos ......</p>
					<a class="btn btn-fill read-more-btn" href="#"> <i class="ion-chevron-right"></i><i class="ion-chevron-right"></i></a>
				</div><!-- post-details -->
			</div><!-- single-post -->

			<div class="single-post margin-b-50">
				<a class="margin-b-50" href="#"><img src="assets/taxx/images/blog-3-1200x500.jpg" alt=""></a>
				<div class="post-details">
					<h6><b><a href="#">Design</a><span class="margin-lr-10"> | </span><a href="#">27/12/2018</a></b></h6>
					<h4 class="margin-tb-10"><a href="#"><b>Design Inspiration</b></a></h4>
					<h6 class="font-white-lite"><b>By <a href="#">LORENDA PAAP</a><span class="margin-lr-10"> | </span><a href="#">3 COMMENTS</a></b></h6>
					<p class="margin-tb-30">Litora torquent per conubia nostra, per inceptos himena eos. Fusce quis tempus elit.
					Class aptent taciti orquent per conubia nostra inceptos. Litora torquent per conubia nostra,
					per inceptos himena eos. Fusce quis tempus elit. Class aptent taciti orquent per conubia nostra
					inceptos ... Litora torquent per conubia nostra, per inceptos himena eos. Fusce quis
					tempus elittaciti orquent per conubia nostra inceptos ......</p>
					<a class="btn btn-fill read-more-btn" href="#"> <i class="ion-chevron-right"></i><i class="ion-chevron-right"></i></a>
				</div><!-- post-details -->
			</div><!-- single-post -->

			<ul class="blog-pagination margin-b-30">
				<li><a href="#"><b>01</b></a></li>
				<li class="active"><a href="#"><b>02</b></a></li>
				<li><a href="#"><b>03</b></a></li>
			</ul>

		</div><!-- container -->
	</section><!-- blog-section -->


	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-lg-3 col-xl-4">
					<div class="margin-b-30">
						<a class="logo margin-b-10" href="#"><img src="assets/taxx/images/logo-white.png" alt="Logo"></a>

						<p class="margin-tb-20">Litora torquent per conubia nostra, per inceptos himena eos.
							Fusce quis tempus elit. Class aptent taciti orquent per conubia nostra inceptos<p>
						<p class="font-black-lite copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>

					</div><!-- margin-b-30 -->
				</div><!-- col-sm-6 -->

				<div class="hidden-lg-down col-xl-2"></div>

				<div class="col-md-6 col-lg-3 col-xl-2">
					<div class="footer-section margin-b-30">
						<h5 class="title margin-b-20"><b>Barcelona Office</b></h5>
						<p>C /Libertad, 34, 05200 Arevalo</p>
						<p class="margin-tb-10">0034 373840 2445 322</p>
						<p>hello@company.com</p>
					</div><!-- footer-section -->
				</div><!-- col-sm-2 -->

				<div class="col-md-6 col-lg-3 col-xl-2">
					<div class="footer-section margin-b-30">
						<h5 class="title margin-b-20"><b>New York Office</b></h5>
						<p>475 Chinatown Drive, Willasport,TN 38487</p>
						<p class="margin-tb-10">0034 373840 2445 322</p>
						<p>hello@company.com</p>
					</div><!-- footer-section -->
				</div><!-- col-sm-2 -->

				<div class="col-md-6 col-lg-3 col-xl-2">
					<div class="footer-section margin-b-30">
						<h5 class="title margin-b-20"><b>Melbourne Office</b></h5>
						<p>21 Ronald Chescent, WEST GLADSTONE QLD 468</p>
						<p class="margin-tb-10">(07) 4936 2100</p>
						<p>hello@company.com</p>
					</div><!-- footer-section -->
				</div><!-- col-sm-2 -->

			</div><!-- row -->
		</div><!-- container -->
	</footer>

	<!-- SCIPTS -->

	<script src="assets/taxx/common-js/jquery-3.1.1.min.js"></script>

	<script src="assets/taxx/common-js/tether.min.js"></script>

	<script src="assets/taxx/common-js/bootstrap.js"></script>

	<script src="assets/taxx/common-js/scripts.js"></script>


</body>
</html>
