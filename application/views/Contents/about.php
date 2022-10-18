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

	<?= $this->load->view('Components/Bg_Content', array('title' => 'About'), TRUE); ?>

	<div class="section">
		<div class="container">
			<div class="row text-left mb-5">
				<div class="col-12">
					<h2 class="font-weight-bold heading text-primary mb-4">About Us</h2>
				</div>
				<div class="col-lg-6">
					<p class="text-black-50">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
						enim pariatur similique debitis vel nisi qui reprehenderit totam?
						Quod maiores.
					</p>
					<p class="text-black-50">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
						saepe, explicabo nihil. Est, autem error cumque ipsum repellendus
						veniam sed blanditiis unde ullam maxime veritatis perferendis
						cupiditate, at non esse!
					</p>
					<p class="text-black-50">
						Enim, nisi labore exercitationem facere cupiditate nobis quod
						autem veritatis quis minima expedita. Cumque odio illo iusto
						reiciendis, labore impedit omnis, nihil aut atque, facilis
						necessitatibus asperiores porro qui nam.
					</p>
				</div>
				<div class="col-lg-6">
					<p class="text-black-50">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
						saepe, explicabo nihil. Est, autem error cumque ipsum repellendus
						veniam sed blanditiis unde ullam maxime veritatis perferendis
						cupiditate, at non esse!
					</p>
					<p class="text-black-50">
						Enim, nisi labore exercitationem facere cupiditate nobis quod
						autem veritatis quis minima expedita. Cumque odio illo iusto
						reiciendis, labore impedit omnis, nihil aut atque, facilis
						necessitatibus asperiores porro qui nam.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="section pt-0">
		<div class="container">
			<div class="row justify-content-between mb-5">
				<div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
					<div class="img-about dots">
						<img src="<?= $bg_image[0]['source_img'] ?>" alt="Image" class="img-fluid" />
					</div>
				</div>
				<div class="col-lg-4">
					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-home2"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Quality properties</h3>
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
							<h3 class="heading">Top rated agents</h3>
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
							<h3 class="heading">Easy and safe</h3>
							<p class="text-black-50">
								Lorem ipsum dolor sit amet consectetur adipisicing elit.
								Nostrum iste.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section pt-0">
		<div class="container">
			<div class="row justify-content-between mb-5">
				<div class="col-lg-7 mb-5 mb-lg-0">
					<div class="img-about dots">
						<img src="<?= $bg_image[1]['source_img'] ?>" alt="Image" class="img-fluid" />
					</div>
				</div>
				<div class="col-lg-4">
					<div class="d-flex feature-h">
						<span class="wrap-icon me-3">
							<span class="icon-home2"></span>
						</span>
						<div class="feature-text">
							<h3 class="heading">Quality properties</h3>
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
							<h3 class="heading">Top rated agents</h3>
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
							<h3 class="heading">Easy and safe</h3>
							<p class="text-black-50">
								Lorem ipsum dolor sit amet consectetur adipisicing elit.
								Nostrum iste.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section sec-testimonials bg-light">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-md-6">
					<h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">
						The Team
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
					<div class="item">
						<div class="testimonial">
							<img src="<?= base_url('assets/images/person_1-min.jpg') ?>" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
							<h3 class="h5 text-primary">James Smith</h3>
							<p class="text-black-50">Designer, Co-founder</p>

							<p>
								Far far away, behind the word mountains, far from the
								countries Vokalia and Consonantia, there live the blind texts.
								Separated they live in Bookmarksgrove right at the coast of
								the Semantics, a large language ocean.
							</p>

							<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-twitter"></span></a>
								</li>
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-facebook"></span></a>
								</li>
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-linkedin"></span></a>
								</li>
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-instagram"></span></a>
								</li>
							</ul>
						</div>
					</div>

					<div class="item">
						<div class="testimonial">
							<img src="<?= base_url('assets/images/person_2-min.jpg') ?>" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
							<h3 class="h5 text-primary">Carol Houston</h3>
							<p class="text-black-50">Designer, Co-founder</p>

							<p>
								Far far away, behind the word mountains, far from the
								countries Vokalia and Consonantia, there live the blind texts.
								Separated they live in Bookmarksgrove right at the coast of
								the Semantics, a large language ocean.
							</p>

							<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-twitter"></span></a>
								</li>
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-facebook"></span></a>
								</li>
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-linkedin"></span></a>
								</li>
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-instagram"></span></a>
								</li>
							</ul>
						</div>
					</div>

					<div class="item">
						<div class="testimonial">
							<img src="<?= base_url('assets/images/person_3-min.jpg') ?>" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
							<h3 class="h5 text-primary">Synthia Cameron</h3>
							<p class="text-black-50">Designer, Co-founder</p>

							<p>
								Far far away, behind the word mountains, far from the
								countries Vokalia and Consonantia, there live the blind texts.
								Separated they live in Bookmarksgrove right at the coast of
								the Semantics, a large language ocean.
							</p>

							<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-twitter"></span></a>
								</li>
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-facebook"></span></a>
								</li>
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-linkedin"></span></a>
								</li>
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-instagram"></span></a>
								</li>
							</ul>
						</div>
					</div>

					<div class="item">
						<div class="testimonial">
							<img src="<?= base_url('assets/images/person_4.jpg') ?>" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
							<h3 class="h5 text-primary">Davin Smith</h3>
							<p class="text-black-50">Designer, Co-founder</p>

							<p>
								Far far away, behind the word mountains, far from the
								countries Vokalia and Consonantia, there live the blind texts.
								Separated they live in Bookmarksgrove right at the coast of
								the Semantics, a large language ocean.
							</p>

							<ul class="social list-unstyled list-inline dark-hover">
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-twitter"></span></a>
								</li>
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-facebook"></span></a>
								</li>
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-linkedin"></span></a>
								</li>
								<li class="list-inline-item">
									<a href="<?= base_url('assets/#') ?>"><span class="icon-instagram"></span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?= $this->load->view('Components/Footer', '', TRUE); ?>

	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>

	<script src="<?= base_url('assets/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/tiny-slider.js') ?>"></script>
	<script src="<?= base_url('assets/js/aos.js') ?>"></script>
	<script src="<?= base_url('assets/js/navbar.js') ?>"></script>
	<script src="<?= base_url('assets/js/counter.js') ?>"></script>
	<script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>

</html>
