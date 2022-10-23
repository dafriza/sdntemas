<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">

<head>
	<?= $this->load->view('Components/Link', '', TRUE); ?>
	<title>
		<?= $title; ?>
	</title>
</head>

<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<?= $this->load->view('Components/Navbar', '', TRUE); ?>

	<div class="hero">
		<div class="hero-slide">
			{image}
			<div class="img overlay" style="background-image: url({source_img})"></div>
			{/image}
		</div>

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center">
					<h1 class="heading" data-aos="fade-up">
						SDN TEMAS 1 BATU
					</h1>
				</div>
			</div>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-6">
					<h2 class="font-weight-bold text-primary heading" data-aos="fade-up" data-aos-delay="100">
						Berita Terkini
					</h2>
				</div>
				<div class="col-lg-6 text-lg-end">
					<p>
						<a href="<?= base_url('news?per_page=1'); ?>" target="_blank" class="btn btn-primary text-white py-3p px-4" data-aos="fade-up" data-aos-delay="100">View all news</a>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="property-slider-wrap">
						<div class="property-slider">
							<?php
							foreach ($news as $key => $val) : ?>
								<div class="property-item">
									<a href="property-single.html" class="img">
										<img src="<?= $val['news_image']; ?>" alt="<?= $val['news_title'];?>" class="img-fluid" />
									</a>
									<div class="property-content">
										<!-- <div class="price mb-2"><span>$1,291,000</span></div> -->
										<div>
											<span class="d-block mb-2 text-black-50"><?= date('d-M-Y', strtotime($val['created_at'])) ?></span>
											<span class="city d-block mb-3"><?= $val['news_title']; ?></span>

											<div class="specs d-flex mb-4">
												<span class="d-block d-flex align-items-center me-3">
													<span class="icon-user me-2"></span>
													<span class="caption">Writer by <?= $val['news_writer']; ?></span>
												</span>
												<!-- <span class="d-block d-flex align-items-center">
													<span class="icon-bath me-2"></span>
													<span class="caption">2 baths</span>
												</span> -->
											</div>
											<a href="<?= base_url('/news/detail/' . $val['id']); ?>" class="btn btn-primary py-2 px-3">See details</a>
										</div>
									</div>
								</div>

							<?php
							endforeach; ?>
							<!-- .item -->

							<!-- .item -->
						</div>

						<div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
							<span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
							<span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="features-1">
		<div class="container">
			<div class="row">
				<h4 class="mb-5 mt-3" data-aos="fade-up" data-aos-delay="300">Ekstrakurikuler</h4>
				<?php foreach ($extras as $key => $val) : ?>
					<div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
						<div class="box-feature">
							<span class="<?= $val['extra_icon']; ?>" style="font-size:4rem; color:#00204a"></span>
							<h3 class="mb-3"><?= $val['extra_name']; ?></h3>
							<p>
								<?= $val['extra_caption']; ?>
							</p>
							<p><a href="<?= base_url('extra/detail/' . $val['id']); ?>" class="learn-more">Learn More</a></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="row">
				<div class="col"></div>
				<div class="col mt-4 mb-4" data-aos="fade-up" data-aos-delay="100"><a href="<?= base_url('extra/'); ?>" class="btn btn-primary" style="background-color: #00204a;">See All</a></div>
				<div class="col"></div>
			</div>
		</div>
	</section>

	<div class="section sec-testimonials">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-md-6">
					<h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
						Alumni
					</h2>
				</div>
				<div class="col-md-6 text-md-end">
					<div id="testimonial-nav">
						<span class="prev" data-controls="prev">Prev</span>

						<span class="next" data-controls="next">Next</span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4"></div>
			</div>
			<div class="testimonial-slider-wrap">
				<div class="testimonial-slider">
					{alumni}
					<div class="item text-center">
						<div class="testimonial">
							<img src="{alumni_image}" alt="{alumni_name}" class="img-fluid rounded-circle w-25 mb-4" />
							<div class="rate">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
							</div>
							<h3 class="h5 text-primary mb-4">{alumni_name}</h3>
							<blockquote>
								<p>
									&ldquo;{alumni_testimoni}&rdquo;
								</p>
							</blockquote>
							<p class="text-black-50">{alumni_instansi}</p>
						</div>
					</div>
					{/alumni}
				</div>
			</div>
		</div>
	</div>

	<section class="features-1">
		<div class="container">
			<div class="row">
				<h4 class="mb-5 mt-3" data-aos="fade-up" data-aos-delay="300">Penghargaan</h4>
				<?php foreach ($achievement as $key => $val) : ?>
					<div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
						<div class="box-feature">
							<span class="<?= $val['achievement_icon']; ?>" style="font-size:4rem; color:#00204a"></span>
							<h3 class="mb-3"><?= $val['achievement_name']; ?></h3>
							<p>
								<?= $val['achievement_caption']; ?>
							</p>
							<p><a href="<?= base_url('achievement/detail/' . $val['id']); ?>" class="learn-more">Learn More</a></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="row">
				<div class="col"></div>
				<div class="col mt-4 mb-4" data-aos="fade-up" data-aos-delay="100"><a href="<?= base_url('achievement/'); ?>" class="btn btn-primary" style="background-color: #00204a;">See All</a></div>
				<div class="col"></div>
			</div>
		</div>
	</section>

	<div class="section section-4 bg-light">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-5">
					<h2 class="font-weight-bold heading text-primary mb-4">
						Cari tahu lebih lanjut tentang SDN Temas 01 Batu
					</h2>
					<p class="text-black-50">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
						enim pariatur similique debitis vel nisi qui reprehenderit.
					</p>
				</div>
			</div>
			<div class="row justify-content-between mb-5">
				<div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
					<div class="img-about dots">
						<img src="<?= $image[1]['source_img'] ?>" alt="<?= $image[1]['title_img'];?>" class="img-fluid" />
					</div>
				</div>
				<div class="col-lg-4">
					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-home2"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Go Green School </h3>
							<p class="text-black-50">
								Lorem ipsum dolor sit amet consectetur adipisicing elit.
								Nostrum iste.
							</p>
						</div>
					</div>

					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-person"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Sekolah Adiwiyata</h3>
							<p class="text-black-50">
								Lorem ipsum dolor sit amet consectetur adipisicing elit.
								Nostrum iste.
							</p>
						</div>
					</div>

					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-security"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Ciluba</h3>
							<p class="text-black-50">
								Lorem ipsum dolor sit amet consectetur adipisicing elit.
								Nostrum iste.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="row section-counter mt-5">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">3298</span></span>
						<span class="caption text-black-50"># of Buy Properties</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">2181</span></span>
						<span class="caption text-black-50"># of Sell Properties</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">9316</span></span>
						<span class="caption text-black-50"># of All Properties</span>
					</div>
				</div>
				<div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
					<div class="counter-wrap mb-5 mb-lg-0">
						<span class="number"><span class="countup text-primary">7191</span></span>
						<span class="caption text-black-50"># of Agents</span>
					</div>
				</div>
			</div> -->
		</div>
	</div>

	<!-- <div class="section">
		<div class="row justify-content-center footer-cta" data-aos="fade-up">
			<div class="col-lg-7 mx-auto text-center">
				<h2 class="mb-4">Be a part of our growing real state agents</h2>
				<p>
					<a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">Apply for Real Estate agent</a>
				</p>
			</div>
		</div>
	</div> -->

	<div class="section section-5 bg-light">
		<div class="container">
			<div class="row justify-content-center text-center mb-5">
				<div class="col-lg-6 mb-5">
					<h2 class="font-weight-bold heading text-primary mb-4">
						Guru
					</h2>
				</div>
			</div>
			<div class="row">
				<?php foreach ($teacher as $key => $val) : ?>
					<div class="col-sm-12 col-md-12 col-lg-4 mb-5 mb-lg-0">
						<div class="h-100 person">
							<img src="<?= $val['teacher_image']; ?>" alt="<?= $val['teacher_name'];?>" class="img-fluid" style="width: 140px;" />
							<div class="person-contents">
								<h2 class="mb-0"><a href="#"><?= $val['teacher_name']; ?></a></h2>
								<br>

								<p>
									<?= $val['teacher_caption']; ?>
								</p>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="row">
				<div class="col"></div>
				<div class="col mt-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="100"><a href="<?= base_url('teacher'); ?>" class="btn btn-primary" style="background-color: #00204a;">See All</a></div>
				<div class="col"></div>
			</div>
		</div>
	</div>

	<?= $this->load->view('Components/Footer', '', TRUE); ?>
	<!-- /.site-footer -->

	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>

	<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
	<script src="<?= base_url('assets/js/tiny-slider.js'); ?>"></script>
	<script src="<?= base_url('assets/js/aos.js'); ?>"></script>
	<script src="<?= base_url('assets/js/navbar.js'); ?>"></script>
	<script src="<?= base_url('assets/js/counter.js'); ?>"></script>
	<script src="<?= base_url('assets/js/custom.js'); ?>"></script>
</body>

</html>
