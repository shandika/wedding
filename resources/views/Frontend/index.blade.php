<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Wedding &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet'
		type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('Frontend/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('Frontend/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('Frontend/css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('Frontend/css/magnific-popup.css') }}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('Frontend/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('Frontend/css/owl.theme.default.min.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('Frontend/css/style.css') }}">
	<style>
		#scroll {
			height: 700px;
			overflow-y:scroll;
			overflow-x: hidden;
			padding: 10px;
		}

        .form-check-label {
			color:white;
		}
	</style>

	<!-- Modernizr JS -->
	<script src="{{ asset('Frontend/js/modernizr-2.6.2.min.js') }}"></script>
    <script
      src="https://kit.fontawesome.com/2828f7885a.js"
      integrity="sha384-WAsFbnLEQcpCk8lM1UTWesAf5rGTCvb2Y+8LvyjAAcxK1c3s5c0L+SYOgxvc6PWG"
      crossorigin="anonymous"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="fh5co-loader"></div>

	<div id="page">
		<!-- Header -->
		<div id="buka">
			<header id="fh5co-header" class="fh5co-cover" role="banner"
				style="background-image:url({{ asset('Frontend/images/img_bg_2.jpg') }});" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<div class="display-t">
								<div class="display-tc animate-box" data-animate-effect="fadeIn">
									<h2>Undangan Pernikahan</h2>
									<h1>Joefrey &amp; Sheila</h1>
									<div class="simply-countdown simply-countdown-one"></div>
									<button onclick="undangan()" class="btn btn-default btn-sm">Buka Undangan</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>
        <!-- End Header -->

		<div id="undangan" style="display: none;">
        <!-- Couple -->
			<div id="fh5co-couple">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
							<img src="{{ asset('Frontend/images/bismillah.png') }}" alt="Bismillahirrahmaanirrahiim" class="img-responsive">
							<p>Assalamu'alaikum Warahmatullahi Wabarakatuh.</p>
							<p>Dengan memohon rahmat dan ridha Allah swt,</p>
							<p>Kami bermaksud mengundang Bapak/Ibu/Saudara/Saudari pada acara pernikahan kami</p>
						</div>
					</div>
					<div class="couple-wrap animate-box">
						<div class="couple-half">
							<div class="groom">
								<img src="{{ asset('Frontend/images/groom.jpg') }}" alt="groom" class="img-responsive">
							</div>
							<div class="desc-groom">
								<h3>Joefrey Mahusay</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and
									Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
							</div>
						</div>
						<p class="heart text-center"><i class="icon-heart2"></i></p>
						<div class="couple-half">
							<div class="bride">
								<img src="{{ asset('Frontend/images/bride.jpg') }}" alt="groom" class="img-responsive">
							</div>
							<div class="desc-bride">
								<h3>Sheila Mahusay</h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and
									Consonantia, there live the blind texts. Separated they live in Bookmarksgrove</p>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Couple End -->

            <!-- Event -->
			<div id="fh5co-event" class="fh5co-bg" style="background-image:url({{ asset('Frontend/images/img_bg_3.jpg') }});">
				<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
							<h2>Acara</h2>
                            <div class="main-content has-text-centered" data-aos="fade-up" data-aos-easing="linear">
                                <a href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=NGgzdW00NG84dXFwMzcwNXYxbGliNGxzaWggZGFlbmdkb2FuZ0Bt&amp;tmsrc=daengdoang%40gmail.com"
                                    target="_blank" class="btn has-tooltip btn-default"
                                    data-tooltip="Add to Calendar" target="_blank" data-aos="zoom-in">
                                    <i class="far fa-calendar-plus"></i>
                                    &nbsp;&nbsp;Ingatkan Saya
                                </a>
                            </div>
						</div>
					</div>
					<div class="row">
						<div class="display-t">
							<div class="display-tc">
								<div class="col-md-10 col-md-offset-1">
									<div class="col-md-6 col-sm-6 text-center">
										<div class="event-wrap animate-box">
											<h3>Akad Nikah</h3>
											<div class="event-col">
												<i class="icon-clock"></i>
												<span>09.00 WIB</span>
												<span>10.00 WIB</span>
											</div>
											<div class="event-col">
												<i class="icon-calendar"></i>
												<span>Minggu,</span>
												<span>20 Juni 2022</span>
											</div>
											<iframe
												src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1280267408406!2d106.9691569150978!3d-6.246854895478259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d5988a190d9%3A0x22b6a052b0a6a5f3!2sRM.%20Pondok%20Kenanga!5e0!3m2!1sen!2sid!4v1579433583123!5m2!1sen!2sid"
												width="100%" height="250" frameborder="0" style="border:0;"
												allowfullscreen=""></iframe>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 text-center">
										<div class="event-wrap animate-box">
											<h3>Resepsi</h3>
											<div class="event-col">
												<i class="icon-clock"></i>
												<span>10.00 WIB</span>
												<span>16.00 WIB</span>
											</div>
											<div class="event-col">
												<i class="icon-calendar"></i>
												<span>Minggu</span>
												<span>20 Juni 2022</span>
											</div>
											<iframe
												src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1280267408406!2d106.9691569150978!3d-6.246854895478259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d5988a190d9%3A0x22b6a052b0a6a5f3!2sRM.%20Pondok%20Kenanga!5e0!3m2!1sen!2sid!4v1579433583123!5m2!1sen!2sid"
												width="100%" height="250" frameborder="0" style="border:0;"
												allowfullscreen=""></iframe>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Event End -->

            <!-- Story -->
			<div id="fh5co-couple-story">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
							<h2>Tentang Kedua Mempelai</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-md-offset-0">
							<ul class="timeline animate-box">
								<li class="animate-box">
									<div class="timeline-badge" style="background-image:url({{ asset('Frontend/images/couple-1.jpg') }});">
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h3 class="timeline-title">First We Meet</h3>
											<span class="date">December 25, 2015</span>
										</div>
										<div class="timeline-body">
											<p>Far far away, behind the word mountains, far from the countries Vokalia
												and Consonantia, there live the blind texts. Separated they live in
												Bookmarksgrove right at the coast of the Semantics, a large language
												ocean.</p>
										</div>
									</div>
								</li>
								<li class="timeline-inverted animate-box">
									<div class="timeline-badge" style="background-image:url({{ asset('Frontend/images/couple-2.jpg') }});">
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h3 class="timeline-title">First Date</h3>
											<span class="date">December 28, 2015</span>
										</div>
										<div class="timeline-body">
											<p>Far far away, behind the word mountains, far from the countries Vokalia
												and Consonantia, there live the blind texts. Separated they live in
												Bookmarksgrove right at the coast of the Semantics, a large language
												ocean.</p>
										</div>
									</div>
								</li>
								<li class="animate-box">
									<div class="timeline-badge" style="background-image:url({{ asset('Frontend/images/couple-3.jpg') }});">
									</div>
									<div class="timeline-panel">
										<div class="timeline-heading">
											<h3 class="timeline-title">In A Relationship</h3>
											<span class="date">January 1, 2016</span>
										</div>
										<div class="timeline-body">
											<p>Far far away, behind the word mountains, far from the countries Vokalia
												and Consonantia, there live the blind texts. Separated they live in
												Bookmarksgrove right at the coast of the Semantics, a large language
												ocean.</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
            <!-- Story End -->

            <!-- Galerry -->
			<div id="fh5co-gallery" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
							<h2>Galeri</h2>
						</div>
					</div>
					<div class="row row-bottom-padded-md">
						<div class="col-md-12">
							<ul id="fh5co-gallery-list">

								<li class="one-third animate-box" data-animate-effect="fadeIn"
									style="background-image: url({{ asset('Frontend/images/gallery-1.jpg') }}); ">
									<a href="images/gallery-1.jpg">
										<div class="case-studies-summary">
											<span>14 Photos</span>
											<h2>Two Glas of Juice</h2>
										</div>
									</a>
								</li>
								<li class="one-third animate-box" data-animate-effect="fadeIn"
									style="background-image: url({{ asset('Frontend/images/gallery-2.jpg') }}); ">
									<a href="#" class="color-2">
										<div class="case-studies-summary">
											<span>30 Photos</span>
											<h2>Timer starts now!</h2>
										</div>
									</a>
								</li>


								<li class="one-third animate-box" data-animate-effect="fadeIn"
									style="background-image: url({{ asset('Frontend/images/gallery-3.jpg') }}); ">
									<a href="#" class="color-3">
										<div class="case-studies-summary">
											<span>90 Photos</span>
											<h2>Beautiful sunset</h2>
										</div>
									</a>
								</li>
								<li class="one-third animate-box" data-animate-effect="fadeIn"
									style="background-image: url({{ asset('Frontend/images/gallery-4.jpg') }}); ">
									<a href="#" class="color-4">
										<div class="case-studies-summary">
											<span>12 Photos</span>
											<h2>Company's Conference Room</h2>
										</div>
									</a>
								</li>

								<li class="one-third animate-box" data-animate-effect="fadeIn"
									style="background-image: url({{ asset('Frontend/images/gallery-5.jpg') }}); ">
									<a href="#" class="color-3">
										<div class="case-studies-summary">
											<span>50 Photos</span>
											<h2>Useful baskets</h2>
										</div>
									</a>
								</li>
								<li class="one-third animate-box" data-animate-effect="fadeIn"
									style="background-image: url({{ asset('Frontend/images/gallery-6.jpg') }}); ">
									<a href="#" class="color-4">
										<div class="case-studies-summary">
											<span>45 Photos</span>
											<h2>Skater man in the road</h2>
										</div>
									</a>
								</li>

								<li class="one-third animate-box" data-animate-effect="fadeIn"
									style="background-image: url({{ asset('Frontend/images/gallery-7.jpg') }}); ">
									<a href="#" class="color-4">
										<div class="case-studies-summary">
											<span>35 Photos</span>
											<h2>Two Glas of Juice</h2>
										</div>
									</a>
								</li>

								<li class="one-third animate-box" data-animate-effect="fadeIn"
									style="background-image: url({{ asset('Frontend/images/gallery-8.jpg') }}); ">
									<a href="#" class="color-5">
										<div class="case-studies-summary">
											<span>90 Photos</span>
											<h2>Timer starts now!</h2>
										</div>
									</a>
								</li>
								<li class="one-third animate-box" data-animate-effect="fadeIn"
									style="background-image: url({{ asset('Frontend/images/gallery-9.jpg') }}); ">
									<a href="#" class="color-6">
										<div class="case-studies-summary">
											<span>56 Photos</span>
											<h2>Beautiful sunset</h2>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
            <!-- Gallery End -->

            <!-- Testimoni -->
			<div id="fh5co-testimonial">
				<div class="container">
					<div class="row">
						<div class="row animate-box">
							<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
								<h2>Ucapan</h2>
							</div>
						</div>
						<div id="scroll">
							<div class="row">
								<div class="col-md-12 animate-box">
									<div class="card-columns">

										<div class="card mb-4">
											<div class="card-body">
												<blockquote class=" ">

													<i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3"
														aria-hidden="true"></i>
													<p class=" m-0 text-muted ">
														Quisque mauris augue, molestie tincidunt condimentum vitae,
														gravida a libero. Aenean sit amet felis dolor, in sagittis nisi.
													</p>
													<footer class="blockquote-footer small p-1">
														<span class="small">John Doe
															<cite class="font-weight-bold">COMPANY NAME</cite>
														</span>
													</footer>

												</blockquote>
											</div>
										</div>
										<div class="card mb-4">
											<div class="card-body">
												<blockquote class=" ">

													<i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3"
														aria-hidden="true"></i>
													<p class=" m-0 text-muted ">
														Quisque mauris augue, molestie tincidunt condimentum vitae,
														gravida a libero. Etiam sed iaculis libero, at euismod massain
														venenatis ligula. </p>
													<footer class="blockquote-footer small p-1">
														<span class="small">John Doe
															<cite class="font-weight-bold">COMPANY NAME</cite>
														</span>
													</footer>

												</blockquote>
											</div>
										</div>
										<div class="card mb-4">
											<div class="card-body">
												<blockquote class=" ">

													<i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3"
														aria-hidden="true"></i>
													<p class=" m-0 text-muted ">
														Quisque mauris augue, molestie tincidunt condimentum vitae,
														gravida a libero. Aenean sit amet felis dolor, in sagittis nisi.
														Etiam sed iaculis libero, at euismod massain venenatis ligula.
													</p>
													<footer class="blockquote-footer small p-1">
														<span class="small">John Doe
															<cite class="font-weight-bold">COMPANY NAME</cite>
														</span>
													</footer>

												</blockquote>
											</div>
										</div>
										<div class="card mb-4">
											<div class="card-body">
												<blockquote class=" ">

													<i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3"
														aria-hidden="true"></i>
													<p class=" m-0 text-muted ">
														Quisque mauris augue, molestie tincidunt condimentum vitae,
														gravida a libero. Aenean sit amet felis dolor, in sagittis nisi.
														Etiam sed iaculis libero, at euismod massain venenatis ligula.
													</p>
													<footer class="blockquote-footer small p-1">
														<span class="small">John Doe
															<cite class="font-weight-bold">COMPANY NAME</cite>
														</span>
													</footer>

												</blockquote>
											</div>
										</div>
										<div class="card mb-4">
											<div class="card-body">
												<blockquote class=" ">

													<i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3"
														aria-hidden="true"></i>
													<p class=" m-0 text-muted ">

														Etiam sed iaculis libero, at euismod massain venenatis ligula.
													</p>
													<footer class="blockquote-footer small p-1">
														<span class="small">John Doe
															<cite class="font-weight-bold">COMPANY NAME</cite>
														</span>
													</footer>

												</blockquote>
											</div>
										</div>
										<div class="card mb-4">
											<div class="card-body">
												<blockquote class=" ">

													<i class="fa fa-quote-right fa-2x text-muted pull-right mt-3 mb-3"
														aria-hidden="true"></i>
													<p class=" m-0 text-muted ">
														Quisque mauris augue, molestie tincidunt condimentum vitae,
														gravida a libero. Aenean sit amet felis dolor, in sagittis nisi.
														Etiam sed iaculis libero, at euismod massain venenatis ligula.
													</p>
													<footer class="blockquote-footer small p-1">
														<span class="small">John Doe
															<cite class="font-weight-bold">COMPANY NAME</cite>
														</span>
													</footer>
												</blockquote>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            <!-- Testimoni End -->

            <!-- RSVP -->
			<div id="fh5co-started" class="fh5co-bg" style="background-image:url({{ asset('Frontend/images/img_bg_4.jpg') }});">
				<div class="overlay"></div>
				<div class="container">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Konfirmasi Kehadiran</h2>
							<p>
								Merupakan suatu kehormatan dan kebahagiaan bagi kami
								<br>
								apabila Bapak/Ibu/Saudara/Saudari berkenan hadir
								memberikan doa restu.
								<br>
								<br>
								Jika bisa hadir kami tunggu konfirmasinya,
								<br>
								Informasi: Di meja penerima tamu akan kami sediakan hand sanitizer dan pemeriksaan suhu
								tubuh.
								<br>
								<br>
								Jika tidak memungkinkan untuk hadir di pernikahan kami,tidak mengapa,
								<br>
								semoga bisa berjumpa di lain kesempatan
								<br>
								<br>
								Stay safe & jaga kesehatan ya :)
							</p>
						</div>
					</div>
					<div class="row animate-box">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-inline">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="name" class="sr-only">Nama</label>
										<input type="name" class="form-control" name="nama" id="nama" placeholder="Isi Nama">
									</div>
								</div>
                                <div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="alamat" class="sr-only">Partner</label>
										<input type="number" class="form-control" name="partner" id="partner" placeholder="Partner">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="alamat" class="sr-only">Alamat</label>
										<textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat"></textarea>
									</div>
								</div>
                                <div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="alamat" class="sr-only">Pesan</label>
										<textarea class="form-control" name="pesan" id="pesan" placeholder="Berikan Doa untuk Kedua Mempelai"></textarea>
									</div>
								</div>
                                <div class="col-md-6 col-sm-6">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="konfirmasi" id="konfirmasi" value="Iya, Saya Akan Datang"> 
                                        <label class="form-check-label" for="konfirmasi" style="">Iya, Saya Akan Datang</label>
									</div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="konfirmasi" id="konfirmasi2" value="Saya Masih Ragu"> 
                                        <label class="form-check-label" for="konfirmasi2">Saya Masih Ragu</label>
									</div>
                                    <div class="form-check">
                                    <input class="form-check-input" type="radio" name="konfirmasi" id="konfirmasi3" value="Maaf, Saya Tidak Bisa Datang"> 
                                        <label class="form-check-label" for="konfirmasi3">Maaf, Saya Tidak Bisa Datang</label>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<button type="submit" class="btn btn-default btn-block">Kirim</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
            <!-- RSVP End -->

            <!-- Footer -->
			<footer id="fh5co-footer" role="contentinfo">
				<div class="container">

					<div class="row copyright">
						<div class="col-md-12 text-center">
							<p>
								<small class="block">&copy; 2022 <a href="https://instagram.com/bumicode"
									target="_blank">Bumi Code.</a> All Rights Reserved.</small>
								<small class="block">Designed by <a href="http://freehtml5.co/"
										target="_blank">FREEHTML5.co</a> Demo Images: <a href="http://unsplash.co/"
										target="_blank">Unsplash</a></small>
							</p>
							<p>
								<ul class="fh5co-social-icons">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-linkedin"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
								</ul>
							</p>
						</div>
					</div>

				</div>
			</footer>
            <!-- Footer End -->
		</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="{{ asset('Frontend/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('Frontend/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('Frontend/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('Frontend/js/jquery.waypoints.min.js') }}"></script>
	<!-- Carousel -->
	<script src="{{ asset('Frontend/js/owl.carousel.min.js') }}"></script>
	<!-- countTo -->
	<script src="{{ asset('Frontend/js/jquery.countTo.js') }}"></script>

	<!-- Stellar -->
	<script src="{{ asset('Frontend/js/jquery.stellar.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('Frontend/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('Frontend/js/magnific-popup-options.js') }}"></script>

	<!-- // <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/0.0.1/prism.min.js"></script> -->
	<script src="{{ asset('Frontend/js/simplyCountdown.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('Frontend/js/main.js') }}"></script>
   
	<script>
		var d = new Date(new Date().getTime() + 200 * 120 * 120 * 2000);

		// default example
		simplyCountdown('.simply-countdown-one', {
			year: d.getFullYear(),
			month: d.getMonth() + 1,
			day: d.getDate()
		});

		//jQuery example
		$('#simply-countdown-losange').simplyCountdown({
			year: d.getFullYear(),
			month: d.getMonth() + 1,
			day: d.getDate(),
			enableUtc: false
		});
	</script>

	<script>
		function undangan() {
			var kj = document.getElementById('undangan');
			var b = document.getElementById('buka');
			if (kj.style.display === 'none') {
				kj.style.display = 'block';
				b.style.display = 'none';
			} else {
				kj.style.display = 'none';
				b.style.display = 'block';
			}
		}
	</script>

</body>

</html>
