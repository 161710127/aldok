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

	<link href="assets/taxx/04-portfolio/css/styles.css" rel="stylesheet">

	<link href="assets/taxx/04-portfolio/css/responsive.css" rel="stylesheet">

</head>
<body>

 	<header>

		<div class="container">

			<a class="logo" href="#"><img src="assets/taxx/images/fire.png" alt="Logo"></a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="icon ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="/">Home</a></li>
				<li><a href="tentang">Tentang</a></li>
                <li><a href="produk">Produk</a></li>
                <li><a href="galeri">Galeri</a></li>
				<li><a href="kontak">Kontak</a></li>
			</ul><!-- main-menu -->

		</div><!-- container -->
	</header>


	<div class="main-slider" style="background-image: url(assets/taxx/images/cockpit.jpg);">
		<div class="display-table center-text">
			<div class="display-table-cell">
				<div class="slider-content">

					<h5 class="pre-heading">Kategori</h5>
					<h1><b>Produk</b></h1>

				</div><!-- slider-content-->
			</div><!--display-table-cell-->
		</div><!-- display-table-->
	</div><!-- main-slider -->


	<section class="porfolio-section section center-text">
		<div class="container">
			<div class="portfolioFilter clearfix margin-b-80">
                <a href="#" data-filter="*" class="current"><b>All Categories</b></a>
                @foreach ($kategori as $data)
                <a href="#" data-filter=".produk{{$data->id}}"><b>{{ $data->nama_kategori}}</b></a>
                @endforeach
			</div><!-- portfolioFilter -->

			<div class="portfolioContainer image-gallery margin-b-80">
                @foreach ($table_barang as $data)
				<div class="p-item produk{{ $data->kategori->id}}"><a href="single/{$data->slug}}">
					<img src="{{asset('/assets/img/gambar/'.$data->gambar.'')}}" width="70" height="140">
						<div class="portfolio-info">
							<div class="display-table">
								<div class="display-table-cell">
									<h5 class="title"><b>{{ $data->nama_barang}}</b></h5>

								</div><!-- display-table-cell -->
							</div><!-- display-table -->
						</div><!-- portfolio-info -->
					</a>
				</div><!-- p-item -->
                @endforeach

	</section><!-- porfolio-section -->


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

	<script src="assets/taxx/common-js/isotope.pkgd.min.js"></script>

	<script src="assets/taxx/common-js/scripts.js"></script>


</body>
</html>
