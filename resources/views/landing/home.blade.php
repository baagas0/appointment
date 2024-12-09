<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

	<title>Caremed - Home 1</title>

	<meta name="keywords" content="Caremed HTML5 Responsive Template Medicine COVID-19 Corona Hospital" />
	<meta name="description" content="Caremed - Hospital HTML5 Responsive Template">

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="{{ asset('assets/landing/images/favicon.ico') }}">

	<!-- Plugins CSS File -->
	<link rel="stylesheet" href="{{ asset('assets/landing/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/landing/css/plugins/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/landing/css/plugins/datepicker.min.css') }}">

	<!-- Main CSS File -->
	<link rel="stylesheet" href="{{ asset('assets/landing/css/style.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/landing/vendor/fontawesome/css/all.min.css') }}">

</head>
<body>
	<!------------------------------------------------
	loading overlay - start
	------------------------------------------------>
	<div class="loading-overlay">
		<div class="bounce-loader">
			<div class="bounce1"></div>
			<div class="bounce2"></div>
			<div class="bounce3"></div>
		</div>
	</div>
	<!------------------------------------------------
	loading overlay - end
	------------------------------------------------>
    <div class="page-wrapper">
		<!------------------------------------------------
		navigation - start
		------------------------------------------------>
		<header class="header">
            <div class="header-top">
                <div class="container-fluid">
                    <div class="header-left">
                        <ul class="top-menu top-link-menu">
                            <li><a href="tel:#" class="link-phone"><i class="fas fa-phone"></i>(62) 895 0637 3551</a></li>
                            <li><a href="#" class="link-email"><i class="fas fa-envelope-open"></i>baagas0@gmail.com</a></li>
                        </ul>
                    </div>
                    <div class="header-right">
                        <ul class="top-menu">
                        </ul>
                    </div>
                </div>

            </div>
            <div class="header-middle sticky-header">
                <div class="header-left">
                    <a href="index.html" class="logo">
                        <h1 class="mb-0"><img src="{{ asset('assets/landing/images/logo.png') }}" alt="Caremed Logo" width="185" height="48"></h1>
                    </a>
                </div>
                <div class="header-right">
                    <button class="mobile-menu-toggler">
                        <span class="sr-only">Toggle mobile menu</span>
                        <i class="fal fa-bars"></i>
                    </button>
                    <a href="{{ route('backoffice.registrasi.index') }}" class="btn btn-sm btn-primary-color ls-0">
						<span>Buat Janji Temu</span>
					</a>
                </div>
            </div>
        </header>
		<!------------------------------------------------
		navigation - end
		------------------------------------------------>
		<main class="main">
			<!------------------------------------------------
			hero slider - start
			------------------------------------------------>
			<div class="intro-slider intro-slider-1 owl-carousel owl-theme owl-nav-inside owl-light slide-animate mb-0" data-toggle="owl" data-owl-options='{
					"dots": false,
					"nav": false,
					"responsive": {
						"1200": {
							"nav": true
						}
					}
				}'>
				<!--
					background image is added through css and can be modified in the _sections.scss file
					the image is added to the .bg-section-1 class.
				-->
				<div class="banner intro-slide bg-section bg-section-1">
					<div class="container">
						<div class="banner-content">
							<h1 class="banner-title">
								Doctors who treat with care.
							</h1>
							<p class="banner-info">
									Our skilled doctors have tremendous experience with wide
									range of diseases to serve the needs of our patients.</p>
							<div class="banner-actions">
								<a href="{{ route('backoffice.registrasi.index') }}" class="btn btn-secondary-color">
									<span>Buat Janji Temu</span>
								</a>
							</div>
						</div>
						<div class="foreground-img">
							<img src="{{ asset('assets/landing/images/demos/demo-1/banner/banner-hero-1-fore.png1') }}" alt="Banner-slide">
						</div>
					</div>
				</div>
				<!--
					background image is added through css and can be modified in the _sections.scss file
					the image is added to the .bg-section-2 class.
				-->
				<div class="banner intro-slide bg-section bg-section-2">
					<div class="container">
						<div class="banner-content">
							<h1 class="banner-title">
								Doctors who treat with care.
							</h1>
							<p class="banner-info">
									Our skilled doctors have tremendous experience with wide
									range of diseases to serve the needs of our patients.</p>
							<div class="banner-actions">
								<a href="{{ route('backoffice.registrasi.index') }}" class="btn btn-secondary-color">
									<span>Buat Janji Temu</span>
								</a>
							</div>
						</div>
						<div class="foreground-img">
							<img src="{{ asset('assets/landing/images/demos/demo-1/banner/banner-hero-2-fore.png') }}" alt="Banner-slide">
						</div>
					</div>
				</div>
			</div>
			<!------------------------------------------------
			hero slider - end
			------------------------------------------------>

			<!------------------------------------------------
			types section - start
			------------------------------------------------>
			<!--
				background image is added through css and can be modified in the _sections.scss file
				the image is added to the .bg-section-3 class.
			-->
			<div class="type-section type-section-margin-bottom bg-section bg-section-3">
				<div class="container-wrapper">
					<div class="container position-relative">
						<div class="row">
							<div class="col-lg-12 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
								<div class="banner-content">
									<div class="banner-content-wrapper">
										<div class="banner-heading">
											<h2 class="banner-title">
												Kami memberikan perawatan berkualitas yang memperlakukan semua orang.
											</h2>
											<p class="banner-info">Kami memberikan perawatan primer saat Anda membutuhkannya, dipersonalisasi dan perawatan kesehatan berkualitas tinggi dengan berbicara dengan dokter medis terkemuka.</p>
										</div>
									</div>
									<div class="icon-boxes">
										<div class="icon-box-wrapper">
											<div class="icon-box icon-box-1 text-center">
												<figure>
													<i class="fal fa-user-circle"></i>
												</figure>
												<div class="icon-box-content">
													<h4 class="box-title">Pribadi</h4>
												</div>
											</div>
										</div>
										<div class="icon-box-wrapper">
											<div class="icon-box icon-box-1 text-center">
												<figure>
													<i class="fal fa-baby-carriage"></i>
												</figure>
												<div class="icon-box-content">
													<h4 class="box-title">Anak</h4>
												</div>
											</div>
										</div>
										<div class="icon-box-wrapper">
											<div class="icon-box icon-box-1 text-center">
												<figure>
													<i class="fal fa-users"></i>
												</figure>
												<div class="icon-box-content">
													<h4 class="box-title">Keluarga</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-rating">
							<p class="card-info ls-0">
								Lebih dari 400.000 pasien dirawat dan dirawat.
							</p>
						</div>
					</div>
				</div>
				<div class="foreground-img">
					<img src="{{ asset('assets/landing/images/demos/demo-1/banner/banner-big-1-fore.png') }}" alt="image">
				</div>
            </div>
			<!------------------------------------------------
			types section - end
			------------------------------------------------>
			<!------------------------------------------------
			image box section - start
			------------------------------------------------>
			<div class="container image-box-section">
				<h2 class="ls-n-20 text-center section-heading">Bagaimana cara kerja program kami?</h2>
				<div class="row d-flex justify-content-center">
					<div class="image-box image-over col-lg-4 col-md-8 col-sm-8 col-10">
						<figure>
							<img src="{{ asset('assets/landing/images/demos/demo-3/img-box/img3-1.png') }}" alt="Image-over" width="298" height="461">
						</figure>
						<div class="box-content">
							<h4 class="box-title">Dokter Teratas</h4>
							<p class="box-desc">
								Semua dokter kami sangat terampil dan memiliki minimal
								Pengalaman 15 tahun di institusi kesehatan terkemuka di Indonesia.
							</p>
						</div>
					</div>
					<div class="image-box image-over col-lg-4 col-md-8 col-sm-8 col-12">
						<figure>
							<img src="{{ asset('assets/landing/images/demos/demo-3/img-box/img3-2.png') }}" alt="Image-over" width="259" height="424">
						</figure>
						<div class="box-content">
							<h4 class="box-title">Janji Temu</h4>
							<p class="box-desc">
								Pesan janji temu untuk obrolan video dengan dokter Anda
								pilihan dari kemudahan di rumah menggunakan smartphone.
							</p>
						</div>
					</div>
					<div class="image-box image-over col-lg-4 col-md-8 col-sm-8 col-12">
						<figure>
							<img src="{{ asset('assets/landing/images/demos/demo-3/img-box/img3-3.png') }}" alt="Image-over" width="325" height="461">
						</figure>
						<div class="box-content">
							<h4 class="box-title">Terjangkau</h4>
							<p class="box-desc">
								Paket harga kami cukup terjangkau dan Anda tidak perlu melakukannya
									menunggu untuk menemui dokter dalam waktu yang mendesak.
							</p>
						</div>
					</div>
				</div>

			</div>
			<!------------------------------------------------
			image box section - end
			------------------------------------------------>
			<!------------------------------------------------
			type section - start
			------------------------------------------------>


			<!------------------------------------------------
			cta section - start
			------------------------------------------------>
			<!--
				background image is added through css and can be modified in the _sections.scss file
				the image is added to the .bg-section-5 class.
			-->
			<div class="banner banner-simple cta-section cta-section-1 bg-section bg-section-5">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
							<div class="banner-content">
								<div class="banner-heading">
									<h2 class="banner-title">Jangan tunda lagi cek kesehatan Anda dan orang yang Anda sayangi.</h2>
								</div>
								<div class="banner-actions">
									<a href="{{ route('backoffice.registrasi.index') }}" class="btn btn-secondary-color">
									<span>Buat Janji Temu</span>
								</a>

								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="foreground-img">
					<img src="{{ asset('assets/landing/images/demos/demo-1/banner/banner-cta-fore.png') }}" alt="image">
				</div>
			</div>
			<!------------------------------------------------
			cta section - end
			------------------------------------------------>
		</main>
		<!------------------------------------------------
		footer - start
		------------------------------------------------>
		<footer class="footer bg-primary-color">
			<div class="container">
				<div class="footer-top">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="col-lg-6 col-sm-7 col-10">
							<a href="index.html" class="logo">
								<img src="{{ asset('assets/landing/images/logo-sm.png') }}" alt="Caremed Logo" width="185" height="48">
							</a>
						</div>
						<div class="col-lg-6 col-sm-7 col-10 d-lg-flex justify-content-lg-end">
							<div class="social-links">
								<a href="#" class="social-link"><i class="fab fa-twitter"></i><span>Twitter</span></a>
								<a href="#" class="social-link"><i class="fab fa-facebook"></i><span>Facebook</span></a>
								<a href="#" class="social-link"><i class="fab fa-youtube"></i><span>Youtube</span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-middle">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="col-lg-3 col-sm-7 col-10">
								<div class="info-box">
									<h6 class="info-title">Company</h6>
									<ul class="info-list">
										<li><a href="#" class="info-link">About</a></li>
										<li><a href="#" class="info-link">Our Doctors</a></li>
										<li><a href="#" class="info-link">Latest Blog</a></li>
										<li><a href="#" class="info-link">Careers</a></li>
										<li><a href="#" class="info-link">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-sm-7 col-10">
								<div class="info-box">
									<h6 class="info-title">Support</h6>
									<ul class="info-list">
										<li><a href="#" class="info-link">Reviews</a></li>
										<li><a href="#" class="info-link">FAQs</a></li>
										<li><a href="#" class="info-link">Help Center</a></li>
										<li><a href="#" class="info-link">Doctors</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-sm-7 col-10">
								<div class="info-box">
									<h6 class="info-title">Legal</h6>
									<ul class="info-list">
										<li><a href="#" class="info-link">Term of use</a></li>
										<li><a href="#" class="info-link">Code of Conduct</a></li>
										<li><a href="#" class="info-link">Privacy Policy</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-sm-7 col-10">
								<div class="info-box">
									<h6 class="info-title">Company</h6>
									<form class="input-group input-footer">
										<input type="email" class="form-control" placeholder="Email address" required>
										<button type="submit" class="form-action"><i class="fas fa-check-circle"></i></button>
									</form>
									<p>Unsubscribe anytime.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="row d-flex justify-content-center">
						<div class="col-lg-12 col-sm-7 col-10">
							<p>© GFXPARTNER</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!------------------------------------------------
		footer - end
		------------------------------------------------>
	</div>
	<button id="scroll-top" title="Back to Top"><i class="fal fa-angle-up"></i></button>



    <div class="mobile-menu-overlay"></div>

	<div class="mobile-menu-container mobile-menu-light">
		<div class="mobile-menu-wrapper">
			<span class="mobile-menu-close"><i class="fal fa-times"></i></span>


			<nav class="mobile-nav mt-3">
				<ul class="mobile-menu">

					<li>
						<a href="#" class="sf-with-ul">Halaman Masuk</a>
						<ul>
							<li><a href="{{ route('login') }}">Masuk</a></li>
							<li><a href="{{ route('register') }}">Mendaftar</a></li>
						</ul>
					</li>
				</ul>
			</nav>

		</div>
	</div>


	<!-- Plugins JS File -->
	<script src="{{ asset('assets/landing/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/landing/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('assets/landing/js/plugins/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('assets/landing/js/plugins/datepicker.min.js') }}"></script>
	<script src="{{ asset('assets/landing/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/landing/js/plugins/isotope.pkgd.min.js') }}"></script>

	<!-- Main JS File -->
	<script src="{{ asset('assets/landing/js/main.min.js') }}"></script>

</body>
</html>
