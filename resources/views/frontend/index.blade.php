<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Alat Dokter</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">

	<!-- Stylesheets -->

	<link href="assets/taxx/common-css/bootstrap.css" rel="stylesheet">

	<link href="assets/taxx/common-css/ionicons.css" rel="stylesheet">

	<link href="assets/taxx/common-css/swiper.css" rel="stylesheet">

	<link href="assets/taxx/01-homepage/css/styles.css" rel="stylesheet">

	<link href="assets/taxx/01-homepage/css/responsive.css" rel="stylesheet">

</head>
<body>




 	<header>

		<div class="container">

			<a class="logo" href="#"><img src="assets/taxx/images/fire.png" alt="Logo"></a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="/">Home</a></li>
				<li><a href="tentang">Tentang</a></li>
                <li><a href="produk">Produk</a></li>
                <li><a href="galeri">Galeri</a></li>
                <li><a href="artikel">Artikel</a></li>
				<li><a href="kontak">Kontak</a></li>
			</ul><!-- main-menu -->

		</div><!-- container -->
	</header>


	<div class="main-slider" style="background-image: url(assets/taxx/images/gsx.jpg);">


		<div class="display-table center-text">
			<div class="display-table-cell">
				<div class="slider-content">

					<h1><b>Toko Alat</b></h1>
					<h1 class="hand-writing">Kedokteran</h1>

				</div><!-- slider-content-->
			</div><!--display-table-cell-->
		</div><!-- display-table-->
	</div><!-- main-slider -->


	<section class="intro-section" id="intro">

		<div class="image-wrapper" style="background-image: url(assets/taxx/images/toko.jpg)">
		</div>

		<div class="container">
			<div class="intro section">
				<h3><b><span class="font-red"></span>Toko Alat Kedokteran</b></h3>
				<p class="margin-tb-20">Perusahaan Alat kedokteran ini sudah berdiri sejak tahun 2006, Jakarta.
					Perusahaan alat kedokteran ini sudah di berdiri lama di daerah Jakata.
                    Perusahaan ini sudah memiliki cabang yaitu di daerah Blok M  dan Pusatnya di Jl.Pramuka Raya.
                </p>
				<a class="btn btn-border margin-b-30" href="tentang"><b>Tentang</b>
					<i class="ion-chevron-right"></i><i class="ion-chevron-right"></i></a>
			</div><!-- intro-->
		</div><!-- container-->

	</section><!-- intro-section -->
    @php
        $table_barang=App\table_barang::all();
    @endphp
    <section class="portfolio-section center-text" id="portfolio">
		<div class="container-fluid">

			<div class="row">

                @foreach ($table_barang as $data)
				<div class="col-lg-4 col-md-6 padding-lr-0">
					<div class="p-item architecture brand-identity"><a href="#">
						<img src="{{asset('/assets/img/gambar/'.$data->gambar.'')}}" alt="Gallery Image">
						<div class="portfolio-info">
								<div class="display-table">
									<div class="display-table-cell">
										<h5 class="title"><b>{{$data->nama_barang}}</b></h5>
										<h6 class="pre-title"></h6>
									</div><!-- display-table-cell -->
								</div><!-- display-table -->
							</div><!-- portfolio-info -->
						</a>

                    </div><!-- p-item -->
                </div><!-- col-lg-4 -->
                @endforeach
			</div><!-- row -->
		</div><!-- container-fluid -->
	</section><!-- portfolio-section -->


	<section class="blog-section section" id="blog">
		<div class="container">
			<div class="row">

				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="blog-post margin-b-30">

						<h6>
							<b><a>Testimoni</a>
							<span class="bar">|</span>
							<a>24/10/2017</a></b>
						</h6>
						<h4 class="margin-tb-10"><a><b>Tentang Harga</b></a></h4>
						<h6 class="font-white-lite">
							<b>by <a>Loredana Papp</a>
							<span class="bar">|</span>
							<a>comments</a></b>
						</h6>
						<p class="margin-tb-20">Barangnya sangat berguna dan berkualitas.
							Terima kasih toko Alat Kedokteran barangnya murah dan berkualitas.<p>


					</div><!-- blog-post-->
				</div><!-- col-sm-4-->

				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="blog-post margin-b-30">

						<h6>
							<b><a>Testimoni</a>
							<span class="bar">|</span>
							<a>23/11/2013</a></b>
						</h6>
						<h4 class="margin-tb-10"><a><b>Tentang Kualitas</b></a></h4>
						<h6 class="font-white-lite">
							<b>by <a>Lorena Pa</a>
							<span class="bar">|</span>
							<a>comments</a></b>
						</h6>
						<p class="margin-tb-20">Terima kasih barang barangnya sangat lengkap dan murah.
							Semua barangnya awet dan tahan lama.<p>


					</div><!-- blog-post-->
				</div><!-- col-sm-4-->

				<div class="col-sm-12 col-md-6 col-lg-4">
					<div class="blog-post margin-b-30">

						<h6>
							<b><a>Testimoni</a>
							<span class="bar">|</span>
							<a>22/12/2012</a></b>
						</h6>
						<h4 class="margin-tb-10"><a><b>Tentang Toko</b></a></h4>
						<h6 class="font-white-lite">
							<b>by <a>Ana ap</a>
							<span class="bar">|</span>
							<a>comments</a></b>
						</h6>
						<p class="margin-tb-20">Barang sangat bagus dan berguna.
							Terima kasih toko Alat Kedokteran.<p>
					</div><!-- blog-post-->
				</div><!-- col-sm-4-->

			</div><!-- row-->
		</div><!-- container-->
	</section><!-- blog-section -->


	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6 col-lg-3 col-xl-4">
					<div class="margin-b-30">
						<a class="logo margin-b-10" href="#"><img src="assets/taxx/images/fire.png" alt="Logo"></a>

						<p class="margin-tb-20">Alat Kedokteran ini sudah terlisensi oleh Kemendiknes.
							Menerima resep dokter / Tanpa Resep dokter<p>
						<p class="font-black-lite copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear()); </script> | Gunakanlah Dengan Bijak <i class="ion-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Alat Kedokteran</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>

</div><!-- margin-b-30 -->
</div><!-- col-sm-6 -->

<div class="hidden-lg-down col-xl-2"></div>

<div class="col-md-6 col-lg-3 col-xl-2">
    <div class="footer-section margin-b-30">
        <h5 class="title margin-b-20"><b>Blok M</b></h5>
        <p>Jl. Iskandarsyah II, RT.3/RW.1, Melawai, Kby. Baru, Kota Jakarta Selatan</p>
        <br/>Daerah Khusus Ibukota Jakarta 12160</p>
        <p class="margin-tb-10">(021) 7260170</p>
        <p>PasarayaBlokM@company.com</p>
    </div><!-- footer-section -->
</div><!-- col-sm-2 -->

<div class="col-md-6 col-lg-3 col-xl-2">
    <div class="footer-section margin-b-30">
        <h5 class="title margin-b-20"><b>Blok M</b></h5>
        <p>Jl. Sultan Hasanuddin Dalam, RT.3/RW.1, Melawai,Kby. Baru, Kota Jakarta Selatan</p>
        <br/>Daerah Khusus Ibukota Jakarta 12160</p>
        <p class="margin-tb-10">0813 1148 3387</p>
        <p>alatkedokter@shop.com</p>
    </div><!-- footer-section -->
</div><!-- col-sm-2 -->

<div class="col-md-6 col-lg-3 col-xl-2">
    <div class="footer-section margin-b-30">
        <h5 class="title margin-b-20"><b>Alat Kedokteran</b></h5>
        <p>Jl. Pramuka Raya, Daerah Khusus Ibukota Jakarta 54</p>
        <p class="margin-tb-10">(022) 564832</p>
        <p>Alkes@company.com</p>
    </div><!-- footer-section -->
</div><!-- col-sm-2 -->

</div><!-- row -->
</div><!-- container -->
	</footer>

	<!-- SCIPTS -->

	<script src="assets/taxx/common-js/jquery-3.1.1.min.js"></script>

	<script src="assets/taxx/common-js/tether.min.js"></script>

	<script src="assets/taxx/common-js/bootstrap.js"></script>

	<script src="assets/taxx/common-js/swiper.js"></script>

	<script src="assets/taxx/common-js/scripts.js"></script>

</body>
</html>
